@extends('layouts.main')

@section('title', 'Pembayaran | Sistem Administrasi Sekolah')


@section('container')
<!-- Begin Page Content -->
<div class="container-fluid">

   <!-- Page Heading -->
   <h1 class="h3 mb-4 text-gray-800">Data Transaksi Pembayaran</h1>

   <form method="post" action="{{ route('simpan-pembayaran') }}">
      @{{ csrf_field() }}

   <div class="card">
      <div class="card-body">
         <div class="card-title">Data Transaksi</div>

         <div class="table-responsive mb-3">
            <table class="table">
               
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
              
              <tbody> 
               @foreach ($dt_pembayaran as $index => $item)

                  <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$item->nama}}</td>
                      <td>{{$item->kelas}}</td>
                      <td>{{$item->nis}}</td>
                      <td>{{$item->jenispembayaran}}</td>
                      <td>{{$item->kode}}</td>
                      <td>{{$item->tanggal}}</td>
                      <td>{{$item->total}}</td>
                      <td>{{$item->bukti}}</td>
                  </tr>

               @endforeach
              </tbody>
            </table>
         </div>
      </div>
   </form>


</div>
<!-- /.container-fluid -->
@endsection