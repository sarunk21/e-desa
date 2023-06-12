@extends('layouts.app')

@section('title', 'Detail Pengaduan | Desa Sukamaju')

@section('page-title', 'Pengaduan')

@section('location', 'Admin')

@section('location-title', 'Pengaduan')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Detail Pengaduan</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">

                        <form method="POST" action="">

                            <div class="form-group">
                                <label for="nama" class="mb-3">Isi Aduan</label>
                                <textarea name="isi_pengaduan" id="isi_pengaduan" class="form-control form-control-lg text-md @error('isi_pengaduan') is-invalid @enderror" rows="5" placeholder="Masukkan isi pengaduan anda" readonly>{{ $pengaduan->isi_pengaduan }}</textarea>
                            </div>

                            <div class="d-flex w-100 justify-content-end mt-4">
                                <a href="{{ route('admin.pengaduan.index') }}" class="btn btn-secondary rounded-pill mr-2">Kembali</a>
                            </div>

                        </form>


                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
