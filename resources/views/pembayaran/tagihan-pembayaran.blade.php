@extends('layouts.main')

@section('title', 'Tagihan | Sistem Administrasi Sekolah')


@section('container')
<!-- Begin Page Content -->
<div class="container-fluid">

    <h1 class="h1 mb-4 text-gray-800">DATA <strong>TRANSAKSI</strong>
        <i class="h6 mb-4 text-gray-800"> SMA 1 Jonggol </i>
    </h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Transaksi Siswa</h6>
        </div>
        <div class="card-header">
            <a href="/tagihan" class="btn btn-success btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-check"></i>
                </span>
                <span class="text">Cari Data</span>
            </a>
        </div>
        <div class="card-header">
            <form method="post" action="{{ route('simpan-pembayaran') }}">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Siswa</th>
                                        <th>Kelas</th>
                                        <th>NIS Siswa</th>
                                        <th>Jenis Pembayaran</th>
                                        <th>Kode Pembayaran</th>
                                        <th>Tanggal Pembayaran</th>
                                        <th>Total Pembayaran</th>
                                        <th>Bukti Pembayaran</th>
                                        <th>Other</th>
                                    </tr>
                                </thead>
                                @foreach ($dt_pembayaran as $item)
                                <tbody>
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$item->siswa->nama}}</td>
                                        <td>{{$item->kelas}}</td>
                                        <td>{{$item->nis}}</td>
                                        <td>{{$item->jenis_pembayaran}}</td>
                                        <td>{{$item->kode_pembayaran}}</td>
                                        <td>{{$item->tgl_pembayaran}}</td>
                                        <td>{{$item->total_pembayaran}}</td>
                                        <td>
                                            <a href="{{asset('bukti_pembayaran/'.$item -> bukti_pembayaran)}}" target="_blank" rel="noopener noreferrer"> lihat gambar</a>
                                        </td>
                                        <td>
                                            <div class="nav-item dropdown no-arrow"></div>
                                            <a class="btn btn-info btn-icon-split" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-arrow-right"></i>
                                                </span>
                                                <span class="text">More</span>
                                                <!-- Menu Other -->
                                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                                    <a class="dropdown-item" href="{{ url('edit-pembayaran', $item->id) }}">
                                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>Edit</a>
                                                    <a class="dropdown-item" href="{{ url('delete-pembayaran', $item->id) }}">
                                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>Hapus</a>
                                                </div>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </form>


        </div>
        <!-- /.container-fluid -->

        @include('sweetalert::alert')

        @endsection