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

                    // ✅ Sekarang relasi many-to-many ke tabel categories
                    Select::make('categories')
                        ->label('Kategori')
                        ->relationship('categories', 'name')
                        ->multiple()
                        ->preload()
                        ->searchable()
                        ->createOptionForm([
                            TextInput::make('name')
                                ->required()
                                ->live(onBlur: true)
                                ->afterStateUpdated(fn($state, $set) => $set('slug', Str::slug($state))),
                            TextInput::make('slug')->required(),
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

                    // ✅ Gallery sekarang relasi hasMany, bukan kolom JSON
                    Repeater::make('galleries')
                        ->relationship()
                        ->label('Gallery Foto Preview')
                        ->schema([
                            FileUpload::make('image')
                                ->label('Foto')
                                ->image()
                                ->disk('public')
                                ->directory('packages-galleries')
                                ->required(),
                        ])
                        ->reorderable()
                        ->orderColumn('order')
                        ->defaultItems(0)
                        ->addActionLabel('Tambah Foto')
                        ->columnSpanFull(),
                        
                    Textarea::make('description')
                        ->label('Deskripsi Lengkap Paket')
                        ->columnSpanFull(),
                ]),

            Section::make('Rencana Perjalanan (Itinerary)')
                ->schema([
                    // ✅ itinerary sekarang relasi hasMany
                    Repeater::make('itineraries')
                        ->relationship()
                        ->schema([
                            TextInput::make('day_number')
                                ->label('Hari Ke-')
                                ->numeric()
                                ->required(),
                            TextInput::make('title')
                                ->label('Judul (Opsional)'),
                            Textarea::make('activity')
                                ->label('Aktivitas')
                                ->required(),
                        ])
                        ->orderColumn('order')
                        ->collapsible()
                        ->itemLabel(fn(array $state): ?string => isset($state['day_number'])
                            ? 'Hari ' . $state['day_number']
                            : 'Hari Baru')
                        ->addActionLabel('Tambah Hari'),
                ]),

            Section::make('Detail Kelengkapan')
                ->schema([
                    // ✅ inclusions, exclusions, notes sekarang satu tabel travel_package_points
                    // dipisah pakai filter relationship per type

                    Repeater::make('inclusions')
                        ->relationship()
                        ->simple(
                            TextInput::make('content')->label('Item')->required()
                        )
                        ->orderColumn('order')
                        ->label('Apa Saja Yang Termasuk?')
                        ->addActionLabel('Tambah Item')
                        ->mutateRelationshipDataBeforeCreateUsing(fn(array $data) => [...$data, 'type' => 'inclusion']),

                    Repeater::make('exclusions')
                        ->relationship()
                        ->simple(
                            TextInput::make('content')->label('Item')->required()
                        )
                        ->orderColumn('order')
                        ->label('Apa Yang Tidak Termasuk?')
                        ->addActionLabel('Tambah Item')
                        ->mutateRelationshipDataBeforeCreateUsing(fn(array $data) => [...$data, 'type' => 'exclusion']),

                    Repeater::make('notes')
                        ->relationship()
                        ->simple(
                            TextInput::make('content')->label('Item')->required()
                        )
                        ->orderColumn('order')
                        ->label('Catatan Penting')
                        ->addActionLabel('Tambah Catatan')
                        ->mutateRelationshipDataBeforeCreateUsing(fn(array $data) => [...$data, 'type' => 'note']),
                ])->columns(1),
        ]);
    }
}
