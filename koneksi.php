<?php
$host   = 'localhost';
$user   = 'root';
$pass   = '';
$dbname = 'darul_atqia';

$koneksi = mysqli_connect($host, $user, $pass, $dbname);

if (!$koneksi) {
    die("koneksi gagal" . mysqli_connect_error());
}
// echo "berhasil";
