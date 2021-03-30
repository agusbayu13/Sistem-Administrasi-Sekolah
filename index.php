<?php
session_start();
if(!isset($_SESSION['login'])){
    header('location:login.php');
}

include "koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Sistem Administrasi Sekolah</title>
</head>
<body>
    <h3>Aplikasi Sistem Administrasi Sekolah</h3>
<hr/>
    <a href="tampil_admin.php">Data Admin</a> |
    <a href="tampil_guru.php">Data Guru</a> |
    <a href="tampil_siswa.php">Data Siswa</a> |
    <a href="transaksi.php">Data Transaksi</a> |
    <a href="laporan.php">Data Laporan</a> |
    <a href="logout.php">Data Logout</a> |
<hr/>
    <h3>Selamat Datang di Dashboard Aplikasi Sistem Administrasi Sekolah</h3>
        <p>Silahkan digunakan dengan baik ya</p>
<hr/>
    <i>Dibuat oleh : Kelompok 6 RPL Universitas Negeri Semarang Tahun 2021</i>
</body>
</html>