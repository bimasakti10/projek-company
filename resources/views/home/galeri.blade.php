@extends('layouts.app')

<!-- Ubah Title Tab Browser -->
@section('title', 'Galeri Kegiatan - PT Solusi Koneksi')

@section('content')
<section class="galeri-page py-5" style="background-color: #F8F9FA;">
    <div class="container text-center">
        
        <!-- Header Section -->
        <h2 class="fw-bold text-dark mb-2" style="font-size: 2.2rem;">Galeri Kegiatan Perusahaan</h2>
        <p class="text-secondary mb-5 fs-6" style="max-width: 650px; margin: 0 auto;">
            Dokumentasi implementasi proyek, lingkungan kerja, kolaborasi tim, dan berbagai aktivitas profesional di PT Solusi Koneksi.
        </p>

        <!-- Grid Galeri -->
        <div class="row g-4 text-start justify-content-center">
            @forelse($galeri as $item)
            <!-- Tambahan col-lg-4 agar di laptop tampil 3 kolom -->
            <div class="col-12 col-md-6 col-lg-4">
                
                <!-- Card Trigger Modal -->
                <div class="card border-0 rounded-4 overflow-hidden shadow-sm position-relative transition-hover" 
                     style="height: 320px; cursor: pointer;"
                     data-bs-toggle="modal" 
                     data-bs-target="#modalGaleri{{ $item->id }}">
                    
                    <img src="{{ asset('storage/' . $item->gambar) }}" 
                         class="w-100 h-100 object-fit-cover position-absolute top-0 start-0" 
                         alt="{{ $item->judul }}">
                    
                    <!-- Overlay Gradasi -->
                    <div class="position-absolute bottom-0 start-0 w-100 p-3 text-center text-white" 
                         style="background: linear-gradient(to top, rgba(13, 119, 226, 0.95) 0%, rgba(13, 119, 226, 0.5) 60%, transparent 100%); min-height: 100px; display: flex; flex-direction: column; justify-content: flex-end;">
                        <small class="opacity-75 text-light d-block mb-1" style="font-size: 0.8rem;">
                            {{ \Carbon\Carbon::parse($item->tanggal ?? $item->created_at)->format('d/m/Y') }}
                        </small>
                        <h5 class="fw-bold mb-0 text-white" style="font-size: 1.1rem; line-height: 1.3;">
                            {{ $item->judul }}
                        </h5>
                    </div>
                </div>

                <!-- Modal Pop-up per Foto -->
                <div class="modal fade" id="modalGaleri{{ $item->id }}" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content border-0 rounded-4 overflow-hidden shadow">
                            <div class="modal-header border-0 pb-0">
                                <h5 class="modal-header-title fw-bold text-dark px-2 pt-2">{{ $item->judul }}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-3 text-center">
                                <img src="{{ asset('storage/' . $item->gambar) }}" class="img-fluid rounded-3 mb-3 shadow-sm" alt="{{ $item->judul }}" style="max-height: 70vh; width: 100%; object-fit: contain;">
                                <small class="text-secondary d-block">
                                    Dokumentasi Tanggal: {{ \Carbon\Carbon::parse($item->tanggal ?? $item->created_at)->format('d F Y') }}
                                </small>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            @empty
            <div class="col-12 text-center py-5">
                <p class="text-secondary fs-5">Belum ada foto galeri yang diunggah saat ini.</p>
            </div>
            @endforelse
        </div>

    </div>
</section>

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