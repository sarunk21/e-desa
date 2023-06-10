@extends('layouts.app')

@section('title', 'Edit Admin Desa | Desa Sukamaju')

@section('page-title', 'Admin Desa')

@section('location', 'Admin')

@section('location-title', 'Admin Desa')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Edit Admin Desa</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">

                        <form method="POST" action="{{ route('admin.desa.update', $admin_desa->id) }}">
                            @csrf
                            @method('PUT')

                            <input type="hidden" name="user_type" value="2">

                            <div class="form-group">
                                <label for="nik" class="mb-3">NIK</label>
                                <input type="text" class="form-control rounded-lg @if ($errors->has('nik')) is-invalid @endif" id="nik" name="nik" value="{{ $admin_desa->nik }}" data-inputmask='"mask": "9999999999999999"' data-mask>
                                @if ($errors->has('nik'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('nik') }}
                                    </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="name" class="mb-3">Nama</label>
                                <input type="text" class="form-control rounded-lg @if ($errors->has('name')) is-invalid @endif" id="name" name="name" value="{{ $admin_desa->name }}">
                                @if ($errors->has('name'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('name') }}
                                    </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="email" class="mb-3">Email</label>
                                <input type="text" class="form-control rounded-lg email @if ($errors->has('email')) is-invalid @endif" id="email" name="email" value="{{ $admin_desa->email }}">
                                @if ($errors->has('email'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('email') }}
                                    </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="phone_number" class="mb-3">No. HP</label>
                                <input type="text" class="form-control rounded-lg phone-number @if ($errors->has('phone_number')) is-invalid @endif" id="phone_number" name="phone_number" value="{{ $admin_desa->phone_number }}">
                                @if ($errors->has('phone_number'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('phone_number') }}
                                    </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="alamat" class="mb-3">Alamat</label>
                                <textarea class="form-control rounded-lg @if ($errors->has('alamat')) is-invalid @endif" id="alamat" name="alamat">{{ $admin_desa->alamat }}</textarea>
                                @if ($errors->has('alamat'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('alamat') }}
                                    </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                <input type="date" class="form-control rounded-lg @if ($errors->has('tanggal_lahir')) is-invalid @endif" id="tanggal_lahir" name="tanggal_lahir" value="{{ $admin_desa->tanggal_lahir }}">
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
                                    <option value="L" {{ $admin_desa->jenis_kelamin == 'L' ? 'selected' : '' }}>Laki-laki</option>
                                    <option value="P" {{ $admin_desa->jenis_kelamin == 'P' ? 'selected' : '' }}>Perempuan</option>
                                </select>
                                @if ($errors->has('jenis_kelamin'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('jenis_kelamin') }}
                                    </div>
                                @endif
                            </div>

                            <div class="d-flex w-100 justify-content-end mt-4">
                                <button type="submit" class="btn btn-primary btn-green-pastel px-5 py-2">Edit</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
