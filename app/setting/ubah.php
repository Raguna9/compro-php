<?php

require '../functions.php';

// ambil data di URL
$id = $_GET["id"];

// query data admin
$admin = query("SELECT * FROM admin WHERE id_admin =$id")[0];

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

    // cek apakah data berhasil diubah atau gagal
    if (ubahAdmin($_POST) > 0) {
        echo "
        <script>
            alert('data berhasil diubah');
            document.location.href = '../../adm/adm_setting.php'
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal diubah');
            document.location.href = '../../adm/adm_setting.php'
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
    <title>Ubah Data Admin</title>
    <link href="../../source/images/statis/Logo_Ponpes.png" rel="shorcut icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
</head>

<body>

    <h1 class="text-center mt-5">Ubah Data Admin</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_admin" value="<?= $admin["id_admin"] ?>">


        <div class="container">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" id="username" required value="<?= $admin["username"]; ?>">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" rows="3" name="password" id="floatingPassword" required value="<?= $admin["password"]; ?>"></input>
            </div>

            <div class="checkbox mb-3">
                <label> <input type="checkbox" value="<?= $admin["password"]; ?>" onclick="Toggle()" /> Show Password </label>
            </div>

            <script>
                // Change the type of input to password or text
                function Toggle() {
                    var temp = document.getElementById("floatingPassword");
                    if (temp.type === "password") {
                        temp.type = "text";
                    } else {
                        temp.type = "password";
                    }
                }
            </script>


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