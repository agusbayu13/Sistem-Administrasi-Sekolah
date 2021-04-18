<?php
 	// Membuka Session
	session_start();
	// Menset jam dan tanggal secara default dengan lokasi asia jakarta
	date_default_timezone_set("Asia/Jakarta");

	$host		= "178.128.20.122";
	$username	= "root";
	$password	= "";
	$database	= "sistem_administrasi_sekolah";  
	// membuat variable koneksi
	$koneksi = mysqli_connect($host, $username, $password, $database);
	// cek koneksi berhasil atau tidak
	if ($koneksi) {
		//echo "berhasil terkoneksi";
	} else {
		echo "gagal";
	}
 ?>
