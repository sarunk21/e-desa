<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <link rel="icon" href="img/logo.ico" type="image/x-icon" />

    <title>Desa Sukamaju</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light py-4">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="img/logo.png" class="d-inline-block" width="50" height="50" alt="">
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
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold btn rounded-pill" href="{{ route('login') }}" style="background-color: #51839C; color: #FFFFFF; padding: 8px 42px;">Login</a>
                    </li>
                </ul>
            </div>
    </nav>

    <div class="w-screen h-screen my-5">
        <div class="container">
            <div class="row m-0">
                <div class="col-7 d-flex">
                    <div class="row align-self-center">
                        <h1 class="text-bold" style="font-size: 50px;">SELAMAT DATANG DI LAYANAN <br /> DESA SUKAMAJU</h1>
                        <p>Buat urusan Administrasi dan Pelayanan Desa lebih simpel dengan interaksi digital Pelayanan Desa dengan warga.</p>
                    </div>
                </div>
                <div class="col-5">
                    <img src="img/banner.png" alt="Banner Desa">
                </div>
            </div>
        </div>
    </div>

    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="dist/js/adminlte.js"></script>
</body>

</html>
