<?php
$data   = $_REQUEST['data'];
include "proses/koneksi.php";
  $no   = 1;
  $data = mysqli_query($connect, "SELECT * FROM `observation` WHERE `id` = '$data' ");
  while ($row=mysqli_fetch_row($data))
    {
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Job Safety Observation</title>
    <style media="screen">
      td {vertical-align:top;}

    </style>
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
        <td>: <?php echo date("d M Y", strtotime($row[4])); ?></td>
      </tr>
      <tr>
        <td style="text-align:center">FORMULIR</td>
        <td>Revisi</td>
        <td>: 00</td>
      </tr>
      <tr>
        <td style="text-align:center">JOB SAFETY OBSERVATION</td>
        <td>Halaman</td>
        <td>: 1 dari 1</td>
      </tr>
    </table>
    <table border="1" width="100%" align="center" style="text-align:left; font-size:12px; border:solid thin #000;border-top:none;border-collapse: collapse;">
      <tr>
        <th colspan="7" style="background:#d4d4d4;text-align:center;padding-left:10px;"><h3>Permintaan Izin Kerja</h3></th>
      </tr>
      <tr>
        <td width="15%">Diminta Oleh</td>
        <td width="40%">: <?php echo $row[5]; ?></td>
        <td width="15%">Rencana Pekerjaan</td>
        <td width="5%">: Tgl</td>
        <td width="10%">:<?php echo date("d M Y", strtotime($row[8])); ?></td>
        <td width="5%">s/d Tgl</td>
        <td width="15%">:<?php echo date("d M Y", strtotime($row[9])); ?></td>
      </tr>
      <tr>
        <td>Untuk Melaksanakan</td>
        <td>:<?php echo $row[6]; ?></td>
        <td>Nomor WO</td>
        <td colspan="3">:<?php echo $row[10]; ?> </td>
      </tr>
      <tr>
        <td>Dilokasi (Unit Daerah)</td>
        <td>:<?php echo $row[7]; ?></td>
        <td>Perusahaan / Bidang</td>
        <td colspan="3">: <?php echo $row[3]; ?></td>
      </tr>
    </table>
    <table width="100%" border="1" align="center" style="text-align:left; border:solid thin #000;font-size:12px;border-collapse: collapse;border-top:none;">
      <tr>
        <th colspan="8" style="background:#d4d4d4;text-align:center;padding-left:10px;"><h3>Working Permit Pekerjaan</h3></th>
      </tr>
      <tr>
        <th width="3%">
          <center>
            <?php if ($row['11'] == "Hot Work") { ?>
              <input type="checkbox" checked name="" value="">
            <?php } else { ?>
            <input type="checkbox" name="" value="">
          <?php } ?>
          </center>
        </th>
        <th>HOT WORK</th>
        <th width="3%">
          <center>
            <?php if ($row['11'] == "Confined Space") { ?>
              <input type="checkbox" checked name="" value="">
            <?php } else { ?>
            <input type="checkbox" name="" value="">
          <?php } ?>
          </center>
        </th>
        <th>CONFINED SPACE</th>
        <th width="3%">
          <center>
            <?php if ($row['11'] == "Working at Height") { ?>
              <input type="checkbox" checked name="" value="">
            <?php } else { ?>
            <input type="checkbox" name="" value="">
          <?php } ?>
          </center>
        </th>
        <th>WORKING AT HEIGHT</th>
        <th width="3%">
          <center>
            <?php if ($row['11'] == "Digging") { ?>
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
            <?php if ($row['11'] == "Isolasi") { ?>
              <input type="checkbox" checked name="" value="">
            <?php } else { ?>
            <input type="checkbox" name="" value="">
          <?php } ?>
          </center>
         </th>
        <th>ISOLASI</th>
        <th width="3%">
          <center>
            <?php if ($row['11'] == "Vicinity") { ?>
              <input type="checkbox" checked name="" value="">
            <?php } else { ?>
            <input type="checkbox" name="" value="">
          <?php } ?>
          </center>
        </th>
        <th>VICINITY</th>
        <th width="3%">
          <center>
            <?php if ($row['11'] == "Near & Underwater") { ?>
              <input type="checkbox" checked name="" value="">
            <?php } else { ?>
            <input type="checkbox" name="" value="">
          <?php } ?>
          </center>
        </th>
        <th>NEAR & UNDERWATER</th>
        <th width="3%">
          <center>
            <?php if ($row['11'] == "Nothing") { ?>
              <input type="checkbox" checked name="" value="">
            <?php } else { ?>
            <input type="checkbox" name="" value="">
          <?php } ?>
          </center>
        </th>
        <th>NOTHING</th>
      </tr>
    </table>
    <table width="100%" border="1" align="center" style="text-align:left; border:solid thin #000;padding:10px;font-size:12px;border-top:none;border-collapse: collapse;">
      <tr>
        <th colspan="8" style="background:#d4d4d4;text-align:center;padding-left:10px;"><h3>Daftar Periksa dan Paraf Pemeriksa (Diisi oleh Bidang K3)</h3></th>
      </tr>
      <tr style="text-align:center">
        <td rowspan="2" style="vertical-align:middle">No</td>
        <td rowspan="2" style="vertical-align:middle">Aktifitas</td>
        <td colspan="2">Bidang K3</td>
        <td rowspan="2" style="vertical-align:middle">No</td>
        <td rowspan="2" style="vertical-align:middle">Aktifitas</td>
        <td colspan="2">Bidang K3</td>
      </tr>
      <tr style="text-align:center">
        <td>Yes</td>
        <td>N/A</td>
        <td>Yes</td>
        <td>N/A</td>
      </tr>
      <?php
      $idcheck = $row['12'];
      $data1 = mysqli_query($connect, "SELECT * FROM `checklist_observ` WHERE `id_check` = '$idcheck' ");
      while ($row1=mysqli_fetch_row($data1))
        {
       ?>
      <tr>
        <td style="text-align:center">1. </td>
        <td>JSA Sudah ada dan terisi</td>
        <td style="text-align:center">
        <?php
        if($row1['1'] == 1) { ?>
          <input type="checkbox" checked>
        <?php } else { ?>
          <input type="checkbox">
        <?php } ?>
        </td>
        <td style="text-align:center">
        <?php
        if($row1['1'] == 1) { ?>
          <input type="checkbox">
        <?php } else { ?>
          <input type="checkbox" checked>
        <?php } ?>
        </td>
        <td>12. </td>
        <td>Diperlukan emergency tools / fire truck</td>
        <td style="text-align:center">
        <?php
        if($row1['12'] == 1) { ?>
          <input type="checkbox" checked>
        <?php } else { ?>
          <input type="checkbox">
        <?php } ?>
        </td>
        <td style="text-align:center">
        <?php
        if($row1['12'] == 1) { ?>
          <input type="checkbox">
        <?php } else { ?>
          <input type="checkbox" checked>
        <?php } ?>
        </td>
      </tr>
      <tr>
        <td style="text-align:center">2. </td>
        <td>Tersedia checklist pekerjaan yang dikerjakan</td>
        <td style="text-align:center">
        <?php
        if($row1['2'] == 1) { ?>
          <input type="checkbox" checked>
        <?php } else { ?>
          <input type="checkbox">
        <?php } ?>
        </td>
        <td style="text-align:center">
        <?php
        if($row1['2'] == 1) { ?>
          <input type="checkbox">
        <?php } else { ?>
          <input type="checkbox" checked>
        <?php } ?>
        </td>
        <td>13. </td>
        <td>Dibutuhkan penerangan tambahan di area kerja jika kurang memadai</td>
        <td style="text-align:center">
        <?php
        if($row1['13'] == 1) { ?>
          <input type="checkbox" checked>
        <?php } else { ?>
          <input type="checkbox">
        <?php } ?>
        </td>
        <td style="text-align:center">
        <?php
        if($row1['13'] == 1) { ?>
          <input type="checkbox">
        <?php } else { ?>
          <input type="checkbox" checked>
        <?php } ?>
        </td>
      </tr>
      <tr>
        <td style="text-align:center">3. </td>
        <td>Surat penunjukan pengawas sudah ada dan terisi</td>
        <td style="text-align:center">
        <?php
        if($row1['3'] == 1) { ?>
          <input type="checkbox" checked>
        <?php } else { ?>
          <input type="checkbox">
        <?php } ?>
        </td>
        <td style="text-align:center">
        <?php
        if($row1['3'] == 1) { ?>
          <input type="checkbox">
        <?php } else { ?>
          <input type="checkbox" checked>
        <?php } ?>
        </td>
        <td>14. </td>
        <td>Lingkungan kerja aman, bebas dari bahaya pekerjaan lainya </td>
        <td style="text-align:center">
        <?php
        if($row1['14'] == 1) { ?>
          <input type="checkbox" checked>
        <?php } else { ?>
          <input type="checkbox">
        <?php } ?>
        </td>
        <td style="text-align:center">
        <?php
        if($row1['14'] == 1) { ?>
          <input type="checkbox">
        <?php } else { ?>
          <input type="checkbox" checked>
        <?php } ?>
        </td>
      </tr>
      <tr>
        <td style="text-align:center">4. </td>
        <td>Surat penunjukan pelaksana pekerjaan sudah ada dan terisi</td>
        <td style="text-align:center">
        <?php
        if($row1['4'] == 1) { ?>
          <input type="checkbox" checked>
        <?php } else { ?>
          <input type="checkbox">
        <?php } ?>
        </td>
        <td style="text-align:center">
        <?php
        if($row1['4'] == 1) { ?>
          <input type="checkbox">
        <?php } else { ?>
          <input type="checkbox" checked>
        <?php } ?>
        </td>
        <td>15. </td>
        <td>Sirkulasi udara di sekitar pekerjaan memadai </td>
        <td style="text-align:center">
        <?php
        if($row1['15'] == 1) { ?>
          <input type="checkbox" checked>
        <?php } else { ?>
          <input type="checkbox">
        <?php } ?>
        </td>
        <td style="text-align:center">
        <?php
        if($row1['15'] == 1) { ?>
          <input type="checkbox">
        <?php } else { ?>
          <input type="checkbox" checked>
        <?php } ?>
        </td>
      </tr>
      <tr>
        <td style="text-align:center">5. </td>
        <td>Checklist daftar dan kondisi APD sudah terisi dan sesuai</td>
        <td style="text-align:center">
        <?php
        if($row1['5'] == 1) { ?>
          <input type="checkbox" checked>
        <?php } else { ?>
          <input type="checkbox">
        <?php } ?>
        </td>
        <td style="text-align:center">
        <?php
        if($row1['5'] == 1) { ?>
          <input type="checkbox">
        <?php } else { ?>
          <input type="checkbox" checked>
        <?php } ?>
        </td>
        <td>16. </td>
        <td>System peralatan unit diamankan dari pekerjaan yang berlangsung </td>
        <td style="text-align:center">
        <?php
        if($row1['16'] == 1) { ?>
          <input type="checkbox" checked>
        <?php } else { ?>
          <input type="checkbox">
        <?php } ?>
        </td>
        <td style="text-align:center">
        <?php
        if($row1['16'] == 1) { ?>
          <input type="checkbox">
        <?php } else { ?>
          <input type="checkbox" checked>
        <?php } ?>
        </td>
      </tr>
      <tr>
        <td style="text-align:center">6. </td>
        <td>Checklist kondisi peralatan pekerjaan sudah terisi dan sesuai</td>
        <td style="text-align:center">
        <?php
        if($row1['6'] == 1) { ?>
          <input type="checkbox" checked>
        <?php } else { ?>
          <input type="checkbox">
        <?php } ?>
        </td>
        <td style="text-align:center">
        <?php
        if($row1['6'] == 1) { ?>
          <input type="checkbox">
        <?php } else { ?>
          <input type="checkbox" checked>
        <?php } ?>
        </td>
        <td>17. </td>
        <td>Tersedia surat penunjukan Fire Watch yang sudah terisi </td>
        <td style="text-align:center">
        <?php
        if($row1['17'] == 1) { ?>
          <input type="checkbox" checked>
        <?php } else { ?>
          <input type="checkbox">
        <?php } ?>
        </td>
        <td style="text-align:center">
        <?php
        if($row1['17'] == 1) { ?>
          <input type="checkbox">
        <?php } else { ?>
          <input type="checkbox" checked>
        <?php } ?>
        </td>
      </tr>
      <tr>
        <td style="text-align:center">7. </td>
        <td>Checklist daftar kesiapan / kondisi pelaksana pekerjaan sudah terisi</td>
        <td style="text-align:center">
        <?php
        if($row1['7'] == 1) { ?>
          <input type="checkbox" checked>
        <?php } else { ?>
          <input type="checkbox">
        <?php } ?>
        </td>
        <td style="text-align:center">
        <?php
        if($row1['7'] == 1) { ?>
          <input type="checkbox">
        <?php } else { ?>
          <input type="checkbox" checked>
        <?php } ?>
        </td>
        <td>18. </td>
        <td>Jumlah Fire Watch sudah sesuai dengan pekerjaan pada lantai bertingkat </td>
        <td style="text-align:center">
        <?php
        if($row1['18'] == 1) { ?>
          <input type="checkbox" checked>
        <?php } else { ?>
          <input type="checkbox">
        <?php } ?>
        </td>
        <td style="text-align:center">
        <?php
        if($row1['18'] == 1) { ?>
          <input type="checkbox">
        <?php } else { ?>
          <input type="checkbox" checked>
        <?php } ?>
        </td>
      </tr>
      <tr>
        <td style="text-align:center">8. </td>
        <td>Checklist pemeriksa penggunaan APD sudah terisi</td>
        <td style="text-align:center">
        <?php
        if($row1['8'] == 1) { ?>
          <input type="checkbox" checked>
        <?php } else { ?>
          <input type="checkbox">
        <?php } ?>
        </td>
        <td style="text-align:center">
        <?php
        if($row1['8'] == 1) { ?>
          <input type="checkbox">
        <?php } else { ?>
          <input type="checkbox" checked>
        <?php } ?>
        </td>
        <td>19. </td>
        <td>Terdapat Fire Watch Log </td>
        <td style="text-align:center">
        <?php
        if($row1['19'] == 1) { ?>
          <input type="checkbox" checked>
        <?php } else { ?>
          <input type="checkbox">
        <?php } ?>
        </td>
        <td style="text-align:center">
        <?php
        if($row1['19'] == 1) { ?>
          <input type="checkbox">
        <?php } else { ?>
          <input type="checkbox" checked>
        <?php } ?>
        </td>
      </tr>
      <tr>
        <td style="text-align:center">9. </td>
        <td>Permit sudah distujui oleh CP dan sesuai pekerjaan</td>
        <td style="text-align:center">
        <?php
        if($row1['9'] == 1) { ?>
          <input type="checkbox" checked>
        <?php } else { ?>
          <input type="checkbox">
        <?php } ?>
        </td>
        <td style="text-align:center">
        <?php
        if($row1['9'] == 1) { ?>
          <input type="checkbox">
        <?php } else { ?>
          <input type="checkbox" checked>
        <?php } ?>
        </td>
        <td>20. </td>
        <td>Tersedia impairment permit sesuai dengan FPE di sekitar </td>
        <td style="text-align:center">
        <?php
        if($row1['20'] == 1) { ?>
          <input type="checkbox" checked>
        <?php } else { ?>
          <input type="checkbox">
        <?php } ?>
        </td>
        <td style="text-align:center">
        <?php
        if($row1['20'] == 1) { ?>
          <input type="checkbox">
        <?php } else { ?>
          <input type="checkbox" checked>
        <?php } ?>
        </td>
      </tr>
      <tr>
        <td style="text-align:center">10. </td>
        <td>Diperlukan standby first aider / standby person tambahan</td>
        <td style="text-align:center">
        <?php
        if($row1['10'] == 1) { ?>
          <input type="checkbox" checked>
        <?php } else { ?>
          <input type="checkbox">
        <?php } ?>
        </td>
        <td style="text-align:center">
        <?php
        if($row1['10'] == 1) { ?>
          <input type="checkbox">
        <?php } else { ?>
          <input type="checkbox" checked>
        <?php } ?>
        </td>
        <td>21. </td>
        <td>Terdapat surat dari management untuk pekerjaan diatas jam normal </td>
        <td style="text-align:center">
        <?php
        if($row1['21'] == 1) { ?>
          <input type="checkbox" checked>
        <?php } else { ?>
          <input type="checkbox">
        <?php } ?>
        </td>
        <td style="text-align:center">
        <?php
        if($row1['21'] == 1) { ?>
          <input type="checkbox">
        <?php } else { ?>
          <input type="checkbox" checked>
        <?php } ?>
        </td>
      </tr>
      <tr>
        <td style="text-align:center">11. </td>
        <td>Diperlukan rambu peringatan bahaya disekitar pekerjaan</td>
        <td style="text-align:center">
        <?php
        if($row1['11'] == 1) { ?>
          <input type="checkbox" checked>
        <?php } else { ?>
          <input type="checkbox">
        <?php } ?>
        </td>
        <td style="text-align:center">
        <?php
        if($row1['11'] == 1) { ?>
          <input type="checkbox">
        <?php } else { ?>
          <input type="checkbox" checked>
        <?php } ?>
        </td>
        <td>22. </td>
        <td>Sudah dilakukan On Spot Induction </td>
        <td style="text-align:center">
        <?php
        if($row1['22'] == 1) { ?>
          <input type="checkbox" checked>
        <?php } else { ?>
          <input type="checkbox">
        <?php } ?>
        </td>
        <td style="text-align:center">
        <?php
        if($row1['22'] == 1) { ?>
          <input type="checkbox">
        <?php } else { ?>
          <input type="checkbox" checked>
        <?php } ?>
        </td>
      </tr>
    </table>

    <table width="100%" border="1" align="center" style="text-align:center; border:solid thin #000;font-size:12px;border-collapse: collapse;border-top:none;">
      <tr>
        <th colspan="8" style="background:#d4d4d4;text-align:center;padding-left:10px;"><h3>Daftar Periksa dan Paraf Pemeriksa (Diisi oleh Bidang K3)</h3></th>
      </tr>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Skill / Posisi</th>
        <th>Ttd</th>
        <th>No</th>
        <th>Nama</th>
        <th>Skill / Posisi</th>
        <th>Ttd</th>
      </tr>
      <tr>
        <td style="text-align:center">1. </td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>6. </td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td style="text-align:center">1. </td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>6. </td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td style="text-align:center">2. </td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>7. </td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td style="text-align:center">3. </td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>8. </td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td style="text-align:center">4. </td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>9. </td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td style="text-align:center">5. </td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>10. </td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table>
    <center>
    <a href="acc_observation.php"><button type="button" name="button" style="margin-top:20px;border:solid thin #ed2c2f;padding:10px;background:#ed2c2f;color:#fff;width:60%">Kembali</button></a></center>
  </body>
</html>
<?php }} ?>
