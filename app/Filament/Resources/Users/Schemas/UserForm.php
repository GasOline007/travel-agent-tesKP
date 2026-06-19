<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Schemas\Schema;
use App\Models\User;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Illuminate\Support\Facades\Hash;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('name')
                ->label('Nama Lengkap')
                ->required()
                ->maxLength(255),

            TextInput::make('email')
                ->label('Email')
                ->email()
                ->required()
                ->unique(User::class, 'email', ignoreRecord: true)
                ->maxLength(255),

            TextInput::make('password')
                ->label('Password')
                ->password()
                ->required(fn(string $operation): bool => $operation === 'create')
                ->minLength(8)
                ->placeholder(
                    fn(string $operation): string => $operation === 'edit'
                        ? 'Kosongkan jika tidak ingin mengganti password'
                        : ''
                )
                // Hanya simpan ke DB jika diisi
                ->dehydrated(fn(?string $state): bool => filled($state))
                // Hash sebelum disimpan
                ->dehydrateStateUsing(fn(string $state): string => Hash::make($state)),

            Select::make('role')
                ->label('Role')
                ->options([
                    'admin'       => '🔧 Admin',
                    'super_admin' => '👑 Super Admin',
                ])
                ->required()
                ->default('admin')
                ->native(false),

            Toggle::make('is_active')
                ->label('Status Akun Aktif')
                ->helperText('Nonaktifkan untuk mensuspend akun ini')
                ->default(true)
                ->onColor('success')
                ->offColor('danger'),
        ]);
    }
}
