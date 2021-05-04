@extends('layouts.main')

@section('title', 'Pembayaran | Sistem Administrasi Sekolah')


@section('container')
<!-- Begin Page Content -->
<div class="container-fluid">

   <!-- Page Heading -->
   <h1 class="h3 mb-4 text-gray-800">Halaman Transaksi Pembayaran SPP</h1>

   <div class="row">
      <div class="col-md-12">

         <div class="card">
            <div class="card-body">
               <div class="card-title">Entri Pembayaran</div>

               <form method="post" action="{{ url('dashboard/pembayaran') }}">
                  @csrf

                  <div class="form-group">
                     <label>Nama Siswa</label>
                     <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama">
                     <span class="text-danger">@error('nama') {{ $message }} @enderror</span>
                  </div>

                  <div class="form-group">
                     <label>NIS Siswa</label>
                     <input type="text" class="form-control @error('nis') is-invalid @enderror" name="nis">
                     <span class="text-danger">@error('nis') {{ $message }} @enderror</span>
                  </div>

                  <div class="input-group mb-3">
                     <div class="input-group-prepend">
                        <label class="input-group-text">
                           SPP Bulan
                        </label>
                     </div>
                     <select class="custom-select @error('spp_bulan') is-invalid @enderror" name="spp_bulan">

                        <option value="">Pilih Bulan Pembayaran</option>
                        <option value="januari">Januari</option>
                        <option value="februari">Februari</option>
                        <option value="maret">Maret</option>
                        <option value="april">April</option>
                        <option value="mei">Mei</option>
                        <option value="juni">Juni</option>
                        <option value="juli">Juli</option>
                        <option value="agustus">Agustus</option>
                        <option value="september">September</option>
                        <option value="oktober">Oktober</option>
                        <option value="november">November</option>
                        <option value="desember">Desember</option>
                     </select>
                  </div>
                  <span class="text-danger">@error('spp_bulan') {{ $message }} @enderror</span>

                  <div class="form-group">
                     <label>Jumlah Bayar</label>
                     <input type="text" class="form-control @error('jumlah_bayar') is-invalid @enderror" name="jumlah_bayar">
                     <span class="text-danger">@error('jumlah_bayar') {{ $message }} @enderror</span>
                  </div>

                  <button type="submit" class="btn btn-success btn-rounded float-right">
                     <i class="mdi mdi-check"></i> Simpan
                  </button>

               </form>

            </div>
         </div>

      </div>
   </div>

   <div class="card">
      <div class="card-body">
         <div class="card-title">Data Transaksi</div>

         <div class="table-responsive mb-3">
            <table class="table">
               <thead>
                  <tr>
                     <th scope="col">#</th>
                     <th scope="col">PETUGAS</th>
                     <th scope="col">NIS SISWA</th>
                     <th scope="col">NAMA SISWA</th>
                     <th scope="col">SPP</th>
                     <th scope="col">JUMLAH BAYAR</th>
                     <th scope="col">TANGGAL BAYAR</th>
                     <th scope="col"></th>
                  </tr>
               </thead>
            </table>
         </div>
      </div>
   </div>



</div>
<!-- /.container-fluid -->
@endsection