@extends('layouts.app')

<!-- Mengubah Title -->
@section('title', 'Artikel & Informasi - PT Solusi Koneksi')

@section('content')
<section class="container py-5 text-center">
    
    <!-- Header Section (Diubah teksnya ke tema perusahaan) -->
    <h2 class="fw-bold text-dark mb-2">Artikel & Informasi Terkini</h2>
    <p class="text-secondary mb-5 mx-auto" style="max-width: 600px;">
        Kumpulan wawasan teknologi, tren industri perangkat lunak, dan berita terbaru dari PT Solusi Koneksi.
    </p>

    <!-- Grid Kartu Artikel (Filter Kategori dan JS Dihapus) -->
    <div class="row g-3 text-start">
        @forelse($berita as $item)
        <div class="col-12 col-md-6 col-lg-4">
            <a href="{{ route('berita.detail', $item->id) }}" class="text-decoration-none">
                <div class="position-relative overflow-hidden rounded-3 shadow-sm transition-hover" style="height: 260px;">
                    <!-- Gambar Artikel -->
                    <img src="{{ asset('storage/' . $item->gambar) }}" class="w-100 h-100 object-fit-cover position-absolute" alt="{{ $item->judul }}">
                    
                    <!-- Overlay Gradasi Bawah -->
                    <div class="position-absolute bottom-0 w-100 p-3 text-white text-center d-flex align-items-end justify-content-center" style="background: linear-gradient(to top, rgba(13,119,226,0.95) 0%, rgba(13,119,226,0.5) 60%, transparent 100%); min-height: 120px;">
                        <!-- Tag small kategori sudah dihapus, langsung fokus ke judul -->
                        <h6 class="fw-bold mb-0 text-white" style="line-height: 1.4;">{{ $item->judul }}</h6>
                    </div>
                </div>
            </a>
        </div>
        @empty
        <div class="col-12 text-center py-5">
            <p class="text-secondary fs-5">Belum ada artikel yang diterbitkan saat ini.</p>
        </div>
        @endforelse
    </div>

    <style>
    .transition-hover {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .transition-hover:hover {
        transform: translateY(-5px);
        box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
    }
</style>
</section>
@endsection