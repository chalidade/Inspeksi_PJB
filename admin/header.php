<?php
session_start();
include "proses/koneksi.php";
 ?>

<!DOCTYPE html>
<head>
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicon-->
  <link rel="shortcut icon" href="img/fav.png">
  <!-- Author Meta -->
  <meta name="author" content="Colorlib">
  <!-- Meta Description -->
  <meta name="description" content="">
  <!-- Meta Keyword -->
  <meta name="keywords" content="">
  <!-- meta character set -->
  <meta charset="UTF-8">
  <!-- Site Title -->
  <title>Pembangkit Jawa Bali</title>

  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="css/swiper.css">
    <link rel="stylesheet" href="css/main.css">
    <style media="screen" type="text/css">
      .gambar:hover {
        width:500px;
      }
    </style>
  </head>
  <body>
    <div class="modal fade" id="notif" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLabel">Notifikasi</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <table width="100%">
              <?php
              $a               = date('Y-m-d');
              $date            = new DateTime($a);
              $date->modify('+1 day');
              $tanggal         = $date->format('Y-m-d');
              $data    = mysqli_query($connect, "SELECT * FROM `audit` WHERE `tglberlaku` = '$tanggal'");
              while ($row=mysqli_fetch_array($data))
                {
               ?>
              <tr>
                <td width="15%">
                  <img style="vertical-align: baseline;width:30px;" src="img/clipboard.png" alt="">
                </td>
                <td>
                  <p style="color:#242424;font-size:12px;"><b style="font-weight:500;color:#000">
                    Live Audit </b> dengan penanggung jawab  <b style="font-weight:500;color:#000"><?php echo $row['tgjawab']; ?></b>, Bidang <b style="font-weight:500;color:#000"><?php echo $row['bidang']; ?></b> di lokasi <b style="font-weight:500;color:#000"><?php echo $row['lokasi']; ?></b> akan melewati batas masa berlaku pada tanggal <b style="font-weight:500;color:#000;color:red"><?php echo $row['tglberlaku']; ?></b>.
                  </p>
                </td>
              </tr>
            <?php
              }
              $data1       = mysqli_query($connect, "SELECT * FROM `observation` WHERE `tglberlaku` = '$tanggal'");
              while ($row1 = mysqli_fetch_array($data1))
                {
             ?>
             <tr>
               <td width="15%">
                 <img style="vertical-align: baseline;width:30px;" src="img/checklist.png" alt="">
               </td>
               <td>
                 <p style="color:#242424;font-size:12px;"><b style="font-weight:500;color:#000">
                   Observation </b> dengan penanggung jawab  <b style="font-weight:500;color:#000"><?php echo $row1['tg_jawab']; ?></b>, Bidang <b style="font-weight:500;color:#000"><?php echo $row1['bidang']; ?></b> di lokasi <b style="font-weight:500;color:#000"><?php echo $row1['lokasi']; ?></b> akan melewati batas masa berlaku pada tanggal <b style="font-weight:500;color:red"><?php echo $row1['tglberlaku']; ?></b>.
                 </p>
               </td>
             </tr>
           <?php }
           $data2       = mysqli_query($connect, "SELECT * FROM `nearmiss` WHERE `tanggal` = '$tanggal'");
           while ($row2 = mysqli_fetch_array($data2))
             { ?>
             <tr>
               <td width="15%">
                 <img style="vertical-align: baseline;width:30px;" src="img/notepad.png" alt="">
               </td>
               <td>
                 <p style="color:#242424;font-size:12px;"><b style="font-weight:500;color:#000">
                   Nearmiss </b> dengan penanggung jawab  <b style="font-weight:500;color:#000"><?php echo $row2['tg_jawab']; ?></b>, Bidang <b style="font-weight:500;color:#000"><?php echo $row2['bidang']; ?></b> di lokasi <b style="font-weight:500;color:#000"><?php echo $row2['lokasi']; ?></b> akan melewati batas masa berlaku pada tanggal <b style="font-weight:500;color:red"><?php echo $row2['tanggal']; ?></b>.
                 </p>
               </td>
             </tr>
           <?php } ?>
            </table>
          </div>
          <div class="modal-footer">
          </div>
        </div>
      </div>
    </form>
  </div>
    <!-- Start Header Area -->
    <header class="default-header">
      <div class="container">
        <div class="header-wrap">
          <div class="header-top d-flex justify-content-between align-items-center">
            <table>
              <tr>
                <td><a href="index.php"> <img src="img/logo.png" alt="" style="width:60px;margin-top: 12px;"></td>
                <td>
                  <h4 class="logo" style="float:right;margin-top:10px;margin-left:10px;text-shadow: 0px 1px 1px #fbfa5f;">
                    <font style="color:#cd402f">Pembangkit</font><font style="color:#0f4e9c"> Jawa Bali</font></h4></a>
                </td>
                <td>
                  <div class="" style="background:red;text-align:center;width:25px;position: absolute;top:25px;z-index: 9;right: 35px;border-radius: 200px;font-size: 11px;font-weight: 800;color: #fff;padding: 2px;height: 25px;">
                    <?php
                    $b               = mysqli_query($connect, "SELECT count(no) FROM `audit` WHERE `tglberlaku` = '$tanggal'");
                    while ($count    = mysqli_fetch_row($b)) {
                      $caudit        = $count[0];
                      $c             = mysqli_query($connect, "SELECT count(id) FROM `observation` WHERE `tglberlaku` = '$tanggal'");
                      while ($count1 = mysqli_fetch_row($c)) {
                      $cobserve      = $count1[0];
                      $d             = mysqli_query($connect, "SELECT count(id) FROM `nearmiss` WHERE `tanggal` = '$tanggal'");
                      while ($count2 = mysqli_fetch_row($d)) {
                      $cnear         = $count2[0];

                      }}}

                      $jumlah = $caudit+$cobserve+$cnear;
                      echo $jumlah;
                     ?>
                </div>
                  <center>
                    <img src="img/bell.png"  data-toggle="modal" data-target="#notif" alt="" style="width:25px;position:absolute;right:45px;top:35px">
                  </center>
                </td>
              </tr>
            </table>
            <!-- <div class="logo">
            </div> -->
          </div>
        </div>
      </div>
    </header>
    <!-- End Header Area -->

    <!-- start banner Area -->
    <section class="banner-area relative" id="home" style="height: 250px;">
      <!-- <div class="overlay overlay-bg"></div> -->
      <div class="container">
      <div class="row fullscreen align-items-center justify-content-center" style="height: 915px;">
        <div class="active-banner-carousel" style="position: absolute;top: 60px;">

          </div>
        </div>
                    <div class="carousel-trigger">
            <div class="next-trigger"><span class="lnr lnr-arrow-up"></span></span></div>
            <div class="prev-trigger"><span class="lnr lnr-arrow-down"></span></span></div>
          </div>
      </div>
      </div>
    </section>
    <!-- End banner Area -->
