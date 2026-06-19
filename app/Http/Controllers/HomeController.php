<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\CompanyProfile;
use App\Models\HeroSlider;
use App\Models\Partner;
use App\Models\TravelPackage;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index()
    {
        // Cukup tarik data yang diperlukan untuk Home
        //$banners = Banner::all();

        // Mengambil 3 paket yang ditandai sebagai rekomendasi, dan random agar tidak bosan
        $recommendedPackages  = TravelPackage::where('is_recommended', true)
            ->inRandomOrder()
            ->take(3)
            ->get();

        // Mengambil semua banner yang statusnya aktif (true) urutan terbaru
        $banners = Banner::where('is_active', true)->latest()->get();

        // Ambil semua data mitra dari database
        $partners = Partner::all();

        // ambil no wa
        $no_wa = CompanyProfile::value('phone');

        return view('home', compact('recommendedPackages','banners', 'partners', 'no_wa'));
    }


    // Halaman utama — pilih domestik atau mancanegara
    public function showLocations()
    {
        $domestik    = TravelPackage::where('type', 'domestik')->count();
        $mancanegara = TravelPackage::where('type', 'mancanegara')->count();

        return view('pilihTipe', compact('domestik', 'mancanegara'));
    }
    

    // METHOD BARU UNTUK HALAMAN TENTANG KAMI
    public function about()
    {
        // Ambil data pertama (karena datanya cuma 1 baris)
        $company = CompanyProfile::first();

        // Kirim data ke file view 'about.blade.php'
        return view('about', compact('company'));
    }
}
