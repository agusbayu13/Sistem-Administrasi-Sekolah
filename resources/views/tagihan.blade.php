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
          <input type="text" name="NIS" class="form-control" >
        </div>

        <div>
          <button type="submit" class="btn btn-success btn-block btn-rounded float-right" href="">Cek Tagihan</button>
        </div>
      </div>
      </div>
</div>

<!-- /.container-fluid -->
@include('sweetalert::alert')
@endsection

