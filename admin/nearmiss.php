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
              <label style="width:100%" for="lokasi">Lokasi
                <select required class="form-control" name="lokasi" id="lokasi">
                  <option value="Boiler">Boiler </option>
                  <option value="Turbin">Turbin  </option>
                  <option value="Kantor CHCB">Kantor CHCB </option>
                  <option value="WTP">WTP </option>
                  <option value="Tripper">Tripper </option>
                  <option value="Jetty">Jetty</option>
                  <option value="Gedung Admin">Gedung Admin </option>
                  <option value="SU (Ship Unloader)">SU (Ship Unloader) </option>
                  <option value="TH (Transfer House) 1">TH (Transfer House) 1 </option>
                  <option value="TH (Transfer House) 2">TH (Transfer House) 2 </option>
                  <option value="TH (Transfer House) 3">TH (Transfer House) 3 </option>
                  <option value="TH (Transfer House) 4">TH (Transfer House) 4 </option>
                  <option value="TH (Transfer House) 5">TH (Transfer House) 5 </option>
                  <option value="TT (Transfer Tower)">TT (Transfer Tower) </option>
                  <option value="Fly Ash">Fly Ash </option>
                </select>
              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label style="width:100%">Unit
                <select required class="form-control" name="unit">
                  <option value="Unit 1">Unit 1 </option>
                  <option value="Unit 2">Unit 2 </option>
                </select>
              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label style="width:100%">Status
                <input required type="text" name="status" value="" class="form-control">
              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label style="width:100%">Keterangan
                <textarea required rows="8" type="text" name="keterangan" value="" class="form-control"></textarea>
              </label>
            </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <label style="width:100%" for="uk">Batas
              <input required type="date" name="batas" id="uk" value="" class="form-control">
            </label>
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <label style="width:100%" class="form-control">Dokumentasi
              <input required type="file" name="fileToUpload" value="" style="display:none">
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

      <script src="js/jquery.nice-select.min.js"></script>
        <script src="js/vendor/jquery-2.2.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/parallax.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/main.js"></script>
        <script src="js/swiper.js"></script>
        <script src="js/swiper.min.js"></script>
        <script type="text/javascript">
        var mySwiper = new Swiper ('.swiper-container');
        </script>
        <script>
        $(document).ready(function(){
          $("#penanganan").click(function(){
            $("#tes").attr("action", "proses/nearmiss.php?page=3");
          });
        });
        </script>
      </body>
    </html>
