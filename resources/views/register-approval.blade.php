@extends('layouts.main')

@section('title', 'Account Approval | Sistem Administrasi Sekolah')

@section('container')

<!-- Begin Page Content -->
<!-- Page Heading Siswa-->
<div class="container-fluid">
    <h1 class="h1 mb-4 text-gray-800">DATA <strong>NEW ACCOUNT</strong>
        <i class="h6 mb-4 text-gray-800"> SMA 1 Jonggol </i>
    </h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Permintaan Akun Baru</h6>
        </div>
        <div class="card-header">
            <!-- <a href="{{ route('input-siswa') }}" class="btn btn-success btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-check"></i>
                </span>
                <span class="text">Tambah Data</span>
            </a>-->
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Email</th>
                            <th>NIP/NIS</th>
                            <th>Level</th>
                            <th>Password</th>
                            <th>Other</th>
                        </tr>
                    </thead>
                    @foreach ($dtRegister as $item)
                    <tbody>
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->nip}}</td>
                            <td>{{$item->level}}</td>
                            <td>{{$item->password}}</td>
                            <td>
                                <div class="nav-item dropdown no-arrow"></div>
                                <a class="btn btn-info btn-icon-split" href="{{ route('adminregister') }}" role="button">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-arrow-right"></i>
                                    </span>
                                    <span class="text">Daftarkan Akun</span>

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

<!-- End of Main Content -->

<!-- /.container-fluid -->
@include('sweetalert::alert')

@endsection