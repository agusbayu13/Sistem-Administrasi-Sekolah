@extends('layouts.main')

@section('title', 'Edit Pembayaran | Sistem Administrasi Sekolah')


@section('container')
<!-- Begin Page Content -->
<div class="container-fluid">

   <h1 class="h1 mb-4 text-gray-800">EDIT DATA <strong>TRANSAKSI</strong>
      <i class="h6 mb-4 text-gray-800"> SMA 1 Jonggol </i>
   </h1>
   <!-- DataTales Example -->


   <div class="card shadow mb-4">
      <div class="card-header py-3">
         <h6 class="m-0 font-weight-bold text-primary">Edit Transaksi Pembayaran</h6>
      </div>

      <div class="card">
         <div class="card-body">
               <form action="{{ url('update-pembayaran', $pem->id) }}" method="POST"> 
                  @csrf

                  <div class="form-group">
                     <label>Kelas</label>
                  <select class="custom-select" name="kelas">

                     <option value="{{ $pem->kelas }}">Pilih Kelas</option>
                     <option value="10">10</option>
                     <option value="11">11</option>
                     <option value="12">12</option>

                  </select>
                  </div>

                  <div class="form-group">
                     <label>NIS Siswa</label>
                     <input type="text" name="nis" id="nis" class="form-control" value="{{ $pem->nis }}">
                  </div>

                  <div class="input-group mb-3">
                     <div class="input-group-prepend">
                        <label class="input-group-text">
                           Jenis Pembayaran
                        </label>
                     </div>
                     <select class="custom-select" name="jenis_pembayaran">
                        <option value="{{ $pem->jenis_pembayaran }}">Pilih Jenis Pembayaran</option>
                        <option value="SPP">SPP</option>
                        <option value="Uang Gedung">Uang Gedung</option>
                     </select>
                  </div>

                  <div class="form-group">
                     <label>Kode Pembayaran</label>
                     <input type="text" name="kode_pembayaran" id="kode_pembayaran" class="form-control" value="{{ $pem->kode_pembayaran }}">
                  </div>

                  <div class="form-group">
                     <label>Tanggal Pembayaran</label>
                     <input type="date" name="tgl_pembayaran" id="tgl_pembayaran" class="form-control" value="{{ $pem->tgl_pembayaran }}">
                  </div>

                  <div class="form-group">
                     <label>Total Pembayaran</label>
                     <input type="text" name="total_pembayaran" id="total_pembayaran" class="form-control" value="{{ $pem->total_pembayaran }}">
                  </div>

                  <div class="form-group">
                     <label>Bukti Pembayaran</label>
                     <input type="file" name="bukti_pembayaran" id="bukti_pembayaran" value="{{ $pem->bukti_pembayaran }}">
                  </div>

                  <div class="form-group">
                     <button type="submit" class="btn btn-primary">Edit Data</button>
                  </div>

               </form>
         </div>
      </div>
   </div>
</div>
   <!-- /.container-fluid -->

@include('sweetalert::alert')

@endsection