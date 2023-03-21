<?php

require '../functions.php';

// ambil data di URL
$id = $_GET["id"];

// query data pelajaran
$foto = query("SELECT * FROM foto WHERE id_foto =$id")[0];



// koneksi database
// $conn = mysqli_connect("localhost", "root", "", "darul_atqia");

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

    // $nama_pelajaran = $_POST["nama_pelajaran"];
    // $penjelasan_pelajaran = $_POST["penjelasan_pelajaran"];
    // $foto_pelajaran = $_POST["foto_pelajaran"];

    // // query insert data
    // $query = "INSERT INTO pelajaran VALUES ('','$nama_pelajaran','$penjelasan_pelajaran','$foto_pelajaran')";

    // mysqli_query($conn, $query);

    // cek apakah data berhasil diubah atau gagal
    if (ubahFoto($_POST) > 0) {
        echo "
        <script>
            alert('data berhasil diubah');
            document.location.href = '../../adm/adm_foto.php'
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal diubah');
            document.location.href = '../../adm/adm_foto.php'
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
    <title>Ubah Data Foto</title>
    <link href="../../source/images/statis/Logo_Ponpes.png" rel="shorcut icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
</head>

<body>

    <h1 class="text-center mt-5">Ubah Data Foto</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_foto" value="<?= $foto["id_foto"] ?>">
        <input type="hidden" name="gambarLama" value="<?= $foto["foto"] ?>">

        <div class="container">
            <div class="mb-3">
                <label for="ket_foto" class="form-label">Keterangan Foto</label>
                <input type="text" class="form-control" name="ket_foto" id="ket_foto" required value="<?= $foto["ket_foto"]; ?>">
            </div>
            <div class="form-group">
                <label for="kategori_foto">Kategori:</label>
                <select class="form-control" id="selectKategori" name="kategori_foto" value="<?= $foto["kategori_foto"]; ?>">
                    <option value="darul-atqia">Darul Atqia</option>
                    <option value="paud">PAUD</option>
                    <option value="smp-islam">SMP Islam</option>
                    <option value="sma-islam">SMA Islam</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="foto" class="form-label">Foto</label>
                <input class="form-control form-control-sm" name="foto" id="foto" type="file" value="<?= $foto['foto'] ?>">

                <div class="mt-3">

                    <img src="../../source/images/foto/<?= $foto['foto'] ?>" alt="<?= $foto['ket_foto'] ?>" width="150px">
                </div>
            </div>


            <button class="btn btn-success" type="sumbit" name="submit">Ubah Data</button>


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