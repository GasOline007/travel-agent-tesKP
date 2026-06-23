<?php

namespace App\Imports;

use App\Models\TravelPackageDetail;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use App\Models\TravelPackage;

class TravelPackageDetailImport implements
    ToCollection,
    WithHeadingRow,
    SkipsOnError
{
    use SkipsErrors;

    public array $importLog = [];

    public function __construct(private int $travelPackageId) {}

    public function headingRow(): int
    {
        return 3; 
    }

    public function collection(Collection $rows): void
    {
        $rows = $rows->filter(function ($row) {
            $jumlah = trim((string) ($row['jumlah_peserta'] ?? ''));
            return $jumlah !== '' && $jumlah !== '0';
        });

        if ($rows->isEmpty()) return;

        $kolomTrip = collect($rows->first()->keys())
            ->filter(fn($key) => strtolower(trim($key)) !== 'jumlah_peserta' && !empty(trim($key)))
            ->values();

        if ($kolomTrip->isEmpty()) return;

        // ✅ Simpan urutan kolom ke tabel travel_packages
        TravelPackage::where('id', $this->travelPackageId)
            ->update(['trip_sequence' => $kolomTrip->toArray()]);

        TravelPackageDetail::where('travel_package_id', $this->travelPackageId)->delete();

        foreach ($rows as $row) {
            $jumlahPeserta = trim((string) ($row['jumlah_peserta'] ?? ''));
            if (empty($jumlahPeserta)) continue;

            $berhasilCount = 0;

            foreach ($kolomTrip as $kolomAsli) {
                $harga = $this->parseHarga($row[$kolomAsli] ?? null);
                if ($harga === null) continue;

                TravelPackageDetail::create([
                    'travel_package_id' => $this->travelPackageId,
                    'participant_count' => $jumlahPeserta,
                    'trip_type'         => trim($kolomAsli),
                    'price'             => $harga,
                ]);

                $berhasilCount++;
            }

            if ($berhasilCount > 0) {
                $this->importLog[] = [
                    'status' => 'berhasil',
                    'pesan'  => "{$jumlahPeserta} — {$berhasilCount} harga disimpan.",
                ];
            }
        }
    }

    // Bersihkan format harga apapun dari Excel
    // Menangani: "6.500.000", "Rp 6500000", "6,500,000", 6500000
    private function parseHarga(mixed $value): ?int
    {
        if ($value === null || trim((string) $value) === '') return null;
        $clean = preg_replace('/[^0-9]/', '', (string) $value);
        return $clean !== '' ? (int) $clean : null;
    }
}