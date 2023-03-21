<?php

// koneksi database
$conn = mysqli_connect("localhost", "root", "", "darul_atqia");

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
    // cek apakah data berhasil atau gagal
    if (tambahBalasan($_POST) > 0) {
        echo "
        <script>
            alert('pesan terkirim');
            document.location.reload();
        </script>
        ";
    } else {
        echo "
        <script>
            alert('pesan tidak terkirim');
            document.location.reload();
        </script>
        ";
    }
}

?>
    <div class="card mt-5">
        <div class="card-header bg-success text-white">
            <strong>Kirimkan balasan mengenai artikel ini</strong>
        </div>
        <div class="card-body">
            <form method="POST" action="" enctype="multipart/form-data">
                <input type="hidden" name="id_artikel" value="<?php echo $_GET['id']; ?>">
                <div class="mb-3">
                    <label for="nama_balasan" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama_balasan" name="nama_balasan" required>
                </div>
                <div class="mb-3">
                    <label for="email_balasan" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email_balasan" name="email_balasan" required>
                </div>
                <div class="mb-3">
                    <label for="isi_balasan" class="form-label">Balasan</label>
                    <textarea class="form-control" id="isi_balasan" name="isi_balasan" rows="3" required></textarea>
                </div>
                <button class="btn btn-success" type="submit" name="submit">Kirim</button>
            </form>
        </div>
</div>