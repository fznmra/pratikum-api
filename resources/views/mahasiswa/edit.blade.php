@extends('layouts.main')
@section('title', 'Edit Mahasiswa')

@section('content')
<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">Edit Mahasiswa</h1>

    <div class="card shadow mb-4">
        <div class="card-header bg-warning text-white">
            <h6 class="m-0 font-weight-bold">Form Edit Mahasiswa</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" name="nim" id="nim" class="form-control" value="{{ $mahasiswa->nim }}" required>
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" value="{{ $mahasiswa->nama }}" required>
                </div>
                <a href="{{ route('dashboard') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Kembali
                </a>
                <button type="submit" class="btn btn-warning text-white">
                    <i class="fas fa-save"></i> Update
                </button>
            </form>
        </div>
    </div>

</div>
@endsection
