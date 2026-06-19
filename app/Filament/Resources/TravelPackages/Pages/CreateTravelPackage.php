<?php

namespace App\Filament\Resources\TravelPackages\Pages;

use App\Filament\Resources\TravelPackages\TravelPackageResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\QueryException;
use Filament\Notifications\Notification;

class CreateTravelPackage extends CreateRecord
{
    protected static string $resource = TravelPackageResource::class;

    public function create(bool $another = false): void
    {
        try {
            // Jalankan proses insert bawaan Filament
            parent::create($another);
            
        } catch (QueryException $exception) {
            // Cek apakah ini eror nomor 1264 (Out of range / Angka terlalu besar)
            if ($exception->errorInfo[1] === 1264) {
                Notification::make()
                    ->title('Gagal Menyimpan Paket!')
                    ->body('Input nominal pada kolom **Harga** atau **Harga Coret** terlalu besar melebihi batas database.')
                    ->danger() // Warna Merah
                    ->persistent() // Notifikasi tidak akan hilang sampai di-klik silang
                    ->send();
            } else {
                // Jika ada eror database lainnya (misal: duplikat slug, dll)
                Notification::make()
                    ->title('Terjadi Kesalahan Database!')
                    ->body('Pesan Eror: ' . $exception->getMessage())
                    ->danger()
                    ->persistent()
                    ->send();
            }

            // Hentikan proses agar halaman tidak refresh atau crash
            return;
        }
    }
}
