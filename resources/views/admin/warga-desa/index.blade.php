@extends('layouts.app')

@section('title', 'Warga Desa | Desa Sukamaju')

@section('page-title', 'Warga Desa')

@section('location', 'Admin')

@section('location-title', 'Warga Desa')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                @if (session('status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Berhasil!</strong> {{ session('status') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="card card-primary collapsed-card w-100">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Warga Desa</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">

                        <form method="POST" action="{{ route('warga.desa.store') }}">
                            @csrf

                            <input type="hidden" name="user_type" value="2">

                            <div class="form-group">
                                <label for="nik" class="mb-3">NIK</label>
                                <input type="text" class="form-control rounded-lg @if ($errors->has('nik')) is-invalid @endif" id="nik" name="nik" value="{{ old('nik') }}" placeholder="Masukkan NIK"
                                    data-inputmask='"mask": "9999999999999999"' data-mask>
                                @if ($errors->has('nik'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('nik') }}
                                    </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="name" class="mb-3">Nama</label>
                                <input type="text" class="form-control rounded-lg @if ($errors->has('name')) is-invalid @endif" id="name" name="name" value="{{ old('name') }}" placeholder="Masukkan Nama">
                                @if ($errors->has('name'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('name') }}
                                    </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="email" class="mb-3">Email</label>
                                <input type="text" class="form-control rounded-lg email @if ($errors->has('email')) is-invalid @endif" id="email" name="email" value="{{ old('email') }}" placeholder="Masukkan Email">
                                @if ($errors->has('email'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('email') }}
                                    </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="phone_number" class="mb-3">No. HP</label>
                                <input type="text" class="form-control rounded-lg phone-number @if ($errors->has('phone_number')) is-invalid @endif" id="phone_number" name="phone_number" value="{{ old('phone_number') }}" placeholder="Masukkan No. HP">
                                @if ($errors->has('phone_number'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('phone_number') }}
                                    </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="alamat" class="mb-3">Alamat</label>
                                <textarea class="form-control rounded-lg @if ($errors->has('alamat')) is-invalid @endif" id="alamat" name="alamat" placeholder="Masukkan Alamat">{{ old('alamat') }}</textarea>
                                @if ($errors->has('alamat'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('alamat') }}
                                    </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                <input type="date" class="form-control rounded-lg @if ($errors->has('tanggal_lahir')) is-invalid @endif" id="tanggal_lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}">
                                @if ($errors->has('tanggal_lahir'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('tanggal_lahir') }}
                                    </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <select class="form-control select2 rounded-lg @if ($errors->has('jenis_kelamin')) is-invalid @endif" id="jenis_kelamin" name="jenis_kelamin">
                                    <option value="" disabled selected>-- Pilih Jenis Kelamin --</option>
                                    <option value="L" {{ old('jenis_kelamin') == 'L' ? 'selected' : '' }}>Laki-laki</option>
                                    <option value="P" {{ old('jenis_kelamin') == 'P' ? 'selected' : '' }}>Perempuan</option>
                                </select>
                                @if ($errors->has('jenis_kelamin'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('jenis_kelamin') }}
                                    </div>
                                @endif
                            </div>

                            <div class="d-flex w-100 justify-content-end mt-5">
                                <button type="submit" class="btn btn-primary btn-green-pastel px-5 py-2">Tambah</button>
                            </div>
                        </form>

                    </div>
                </div>

                <div class="card">
                    <div class="card-header border-0">
                        <div class="d-flex justify-content-between">
                            <h3 class="card-title">List Warga Desa</h3>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="row">

                            <table id="table" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Nomor Handphone</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($warga_desa as $item)
                                        <tr>
                                            <td>{{ $item->created_at }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->phone_number }}</td>
                                            <td>
                                                <a href="{{ route('warga.desa.show', $item->id) }}" class="btn btn-info btn-sm">Detail</a>
                                                <a href="{{ route('warga.desa.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                                <form action="{{ route('warga.desa.destroy', $item->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center">Tidak ada data</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            {{ $warga_desa->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
