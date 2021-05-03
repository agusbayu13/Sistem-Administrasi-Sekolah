@extends('layouts.main')

@section('title', 'Dashboard | Sistem Administrasi Sekolah')

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
            <h6 class="m-0 font-weight-bold text-primary">Edit Data Guru</h6>
        </div>

        <div class="card-body">
            <form action="{{ url('edit-guru') }}" method="POST">
                @csrf
                <div class="form-group">
                    <textarea name="nama" id="nama" class="form-control" placeholder="Nama Guru"></textarea>
                </div>
                <div class="form-group">
                    <textarea name="nip" id="nip" class="form-control" placeholder="NIP Guru"></textarea>
                </div>
                <div class="form-group">
                    <textarea name="jeniskelamin" id="jeniskelamin" class="form-control" placeholder="Jenis Kelamin"></textarea>
                </div>
                <div class="form-group">
                    <textarea name="alamat" id="alamat" class="form-control" placeholder="Alamat"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan Edit</button>
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