<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Produk;
use App\Models\Ulasan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $beritaUtama = Berita::latest()->first();
        $beritaTerbaru = Berita::latest()->take(6)->get();
        $galeris = Galeri::latest()->get();
        $produks = Produk::latest()->take(3)->get();

        return view('home.index', compact('beritaUtama', 'beritaTerbaru', 'galeris', 'produks'));
    }

    public function galeri()
    {
        $galeri = Galeri::latest()->get();
        return view('home.galeri', compact('galeri'));
    }
    public function berita()
    {
        $berita = Berita::latest()->get();
        return view('home.berita', compact('berita'));
    }

    public function detail($id)
    {
        $berita = Berita::findOrFail($id);
        return view('home.detail', compact('berita'));
    }

public function produk()
    {
        // Pastikan nama variabelnya pakai huruf 's' di akhir ($produks)
        $produks = Produk::latest()->get(); 
        
        // Terus pastikan di dalam compact juga tertulis 'produks'
        return view('home.produk', compact('produks'));
    }

    // Tambahan method untuk halaman Detail Produk
    public function detailProduk($id)
    {
        // Mencari produk berdasarkan ID
        $produk = Produk::findOrFail($id); 
        return view('home.detailproduk', compact('produk'));
    }
}

class UlasanController extends Controller
{
    // 1. [FRONTEND] - Simpan data dari form "Kontak & Lokasi"
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'pesan' => 'required|string',
        ]);

        Ulasan::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'pesan' => $request->pesan,
        ]);

        // Balik ke halaman depan bawa pesan sukses
        return back()->with('success', 'Tanggapan berhasil dikirim!');
    }

    // 2. [ADMIN] - Tampilkan data di tabel Ulasan (Read)
    public function index()
    {
        // Ambil semua data urut dari yang paling baru
        $ulasans = Ulasan::latest()->get(); 
        return view('admin.ulasan.ulasan', compact('ulasans'));
    }

    // 3. [ADMIN] - Hapus data Ulasan (Delete)
    public function destroy($id)
    {
        $ulasan = Ulasan::findOrFail($id);
        $ulasan->delete();

        return back()->with('success', 'Tanggapan berhasil dihapus!');
    }
}
