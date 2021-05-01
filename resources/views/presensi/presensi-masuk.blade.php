@extends('layouts.main')

@section('title', 'Presensi Masuk | Sistem Administrasi Sekolah')


@section('container')

<script src="{{ asset('Js/jam.js') }}"></script>
<style>
    #watch {
        color: rgb(252, 150, 65);
        position: absolute;
        z-index: 1;
        height: 40px;
        width: 700px;
        overflow: show;
        margin: auto;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        font-size: 10vw;
        -webkit-text-stroke: 3px rgb(210, 65, 36);
        text-shadow: 4px 4px 10px rgba(210, 65, 36, 0.4),
            4px 4px 20px rgba(210, 45, 26, 0.4),
            4px 4px 30px rgba(210, 25, 16, 0.4),
            4px 4px 40px rgba(210, 15, 06, 0.4);
    }
</style>

<body class="hold-transition sidebar-mini" onload="realtimeClock()">
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <center>
            <h1 class="h3 mb-4 text-gray-800"><strong>Halaman Presensi Masuk<br />Guru dan Karyawan</strong></h1>
        </center>
    </div>

    <!-- /.container-fluid -->
    <div class="content">
        <div class="row justify-content-center">
            <div class="card card-info card-outline">
                <div class="card-header">Presensi Masuk</div>
                <div class="card-body">
                    <form action="{{ route('simpan-masuk') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <center>
                                <label id="clock" style="font-size: 100px; color: #0A77DE; -webkit-text-stroke: 3px #00ACFE;
                                                    text-shadow: 4px 4px 10px #36D6FE,
                                                    4px 4px 20px #36D6FE,
                                                    4px 4px 30px#36D6FE,
                                                    4px 4px 40px #36D6FE;">
                                </label>
                            </center>
                        </div>
                        <center>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Klik Untuk Presensi Masuk</button>
                            </div>
                        </center>
                    </form>

                </div>
            </div>
        </div>
    </div>

    @include('sweetalert::alert')
    @endsection