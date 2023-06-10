@extends('layouts.service')

@section('title', 'Daftar Surat Pengantar')

@section('judul', 'Pengajuan Surat Pengantar')

@section('content')

    <div class="p-5">

        <form method="POST" action="{{ route('pengajuan.store') }}" enctype="multipart/form-data">
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
                <label for="tanggal" class="mb-3">Tanggal Pengajuan</label>
                <input type="date" class="form-control form-control-lg rounded-pill text-md" id="tanggal" name="tanggal" value="{{ date('Y-m-d') }}" readonly>
            </div>

            <div class="form-group">
                <label for="jenis_pelayanan_id" class="mb-3">Jenis Layanan</label>
                <select class="form-control select2 form-control-lg rounded-pill text-md @if ($errors->has('jenis_pelayanan_id')) is-invalid @endif" id="jenis_pelayanan_id" name="jenis_pelayanan_id">
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

            <div class="form-group">
                <label for="jenis_berkas" class="mb-3">Jenis Berkas Pendukung</label>
                <select class="form-control select2 form-control-lg rounded-pill text-md @if ($errors->has('jenis_berkas')) is-invalid @endif" id="jenis_berkas" name="jenis_berkas">
                    <option value="" selected disabled>Pilih Berkas</option>
                    <option value="1">Kartu Keluarga</option>
                    <option value="2">KTP/SIM/Kartu Pelajar</option>
                </select>
                @if ($errors->has('jenis_berkas'))
                    <div class="invalid-feedback">
                        {{ $errors->first('jenis_berkas') }}
                    </div>
                @endif
            </div>

            <div class="form-group">
                <label for="file_berkas" class="mb-3">Upload File Pendukung</label>
                <input type="file" class="form-control form-control-lg rounded-pill text-md @if ($errors->has('file_berkas')) is-invalid @endif" id="file_berkas" name="file_berkas" value="{{ old('file_berkas') }}" placeholder="Masukkan file anda"
                    accept="image/*,application/pdf">
                @if ($errors->has('file_berkas'))
                    <div class="invalid-feedback">
                        {{ $errors->first('file_berkas') }}
                    </div>
                @endif
            </div>

            <div class="d-flex w-100 justify-content-end mt-5">
                <a href="{{ route('dashboard.user') }}" class="btn btn-outline-secondary px-5 py-2 rounded-pill mr-3">Kembali</a>
                <button type="submit" class="btn btn-primary btn-green-pastel px-5 py-2 rounded-pill"
                    onclick="return confirm('Apakah anda yakin ingin mengajukan surat ini?\nPastikan data yang anda masukkan sudah benar\nAnda tidak dapat mengubah data setelah mengajukan surat ini.')">Selanjutnya</button>
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
