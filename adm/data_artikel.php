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
                <th class="col-sm-1">No</th>
                <th class="col-sm-2">Judul</th>
                <th class="col-sm-4">Konten</th>
                <th class="col-sm-2">Foto Artikel</th>
                <th class="col-sm-1">Pembuat</th>
                <th class="col-sm-1">Tanggal</th>
                <th class="col-sm-1">Action</th>
            </tr>

        </thead>
        <tbody>
            <?php
            $no = 0;
            while ($result = mysqli_fetch_array($artikel)) {
                $no++;
                ?>
                <tr>
                    <td>
                        <?php echo $no; ?>
                    </td>
                    <td>
                        <span class="text-artikel">
                            <?php echo $result['jdl_artikel']; ?>
                        </span>
                    </td>
                    <td class="text-artikel">
                        <?php echo html_entity_decode(htmlspecialchars_decode($result['konten_artikel'])); ?>
                    </td>
                    <td>
                        <img src="../source/images/artikel/<?= $result['foto_artikel'] ?>" alt="" width="150px">
                    </td>
                    <td>
                        <?php echo $result['pembuat_artikel']; ?>
                    </td>
                    <td>
                        <?php echo $result['tanggal_artikel']; ?>
                    </td>
                    <td class="text-center">
                        <a href="../app/artikel/ubah.php?id=<?php echo $result['id_artikel']; ?>"
                            class="btn btn-sm btn-warning">Edit</a>
                        <a href="../app/artikel/hapus.php?id=<?php echo $result['id_artikel']; ?>"
                            class="btn btn-sm btn-danger mt-2">Hapus</a>
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