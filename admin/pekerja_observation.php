  <?php include "header.php" ?>

    <!-- Start service Area -->
    <section class="service-area section-gap" id="facilities" style="padding-top:40px;">
      <div class="container">
        <hr>
        <form class="" action="proses/observation.php?page=4" method="post">
          <h4 style="text-align:center">Nama Pekerja Yang Terlibat</h4>
          <hr>
          <div class="row">
            <div class="col-md-12">
              <!-- Slider main container -->
              <div class="swiper-container">
                  <!-- Additional required wrapper -->
                  <div class="swiper-wrapper">
                      <!-- Slides -->
                      <?php for ($i=1; $i < 11; $i++) { ?>
                      <div class="swiper-slide">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label style="width:95%" for="temuan">Nama
                                <input style="width:95%" type="text" name="nama[]" id="temuan" value="" class="form-control">
                              </label>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <label style="width:95%" for="tindak">Skill / Posisi
                                <input style="width:95%" type="text" name="skill[]" id="tindak" value="" class="form-control">
                              </label>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <label style="width:95%" for="pb">Potensi Bahaya
                                <textarea rows="8" name="potensi[]" style="width:95%" class="form-control" value=""> </textarea>
                              </label>
                              <table>
                                <tr>
                                  <td> <input type="checkbox" name="terlibat[]" value="1"> </td>
                                  <td>Saya Terlibat Dalam Pekerjaan Ini</td>
                                </tr>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php } ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <button type="submit" class="btn btn-primary" name="button" style="width:100%">Next</button>
          </div>
        </div>
      </form>

      </div>
    </section>
    <!-- End service Area -->
    <?php include "footer.php"; ?>
