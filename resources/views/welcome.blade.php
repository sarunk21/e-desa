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
    </style>
</head>

<body>

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

    <div class="w-screen py-5" style="background-color: #F6F6F6">
        <h3 class="px-5 text-bold">Visi & Misi</h3>
        <div class="container my-5 px-5">
            <div class="visi d-flex flex-column align-items-center justify-content-center">
                <h3 class="d-inline-block text-center text-bold border-bottom-green">VISI</h3>
                <p class="text-lg text-center my-4">"Terwujudnya Desa Sukamaju yang aman, sehat, cerdas, berbudaya, berakhlaq <br> mulia dan berdaya saing menuju pelayanan yang cepat dan tepat"</p>
            </div>
            <div class="misi d-flex flex-column align-items-center justify-content-center">
                <h3 class="d-inline-block text-center text-bold border-bottom-green mt-4">MISI</h3>
                <ol class="text-lg my-4">
                    <li>Mewujudkan keamanan dan ketertiban di lingkungan Desa Sukamaju.</li>
                    <li>Meningkatkan Kesehatan, kebersihan, lingkungan serta mengusahakan jaminan Kesehatan masyarakat melalui program pemerintah.</li>
                    <li>Mewujukan dan meningkatkan serta meneruskan tata Kelola pemerintah desa yang lebih baik.</li>
                    <li>Meningkatkan pelayanan yang maksimal kepada masyarakat demi kesejahteraan masyarakat.</li>
                    <li>Meningkatkan kehidupan yang harmonis.toleran, saling menghormati, dan Kerjasama dalam kehidupan berbudaya dan beragama.</li>
                    <li>Mengedepankan kejujuran, keadilan, trasparansi, dan berakhlaq mulia dalam kehidupan sehari-hari baik dalam pemerintahan maupun dengan masyarakat.</li>
                </ol>
            </div>
        </div>
    </div>

    <div class="w-screen py-5">
        <h3 class="px-5 text-bold">Kontak</h3>
        <div class="w-50 d-flex flex-column justify-content-center align-items-center mx-auto text-md">
            <p class="text-center my-3">Untuk informasi lebih lanjut terkait pelayanan Desa Sukamaju <br> dapat menghubungi kontak dibawah ini :</p>
            <p><i class="fa fa-phone-alt"></i> : (0473) - 2311390</p>
            <p><i class="fa fa-envelope"></i> : desasukamaju@gov.id</p>
        </div>
    </div>

    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('dist/js/adminlte.js') }}"></script>
</body>

</html>
