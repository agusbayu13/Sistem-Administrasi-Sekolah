<?php
//variabel koneksi
$konek = mysqli_connect ("localhost", "root", "", "databasespp");

if(!$konek) {
    echo "Koneksi Database Gagal...!!!"
}
?>