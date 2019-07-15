<?php
include "proses/koneksi.php";
$data         = $_REQUEST['data'];
$no           = 1;
$a            = mysqli_query($connect, "SELECT * FROM `audit` WHERE `no` = '$data'");
while ($audit = mysqli_fetch_array($a)) {
$idcheck      = $audit['checklist'];
$b            = mysqli_query($connect, "SELECT * FROM `checklist_tambahan` WHERE `id` = '$idcheck'");
while ($tamba = mysqli_fetch_array($b)) {
       $permit= json_decode($audit['11']);
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Live Audit</title>
    <style media="screen">
      td {vertical-align:top;}
    </style>
    <link rel="stylesheet" href="css/bootstrap.css">
  </head>
  <body>
    <table width="100%" style="border:solid thin #000">
      <tr>
        <td rowspan="4" width="20%"> <img style="margin:auto;display: block;margin-top:5%" src="img/logo.png" alt="" width="40%"> </td>
        <td style="text-align:center">PT PEMBANGKITAN JAWA BALI UNIT PEMBANGKITAN PAITON</td>
        <td>No. Dokumen</td>
        <td>: FMP-08.2.3.9.4</td>
      </tr>
      <tr>
        <td style="text-align:center">PJB-INTEGRATED MANAGEMENT SYSTEM</td>
        <td>Tgl. Berlaku</td>
        <td>: <?php echo $audit['tglberlaku']; ?></td>
      </tr>
      <tr>
        <td style="text-align:center">FORMULIR</td>
        <td>Revisi</td>
        <td>: 00</td>
      </tr>
      <tr>
        <td style="text-align:center">LIVE AUDIT</td>
        <td>Halaman</td>
        <td>: 1 dari 1</td>
      </tr>
    </table>
    <table border="1" width="100%" align="center" style="text-align:left; font-size:12px; border:solid thin #000;border-collapse: collapse;">
      <tr>
        <th colspan="7" style="background:#d4d4d4;text-align:center;padding-left:10px;">Permintaan Izin Kerja</th>
      </tr>
      <tr>
        <td width="15%">Diminta Oleh</td>
        <td width="35%">: <?php echo $audit['diminta']; ?></td>
        <td width="15%">Rencana Pekerjaan</td>
        <td width="5%">: Tgl</td>
        <td width="10%">: <?php echo $audit['dari']; ?></td>
        <td width="5%">s/d Tgl</td>
        <td width="15%">: <?php echo $audit['sampai']; ?></td>
      </tr>
      <tr>
        <td>Untuk Melaksanakan</td>
        <td>:<?php echo $audit['pekerjaan']; ?></td>
        <td>Nomor WO</td>
        <td colspan="4">: <?php echo $audit['wo']; ?></td>
      </tr>
      <tr>
        <td>Dilokasi (Unit Daerah)</td>
        <td>Perusahaan / Bidang</td>
        <td colspan="4">: <?php echo $audit['bidang']; ?> </td>
        <td>: <?php echo $audit['lokasi']; ?></td>
      </tr>
    </table>
    <table width="100%" border="1" align="center" style="text-align:left; border:solid thin #000;font-size:12px;border-collapse: collapse;">
      <tr>
        <th colspan="8" style="background:#d4d4d4;text-align:center;padding-left:10px;">Working Permit Pekerjaan</th>
      </tr>
      <tr>
        <th width="5%">
          <center>
            <?php if (in_array("Hot Work",$permit)) { ?>
              <input type="checkbox" checked name="" value="">
            <?php } else { ?>
            <input type="checkbox" name="" value="">
          <?php } ?>
          </center>
        </th>
        <th width="20%">HOT WORK</th>
        <th width="5%">
          <center>
            <?php if (in_array("Confined Space",$permit)) { ?>
              <input type="checkbox" checked name="" value="">
            <?php } else { ?>
            <input type="checkbox" name="" value="">
          <?php } ?>
          </center>
        </th>
        <th width="20%">CONFINED SPACE</th>
        <th width="3%">
          <center>
            <?php if (in_array("Working at Height",$permit)) { ?>
              <input type="checkbox" checked name="" value="">
            <?php } else { ?>
            <input type="checkbox" name="" value="">
          <?php } ?>
          </center>
        </th>
        <th>WORKING AT HEIGHT</th>
        <th width="3%">
          <center>
            <?php if (in_array("Digging",$permit)) { ?>
              <input type="checkbox" checked name="" value="">
            <?php } else { ?>
            <input type="checkbox" name="" value="">
          <?php } ?>
          </center>
        </th>
        <th>DIGGING</th>
      </tr>
      <tr>
        <th width="3%">
          <center>
            <?php if (in_array("Isolasi",$permit)) { ?>
              <input type="checkbox" checked name="" value="">
            <?php } else { ?>
            <input type="checkbox" name="" value="">
          <?php } ?>
          </center>
         </th>
        <th>ISOLASI</th>
        <th width="3%">
          <center>
            <?php if (in_array("Vicinity",$permit)) { ?>
              <input type="checkbox" checked name="" value="">
            <?php } else { ?>
            <input type="checkbox" name="" value="">
          <?php } ?>
          </center>
        </th>
        <th>VICINITY</th>
        <th width="3%">
          <center>
            <?php if (in_array("Near & Underwater",$permit)) { ?>
              <input type="checkbox" checked name="" value="">
            <?php } else { ?>
            <input type="checkbox" name="" value="">
          <?php } ?>
          </center>
        </th>
        <th>NEAR & UNDERWATER</th>
        <th width="3%">
          <center>
            <?php if (in_array("Nothing",$permit)) { ?>
              <input type="checkbox" checked name="" value="">
            <?php } else { ?>
            <input type="checkbox" name="" value="">
          <?php } ?>
          </center>
        </th>
        <th>NOTHING</th>
      </tr>
    </table>
    <table width="100%" border="1" align="center" style="text-align:left; border:solid thin #000;padding:10px;font-size:12px;border-collapse: collapse;">
      <tr>
        <th colspan="8" style="background:#d4d4d4;text-align:center;padding-left:10px;">Daftar Periksa dan Paraf Pemeriksa (Diisi oleh Bidang K3)</th>
      </tr>
      <tr style="text-align:center">
        <td rowspan="2" style="vertical-align:middle;width:4%;">No</td>
        <td rowspan="2" style="vertical-align:middle;width:32%;">Aktifitas</td>
        <td colspan="2" style="width:14%;">Bidang K3</td>
        <td rowspan="2" style="vertical-align:middle;width:4%;">No</td>
        <td rowspan="2" style="vertical-align:middle;width:32%;">Aktifitas</td>
        <td colspan="2" style="width:14%;">Bidang K3</td>
      </tr>
      <tr style="text-align:center">
        <td>Yes</td>
        <td>N/A</td>
        <td>Yes</td>
        <td>N/A</td>
      </tr>

      <?php
        $b = mysqli_query($connect, "SELECT * FROM `checklist_audit` WHERE `id` = '$idcheck'");
        while ($checklist = mysqli_fetch_array($b)) {
       ?>
      <tr>
        <td style="text-align:center">1</td>
        <td style="padding-left:20px;">Pekerjaan yang dilakukan sudah sesuai JSA</td>
        <td style="text-align:center">
          <?php
          if ($checklist['check1'] == '1') {
          ?>
          <input type="checkbox" checked name="" value="">
          <?php
          } else {
          ?>
          <input type="checkbox" checked name="" value="">
          <?php } ?>
        </td>
        <td style="text-align:center">
          <?php
          if ($checklist['check1'] == '0') {
          ?>
          <input type="checkbox" checked name="" value="">
        <?php } else { ?>
          <input type="checkbox" name="" value="">
        <?php }  ?>
        </td>
        <td style="text-align:center">10</td>
        <td style="padding-left:20px;">Safety sign masih terpasang sesuai dan dalam keadaan baik</td>
        <td style="text-align:center">
          <?php
          if ($checklist['check10'] == '1') {
          ?>
          <input type="checkbox" checked name="" value="">
          <?php
          } else {
          ?>
          <input type="checkbox" checked name="" value="">
          <?php } ?>
        </td>
        <td style="text-align:center">
          <?php
          if ($checklist['check10'] == '0') {
          ?>
          <input type="checkbox" checked name="" value="">
        <?php } else { ?>
          <input type="checkbox" name="" value="">
        <?php }  ?>
        </td>
      </tr>
      <tr>
        <td style="text-align:center">2</td>
        <td style="padding-left:20px;">Checklist pekerjaan sudah di lakukan oleh pengawas</td>
        <td style="text-align:center">
          <?php
          if ($checklist['check2'] == '1') {
          ?>
          <input type="checkbox" checked name="" value="">
          <?php
          } else {
          ?>
          <input type="checkbox" checked name="" value="">
          <?php } ?>
        </td>
        <td style="text-align:center">
          <?php
          if ($checklist['check2'] == '0') {
          ?>
          <input type="checkbox" checked name="" value="">
        <?php } else { ?>
          <input type="checkbox" name="" value="">
        <?php }  ?>
        </td>
        <td style="text-align:center">11</td>
        <td style="padding-left:20px;">Penerangan di lokasi kerja memadai</td>
        <td style="text-align:center">
          <?php
          if ($checklist['check11'] == '1') {
          ?>
          <input type="checkbox" checked name="" value="">
          <?php
          } else {
          ?>
          <input type="checkbox" checked name="" value="">
          <?php } ?>
        </td>
        <td style="text-align:center">
          <?php
          if ($checklist['check11'] == '0') {
          ?>
          <input type="checkbox" checked name="" value="">
        <?php } else { ?>
          <input type="checkbox" name="" value="">
        <?php }  ?>
        </td>
      </tr>
      <tr>
        <td style="text-align:center">3</td>
        <td style="padding-left:20px;">Pengawas pekerjaan ada di tempat kerja</td>
        <td style="text-align:center">
          <?php
          if ($checklist['check3'] == '1') {
          ?>
          <input type="checkbox" checked name="" value="">
          <?php
          } else {
          ?>
          <input type="checkbox" name="" value="">
          <?php } ?>
        </td>
        <td style="text-align:center">
          <?php
          if ($checklist['check3'] == '0') {
          ?>
          <input type="checkbox" checked name="" value="">
        <?php } else { ?>
          <input type="checkbox" name="" value="">
        <?php }  ?>
        </td>
        <td style="text-align:center">12</td>
        <td style="padding-left:20px;">Lingkungan kerja aman, bebas dari bahaya pekerjaan lainnya</td>
        <td style="text-align:center">
          <?php
          if ($checklist['check12'] == '1') {
          ?>
          <input type="checkbox" checked name="" value="">
          <?php
          } else {
          ?>
          <input type="checkbox" name="" value="">
          <?php } ?>
        </td>
        <td style="text-align:center">
          <?php
          if ($checklist['check12'] == '0') {
          ?>
          <input type="checkbox" checked name="" value="">
        <?php } else { ?>
          <input type="checkbox" name="" value="">
        <?php }  ?>
        </td>
      </tr>
      <tr>
        <td style="text-align:center">4</td>
        <td style="padding-left:20px;">Pelaksana pekerja sesuai dengan surat penunjukan</td>
        <td style="text-align:center">
          <?php
          if ($checklist['check4'] == '1') {
          ?>
          <input type="checkbox" checked name="" value="">
          <?php
          } else {
          ?>
          <input type="checkbox" name="" value="">
          <?php } ?>
        </td>
        <td style="text-align:center">
          <?php
          if ($checklist['check4'] == '0') {
          ?>
          <input type="checkbox" checked name="" value="">
        <?php } else { ?>
          <input type="checkbox" name="" value="">
        <?php }  ?>
        </td>
        <td style="text-align:center">13</td>
        <td style="padding-left:20px;">Sirkulasi udara di sekitar pekerjaan memadai</td>
        <td style="text-align:center">
          <?php
          if ($checklist['check13'] == '1') {
          ?>
          <input type="checkbox" checked name="" value="">
          <?php
          } else {
          ?>
          <input type="checkbox" name="" value="">
          <?php } ?>
        </td>
        <td style="text-align:center">
          <?php
          if ($checklist['check13'] == '0') {
          ?>
          <input type="checkbox" checked name="" value="">
        <?php } else { ?>
          <input type="checkbox" name="" value="">
        <?php }  ?>
        </td>
      </tr>
      <tr>
        <td style="text-align:center">5</td>
        <td style="padding-left:20px;">
          APD yang digunakan pekerja sesuai pekerjaan<br>
          <font>
            <b>
              (
            <?php
            $apd = json_decode($tamba['apd']);
            for ($i=0; $i < count($apd) ; $i++) {
              echo $apd[$i].", ";
            }
            ?>
              )
            </b>
          </font>
        </td>
        <td style="text-align:center">
          <?php
          if ($checklist['check5'] == '1') {
          ?>
          <input type="checkbox" checked name="" value="">
          <?php
          } else {
          ?>
          <input type="checkbox" name="" value="">
          <?php } ?>
        </td>
        <td style="text-align:center">
          <?php
          if ($checklist['check5'] == '0') {
          ?>
          <input type="checkbox" checked name="" value="">
        <?php } else { ?>
          <input type="checkbox" name="" value="">
        <?php }  ?>
        </td>
        <td style="text-align:center">14</td>
        <td style="padding-left:20px;">Fire watch ada di area kerja dan sesuai dengan surat penunjukan</td>
        <td style="text-align:center">
          <?php
          if ($checklist['check14'] == '1') {
          ?>
          <input type="checkbox" checked name="" value="">
          <?php
          } else {
          ?>
          <input type="checkbox" name="" value="">
          <?php } ?>
        </td>
        <td style="text-align:center">
          <?php
          if ($checklist['check14'] == '0') {
          ?>
          <input type="checkbox" checked name="" value="">
        <?php } else { ?>
          <input type="checkbox" name="" value="">
        <?php }  ?>
        </td>
      </tr>
      <tr>
        <td style="text-align:center">6</td>
        <td style="padding-left:20px;">Peralatan kerja yang digunakan sesuai pekerjaan</td>
        <td style="text-align:center">
          <?php
          if ($checklist['check6'] == '1') {
          ?>
          <input type="checkbox" checked name="" value="">
          <?php
          } else {
          ?>
          <input type="checkbox" name="" value="">
          <?php } ?>
        </td>
        <td style="text-align:center">
          <?php
          if ($checklist['check6'] == '0') {
          ?>
          <input type="checkbox" checked name="" value="">
        <?php } else { ?>
          <input type="checkbox" name="" value="">
        <?php }  ?>
        </td>
        <td style="text-align:center">15</td>
        <td style="padding-left:20px;">Fire watch log terisi dan termonitor</td>
        <td style="text-align:center">
          <?php
          if ($checklist['check15'] == '1') {
          ?>
          <input type="checkbox" checked name="" value="">
          <?php
          } else {
          ?>
          <input type="checkbox" name="" value="">
          <?php } ?>
        </td>
        <td style="text-align:center">
          <?php
          if ($checklist['check15'] == '0') {
          ?>
          <input type="checkbox" checked name="" value="">
        <?php } else { ?>
          <input type="checkbox" name="" value="">
        <?php }  ?>
        </td>
      </tr>
      <tr>
        <td style="text-align:center">7</td>
        <td style="padding-left:20px;">Kondisi pekerja dalam keadaan sehat</td>
        <td style="text-align:center">
          <?php
          if ($checklist['check7'] == '1') {
          ?>
          <input type="checkbox" checked name="" value="">
          <?php
          } else {
          ?>
          <input type="checkbox" name="" value="">
          <?php } ?>
        </td>
        <td style="text-align:center">
          <?php
          if ($checklist['check7'] == '0') {
          ?>
          <input type="checkbox" checked name="" value="">
        <?php } else { ?>
          <input type="checkbox" name="" value="">
        <?php }  ?>
        </td>
        <td style="text-align:center">16</td>
        <td style="padding-left:20px;">
          Jumlah/ penempatan Fire Watch sesuai dengan lokasi pekerjaan<br>
          <font>
            <b>
              (
            <?php
            $lokasi = json_decode($tamba['lokasi']);
            for ($i = 0; $i < count($lokasi) ; $i++) {
              if ($lokasi[$i] != '') {
                echo "Lantai ".$lokasi[$i].", ";
              }
            }
            ?>
              )
            </b>
          </font>
        </td>
        <td style="text-align:center">
          <?php
          if ($checklist['check16'] == '1') {
          ?>
          <input type="checkbox" checked name="" value="">
          <?php
          } else {
          ?>
          <input type="checkbox" name="" value="">
          <?php } ?>
        </td>
        <td style="text-align:center">
          <?php
          if ($checklist['check16'] == '0') {
          ?>
          <input type="checkbox" checked name="" value="">
        <?php } else { ?>
          <input type="checkbox" name="" value="">
        <?php }  ?>
        </td>
      </tr>
      <tr>
        <td style="text-align:center">8</td>
        <td style="padding-left:20px;">Pekerjaan yang dilakukan sudah ada permit yang sesuai</td>
        <td style="text-align:center">
          <?php
          if ($checklist['check8'] == '1') {
          ?>
          <input type="checkbox" checked name="" value="">
          <?php
          } else {
          ?>
          <input type="checkbox" name="" value="">
          <?php } ?>
        </td>
        <td style="text-align:center">
          <?php
          if ($checklist['check8'] == '0') {
          ?>
          <input type="checkbox" checked name="" value="">
        <?php } else { ?>
          <input type="checkbox" name="" value="">
        <?php }  ?>
        </td>
        <td style="text-align:center">17</td>
        <td style="padding-left:20px;">Terdapat surat dari management untuk pekerjaan diatas jam normal</td>
        <td style="text-align:center">
          <?php
          if ($checklist['check17'] == '1') {
          ?>
          <input type="checkbox" checked name="" value="">
          <?php
          } else {
          ?>
          <input type="checkbox" name="" value="">
          <?php } ?>
        </td>
        <td style="text-align:center">
          <?php
          if ($checklist['check17'] == '0') {
          ?>
          <input type="checkbox" checked name="" value="">
        <?php } else { ?>
          <input type="checkbox" name="" value="">
        <?php }  ?>
        </td>
      </tr>
      <tr>
        <td style="text-align:center">9</td>
        <td style="padding-left:20px;">Permit masih berlaku/ belum expired</td>
        <td style="text-align:center">
          <?php
          if ($checklist['check9'] == '1') {
          ?>
          <input type="checkbox" checked name="" value="">
          <?php
          } else {
          ?>
          <input type="checkbox" name="" value="">
          <?php } ?>
        </td>
        <td style="text-align:center">
          <?php
          if ($checklist['check9'] == '0') {
          ?>
          <input type="checkbox" checked name="" value="">
        <?php } else { ?>
          <input type="checkbox" name="" value="">
        <?php }  ?>
        </td>
        <td style="text-align:center">18</td>
        <td style="padding-left:20px;">Emergency tools tersedia dan dalam keadaan baik</td>
        <td style="text-align:center">
          <?php
          if ($checklist['check18'] == '1') {
          ?>
          <input type="checkbox" checked name="" value="">
          <?php
          } else {
          ?>
          <input type="checkbox" name="" value="">
          <?php } ?>
        </td>
        <td style="text-align:center">
          <?php
          if ($checklist['check18'] == '0') {
          ?>
          <input type="checkbox" checked name="" value="">
        <?php } else { ?>
          <input type="checkbox" name="" value="">
        <?php }  ?>
        </td>
      </tr>
    <?php } ?>
    </table>
    <table width="100%" border="1" align="center" style="text-align:left; border:solid thin #000;padding:10px;font-size:12px;border-collapse: collapse;">
      <tr>
        <th style="background:#d4d4d4;text-align:center;width:50%">Temuan Unsafe Action</th>
        <th style="background:#d4d4d4;text-align:center;width:50%">Temuan Unsafe Condition</th>
      </tr>
      <tr>
        <td style="text-align:center;width:50%">
          <p style="height:160px"><?php echo $audit['14']; ?></p>
        </td>
        <td style="text-align:center;width:50%">
          <p style="height:160px"><?php echo $audit['15']; ?></p>
        </td>
      </tr>
    </table>
    <table width="100%" border="1" align="center" style="text-align:left; border:solid thin #000;font-size:12px;border-collapse: collapse;">
      <tr>
        <th style="background:#d4d4d4;text-align:center;padding-left:10px;width:50%">Dokumentasi</th>
        <th style="background:#d4d4d4;text-align:center;padding-left:10px;width:50%">Pekerjaan di Stop</th>
      </tr>
      <tr>
        <td style="text-align:center;width:50%">
          <img src="proses/upload/<?php echo $audit['13']; ?>" style="width:350px;padding:10px" alt="">
        </td>
        <td style="width:50%">
          <div class="row" style="padding:5px;width:100%;vertical-align:top">
            <div class="col-md-6">
              Tanggal :
            </div>
            <div class="col-md-6">
              Jam :
            </div>
          </div>
          <div class="row" style="padding:10px;">
            <div class="col-md-12">
              Alasan :
            </div>
          </div>
        </td>
      </tr>
    </table>
    <table width="100%" border="1" align="center" style="text-align:center; border:solid thin #000;font-size:12px;border-collapse: collapse;">
      <tr>
        <th style="background:#d4d4d4;text-align:center;padding-left:10px;width:50%">Tanda Tangan</th>
      </tr>
      <tr>
        <td>
          <div class="row">
          <div class="col-3">
            <p style="margin-top:20px">Bidang K3</p>
            <p style="margin-top:60px">Date & Signature</p>
          </div>
          <div class="col-6">
          </div>
          <div class="col-3">
            <p style="margin-top:20px">Penanggung Jawab / Pengawas Pekerjaan</p>
            <p style="margin-top:60px">Date & Signature</p>
          </div>
        </div>
        </td>
      </tr>
    </table>
  <?php }} ?>
  </body>
  <script type="text/javascript">
    window.print();
  </script>
</html>
