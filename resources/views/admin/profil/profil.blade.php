@extends('layouts.admin')

@section('title', 'Kelola Profil Perusahaan')

@section('content')
<div class="px-md-2">
    <h3 class="fw-bold text-dark mb-4">Profil Perusahaan</h3>

    <!-- Alert Sukses -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
            <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card border-0 shadow-sm p-4" style="border-radius: 12px;">
        <form action="{{ route('admin.profil.update') }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Penjelas / Deskripsi -->
            <div class="mb-4">
                <label class="form-label fw-bold text-dark">Deskripsi Perusahaan (Penjelas)</label>
                <textarea name="deskripsi" class="form-control bg-light p-3" rows="6" required style="border: 1px solid #dee2e6; border-radius: 10px;">{{ old('deskripsi', $profil->deskripsi) }}</textarea>
                <small class="text-muted">Teks ini akan muncul di halaman Beranda dan Tentang Kami.</small>
            </div>

            <div class="row g-4 mb-4">
                <!-- Visi -->
                <div class="col-lg-6">
                    <label class="form-label fw-bold text-dark">Visi Perusahaan</label>
                    <textarea name="visi" class="form-control bg-light p-3" rows="5" required style="border: 1px solid #dee2e6; border-radius: 10px;">{{ old('visi', $profil->visi) }}</textarea>
                </div>

                <!-- Misi -->
                <div class="col-lg-6">
                    <label class="form-label fw-bold text-dark">Misi Perusahaan</label>
                    <textarea name="misi" class="form-control bg-light p-3" rows="5" required style="border: 1px solid #dee2e6; border-radius: 10px;" placeholder="Gunakan enter/baris baru untuk memisahkan setiap poin misi.">{{ old('misi', $profil->misi) }}</textarea>
                </div>
            </div>

            <button type="submit" class="btn text-white fw-bold px-4 py-2 rounded-pill" style="background-color: #0d77e2;">
                Simpan Perubahan
            </button>
        </form>
    </div>
</div>
@endsection