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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

  <title>Yayasan Pondok Pesantren Darul Atqia</title>
  <link href="source/images/statis/Logo_Ponpes.png" rel="shorcut icon" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- Memuat file components/navbar.php -->
  <?php include("components/navbar.php"); ?>

  <!-- Carousel -->
  <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="source/images/statis/carousel.jpg" class="d-block w-100" alt="..." height="486 px" />
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="source/images/statis/carousel2.jpg" class="d-block w-100" alt="..." height="486 px" />
      </div>
      <div class="carousel-item">
        <img src="source/images/statis/carousel3.jpg" class="d-block w-100" alt="..." height="486 px" />
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- Akhir Carousel -->

  <!-- Lembaga  -->
  <div class="container mb-5">
    <div class="row align-items-md-stretch">
      <div class="col-md-6">
        <div class="h-70 p-5 text-bg-dark border rounded-3">
          <h2>Lembaga Formal</h2>
          <p>PAUD, SMP Islam, SMA</p>
          <a href="lembaga.php">
            <button class="btn btn-outline-warning" type="button">Selengkapnya</button>
          </a>
        </div>
      </div>
      <div class="col-md-6">
        <div class="h-100 p-5 bg-light border rounded-3">
          <h2>Lembaga Non Formal</h2>
          <p>DARUNNAHDLIYAH</p>
          <a href="lembaga.php">
            <button class="btn btn-outline-secondary" type="button">Selengkapnya</button>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- Akhir Lembaga -->

  <!-- pelajaran -->
  <div class="container" id="pelajaran">
    <h2 class="border-bottom pb-2">Materi Pelajaran santri</h2>
  </div>


  <div class="container marketing py-2">
    <div class="row">
      <?php
      // $no = 0;
      while ($result = mysqli_fetch_array($pelajaran)) {
        // while ($result =  mysqli_query($conn, "SELECT * from pelajaran")) {
        // $no++;
      ?>
        <!-- $result = mysqli_fetch_array($pelajaran); -->

        <div class="col-lg-4 col-md-6">

          <img src="source/images/pelajaran/<?= $result['foto_pelajaran'] ?>" alt="" width="150px" height="150px" class="rounded-circle" />
          <!-- <rect width="100%" height="100%" fill="#777" /> -->
          <!-- <text x="50%" y="50%" fill="#777" dy=".3em"></text> -->

          <h3 class="fw-normal">
            <?php echo $result['nama_pelajaran']; ?>
          </h3>
          <p>
            <?php echo $result['penjelasan_pelajaran']; ?>
          <p>



        </div>
      <?php } ?>


    </div>
  </div>

  <!-- Akhir Pelajaran -->

  <!-- Profile -->
  <div class="container col-xxl-8 px-4 py-5 bg-light" id="profile">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="source/images/statis/profile.jpg" class="d-block mx-lg-auto img-fluid" alt="Darul Atqia" width="700" height="500" loading="lazy" />
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">Sekilas Profile Pondok Pesantren Darul Atqia</h1>
        <p class="lead">
          Yayasan Pondok Pesantren Darul Atqia berada di Dusun Embung Duduk, Ds Labulia, Kec Jonggat, Kab Lombok Tengah,
          NTB. Pondok Pesantren Darul Atqia sudah menaungi beberapa lembaga di dalamnya antara lain RA, SMP, dan SMA
          serta
          terdapat lembaga lainnya seperti Majelis Taklim.
        </p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <button type="button" class="btn btn-outline-success btn-lg px-4 me-md-2"><a class="link link-dark" href="profile.php">Selengkapnya &raquo;</a></button>
        </div>
      </div>
    </div>
  </div>
  <!-- Profile Akhir -->

  <!-- Fasilitas -->

  <div class="container px-4 py-5" id="icon-grid">
    <h2 class="pb-2 border-bottom">Fasilitas</h2>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-2">

      <?php
      // $no = 0;
      while ($result = mysqli_fetch_array($fasilitas)) {
        // while ($result =  mysqli_query($conn, "SELECT * from pelajaran")) {
        // $no++;
      ?>

        <div class="col d-flex align-items-start">
          <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
            <use xlink:href="#pin" />
          </svg>
          <i class="fa-duotone fa-screen-users"></i>
          <div>
            <h4 class="fw-bold mb-0 fs-4">
              <?php echo $result['nama_fasilitas']; ?>
            </h4>
          </div>
        </div>

      <?php } ?>



    </div>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pin-angle-fill">
      <symbol id="pin" viewBox="0 0 16 16">
        <path d="M9.828.722a.5.5 0 0 1 .354.146l4.95 4.95a.5.5 0 0 1 0 .707c-.48.48-1.072.588-1.503.588-.177 0-.335-.018-.46-.039l-3.134 3.134a5.927 5.927 0 0 1 .16 1.013c.046.702-.032 1.687-.72 2.375a.5.5 0 0 1-.707 0l-2.829-2.828-3.182 3.182c-.195.195-1.219.902-1.414.707-.195-.195.512-1.22.707-1.414l3.182-3.182-2.828-2.829a.5.5 0 0 1 0-.707c.688-.688 1.673-.767 2.375-.72a5.922 5.922 0 0 1 1.013.16l3.134-3.133a2.772 2.772 0 0 1-.04-.461c0-.43.108-1.022.589-1.503a.5.5 0 0 1 .353-.146z" />
      </symbol>
    </svg>
  </div>
  <!-- Fasilitas Akhir -->

  <!-- Album -->
  <div class="container">
    <h2 class="pb-2 border-bottom">Foto Kegiatan</h2>

  </div>

  <div class="album py-2" id="galery">
    <div class="container">
      <div class="row row-cols-2 row-cols-sm-3 rows-cols-md-3 g-3">

        <?php
        $i = 1;
        while ($result = mysqli_fetch_array($foto)) {

          // while ($result =  mysqli_query($conn, "SELECT * from pelajaran")) {
          // $no++;
        ?>

          <div class="col">
            <div class="card shadow-sm">
              <!-- Button trigger modal -->

              <button type="button" class="btn btn-border-0" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $i ?>">
                <img src="source/images/foto/<?= $result['foto'] ?>" alt="<?php echo $result['ket_foto']; ?>" width="100%" height="100%" />
              </button>

              <!-- Modal -->
              <div class="modal fade" id="exampleModal<?= $i ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

                <div class="modal-dialog modal-dialog-center">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel"><?php echo $result['ket_foto']; ?></h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                      <img src="source/images/foto/<?= $result['foto'] ?>" alt="<?php echo $result['ket_foto']; ?>" width="100%" height="100%" />

                    </div>
                    <div class="modal-footer">
                      <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php
          $i++;
        }
        ?>


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
  <!-- Album Akhir -->
  <!-- Memuat file components/footer.php -->
  <?php include("components/footer.php"); ?>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>