<?php
require 'app/functions.php';

$pelajaran = mysqli_query($conn, "SELECT * FROM pelajaran");
$fasilitas = mysqli_query($conn, "SELECT * FROM fasilitas");
$foto = mysqli_query($conn, "SELECT * FROM foto");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <title>Yayasan Pondok Pesantren Darul Atqia</title>
    <link href="source/images/statis/Logo_Ponpes.png" rel="shorcut icon" />
    <link rel="stylesheet" href="style.css" />
    <style>
        .text-justify {
            text-align: justify;
        }
    </style>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Memuat file components/navbar.php -->
    <?php include("components/navbar.php"); ?>

    <div class="container pt-4">

        <h3 class="text-center">Yayasan Pondok Pesantren Darul Atqia merupakan pondok pesantren yang berlokasi di Dusun Embung Duduk yang memiliki tujuan untuk mewujudkan generasi qur'ani yang berpendidikan agama. Untuk mewujudkan tujuan tersebut Ponpes Darul Atqia memiliki beberapa lembaga yang bisa dijadikan salah satu alasan putra atau putri Anda agar dapat menimba ilmu di Ponpes Darul Atqia</h3>
    </div>


    <!-- Lembaga Formal -->
    <div class="container pt-5">
        <h3 class="pb-2 border-bottom">Lembaga Formal</h3>
    </div>

    <div class="album py-3" id="galery">
        <div class="container">
            <div class="row row-cols-2 row-cols-sm-3 rows-cols-md-3 g-5">
                <div class="col pb-3 pt-3">
                    <div class="card shadow-sm">
                        <img src="source/images/statis/logo_ponpes.png" alt="<?php echo $result['ket_foto']; ?>" width="100%" height="100%" />
                    </div>
                    <h4 class="border text-center pt-2 pb-2">PAUD</h4>
                </div>
                <div class="col pb-3 pt-3">
                    <div class="card shadow-sm">
                        <img src="source/images/statis/logo_ponpes.png" alt="<?php echo $result['ket_foto']; ?>" width="100%" height="100%" />
                    </div>
                    <h4 class="border text-center pt-2 pb-2">SMP Islamiyah</h4>
                </div>
                <div class="col pb-3 pt-3">
                    <div class="card shadow-sm">
                        <img src="source/images/statis/logo_ponpes.png" alt="<?php echo $result['ket_foto']; ?>" width="100%" height="100%" />
                    </div>
                    <h4 class="border text-center pt-2 pb-2">Madrasah Aliyah</h4>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Lembaga Formal -->

    <!-- Lembaga NonFormal -->
    <div class="container pt-5">
        <h3 class="pb-2 border-bottom">Lembaga NonFormal</h3>
    </div>

    <div class="album py-2" id="galery">
        <div class="container">
            <div class="row row-cols-2 row-cols-sm-3 rows-cols-md-3 g-5">
                <div class="col pb-3 pt-3">
                    <div class="card shadow-sm">
                        <img src="source/images/statis/logo_ponpes.png" alt="<?php echo $result['ket_foto']; ?>" width="100%" height="100%" />
                    </div>
                    <h4 class="border text-center pt-2 pb-2">Darunnahdliyah</h4>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Lembaga NonFormal -->

    <!-- Memuat file components/footer.php -->
    <?php include("components/footer.php"); ?>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>