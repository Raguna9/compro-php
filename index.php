<?php
// include 'koneksi.php';


require 'app/functions.php';

$pelajaran = mysqli_query($conn, "SELECT * FROM pelajaran");
$fasilitas = mysqli_query($conn, "SELECT * FROM fasilitas");
$foto = mysqli_query($conn, "SELECT * FROM foto");

// ambil data di URL
// $id = $_GET["id"];

// query data pelajaran
// $mapel = query("SELECT * FROM pelajaran WHERE id_pelajaran =$id")[0];



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

  <title>Yayasan Pondok Pesantren Darul Atqia</title>
  <link href="source/images/Logo_Ponpes.png" rel="shorcut icon" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

  <!-- Memuat file components/navbar.php -->
  <?php include("components/navbar.php"); ?>

  <!-- Memuat file components/carousel_homepage.php -->
  <?php include("components/carousel_homepage.php"); ?>

  <!-- Memuat file components/lembaga_homepage.php -->
  <?php include("components/lembaga_homepage.php"); ?>

  <!-- Memuat file components/pelajaran_homepage.php -->
  <?php include("components/pelajaran_homepage.php"); ?>

  <!-- Memuat file components/profile_homepage.php -->
  <?php include("components/profile_homepage.php"); ?>

  <!-- Memuat file components/fasilitas_homepage.php -->
  <?php include("components/fasilitas_homepage.php"); ?>

  <!-- Memuat file components/album_homepage.php -->
  <?php include("components/album_homepage.php"); ?>

  <!-- Memuat file components/footer.php -->
  <?php include("components/footer.php"); ?>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>