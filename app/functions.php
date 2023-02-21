<?php include 'func_artikel.php'?>
<?php include 'func_pelajaran.php'?>

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

//bagian mata pelajaran

//query data mata pelajaran
//$mapel = query("SELECT * FROM pelajaran WHERE id_pelajaran =$id")[0];



// Fasilitas

// Tambah Data Fasilitas
function tambahFasilitas($data)
{
    global $conn;

    $nama_fasilitas = htmlspecialchars($data["nama_fasilitas"]);
    // $penjelasan_pelajaran = htmlspecialchars($data["penjelasan_pelajaran"]);

    // $foto_pelajaran = htmlspecialchars($data["foto_pelajaran"]);

    // upload gambar/foto
    // $foto_pelajaran = upload();
    // if (!$foto_pelajaran) {
    //     return false;
    // }

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
    // $penjelasan_pelajaran = htmlspecialchars($data["penjelasan_pelajaran"]);

    // $gambarLama = htmlspecialchars($data["gambarLama"]);

    //cek apakah user memilih gambar baru atau tidak
    // if ($_FILES['foto_pelajaran']['error'] === 4) {
    //     $foto_pelajaran = $gambarLama;
    // } else {

    //     $foto_pelajaran = upload();
    // }

    // query update data
    $query = "UPDATE fasilitas SET
                nama_fasilitas = '$nama_fasilitas'
                WHERE id_fasilitas = $id_fasilitas";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// Album

// fungsi tambah data pelajaran
function tambahFoto($data)
{
    global $conn;

    $ket_foto = htmlspecialchars($data["ket_foto"]);
    // $penjelasan_pelajaran = htmlspecialchars($data["penjelasan_pelajaran"]);

    // $foto_pelajaran = htmlspecialchars($data["foto_pelajaran"]);

    // upload gambar/foto
    $foto = uploadFoto();
    if (!$foto) {
        return false;
    }

    // query insert data
    $query = "INSERT INTO foto VALUES ('','$ket_foto','$foto')";

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
                foto = '$foto'
                WHERE id_foto = $id_foto";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

//Admin

// Ubah Data Admin
function ubahAdmin($data)
{
    global $conn;

    $id_admin = $data["id_admin"];
    $username = htmlspecialchars($data["username"]);
    $password = htmlspecialchars($data["password"]);
    // $penjelasan_pelajaran = htmlspecialchars($data["penjelasan_pelajaran"]);

    // $gambarLama = htmlspecialchars($data["gambarLama"]);

    //cek apakah user memilih gambar baru atau tidak
    // if ($_FILES['foto_pelajaran']['error'] === 4) {
    //     $foto_pelajaran = $gambarLama;
    // } else {

    //     $foto_pelajaran = upload();
    // }

    // query update data
    $query = "UPDATE admin SET
                username = '$username',
                password = '$password'
                WHERE id_admin = $id_admin";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
