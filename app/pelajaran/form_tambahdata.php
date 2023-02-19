<?php

require '../functions.php';

// koneksi database
$conn = mysqli_connect("localhost", "root", "", "darul_atqia");

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

    // $nama_pelajaran = $_POST["nama_pelajaran"];
    // $penjelasan_pelajaran = $_POST["penjelasan_pelajaran"];
    // $foto_pelajaran = $_POST["foto_pelajaran"];

    // // query insert data
    // $query = "INSERT INTO pelajaran VALUES ('','$nama_pelajaran','$penjelasan_pelajaran','$foto_pelajaran')";

    // mysqli_query($conn, $query);

    // cek apakah data berhasil atau gagal
    if (tambah($_POST) > 0) {
        echo "
        <script>
            alert('data berhasil ditambahkan');
            document.location.href = '../adm/adm_pelajaran.php'
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data berhasil ditambahkan');
            document.location.href = '../adm/adm_pelajaran.php'
        </script>
        ";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Pelajaran</title>
    <link href="../../source/images/Logo_Ponpes.png" rel="shorcut icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
</head>

<body>

    <h1 class="text-center mt-5">Tambah Data Pelajaran</h1>
    <form action="" method="post" enctype="multipart/form-data">

        <div class="container">
            <div class="mb-3">
                <label for="nama_pelajaran" class="form-label">Nama Pelajaran</label>
                <input type="text" class="form-control" name="nama_pelajaran" id="nama_pelajaran" required>
            </div>
            <div class="mb-3">
                <label for="penjelasan_pelajaran" class="form-label">Penjelasan Pelajaran</label>
                <input type="text" class="form-control" name="penjelasan_pelajaran" id="penjelasan_pelajaran" required></input>
            </div>
            <div class="mb-3">
                <label for="foto_pelajaran" class="form-label">Foto Pelajaran</label>
                <input class="form-control form-control-sm" name="foto_pelajaran" id="foto_pelajaran" type="file" required>
            </div>


            <button class="btn btn-success" type="sumbit" name="submit">Tambah Data</button>


        </div>
    </form>


    <!-- <h1>Tambah Data</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="nama_pelajaran">Nama Pelajaran :</label>
                <input type="text" name="nama_pelajaran" id="nama_pelajaran" required>
            </li>
            <li>
                <label for="penjelasan_pelajaran">Penjelasan Pelajaran :</label>
                <input type="text" name="penjelasan_pelajaran" id="penjelasan_pelajaran" required>
            </li>
            <li>
                <label for="foto_pelajaran">Foto Pelajaran :</label>
                <input type="text" name="foto_pelajaran" id="foto_pelajaran" required>
            </li>
            <li>
                <button type="sumbit" name="submit">Tambah Data</button>
            </li>

        </ul>
    </form> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>