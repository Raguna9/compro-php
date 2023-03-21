<?php
require 'app/functions.php';
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
<style>
  .artikel-title {
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-line-clamp: 1;
    -webkit-box-orient: vertical;
  }

  .artikel-konten {
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
  }
</style>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <!-- Memuat file components/navbar.php -->
  <?php include("components/navbar.php"); ?>
  <div class="container mt-4">

    <h1 class="h1 my-2">Artikel</h1>
    <div class="row">
      <?php
      // query untuk mengambil data artikel dari database
      $query = "SELECT * FROM artikel ORDER BY id_artikel DESC";
      $result = mysqli_query($conn, $query);

      // loop untuk menampilkan artikel
      while ($row = mysqli_fetch_assoc($result)) {
        $id_artikel = $row['id_artikel'];
        $jdl_artikel = $row['jdl_artikel'];
        $tanggal_artikel = date('d M Y', strtotime($row['tanggal_artikel']));
        $konten_artikel = html_entity_decode($row['konten_artikel']);
        $foto_artikel = $row['foto_artikel'];
        $pembuat_artikel = $row['pembuat_artikel']
          ?>
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="source/images/artikel/<?php echo $foto_artikel; ?>" class="card-img-top"
              alt="<?php echo $jdl_artikel; ?>">
            <div class="card-body">
              <h5 class="card-title">

                <p class="artikel-title">
                  <?php echo $jdl_artikel; ?>
                </p>
              </h5>
              <div class="card-text">
                <span class="artikel-konten mb-3">
                  <?php echo $konten_artikel; ?>
                </span>
              </div>
              <a href="full_artikel.php?id=<?php echo $id_artikel; ?>" class="btn btn-success">Baca Selengkapnya</a>

            </div>
            <div class="card-footer">
              <small class="text-muted">
                <?php echo $tanggal_artikel; ?> | Oleh:
                <?php echo $pembuat_artikel; ?>
              </small>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>

  <!-- Memuat file components/footer.php -->
  <?php include("components/footer.php"); ?>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>