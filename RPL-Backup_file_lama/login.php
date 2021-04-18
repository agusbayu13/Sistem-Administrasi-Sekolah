<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Halaman Login | Sistem Administrasi Sekolah</title>

	<!-- Bootstrap core CSS -->
	<link href="./assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">


	<!-- Custom styles for this template -->
	<link href="./assets/css/style.css" rel="stylesheet" type="text/css">


</head>

<body class="text-center">
	<div id="card">
		<div id="card-content">
			<div id="card-title">
				<img class="mb-4" src="" alt="" width="72" height="57">
				<h3>Silahkan Login</h3>
				<div class="underline-title"></div>
			</div>
		</div>

		<main class="form-signin">
			<form method="post" action="" class="form">

				<label for="user-email" style="padding-top:13px">&nbsp;Username</label>
				<input id="user-email" class="form-content" type="text" name="username" autocomplete="on" required />
				<div class="form-border"></div>
				<br>
				<label for="user-password" style="padding-top:22px">&nbsp;Password</label>
				<input id="user-password" class="form-content" type="password" name="password" required />
				<div class="form-border"></div>
				<a href="#">

					<a href="#">
						<legend id="forgot-pass">Forgot password?</legend>
					</a>
					<input id="submit-btn" type="submit" name="submit" value="LOGIN" /><a href="#" id="signup">*note: username dan password diisi dengan > admin </a>

			</form>
		</main>
	</div>
	</div>
	<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		//variabel untuk menyimpan kiriman dari form
		$user = $_POST['username'];
		$pass = $_POST['password'];

		if ($user == '' || $pass == '') {
			echo "Form belum lengkap!";
		} else {
			include "koneksi.php";
			$sqlLogin = mysqli_query($konek, "SELECT * FROM admin WHERE username='$user' AND password='$pass'");
			$jml = mysqli_num_rows($sqlLogin);
			$d = mysqli_fetch_array($sqlLogin);
			if ($jml > 0) {
				session_start();
				$_SESSION['login']		= true;
				$_SESSION['id']			= $d['idadmin'];
				$_SESSION['username']	= $d['username'];

				header('location:./index.php');
			} else {
				echo "Username dan Password anda salah!";
			}
		}
	}
	?>
</body>

</html>