<?php include "header.php"; ?>


    <!-- Start service Area -->
    <section class="service-area section-gap" id="facilities" style="padding-top:40px;">
      <div class="container">
        <form class="" action="temuan.php" method="post">
        <div class="row d-flex justify-content-center">
          <div class="col-md-12 pb-10 header-text">
            <h4 style="margin-top:-10px">NEARMISS</h4>
            <p>DATA NEARMISS </p>
          </div>
        </div>
        <hr>
        <div class="row" style="background:#242424;padding:10px;color:#fff;margin-left:1px;margin-right:1px;">
          <div class="col-2">
            No
          </div>
          <div class="col-6">
            Penanggung Jawab
          </div>
          <div class="col-4">
            Tanggal
          </div>
        </div>
        <?php
          $no   = 1;
          $data = mysqli_query($connect, "SELECT * FROM `nearmiss` ORDER BY `nearmiss`.`tanggal` DESC ");
          while ($row=mysqli_fetch_row($data))
            {
            $cek = mysqli_query($connect, "SELECT * FROM `penanganan` WHERE `id_nearmiss` = '$row[0]'");
            if(mysqli_num_rows($cek) == 0){
              echo "<div class='row' style='font-size:12px;border:solid thin #d4d4d4;background:#ff00007d;color:#000;margin-left:1px;margin-right:1px;'>";
            } else {
              echo "<div class='row' style='font-size:12px;border:solid thin #d4d4d4;background:#35ff009c;color:#000;margin-left:1px;margin-right:1px;'>";
            }
         ?>
          <div class="col-2" style="text-align:center">
            <?php echo $no;$no++; ?>
          </div>
          <div class="col-6">
            <font style="padding-left:10px;" data-toggle="modal" data-target="#nama<?php echo $row[0]; ?>"><?php echo $row[1]; ?></font>
            <!-- Modal -->
            <div class="modal fade" id="nama<?php echo $row[0]; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Data Nearmiss</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <table width="100%">
                      <tr>
                        <td width="30%">Kode Audit</td>
                        <td>: <?php echo $row[0]; ?></td>
                      </tr>
                      <tr>
                        <td>Penanggung Jawab</td>
                        <td>: <?php echo $row[1]; ?></td>
                      </tr>
                      <tr>
                        <td>Tanggal</td>
                        <td>: <?php echo $row[2]; ?></td>
                      </tr>
                      <tr>
                        <td>Bidang</td>
                        <td>: <?php echo $row[3]; ?></td>
                      </tr>
                      <tr>
                        <td>Lokasi</td>
                        <td>: <?php echo $row[4]; ?></td>
                      </tr>
                      <tr>
                        <td>Unit</td>
                        <td>: <?php echo $row[5]; ?></td>
                      </tr>
                      <tr>
                        <td>Status</td>
                        <td>: <?php echo $row[6]; ?></td>
                      </tr>
                      <tr>
                        <td style="vertical-align:top;">Keterangan</td>
                        <td>: <?php echo $row[7]; ?></td>
                      </tr>
                      <tr>
                        <td>Dokumentasi</td>
                        <td>: <a href="proses/upload/<?php echo $row[8]; ?>">View</a></td>
                      </tr>
                      <tr>
                        <td>Status</td>
                        <td>:
                          <?php
                          $cek = mysqli_query($connect, "SELECT * FROM `penanganan` WHERE `id_nearmiss` = '$row[0]'");
                          if(mysqli_num_rows($cek) == 0){
                            echo "<a href='penanganan.php?kode=$row[0]' style='color:red'>Belum Ditangani</a>";
                          } else {
                            echo "Sudah Ditangani";
                          }
                           ?>
                        </td>
                      </tr>
                      <tr>
                        <td>Option</td>
                        <td>: <a href="proses/nearmiss.php?id=delete&kode=<?php echo $row[0]; ?>"> Hapus </a></td>
                      </tr>
                    </table>
                    <hr>
                    <table width="100%">
                      <tr>
                        <td colspan="2"><h5>Penanganan</h5></td>
                      </tr>
                      <?php
                      $cek = mysqli_query($connect, "SELECT * FROM `penanganan` WHERE `id_nearmiss` = '$row[0]'");
                      if(mysqli_num_rows($cek) == 0) {
                        echo "<tr><td colspan='2'>Belum ditangani</td></tr>";
                      } else {
                        while ($dat = mysqli_fetch_row($cek)) {
                       ?>
                      <tr>
                        <td style="vertical-align:top;width:30%">Keterangan</td>
                        <td>: <?php echo $dat[2]; ?></td>
                      </tr>
                      <tr>
                        <td>Dokumentasi</td>
                        <td>: <a href="proses/upload/<?php echo $dat[1]; ?>">View</a></td>
                      </tr>
                    <?php }} ?>
                    </table>
                  </div>
                  <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-4">
            <?php echo date('d/m/Y'); ?>
          </div>
        </div>
      </form>
      <?php } ?>
      <div class="row" style="margin-top:20px;">
        <div class="col-md-12">
          <a href="menu-laporan.php" type="button" style="width:100%;margin-top:10px;" name="button" class="btn btn-danger"> Kembali </a>
        </div>
      </div>
      </div>
    </section>
    <!-- End service Area -->

<?php include "footer.php"; ?>
