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
        <h4 style="text-align:center">Menu Nearmiss</h4>
        <hr>
        <form class="" action="proses/nearmiss.php?page=1" method="post">
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label style="width:100%" for="uk">Penanggung Jawab
                <input type="text" name="tgjawab" id="uk" value="" class="form-control">
              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label style="width:100%">Tanggal
                <input type="date" name="tanggal" value="" class="form-control">
              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label style="width:100%">Bidang
                <input type="text" name="bidang" value="" class="form-control">
              </label>
            </div>
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-primary" name="button" style="width:100%">Next</button>
          </div>
        </div>
      </form>

      </div>
    </section>
    <!-- End service Area -->

<?php include "footer.php"; ?>
