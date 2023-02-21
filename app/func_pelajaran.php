
<?php
// fungsi tambah data pelajaran
function tambah($data)
{
    global $conn;

    $nama_pelajaran = htmlspecialchars($data["nama_pelajaran"]);
    $penjelasan_pelajaran = htmlspecialchars($data["penjelasan_pelajaran"]);

    // $foto_pelajaran = htmlspecialchars($data["foto_pelajaran"]);

    // upload gambar/foto
    $foto_pelajaran = upload();
    if (!$foto_pelajaran) {
        return false;
    }

    // query insert data
    $query = "INSERT INTO pelajaran VALUES ('','$nama_pelajaran','$penjelasan_pelajaran','$foto_pelajaran')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload()
{

    $namaFile = $_FILES['foto_pelajaran']['name'];
    $ukuranFile = $_FILES['foto_pelajaran']['size'];
    $error = $_FILES['foto_pelajaran']['error'];
    $tmpName = $_FILES['foto_pelajaran']['tmp_name'];

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


    move_uploaded_file($tmpName, '../../source/images/pelajaran/' . $namaFileBaru);
    return $namaFileBaru;
}

// fungsi hapus data pelajaran
function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM pelajaran WHERE id_pelajaran = $id");

    return mysqli_affected_rows($conn);
}

// fungsi ubah data pelajaran
function ubah($data)
{
    global $conn;

    $id_pelajaran = $data["id_pelajaran"];
    $nama_pelajaran = htmlspecialchars($data["nama_pelajaran"]);
    $penjelasan_pelajaran = htmlspecialchars($data["penjelasan_pelajaran"]);

    $gambarLama = htmlspecialchars($data["gambarLama"]);

    //cek apakah user memilih gambar baru atau tidak
    if ($_FILES['foto_pelajaran']['error'] === 4) {
        $foto_pelajaran = $gambarLama;
    } else {

        $foto_pelajaran = upload();
    }

    // query update data
    $query = "UPDATE pelajaran SET
                nama_pelajaran = '$nama_pelajaran',
                penjelasan_pelajaran = '$penjelasan_pelajaran',
                foto_pelajaran = '$foto_pelajaran'
                WHERE id_pelajaran = $id_pelajaran";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>