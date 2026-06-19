<?php

namespace App\Filament\Resources\CompanyProfiles\Pages;

use App\Filament\Resources\CompanyProfiles\CompanyProfileResource;
use Filament\Resources\Pages\CreateRecord;

class CreateCompanyProfile extends CreateRecord
{
    protected static string $resource = CompanyProfileResource::class;

    /**
     * Mematikan tombol "Create & Create Another" di Filament v3
     */
    public function canCreateAnother(): bool
    {
        return false;
    }

    /**
     * Setelah klik "Create", langsung pindah ke halaman Edit
     */
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('edit', ['record' => $this->getRecord()]);
    }
}
