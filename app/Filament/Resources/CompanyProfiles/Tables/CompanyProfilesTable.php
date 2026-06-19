<?php

namespace App\Filament\Resources\CompanyProfiles\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class CompanyProfilesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                // Menampilkan email perusahaan di tabel
                TextColumn::make('email')
                    ->label('Email Perusahaan')
                    ->default('Belum diatur'),
                    
                // Menampilkan nomor telepon/WA di tabel
                TextColumn::make('phone')
                    ->label('No. Telepon / WA')
                    ->default('Belum diatur'),
                    
                // Menampilkan alamat
                TextColumn::make('address')
                    ->label('Alamat Kantor')
                    ->limit(50)
                    ->default('Belum diatur'),
            ])
            ->filters([
                //
            ])
            ->actions([
                // 2. Sekarang kamu bisa panggil langsung dengan bersih seperti ini! 😎
                EditAction::make(),
            ])
            ->bulkActions([
                // Kosongkan bulk actions agar tidak ada fitur checkbox hapus massal
            ])
            ->paginated(false); // Matikan paginasi karena data selalu 1 baris
    }
}
