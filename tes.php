<div class="container">
        <div class="row row-cols-2 row-cols-sm-3 rows-cols-md-3 g-3">


          <?php
          $i = 1;

          while ($result = mysqli_fetch_array($foto)) {
            ?>
            <div class="col">
              <div class="card shadow-sm">
                <!-- Button trigger modal -->

                <button type="button" class="btn btn-border-0" data-bs-toggle="modal"
                  data-bs-target="#exampleModal<?= $i ?>" style="height: 300px;">
                  <img src="source/images/foto/<?= $result['foto'] ?>" alt="<?php echo $result['ket_foto']; ?>"
                    style="width: 100%; height: 100%; object-fit: cover;" />
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal<?= $i ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog modal-dialog-center">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">
                          <?php echo $result['ket_foto']; ?>
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <img src="source/images/foto/<?= $result['foto'] ?>" alt="<?php echo $result['ket_foto']; ?>"
                          width="100%" height="100%" />
                      </div>
                      <div class="modal-footer">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php
          }
          ?>
        </div>
      </div>