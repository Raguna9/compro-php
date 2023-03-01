<?php include($_SERVER['DOCUMENT_ROOT'] . '/PKL/app/functions.php'); ?>
<?php

// koneksi database
$conn = mysqli_connect("localhost", "root", "", "darul_atqia");

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
    // cek apakah data berhasil atau gagal
    if (tambahPesan($_POST) > 0) {
        echo "
        <script>
            alert('pesan terkirim');
            document.location.href = 'kontak.php'
        </script>
        ";
    } else {
        echo "
        <script>
            alert('pesan tidak terkirim');
            document.location.href = 'kontak.php'
        </script>
        ";
    }
}

?>
<div class="card mx-5 mt-5">
    <div class="card-header bg-primary text-white">
        <strong>Hubungi Kami</strong>
    </div>
    <div class="card-body">
        <form method="POST" action="" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nama_pesan" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama_pesan" name="nama_pesan" required>
            </div>
            <div class="mb-3">
                <label for="email_pesan" class="form-label">Email</label>
                <input type="email" class="form-control" id="email_pesan" name="email_pesan" required>
            </div>
            <div class="mb-3">
                <label for="isi_pesan" class="form-label">Pesan</label>
                <textarea class="form-control" id="isi_pesan" name="isi_pesan" rows="3" required></textarea>
            </div>
            <button class="btn btn-primary" type="submit" name="submit">Kirim</button>
        </form>
    </div>
</div>