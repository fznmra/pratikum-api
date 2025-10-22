<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class DashboardController extends Controller
{
    // Halaman utama (daftar mahasiswa)
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    // Halaman form tambah
    public function create()
    {
        return view('mahasiswa.create');
    }

    // Simpan data baru
    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required|unique:mahasiswa,nim',
            'nama' => 'required',
        ]);

        Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
        ]);

        return redirect()->route('dashboard')->with('success', 'Mahasiswa berhasil ditambahkan!');
    }

    // Halaman form edit
    public function edit($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    // Update data
    public function update(Request $request, $id)
    {
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
        ]);

        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->update([
            'nim' => $request->nim,
            'nama' => $request->nama,
        ]);

        return redirect()->route('dashboard')->with('success', 'Data mahasiswa berhasil diperbarui!');
    }

    // Hapus data
    public function destroy($id)
    {
        Mahasiswa::findOrFail($id)->delete();
        return redirect()->route('dashboard')->with('success', 'Data mahasiswa berhasil dihapus!');
    }
}
