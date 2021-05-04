@extends('layouts.main')

@section('title', 'Data Guru | Sistem Administrasi Sekolah')

@section('container')

<!-- Begin Page Content -->
<!-- Page Heading Guru-->
<div class="container-fluid">

    <h1 class="h1 mb-4 text-gray-800">DATA <strong>GURU</strong>
        <i class="h6 mb-4 text-gray-800"> SMA 1 Jonggol </i>
    </h1>
    <!-- DataTales Example -->

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Guru</h6>
        </div>
        <div class="card-header">
            <a href="{{ route('input-guru') }}" class="btn btn-success btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-check"></i>
                </span>
                <span class="text">Tambah Data</span>
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NIP</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>Other</th>
                        </tr>
                    </thead>
                    @foreach ($dtGuru as $item)
                    <tbody>
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->nama}}</td>
                            <td>{{$item->nip}}</td>
                            <td>{{$item->jeniskelamin}}</td>
                            <td>{{$item->alamat}}</td>

                            <td>
                                <div class="nav-item dropdown no-arrow"></div>
                                <a class="btn btn-info btn-icon-split" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-arrow-right"></i>
                                    </span>
                                    <span class="text">More</span>
                                    <!-- Menu Other -->
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                        <a class="dropdown-item" href="{{ url('edit-guru', $item->id) }}">
                                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>Edit</a>
                                        <a class="dropdown-item" href="{{ url('delete-guru', $item->id) }}">
                                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>Hapus</a>
                                    </div>
                                </a>
                                <!-- END of Menu Other -->

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- /.container-fluid -->


<!-- End of Main Content -->


<!-- /.container-fluid -->
@include('sweetalert::alert')

@endsection