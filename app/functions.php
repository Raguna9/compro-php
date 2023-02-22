<?php include 'func_artikel.php'?>
<?php include 'func_pelajaran.php'?>
<?php include 'func_fasilitas.php'?>
<?php include 'func_foto.php'?>
<?php include 'func_admin.php'?>

<?php

// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "darul_atqia");


function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}