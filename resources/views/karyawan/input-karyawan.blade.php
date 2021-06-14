@extends('layouts.main')

@section('title', 'Input Data Karyawan | Sistem Administrasi Sekolah')

@section('container')

<!-- Begin Page Content -->
<!-- Page Heading Guru-->
<div class="container-fluid">

    <h1 class="h1 mb-4 text-gray-800">DATA <strong>KARYAWAN</strong>
        <i class="h6 mb-4 text-gray-800"> SMA 1 Jonggol </i>
    </h1>
    <!-- DataTales Example -->


    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Input Data Karyawan Baru</h6>
        </div>

        <div class="card-body">
            @if(session('errors'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                Oops! Ada Kesalahan:
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="{{ route('simpan-karyawan') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Nama Karyawan</label>
                    <input type="text" name="nama" id="nama" class="form-control">
                </div>
                <div class="form-group">
                    <label>NIP Karyawan</label>
                    <input type="text" name="nip" id="nip" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text">
                            Jenis Kelamin
                        </label>
                    </div>
                    <select class="custom-select" name="jeniskelamin">

                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>

                    </select>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="alamat" id="alamat" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- /.container-fluid -->


<!-- End of Main Content -->


<!-- /.container-fluid -->
@include('sweetalert::alert')

@endsection