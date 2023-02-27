<!-- Album -->
<div class="container">
    <h2 class="pb-2 border-bottom">Foto Kegiatan</h2>

</div>

<div class="album py-2" id="galery">
    <div class="container">
        <div class="row row-cols-2 row-cols-sm-3 rows-cols-md-3 g-3">

            <?php
            // $no = 0;
            while ($result = mysqli_fetch_array($foto)) {
                // while ($result =  mysqli_query($conn, "SELECT * from pelajaran")) {
                // $no++;
                ?>

                <div class="col">
                    <div class="card shadow-sm">

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-border-0" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">

                            <img src="source/images<?= $result['foto'] ?>" alt="<?php echo $result['ket_foto']; ?>"
                                width="100%" height="100%" />


                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-center">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="source/images<?= $result['foto'] ?>"
                                            alt="<?php echo $result['ket_foto']; ?>" width="100%" height="100%" />



                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

            <?php } ?>

            <!-- <div class="col">
          <div class="card shadow-sm">
            <img src="source/images/album2.jpg" alt="..." width="100%" height="100%" />
            <rect width="100%" height="100%" fill="#55595c" />
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="source/images/album3.jpg" alt="..." width="100%" height="100%" />
            <rect width="100%" height="100%" fill="#55595c" />
          </div>
        </div> -->
        </div>
    </div>
</div>
<!-- Album Akhir -->