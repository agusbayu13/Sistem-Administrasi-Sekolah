<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register Khusus Admin | Sistem Administrasi Sekolah</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('frontend') }}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('frontend') }}/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('frontend') }}/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block">
                        <img src="{{ asset('assets/img/register.png')}}" alt="" class="img-fluid">
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">
                                    <strong>
                                        KHUSUS ADMIN
                                        </br>
                                        BUAT AKUN BARU DI ACHYS
                                        </br>
                                        NEW HIGH SCHOOL
                                    </strong>
                                </h1>
                            </div>
                            <form action="{{ route('register') }}" method="post">
                                @csrf
                                <div class="card-body">
                                    @if(session('errors'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        Maaf, Terjadi sebuah kesalahan:
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                    <div class="form-group">
                                        <label for=""><strong>Nama Lengkap</strong></label>
                                        <input type="text" name="name" class="form-control" placeholder="Nama Lengkap">
                                    </div>
                                    <div class="form-group">
                                        <label for=""><strong>NIP</strong></label>
                                        <input type="text" name="nip" class="form-control" placeholder="NIP">
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text">
                                                Jenis User
                                            </label>
                                        </div>
                                        <select class="custom-select" name="level">

                                            <option value="">Pilih Jenis User</option>
                                            <option value="Guru">Guru</option>
                                            <option value="Karyawan">Karyawan</option>
                                            <option value="Siswa">Siswa</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for=""><strong>Email</strong></label>
                                        <input type="text" name="email" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label for=""><strong>Password</strong></label>
                                        <input type="password" name="password" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label for=""><strong>Konfirmasi Password</strong></label>
                                        <input type="password" name="password_confirmation" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-block">Register</button>

                            </form>
                            <div class="text-center">
                                <a class="small" href="{{ route('login') }}">Sudah punya akun? Login!</a>
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
    @include('sweetalert::alert')
</body>

</html>