<?php include "header.php"; ?>
    <!-- Start service Area -->
    <section class="service-area section-gap" id="facilities" style="padding-top:40px;">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-12 pb-10 header-text">
            <!-- <p>PT Pembangkitan Jawa Bali Unit Pembangkitan Paiton</p> -->
            <form class="" action="proses/observation.php?page=2" method="post">
            <h4 style="margin-top:-10px">JOB SAFETY OBSERVATION</h4>
            <center style="margin-top:10px;color:#000">Tanggal Berlaku : <input type="date" name="date" class="form-control"></center>
          </div>
        </div>
        <hr>
        <h4>Permintaan Izin Kerja</h4>
        <hr>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label style="width:100%" for="uk">Diminta Oleh
                <input type="text" name="diminta" id="uk" value="" class="form-control">
              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label style="width:100%" for="lokasi">Untuk melaksanakan Pekerjaan
                <input type="text" name="pekerjaan" id="pekerjaan" value="" class="form-control">
              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label style="width:100%" for="lokasi">Di Lokasi (Unit / Daerah)
                <input type="text" name="lokasi" id="lokasi" value="" class="form-control">
              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label style="width:100%">Rencana Pekerjaan
                <table width="100%">
                  <tr>
                    <td><input type="date" name="dari" value="" class="form-control"></td>
                    <td>&nbsp;</td>
                    <td><input type="date" name="sampai" value="" class="form-control"></td>
                  </tr>
                </table>
              </div>
              </label>
            </div>
          <div class="col-md-12">
            <div class="form-group">
              <label style="width:100%">Nomor WO
                <input type="text" name="wo" value="" class="form-control">
              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label style="width:100%">Perusahaan Bidang
                <input type="text" name="perusahaan" value="" class="form-control">
              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label style="width:100%" for="lokasi"> Working Permit Pekerjaan
              <table>
                <tr>
                  <td><input type="radio" name="permit" value="Hot Work"> </td>
                  <td>&nbsp; </td>
                  <td>Hot Work</td>
                </tr>
                <tr>
                  <td><input type="radio" name="permit" value="Isolasi"> </td>
                  <td>&nbsp; </td>
                  <td>Isolasi</td>
                </tr>
                <tr>
                  <td><input type="radio" name="permit" value="Confined Space"> </td>
                  <td>&nbsp; </td>
                  <td>Confined Space</td>
                </tr>
                <tr>
                  <td><input type="radio" name="permit" value="Vicinity"> </td>
                  <td>&nbsp; </td>
                  <td>Vicinity</td>
                </tr>
                <tr>
                  <td><input type="radio" name="permit" value="Working at Height"> </td>
                  <td>&nbsp; </td>
                  <td>Working at Height</td>
                </tr>
                <tr>
                  <td><input type="radio" name="permit" value="Near And Underwater"> </td>
                  <td>&nbsp; </td>
                  <td>Near And Underwater</td>
                </tr>
                <tr>
                  <td><input type="radio" name="permit" value="Digging"> </td>
                  <td>&nbsp; </td>
                  <td>Digging</td>
                </tr>
                <tr>
                  <td><input type="radio" name="permit" value="Nothing"> </td>
                  <td>&nbsp; </td>
                  <td>Nothing</td>
                </tr>
              </table>
              </label>
            </div>
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-primary" name="button" style="width:100%">Checklist</button>
          </div>
        </div>
      </form>

      </div>
    </section>
    <!-- End service Area -->

<?php include "footer.php"; ?>
