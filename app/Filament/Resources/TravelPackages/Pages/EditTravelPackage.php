<?php

namespace App\Filament\Resources\TravelPackages\Pages;

use App\Filament\Resources\TravelPackages\TravelPackageResource;
use App\Imports\TravelPackageDetailImport;
use Filament\Actions\Action;
use Filament\Actions\DeleteAction;
use Filament\Forms\Components\FileUpload;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class EditTravelPackage extends EditRecord
{
    protected static string $resource = TravelPackageResource::class;

    /**
     * MENANGKAP EROR SAAT TOMBOL 'SAVE' / 'SIMPAN' DIKLIK
     */
    public function save(bool $shouldRedirect = true, bool $shouldSendSavedNotification = true): void
    {
        try {
            // Jalankan proses simpan bawaan Filament
            parent::save($shouldRedirect, $shouldSendSavedNotification);
        } catch (QueryException $exception) {
            // Cek apakah eror kode 1264 (Out of range / Angka terlalu besar)
            if (isset($exception->errorInfo[1]) && $exception->errorInfo[1] === 1264) {
                Notification::make()
                    ->title('Gagal Memperbarui Paket!')
                    ->body('Input nominal pada kolom **Harga** atau **Harga Coret** terlalu besar melebihi batas database.')
                    ->danger()
                    ->persistent()
                    ->send();
            } else {
                // Menangkap eror database lainnya secara dinamis
                Notification::make()
                    ->title('Terjadi Kesalahan Database!')
                    ->body('Pesan Eror: ' . $exception->getMessage())
                    ->danger()
                    ->persistent()
                    ->send();
            }

            // Hentikan proses agar halaman tidak crash/refresh
            return;
        }
    }

    protected function getHeaderActions(): array
    {
        return [
            // ── Tombol Import Harga ──────────────────────────────────
            Action::make('import_harga')
                ->label('Import Harga Peserta')
                ->icon('heroicon-o-arrow-up-tray')
                ->color('info')
                ->form([
                    FileUpload::make('file_excel')
                        ->label('Upload File Excel (.xlsx)')
                        ->disk('public')
                        ->directory('imports-tmp')
                        ->acceptedFileTypes([
                            'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                            'text/csv',
                        ])
                        ->required(),
                ])
                ->action(function (array $data): void {
                    $path = Storage::disk('public')->path($data['file_excel']);

                    $importer = new TravelPackageDetailImport($this->record->id);
                    Excel::import($importer, $path);

                    // ✅ Hapus file temporary setelah selesai diproses
                    Storage::disk('public')->delete($data['file_excel']);

                    $berhasil = collect($importer->importLog)
                        ->where('status', 'berhasil')
                        ->count();

                    Notification::make()
                        ->title("✅ {$berhasil} baris harga berhasil diimport!")
                        ->success()
                        ->send();
                })
                ->modalHeading('Import Harga per Peserta')
                ->modalDescription(
                    'Upload file Excel untuk paket ini. ' .
                        'Download template terlebih dahulu jika belum punya.'
                )
                ->modalSubmitActionLabel('Mulai Import'),

            // ── Tombol Download Template ─────────────────────────────
            Action::make('download_template')
                ->label('Download Template Excel')
                ->icon('heroicon-o-arrow-down-tray')
                ->color('gray')
                ->outlined()
                ->url(asset('templates/template-harga-peserta.xlsx'))
                ->openUrlInNewTab(),

            // ── Tombol Delete (bawaan EditRecord) ────────────────────
            DeleteAction::make()
                ->label('Hapus Paket') // Mengganti teks tombol utama
                ->modalHeading('Hapus Paket Wisata?') // Mengganti judul pop-up konfirmasi
                ->modalDescription('Apakah kamu yakin ingin menghapus paket wisata ini? Semua data terkait akan hilang permanen.') // Mengganti deskripsi konfirmasi
                ->modalSubmitActionLabel('Ya, Hapus'), // Mengganti teks tombol hapus di dalam modal,

            // ── Tombol Reset Harga Peserta ───────────────────────────
            Action::make('reset_harga')
                ->label('Reset Harga Excel')
                ->icon('heroicon-o-trash')
                ->color('danger')
                ->requiresConfirmation()
                ->modalHeading('Hapus Semua Harga Peserta?')
                ->modalDescription('Semua data harga peserta untuk paket ini akan dihapus permanen. Tindakan ini tidak bisa dibatalkan.')
                ->modalSubmitActionLabel('Ya, Hapus Semua')
                // Hanya tampil jika ada data harga
                ->visible(fn() => $this->record->details()->exists())
                ->action(function (): void {
                    $this->record->details()->delete();

                    Notification::make()
                        ->title('Semua harga peserta berhasil dihapus.')
                        ->warning()
                        ->send();
                }),
        ];
    }
}
