<nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top py-2">
    <div class="container">

        <!-- Logo & Branding -->
        <a class="navbar-brand d-flex align-items-center gap-2" href="{{ route('home') }}">
            <!-- Pastikan alt text diubah ke nama perusahaan -->
            <img src="{{ asset('assets/images/logo.png') }}" alt="Logo PT Solusi Koneksi" height="35">
        </a>

        <!-- Breadcrumbs untuk Tentang Kami -->
        @if(request()->routeIs('tentang'))
        <span class="text-secondary small ms-2 d-none d-md-inline">
            <a href="{{ route('home') }}" class="text-decoration-none text-dark fw-bold">Halaman Utama</a>
            <span class="mx-1">&gt;</span>
            <span class="text-primary fw-medium">Tentang Kami</span>
        </span>
        @endif

                <!-- Breadcrumbs untuk Artikel (eks Berita) -->
        @if(request()->routeIs('produk') || request()->routeIs('produk.detail'))
        <span class="text-secondary small ms-2 d-none d-md-inline">
            @if(request()->routeIs('produk'))
            <a href="{{ route('home') }}" class="text-decoration-none text-dark fw-bold">Halaman Utama</a>
            <span class="mx-1">&gt;</span>
            <span class="text-primary fw-medium">layanan</span>
            @else
            <a href="{{ route('home') }}" class="text-decoration-none text-dark fw-bold">Halaman Utama</a>
            <span class="mx-1">&gt;</span>
            <a href="{{ route('produk') }}" class="text-decoration-none text-dark">Layanan</a>
            <span class="mx-1">&gt;</span>
            <span class="text-primary fw-medium">Detail</span>
            @endif
        </span>
        @endif

        <!-- Breadcrumbs untuk Artikel (eks Berita) -->
        @if(request()->routeIs('berita') || request()->routeIs('berita.detail'))
        <span class="text-secondary small ms-2 d-none d-md-inline">
            @if(request()->routeIs('berita'))
            <a href="{{ route('home') }}" class="text-decoration-none text-dark fw-bold">Halaman Utama</a>
            <span class="mx-1">&gt;</span>
            <span class="text-primary fw-medium">Artikel</span>
            @else
            <a href="{{ route('home') }}" class="text-decoration-none text-dark fw-bold">Halaman Utama</a>
            <span class="mx-1">&gt;</span>
            <a href="{{ route('berita') }}" class="text-decoration-none text-dark">Artikel</a>
            <span class="mx-1">&gt;</span>
            <span class="text-primary fw-medium">Detail</span>
            @endif
        </span>
        @endif

        <!-- Breadcrumbs untuk Galeri -->
        @if(request()->routeIs('galeri') || request()->routeIs('galeri.detail'))
        <span class="text-secondary small ms-2 d-none d-md-inline">
            @if(request()->routeIs('galeri'))
            <a href="{{ route('home') }}" class="text-decoration-none text-dark fw-bold">Halaman Utama</a>
            <span class="mx-1">&gt;</span>
            <span class="text-primary fw-medium">Galeri</span>
            @else
            <a href="{{ route('home') }}" class="text-decoration-none text-dark fw-bold">Halaman Utama</a>
            <span class="mx-1">&gt;</span>
            <!-- Perbaikan link dan teks yang sebelumnya salah cetak "Berita" -->
            <a href="{{ route('galeri') }}" class="text-decoration-none text-dark">Galeri</a>
            <span class="mx-1">&gt;</span>
            <span class="text-primary fw-medium">Detail</span>
            @endif
        </span>
        @endif

        <!-- Menu Utama (Hanya Tampil di Home) -->
        @if(request()->routeIs('home'))
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto text-center gap-lg-3 my-2 my-lg-0" id="navbar-example2">
                <li class="nav-item">
                    <a class="nav-link custom-nav-link fw-medium" href="#beranda">Halaman Utama</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-nav-link fw-medium" href="#tentang">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-nav-link fw-medium" href="#produk">Layanan</a>
                </li>
                <!-- href diubah ke #artikel menyesuaikan ID section yang baru diubah tadi -->
                <li class="nav-item">
                    <a class="nav-link custom-nav-link fw-medium" href="#artikel">Artikel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-nav-link fw-medium" href="#galeri">Galeri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-nav-link fw-medium" href="#kontak">Kontak</a>
                </li>
            </ul>

            <div class="d-flex justify-content-center">
                <!-- Label tombol diperjelas fungsinya untuk masuk ke CMS -->
                <a href="{{ route('login') }}" class="btn btn-primary rounded-pill px-4 fw-medium">Login</a>
            </div>
        </div>
        @else
        <!-- Tombol Login (Tampil di halaman selain Home) -->
        <div class="ms-auto">
            <a href="{{ route('login') }}" class="btn btn-primary rounded-pill px-4 fw-medium">Login</a>
        </div>
        @endif

    </div>
</nav>