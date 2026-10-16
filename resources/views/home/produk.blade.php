@extends('layouts.app')

<!-- Ubah Title Tab Browser -->
@section('title', 'Layanan - PT Solusi Koneksi')

@section('content')
<div class="container py-5 mt-4">
    <!-- Bagian Judul -->
    <div class="text-center mb-5">
        <h2 class="fw-bold text-dark" style="font-size: 2.2rem;">Layanan & Solusi Digital</h2>
        <p class="text-secondary fs-6" style="max-width: 650px; margin: 0 auto;">
            Daftar lengkap layanan pengembangan perangkat lunak, infrastruktur IT, dan solusi teknologi profesional dari PT Solusi Koneksi.
        </p>
    </div>

    <!-- Grid Layout Katalog -->
    <div class="row g-4">
        @forelse($produks as $item)
        <div class="col-12 col-md-6 col-lg-4">
            <!-- Bungkus seluruh card dengan tag <a> yang rapi -->
            <a href="{{ route('produk.detail', $item->id) }}" class="text-decoration-none text-dark">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-3 transition-hover">

                    <!-- Gambar Layanan -->
                    <img src="{{ asset('storage/' . $item->gambar) }}" 
                         class="card-img-top p-3 object-fit-contain"
                         alt="{{ $item->judul }}" 
                         style="height: 250px;">

                    <div class="card-body p-0 pt-3 d-flex flex-column">
                        <!-- Judul Layanan -->
                        <h6 class="fw-bold mb-1" style="font-size: 1.1rem;">{{ $item->judul }}</h6>

                        <!-- Deskripsi Singkat -->
                        <p class="text-muted small mb-3 flex-grow-1">
                            {{ Str::limit($item->deskripsi, 60) }}
                        </p>
                    </div>
                    
                </div>
            </a>
        </div>
        @empty
        <!-- Tampilan jika admin belum input data sama sekali -->
        <div class="col-12 text-center py-5">
            <div class="p-5 bg-light rounded-4 shadow-sm">
                <p class="text-muted fs-5 mb-0">Belum ada layanan yang tersedia saat ini.</p>
            </div>
        </div>
        @endforelse
    </div>
</div>

<!-- CSS Tambahan -->
<style>
    .transition-hover {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .transition-hover:hover {
        transform: translateY(-5px);
        box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
    }
</style>
@endsection