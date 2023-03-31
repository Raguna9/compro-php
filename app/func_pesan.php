<?php

// pesan

// Tambah Data Pesan
function tambahPesan($data)
{
    global $conn;

    $nama_pesan = htmlspecialchars($data["nama_pesan"]);
    $email_pesan = htmlspecialchars($data["email_pesan"]);
    $isi_pesan = htmlspecialchars($data["isi_pesan"]);
    date_default_timezone_set('Asia/Makassar');
    $tanggal_pesan = date("Y-m-d H:i:s"); 

    // query insert data
    $query = "INSERT INTO pesan VALUES ('','$nama_pesan','$email_pesan','$isi_pesan','$tanggal_pesan')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

//Hapus Data Pesan
function hapusPesan($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM pesan WHERE id_pesan = $id");

    return mysqli_affected_rows($conn);
}