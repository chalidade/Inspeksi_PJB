<?php
include "proses/koneksi.php";
$data         = $_REQUEST['id'];
$no           = 1;
$a            = mysqli_query($connect, "SELECT * FROM `nearmiss` WHERE `id` = '$data'");
while ($audit = mysqli_fetch_array($a)) {
$idcheck      = $audit['checklist'];
$id_nearmiss  = $audit['id'];
$b            = mysqli_query($connect, "SELECT * FROM `penanganan` WHERE `id_nearmiss` = '$id_nearmiss'");
while ($tangan= mysqli_fetch_array($b)) {
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Nearmiss</title>
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
        <td>Tanggal</td>
        <td>: <?php echo $audit['tanggal']; ?></td>
      </tr>
      <tr>
        <td style="text-align:center">NEARMISS</td>
        <td>Halaman</td>
        <td>: 1 dari 1</td>
      </tr>
    </table>
    <table border="1" width="100%" align="center" style="text-align:left; font-size:12px; border:solid thin #000;border-collapse: collapse;">
      <tr>
        <th colspan="7" style="background:#d4d4d4;text-align:center;padding-left:10px;">Permintaan Izin Kerja</th>
      </tr>
      <tr>
        <td width="15%">Penanggung Jawab</td>
        <td width="35%">: <?php echo $audit['tg_jawab']; ?></td>
        <td width="15%">Bidang</td>
        <td width="35%">: <?php echo $audit['bidang']; ?></td>
      </tr>
      <tr>
        <td width="15%">Lokasi</td>
        <td width="35%">: <?php echo $audit['lokasi']; ?></td>
        <td>Unit</td>
        <td colspan="4">: <?php echo $audit['unit']; ?></td>
      </tr>
      <tr>
        <td width="15%">Status</td>
        <td width="35%">: <?php echo $audit['status']; ?></td>
        <td width="15%">Keterangan</td>
        <td width="35%">: <?php echo $audit['keterangan']; ?></td>
      </tr>
    </table>
    <table width="100%" border="1" align="center" style="border:solid thin #000;font-size:12px;border-collapse: collapse;">
      <tr>
        <th style="background:#d4d4d4;text-align:center;padding-left:10px;width:50%">Dokumentasi</th>
        <th style="background:#d4d4d4;text-align:center;padding-left:10px;width:50%">Penanganan</th>
      </tr>
      <tr>
        <td>
          <img src="proses/upload/<?php echo $audit['dokumentasi']; ?>" alt="" style="width:350px;padding:10px">
        </td>
        <td>
          <img src="proses/upload/<?php echo $tangan['dokumentasi']; ?>" alt="" style="width:350px;padding:10px">
          <p style="text-align:left;padding:10px">Keterangan : <?php echo $tangan['keterangan']; ?></p>
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
