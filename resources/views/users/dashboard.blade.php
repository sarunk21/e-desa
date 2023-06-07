<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <link rel="icon" href="img/logo.ico" type="image/x-icon" />

    <title>Desa Sukamaju</title>

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
            background-position: center top 70%;
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
</head>

<body>

    <div class="h-screen overflow-hidden">

        <nav class="navbar navbar-expand-lg navbar-light bg-light py-4">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="#">
                    <img src="img/logo.png" class="d-inline-block" width="50" height="50" alt="">
                    <div class="d-flex flex-column ml-3">
                        <span class="text-sm">desa</span>
                        <span class="text-bold text-sm">SUKAMAJU</span>
                    </div>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent" style="color: #000000;">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mr-4">
                            <a class="nav-link font-weight-bold" href="#">Profile Desa</a>
                        </li>
                        <li class="nav-item dropdown mr-4">
                            <a class="nav-link font-weight-bold dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                Layanan
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Pengambilan Antrian</a>
                                <a class="dropdown-item" href="#">Pengajuan Surat Pengantar</a>
                                <a class="dropdown-item" href="#">Aduan Masyarakat</a>
                            </div>
                        </li>
                        <li class="nav-item mr-4">
                            <a class="nav-link font-weight-bold" href="#">Informasi</a>
                        </li>
                        <li class="nav-item mr-4">
                            <a class="nav-link font-weight-bold" href="#">Kontak</a>
                        </li>
                        @if (auth())
                            <li class="nav-item dropdown mr-4">
                                <a class="nav-link font-weight-bold dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                    {{ auth()->user()->name }}
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Notifikasi</a>
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Logout</button>
                                    </form>
                                </div>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link font-weight-bold btn rounded-pill" href="{{ route('login') }}" style="background-color: #51839C; color: #FFFFFF; padding: 8px 42px;">Login</a>
                            </li>
                        @endif
                    </ul>
                </div>
        </nav>

        <div class="w-screen h-100 backgroud-desa">
            <div class="container h-100 d-flex flex-column align-items-center" style="padding-top: 7%;">
                <div class="text-center mb-5">
                    <h1 class="text-bold mb-4">Selamat Datang, {{ auth()->user()->name ?? 'Pengguna' }}</h1>
                    <p class="text-lg">Butuh pelayanan apa hari ini?</p>
                </div>
                <div class="w-100 d-flex justify-content-around align-items-center mt-4">
                    <a class="layanan" href="{{ route('pengajuan') }}">
                        <i class="fa fa-file-alt fa-6x"></i>
                        <p class="text-lg mt-4">Pengajuan Surat Pengantar</p>
                    </a>
                    <a class="layanan" href="{{ route('antrian') }}">
                        <i class="fa fa-users fa-6x"></i>
                        <p class="text-lg mt-4">Ambil Antrian Pelayanan</p>
                    </a>
                    <a class="layanan">
                        <i class="fa fa-chalkboard-teacher fa-6x"></i>
                        <p class="text-lg mt-4">Aduan Masyarakat Desa</p>
                    </a>
                </div>
            </div>
        </div>

    </div>

    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('dist/js/adminlte.js') }}"></script>
</body>

</html>
