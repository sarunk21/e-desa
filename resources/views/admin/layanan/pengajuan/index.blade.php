@extends('layouts.app')

@section('title', 'Pengajuan Surat | Desa Sukamaju')

@section('page-title', 'Pengajuan Surat')

@section('location', 'Layanan')

@section('location-title', 'Pengajuan Surat')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                @if (session('status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Berhasil!</strong> {{ session('status') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="card">
                    <div class="card-header border-0">
                        <div class="d-flex justify-content-between">
                            <h3 class="card-title">List Pengajuan Surat</h3>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="row">

                            <table id="table" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Nama</th>
                                        <th>NIK</th>
                                        <th>Jenis Pelayanan</th>
                                        <th>Status Pengajuan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($pengajuan as $item)
                                        <tr>
                                            <td>{{ $item->created_at }}</td>
                                            <td>{{ $item->user->name }}</td>
                                            <td>{{ $item->user->nik }}</td>
                                            <td>{{ $item->jenisPelayanan->nama_pelayanan }}</td>
                                            <td>{!! $item->status !!}</td>
                                            <td>
                                                <a href="{{ route('admin.pengajuan.show', $item->id) }}" class="btn btn-info btn-sm">Detail</a>
                                                <button class="btn btn-outline-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown">Status</button>
                                                <div class="dropdown-menu">
                                                    @if ($item->status_pengajuan != 4)
                                                        <form action="{{ route('admin.pengajuan.update', $item->id) }}" method="post">
                                                            @csrf
                                                            @method('PUT')
                                                            <input type="hidden" name="status_pengajuan" value="2">
                                                            <button class="dropdown-item" onclick="return confirm('Yakin ingin mengubah status pengajuan?')">Diterima</button>
                                                        </form>
                                                        <form action="{{ route('admin.pengajuan.update', $item->id) }}" method="post">
                                                            @csrf
                                                            @method('PUT')
                                                            <input type="hidden" name="status_pengajuan" value="4">
                                                            <button class="dropdown-item" onclick="return confirm('Yakin ingin mengubah status pengajuan?')">Selesai</button>
                                                        </form>
                                                        <form action="{{ route('admin.pengajuan.update', $item->id) }}" method="post">
                                                            @csrf
                                                            @method('PUT')
                                                            <input type="hidden" name="status_pengajuan" value="3">
                                                            <button class="dropdown-item" onclick="return confirm('Yakin ingin mengubah status pengajuan?')">Ditolak</button>
                                                        </form>
                                                    @else
                                                        <button class="dropdown-item" disabled>Selesai</button>
                                                    @endif
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center">Tidak ada data</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            {{ $pengajuan->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
