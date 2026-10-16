<footer class="bg-primary text-white py-5">
    <div class="container">
        <!-- justify-content-between untuk memberi jarak elegan antara kiri dan kanan -->
        <div class="row g-4 justify-content-between">
            
            <!-- Kolom 1: Branding Perusahaan -->
            <div class="col-12 col-lg-5">
                <h4 class="fw-bold mb-3">PT Solusi Koneksi Anda</h4>
                <p class="opacity-75 mb-4 lh-lg" style="max-width: 400px; font-size: 0.95rem;">
                    Mitra teknologi terpercaya dalam pengembangan perangkat lunak, infrastruktur IT, dan transformasi digital untuk mendukung kesuksesan bisnis Anda.
                </p>
                <div class="d-flex gap-3 fs-5">
                    <a href="#" class="text-white"><ion-icon name="logo-linkedin"></ion-icon></a>
                    <a href="#" class="text-white"><ion-icon name="logo-instagram"></ion-icon></a>
                    <a href="#" class="text-white"><ion-icon name="logo-facebook"></ion-icon></a>
                    <a href="#" class="text-white"><ion-icon name="logo-whatsapp"></ion-icon></a>
                </div>
            </div>

            <!-- Kolom 2: Navigasi & Kontak -->
            <div class="col-12 col-lg-6">
                <div class="row g-4">
                    
                    <!-- Menu Navigasi Utama -->
                    <!-- Memakan separuh layar HP (col-6), dan proporsional di PC (col-md-4) -->
                    <div class="col-6 col-md-4">
                        <h5 class="fw-bold mb-3">Menu</h5>
                        <ul class="list-unstyled d-flex flex-column gap-2 opacity-75 mb-0">
                            <li><a href="#beranda" class="text-white text-decoration-none">Beranda</a></li>
                            <li><a href="#tentang" class="text-white text-decoration-none">Profil Perusahaan</a></li>
                            <li><a href="#produk" class="text-white text-decoration-none">Layanan & Produk</a></li>
                            <li><a href="#artikel" class="text-white text-decoration-none">Artikel</a></li>
                            <li><a href="#galeri" class="text-white text-decoration-none">Galeri</a></li>
                            <li><a href="#kontak" class="text-white text-decoration-none">Kontak</a></li>
                        </ul>
                    </div>

                    <!-- Informasi Kontak -->
                    <!-- Memakan layar penuh di HP (col-12) agar alamat tidak offside, melebar di PC (col-md-8) -->
                    <div class="col-12 col-sm-6 col-md-8">
                        <h5 class="fw-bold mb-3">Hubungi Kami</h5>
                        <div class="d-flex flex-column gap-3 opacity-75">
                            <div class="d-flex align-items-start gap-2">
                                <i class="bi bi-geo-alt-fill mt-1"></i>
                                <span>Jl. Raya Pajajaran No. 88 F, Kota Bogor 16153</span>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <i class="bi bi-telephone-fill"></i>
                                <span>(0251) 1234567</span>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <i class="bi bi-envelope-fill"></i>
                                <span>halo@solusikoneksi.co.id</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <hr class="my-4 border-light opacity-25">
        <p class="text-center small opacity-75 mb-0">&copy; {{ date('Y') }} PT Solusi Koneksi Anda. All rights reserved.</p>
    </div>
</footer>