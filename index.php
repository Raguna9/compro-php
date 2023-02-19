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
  <link href="source/images/Logo_Ponpes.png" rel="shorcut icon" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark sticky-top bg-success shadow-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="source/images/Logo_Ponpes.png" alt="Logo_Ponpes" width="40" height="40" class="d-inline-block align-text-center" />
        Yayasan Pondok Pesantren Darul Atqia
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#profile">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#pelajaran">Pelajaran</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#galery">Galeri</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="kontak.php">Kontak</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">
              <svg class="bi text-muted flex-shrink-0 me-3" width="1.55em" height="1.55em">
                <use xlink:href="#person" />
              </svg>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Akhir Navbar -->

  <!-- Carousel -->
  <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="source/images/carousel.jpg" class="d-block w-100" alt="..." height="486 px" />
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="source/images/carousel4.jpg" class="d-block w-100" alt="..." height="486 px" />
      </div>
      <div class="carousel-item">
        <img src="source/images/carousel5.jpeg" class="d-block w-100" alt="..." height="486 px" />
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
          <button class="btn btn-outline-warning" type="button">Selengkapnya</button>
        </div>
      </div>
      <div class="col-md-6">
        <div class="h-100 p-5 bg-light border rounded-3">
          <h2>Lembaga Non Formal</h2>
          <p>DARUNNAHDLIYAH</p>
          <button class="btn btn-outline-secondary" type="button">Selengkapnya</button>
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

          <img src="source/images/<?= $result['foto_pelajaran'] ?>" alt="" width="150px" height="150px" class="rounded-circle" />
          <!-- <rect width="100%" height="100%" fill="#777" /> -->
          <!-- <text x="50%" y="50%" fill="#777" dy=".3em"></text> -->

          <h3 class="fw-normal"><?php echo $result['nama_pelajaran']; ?></h3>
          <p><?php echo $result['penjelasan_pelajaran']; ?>
          <p>



        </div>
      <?php }        ?>


    </div>
  </div>

  <!-- Akhir Pelajaran -->

  <!-- Profile -->
  <div class="container col-xxl-8 px-4 py-5 bg-light" id="profile">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="source/images/carousel1.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy" />
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">Sekilas Profile Pondok Pesantren Darul Atqia</h1>
        <p class="lead">
          Yayasan Pondok Pesantren Darul Atqia berada di Dusun Embung Duduk, Ds Labulia, Kec Jonggat, Kab Lombok Tengah, NTB. Pondok Pesantren Darul Atqia sudah menaungi beberapa lembaga di dalamnya antara lain RA, SMP, dan SMA serta
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
            <h4 class="fw-bold mb-0 fs-4"><?php echo $result['nama_fasilitas']; ?></h4>
          </div>
        </div>

      <?php }        ?>



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
        // $no = 0;
        while ($result = mysqli_fetch_array($foto)) {
          // while ($result =  mysqli_query($conn, "SELECT * from pelajaran")) {
          // $no++;
        ?>

          <div class="col">
            <div class="card shadow-sm">

              <!-- Button trigger modal -->
              <button type="button" class="btn btn-border-0" data-bs-toggle="modal" data-bs-target="#exampleModal">

                <img src="source/images<?= $result['foto'] ?>" alt="<?php echo $result['ket_foto']; ?>" width="100%" height="100%" />


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
                      <img src="source/images<?= $result['foto'] ?>" alt="<?php echo $result['ket_foto']; ?>" width="100%" height="100%" />



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

        <?php }        ?>

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

  <!-- Footer -->
  <div class="bg-light">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#fff" fill-opacity="1" d="M0,32L16,64C32,96,64,160,96,181.3C128,203,160,181,192,197.3C224,213,256,267,288,256C320,245,352,171,384,154.7C416,139,448,181,480,170.7C512,160,544,96,576,96C608,96,640,160,672,160C704,160,736,96,768,74.7C800,53,832,75,864,74.7C896,75,928,53,960,53.3C992,53,1024,75,1056,90.7C1088,107,1120,117,1152,106.7C1184,96,1216,64,1248,42.7C1280,21,1312,11,1344,16C1376,21,1408,43,1424,53.3L1440,64L1440,0L1424,0C1408,0,1376,0,1344,0C1312,0,1280,0,1248,0C1216,0,1184,0,1152,0C1120,0,1088,0,1056,0C1024,0,992,0,960,0C928,0,896,0,864,0C832,0,800,0,768,0C736,0,704,0,672,0C640,0,608,0,576,0C544,0,512,0,480,0C448,0,416,0,384,0C352,0,320,0,288,0C256,0,224,0,192,0C160,0,128,0,96,0C64,0,32,0,16,0L0,0Z"></path>
    </svg>
    <div class="container">
      <footer class="py-1">
        <div class="row ">

          <div class="col-12 col-md-4 mb-3 ">
            <h5>Informasi Kontak</h5>
            <p>Jln.Guru Yusuf Rt.06 Dusun Embung Duduk, Desa Labulia, Kecamatan Jonggat,
              Kabupaten Lombok Tengah, Nusa Tenggara Barat
            </p>

            <!-- <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
            </ul> -->

            <img src="source/images/Logo_Ponpes.png" alt="" style="display:block; margin-left: auto; margin-right:auto">

          </div>

          <!-- <div class="col-6 col-md-2 mb-3 ">
            <img src="source/images/Logo_Ponpes.png" alt="">
            
          </div> -->

          <div class="col-md-7 offset-md-1 mb-3 ">
            <div class="ratio ratio-16x9">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.4832950968103!2d116.18875341451822!3d-8.645499490316501!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdb90e2ca02b39%3A0xa09b9f54c40d1e98!2sYAYASAN%20PONDOK%20PESANTREN%20DARUL%20ATQIA!5e0!3m2!1sen!2sid!4v1667186895431!5m2!1sen!2sid" width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>

        <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
          <ul class="list-unstyled d-flex">
            <li class="ms-3">
              <a class="link-dark" href="https://www.youtube.com/channel/UCH0zbOzXx1x3d4oCvc-c0WA" target="_blank"><svg class="bi" width="24" height="24">
                  <use xlink:href="#youtube" />
                </svg>
              </a>
            </li>
            <li class="ms-3">
              <a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                  <use xlink:href="#instagram" />
                </svg>
              </a>
            </li>
            <li class="ms-3">
              <a class="link-dark" href="https://web.facebook.com/YPPDA" target="_blank"><svg class="bi" width="24" height="24">
                  <use xlink:href="#facebook" />
                </svg>
              </a>
            </li>
          </ul>
          <p>Copyright &copy;2022 NurCode. All rights reserved.</p>
        </div>
      </footer>
    </div>

    <!-- logo -->
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
      <symbol id="facebook" viewBox="0 0 16 16" fill=#3b5998>
        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
      </symbol>
      <symbol id="instagram" viewBox="0 0 16 16" fill=#f46f30>
        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
      </symbol>
      <symbol id="youtube" viewBox="0 0 16 16" fill=#c4302b>
        <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
      </symbol>
    </svg>

    <svg xmlns="http://www.w3.org/2000/svg" fill="curentcolor">
      <symbol id="person" viewBox="0 0 16 16" fill="#fff3">
        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
      </symbol>
    </svg>

    <!--  logo end  -->
  </div>

  <!-- Akhir Footer -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>