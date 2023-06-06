@extends('layouts.auth')

@section('content')
    <div class="row min-h-screen align-items-center justify-content-between">
        <div class="col-7">
            <div class="container">
                <div class="d-flex flex-column justify-content-center align-items-center mb-5">
                    <img src="{{ asset('img/logo.png') }}" alt="Logo" class="img-md">
                    <h1>Login</h1>
                </div>

                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ $error }}
                        </div>
                    @endforeach
                @endif

                <form method="POST" action="{{ route('login.user') }}">
                    @csrf
                    <div class="form-group">
                        <label for="nik" class="mb-4">NIK</label>
                        <input type="text" class="form-control rounded-pill py-4 px-3 @error('nik') is-invalid @enderror" id="nik" name="nik" value="{{ old('nik') }}">
                        @error('nik')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group position-relative">
                        <label for="password" class="mb-4">Password</label>
                        <div class="input-group" id="show_hide_password">
                            <input type="password" class="form-control rounded-pill py-4 px-3 @error('nik') is-invalid @enderror" id="password" name="password">
                            <div class="position-absolute right-midlle">
                                <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="d-flex w-100 justify-content-center mt-5">
                        <button type="submit" class="btn btn-primary btn-green-pastel px-5 py-2 rounded-pill">Login</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-4">
            <img src="{{ asset('img/banner-login.png') }}" alt="logo" class="img-fluid">
        </div>
    </div>
@endsection

@push('styles')
    <style>
        .right-midlle {
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            z-index: 9999;
        }

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

@push('scripts')
    <script>
        $(document).ready(function() {
            $("#show_hide_password a").on('click', function(event) {
                event.preventDefault();
                if ($('#show_hide_password input').attr("type") == "text") {
                    $('#show_hide_password input').attr('type', 'password');
                    $('#show_hide_password i').addClass("fa-eye-slash");
                    $('#show_hide_password i').removeClass("fa-eye");
                } else if ($('#show_hide_password input').attr("type") == "password") {
                    $('#show_hide_password input').attr('type', 'text');
                    $('#show_hide_password i').removeClass("fa-eye-slash");
                    $('#show_hide_password i').addClass("fa-eye");
                }
            });
        });
    </script>
@endpush
