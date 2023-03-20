<?php

require '../functions.php';

// ambil data di URL
$id = $_GET["id"];

// query data artikel
$mapel = query("SELECT * FROM artikel WHERE id_artikel =$id")[0];


// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

    // cek apakah data berhasil diubah atau gagal
    if (ubahArtikel($_POST) > 0) {
        echo "
        <script>
            alert('data berhasil diubah');
            document.location.href = '../../adm/adm_artikel.php'
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal diubah');
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
    <title>Ubah Data Artikel</title>
    <link href="../../source/images/statis/Logo_Ponpes.png" rel="shorcut icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../../tinymce/skins/ui/oxide/skin.min.css">
    <script src="../../tinymce/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'autolink lists link image charmap print preview hr anchor pagebreak',
            toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
            autosave_ask_before_unload: false
        });
    </script>
</head>

<body>

    <h1 class="text-center mt-5">Ubah Data Artikel</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_artikel" value="<?= $mapel["id_artikel"] ?>">
        <input type="hidden" name="gambarLama" value="<?= $mapel["foto_artikel"] ?>">

        <div class="container">
            <div class="mb-3">
                <label for="jdl_artikel" class="form-label">Judul</label>
                <input type="text" class="form-control" name="jdl_artikel" id="jdl_artikel" required
                    value="<?= $mapel["jdl_artikel"]; ?>">
            </div>
            <div class="mb-3">
                <label for="konten_artikel" class="form-label">Konten</label>
                <textarea class="form-control" name="konten_artikel" id="konten_artikel" rows="9"
                    required><?= $mapel["konten_artikel"]; ?></textarea>
            </div>
            <div class="mb-3">
                <label for="foto_artikel" class="form-label">Foto Artikel</label>
                <input class="form-control form-control-sm" name="foto_artikel" id="foto_artikel" type="file"
                    value="<?= $mapel['foto_artikel'] ?>">
                <div class="mt-3">

                    <img src="../../source/images/artikel/<?= $mapel['foto_artikel'] ?>"
                        alt="<?= $mapel['jdl_artikel'] ?>" width="150px">
                </div>
            </div>
            <div class="mb-3">
                <label for="pembuat_artikel" class="form-label">Pembuat Artikel</label>
                <input type="text" class="form-control" rows="3" name="pembuat_artikel" id="pembuat_artikel" required
                    value="<?= $mapel["pembuat_artikel"]; ?>"></input>
            </div>


            <button class="btn btn-success" type="sumbit" name="submit">Ubah Data</button>


        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>