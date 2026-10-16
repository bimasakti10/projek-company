@extends('layouts.admin')

@section('title', 'Dashboard Admin - PT Solusi Koneksi')

@section('content')
<div class="px-md-2">
    <!-- Judul Dashboard -->
    <h2 class="fw-bold text-dark mb-5" style="font-size: 2.2rem;">Dashboard Admin</h2>

    <!-- Container Card Grid (3 Kolom Per Baris, Full Width) -->
    <div class="row g-4">
        
        <!-- 1. Total Artikel (Baris 1, Kolom 1) -->
        <div class="col-12 col-md-4">
            <div class="card border-0 rounded-4 shadow text-white text-center p-4 d-flex flex-column align-items-center justify-content-center transition-hover" 
                 style="background-color: #0d77e2; min-height: 200px;">
                <i class="bi bi-newspaper mb-2" style="font-size: 3rem;"></i>
                <h5 class="fw-semibold mb-1">Total Artikel</h5>
                <!-- Tetap pakai variabel $totalBerita agar tidak merusak database lamamu -->
                <h2 class="fw-bold mb-0 display-6">{{ $totalBerita ?? 0 }}</h2>
            </div>
        </div>

        <!-- 2. Total Galeri (Baris 1, Kolom 2) -->
        <div class="col-12 col-md-4">
            <div class="card border-0 rounded-4 shadow text-white text-center p-4 d-flex flex-column align-items-center justify-content-center transition-hover" 
                 style="background-color: #0d77e2; min-height: 200px;">
                <i class="bi bi-image-fill mb-2" style="font-size: 3rem;"></i>
                <h5 class="fw-semibold mb-1">Total Galeri</h5>
                <h2 class="fw-bold mb-0 display-6">{{ $totalGaleri ?? 0 }}</h2>
            </div>
        </div>

        <!-- 3. Total Produk (Baris 1, Kolom 3) -->
        <div class="col-12 col-md-4">
            <div class="card border-0 rounded-4 shadow text-white text-center p-4 d-flex flex-column align-items-center justify-content-center transition-hover" 
                 style="background-color: #0d77e2; min-height: 200px;">
                <i class="bi bi-box-seam-fill mb-2" style="font-size: 3rem;"></i>
                <h5 class="fw-semibold mb-1">Total Produk</h5>
                <h2 class="fw-bold mb-0 display-6">{{ $totalProduk ?? 0 }}</h2>
            </div>
        </div>

    </div>
</div>

<!-- CSS Tambahan untuk Efek Hover -->
<style>
    .transition-hover {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .transition-hover:hover {
        transform: translateY(-5px);
        box-shadow: 0 .5rem 1.5rem rgba(13, 119, 226, 0.4)!important;
    }
</style>
@endsection