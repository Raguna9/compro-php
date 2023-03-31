<?php
// artikel
function tambahArtikel($data)
{
    global $conn;

    $jdl_artikel = htmlspecialchars($data["jdl_artikel"]);
    $konten_artikel = htmlspecialchars($data["konten_artikel"]);
    // upload gambar/foto
    $foto_artikel = uploadArtikel();
    if (!$foto_artikel) {
        return false;
    }
    $pembuat_artikel = htmlspecialchars($data["pembuat_artikel"]);
    date_default_timezone_set('Asia/Makassar');
    $tanggal_artikel = date("Y-m-d H:i:s"); // Tanggal otomatis saat artikel ditambahkan

    // query insert data
    $query = "INSERT INTO artikel VALUES ('','$jdl_artikel','$konten_artikel','$foto_artikel','$pembuat_artikel','$tanggal_artikel')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function uploadArtikel()
{

    $namaFile = $_FILES['foto_artikel']['name'];
    $ukuranFile = $_FILES['foto_artikel']['size'];
    $error = $_FILES['foto_artikel']['error'];
    $tmpName = $_FILES['foto_artikel']['tmp_name'];

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


    move_uploaded_file($tmpName, '../../source/images/artikel/' . $namaFileBaru);
    return $namaFileBaru;
}

// fungsi hapus data artikel
function hapusArtikel($id)
{
    global $conn;
    $query = mysqli_query($conn, "SELECT * FROM artikel WHERE id_artikel = $id");
    $data = mysqli_fetch_assoc($query);
    $filename = $data['foto_artikel'];
    $path = '../source/images/artikel/' . $filename; // sesuaikan dengan path direktori penyimpanan foto di lokal
    if (file_exists($path)) {
        unlink($path);
    }
    mysqli_query($conn, "DELETE FROM artikel WHERE id_artikel = $id");

    return mysqli_affected_rows($conn);
}


// fungsi ubah data artikel
function ubahArtikel($data)
{
    global $conn;

    $id_artikel = $data["id_artikel"];
    $jdl_artikel = htmlspecialchars($data["jdl_artikel"]);
    $konten_artikel = htmlspecialchars($data["konten_artikel"]);

    $gambarLama = htmlspecialchars($data["gambarLama"]);
    $pembuat_artikel = htmlspecialchars($data["pembuat_artikel"]);

    // cek apakah user memilih gambar baru atau tidak
    if ($_FILES['foto_artikel']['error'] === 4) {
        $foto_artikel = $gambarLama;
    } else {
        $foto_artikel = uploadArtikel();
    }

    // tambahkan tanggal artikel
    $tanggal_artikel = date("Y-m-d H:i:s");

    // query update data
    $query = "UPDATE artikel SET
            jdl_artikel = '$jdl_artikel',
            konten_artikel = '$konten_artikel',
            foto_artikel = '$foto_artikel',
            tanggal_artikel = '$tanggal_artikel',
            pembuat_artikel = '$pembuat_artikel'
            WHERE id_artikel = $id_artikel";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>