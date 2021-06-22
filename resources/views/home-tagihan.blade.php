@extends('layouts.main')

@section('title', 'Dashboard | Sistem Administrasi Sekolah')


@section('container')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h1 mb-4 text-gray-800">DAFTAR TAGIHAN <strong>PEMBAYARAN SPP</strong>
        <i class="h6 mb-4 text-gray-800"> Siswa SMA 1 Jonggol </i>
    </h1>
    <h3></h3>

    <div class="card shadow mb-4">
        <div class="p-5">
            <h6>Lihat tagihan pendidikan siswa disini hanya dengan pilih kelas dan masukan NIS siswa....</h6>
            <br>
            <br>
            <div class="form-group">
                <label for="kelas" class="form-label"><strong>Kelas</strong></label>
                <select class="form-control" id="country" required>
                    <option value="">Choose...</option>
                    <option>XMIPA 1</option>
                    <option>XMIPA 2</option>
                </select>
            </div>
            <div class="invalid-feedback">
                Please select a valid country.
            </div>

            <div class="form-group">
                <label for=""><strong>NIS</strong></label>
                <input type="text" name="NIS" class="form-control">
            </div>

            <div>
                <button type="submit" class="btn btn-success btn-block btn-rounded float-right" href="">Cek Tagihan</button>
            </div>
            <div>
                <button type="button" class="btn btn-success btn-block btn-rounded float-right" href="">Tampilkan Semua Tagihan</button>
            </div>
        </div>
    </div>
</div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Transaksi Siswa</h6>
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
                                </tr>
                            </thead>
                            @foreach ($dt_pembayaran as $item)
                            <tbody>
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->nama}}</td>
                                    <td>{{$item->kelas}}</td>
                                    <td>{{$item->nis}}</td>
                                    <td>{{$item->jenis_pembayaran}}</td>
                                    <td>{{$item->kode_pembayaran}}</td>
                                    <td>{{$item->tgl_pembayaran}}</td>
                                    <td>{{$item->total_pembayaran}}</td>
                                    <td>
                                        <a href="{{asset('bukti_pembayaran/'.$item -> bukti_pembayaran)}}" target="_blank" rel="noopener noreferrer"> lihat gambar</a>
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
</div>
<!-- /.container-fluid -->
@include('sweetalert::alert')
@endsection