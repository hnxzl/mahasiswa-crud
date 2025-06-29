@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Mahasiswa</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $mahasiswa->nama }}</h5>
            <p class="card-text"><strong>NIM:</strong> {{ $mahasiswa->nim }}</p>
            <p class="card-text"><strong>Jurusan:</strong> {{ $mahasiswa->jurusan }}</p>
            <p class="card-text"><strong>Alamat:</strong> {{ $mahasiswa->alamat }}</p>
            <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
@endsection 