<?php

namespace App\Filament\Resources\CompanyProfiles\Pages;

use App\Filament\Resources\CompanyProfiles\CompanyProfileResource;
use App\Models\CompanyProfile;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListCompanyProfiles extends ListRecords
{
    protected static string $resource = CompanyProfileResource::class;

    protected function getHeaderActions(): array
    {
        // 2. Cek apakah di database sudah ada data profile perusahaan
        $isDataExists = CompanyProfile::exists();

        return [
            // 3. Jika data BELUM ADA (! $isDataExists), maka munculkan tombol Create
            ...(! $isDataExists ? [CreateAction::make()] : []),
        ];
    }
}
