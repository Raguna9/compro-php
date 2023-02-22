<?php

// Fasilitas

// Tambah Data Fasilitas
function tambahFasilitas($data)
{
    global $conn;

    $nama_fasilitas = htmlspecialchars($data["nama_fasilitas"]);

    // query insert data
    $query = "INSERT INTO fasilitas VALUES ('','$nama_fasilitas')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

//Hapus Data Fasilitas
function hapusFasilitas($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM fasilitas WHERE id_fasilitas = $id");

    return mysqli_affected_rows($conn);
}

// Ubah Data Fasilitas
function ubahFasilitas($data)
{
    global $conn;

    $id_fasilitas = $data["id_fasilitas"];
    $nama_fasilitas = htmlspecialchars($data["nama_fasilitas"]);

    // query update data
    $query = "UPDATE fasilitas SET
                nama_fasilitas = '$nama_fasilitas'
                WHERE id_fasilitas = $id_fasilitas";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>