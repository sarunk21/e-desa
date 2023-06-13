@extends('layouts.service')

@section('title', 'Dafar Antrian')

@section('judul', 'Pengambilan Antrian')

@section('content')

    <div class="p-5">

        @if ($jumlah_antrian >= 20)
            <h3 class="mb-4 text-center font-weight-bold">Maaf Antrian sudah penuh, silahkan kembali lagi besok !</h3>
            <div class="d-flex w-100 justify-content-center">
                <a href="{{ route('dashboard.user') }}" class="btn btn-outline-secondary px-5 py-2 rounded-pill mr-3">Kembali</a>
            </div>
        @else
            <h3 class="mb-4 text-center font-weight-bold">Urutan antrian <b>{{ $jumlah_antrian }}</b> dari <b>20</b></h3>

            @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                </div>
            @endif

            <form method="POST" action="{{ route('antrian.store') }}">
                @csrf

                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">

                <div class="form-group">
                    <label for="nik" class="mb-3">NIK</label>
                    <input type="text" class="form-control form-control-lg rounded-pill text-md" id="nik" name="nik" value="{{ auth()->user()->nik }}" placeholder="Masukkan NIK anda" readonly>
                </div>

                <div class="form-group">
                    <label for="nama" class="mb-3">Nama Lengkap</label>
                    <input type="text" class="form-control form-control-lg rounded-pill text-md" id="nama" name="nama" value="{{ auth()->user()->name }}" placeholder="Masukkan nama lengkap anda" readonly>
                </div>

                <div class="form-group">
                    <label for="tanggal" class="mb-3">Tanggal</label>
                    <input type="date" class="form-control form-control-lg rounded-pill text-md" id="tanggal" name="tanggal" value="{{ date('Y-m-d') }}" readonly>
                </div>

                <div class="form-group">
                    <label for="jenis_pelayanan_id" class="mb-3">Jenis Layanan</label>
                    <select class="select2 form-control form-control-lg rounded-pill text-md @if ($errors->has('jenis_pelayanan_id')) is-invalid @endif" id="jenis_pelayanan_id" name="jenis_pelayanan_id">
                        <option value="" selected disabled>Pilih layanan</option>
                        @foreach ($pelayanan as $item)
                            <option value="{{ $item->id }}">{{ $item->nama_pelayanan }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('jenis_pelayanan_id'))
                        <div class="invalid-feedback">
                            {{ $errors->first('jenis_pelayanan_id') }}
                        </div>
                    @endif
                </div>

                <div class="d-flex w-100 justify-content-end mt-5">
                    <a href="{{ route('dashboard.user') }}" class="btn btn-outline-secondary px-5 py-2 rounded-pill mr-3">Kembali</a>
                    <button type="submit" class="btn btn-primary btn-green-pastel px-5 py-2 rounded-pill">Selanjutnya</button>
                </div>
            </form>

        @endif

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
