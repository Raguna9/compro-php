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


  <div class="container mb-5">
    <div class="row align-items-md-stretch">
      <div class="col-md-6 mt-5 ">
        <div class="">

          <h3 class="text-center">Informasi Kontak</h3>
          <h4 class="text-center">Yayasan Pondok Pesantren Darul Atqia</h4>
          <p class="fs-5 lh-sm text-justify">Silahkan menghubungi kontak yang ada di bawah ini untuk mengetahui informasi seputar pendaftaran dan informasi lainnya terkait Pondok Pesantren Darul Atqia</p>
          <p class="border-bottom pt-5"></p>
          <p>0877-6555-1146</p>
          <p>yayasandarulatqia@gmail.com</p>
          <!-- <a href="mailto:yayasandarulatqia@gmail.com">yayasandarulatqia@gmail.com</a> <br> -->
          <a href="https://kitabisa.com/ponpesdarulatqia" target="blank">kitabisa.com/ponpesdarulatqia</a>
          <p>Jln.Guru Yusuf, Embung Duduk, Labulia, Jonggat, Lombok Tengah, NTB, 83561</p>
        </div>
      </div>
      <div class="col-md-6">
        <!-- Memuat file components/pesan.php -->
        <?php include("app/pesan/kirim_pesan.php"); ?>
      </div>
    </div>
  </div>



  <!-- Memuat file components/footer.php -->
  <?php include("components/footer.php"); ?>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>