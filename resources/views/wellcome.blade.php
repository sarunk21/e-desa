@extends('layouts.guest')

@section('content')
    @include('layouts.navbar')

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
                    <img src="{{ asset('img/banner.webp') }}" alt="Banner Desa" class="w-100">
                </div>
            </div>
        </div>
    </div>

    <div class="w-screen py-5" style="background-color: #F6F6F6" id="profile">
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

    <div class="w-screen py-5 bg-green-pastel text-white" id="kontak">
        <h3 class="px-5 text-bold">Kontak</h3>
        <div class="w-50 d-flex flex-column justify-content-center align-items-center mx-auto text-md">
            <p class="text-center my-3">Untuk informasi lebih lanjut terkait pelayanan Desa Sukamaju <br> dapat menghubungi kontak dibawah ini :</p>
            <p><i class="fa fa-phone-alt"></i> : (0473) - 2311390</p>
            <p><i class="fa fa-envelope"></i> : desasukamaju@gov.id</p>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        .bg-green-pastel {
            background-color: #51839C;
        }
    </style>
@endpush
