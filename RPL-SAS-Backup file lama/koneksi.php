<?php
$host="178.128.20.122";
$username="root";
$password="Multisystem19SI";
$namadatabase="database-github";
$connection=mysql_connect($host, $username, $password) or die("Kesalahan Koneksi...!!");
mysql_select_db($namadatabase, $connection) or die("Database Gagal terkoneksi");
echo “Koneksi Sukses”;
?>
