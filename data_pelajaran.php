<?php
// include 'koneksi.php';
require 'app/functions.php';

$pelajaran = mysqli_query($conn, "SELECT * FROM pelajaran");

// ambil data di URL
// $id = $_GET["id"];

// query data pelajaran
// $mapel = query("SELECT * FROM pelajaran WHERE id_pelajaran =$id")[0];



?>

<!-- cdn bootstrap css -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />


<center class="m-5">
    <h2>Mata Pelajaran</h2>
    <!-- </center> -->
    <a href="app/form_tambahdata.php" class="btn btn-sm btn-info text-light mb-1 " style="float: left;">Tambah data</a>
    <!-- <center> -->
    <table class="table table-bordered table-responsive flex ">
        <thead class="bg-success text-light">

            <tr>
                <th>No</th>
                <th>Nama Pelajaran</th>
                <th>Penjelasan Pelajaran</th>
                <th>Foto Pelajaran</th>
                <th>Action</th>
            </tr>

        </thead>
        <tbody>
            <?php
            $no = 0;
            while ($result = mysqli_fetch_array($pelajaran)) {
                // while ($result =  mysqli_query($conn, "SELECT * from pelajaran")) {
                $no++;
            ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $result['nama_pelajaran']; ?></td>
                    <td><?php echo $result['penjelasan_pelajaran']; ?></td>
                    <td>
                        <img src="source/images/<?= $result['foto_pelajaran'] ?>" alt="" width="150px">
                    </td>
                    <td>
                        <a href="app/ubah.php?id=<?php echo $result['id_pelajaran']; ?>" class="btn btn-sm btn-warning">Edit</a>
                        <a href="app/hapus.php?id=<?php echo $result['id_pelajaran']; ?>" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                </tr>
            <?php }        ?>
        </tbody>

    </table>
</center>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>