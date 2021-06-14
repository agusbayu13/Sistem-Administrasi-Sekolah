<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login | Sistem Administrasi Sekolah </title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('frontend') }}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('frontend') }}/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('frontend') }}/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block">
                                <img src="{{ asset('assets/img/login.png')}}" alt="" class="img-fluid">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4"><strong> SELAMAT DATANG DI ACHYS NEW HIGH SCHOOL</strong></h1>
                                    </div>
                                    <form action="{{ route('login') }}" method="post">
                                        <center>
                                            <div>
                                                <a href="#" class="btn btn-primary btn-icon-split">
                                                    <span class="icon text-white-50">
                                                        <i class="fas fa-flag"></i>
                                                    </span>
                                                    <span class="text">GURU</span>
                                                </a>
                                            </div>
                                            <div class="my-2"></div>
                                            <div>
                                                <a href="#" class="btn btn-primary btn-icon-split">
                                                    <span class="icon text-white-50">
                                                        <i class="fas fa-flag"></i>
                                                    </span>
                                                    <span class="text">KARYAWAN</span>
                                                </a>
                                            </div>
                                            <div class="my-2"></div>
                                            <div>
                                                <a href="#" class="btn btn-primary btn-icon-split">
                                                    <span class="icon text-white-50">
                                                        <i class="fas fa-flag"></i>
                                                    </span>
                                                    <span class="text">SISWA</span>
                                                </a>
                                            </div>
                                        </center>
                                        <div class="text-center">
                                            <a class="small" href="{{ route('login') }}">Sudah punya akun? Login!</a>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('frontend') }}/vendor/jquery/jquery.min.js"></script>
    <script src="{{ asset('frontend') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('frontend') }}/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('frontend') }}/js/sb-admin-2.min.js"></script>
    <!-- Notif SweetAlert-->
    @include('sweetalert::alert')
</body>

</html>