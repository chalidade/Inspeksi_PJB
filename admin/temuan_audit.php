<?php include "header.php"; ?>


    <!-- Start service Area -->
    <section class="service-area section-gap" id="facilities" style="padding-top:40px;">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-12 pb-10 header-text">
            <!-- <p>PT Pembangkitan Jawa Bali Unit Pembangkitan Paiton</p> -->
            <h4 style="margin-top:-10px">TEMUAN</h4>
        <hr>
        <form class="" action="index.php" method="post">
        <div class="row"  style="text-align:left">
          <div class="col-md-12">
            <div class="form-group">
              <label style="width:100%" for="uk">Temuan Unsave Action
                <textarea rows="10" name="uk" id="uk" value="" class="form-control"></textarea>
              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label style="width:100%" for="lokasi"> Temuan Unseve Condition
                <textarea rows="10" name="lokasi" id="lokasi" value="" class="form-control"></textarea>
              </label>
            </div>
          </div>
      </div>
      <div class="row" style="text-align:left">
        <div class="col-md-12">
          <h4>Pekerjaan di Stop</h4><br>
          <div class="form-group">
            <label style="width:100%" for="uk">Tanggal
              <input type="date" class="form-control" name="" value="">
            </label>
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <label style="width:100%" for="uk">Jam
              <input type="time" class="form-control" name="" value="">
            </label>
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <label style="width:100%" for="lokasi"> Alasan
              <textarea rows="10" name="lokasi" id="lokasi" value="" class="form-control"></textarea>
            </label>
          </div>
        </div>
      <div class="col-md-12">
        <button type="submit" class="btn btn-primary" name="button" style="width:100%">Submit</button>
      </div>
    </div>
    </form>
    </section>
    <!-- End service Area -->

<?php include "footer.php"; ?>
