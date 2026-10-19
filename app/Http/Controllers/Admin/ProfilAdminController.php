<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Profil;
use Illuminate\Http\Request;

class ProfilAdminController extends Controller
{
    // 1. Fungsi buat nampilin halaman form (edit)
    public function edit()
    {
        $profil = Profil::first();
        
        // Kalau database profil masih kosong (belum ada data sama sekali), bikin otomatis
        if (!$profil) {
            $profil = Profil::create([
                'deskripsi' => 'Tulis deskripsi perusahaan...',
                'visi' => 'Tulis visi perusahaan...',
                'misi' => 'Tulis misi perusahaan...'
            ]);
        }

        // Pastikan nyari file blade-nya di: resources/views/admin/profil/profil.blade.php
        return view('admin.profil.profil', compact('profil'));
    }

    // 2. Fungsi buat nyimpen data (update)
    public function update(Request $request)
    {
        // Opsional: Boleh tambah validasi biar datanya nggak boleh dikosongin
        $request->validate([
            'deskripsi' => 'required',
            'visi' => 'required',
            'misi' => 'required',
        ]);

        $profil = Profil::first();
        $profil->update([
            'deskripsi' => $request->deskripsi,
            'visi' => $request->visi,
            'misi' => $request->misi,
        ]);

        return redirect()->back()->with('success', 'Profil Perusahaan berhasil diperbarui!');
    }
}