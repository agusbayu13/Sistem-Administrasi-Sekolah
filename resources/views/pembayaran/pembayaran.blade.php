@extends('layouts.main')

@section('title', 'Pembayaran | Sistem Administrasi Sekolah')


@section('container')
<!-- Begin Page Content -->
<div class="container-fluid">

   <!-- Page Heading -->
   <h1 class="h3 mb-4 text-gray-800">Halaman Transaksi Pembayaran</h1>

   <div class="row">
      <div class="col-md-12">

         <div class="card">
            <div class="card-body">
               <div class="card-title">Entri Pembayaran</div>

               <form method="post" action="{{ route('input-pembayaran') }}">
                  @{{ csrf_field() }}

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



</div>
<!-- /.container-fluid -->
@endsection