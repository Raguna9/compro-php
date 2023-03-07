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
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Memuat file components/navbar.php -->
    <?php include("components/navbar.php"); ?>


    <!-- Lembaga Formal -->
    <div class="container">
        <h2 class="pb-2 border-bottom">Foto Kegiatan</h2>

    </div>

    <div class="album py-2" id="galery">
        <div class="container">
            <div class="row row-cols-2 row-cols-sm-3 rows-cols-md-3 g-3">

                <?php
                // $no = 0;
                while ($result = mysqli_fetch_array($foto)) {
                    // while ($result =  mysqli_query($conn, "SELECT * from pelajaran")) {
                    // $no++;
                ?>

                    <div class="col">
                        <div class="card shadow-sm">

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-border-0" data-bs-toggle="modal" data-bs-target="#exampleModal">

                                <img src="source/images/foto/<?= $result['foto'] ?>" alt="<?php echo $result['ket_foto']; ?>" width="100%" height="100%" />

                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-center">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="source/images/foto/<?= $result['foto'] ?>" alt="<?php echo $result['ket_foto']; ?>" width="100%" height="100%" />



                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                <?php } ?>

                <!-- <div class="col">
          <div class="card shadow-sm">
            <img src="source/images/album2.jpg" alt="..." width="100%" height="100%" />
            <rect width="100%" height="100%" fill="#55595c" />
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="source/images/album3.jpg" alt="..." width="100%" height="100%" />
            <rect width="100%" height="100%" fill="#55595c" />
          </div>
        </div> -->
            </div>
        </div>
    </div>
    <!-- Akhir Lembaga Formal -->

    <!-- Memuat file components/footer.php -->
    <?php include("components/footer.php"); ?>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>