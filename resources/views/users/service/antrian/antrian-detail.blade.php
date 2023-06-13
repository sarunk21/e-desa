@extends('layouts.service')

@section('title', 'Detail Antrian')

@section('judul', 'Detail Pendaftaran Antrian')

@section('content')

    <div class="p-5">
        <form method="POST" action="" class="mt-4">
            @csrf

            <div class="form-group">
                <label for="no_antrian" class="mb-3">Nomor Antrian</label>
                <input type="text" class="form-control form-control-lg rounded-pill text-md" id="no_antrian" name="no_antrian" value="{{ $antrian->no_antrian }}" placeholder="Masukkan nomor antrian anda" readonly>
            </div>

            <div class="form-group">
                <label for="nik" class="mb-3">NIK</label>
                <input type="text" class="form-control form-control-lg rounded-pill text-md" id="nik" name="nik" value="{{ $antrian->user->nik }}" placeholder="Masukkan NIK anda" readonly>
            </div>

            <div class="form-group">
                <label for="nama" class="mb-3">Nama Lengkap</label>
                <input type="text" class="form-control form-control-lg rounded-pill text-md" id="nama" name="nama" value="{{ $antrian->user->name }}" placeholder="Masukkan nama lengkap anda" readonly>
            </div>

            <div class="form-group">
                <label for="tanggal" class="mb-3">Tanggal</label>
                <input type="date" class="form-control form-control-lg rounded-pill text-md" id="tanggal" name="tanggal" value="{{ $antrian->created_at->format('Y-m-d') }}" readonly>
            </div>

            <div class="form-group">
                <label for="layanan" class="mb-3">Jenis Layanan</label>
                <input type="text" class="form-control form-control-lg rounded-pill text-md" id="layanan" name="layanan" value="{{ $antrian->jenisPelayanan->nama_pelayanan }}" readonly>
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
