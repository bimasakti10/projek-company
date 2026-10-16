@extends('layouts.app')

@section('title', $berita->judul . ' - PT Solusi Koneksi')

@section('content')
<section class="py-5" style="background-color: #EEF3F8;">
    <div class="container">
        
        <!-- Card Biru Utama (Sesuai Presisi Figma) -->
        <div class="card border-0 rounded-5 bg-primary text-white p-4 p-md-5 shadow-sm mx-auto" style="max-width: 900px;">
            
            <!-- Kategori sudah dihapus dari sini -->

            <!-- 1. Judul Berita -->
            <h2 class="fw-bold text-center mb-4 display-6">
                {{ $berita->judul }}
            </h2>

            <!-- 2. Foto Utama Berita -->
            <div class="text-center mb-4">
                <img src="{{ asset('storage/' . $berita->gambar) }}" 
                     class="img-fluid rounded-4 shadow" 
                     alt="{{ $berita->judul }}" 
                     style=" width: 100%; object-fit: auto;">
            </div>

            <!-- 3. Metadata (Tanggal & Penulis) -->
            <div class="py-2 border-top border-bottom border-light border-opacity-25 my-3 d-flex justify-content-center gap-3">
                <span class="badge bg-white text-primary rounded-pill px-3 py-2 fw-normal small">
                    🗓️ {{ \Carbon\Carbon::parse($berita->created_at)->translatedFormat('d F Y') }}
                </span>
                <span class="badge bg-white text-primary rounded-pill px-3 py-2 fw-normal small">
                    👤 Admin
                </span>
            </div>

            <!-- 4. Isi Teks Berita -->
            <div class="text-start opacity-90 lh-lg mt-4 px-md-3" style="white-space: pre-line">
                {{$berita->deskripsi}}
            </div>

        </div>

        <!-- Tombol Navigasi Kembali -->
        <div class="text-center mt-4">
            <a href="{{ route('berita') }}" class="text-secondary text-decoration-none fw-medium">
                &lt; kembali ke Artikel
            </a>
        </div>

    </div>
</section>
@endsection