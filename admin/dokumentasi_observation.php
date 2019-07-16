<?php include "header.php" ?>

  <!-- Start service Area -->
  <section class="service-area section-gap" id="facilities" style="padding-top:40px;">
    <div class="container">
      <hr>
      <form class="" action="proses/observation.php?page=5" method="post"  enctype="multipart/form-data">
        <h4 style="text-align:center">Dokumentasi</h4>
        <hr>
        <div class="row">
          <div class="col-md-12">
            <center>
            <label style="width:100%">Rekomendasi Tambahan
              <textarea required name="rekom" value="" class="form-control" style="height:200px"></textarea>
            </label>
          </center>
          </div>
          <div class="col-md-12">
            <center>
            <label style="width:100%">Deadline
              <input required type="date" name="batas" value="" class="form-control">
            </label>
          </center>
          </div>
          <div class="col-md-12">
            <center>
            <label for="dokumentasi" style="width:100%">
              <input required style="width:100%" type="file" name="file" value="" class="form-control">
            </label>
          </center>
          </div>
          <div class="col-md-12" style="margin-top:20px;">
            <button type="submit" class="btn btn-primary" name="button" style="width:100%">Simpan</button>
          </div>
        </form>
      </div>
  </section>
  <!-- End service Area -->
  <?php include "footer.php"; ?>
