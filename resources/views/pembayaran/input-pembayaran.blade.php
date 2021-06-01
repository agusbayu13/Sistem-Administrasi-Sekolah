@extends('layouts.main')

@section('title', 'Pembayaran | Sistem Administrasi Sekolah')


@section('container')
<!-- Begin Page Content -->
<div class="container-fluid">

   <h1 class="h1 mb-4 text-gray-800">INPUT <strong>TRANSAKSI</strong>
      <i class="h6 mb-4 text-gray-800"> SMA 1 Jonggol </i>
   </h1>
   <!-- DataTales Example -->


   <div class="card shadow mb-4">
      <div class="card-header py-3">
         <h6 class="m-0 font-weight-bold text-primary">Input Transaksi Pembayaran Baru</h6>
      </div>

      <div class="card">
         <div class="card-body">
            <form method="post" action="{{ route('simpan-pembayaran') }}">
               @csrf
               <div class="form-group">
                  <label>Nama Siswa</label>
                  <input type="text" name="nama" id="nama" class="form-control">
               </div>

               <div class="form-group">
                  <label>Kelas</label>
                  <input type="text" name="kelas" id="kelas" class="form-control">
               </div>

               <div class="form-group">
                  <label>NIS Siswa</label>
                  <input type="text" name="nis" id="nis" class="form-control">
               </div>

               <div class="input-group mb-3">
                  <div class="input-group-prepend">
                     <label class="input-group-text">
                        Jenis Pembayaran
                     </label>
                  </div>
                  <select class="custom-select" name="jenispembayaran">

                     <option value="">Pilih Jenis Pembayaran</option>
                     <option value="SPP">SPP</option>
                     <option value="Uang Gedung">Uang Gedung</option>

                  </select>
               </div>

               <div class="form-group">
                  <label>Kode Pembayaran</label>
                  <input type="text" name="kode" id="kode" class="form-control">
               </div>

               <div class="form-group">
                  <label>Tanggal Pembayaran</label>
                  <input type="text" name="tanggal" id="tanggal" class="form-control">
               </div>

               <div class="form-group">
                  <label>Total Pembayaran</label>
                  <input type="text" name="total" id="total" class="form-control">
               </div>

               <div class="form-group">
                  <label>Bukti Pembayaran</label>
                  <input type="text" name="bukti" id="bukti" class="form-control">
               </div>

               <div class="form-group">
                  <button type="submit" class="btn btn-primary">Simpan</button>
               </div>

            </form>

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
                           <td>{{$item->bukti_pembayaran}}</td>
                        </tr>
                        @endforeach
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </form>


   </div>
   <!-- /.container-fluid -->
   @endsection