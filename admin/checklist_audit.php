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
                  <td></td>
                  <td colspan="3">
                    <table style="font-size:12px;">
                      <?php
                      $permit =  $_SESSION['permit'];
                      $lokasi = $_SESSION['lokasi'];
                      ?>
                      <?php
                      if (in_array("Hot Work", $permit) || in_array("Isolasi", $permit) || in_array("Confined Space", $permit) || in_array("Vicinity", $permit) || in_array("Working at Height", $permit) || in_array("Digging", $permit) || in_array("Nothing", $permit) ) {
                      ?>
                      <tr>
                        <td>
                          <input type="checkbox" name="rambu[]" value="Safety Helmet Welding">
                        </td>
                        <td> Safety Helmet </td>
                      </tr>
                      <tr>
                        <td>
                          <input type="checkbox" name="rambu[]" value=" Safety Shoes">
                        </td>
                        <td>  Safety Shoes   </td>
                      </tr>
                      <?php
                    } if (in_array("Hot Work", $permit) || in_array("Confined Space", $permit) || in_array("Working at Height", $permit)) {
                       ?>
                       <tr>
                         <td>
                           <input type="checkbox" name="rambu[]" value="Sarung Tangan">
                         </td>
                         <td>Sarung Tangan</td>
                       </tr>
                     <?php } if (in_array("Hot Work", $permit) || in_array("Vicinity", $permit) || in_array("Working at Height", $permit) ||  in_array("Near And Underwater", $permit) || in_array("Digging", $permit)) { ?>
                       <tr>
                         <td>
                           <input type="checkbox" name="rambu[]" value="Ear Plug">
                         </td>
                         <td> Ear Plug   </td>
                       </tr>
                      <?php } if (in_array("Hot Work", $permit)) { ?>
                      <tr>
                        <td>
                          <input type="checkbox" name="rambu[]" value=" Baju Tahan Panas ">
                        </td>
                        <td> Baju Tahan Panas    </td>
                      </tr>
                    <?php } if (in_array("Vicinity", $permit) || in_array("Working at Height", $permit) || in_array("Digging", $permit) || in_array("Confined Space", $permit)) { ?>
                      <tr>
                        <td>
                          <input type="checkbox" name="rambu[]" value=" Masker">
                        </td>
                        <td>  Masker   </td>
                      </tr>
                    <?php } if (in_array("Working at Height", $permit) || in_array("Digging", $permit) || in_array("Confined Space", $permit)) { ?>
                      <tr>
                        <td>
                          <input type="checkbox" name="rambu[]" value="Safety Googles ">
                        </td>
                        <td>  Safety Googles    </td>
                      </tr>
                    <?php }  if (in_array("Working at Height", $permit)) {?>
                      <tr>
                        <td>
                          <input type="checkbox" name="rambu[]" value="Safety Belt ">
                        </td>
                        <td>  Safety Belt    </td>
                      </tr>
                    <?php } if (in_array("Working at Height", $permit)) { ?>
                      <tr>
                        <td>
                          <input type="checkbox" name="rambu[]" value=" Safety Harness ">
                        </td>
                        <td>  Safety Harness    </td>
                      </tr>
                    <?php } if (in_array("Digging", $permit) || in_array("Vicinity", $permit) || in_array("Near And Underwater", $permit)) { ?>
                      <tr>
                        <td>
                          <input type="checkbox" name="rambu[]" value="Sarung Tangan Karet">
                        </td>
                        <td>  Sarung Tangan Karet   </td>
                      </tr>
                    <?php } if (in_array("Near And Underwater", $permit)) { ?>
                      <tr>
                        <td>
                          <input type="checkbox" name="rambu[]" value=" Perlengkapan Penyelam">
                        </td>
                        <td>  Perlengkapan Penyelam   </td>
                      </tr>
                      <tr>
                        <td>
                          <input type="checkbox" name="rambu[]" value=" Gas Oksigen dan Breathing Aparatus ">
                        </td>
                        <td>  Gas Oksigen dan Breathing Aparatus    </td>
                      </tr>
                    <?php } if (in_array("Isolasi", $permit) ||  in_array("Nothing", $permit)) { ?>
                      <tr>
                        <td>
                          <input type="checkbox" name="rambu[]" value="Safety Wear Pack ">
                        </td>
                        <td>  Safety Wear Pack    </td>
                      </tr>
                    <?php } ?>
                    </table>
                  </td>
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
                  <td></td>
                  <td colspan="4">
                    <table style="font-size:12px;">
                        <?php
                        // echo $lokasi;
                            if ($lokasi == "Turbin" || $lokasi == "TH (Transfer House) 2" ||  $lokasi == "TH (Transfer House) 3" ||  $lokasi == "TH (Transfer House) 4" ||  $lokasi == "TH (Transfer House) 5" ||  $lokasi == "Fly Ash") {
                              for ($i=1; $i <= 5 ; $i++) {
                            ?>
                            <tr>
                            <td> <input type="checkbox" name="lantai[]" value="<?php echo $i; ?>" style="margin-left:5px;"> </td>
                            <td><font style="font-size:12px"> Lantai <?php echo $i; ?> </font></td>
                            </tr>
                            <?php
                          }} else if($lokasi == "WTP" || $lokasi == "Tripper" ||  $lokasi == "Jetty" ) {
                            ?>
                            <tr>
                            <td> <input type="checkbox" name="lantai[]" value="1" style="margin-left:5px;"> </td>
                            <td><font style="font-size:12px"> Lantai 1 </font></td>
                            </tr>
                            <?php } else if ($lokasi == "Gedung Admin" || $lokasi == "SU (Ship Unloader)") {
                              for ($i=1; $i <= 4 ; $i++) {
                                ?>
                                <tr>
                                <td> <input type="checkbox" name="lantai[]" value="<?php echo $i; ?>" style="margin-left:5px;"> </td>
                                <td><font style="font-size:12px"> Lantai <?php echo $i; ?> </font></td>
                                </tr>
                          <?php
                        }} else if ($lokasi == "TH (Transfer House) 2" || $lokasi == "Kantor CHCB") {
                          for ($i=1; $i <= 2 ; $i++) {
                            ?>
                            <tr>
                            <td> <input type="checkbox" name="lantai[]" value="<?php echo $i; ?>" style="margin-left:5px;"> </td>
                            <td><font style="font-size:12px"> Lantai <?php echo $i; ?> </font></td>
                            </tr>
                        <?php
                      }} else if ($lokasi == "TT (Transfer Tower)") {
                        for ($i=1; $i <= 3 ; $i++) {
                          ?>
                          <tr>
                          <td> <input type="checkbox" name="lantai[]" value="<?php echo $i; ?>" style="margin-left:5px;"> </td>
                          <td><font style="font-size:12px"> Lantai <?php echo $i; ?> </font></td>
                          </tr>
                      <?php
                    }} else if ($lokasi == "Boiler") {
                      for ($i=1; $i <= 9 ; $i++) {
                       ?>
                       <tr>
                       <td> <input type="checkbox" name="lantai[]" value="<?php echo $i; ?>" style="margin-left:5px;"> </td>
                       <td><font style="font-size:12px"> Lantai <?php echo $i; ?> </font></td>
                       </tr>
                    <?php }} ?>
                    </table>
                  </td>
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
