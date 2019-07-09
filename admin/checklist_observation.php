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
              <form class="" action="proses/observation.php?page=3" method="post">
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
                    <td style="vertical-align:top">1. </td>
                    <td>JSA Sudah ada dan terisi</td>
                    <td><input type="radio" name="tta1" value="1"> </td>
                    <td><input type="radio" name="tta1" value="0"></td>
                  </tr>
                  <tr>
                    <td style="vertical-align:top">2. </td>
                    <td>Tersedia checklist pekerjaan yang dikerjakan</td>
                    <td><input type="radio" name="tta2" value="1"> </td>
                    <td><input type="radio" name="tta2" value="0"></td>
                  </tr>
                  <tr>
                    <td style="vertical-align:top">3. </td>
                    <td>Surat penunjukan pengawas sudah ada dan terisi</td>
                    <td><input type="radio" name="tta3" value="1"> </td>
                    <td><input type="radio" name="tta3" value="0"></td>
                  </tr>
                  <tr>
                    <td style="vertical-align:top">4. </td>
                    <td>Surat penunjukan pelaksana pekerjaan sudah ada dan terisi</td>
                    <td><input type="radio" name="tta4" value="1"> </td>
                    <td><input type="radio" name="tta4" value="0"></td>
                  </tr>
                  <tr>
                    <td style="vertical-align:top">5. </td>
                    <td>Checklist daftar dan kondisi APD sudah terisi dan sesuai</td>
                    <td><input type="radio" name="tta5" value="1"> </td>
                    <td><input type="radio" name="tta5" value="0"></td>
                  </tr>
                  <tr>
                    <td style="vertical-align:top">6. </td>
                    <td>Checklist kondisi peralatan pekerjaan sudah terisi dan sesuai</td>
                    <td><input type="radio" name="tta6" value="1"> </td>
                    <td><input type="radio" name="tta6" value="0"></td>
                  </tr>
                  <tr>
                    <td style="vertical-align:top">7. </td>
                    <td>Checklist daftar kesiapan / kondisi pelaksana pekerjaan sudah terisi</td>
                    <td><input type="radio" name="tta7" value="1"> </td>
                    <td><input type="radio" name="tta7" value="0"></td>
                  </tr>
                  <tr>
                    <td style="vertical-align:top">8. </td>
                    <td>Checklist pemeriksa penggunaan APD sudah terisi</td>
                    <td><input type="radio" name="tta8" value="1"> </td>
                    <td><input type="radio" name="tta8" value="0"></td>
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
                              <input type="checkbox" name="apd[]" value="Safety Helmet Welding">
                            </td>
                            <td> Safety Helmet </td>
                          </tr>
                          <tr>
                            <td>
                              <input type="checkbox" name="apd[]" value=" Safety Shoes">
                            </td>
                            <td>  Safety Shoes   </td>
                          </tr>
                          <?php
                        } if (in_array("Hot Work", $permit) || in_array("Confined Space", $permit) || in_array("Working at Height", $permit)) {
                           ?>
                           <tr>
                             <td>
                               <input type="checkbox" name="apd[]" value="Sarung Tangan">
                             </td>
                             <td>Sarung Tangan</td>
                           </tr>
                         <?php } if (in_array("Hot Work", $permit) || in_array("Vicinity", $permit) || in_array("Working at Height", $permit) ||  in_array("Near And Underwater", $permit) || in_array("Digging", $permit)) { ?>
                           <tr>
                             <td>
                               <input type="checkbox" name="apd[]" value="Ear Plug">
                             </td>
                             <td> Ear Plug   </td>
                           </tr>
                          <?php } if (in_array("Hot Work", $permit)) { ?>
                          <tr>
                            <td>
                              <input type="checkbox" name="apd[]" value=" Baju Tahan Panas ">
                            </td>
                            <td> Baju Tahan Panas    </td>
                          </tr>
                        <?php } if (in_array("Vicinity", $permit) || in_array("Working at Height", $permit) || in_array("Digging", $permit) || in_array("Confined Space", $permit)) { ?>
                          <tr>
                            <td>
                              <input type="checkbox" name="apd[]" value=" Masker">
                            </td>
                            <td>  Masker   </td>
                          </tr>
                        <?php } if (in_array("Working at Height", $permit) || in_array("Digging", $permit) || in_array("Confined Space", $permit)) { ?>
                          <tr>
                            <td>
                              <input type="checkbox" name="apd[]" value="Safety Googles ">
                            </td>
                            <td>  Safety Googles    </td>
                          </tr>
                        <?php }  if (in_array("Working at Height", $permit)) {?>
                          <tr>
                            <td>
                              <input type="checkbox" name="apd[]" value="Safety Belt ">
                            </td>
                            <td>  Safety Belt    </td>
                          </tr>
                        <?php } if (in_array("Working at Height", $permit)) { ?>
                          <tr>
                            <td>
                              <input type="checkbox" name="apd[]" value=" Safety Harness ">
                            </td>
                            <td>  Safety Harness    </td>
                          </tr>
                        <?php } if (in_array("Digging", $permit) || in_array("Vicinity", $permit) || in_array("Near And Underwater", $permit)) { ?>
                          <tr>
                            <td>
                              <input type="checkbox" name="apd[]" value="Sarung Tangan Karet">
                            </td>
                            <td>  Sarung Tangan Karet   </td>
                          </tr>
                        <?php } if (in_array("Near And Underwater", $permit)) { ?>
                          <tr>
                            <td>
                              <input type="checkbox" name="apd[]" value=" Perlengkapan Penyelam">
                            </td>
                            <td>  Perlengkapan Penyelam   </td>
                          </tr>
                          <tr>
                            <td>
                              <input type="checkbox" name="apd[]" value=" Gas Oksigen dan Breathing Aparatus ">
                            </td>
                            <td>  Gas Oksigen dan Breathing Aparatus    </td>
                          </tr>
                        <?php } if (in_array("Isolasi", $permit) ||  in_array("Nothing", $permit)) { ?>
                          <tr>
                            <td>
                              <input type="checkbox" name="apd[]" value="Safety Wear Pack ">
                            </td>
                            <td>  Safety Wear Pack    </td>
                          </tr>
                        <?php } ?>
                        </table>
                    </td>
                  </tr>
                  <tr>
                    <td style="vertical-align:top">9. </td>
                    <td>Permit sudah distujui oleh CP dan sesuai pekerjaan</td>
                    <td><input type="radio" name="tta9" value="1"> </td>
                    <td><input type="radio" name="tta9" value="0"></td>
                  </tr>
                  <tr>
                    <td style="vertical-align:top">10. </td>
                    <td>Diperlukan standby first aider / standby person tambahan</td>
                    <td><input type="radio" name="tta10" value="1"> </td>
                    <td><input type="radio" name="tta10" value="0"></td>
                  </tr>
                  <tr>
                    <td style="vertical-align:top">11. </td>
                    <td>Diperlukan rambu peringatan bahaya disekitar pekerjaan</td>
                    <td><input type="radio" name="tta11" value="1"> </td>
                    <td><input type="radio" name="tta11" value="0"></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td colspan="3">
                      <table style="font-size:12px;">
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
                    <td style="vertical-align:top">12. </td>
                    <td>Diperlukan emergency tools / fire truck</td>
                    <td><input type="radio" name="tta12" value="1"> </td>
                    <td><input type="radio" name="tta12" value="0"></td>
                  </tr>
                  <tr>
                    <td style="vertical-align:top">13. </td>
                    <td>Dibutuhkan penerangan tambahan di area kerja jika kurang memadai</td>
                    <td><input type="radio" name="tta13" value="1"> </td>
                    <td><input type="radio" name="tta13" value="0"></td>
                  </tr>
                  <tr>
                    <td style="vertical-align:top">14. </td>
                    <td>Lingkungan kerja aman, bebas dari bahaya pekerjaan lainya </td>
                    <td><input type="radio" name="tta14" value="1"> </td>
                    <td><input type="radio" name="tta14" value="0"></td>
                  </tr>
                  <tr>
                    <td style="vertical-align:top">15. </td>
                    <td>Sirkulasi udara di sekitar pekerjaan memadai </td>
                    <td><input type="radio" name="tta15" value="1"> </td>
                    <td><input type="radio" name="tta15" value="0"></td>
                  </tr>
                  <tr>
                    <td style="vertical-align:top">16. </td>
                    <td>System peralatan unit diamankan dari pekerjaan yang berlangsung </td>
                    <td><input type="radio" name="tta16" value="1"> </td>
                    <td><input type="radio" name="tta16" value="0"></td>
                  </tr>
                  <tr>
                    <td style="vertical-align:top">17. </td>
                    <td>Tersedia surat penunjukan Fire Watch yang sudah terisi </td>
                    <td><input type="radio" name="tta17" value="1"> </td>
                    <td><input type="radio" name="tta17" value="0"></td>
                  </tr>
                  <tr>
                    <td style="vertical-align:top">18. </td>
                    <td>Jumlah Fire Watch sudah sesuai dengan pekerjaan pada lantai bertingkat </td>
                    <td><input type="radio" name="tta18" value="1"> </td>
                    <td><input type="radio" name="tta18" value="0"></td>
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
                              <td> <input type="checkbox" name="lantai[]" value="1" style="margin-left:5px;"> </td>
                              <td><font style="font-size:12px"> Lantai 1 </font></td>
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
                    <td style="vertical-align:top">19. </td>
                    <td>Terdapat Fire Watch Log </td>
                    <td><input type="radio" name="tta19" value="1"> </td>
                    <td><input type="radio" name="tta19" value="0"></td>
                  </tr>
                  <tr>
                    <td style="vertical-align:top">20. </td>
                    <td>Tersedia impairment permit sesuai dengan FPE di sekitar </td>
                    <td><input type="radio" name="tta20" value="1"> </td>
                    <td><input type="radio" name="tta20" value="0"></td>
                  </tr>
                  <tr>
                    <td style="vertical-align:top">21. </td>
                    <td>Terdapat surat dari management untuk pekerjaan diatas jam normal </td>
                    <td><input type="radio" name="tta21" value="1"> </td>
                    <td><input type="radio" name="tta21" value="0"></td>
                  </tr>
                  <tr>
                    <td style="vertical-align:top">22. </td>
                    <td>Sudah dilakukan On Spot Induction </td>
                    <td><input type="radio" name="tta22" value="1"> </td>
                    <td><input type="radio" name="tta22" value="1"></td>
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
