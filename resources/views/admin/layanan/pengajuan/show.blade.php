@extends('layouts.app')

@section('title', 'Detail Pengajuan Surat | Desa Sukamaju')

@section('page-title', 'Pengajuan Surat')

@section('location', 'Admin')

@section('location-title', 'Pengajuan Surat')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Detail Pengajuan Surat</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">

                        <form method="POST" action="{{ route('admin.desa.update', $pengajuan->id) }}">

                            <div class="form-group">
                                <label for="nik" class="mb-3">NIK</label>
                                <input type="text" class="form-control rounded-lg" id="nik" name="nik" value="{{ $pengajuan->user->nik }}" readonly>
                            </div>

                            <div class="form-group">
                                <label for="name" class="mb-3">Nama</label>
                                <input type="text" class="form-control rounded-lg" id="name" name="name" value="{{ $pengajuan->user->name }}" readonly>
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

                            <div class="d-flex w-100 justify-content-end mt-4">
                                <a href="{{ route('admin.pengajuan.index') }}" class="btn btn-secondary rounded-pill mr-2">Kembali</a>
                            </div>

                        </form>


                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
