<?php

namespace App\Filament\Resources\Users\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Actions\DeleteAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class UsersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Nama')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('email')
                    ->label('Email')
                    ->searchable()
                    ->sortable()
                    ->copyable()
                    ->copyMessage('Email disalin!'),

                TextColumn::make('role')
                    ->label('Role')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'super_admin' => 'warning',
                        'admin'       => 'primary',
                        default       => 'gray',
                    })
                    ->icon(fn(string $state): string => match ($state) {
                        'super_admin' => 'heroicon-m-shield-check', // Ikon Tameng
                        'admin' => 'heroicon-m-wrench-screwdriver',  // Ikon Obeng & Kunci
                        default => 'heroicon-m-user',
                    })
                    ->formatStateUsing(fn(string $state): string => match ($state) {
                        'super_admin' => 'Super Admin',
                        'admin'       => 'Admin',
                        default       => $state,
                    }),


                // Bisa langsung toggle suspend/aktif dari tabel
                ToggleColumn::make('is_active')
                    ->label('Aktif')
                    ->onColor('success')
                    ->offColor('danger')
                    // Tidak bisa suspend diri sendiri
                    ->disabled(fn(Model $record): bool => Auth::id() === $record->id),

                TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->date('d M Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make()
                    ->hidden(fn(Model $record): bool => Auth::id() === $record->id),
            ])
            ->toolbarActions([
                DeleteBulkAction::make()
                    ->action(function ($records) {
                        $records->each(function ($record) {
                            // Tidak bisa hapus akun sendiri via bulk delete
                            if (Auth::id() !== $record->id) {
                                $record->delete();
                            }
                        });
                    }),
            ]);
    }
}
