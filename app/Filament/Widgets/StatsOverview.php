<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\TravelPackage;

class StatsOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Paket Wisata', TravelPackage::count())
                ->description('Semua paket aktif')
                ->descriptionIcon('heroicon-m-globe-alt')
                ->color('primary'),

            Stat::make('Paket Domestik', TravelPackage::where('type', 'domestik')->count())
                ->description('Destinasi dalam negeri')
                ->descriptionIcon('heroicon-m-home')
                ->color('success'),

            Stat::make('Paket Mancanegara', TravelPackage::where('type', 'mancanegara')->count())
                ->description('Destinasi luar negeri')
                ->descriptionIcon('heroicon-m-globe-asia-australia')
                ->color('info'),

            Stat::make('Paket Rekomendasi', TravelPackage::where('is_recommended', true)->count())
                ->description('Ditandai sebagai rekomendasi')
                ->descriptionIcon('heroicon-m-star')
                ->color('warning'),

            Stat::make('Harga Termurah', 'Rp ' . number_format(TravelPackage::min('price'), 0, ',', '.'))
                ->description('Paket paling terjangkau')
                ->descriptionIcon('heroicon-m-arrow-trending-down')
                ->color('success'),

            Stat::make('Harga Termahal', 'Rp ' . number_format(TravelPackage::max('price'), 0, ',', '.'))
                ->description('Paket paling premium')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('danger'),
        ];
    }
}
