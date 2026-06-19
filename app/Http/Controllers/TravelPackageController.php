<?php

namespace App\Http\Controllers;

use App\Models\CompanyProfile;
use App\Models\TravelPackage;
use Illuminate\Http\Request;

class TravelPackageController extends Controller
{

    // Halaman pilih lokasi — setelah pilih tipe
    public function byTipe(string $tipe)
    {
        // ambil lokasi beserta gambarnya
        $lokasi = TravelPackage::where('type', $tipe)
            // Ambil lokasi, dan pilih satu gambar saja (MIN/MAX) sebagai perwakilan
            ->selectRaw('location, MIN(image) as image')
            ->groupBy('location')          // Hanya group by lokasi agar 100% unik
            ->orderBy('location', 'asc')
            ->get();

        return view('pilihKotaNegara', compact('tipe', 'lokasi'));
    }

    // Halaman listing paket — setelah pilih lokasi & fitur search di destinasi
    public function byLokasi(Request $request, string $tipe, string $lokasi)
    {
        $query = TravelPackage::where('type', $tipe)->where('location', $lokasi);

        // Logic pencarian hanya dijalankan jika ada parameter dari form (request)
        if ($request->hasAny(['cari', 'kategori'])) {
            if ($request->filled('cari')) {
                $query->where('name', 'like', '%' . $request->cari . '%');
            }
            if ($request->filled('kategori')) {
                $query->whereJsonContains('category', $request->kategori);
            }
        }

        $packages = $query->latest()->paginate(9)->withQueryString();

        // Kirimkan status notFound agar Blade tidak bingung
        $notFound = $packages->isEmpty() && ($request->filled('cari') || $request->filled('kategori'));

        return view('destinasi', compact('tipe', 'lokasi', 'packages', 'notFound'));
    }

    // Tampikan Semua Halaman
    public function index(Request $request)
    {
        $packages = TravelPackage::query()
            ->when($request->tipe, fn($q) => $q->where('type', $request->tipe))
            ->when($request->recommended, fn($q) => $q->where('is_recommended', true))
            ->when($request->kategori, fn($q) => $q->whereJsonContains('category', $request->kategori))
            ->latest()
            ->paginate(9);

        return view('travel-packages.index', compact('packages'));
    }

    // Halaman detail paket
    public function show(string $slug)
    {
        $package = TravelPackage::with('details')
            ->where('slug', $slug)
            ->firstOrFail();

        // ambil no wa
        $no_wa = CompanyProfile::value('phone');

        return view('detailPaket', compact('package', 'no_wa'));
    }
}
