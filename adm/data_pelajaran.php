<?php
// include 'koneksi.php';
require '../app/functions.php';

$pelajaran = mysqli_query($conn, "SELECT * FROM pelajaran");

// ambil data di URL
// $id = $_GET["id"];

// query data pelajaran
// $mapel = query("SELECT * FROM pelajaran WHERE id_pelajaran =$id")[0];



?>

<!-- cdn bootstrap css -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />


<center class="">
    <div class="container-lg">

        <h2>Mata Pelajaran</h2>
        <!-- </center> -->
        <a href="../app/pelajaran/form_tambahdata.php" class="btn btn-sm btn-info text-light mb-1 " style="float: left;">Tambah data</a>
        <!-- <center> -->
        <table class="table table-bordered  flex-sm ">
            <thead class="bg-success text-light">

                <tr>
                    <th class="col-sm-1">No</th>
                    <th class="col-sm-2">Nama Pelajaran</th>
                    <th class="col-sm-4">Penjelasan Pelajaran</th>
                    <th class="col-sm-3">Foto Pelajaran</th>
                    <th class="col-sm-2">Action</th>
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
                        <td class="text-center">
                            <img src="../source/images/pelajaran/<?= $result['foto_pelajaran'] ?>" alt="" width="150px">
                        </td>
                        <td>
                            <a href="../app/pelajaran/ubah.php?id=<?php echo $result['id_pelajaran']; ?>" class="btn btn-sm btn-warning">Edit</a>
                            <a href="../app/pelajaran/hapus.php?id=<?php echo $result['id_pelajaran']; ?>" class="btn btn-sm btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php }        ?>
            </tbody>

        </table>
    </div>
</center>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>