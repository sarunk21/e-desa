@extends('layouts.service')

@section('title', 'Dafar Antrian')

@section('judul', 'Pengambilan Antrian')

@section('content')

    <div class="p-5">
        <h3 class="mb-4 text-center font-weight-bold">Kuota layanan hari ini <b>15</b> dari <b>20</b></h3>
        <form method="POST" action="{{ route('login.user') }}">
            @csrf

            <div class="form-group">
                <label for="nik" class="mb-3">NIK</label>
                <input type="text" class="form-control form-control-lg rounded-pill text-md @if ($errors->has('nik')) is-invalid @endif" id="nik" name="nik" value="{{ old('nik') }}" placeholder="Masukkan NIK anda">
                @if ($errors->has('nik'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nik') }}
                    </div>
                @endif
            </div>

            <div class="form-group">
                <label for="nama" class="mb-3">Nama Lengkap</label>
                <input type="text" class="form-control form-control-lg rounded-pill text-md @if ($errors->has('nama')) is-invalid @endif" id="nama" name="nama" value="{{ old('nama') }}" autofocus
                    placeholder="Masukkan nama lengkap anda">
                @if ($errors->has('nama'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nama') }}
                    </div>
                @endif
            </div>

            <div class="form-group">
                <label for="tanggal" class="mb-3">Tanggal</label>
                <input type="date" class="form-control form-control-lg rounded-pill text-md @if ($errors->has('tanggal')) is-invalid @endif" id="tanggal" name="tanggal" value="{{ old('tanggal') }}" placeholder="Masukkan tanggal anda">
                @if ($errors->has('tanggal'))
                    <div class="invalid-feedback">
                        {{ $errors->first('tanggal') }}
                    </div>
                @endif
            </div>

            <div class="form-group">
                <label for="layanan" class="mb-3">Jenis Layanan</label>
                <select class="form-control form-control-lg rounded-pill text-md @if ($errors->has('layanan')) is-invalid @endif" id="layanan" name="layanan">
                    <option value="" selected disabled>Pilih layanan</option>
                    <option value="1">Pembuatan KPT</option>
                    <option value="2">Pembuatan Kartu Keluarga</option>
                    <option value="3">Lain - Lain</option>
                </select>
                @if ($errors->has('layanan'))
                    <div class="invalid-feedback">
                        {{ $errors->first('layanan') }}
                    </div>
                @endif
            </div>

            <div class="d-flex w-100 justify-content-end mt-5">
                <a href="{{ route('dashboard.user') }}" class="btn btn-outline-secondary px-5 py-2 rounded-pill mr-3">Kembali</a>
                <button type="submit" class="btn btn-primary btn-green-pastel px-5 py-2 rounded-pill">Selanjutnya</button>
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
