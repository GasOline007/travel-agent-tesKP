<?php

namespace App\Filament\Resources\TravelPackages\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Repeater;
use Filament\Schemas\Components\Section;    // ✅ pindah ke Schemas
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class TravelPackageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            Section::make('Informasi Dasar')
                ->schema([
                    Select::make('type')
                        ->label('Tipe')
                        ->options(['domestik' => 'Domestik', 'mancanegara' => 'Mancanegara'])
                        ->required(),
                    TextInput::make('name')
                        ->label('Nama Paket')
                        ->required()
                        ->live(onBlur: true)
                        ->afterStateUpdated(fn($state, $set) => $set('slug', Str::slug($state))),
                    TextInput::make('slug') // ✅ nama field = nama kolom di DB
                        ->label('Slug (Nama di URL)')
                        ->placeholder('trip-gunung-bromo')
                        ->required()
                        ->unique(ignoreRecord: true),
                    TextInput::make('location')
                        ->label('Lokasi')
                        ->required()
                        ->placeholder('Malang'),
                    TextInput::make('duration')
                        ->label('Durasi')
                        ->placeholder('3 Hari 2 Malam'),
                    TextInput::make('price')
                        ->label('Harga')
                        ->numeric()
                        ->prefix('Rp')
                        ->required(),
                    Select::make('category')
                        ->label('Kategori')
                        ->multiple()
                        ->options([
                            'Open Trip' => 'Open Trip',
                            'Family Gathering' => 'Family Gathering',
                            'Private Trip' => 'Private Trip',
                        ]),
                    Toggle::make('is_recommended')
                        ->label('Rekomendasikan Paket?'),
                    TextInput::make('original_price')
                        ->numeric()
                        ->prefix('Rp')
                        ->label('Harga Coret (Opsional)')
                        ->helperText('Isi jika ingin menampilkan harga lama yang dicoret'),
                ])->columns(2),

            Section::make('Media & Deskripsi')
                ->schema([
                    FileUpload::make('image')
                        ->label('Foto Sampul (Thumbnail)')
                        ->image()
                        ->disk('public')
                        ->directory('packages-thumbnails') // folder di storage/app/public
                        ->required(),
                    FileUpload::make('gallery')
                        ->label('Gallery Foto Preview')
                        ->image()
                        ->disk('public')
                        ->multiple() // Bisa upload banyak sekaligus
                        ->reorderable()
                        ->directory('packages-galleries'),
                    Textarea::make('description')
                        ->label('Deskripsi Lengkap Paket')
                        ->columnSpanFull(),
                ]),

            Section::make('Rencana Perjalanan (Itinerary)')
                ->schema([
                    Repeater::make('itinerary')
                        ->schema([
                            TextInput::make('day')->required()->label('Hari'),
                            Repeater::make('kegiatan')
                                ->simple(TextInput::make('item'))
                                ->reorderable()
                                ->label('Kegiatan'),
                        ])->collapsible()->itemLabel(fn(array $state): ?string => $state['day'] ?? 'Hari Baru'),
                ]),

            Section::make('Detail Kelengkapan')
                ->schema([
                    Repeater::make('inclusions')
                        ->simple(TextInput::make('item'))
                        ->label('Apa Saja Yang Termasuk?'),
                    Repeater::make('exclusions')
                        ->simple(TextInput::make('item'))
                        ->label('Apa Yang Tidak Termasuk?'),
                    Repeater::make('notes')
                        ->simple(TextInput::make('item'))
                        ->label('Catatan Penting'),
                ])->columns(1),
        ]);
    }
}
