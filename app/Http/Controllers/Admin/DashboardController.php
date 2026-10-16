<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Produk; // Jangan lupa panggil model Produk
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        $totalBerita = Berita::count();
        $totalGaleri = Galeri::count();
        $totalProduk = Produk::count(); 

        return view('admin.dashboard', compact('totalBerita', 'totalGaleri', 'totalProduk'));
    }
}