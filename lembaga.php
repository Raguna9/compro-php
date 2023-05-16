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
    <style>
        .nav-link:not(.active) {
            color: black;
        }
    </style>

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
        <p class="text-center fs-5">Yayasan Pondok Pesantren Darul Atqia merupakan pondok pesantren yang berlokasi di Dusun Embung Duduk yang memiliki tujuan untuk mewujudkan generasi qur'ani yang berpendidikan agama. Untuk mewujudkan tujuan tersebut Ponpes Darul Atqia memiliki beberapa lembaga yang bisa dijadikan salah satu alasan putra atau putri Anda agar dapat menimba ilmu di Ponpes Darul Atqia</p>
    </div>

    <div class="container">

        <div class="container mt-5">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="formal-tab" data-bs-toggle="tab" data-bs-target="#formal" type="button" role="tab" aria-controls="formal" aria-selected="true">Lembaga Formal</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="nonformal-tab" data-bs-toggle="tab" data-bs-target="#nonformal" type="button" role="tab" aria-controls="nonformal" aria-selected="false">Lembaga Nonformal</button>
                </li>
            </ul>
            <div class="tab-content mt-3">
                <div class="tab-pane fade show active" id="formal" role="tabpanel" aria-labelledby="formal-tab">
                    <div class="album py-3" id="galery">
                        <div class="container" id="formal">
                            <div class="row row-cols-2 row-cols-sm-3 rows-cols-md-3 g-5">
                                <div class="col pb-3 pt-3">
                                    <div class="card shadow-sm">
                                        <img src="source/images/statis/paud1.jpeg" alt="" width="100%" height="220px" />
                                    </div>
                                    <h4 class="border text-center pt-2 pb-2">PAUD</h4>
                                </div>
                                <div class="col pb-3 pt-3">
                                    <div class="card shadow-sm">
                                        <img src="source/images/statis/smp-sma1.jpeg" alt="" width="100%" height="220px" />
                                    </div>
                                    <h4 class="border text-center pt-2 pb-2">SMP Islamiyah</h4>
                                </div>
                                <div class="col pb-3 pt-3">
                                    <div class="card shadow-sm">
                                        <img src="source/images/statis/smp-sma3.jpeg" alt="" width="100%" height="220px" />
                                    </div>
                                    <h4 class="border text-center pt-2 pb-2">SMA Islamiyah</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nonformal" role="tabpanel" aria-labelledby="nonformal-tab">
                    <div class="album py-2" id="galery">
                        <div class="container">
                            <div class="row row-cols-2 row-cols-sm-3 rows-cols-md-3 g-5">
                                <div class="col pb-3 pt-3">
                                    <div class="card shadow-sm">
                                        <img src="source/images/statis/darunnahdliyah.jpg" alt="" width="100%" height="220px" />
                                    </div>
                                    <h4 class="border text-center pt-2 pb-2">MTDS Darunnahdliyah</h4>
                                </div>
                                <div class="col pb-3 pt-3">
                                    <div class="card shadow-sm">
                                        <img src="source/images/statis/tpq2.jpg" alt="" width="100%" height="220px" />
                                    </div>
                                    <h4 class="border text-center pt-2 pb-2">Taman Pendidikan Qur'an</h4>
                                </div>
                                <div class="col pb-3 pt-3">
                                    <div class="card shadow-sm">
                                        <img src="source/images/statis/tahfiz.jpg" alt="" width="100%" height="220px" />
                                    </div>
                                    <h4 class="border text-center pt-2 pb-2">Tahfidzul Qur'an</h4>
                                </div>
                                <div class="col pb-3 pt-3">
                                    <div class="card shadow-sm">
                                        <img src="source/images/statis/diniyah.jpg" alt="" width="100%" height="220px" />
                                    </div>
                                    <h4 class="border text-center pt-2 pb-2">Diniyah Taklimiyah</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Memuat file components/ppdb.php -->
        <div class="mt-5">
            <?php include("components/ppdb.php"); ?>
        </div>
    </div>


    <!-- Memuat file components/footer.php -->
    <?php include("components/footer.php"); ?>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>