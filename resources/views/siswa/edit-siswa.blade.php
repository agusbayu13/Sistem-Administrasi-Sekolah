@extends('layouts.main')

@section('title', 'Edit Data Siswa | Sistem Administrasi Sekolah')

@section('container')

<!-- Begin Page Content -->
<!-- Page Heading Siswa-->
<div class="container-fluid">

    <h1 class="h1 mb-4 text-gray-800">DATA <strong>SISWA</strong>
        <i class="h6 mb-4 text-gray-800"> SMA 1 Jonggol </i>
    </h1>
    <!-- DataTales Example -->


    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Data Siswa Baru</h6>
        </div>

        <div class="card-body">
            <form action="{{ url('update-siswa', $dtsiswa->nis) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Kelas</label>
                    <input type="text" name="id_kelas" id="id_kelas" class="form-control" value="{{ $dtsiswa->id_kelas }}">
                </div>
                <div class="form-group">
                    <label>Nama Siswa</label>
                    <input type="text" name="nama" id="nama" class="form-control" value="{{ $dtsiswa->nama }}">
                </div>
                <div class="form-group">
                    <label>NIS Siswa</label>
                    <input type="text" name="nis" id="nis" class="form-control" value="{{ $dtsiswa->nis }}">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text">
                            Jenis Kelamin
                        </label>
                    </div>
                    <select class="custom-select" name="jenis_kelamin">

                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>

                    </select>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="alamat" id="alamat" class="form-control" value="{{ $dtsiswa->alamat }}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Edit Siswa</button>
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