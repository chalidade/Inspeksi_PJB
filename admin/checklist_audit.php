<?php include "header.php"; ?>

  <!-- Start service Area -->
  <section class="service-area section-gap" id="facilities" style="padding-top:40px;">
    <div class="container">
      <div class="row d-flex justify-content-center">

      </div>
      <hr>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <h4>Daftar Periksa Dan Paraf Pemeriksa</h4>
            <hr>
            <form class="" action="proses/audit.php?page=3" method="post">
              <table style="margin-top:10px;width:100%">
                <tr>
                  <th rowspan="2">No</th>
                  <th rowspan="2">Kegiatan</th>
                  <th colspan="2" width="22%">Bidang K3</th>
                </tr>
                <tr>
                    <td>Yes</td>
                    <td>N/A</td>
                </tr>
                <tr>
                  <td>1. </td>
                  <td>Pekerjaan yang dilakukan sudah sesuai JSA</td>
                  <td><input type="radio" name="audit1" value="0"> </td>
                  <td><input type="radio" name="audit1" value="1"></td>
                </tr>
                <tr>
                  <td>2. </td>
                  <td>Checklist pekerjaan sudah di lakukan oleh pengawas</td>
                  <td><input type="radio" name="audit2" value="0"> </td>
                  <td><input type="radio" name="audit2" value="1"></td>
                </tr>
                <tr>
                  <td>3. </td>
                  <td>Pengawas pekerjaan ada di tempat kerja</td>
                  <td><input type="radio" name="audit3" value="0"> </td>
                  <td><input type="radio" name="audit3" value="1"></td>
                </tr>
                <tr>
                  <td>4. </td>
                  <td>Pelaksana pekerja sesuai dengan surat penunjukan</td>
                  <td><input type="radio" name="audit4" value="0"> </td>
                  <td><input type="radio" name="audit4" value="1"></td>
                </tr>
                <tr>
                  <td>5. </td>
                  <td>APD yang digunakan pekerja sesuai pekerjaan</td>
                  <td><input type="radio" name="audit5" value="0"> </td>
                  <td><input type="radio" name="audit5" value="1"></td>
                </tr>
                <tr>
                  <td>6. </td>
                  <td>Peralatan kerja yang digunakan sesuai pekerjaan</td>
                  <td><input type="radio" name="audit6" value="0"> </td>
                  <td><input type="radio" name="audit6" value="1"></td>
                </tr>
                <tr>
                  <td>7. </td>
                  <td>Kondisi pekerja dalam keadaan sehat</td>
                  <td><input type="radio" name="audit7" value="0"> </td>
                  <td><input type="radio" name="audit7" value="1"></td>
                </tr>
                <tr>
                  <td>8. </td>
                  <td>Pekerjaan yang dilakukan sudah ada permit yang sesuai</td>
                  <td><input type="radio" name="audit8" value="0"> </td>
                  <td><input type="radio" name="audit8" value="1"></td>
                </tr>
                <tr>
                  <td>9. </td>
                  <td>Permit masih berlaku / belum expired</td>
                  <td><input type="radio" name="audit9" value="0"> </td>
                  <td><input type="radio" name="audit9" value="1"></td>
                </tr>
                <tr>
                  <td>10. </td>
                  <td>Safety sign masih terpasang sesuai dan dalam keadaan baik</td>
                  <td><input type="radio" name="audit10" value="0"> </td>
                  <td><input type="radio" name="audit10" value="1"></td>
                </tr>
                <tr>
                  <td>11. </td>
                  <td>Penerangan di lokasi kerja memadai</td>
                  <td><input type="radio" name="audit11" value="0"> </td>
                  <td><input type="radio" name="audit11" value="1"></td>
                </tr>
                <tr>
                  <td>12. </td>
                  <td>Lingkungan kerja aman, bebas dari bahaya pekerjaan lainya</td>
                  <td><input type="radio" name="audit12" value="0"> </td>
                  <td><input type="radio" name="audit12" value="1"></td>
                </tr>
                <tr>
                  <td>13. </td>
                  <td>Sirkulasi udara di sekitar pekerjaan memadai</td>
                  <td><input type="radio" name="audit13" value="0"> </td>
                  <td><input type="radio" name="audit13" value="1"></td>
                </tr>
                <tr>
                  <td>14. </td>
                  <td>Fire Watch ada di area kerja dan sesuai dengan surat penunjukan</td>
                  <td><input type="radio" name="audit14" value="0"> </td>
                  <td><input type="radio" name="audit14" value="1"></td>
                </tr>
                <tr>
                  <td>15. </td>
                  <td>Fire watch log terisi dan termonitor</td>
                  <td><input type="radio" name="audit15" value="0"> </td>
                  <td><input type="radio" name="audit15" value="1"></td>
                </tr>
                <tr>
                  <td>16. </td>
                  <td>Jumlah / penempatan Fire Watch sesuai dengan lokasi pekerjaan</td>
                  <td><input type="radio" name="audit16" value="0"> </td>
                  <td><input type="radio" name="audit16" value="1"></td>
                </tr>
                <tr>
                  <td>17. </td>
                  <td>Terdapat surat dari management untuk pekerjaan diatas jam normal</td>
                  <td><input type="radio" name="audit17" value="0"> </td>
                  <td><input type="radio" name="audit17" value="1"></td>
                </tr>
                <tr>
                  <td>18. </td>
                  <td>Emergency tools tersedia dan dalam keadaan baik</td>
                  <td><input type="radio" name="audit18" value="0"> </td>
                  <td><input type="radio" name="audit18" value="1"></td>
                </tr>
                  </table>
          </div>
        </div>
        <div class="col-md-12">
          <button type="submit" class="btn btn-primary" name="button" style="width:100%">Next</button>
        </div>
        </form>
      </div>

    </div>
  </section>
  <!-- End service Area -->

  <?php include "footer.php"; ?>
