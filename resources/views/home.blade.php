@extends('layouts.main')

@section('title', 'Dashboard | Sistem Administrasi Sekolah')


@section('container')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h1 mb-4 text-gray-800">DASHBOARD <strong>ACHYS</strong>
        <i class="h6 mb-4 text-gray-800"> Administration school system </i>
    </h1>
    <h3></h3>
    <div class="row">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="font-weight-bold text-primary text-uppercase mb-1">
                                {{ Auth::user()->level }}
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ Auth::user()->name }}</div>
                            <div class="my-1"></div>
                            NIP/NIS : {{ Auth::user()->nip }}
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>

<!-- /.container-fluid -->
@include('sweetalert::alert')
@endsection