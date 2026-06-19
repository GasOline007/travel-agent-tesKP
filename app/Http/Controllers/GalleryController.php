<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function galeri()
    {
        // Mengambil data galeri dari yang terbaru di-upload
        $galeri = Gallery::latest()->get();

        return view('galeri', compact('galeri'));
    }
}
