<?php

namespace App\Filament\Resources\Galleries\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class GalleryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Upload Foto')
                    ->schema([
                        FileUpload::make('image')
                            ->label('Foto Dokumentasi')
                            ->image()
                            ->imageEditor() // Admin bisa crop/edit gambar langsung di sini!
                            ->directory('galleries') // Akan masuk ke folder storage/app/public/galleries
                            ->required()
                            ->columnSpanFull(),
                    ]),
                    
                Section::make('Detail Informasi')
                    ->schema([
                        TextInput::make('location')
                            ->label('Lokasi Trip')
                            ->placeholder('Misal: Gunung Bromo, Jawa Timur')
                            ->required()
                            ->maxLength(255),
                            
                        TextInput::make('customer')
                            ->label('Nama Klien / Rombongan')
                            ->placeholder('Misal: Keluarga Bpk. Reza')
                            ->required()
                            ->maxLength(255),
                            
                        Textarea::make('caption')
                            ->label('Caption / Testimoni')
                            ->rows(3)
                            ->columnSpanFull(),
                    ])->columns(2),
            ]);
    }
}
