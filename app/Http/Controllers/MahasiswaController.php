<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('dashboard', compact('mahasiswa'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required|unique:mahasiswa,nim',
            'nama' => 'required|string|max:100',
        ]);

        Mahasiswa::create($request->only(['nim', 'nama']));

        return redirect()->route('dashboard')->with('success', 'Data mahasiswa berhasil ditambahkan!');
    }
}
