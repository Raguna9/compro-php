<!-- pelajaran -->
<div class="container" id="pelajaran">
    <h2 class="border-bottom pb-2">Materi Pelajaran santri</h2>
</div>


<div class="container marketing py-2">
    <div class="row">
        <?php
        // $no = 0;
        while ($result = mysqli_fetch_array($pelajaran)) {
            // while ($result =  mysqli_query($conn, "SELECT * from pelajaran")) {
            // $no++;
            ?>
            <!-- $result = mysqli_fetch_array($pelajaran); -->

            <div class="col-lg-4 col-md-6">

                <img src="source/images/<?= $result['foto_pelajaran'] ?>" alt="" width="150px" height="150px"
                    class="rounded-circle" />
                <!-- <rect width="100%" height="100%" fill="#777" /> -->
                <!-- <text x="50%" y="50%" fill="#777" dy=".3em"></text> -->

                <h3 class="fw-normal">
                    <?php echo $result['nama_pelajaran']; ?>
                </h3>
                <p>
                    <?php echo $result['penjelasan_pelajaran']; ?>
                <p>



            </div>
        <?php } ?>


    </div>
</div>

<!-- Akhir Pelajaran -->