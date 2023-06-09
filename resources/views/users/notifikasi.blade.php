@extends('layouts.guest')

@section('title', '| Notifikasi')

@section('content')

    @include('layouts.navbar')

    <div class="container">
        <div class="card mt-4">
            <div class="card-header">
                <h3 class="text-center">Notifikasi</h3>
            </div>
            <div class="card-body px-4 pt-4">
                @forelse ($notifikasi as $item)
                    <div class="card w-100 mt-3">
                        <div class="card-body d-flex align-items-center justify-content-around">
                            <div>
                                <h5 class="card-title">{{ $item->judul_notifikasi }}</h5>
                                <p class="card-text">{{ $item->isi_notifikasi }}</p>
                            </div>
                            <div>
                                <a href="{{ $item->notifikasi_link }}">Detail</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-center">Tidak ada notifikasi</p>
                @endforelse
            </div>
        </div>
    </div>

@endsection

@push('styles')
    <style>
        .border-bottom-green {
            border-bottom: 5px solid #51839C;
        }

        .h-screen {
            height: 100vh;
        }

        .backgroud-desa {
            background-image: url("{{ asset('img/banner-user-dashboard.png') }}");
            background-size: cover;
            top: 0;
            z-index: 1;
        }

        .layanan {
            width: 300px;
            height: 300px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.25);
            background-color: #FFFFFF;
            border-radius: 20px;
            padding: 25px;
            text-decoration: none;
            color: #000000;
        }
    </style>
@endpush
