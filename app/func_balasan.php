<?php

// Balasan

// Tambah Data Balasan
function tambahBalasan($data)
{
    global $conn;

    $nama_balasan = htmlspecialchars($data["nama_balasan"]);
    $email_balasan = htmlspecialchars($data["email_balasan"]);
    $isi_balasan = htmlspecialchars($data["isi_balasan"]);
    $id_artikel = htmlspecialchars($data["id_artikel"]);
    $tanggal_balasan = date("Y-m-d H:i:s"); 

    // query insert data
    $query = "INSERT INTO balasan VALUES ('','$nama_balasan','$email_balasan','$isi_balasan','$id_artikel','$tanggal_balasan')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

//Hapus Data balasan
function hapusBalasan($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM balasan WHERE id_balasan = $id");

    return mysqli_affected_rows($conn);
}