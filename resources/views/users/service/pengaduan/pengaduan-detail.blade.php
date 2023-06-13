@extends('layouts.service')

@section('title', 'Detail Aduan')

@section('judul', 'Detail Pengaduan')

@section('content')

    <div class="p-5">

        <h4 class="text-center mb-4">"Menyuarakan Ketidakpuasan secara Anonim: Mengungkap Pengaduan yang Tersembunyi"</h4>

        <form method="POST" action="">
            @csrf

            <div class="form-group">
                <label for="nama" class="mb-3">Isi Aduan</label>
                <textarea name="isi_pengaduan" id="isi_pengaduan" class="form-control form-control-lg text-md @error('isi_pengaduan') is-invalid @enderror" rows="5" placeholder="Masukkan isi pengaduan anda" readonly>{{ $pengaduan->isi_pengaduan }}</textarea>
            </div>

            <div class="d-flex w-100 justify-content-end mt-5">
                <a href="{{ route('dashboard.user') }}" class="btn btn-outline-secondary px-5 py-2 rounded-pill mr-3">Dashboard</a>
                <a href="{{ route('notifikasi') }}" class="btn btn-primary btn-green-pastel px-5 py-2 rounded-pill">Notifikasi</a>
            </div>
        </form>
    </div>

@endsection

@push('styles')
    <style>
        .btn-green-pastel {
            background-color: #51839C !important;
            border-color: #51839C !important;
        }

        .btn-green-pastel:hover {
            background-color: #3B6E85 !important;
            border-color: #3B6E85 !important;
        }
    </style>
@endpush
