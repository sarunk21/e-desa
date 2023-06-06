@extends('layouts.app')

@section('title', 'Dashboard | Desa Sukamaju')

@section('content')
    <div class="row">
        <div class="col-lg-4 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>15</h3>

                    <p>Pengajuan Surat Pengantar</p>
                </div>
                <div class="icon">
                    <i class="fa fa-envelope"></i>
                </div>
                <a href="#" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-4 col-6">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>5</h3>

                    <p>Antrian Pelayanan</p>
                </div>
                <div class="icon">
                    <i class="fa fa-users"></i>
                </div>
                <a href="#" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-4 col-12">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>44</h3>

                    <p>Aduan Masyarakat</p>
                </div>
                <div class="icon">
                    <i class="fa fa-flag"></i>
                </div>
                <a href="#" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header border-0">
                        <div class="d-flex justify-content-between">
                            <h3 class="card-title">Dashboard</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="jumbotron">
                            <h1 class="display-4">Selamat {{ $salam }}</h1>
                            <p class="lead">Terwujudnya Desa Sukamaju yang aman, sehat, cerdas, berbudaya, berakhlaq mulia dan berdaya saing menuju pelayanan yang cepat dan tepat</p>
                            <hr class="my-4">
                            <p>Hallo, {{ auth()->user()->name }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
