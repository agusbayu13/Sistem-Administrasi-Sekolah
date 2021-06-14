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
            <form action="{{ url('update-siswa', $dtsiswa->nis) }}" method="POST">
                @csrf
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text">
                            Kelas
                        </label>
                    </div>
                    <select class="custom-select" name="id_kelas">

                        <option value="">Pilih Kelas</option>
                        <option value="X MIPA 1">X MIPA 1</option>
                        <option value="X MIPA 2">X MIPA 2</option>
                        <option value="X MIPA 3">X MIPA 3</option>
                        <option value="X MIPA 4">X MIPA 4</option>
                        <option value="X MIPA 5">X MIPA 5</option>
                        <option value="XI MIPA 1">XI MIPA 1</option>
                        <option value="XI MIPA 2">XI MIPA 2</option>
                        <option value="XI MIPA 3">XI MIPA 3</option>
                        <option value="XI MIPA 4">XI MIPA 4</option>
                        <option value="XI MIPA 5">XI MIPA 5</option>
                        <option value="XII MIPA 1">XII MIPA 1</option>
                        <option value="XII MIPA 2">XII MIPA 2</option>
                        <option value="XII MIPA 3">XII MIPA 3</option>
                        <option value="XII MIPA 4">XII MIPA 4</option>
                        <option value="XII MIPA 5">XII MIPA 5</option>
                        <option value="X IPS 1">X IPS 1</option>
                        <option value="X IPS 2">X IPS 2</option>
                        <option value="X IPS 3">X IPS 3</option>
                        <option value="XI IPS 1">XI IPS 1</option>
                        <option value="XI IPS 2">XI IPS 2</option>
                        <option value="XI IPS 3">XI IPS 3</option>
                        <option value="XII IPS 1">XII IPS 1</option>
                        <option value="XII IPS 2">XII IPS 2</option>
                        <option value="XII IPS 3">XII IPS 3</option>
                        

                    </select>
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