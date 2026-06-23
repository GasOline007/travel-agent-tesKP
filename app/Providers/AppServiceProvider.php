<?php

namespace App\Providers;

use App\Models\CompanyProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */

    public function boot(): void
    {
        if (config('app.env') === 'production') {
            URL::forceScheme('https');
        }

        // Cek apakah tabelnya ada (agar tidak error saat migrasi awal jika di-deploy)
        if (\Illuminate\Support\Facades\Schema::hasTable('company_profiles')) {
            // Ambil baris pertama (ID: 1) dari database
            $company = CompanyProfile::first(); 
            
            // Bagikan variabel $company ke SEMUA file blade di project kamu
            View::share('company', $company);
        }
    }


    /* public function boot(): void
    {
        // Paksa semua URL menggunakan HTTPS jika ada indikasi lewat proxy/ngrok
        if (request()->header('X-Forwarded-Proto') === 'https') {
            URL::forceScheme('https');
        }
    } */
}
