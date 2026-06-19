<?php

namespace App\Filament\Resources\CompanyProfiles\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class CompanyProfileForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Tentang Perusahaan')
                    ->schema([
                        Textarea::make('about_text')
                            ->label('Deskripsi Singkat Footer')
                            ->rows(4)
                            ->columnSpanFull(),
                    ]),
                    
                Section::make('Sosial Media')
                    ->schema([
                        TextInput::make('instagram_url')
                            ->label('Link Instagram')
                            ->url()
                            ->placeholder('https://instagram.com/username'),
                        TextInput::make('facebook_url')
                            ->label('Link Facebook')
                            ->url()
                            ->placeholder('https://facebook.com/username'),
                    ])->columns(2),
                    
                Section::make('Informasi Kontak')
                    ->schema([
                        TextInput::make('email')
                            ->label('Email Perusahaan')
                            ->email(),
                        TextInput::make('phone')
                            ->placeholder('6281234567890')
                            ->label('Nomor Telepon / WhatsApp')
                            ->tel(),
                        Textarea::make('address')
                            ->label('Alamat Lengkap Kantor')
                            ->columnSpanFull(),
                    ])->columns(2),
            ]);
    }
}
