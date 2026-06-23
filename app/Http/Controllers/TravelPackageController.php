<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
        // Validasi dasar untuk mencegah input aneh atau payload terlalu besar
        $request->validate([
            'cari' => 'nullable|string|max:255',
            'kategori' => 'nullable|string|max:255',
        ]);

        $query = TravelPackage::where('type', $tipe)->where('location', $lokasi);

        if ($request->hasAny(['cari', 'kategori'])) {
            if ($request->filled('cari')) {
                $keyword = trim($request->cari);
                $query->where('name', 'like', '%' . $keyword . '%');
            }
            if ($request->filled('kategori')) {
                $kategoriSlug = trim($request->kategori);
                // ✅ ganti whereJsonContains -> whereHas relasi categories
                $query->whereHas('categories', function ($q) use ($kategoriSlug) {
                    $q->where('slug', $kategoriSlug); // sesuaikan 'slug' atau 'name' dengan value yang dikirim form
                });
            }
        }

        $packages = $query->with('categories')
            ->latest()
            ->paginate(9)
            ->withQueryString();

        $notFound = $packages->isEmpty() && ($request->filled('cari') || $request->filled('kategori'));

        // AMBIL SEMUA DATA KATEGORI DARI DATABASE
        $categories = Category::all();

        return view('destinasi', compact('tipe', 'lokasi', 'packages', 'notFound', 'categories'));
    }


    // Tampikan Semua Paket
    public function index(Request $request)
    {
        $packages = TravelPackage::query()
            ->when($request->tipe, fn($q) => $q->where('type', $request->tipe))
            ->when($request->recommended, fn($q) => $q->where('is_recommended', true))
            ->when($request->kategori, fn($q) => $q->whereHas(
                'categories',
                fn($q2) =>
                $q2->where('slug', $request->kategori)
            ))
            ->with('categories')
            ->latest()
            ->paginate(9);

        return view('travel-packages.index', compact('packages'));
    }

    // Halaman detail paket
    public function show(string $slug)
    {
        $package = TravelPackage::with([
            'details',
            'categories',
            'galleries',
            'itineraries',
            'inclusions',
            'exclusions',
            'notes',
        ])
            ->where('slug', $slug)
            ->firstOrFail();

        // ambil no wa
        $no_wa = CompanyProfile::value('phone');

        return view('detailPaket', compact('package', 'no_wa'));
    }
}
