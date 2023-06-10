@extends('layouts.app')

@section('title', 'Antrian | Desa Sukamaju')

@section('page-title', 'Antrian')

@section('location', 'Layanan')

@section('location-title', 'Antrian')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-header border-0">
                        <div class="d-flex justify-content-between">
                            <h3 class="card-title">List Antrian Hari Ini</h3>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="row">

                            <table id="table" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>No Antrian</th>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Nomor Handphone</th>
                                        <th>Jenis Pelayanan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($antrian as $item)
                                        <tr>
                                            <td>{{ $item->created_at }}</td>
                                            <td>{{ $item->no_antrian }}</td>
                                            <td>{{ $item->user->nik }}</td>
                                            <td>{{ $item->user->name }}</td>
                                            <td>{{ $item->user->phone_number }}</td>
                                            <td>{{ $item->jenisPelayanan->nama_pelayanan }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center">Tidak ada data</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
