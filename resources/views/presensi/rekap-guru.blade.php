@extends('layouts.main')

@section('title', 'Rekap Presensi | Sistem Administrasi Sekolah')


@section('container')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h1 mb-4 text-gray-800">REKAP DATA <strong>PRESENSI</strong>
        <i class="h6 mb-4 text-gray-800"> Hanya Untuk guru dan Karyawan </i>
    </h1>
</div>
<!-- /.container-fluid -->
<div class="content">
    <div class="row justify-content-center">
        <div class="card card-info card-outline">
            <div class="card-header">Selamat datang pada halaman rekap data presensi, silahkan klik <strong>LIHAT</strong> untuk melihat data presensi.</div>
            <div class="card-body">
                <div class="form-group">
                    <label for="label">Tanggal Awal</label>
                    <input type="date" name="tglawal" id="tglawal" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="label">Tanggal Akhir</label>
                    <input type="date" name="tglakhir" id="tglakhir" class="form-control" />
                </div>
                <div class="form-group">
                    <a href="" onclick="this.href='/filter-data/'+ document.getElementById('tglawal').value +
                            '/' + document.getElementById('tglakhir').value " class="btn btn-primary col-md-12">
                        Lihat <i class="fas fa-print"></i>
                    </a>
                </div>
                <div class="form-group">
                    <table border="1">
                        <tr>
                            <th>No</th>
                            <th> Pegawai </th>
                            <th> Tanggal </th>
                            <th> Jam Masuk </th>
                            <th> Jam Keluar </th>
                            <th> Lama Kerja </th>
                        </tr>
                        @foreach ($presensi as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->user->name }}</td>
                            <td>{{ $item->tgl }}</td>
                            <td>{{ $item->jammasuk }}</td>
                            <td>{{ $item->jamkeluar }}</td>
                            <td>{{ $item->jamkerja }}</td>
                        </tr>
                        @endforeach
                    </table>

                </div>
            </div><!-- /.container-fluid -->

        </div>
    </div>

</div>
<!-- /.content -->
@include('sweetalert::alert')
@endsection