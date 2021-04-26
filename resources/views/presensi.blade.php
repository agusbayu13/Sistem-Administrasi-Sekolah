@extends('layouts.main')

@section('title', 'Dashboard | Sistem Administrasi Sekolah')


@section('container')

                <!-- Begin Page Content -->
<p>
                <div class="container-fluid">

                    <!-- Page Heading Guru-->
                    <h1 class="h3 mb-2 text-gray-800">Presensi Guru dan Karyawan Sekolah Jonggol 1</h1>
                    <p class="mb-4"><a target="_blank"></p>

                        <!-- Form Presensi -->
                <div class="align-items-center">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">
                        <form class="user">
                                        <div class="form-group">
                                            <input type="" class="form-control form-control-user" 
                                                placeholder="Enter Name...">
                                        </div>
                                        <div class="form-group">
                                            <input type="" class="form-control form-control-user"
                                                placeholder="Enter NIP...">
                                        </div>
                                            <a href="login.html" class="btn btn-primary btn-user btn-block">
                                            Hadir
                                         </a>
                                    </form>
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>

                        <!-- end of Form Presensi -->


                    <!-- DataTabes Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Presensi Hari Ini</h6>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>Nama</th>
                                            <th>NIP</th>
                                            <th>Datang</th>
                                            <th>Pulang</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>NO</th>
                                            <th>Nama</th>
                                            <th>NIP</th>
                                            <th>Datang</th>
                                            <th>Pulang</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Samuel Suliadi</td>
                                            <td>3322xxxxxxxxxxx</td>
                                            <td>07.01</td>
                                            <td>15.02</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Rohmatul apesi namamu :)</td>
                                            <td>33221xxxxxxxxxx</td>
                                            <td>06.56</td>
                                            <td>14.50</td>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

</p>
<!-- /.container-fluid -->
@include('sweetalert::alert')
@endsection