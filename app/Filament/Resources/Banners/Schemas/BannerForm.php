<?php

namespace App\Filament\Resources\Banners\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class BannerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi Banner')
                    ->schema([
                        TextInput::make('title')
                            ->label('Judul Promo')
                            ->placeholder('Contoh: Promo Lebaran (Hanya untuk internal admin)')
                            ->maxLength(255),
                            
                        TextInput::make('link')
                            ->label('Tautan / Link URL')
                            ->placeholder('Contoh: /paket-wisata atau https://...')
                            ->url()
                            ->maxLength(255),

                        Toggle::make('is_active')
                            ->label('Status Aktif')
                            ->default(true)
                            ->helperText('Matikan jika promo sudah selesai.'),
                    ])->columnSpan(1),

                Section::make('Media')
                    ->schema([
                        FileUpload::make('image')
                            ->label('Gambar Banner')
                            ->image()
                            ->directory('banners')
                            ->required()
                            ->imageEditor() 
                            ->helperText('⚠️ ATURAN PENTING: Upload gambar dengan rasio memanjang (Rekomendasi: 1920x800 px). Pastikan semua TEKS DAN LOGO berada di TENGAH (area 800x800 px). Sisi kiri dan kanan akan terpotong otomatis di layar HP.')
                            ->columnSpanFull(),
                    ])->columnSpan(1),
            ])
            ->columns(2); // Membuat tampilan menjadi dua kolom kiri-kanan di layar desktop
    }
}
