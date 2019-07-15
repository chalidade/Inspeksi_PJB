<?php
$data   = $_REQUEST['data'];
include "proses/koneksi.php";
  $no   = 1;
  $data = mysqli_query($connect, "SELECT * FROM `observation` WHERE `id` = '$data' ");
  while ($row=mysqli_fetch_row($data))
    {
      $idcheck      = $row['12'];
      $b            = mysqli_query($connect, "SELECT * FROM `checklist_tambahan` WHERE `id` = '$idcheck'");
      while ($tamba = mysqli_fetch_array($b)) {
      $id_pekerja   = $row[13];
      $permit       = json_decode($row[11]);

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Job Safety Observation</title>
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
    <table border="1" width="100%" align="center" style="text-align:left; font-size:12px; border:solid thin #000; border-collapse: collapse;">
      <tr>
        <th colspan="7" style="background:#d4d4d4;text-align:center;padding-left:10px;">Permintaan Izin Kerja</th>
      </tr>
      <tr>
        <td width="10%">Diminta Oleh</td>
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
        <td colspan="4">:<?php echo $row[10]; ?> </td>
      </tr>
      <tr>
        <td>Dilokasi (Unit Daerah)</td>
        <td>:<?php echo $row[7]; ?></td>
        <td>Perusahaan / Bidang</td>
        <td colspan="4">: <?php echo $row[3]; ?></td>
      </tr>
    </table>
    <table width="100%" border="1" align="center" style="text-align:left; border:solid thin #000;font-size:12px;border-collapse: collapse;">
      <tr>
        <th colspan="8" style="background:#d4d4d4;text-align:center;padding-left:10px;">Working Permit Pekerjaan</th>
      </tr>
      <tr>
        <th width="3%">
          <center>
            <?php if (in_array("Hot Work", $permit)) { ?>
              <input type="checkbox" checked name="" value="">
            <?php } else { ?>
            <input type="checkbox" name="" value="">
          <?php } ?>
          </center>
        </th>
        <th style="width:20%">HOT WORK</th>
        <th width="3%">
          <center>
            <?php if (in_array("Confined Space", $permit)) { ?>
              <input type="checkbox" checked name="" value="">
            <?php } else { ?>
            <input type="checkbox" name="" value="">
          <?php } ?>
          </center>
        </th>
        <th>CONFINED SPACE</th>
        <th width="3%">
          <center>
            <?php if (in_array("Working at Height", $permit)) { ?>
              <input type="checkbox" checked name="" value="">
            <?php } else { ?>
            <input type="checkbox" name="" value="">
          <?php } ?>
          </center>
        </th>
        <th>WORKING AT HEIGHT</th>
        <th width="3%">
          <center>
            <?php if (in_array("Digging", $permit)) { ?>
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
            <?php if (in_array("Isolasi", $permit)) { ?>
              <input type="checkbox" checked name="" value="">
            <?php } else { ?>
            <input type="checkbox" name="" value="">
          <?php } ?>
          </center>
         </th>
        <th>ISOLASI</th>
        <th width="3%">
          <center>
            <?php if (in_array("Vicinity", $permit)) { ?>
              <input type="checkbox" checked name="" value="">
            <?php } else { ?>
            <input type="checkbox" name="" value="">
          <?php } ?>
          </center>
        </th>
        <th>VICINITY</th>
        <th width="3%">
          <center>
            <?php if (in_array("Near & Underwater", $permit)) { ?>
              <input type="checkbox" checked name="" value="">
            <?php } else { ?>
            <input type="checkbox" name="" value="">
          <?php } ?>
          </center>
        </th>
        <th>NEAR & UNDERWATER</th>
        <th width="3%">
          <center>
            <?php if (in_array("Nothing", $permit)) { ?>
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
        <td rowspan="2" style="vertical-align:middle;width:5%">No</td>
        <td rowspan="2" style="vertical-align:middle;width:35%">Aktifitas</td>
        <td colspan="2" style="width:10%">Bidang K3</td>
        <td rowspan="2" style="vertical-align:middle;width:5%">No</td>
        <td rowspan="2" style="vertical-align:middle;width:35%">Aktifitas</td>
        <td colspan="2" style="width:10%">Bidang K3</td>
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
        <td>Jumlah Fire Watch sudah sesuai dengan pekerjaan pada lantai bertingkat
          <br>
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
        <td>
          Checklist pemeriksa penggunaan APD sudah terisi<br>
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
        <td>Diperlukan rambu peringatan bahaya disekitar pekerjaan<br>
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
    <table width="100%" border="1" align="center" style="text-align:left; border:solid thin #000;padding:10px;font-size:12px;border-collapse: collapse;">
      <tr>
        <th style="background:#d4d4d4;text-align:center;padding-left:10px;width:50%">(Pihak Ke 3)</th>
        <th style="background:#d4d4d4;text-align:center;padding-left:10px;width:50%">Rekomendasi Tambahan</th>
      </tr>
      <tr>
        <td style="width:50%">
          <div class="row container">
            <div class="col-6">
              <p style="margin-top:20px">Saya setuju untuk menjaga kondisi area kerja sesuai dengan ijin kerja ini dalam melaksanakan pekerjaan.</p>
              <p style="margin-top:60px">Tanggal & jam :</p>
            </div>
            <div class="col-6">
              <p style="margin-top:130px; text-align:center">(Nama & Ttd)</p>
            </div>
          </div>
        </td>
        <td style="width:50%">
          <p style="padding:10px;"><?php echo $row[15]; ?></p>
        </td>
      </tr>
    </table>
    <table width="100%" border="1" align="center" style="text-align:center; border:solid thin #000;font-size:12px;border-collapse: collapse;">
      <tr>
        <th style="background:#d4d4d4;text-align:center;padding-left:10px; width:50%">Dokumentasi</th>
        <th colspan="8" style="background:#d4d4d4;text-align:center;padding-left:10px;width:50%">Nama Pekerja Yang Terlibat</th>
      </tr>
      <tr>
      <th rowspan="15" style="text-align:center">
        <img src="proses/upload/<?php echo $row[14]; ?>" alt="" style="width:120px;padding:20px">
      </th>
      <th style="text-align:center;vertical-align:middle">No</th>
      <th style="text-align:center;vertical-align:middle">Nama</th>
      <th style="text-align:center;vertical-align:middle">Skill</th>
      <th style="text-align:center;vertical-align:middle">Posisi</th>
      <th style="text-align:center;vertical-align:middle">Ttd</th>
      </tr>
      <tr>
      <?php
        $no = 1;
        $pekerja    = mysqli_query($connect, "SELECT * FROM `pekerja_observ` WHERE `id_check` = '$id_pekerja'");
        while ($dat = mysqli_fetch_row($pekerja)) {
      ?>
        <td style="text-align:center;vertical-align:middle"><?php echo $no;$no++; ?>. </td>
        <td style="vertical-align:middle"><?php echo $dat[1]; ?></td>
        <td style="vertical-align:middle"><?php echo $dat[2]; ?></td>
        <td style="vertical-align:middle"><?php echo $dat[3]; ?></td>
        <td style="vertical-align:middle">
        <?php
        if ($dat[4] == '1') {
          echo "Terlibat";
        } else {
          echo "Tidak Terlibat";
        }
        ?>
      </td>
      </tr>
      <?php
        }
       ?>
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
  </body>
  <script type="text/javascript">
    window.print();
  </script>
</html>
<?php }}} ?>
