<?php
// include 'koneksi.php';
require 'app/functions.php';

$foto = mysqli_query($conn, "SELECT * FROM foto");
$row = mysqli_fetch_assoc($foto);
$kategori_foto = $row['kategori_foto'];

$foto_darul_atqia = mysqli_query($conn, "SELECT * FROM foto WHERE kategori_foto = 'darul-atqia'");
$foto_paud = mysqli_query($conn, "SELECT * FROM foto WHERE kategori_foto = 'paud'");
$foto_smp_islam = mysqli_query($conn, "SELECT * FROM foto WHERE kategori_foto = 'smp-islam'");
$foto_sma_islam = mysqli_query($conn, "SELECT * FROM foto WHERE kategori_foto = 'sma-islam'");
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
  <link href="source/images/statis/Logo_Ponpes.png" rel="shorcut icon" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <!-- Memuat file components/navbar.php -->
  <?php include("components/navbar.php"); ?>

  <!-- Album -->
  <div class="container mt-4">
    <h1 class="h1 my-2">Galeri Foto Kegiatan</h1>
    <ul class="nav nav-tabs" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="darul-atqia-tab" data-bs-toggle="tab" data-bs-target="#darul-atqia"
          type="button" role="tab" aria-controls="darul-atqia" aria-selected="true">Darul Atqia</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="paud-tab" data-bs-toggle="tab" data-bs-target="#paud" type="button" role="tab"
          aria-controls="paud" aria-selected="false">PAUD</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="smp-islam-tab" data-bs-toggle="tab" data-bs-target="#smp-islam" type="button"
          role="tab" aria-controls="smp-islam" aria-selected="false">SMP Islam</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="sma-islam-tab" data-bs-toggle="tab" data-bs-target="#sma-islam" type="button"
          role="tab" aria-controls="sma-islam" aria-selected="false">SMA Islam</button>
      </li>
    </ul>
    <div class="album py-2">

      <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade show active" id="darul-atqia">
          <div class="container">
            <div class="row row-cols-2 row-cols-sm-3 rows-cols-md-3 g-3">
              <?php
              $i_da = 1;
              while ($result_da = mysqli_fetch_array($foto_darul_atqia)) { ?>
                <div class="col">
                  <div class="card shadow-sm">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-border-0" data-bs-toggle="modal"
                      data-bs-target="#modal-da<?= $i_da ?>" style="height: 300px;">
                      <img src="source/images/foto/<?= $result_da['foto'] ?>" alt="<?php echo $result_da['ket_foto']; ?>"
                        style="width: 100%; height: 100%; object-fit: cover;" />
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="modal-da<?= $i_da ?>" tabindex="-1" aria-labelledby="modal-daLabel"
                      aria-hidden="true">
                      <div class="modal-dialog modal-dialog-center">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="modal-daLabel">
                              <?php echo $result_da['ket_foto']; ?>
                            </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <img src="source/images/foto/<?= $result_da['foto'] ?>"
                              alt="<?php echo $result_da['ket_foto']; ?>" width="100%" height="100%" />
                          </div>
                          <div class="modal-footer">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php
                $i_da++;
              } ?>
            </div>
          </div>
        </div>

        <div role="tabpanel" class="tab-pane fade show" id="paud">
          <div class="container">
            <div class="row row-cols-2 row-cols-sm-3 rows-cols-md-3 g-3">
              <?php
              $i_paud = 1;
              while ($result_paud = mysqli_fetch_array($foto_paud)) { ?>
                <div class="col">
                  <div class="card shadow-sm">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-border-0" data-bs-toggle="modal"
                      data-bs-target="#modal-paud<?= $i_paud ?>" style="height: 300px;">
                      <img src="source/images/foto/<?= $result_paud['foto'] ?>"
                        alt="<?php echo $result_paud['ket_foto']; ?>"
                        style="width: 100%; height: 100%; object-fit: cover;" />
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="modal-paud<?= $i_paud ?>" tabindex="-1" aria-labelledby="modal-paudLabel"
                      aria-hidden="true">
                      <div class="modal-dialog modal-dialog-center">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="modal-paudLabel">
                              <?php echo $result_paud['ket_foto']; ?>
                            </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <img src="source/images/foto/<?= $result_paud['foto'] ?>"
                              alt="<?php echo $result_paud['ket_foto']; ?>" width="100%" height="100%" />
                          </div>
                          <div class="modal-footer">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php
                $i_paud++;
              } ?>
            </div>
          </div>
        </div>

        <div role="tabpanel" class="tab-pane fade show" id="smp-islam">
          <div class="container">
            <div class="row row-cols-2 row-cols-sm-3 rows-cols-md-3 g-3">
              <?php
              $i_smp = 1;
              while ($result_smp = mysqli_fetch_array($foto_smp_islam)) { ?>
                <div class="col">
                  <div class="card shadow-sm">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-border-0" data-bs-toggle="modal"
                      data-bs-target="#modal-smp<?= $i_smp ?>" style="height: 300px;">
                      <img src="source/images/foto/<?= $result_smp['foto'] ?>"
                        alt="<?php echo $result_smp['ket_foto']; ?>"
                        style="width: 100%; height: 100%; object-fit: cover;" />
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="modal-smp<?= $i_smp ?>" tabindex="-1" aria-labelledby="modal-smpLabel"
                      aria-hidden="true">
                      <div class="modal-dialog modal-dialog-center">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="modal-smpLabel">
                              <?php echo $result_smp['ket_foto']; ?>
                            </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <img src="source/images/foto/<?= $result_smp['foto'] ?>"
                              alt="<?php echo $result_smp['ket_foto']; ?>" width="100%" height="100%" />
                          </div>
                          <div class="modal-footer">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php
                $i_smp++;
              } ?>
            </div>
          </div>
        </div>

        <div role="tabpanel" class="tab-pane fade show" id="sma-islam">
          <div class="container">
            <div class="row row-cols-2 row-cols-sm-3 rows-cols-md-3 g-3">
              <?php
              $i_sma = 1;
              while ($result_sma = mysqli_fetch_array($foto_sma_islam)) { ?>
                <div class="col">
                  <div class="card shadow-sm">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-border-0" data-bs-toggle="modal"
                      data-bs-target="#modal-sma<?= $i_sma ?>" style="height: 300px;">
                      <img src="source/images/foto/<?= $result_sma['foto'] ?>"
                        alt="<?php echo $result_sma['ket_foto']; ?>"
                        style="width: 100%; height: 100%; object-fit: cover;" />
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="modal-sma<?= $i_sma ?>" tabindex="-1" aria-labelledby="modal-smaLabel"
                      aria-hidden="true">
                      <div class="modal-dialog modal-dialog-center">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="modal-smaLabel">
                              <?php echo $result_sma['ket_foto']; ?>
                            </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <img src="source/images/foto/<?= $result_sma['foto'] ?>"
                              alt="<?php echo $result_sma['ket_foto']; ?>" width="100%" height="100%" />
                          </div>
                          <div class="modal-footer">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php
                $i_sma++;
              } ?>
            </div>
          </div>
        </div>
        <!-- Album Akhir -->
        <!-- Memuat file components/footer.php -->
        <?php include("components/footer.php"); ?>

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
          crossorigin="anonymous"></script>
</body>

</html>