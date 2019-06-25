<?php include "header.php"; ?>


    <!-- Start service Area -->
    <section class="service-area section-gap" id="facilities" style="padding-top:40px;">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-12 pb-10 header-text">
            <!-- <p>PT Pembangkitan Jawa Bali Unit Pembangkitan Paiton</p> -->
            <h4 style="margin-top:-10px">NEARMISS</h4>
          </div>
        </div>
        <hr>
        <!-- <h4 style="text-align:center">Input Data</h4> -->
        <hr>
        <form class="" action="proses/nearmiss.php?page=2" method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label style="width:100%" for="uk">Lokasi
                <input type="text" name="lokasi" id="uk" value="" class="form-control">
              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label style="width:100%">Unit
                <input type="text" name="unit" value="" class="form-control">
              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label style="width:100%">Status
                <input type="text" name="status" value="" class="form-control">
              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label style="width:100%">Keterangan
                <textarea rows="8" type="text" name="keterangan" value="" class="form-control"></textarea>
              </label>
            </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <label style="width:100%" class="form-control">Dokumentasi
              <input type="file" name="fileToUpload" value="" style="display:none">
            </label>
          </div>
      </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-primary" name="button" style="width:100%">Simpan</button>
          </div>
        </form>
        </div>

      </div>
    </section>
    <!-- End service Area -->

<?php include "footer.php"; ?>
