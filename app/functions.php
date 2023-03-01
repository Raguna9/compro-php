<?php include 'func_artikel.php' ?>
<?php include 'func_pelajaran.php' ?>
<?php include 'func_fasilitas.php' ?>
<?php include 'func_foto.php' ?>
<?php include 'func_admin.php' ?>
<?php include 'func_pesan.php' ?>
<?php include 'func_balasan.php' ?>

<?php

// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "darul_atqia");

if (!function_exists('query')) {
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
}