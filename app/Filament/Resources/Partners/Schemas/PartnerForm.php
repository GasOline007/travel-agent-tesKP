<?php

namespace App\Filament\Resources\Partners\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PartnerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nama Mitra/Instansi')
                    ->required()
                    ->maxLength(255),
                    
                FileUpload::make('logo')
                    ->label('Logo Mitra')
                    ->image()
                    ->directory('partners') // Akan disimpan di folder storage/app/public/partners
                    ->nullable(), // Tidak wajib diisi
            ]);
    }
}
