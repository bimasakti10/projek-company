@extends('layouts.app')

@section('title', 'Website Resmi PT Solusi Koneksi')

@section('content')

<!-- B. HERO SECTION -->
<section id="beranda"
    class="hero-section position-relative d-flex align-items-center justify-content-center text-center text-white">
    <div class="hero-overlay position-absolute top-0 start-0 w-100 h-100"></div>
    <div class="hero-content container position-relative z-2">
        <p class="hero-subtitle fs-5 fw-light mb-2">Selamat Datang di Website Resmi</p>
        <h1 class="hero-title display-4 fw-bold mb-3">PT Solusi Koneksi</h1>
        <p class="hero-description mx-auto mb-4 opacity-90" style="max-width: 650px;">
            Mitra teknologi terpercaya Anda dalam pengembangan perangkat lunak, aplikasi dinamis, dan solusi
            infrastruktur IT profesional.
        </p>
        <a href="#tentang" class="btn btn-primary rounded-pill px-4 py-2 fw-medium">Konsultasi Sekarang</a>
    </div>
</section>

<!-- C. STATISTIK PERUSAHAAN -->
<section class="stat-section bg-primary text-white py-4">
    <div class="container">
        <div class="row text-center g-4 align-items-center justify-content-center">
            <!-- Item 1: Klien -->
            <div class="col-6 col-md-3">
                <div class="d-flex align-items-center justify-content-center gap-3">
                    <ion-icon name="briefcase" class="fs-1"></ion-icon>
                    <div class="text-start">
                        <h3 class="fw-bold mb-0 fs-4">200+</h3>
                        <p class="mb-0 small opacity-75">Klien B2B</p>
                    </div>
                </div>
            </div>
            <!-- Item 2: Proyek Selesai -->
            <div class="col-6 col-md-3">
                <div class="d-flex align-items-center justify-content-center gap-3">
                    <ion-icon name="code-working" class="fs-1"></ion-icon>
                    <div class="text-start">
                        <h3 class="fw-bold mb-0 fs-4">500+</h3>
                        <p class="mb-0 small opacity-75">Proyek Selesai</p>
                    </div>
                </div>
            </div>
            <!-- Item 3: Penghargaan -->
            <div class="col-6 col-md-3">
                <div class="d-flex align-items-center justify-content-center gap-3">
                    <ion-icon name="trophy" class="fs-1"></ion-icon>
                    <div class="text-start">
                        <h3 class="fw-bold mb-0 fs-4">15+</h3>
                        <p class="mb-0 small opacity-75">Penghargaan</p>
                    </div>
                </div>
            </div>
            <!-- Item 4: Tenaga Ahli -->
            <div class="col-6 col-md-3">
                <div class="d-flex align-items-center justify-content-center gap-3">
                    <ion-icon name="people" class="fs-1"></ion-icon>
                    <div class="text-start">
                        <h3 class="fw-bold mb-0 fs-4">50+</h3>
                        <p class="mb-0 small opacity-75">Tenaga Ahli IT</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- D. TENTANG PERUSAHAAN -->
<section id="tentang" class="about-section container py-5">
    <h2 class="section-title text-center mb-4 fw-bold h2">Profil Perusahaan</h2>
    <div class="row align-items-center g-4">
        <div class="col-12 col-md-6">
            <div class="about-text">
                <p class="text-secondary lh-lg mb-3 text-dark">
                    PT Solusi Koneksi adalah perusahaan teknologi informasi yang berkomitmen untuk memberikan layanan
                    pengembangan perangkat lunak yang inovatif dan terstruktur. Kami merancang website dinamis, aplikasi
                    mobile, dan sistem informasi manajemen berbasis <i>best practice</i> industri.
                </p>
                <p class="text-secondary lh-lg mb-0 text-dark">
                    Dengan tim developer profesional, UI/UX designer, dan arsitek infrastruktur jaringan, kami
                    mendampingi bisnis Anda bertransformasi ke era digital secara efektif, efisien, dan aman.
                </p>
            </div>
            <div class="text-center mt-4 text-md-start">
                <a href="{{route ('tentang')}}"
                    class="btn btn-primary rounded-pill px-4 py-2 fw-medium">Selengkapnya</a>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="card border-0 rounded-4 shadow overflow-hidden h-100 card-hover">
                <img src="{{ asset('assets/images/kantor.jfif') }}" class="w-100 h-100 object-fit-cover"
                    alt="Kantor PT Solusi Koneksi" style="min-height: 350px;">
            </div>
        </div>
    </div>
</section>

<!-- E. KEAHLIAN UTAMA / LAYANAN UNGGULAN -->
<section id="keahlian" class="keahlian-section fade-right py-5" style="background-color: #EEF3F8">
    <div class="container">
        <h2 class="section-title text-center mb-5 fw-bold h2">Keahlian Utama</h2>

        <div class="row g-4">
            <!-- Keahlian 1 -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm rounded-4 text-center p-4 card-hover">
                    <div class="card-body d-flex flex-column align-items-center justify-content-between p-0">
                        <div class="logo-wrapper my-auto d-flex align-items-center justify-content-center"
                            style="height: 160px;">
                            <ion-icon name="code-slash-outline" style="font-size: 6rem; color: #0d77e2;"></ion-icon>
                        </div>
                        <h6 class="fw-bold my-3 text-dark">Pengembangan Software Custom</h6>
                        <button type="button" class="btn btn-primary rounded-pill px-4 py-2 w-150 fw-medium mt-2"
                            data-bs-toggle="modal" data-bs-target="#modalPPLG">
                            Selengkapnya
                        </button>
                    </div>
                </div>
            </div>

            <!-- Keahlian 2 -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm rounded-4 text-center p-4 card-hover">
                    <div class="card-body d-flex flex-column align-items-center justify-content-between p-0">
                        <div class="logo-wrapper my-auto d-flex align-items-center justify-content-center"
                            style="height: 160px;">
                            <ion-icon name="server-outline" style="font-size: 6rem; color: #0d77e2;"></ion-icon>
                        </div>
                        <h6 class="fw-bold my-3 text-dark">Infrastruktur & Keamanan Jaringan</h6>
                        <button type="button" class="btn btn-primary rounded-pill px-4 py-2 w-150 fw-medium mt-2"
                            data-bs-toggle="modal" data-bs-target="#modalTJKT">
                            Selengkapnya
                        </button>
                    </div>
                </div>
            </div>

            <!-- Keahlian 3 -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm rounded-4 text-center p-4 card-hover">
                    <div class="card-body d-flex flex-column align-items-center justify-content-between p-0">
                        <div class="logo-wrapper my-auto d-flex align-items-center justify-content-center"
                            style="height: 160px;">
                            <ion-icon name="bulb-outline" style="font-size: 6rem; color: #0d77e2;"></ion-icon>
                        </div>
                        <h6 class="fw-bold my-3 text-dark">Konsultasi IT Bisnis</h6>
                        <button type="button" class="btn btn-primary rounded-pill px-4 py-2 w-150 fw-medium mt-2"
                            data-bs-toggle="modal" data-bs-target="#modalTO">
                            Selengkapnya
                        </button>
                    </div>
                </div>
            </div>

            <!-- Keahlian 4 -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm rounded-4 text-center p-4 card-hover">
                    <div class="card-body d-flex flex-column align-items-center justify-content-between p-0">
                        <div class="logo-wrapper my-auto d-flex align-items-center justify-content-center"
                            style="height: 160px;">
                            <ion-icon name="construct-outline" style="font-size: 6rem; color: #0d77e2;"></ion-icon>
                        </div>
                        <h6 class="fw-bold my-3 text-dark">Maintenance & Support</h6>
                        <button type="button" class="btn btn-primary rounded-pill px-4 py-2 w-150 fw-medium mt-2"
                            data-bs-toggle="modal" data-bs-target="#modalTPFL">
                            Selengkapnya
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- F. PRODUK & LAYANAN (Dinamis dari Database) -->
<section id="produk" class="produk-section fade-right py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Layanan Kami</h2>
            <p class="text-muted">Solusi digital siap pakai dan layanan IT profesional untuk eskalasi bisnis Anda.</p>
        </div>

        <!-- Grid 3 Kolom dengan Looping Data Produk (Dibatasi 3 saja) -->
        <div class="row g-4 mb-4 justify-content-center">
            @forelse($produks->take(3) as $item)
            <div class="col-12 col-md-6 col-lg-4">
                <a href="{{ route('produk.detail', $item->id) }}" class="text-decoration-none text-dark">
                    <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden card-hover">
                        <!-- Gambar Produk Dinamis: w-100 agar pas dengan lebar card -->
                        <img src="{{ asset('storage/' . $item->gambar) }}"
                            class="w-100 object-fit-cover bg-light img-zoom-hover" alt="{{ $item->judul }}"
                            style="height: 220px;">
                        <!-- Area Teks -->
                        <div class="card-body p-4 d-flex flex-column bg-white position-relative z-2">
                            <h6 class="fw-bold mb-2" style="font-size: 1.1rem;">{{ $item->judul }}</h6>
                            <p class="text-muted small mb-0 flex-grow-1">{{ Str::limit($item->deskripsi, 60) }}</p>
                        </div>
                    </div>
                </a>
            </div>
            @empty
            <div class="col-12 text-center py-4">
                <p class="text-muted mb-0">Belum ada layanan yang tersedia saat ini.</p>
            </div>
            @endforelse
        </div>

        <div class="text-center mt-5">
            <a href="{{ route('produk') }}" class="btn btn-primary rounded-pill px-4 py-2 fw-semibold shadow-sm"
                style="background-color: #0d77e2; border: none;">
                Lihat Semua Layanan
            </a>
        </div>
    </div>
</section>

<!-- G. ARTIKEL & INFORMASI TERKINI -->
<section id="artikel" class="berita-section fade-right container py-5 text-center">
    <!-- Header Section -->
    <h2 class="fw-bold text-dark mb-2">Artikel & Informasi Terkini</h2>
    <p class="text-secondary mb-4 mx-auto" style="max-width: 600px;">
        Berita terbaru seputar tren teknologi, pembaruan layanan, wawasan industri, dan aktivitas dari PT Solusi
        Koneksi.
    </p>

    @if($beritaTerbaru->count() > 0)
    <!-- Grid 2 Kolom (Kiri Headline, Kanan Grid Kecil) -->
    <div class="row g-3 text-start mb-5">

        <!-- Headline Utama (Kiri) -->
        @if($beritaUtama)
        <div class="col-12 col-lg-6">
            <a href="{{ route('berita.detail', $beritaUtama->id) }}" class="text-decoration-none">
                <div class="position-relative overflow-hidden rounded-3 h-100 card-hover" style="min-height: 360px;">
                    <img src="{{ asset('storage/' . $beritaUtama->gambar) }}"
                        class="w-100 h-100 object-fit-cover position-absolute img-zoom-hover"
                        alt="{{ $beritaUtama->judul }}">
                    <div class="position-absolute bottom-0 w-100 p-3 text-white text-center"
                        style="background: linear-gradient(to top, rgba(13,119,226,0.95), transparent);">
                        <h5 class="fw-bold mb-0 text-white">{{ $beritaUtama->judul }}</h5>
                    </div>
                </div>
            </a>
        </div>
        @endif

        <!-- Grid 6 Card Kecil (Kanan) -->
        <div class="col-12 col-lg-6">
            <div class="row g-2">
                @foreach($beritaTerbaru as $item)
                <div class="col-4">
                    <a href="{{ route('berita.detail', $item->id) }}" class="text-decoration-none">
                        <div class="position-relative overflow-hidden rounded-3 card-hover" style="height: 175px;">
                            <img src="{{ asset('storage/' . $item->gambar) }}"
                                class="w-100 h-100 object-fit-cover position-absolute img-zoom-hover"
                                alt="{{ $item->judul }}">
                            <div class="position-absolute bottom-0 w-100 p-2 text-white text-center"
                                style="background: linear-gradient(to top, rgba(13,119,226,0.95), transparent);">
                                <h6 class="fw-bold mb-0 text-white text-truncate small">{{ $item->judul }}</h6>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>

    </div>
    @else
    <p class="text-secondary py-4">Belum ada artikel atau informasi terbaru saat ini.</p>
    @endif

    <a href="{{ route('berita') }}" class="btn btn-primary rounded-pill px-4 py-2 fw-semibold"
        style="background-color: #0d77e2; border: none;">
        Lihat Semua Artikel
    </a>
</section>

<!-- H. GALERI KEGIATAN PERUSAHAAN -->
<section id="galeri" class="galeri-section fade-right py-5">
    <div class="container text-center">
        <!-- Judul & Subtitle Galeri -->
        <h2 class="fw-bold text-dark mb-2" style="font-size: 2rem;">Galeri Kegiatan</h2>
        <p class="text-secondary mb-5 fs-6" style="max-width: 650px; margin: 0 auto;">
            Dokumentasi implementasi proyek, lingkungan kerja, dan berbagai aktivitas tim profesional di PT Solusi
            Koneksi.
        </p>

        <!-- Grid Galeri -->
        <div class="row g-4 text-start justify-content-center">
            @forelse($galeris->take(6) as $item)
            <div class="col-12 col-md-6 col-lg-4">
                
                <!-- Card Trigger Modal (Klik untuk buka Modal) -->
                <!-- Bagian ini sekarang murni hanya menampilkan gambar full -->
                <div class="card border-0 rounded-4 overflow-hidden shadow-sm position-relative card-hover"
                    style="height: 280px; cursor: pointer;" data-bs-toggle="modal"
                    data-bs-target="#modalGaleriHome{{ $item->id }}">
                    
                    <!-- Foto Galeri -->
                    <img src="{{ asset('storage/' . $item->gambar) }}"
                        class="w-100 h-100 object-fit-cover position-absolute top-0 start-0 img-zoom-hover"
                        alt="{{ $item->judul ?? 'Galeri PT Solusi Koneksi' }}">
                </div>

                <!-- Modal Pop-up Detail Foto (Judul tetap muncul di sini) -->
                <div class="modal fade" id="modalGaleriHome{{ $item->id }}" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content border-0 rounded-4 overflow-hidden">
                            <div class="modal-header border-0 pb-0">
                                <h5 class="fw-bold text-dark px-2 pt-2 mb-0">{{ $item->judul }}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-3 text-center">
                                <img src="{{ asset('storage/' . $item->gambar) }}" class="img-fluid rounded-3 mb-3"
                                    alt="{{ $item->judul }}"
                                    style="max-height: 70vh; width: 100%; object-fit: contain;">
                                <small class="text-secondary d-block">
                                    Dokumentasi Tanggal:
                                    {{ \Carbon\Carbon::parse($item->tanggal ?? $item->created_at)->format('d F Y') }}
                                </small>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            @empty
            <div class="col-12 text-center py-5">
                <p class="text-secondary fs-5">Belum ada foto galeri yang diunggah.</p>
            </div>
            @endforelse
        </div>

        <div class="text-center mt-5">
            <a href="{{ route('galeri') }}" class="btn btn-primary rounded-pill px-4 py-2 fw-semibold shadow-sm"
                style="background-color: #0d77e2; border: none;">
                Lihat Semua Foto
            </a>
        </div>
    </div>
</section>

<!-- G. KONTAK & LOKASI -->
<section id="kontak" class="container my-5 py-4">
    <!-- Card Container -->
    <div class="card border-0 shadow-sm p-4 p-md-5" style="border-radius: 16px; background-color: #ffffff;">

        <!-- Judul -->
        <h3 class="fw-bold text-center mb-5">Kontak & Lokasi</h3>

        <div class="row g-5">
            <!-- Kolom Kiri: Form Tanggapan -->
            <div class="col-lg-6">

                <!-- Alert Notifikasi Sukses -->
                @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                    <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                <!-- Form Action mengarah ke route ulasan.store -->
                <form action="{{ route('ulasan.store') }}" method="POST">
                    <!-- Token CSRF Wajib di Laravel -->
                    @csrf

                    <!-- Input Nama -->
                    <div class="mb-4">
                        <label class="form-label fw-bold mb-2">Nama Lengkap</label>
                        <input type="text" name="nama"
                            class="form-control p-3 bg-light @error('nama') is-invalid @enderror"
                            style="border: 1px solid #dee2e6; border-radius: 10px;" placeholder="Masukkan Nama Lengkap"
                            value="{{ old('nama') }}" required>
                        @error('nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Input Email -->
                    <div class="mb-4">
                        <label class="form-label fw-bold mb-2">Email</label>
                        <input type="email" name="email"
                            class="form-control p-3 bg-light @error('email') is-invalid @enderror"
                            style="border: 1px solid #dee2e6; border-radius: 10px;" placeholder="Masukkan Email"
                            value="{{ old('email') }}" required>
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Input Pesan -->
                    <div class="mb-4">
                        <label class="form-label fw-bold mb-2">Pesan/Tanggapan</label>
                        <textarea name="pesan" class="form-control p-3 bg-light @error('pesan') is-invalid @enderror"
                            rows="4" style="border: 1px solid #dee2e6; border-radius: 10px;"
                            placeholder="Masukkan Tanggapan" required>{{ old('pesan') }}</textarea>
                        @error('pesan')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Tombol Kirim -->
                    <button type="submit" class="btn text-white fw-bold px-4 py-2"
                        style="background-color: #0d77e2; border-radius: 8px;">
                        Kirim Pesan
                    </button>
                </form>
            </div>

            <!-- Kolom Kanan: Google Maps -->
            <div class="col-lg-6">
                <!-- iframe Google Maps SMKN 4 Bogor -->
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.351790445582!2d106.80802271477103!3d-6.590637195233633!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5d2e602b503%3A0x8e8334237f3a09e0!2sJl.%20Raya%20Pajajaran%20No.88%2C%20Bantarjati%2C%20Kec.%20Bogor%20Utara%2C%20Kota%20Bogor%2C%20Jawa%20Barat%2016153!5e0!3m2!1sen!2sid!4v1690000000000!5m2!1sen!2sid"
                    width="100%" height="100%" style="border:0; border-radius: 12px; min-height: 400px;"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>

    </div>
</section>

<!-- J. BEKERJASAMA DENGAN -->
<section class="pt-5 pb-5" style="background-color: #EEF3F8;">
    <div class="container text-center ">
        <h4 class="fw-bold mb-4">Bekerjasama Dengan</h4>
        <div class="d-flex justify-content-center">
            <div class="bg-white p-3 rounded-4 shadow-sm border d-inline-block card-hover">
                <img src="{{ asset('assets/images/bonet.png') }}" alt="Bonet" class="img-fluid"
                    style="height: 100px; object-fit: contain;">
            </div>
        </div>
    </div>
</section>

@endsection