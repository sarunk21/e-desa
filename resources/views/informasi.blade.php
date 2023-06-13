@extends('layouts.guest')

@section('title', '| Under Maintenance')

@section('content')
    @include('layouts.navbar')

    <div class="w-100 h-100 d-flex flex-column align-items-center justify-content-center mt-5">
        <h1>Halaman sedang dalam pengembangan</h1>
        <img src="{{ asset('img/under-maintenance.webp') }}" alt="under-maintenance" class="img-fluid w-50">
    </div>
@endsection
