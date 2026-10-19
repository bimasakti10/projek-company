@extends('layouts.app')

<!-- Pastikan title tab browser juga sudah diganti ke PT Solusi Koneksi -->
@section('title', $produk->judul . ' - PT Solusi Koneksi')

@section('content')
<div class="container py-5">
    
    <!-- Tombol Kembali (Dipindah ke atas agar lebih rapi) -->
    <div class="mb-4">
        <a href="{{ route('home') }}" class="text-secondary text-decoration-none transition-back d-flex align-items-center gap-2">
            <ion-icon name="arrow-back-outline"></ion-icon> Kembali ke Beranda
        </a>
    </div>

    <!-- Kotak Utama Produk -->
    <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
        <div class="row g-0 align-items-stretch">
            
            <!-- Kolom Kiri: Gambar Produk (Tinggi disesuaikan) -->
            <div class="col-md-5 bg-light p-4 p-md-5 d-flex justify-content-center align-items-center" style="min-height: 400px;">
                <img src="{{ asset('storage/' . $produk->gambar) }}" class="img-fluid object-fit-contain w-100" alt="{{ $produk->judul }}" style="max-height: 350px;">
            </div>

            <!-- Kolom Kanan: Detail & Deskripsi -->
            <div class="col-md-7 p-4 p-md-5 bg-white">
                
                <!-- Badge Kategori Layanan -->
                <span class="badge bg-primary text-white rounded-pill px-3 py-2 mb-3 fw-normal small">
                    Layanan IT Profesional
                </span>

                <!-- Judul Dinamis -->
                <h2 class="fw-bold text-dark mb-4">{{ $produk->judul }}</h2>

                <!-- Deskripsi Dinamis (Teks hitam di atas putih lebih nyaman dibaca) -->
                <div class="text-secondary lh-lg mb-5" style="text-align: justify; font-size: 0.95rem;">
                    {!! nl2br(e($produk->deskripsi)) !!}
                </div>

                <div class="bg-light p-4 rounded-3 border-start border-4 border-primary">
                    <h5 class="fw-bold mb-2 text-dark">Tertarik dengan layanan ini?</h5>
                    <p class="text-muted small mb-4">
                        Dapatkan penawaran harga terbaik dan konsultasi teknis yang disesuaikan dengan skala kebutuhan bisnis perusahaan Anda.
                    </p>
                    
                    <!-- Kotak informasi nomor telepon (Bukan link, tidak bisa diklik) -->
                    <div class="bg-primary text-white px-4 py-2 fw-medium rounded-pill shadow-sm d-inline-flex align-items-center gap-2">
                        <ion-icon name="logo-whatsapp" class="fs-5"></ion-icon>
                        Hubungi: {{ $produk->nomor_telpon }}
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

<!-- CSS Tambahan -->
<style>
    .transition-back {
        transition: color 0.2s ease;
    }
    .transition-back:hover {
        color: #0d77e2 !important;
    }
</style>
@endsection