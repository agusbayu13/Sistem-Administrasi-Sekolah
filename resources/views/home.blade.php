@extends('layouts.main')

@section('title', 'Dashboard | Sistem Administrasi Sekolah')


@section('container')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Selamat Datang <strong>{{ Auth::user()->name }}</strong></h1>
    	
</div>
<!-- /.container-fluid -->
@include('sweetalert::alert')
@endsection