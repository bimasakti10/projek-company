@extends('layouts.app')

@section('title', 'Tentang Kami - PT Solusi Koneksi')

@section('content')

<!-- A. HEADER TENTANG KAMI -->
<section class="bg-primary text-white py-5 text-center position-relative">
    <div class="container py-4 position-relative z-2">
        <h1 class="display-5 fw-bold mb-3">Tentang PT Solusi Koneksi</h1>
        <p class="lead mx-auto opacity-90" style="max-width: 700px;">
            Dedikasi kami adalah menghadirkan inovasi teknologi yang menjembatani kebutuhan bisnis Anda dengan solusi digital masa depan.
        </p>
    </div>
    <!-- Overlay gradasi ringan (opsional) -->
    <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-25"></div>
</section>

<!-- B. DETAIL PERUSAHAAN & VISI MISI -->
<section class="py-5">
    <div class="container py-4">
        <div class="row g-5 align-items-center">
            
            <!-- Kolom Kiri: Teks Profil -->
            <div class="col-lg-6">
                <span class="badge bg-primary text-white rounded-pill px-3 py-2 mb-3 fw-normal small">
                    Profil Perusahaan
                </span>
                <h2 class="fw-bold text-dark mb-4">Mitra Transformasi Digital Terpercaya</h2>
                <div class="text-secondary lh-lg" style="text-align: justify;">
                    <!-- Bagian ini sudah dibuat Dinamis (nl2br buat baca spasi ENTER) -->
                    {!! nl2br(e($profil->deskripsi ?? 'Deskripsi perusahaan belum diatur.')) !!}
                </div>
            </div>

            <!-- Kolom Kanan: Visi & Misi (Card Layout) -->
            <div class="col-lg-6">
                <div class="row g-4">
                    <!-- Visi -->
                    <div class="col-12">
                        <div class="card border-0 shadow-sm rounded-4 p-4 bg-light">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                    <ion-icon name="eye-outline" class="fs-4"></ion-icon>
                                </div>
                                <h4 class="fw-bold mb-0">Visi Kami</h4>
                            </div>
                            <!-- Visi Dinamis -->
                            <p class="text-secondary mb-0">
                                {{ $profil->visi ?? 'Visi perusahaan belum diatur.' }}
                            </p>
                        </div>
                    </div>
                    <!-- Misi -->
                    <div class="col-12">
                        <div class="card border-0 shadow-sm rounded-4 p-4 bg-light">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                    <ion-icon name="rocket-outline" class="fs-4"></ion-icon>
                                </div>
                                <h4 class="fw-bold mb-0">Misi Kami</h4>
                            </div>
                            <!-- Misi Dinamis (Otomatis jadi list titik-titik setiap di-ENTER oleh Admin) -->
                            <ul class="text-secondary mb-0 ps-3 lh-lg">
                                @if(isset($profil) && $profil->misi)
                                    @foreach(explode("\n", str_replace("\r", "", $profil->misi)) as $poinMisi)
                                        @if(trim($poinMisi) != '')
                                            <li>{{ trim($poinMisi) }}</li>
                                        @endif
                                    @endforeach
                                @else
                                    <li>Misi perusahaan belum diatur.</li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- C. KEAHLIAN UTAMA (Tanpa Modal) -->
<section class="py-5" style="background-color: #EEF3F8">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark mb-2">Keahlian Utama Kami</h2>
            <p class="text-secondary mx-auto" style="max-width: 600px;">
                Fokus layanan profesional yang kami sediakan untuk memastikan infrastruktur IT dan sistem operasional Anda berjalan sempurna.
            </p>
        </div>

        <div class="row g-4">
            
            <!-- Keahlian 1 -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4 text-center transition-hover">
                    <div class="mb-4">
                        <ion-icon name="code-slash-outline" style="font-size: 4rem; color: #0d77e2;"></ion-icon>
                    </div>
                    <h5 class="fw-bold mb-3 text-dark">Pengembangan Software</h5>
                    <p class="text-secondary small lh-base mb-0">
                        Pembuatan aplikasi berbasis website, desktop, dan mobile (iOS/Android) menggunakan kerangka kerja terkini seperti Laravel dan Flutter.
                    </p>
                </div>
            </div>

            <!-- Keahlian 2 -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4 text-center transition-hover">
                    <div class="mb-4">
                        <ion-icon name="server-outline" style="font-size: 4rem; color: #0d77e2;"></ion-icon>
                    </div>
                    <h5 class="fw-bold mb-3 text-dark">Infrastruktur & Keamanan</h5>
                    <p class="text-secondary small lh-base mb-0">
                        Konfigurasi server (Linux/Windows), instalasi jaringan <i>fiber optic</i>, <i>setup</i> Mikrotik/Cisco, serta audit <i>cyber security</i>.
                    </p>
                </div>
            </div>

            <!-- Keahlian 3 -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4 text-center transition-hover">
                    <div class="mb-4">
                        <ion-icon name="bulb-outline" style="font-size: 4rem; color: #0d77e2;"></ion-icon>
                    </div>
                    <h5 class="fw-bold mb-3 text-dark">Konsultasi IT Bisnis</h5>
                    <p class="text-secondary small lh-base mb-0">
                        Perancangan peta jalan transformasi digital dan evaluasi sistem yang sudah ada untuk menekan biaya operasional perusahaan.
                    </p>
                </div>
            </div>

            <!-- Keahlian 4 -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4 text-center transition-hover">
                    <div class="mb-4">
                        <ion-icon name="construct-outline" style="font-size: 4rem; color: #0d77e2;"></ion-icon>
                    </div>
                    <h5 class="fw-bold mb-3 text-dark">Maintenance & Support</h5>
                    <p class="text-secondary small lh-base mb-0">
                        Pemeliharaan sistem berkala, <i>backup</i> data rutin, serta dukungan teknis profesional untuk menjamin waktu operasional maksimal.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection