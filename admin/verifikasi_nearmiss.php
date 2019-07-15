<?php include "header.php"; ?>


    <!-- Start service Area -->
    <section class="service-area section-gap" id="facilities" style="padding-top:40px;">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-12 pb-10 header-text">
            <!-- <p>PT Pembangkitan Jawa Bali Unit Pembangkitan Paiton</p> -->
            <h4 style="margin-top:-10px">DETAIL NEARMISS</h4>
          </div>
        </div>
        <hr>
        <!-- <h4 style="text-align:center">Input Data</h4> -->
          <?php
            $idnear     = $_SESSION['idnear'];
            $nearmiss = mysqli_query($connect, "SELECT * FROM `nearmiss` WHERE `id` = '$idnear'");
            while ($data = mysqli_fetch_row($nearmiss)) {
           ?>
           <form class="" action="penanganan.php?kode=<?php echo $idnear; ?>" method="post">
        <div class="row">
          <div class="col-md-12">
            <div class="col-md-12">
              <div class="form-group">
                <label style="width:100%" for="uk">Penanggung Jawab
                  <input type="text" name="tgjawab" disabled value="<?php echo $data[1]; ?>" id="uk" value="" class="form-control">
                </label>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label style="width:100%">Tanggal
                  <input type="date" name="tanggal" disabled value="<?php echo $data[2]; ?>" class="form-control">
                </label>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label style="width:100%">Bidang
                  <input type="text" name="bidang" disabled value="<?php echo $data[3]; ?>" class="form-control">
                </label>
              </div>
            </div>
            <div class="col-md-12">
            <div class="form-group">
              <label style="width:100%" for="uk">Lokasi
                <input type="text" name="lokasi" id="uk" disabled value="<?php echo $data[4]; ?>" class="form-control">
              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label style="width:100%">Unit
                <input type="text" name="unit" disabled value="<?php echo $data[5]; ?>" class="form-control">
              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label style="width:100%">Status
                <input type="text" name="status" disabled value="<?php echo $data[6]; ?>" class="form-control">
              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label style="width:100%">Keterangan
                <textarea rows="8" type="text" disabled name="keterangan" class="form-control"><?php echo $data[7]; ?></textarea>
              </label>
            </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <a href="proses/upload/<?php echo $data[8]; ?>">
            <label style="width:100%" class="form-control">Dokumentasi</label>
            </a>
          </div>
      </div>
      <div class="col-md-12">
        <a href="index.php" class="btn btn-primary" name="button" style="width:100%">Simpan</a>
      </div>
      <div class="col-md-12" style="margin-top:10px">
        <button type="submit" class="btn btn-success" name="button" style="width:100%">Penanganan</button>
      </div>
      </form>
      </div>

      </div>
    </section>
    <!-- End service Area -->

<?php
  }
include "footer.php";
?>
