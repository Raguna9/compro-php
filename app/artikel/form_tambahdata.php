<?php

require '../functions.php';

// koneksi database
$conn = mysqli_connect("localhost", "root", "", "darul_atqia");

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
    if (tambahArtikel($_POST) > 0) {
        echo "
        <script>
            alert('data berhasil ditambahkan');
            document.location.href = '../../adm/adm_artikel.php'
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data berhasil ditambahkan');
            document.location.href = '../../adm/adm_artikel.php'
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
    <title>Tambah Data Artikel</title>
    <link href="../../source/images/Logo_Ponpes.png" rel="shorcut icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
</head>

<body>

    <h1 class="text-center mt-5">Tambah Data Artikel</h1>
    <form action="" method="post" enctype="multipart/form-data">

        <div class="container">
            <div class="mb-3">
                <label for="jdl_artikel" class="form-label">Judul</label>
                <input type="text" class="form-control" name="jdl_artikel" id="jdl_artikel" required>
            </div>
            <div class="mb-3">
                <label for="konten_artikel" class="form-label">Konten</label>
                <input type="text" class="form-control" name="konten_artikel" id="konten_artikel" required></input>
            </div>
            <div class="mb-3">
                <label for="foto_artikel" class="form-label">Foto Artikel</label>
                <input class="form-control form-control-sm" name="foto_artikel" id="foto_artikel" type="file" required>
            </div>
            <div class="mb-3">
                <label for="pembuat_artikel" class="form-label">Pembuat Artikel</label>
                <input type="text" class="form-control" name="pembuat_artikel" id="pembuat_artikel" required></input>
            </div>


            <button class="btn btn-success" type="sumbit" name="submit">Tambah Data</button>


        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>