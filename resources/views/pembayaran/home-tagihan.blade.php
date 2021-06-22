@extends('layouts.main')

@section('title', 'Tagihan | Sistem Administrasi Sekolah')


@section('container')
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h1 mb-4 text-gray-800">DAFTAR TAGIHAN <strong>PEMBAYARAN SPP</strong>
    <i class="h6 mb-4 text-gray-800"> Siswa SMA 1 Jonggol </i>
  </h1>
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Pencarian Daftar Tagihan</h6>
    </div>
    <div class="card-body">
      <h6>Lihat tagihan pendidikan siswa disini hanya dengan pilih kelas dan masukan NIS siswa....</h6>
      <div class="form-group">
        <label for="kelas" class="form-label"><strong>Kelas</strong></label>
        <select class="form-control" id="country" required>

          <option>Pilih Kelas</option>
          <option>X MIPA 1</option>
          <option>X MIPA 2</option>
          <option>X MIPA 3</option>
          <option>X MIPA 4</option>
          <option>X MIPA 5</option>
          <option>XI MIPA 1</option>
          <option>XI MIPA 2</option>
          <option>XI MIPA 3</option>
          <option>XI MIPA 4</option>
          <option>XI MIPA 5</option>
          <option>XII MIPA 1</option>
          <option>XII MIPA 2</option>
          <option>XII MIPA 3</option>
          <option>XII MIPA 4</option>
          <option>XII MIPA 5</option>
          <option>X IPS 1</option>
          <option>X IPS 2</option>
          <option>X IPS 3</option>
          <option>XI IPS 1</option>
          <option>XI IPS 2</option>
          <option>XI IPS 3</option>
          <option>XII IPS 1</option>
          <option>XII IPS 2</option>
          <option>XII IPS 3</option>

        </select>
      </div>
      @csrf
      <div class="form-group">
        <label for=""><strong>NIS</strong></label>
        <form action="{{route('tagihan-pembayaran')}}" method="GET">
          <div class="input-group">
            <input type="text" class="form-control" name="cari" placeholder="Masukan NIS" value="">
            <div class="input-group-append">
            </div>

          </div>
          <div class="my-2"></div>
          <div>
            <button type="submit" class="btn btn-success btn-block btn-rounded float-right">Cari Tagihan</button>
          </div>
          <div class="my-5"></div>

          <div>
            <a href="{{route('semua-tagihan-pembayaran')}}" class="btn btn-success btn-block btn-rounded float-right">
              <span class="text">Tampilkan Semua Tagihan</span>
            </a>
          </div>
          <!-- /.
          <div>
            <button class="btn btn-success btn-block btn-rounded float-right" href="{{route('semua-tagihan-pembayaran')}}">Tampilkan Semua Tagihan</button>
          </div>
          -->
        </form>
      </div>
    </div>
  </div>
</div>

<!-- /.container-fluid -->
@include('sweetalert::alert')
@endsection