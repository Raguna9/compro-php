<?php

// Album

// fungsi tambah data pelajaran
function tambahFoto($data)
{
    global $conn;

    $ket_foto = htmlspecialchars($data["ket_foto"]);
    $kategori_foto = htmlspecialchars($data["kategori_foto"]);

    // upload gambar/foto
    $foto = uploadFoto();
    if (!$foto) {
        return false;
    }

    // query insert data
    $query = "INSERT INTO foto VALUES ('','$ket_foto','$kategori_foto','$foto')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function uploadFoto()
{

    $namaFile = $_FILES['foto']['name'];
    $ukuranFile = $_FILES['foto']['size'];
    $error = $_FILES['foto']['error'];
    $tmpName = $_FILES['foto']['tmp_name'];

    //cek apakah tidak ada gambar yang diupload
    if ($error === 4) {
        echo "
            <script>
                alert('Pilih gambar terlebih dahulu');
            </script>
        ";
        return false;
    }

    //cek apakah yang diupload berupa gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "
        <script>
            alert('Silahkan upload file gambar');
        </script>
    ";
        return false;
    }

    //cek apakah gambar terlalu besar
    if ($ukuranFile > 1000000) {
        echo "
        <script>
            alert('Ukuran gambar tidak boleh lebih dari 1 MB');
        </script>
    ";
        return false;
    }

    //lolos pengecekan, upload gambar
    //generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;


    move_uploaded_file($tmpName, '../../source/images/foto/' . $namaFileBaru);
    return $namaFileBaru;
}



// fungsi hapus data pelajaran
function hapusFoto($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM foto WHERE id_foto = $id");

    return mysqli_affected_rows($conn);
}

// fungsi ubah data pelajaran
function ubahFoto($data)
{
    global $conn;

    $id_foto = $data["id_foto"];
    $ket_foto = htmlspecialchars($data["ket_foto"]);
    $kategori_foto = htmlspecialchars($data["kategori_foto"]);
    // $penjelasan_pelajaran = htmlspecialchars($data["penjelasan_pelajaran"]);

    $gambarLama = htmlspecialchars($data["gambarLama"]);

    //cek apakah user memilih gambar baru atau tidak
    if ($_FILES['foto']['error'] === 4) {
        $foto = $gambarLama;
    } else {

        $foto = uploadFoto();
    }

    // query update data
    $query = "UPDATE foto SET
                ket_foto = '$ket_foto',
                kategori_foto = '$kategori_foto',
                foto = '$foto'
                WHERE id_foto = $id_foto";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>