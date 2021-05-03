@extends('layouts.main')

@section('title', 'Dashboard | Sistem Administrasi Sekolah')

@section('container')

                <!-- Begin Page Content -->
                    <!-- Page Heading Guru-->
<div class="container-fluid">

    <h1 class="h1 mb-4 text-gray-800">DATA <strong>GURU</strong>
          <i class="h6 mb-4 text-gray-800"> SMA 1 Jonggol </i> 
    </h1>
                    <!-- DataTales Example -->


                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Guru</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>Nama</th>
                                            <th>NIP</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Alamat</th>
                                            <th>Other</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>NO</th>
                                            <th>Nama</th>
                                            <th>NIP</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Alamat</th>
                                            <th>Other</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Samuel Suliadi</td>
                                            <td>3322xxxxxxxxxxx</td>
                                            <td>Laki Laki</td>
                                            <td>Salatiga</td>
                                            <td>                 
                                                <div class="nav-item dropdown no-arrow">
                                                    <a class="btn btn-info btn-icon-split" href="#" id="userDropdown" role="button"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="icon text-white-50">
                                                            <i class="fas fa-arrow-right"></i>
                                                        </span>
                                                            <span class="text">More</span>
                                                    </a>
                                                     <!-- Menu Other -->
                                                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"aria-labelledby="userDropdown">
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>Edit</a>

                                                        <a class="dropdown-item" href="#">
                                                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>Hapus</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Rohmatul laeli arba'an nisa</td>
                                            <td>33221xxxxxxxxxx</td>
                                            <td>Perempuan</td>
                                            <td>Rembang</td>
                                            <td>                 
                                                <div class="nav-item dropdown no-arrow">
                                                    <a class="btn btn-info btn-icon-split" href="#" id="userDropdown" role="button"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="icon text-white-50">
                                                            <i class="fas fa-arrow-right"></i>
                                                        </span>
                                                            <span class="text">More</span>
                                                    </a>
                                                     <!-- Isi Menu Other -->
                                                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"aria-labelledby="userDropdown">
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>Edit</a>

                                                        <a class="dropdown-item" href="#">
                                                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>Hapus</a>
                                                    </div>
                                                </div>
                                            </td>           
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Alpina xxx</td>
                                            <td>33221xxxxxxxxxx</td>
                                            <td>Perempuan</td>
                                            <td>Jonggol</td>
                                            <td>                 
                                                <div class="nav-item dropdown no-arrow">
                                                    <a class="btn btn-info btn-icon-split" href="#" id="userDropdown" role="button"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="icon text-white-50">
                                                            <i class="fas fa-arrow-right"></i>
                                                        </span>
                                                            <span class="text">More</span>
                                                    </a>
                                                     <!-- Menu Other -->
                                                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"aria-labelledby="userDropdown">
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>Edit</a>

                                                        <a class="dropdown-item" href="#">
                                                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>Hapus</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- /.container-fluid -->


            <!-- End of Main Content -->
           

<!-- /.container-fluid -->
@include('sweetalert::alert')

@endsection