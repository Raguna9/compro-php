<?php
// include 'koneksi.php';
require '../app/functions.php';

$balasan = mysqli_query($conn, "SELECT balasan.*, artikel.jdl_artikel FROM balasan JOIN artikel ON balasan.id_artikel = artikel.id_artikel");
?>

<!-- cdn bootstrap css -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />


<center class="">
    <div class="container-lg">

        <h2>Daftar Balasan Artikel</h2>
        <table class="table table-bordered  flex-sm ">
            <thead class="bg-success text-light">
                <tr>
                    <th class="col pr-4">No</th>
                    <th class="col-sm-3">Judul Artikel</th>
                    <th class="col-sm-1 pr-6 mr-6">Nama Pengirim</th>
                    <th class="col-sm-1 pr-6 mr-6">Email Pengirim</th>
                    <th class="col-sm-3">Isi Balasan</th>
                    <th class="col-sm-2">Tanggal Balasan</th>
                    <th class="col-sm-2">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 0;
                while ($result = mysqli_fetch_array($balasan)) {
                    // while ($result =  mysqli_query($conn, "SELECT * from pelajaran")) {
                    $no++;
                ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $result['jdl_artikel']; ?></td>
                        <td><?php echo $result['nama_balasan']; ?></td>
                        <td><?php echo $result['email_balasan']; ?></td>
                        <td><?php echo $result['isi_balasan']; ?></td>
                        <td><?php echo $result['tanggal_balasan']; ?></td>
                        <td>
                            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=<?php echo $result['email_balasan'];  ?>&su=Re: <?php echo $result['isi_balasan']; ?>&body=Berdasarkan%20balasan%20anda%20'<?php echo $result['isi_balasan']; ?>',%20pada%20artikel%20di%20website%20kami%20yang%20berjudul%20'<?php echo $result['jdl_artikel']; ?>'" class="btn btn-sm btn-primary" target="_blank" rel="noreferrer">Balas</a>
                            <a href="../app/balasan/hapus.php?id=<?php echo $result['id_balasan']; ?>" class="btn btn-sm btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php }        ?>
            </tbody>

        </table>
    </div>
</center>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>