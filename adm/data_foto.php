<?php
// include 'koneksi.php';
require '../app/functions.php';

$foto = mysqli_query($conn, "SELECT * FROM foto");

// ambil data di URL
// $id = $_GET["id"];

// query data pelajaran
// $mapel = query("SELECT * FROM pelajaran WHERE id_pelajaran =$id")[0];



?>

<!-- cdn bootstrap css -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />


<center class="">
    <div class="container-lg">

        <h2>Foto</h2>
        <!-- </center> -->
        <a href="../app/foto/form_tambahdata.php" class="btn btn-sm btn-info text-light mb-1 " style="float: left;">Tambah data</a>
        <!-- <center> -->
        <table class="table table-bordered  flex-sm ">
            <thead class="bg-success text-light">

                <tr>
                    <th class="col-sm-1">No</th>
                    <th class="col-sm-2">Keterangan Foto</th>
                    <th class="col-sm-3">Foto</th>
                    <th class="col-sm-2">Action</th>
                </tr>

            </thead>
            <tbody>
                <?php
                $no = 0;
                while ($result = mysqli_fetch_array($foto)) {
                    // while ($result =  mysqli_query($conn, "SELECT * from pelajaran")) {
                    $no++;
                ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $result['ket_foto']; ?></td>

                        <td class="text-center">
                            <img src="../source/images/foto/<?= $result['foto'] ?>" alt="" width="150px">
                        </td>
                        <td>
                            <a href="../app/foto/ubah.php?id=<?php echo $result['id_foto']; ?>" class="btn btn-sm btn-warning">Edit</a>
                            <a href="../app/foto/hapus.php?id=<?php echo $result['id_foto']; ?>" class="btn btn-sm btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php }        ?>
            </tbody>

        </table>
    </div>
</center>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>