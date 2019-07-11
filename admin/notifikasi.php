<?php include "header.php"; ?>


    <!-- Start service Area -->
    <section class="service-area section-gap" id="facilities" style="padding-top:40px;">
      <div class="container">
        <form class="" action="temuan.php" method="post">
        <div class="row d-flex justify-content-center">
          <div class="col-md-12 pb-10 header-text">
            <h4 style="margin-top:-10px">Notifikasi</h4>
            <p>Notifikasi Pengguna </p>
          </div>
        </div>
        <hr>
        <div class="row" style="background:#242424;padding:10px;color:#fff;margin-left:1px;margin-right:1px;">
          <div class="col-8">
            Kategori
          </div>
          <div class="col-4">
            Batas Akhir
          </div>
        </div>
        <?php
          $no     = 1;
          $a      = date('Y-m-d');
          $date   = new DateTime($a);
          $date->modify('+1 day');
          $tanggal = $date->format('Y-m-d');
          $data    = mysqli_query($connect, "SELECT * FROM `audit` WHERE `tglberlaku` = '$tanggal'");
          while ($row=mysqli_fetch_row($data))
            {
         ?>
        <div class="row" style="border:solid thin #d4d4d4;color:#000;margin-left:1px;margin-right:1px;font-size:12px;">
          <div class="col-8">
          <a href="preview_audit.php?data=<?php echo $row[0]; ?>" style="color:#000;font-weight:500">  <font>Live Audit | <?php echo $row[1]; ?></font> </a>
          </div>
          <div class="col-4">
            <?php echo $row[4]; ?>
          </div>
        </div>
      <?php
        }
        $data    = mysqli_query($connect, "SELECT * FROM `observation` WHERE `tglberlaku` = '$tanggal'");
        while ($row=mysqli_fetch_row($data))
          {
       ?>
       <div class="row" style="border:solid thin #d4d4d4;color:#000;margin-left:1px;margin-right:1px;font-size:12px;">
         <div class="col-8">
         <a href="preview_audit.php?data=<?php echo $row[0]; ?>" style="color:#000;font-weight:500"> <font>Observation | <?php echo $row[1]; ?></font> </a>
         </div>
         <div class="col-4">
           <?php echo $row[4]; ?>
         </div>
       </div>
     <?php } ?>
      <div class="row" style="margin-top:20px;">
        <div class="col-md-12">
          <a href="menu-laporan.php" type="button" style="width:100%;margin-top:10px;" name="button" class="btn btn-danger"> Kembali </a>
        </div>
      </div>

      </div>
    </section>
    <!-- End service Area -->

<?php include "footer.php"; ?>
