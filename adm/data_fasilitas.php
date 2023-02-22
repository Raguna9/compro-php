<?php
// include 'koneksi.php';
require '../app/functions.php';

$fasilitas = mysqli_query($conn, "SELECT * FROM fasilitas");
?>
<center class="m-1">
    <div class="container-lg">

        <h2>Fasilitas Ponpes Darul Atqia</h2>
        <!-- </center> -->
        <a href="../app/fasilitas/form_tambahdata.php" class="btn btn-sm btn-info text-light mb-1 " style="float: left;">Tambah Fasilitas</a>
        <!-- <center> -->
        <table class="table table-bordered table-responsive ">
            <thead class="bg-success text-light">

                <tr>
                    <th class="col-1">No</th>
                    <th class="col-2">Nama Pelajaran</th>
                    <th class="col-1">Action</th>
                </tr>

            </thead>
            <tbody>
                <?php
                $no = 0;
                while ($result = mysqli_fetch_array($fasilitas)) {
                    // while ($result =  mysqli_query($conn, "SELECT * from pelajaran")) {
                    $no++;
                ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $result['nama_fasilitas']; ?></td>
                        <td>
                            <a href="../app/fasilitas/ubah.php?id=<?php echo $result['id_fasilitas']; ?>" class="btn btn-sm btn-warning">Edit</a>
                            <a href="../app/fasilitas/hapus.php?id=<?php echo $result['id_fasilitas']; ?>" class="btn btn-sm btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php }        ?>
            </tbody>

        </table>
    </div>
</center>