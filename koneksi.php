<?php
//variabel koneksi
$konek = mysqli_connect ("localhost", "root", "", "login"); //databasespp nanti diganti nama database nya

if(!$konek) {
    echo "Koneksi Database Gagal...!!!"
}
?>
