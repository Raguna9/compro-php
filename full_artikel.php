<?php
require 'app/functions.php';
?>
<?php
if (!isset($_GET['id'])) {
    header("Location: artikel.php");
    exit;
}
?>
<?php
$id_artikel = $_GET['id'];
$query = "SELECT * FROM artikel WHERE id_artikel = $id_artikel";
$result = mysqli_query($conn, $query);

// periksa apakah artikel ditemukan
if (mysqli_num_rows($result) == 0) {
    header("Location: index.php");
    exit;
}

$row = mysqli_fetch_assoc($result);
$jdl_artikel = $row['jdl_artikel'];
$konten_artikel = $row['konten_artikel'];
$foto_artikel = $row['foto_artikel'];
$pembuat_artikel = $row['pembuat_artikel'];
$tanggal_artikel = $row['tanggal_artikel'];
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
        -webkit-line-clamp: 2;
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
        <div class="card">
            <img src="source/images/artikel/<?php echo $foto_artikel; ?>" class="card-img-top"
                alt="<?php echo $jdl_artikel; ?>">
            <div class="card-body">
                <h5 class="card-title">
                    <?php echo $jdl_artikel; ?>
                </h5>
                <p class="text-muted">
                    <?php echo $tanggal_artikel; ?> <span>| Oleh:
                        <?php echo $pembuat_artikel; ?>
                    </span>
                </p>
                <p class="card-text">
                    <?php echo $konten_artikel; ?>
                </p>
            </div>
        </div>

    </div>
    <!-- Memuat file kirim_balasan.php -->
    <?php include("app/balasan/kirim_balasan.php"); ?>

    <!-- Memuat file components/footer.php -->
    <?php include("components/footer.php"); ?>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>