@extends('layouts.service')

@section('title', 'Detail Surat Pengantar')

@section('judul', 'Detail Pengajuan Surat Pengantar')

@section('content')

    <div class="p-5">

        <h3 class="font-weight-bold">Data yang Anda Ajukan sudah Masuk ke dalam Sistem Kami</h3>
        <p class="mb-4">Periksa Notifikasi anda secara berkala untuk meninjau status berkas yang anda ajukan</p>

        <div class="form-group">
            <label for="nik" class="mb-3">NIK</label>
            <input type="text" class="form-control form-control-lg rounded-pill text-md" id="nik" name="nik" value="{{ $pengajuan->user->nik }}" placeholder="Masukkan NIK anda" readonly>
        </div>

        <div class="form-group">
            <label for="nama" class="mb-3">Nama Lengkap</label>
            <input type="text" class="form-control form-control-lg rounded-pill text-md" id="nama" name="nama" value="{{ $pengajuan->user->name }}" placeholder="Masukkan nama lengkap anda" readonly>
        </div>

        <div class="form-group">
            <label for="tanggal" class="mb-3">Tanggal Pengajuan</label>
            <input type="date" class="form-control form-control-lg rounded-pill text-md" id="tanggal" name="tanggal" value="{{ $pengajuan->created_at->format('Y-m-d') }}" readonly>
        </div>

        <div class="form-group">
            <label for="layanan" class="mb-3">Jenis Layanan</label>
            <input type="text" class="form-control form-control-lg rounded-pill text-md" id="layanan" name="layanan" value="{{ $pengajuan->jenisPelayanan->nama_pelayanan }}" readonly>
        </div>

        <div class="form-group">
            <label for="jenis_berkas" class="mb-3">Jenis Berkas Pendukung</label>
            <input type="text" class="form-control form-control-lg rounded-pill text-md" id="jenis_berkas" name="jenis_berkas" value="{{ $pengajuan->jenis_berkas == 1 ? 'Kartu Keluarga' : 'KTP/SIM/Kartu Pelajar' }}" readonly>
        </div>

        <div class="form-group">
            <label for="file_berkas" class="mb-3">Upload File Pendukung</label>
            <div class="w-100 px-4 py-3 d-flex" style="background-color: #e9ecef; border: 1px solid #ced4da; border-radius: 15px;">
                <img src="{{ asset('storage/' . $pengajuan->file_berkas) }}" alt="Berkas Pendukung" class="img-fluid" style="height: 150px; border-radius: 15px; object-fit: cover;">
            </div>
        </div>

        <div class="form-group">
            <label for="status" class="mb-3">Status Pengajuan</label>
            <input type="text" class="form-control form-control-lg rounded-pill text-md" id="status" name="status"
                value="@if ($pengajuan->status_pengajuan == 1) Menunggu Verifikasi @elseif($pengajuan->status_pengajuan == 2) Verifikasi Berhasil @elseif($pengajuan->status_pengajuan == 3) Verifikasi Gagal @else Selesai @endif" readonly>
        </div>

        <div class="d-flex w-100 justify-content-end mt-5">
            <a href="{{ route('dashboard.user') }}" class="btn btn-outline-secondary px-5 py-2 rounded-pill mr-3">Beranda</a>
            <a href="{{ route('notifikasi') }}" class="btn btn-primary btn-green-pastel px-5 py-2 rounded-pill">Notifikasi</a>
        </div>

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
