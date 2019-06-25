<?php include "header.php"; ?>


    <!-- Start service Area -->
    <section class="service-area section-gap" id="facilities" style="padding-top:40px;">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-12 pb-10 header-text">
            <!-- <p>PT Pembangkitan Jawa Bali Unit Pembangkitan Paiton</p> -->
            <h4 style="margin-top:-10px">My Account</h4>
          </div>
        </div>
        <hr>
        <h4 style="text-align:center">Data Diri</h4>
        <hr>
        <?php
        include "proses/koneksi.php";
        session_start();
        $email       = $_SESSION['email'];
        $user        = mysqli_query($connect, "SELECT * FROM `user` where email = '$email'");
        while ($data = mysqli_fetch_row($user)) { ?>
        <form class="" action="proses/account.php" method="post">
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label style="width:100%" for="uk">Nama
                <input type="text" name="nama" id="uk" value="<?php echo $data[1]; ?>" class="form-control">
              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label style="width:100%">Email
                <input type="text" name="email" value="<?php echo $data[2]; ?>" class="form-control">
              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label style="width:100%">Jabatan
                <input type="text" name="role" value="<?php echo $data[4]; ?>" class="form-control">
              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label style="width:100%">Password
                <input type="password" name="password" value="<?php echo $data[3]; ?>" class="form-control">
              </label>
            </div>
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-primary" name="button" style="width:100%">Simpan</button>
            <a href="index.php" class="btn btn-danger" name="button" style="width:100%;margin-top:10px;">Kembali</a>
          </div>
        </div>
      </form>
    <?php } ?>
      </div>
    </section>
    <!-- End service Area -->

<?php include "footer.php"; ?>
