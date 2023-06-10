@extends('layouts.app')

@section('title', 'Detail Warga Desa | Desa Sukamaju')

@section('page-title', 'Warga Desa')

@section('location', 'Admin')

@section('location-title', 'Warga Desa')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Detail Warga Desa</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">

                        <form method="POST" action="">

                            <div class="form-group">
                                <label for="nik" class="mb-3">NIK</label>
                                <input type="text" class="form-control rounded-lg" id="nik" name="nik" value="{{ $warga_desa->nik }}" readonly>
                            </div>

                            <div class="form-group">
                                <label for="name" class="mb-3">Nama</label>
                                <input type="text" class="form-control rounded-lg" id="name" name="name" value="{{ $warga_desa->name }}" readonly>
                            </div>

                            <div class="form-group">
                                <label for="email" class="mb-3">Email</label>
                                <input type="email" class="form-control rounded-lg" id="email" name="email" value="{{ $warga_desa->email }}" readonly>
                            </div>

                            <div class="form-group">
                                <label for="phone_number" class="mb-3">No. HP</label>
                                <input type="text" class="form-control rounded-lg" id="phone_number" name="phone_number" value="{{ $warga_desa->phone_number }}" readonly>
                            </div>

                            <div class="form-group">
                                <label for="alamat" class="mb-3">Alamat</label>
                                <textarea class="form-control rounded-lg" id="alamat" name="alamat" readonly>{{ $warga_desa->alamat }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                <input type="date" class="form-control rounded-lg" id="tanggal_lahir" name="tanggal_lahir" value="{{ $warga_desa->tanggal_lahir }}" readonly>
                            </div>

                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <input type="text" class="form-control rounded-lg" id="jenis_kelamin" name="jenis_kelamin" value="{{ $warga_desa->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}" readonly>
                            </div>

                            <div class="d-flex w-100 justify-content-end mt-4">
                                <a href="{{ route('warga.desa.index') }}" class="btn btn-secondary rounded-pill mr-2">Kembali</a>
                            </div>

                        </form>


                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
