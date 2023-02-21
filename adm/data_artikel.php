<?php
// include 'koneksi.php';
require '../app/functions.php';

$artikel = mysqli_query($conn, "SELECT * FROM artikel");
?>

<!-- cdn bootstrap css -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />


<center class="m-5">
    <h2>Artikel</h2>
    <!-- </center> -->
    <a href="../app/artikel/form_tambahdata.php" class="btn btn-sm btn-info text-light mb-1 "
        style="float: left;">Tambah
        data</a>
    <!-- <center> -->
    <table class="table table-bordered table-responsive flex ">
        <thead class="bg-success text-light">

            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Konten</th>
                <th>Foto Artikel</th>
                <th>Pembuat</th>
                <th>Action</th>
            </tr>

        </thead>
        <tbody>
            <?php
            $no = 0;
            while ($result = mysqli_fetch_array($artikel)) {
                // while ($result =  mysqli_query($conn, "SELECT * from artikel")) {
                $no++;
                ?>
                <tr>
                    <td>
                        <?php echo $no; ?>
                    </td>
                    <td>
                        <?php echo $result['jdl_artikel']; ?>
                    </td>
                    <td>
                        <?php echo $result['konten_artikel']; ?>
                    </td>
                    <td>
                        <img src="../source/images/artikel/<?= $result['foto_artikel'] ?>" alt="" width="150px">
                    </td>
                    <td>
                        <?php echo $result['pembuat_artikel']; ?>
                    </td>
                    <td>
                        <a href="../app/artikel/ubah.php?id=<?php echo $result['id_artikel']; ?>"
                            class="btn btn-sm btn-warning">Edit</a>
                        <a href="../app/artikel/hapus.php?id=<?php echo $result['id_artikel']; ?>"
                            class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>

    </table>
</center>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>