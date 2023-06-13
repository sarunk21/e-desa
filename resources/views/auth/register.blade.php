@extends('layouts.auth')

@section('title', 'Register')

@section('content')
    <div class="row min-h-screen align-items-center justify-content-between my-5">
        <div class="col-7">
            <div class="container">
                <div class="d-flex flex-column justify-content-center align-items-center mb-5">
                    <img src="{{ asset('img/logo.png') }}" alt="Logo" class="img-md">
                    <h1>Register</h1>
                </div>

                {{-- List Error --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li class="text-sm">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('register.user') }}">
                    @csrf

                    <input type="hidden" name="user_type" value="2">

                    <div class="form-group">
                        <label for="nik" class="mb-3">NIK</label>
                        <input type="text" class="form-control rounded-lg @if ($errors->has('nik')) is-invalid @endif" id="nik" name="nik" value="{{ old('nik') }}" data-inputmask='"mask": "9999999999999999"' data-mask>
                        @if ($errors->has('nik'))
                            <div class="invalid-feedback">
                                {{ $errors->first('nik') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="name" class="mb-3">Nama</label>
                        <input type="text" class="form-control rounded-lg @if ($errors->has('name')) is-invalid @endif" id="name" name="name" value="{{ old('name') }}">
                        @if ($errors->has('name'))
                            <div class="invalid-feedback">
                                {{ $errors->first('name') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="email" class="mb-3">Email</label>
                        <input type="text" class="form-control rounded-lg email @if ($errors->has('email')) is-invalid @endif" id="email" name="email" value="{{ old('email') }}">
                        @if ($errors->has('email'))
                            <div class="invalid-feedback">
                                {{ $errors->first('email') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="phone_number" class="mb-3">No. HP</label>
                        <input type="text" class="form-control rounded-lg phone-number @if ($errors->has('phone_number')) is-invalid @endif" id="phone_number" name="phone_number" value="{{ old('phone_number') }}">
                        @if ($errors->has('phone_number'))
                            <div class="invalid-feedback">
                                {{ $errors->first('phone_number') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="alamat" class="mb-3">Alamat</label>
                        <textarea class="form-control rounded-lg @if ($errors->has('alamat')) is-invalid @endif" id="alamat" name="alamat">{{ old('alamat') }}</textarea>
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
                        <select class="form-control rounded-lg @if ($errors->has('jenis_kelamin')) is-invalid @endif" id="jenis_kelamin" name="jenis_kelamin">
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

                    <div class="d-flex w-100 justify-content-center mt-5">
                        <a href="{{ route('wellcome') }}" class="btn btn-outline-secondary px-5 py-2 rounded-pill mr-3">Dashboard</a>
                        <button type="submit" class="btn btn-primary btn-green-pastel px-5 py-2 rounded-pill">Register</button>
                    </div>
                </form>

                <div class="d-flex justify-content-center mt-3">
                    <p class="text-center">Sudah punya akun? <a href="{{ route('login') }}">Login</a></p>
                </div>
            </div>
        </div>
        <div class="col-4">
            <img src="{{ asset('img/banner-login.webp') }}" alt="logo" class="img-fluid">
        </div>
    </div>
@endsection

@push('styles')
    <style>
        .btn-green-pastel {
            background-color: #51839C;
            border-color: #51839C;
            color: #fff;
        }

        .btn-green-pastel:hover {
            background-color: #3B6C81;
            border-color: #3B6C81;
            color: #fff;
        }
    </style>
@endpush
