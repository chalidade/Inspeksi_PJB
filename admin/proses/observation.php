<?php
session_start();
include "koneksi.php";
$id   = $_REQUEST['id'];
$page = $_REQUEST['page'];
if ($page == "1") {
    $idobserv = $_SESSION['idobserv'] = rand(10,1000).date('dmY');
    $tgjawab  = $_POST['tgjawab'];
    $tanggal  = $_POST['tanggal'];
    $bidang   = $_POST['bidang'];
    $observ   = mysqli_query($connect, "INSERT INTO `observation` (`id`, `tg_jawab`, `tanggal`, `bidang`, `tglberlaku`, `diminta`, `pekerjaan`, `lokasi`, `dari`, `sampai`, `wo`, `permit`, `checklist`, `pekerja`) VALUES ('$idobserv', '$tgjawab', '$tanggal', '$bidang', '', '', '', '', '', '', '', '', '', '');");
    echo "<script>window.location = '../job_observation.php';</script>";

} else if ($page == "2") {
    $tglberlaku   = $_POST['date'];
    $diminta      = $_POST['diminta'];
    $pekerjaan    = $_POST['pekerjaan'];
    $lokasi       = $_POST['lokasi'];
    $dari         = $_POST['dari'];
    $sampai       = $_POST['sampai'];
    $wo           = $_POST['wo'];
    $perusahaan   = $_POST['perusahaan'];
    $permit       = $_POST['permit'];
    $idobserv     = $_SESSION['idobserv'];
    $update1      = mysqli_query($connect, "UPDATE `observation` SET `tglberlaku` = '$tglberlaku', `diminta` = '$diminta', `pekerjaan` = '$pekerjaan', `lokasi` = '$lokasi', `dari` = '$dari', `sampai` = '$sampai', `wo` = '$wo', `permit` = '$permit' WHERE `observation`.`id` = '$idobserv';");
    echo "<script>window.location = '../checklist_observation.php';</script>";
} else if($page == "3") {
  $_SESSION['tta1']   = $_POST['tta1'];
  $_SESSION['tta2']   = $_POST['tta2'];
  $_SESSION['tta3']   = $_POST['tta3'];
  $_SESSION['tta4']   = $_POST['tta4'];
  $_SESSION['tta5']   = $_POST['tta5'];
  $_SESSION['tta6']   = $_POST['tta6'];
  $_SESSION['tta7']   = $_POST['tta7'];
  $_SESSION['tta8']   = $_POST['tta8'];
  $_SESSION['tta9']   = $_POST['tta9'];
  $_SESSION['tta10']   = $_POST['tta10'];
  $_SESSION['tta11']   = $_POST['tta11'];
  $_SESSION['tta12']   = $_POST['tta12'];
  $_SESSION['tta13']   = $_POST['tta13'];
  $_SESSION['tta14']   = $_POST['tta14'];
  $_SESSION['tta15']   = $_POST['tta15'];
  $_SESSION['tta16']   = $_POST['tta16'];
  $_SESSION['tta17']   = $_POST['tta17'];
  $_SESSION['tta18']   = $_POST['tta18'];
  $_SESSION['tta19']   = $_POST['tta19'];
  $_SESSION['tta20']   = $_POST['tta20'];
  $_SESSION['tta21']   = $_POST['tta21'];
  $_SESSION['tta22']   = $_POST['tta22'];

  $idcheck   = rand(10,1000).date('dmY');
  $idobserv  = $_SESSION['idobserv'];

  $checklist = mysqli_query($connect, "INSERT INTO `checklist_observ` (`id_check`, `tta1`, `tta2`, `tta3`, `tta4`, `tta5`, `tta6`, `tta7`, `tta8`, `tta9`, `tta10`, `tta11`, `tta12`, `tta13`, `tta14`, `tta15`, `tta16`, `tta17`, `tta18`, `tta19`, `tta20`, `tta21`, `tta22`) VALUES ('$idcheck', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');");
  $checkob  = mysqli_query($connect, "UPDATE `observation` SET `checklist` = '$idcheck' WHERE `observation`.`id` = '$idobserv';");

  for ($i=1; $i < 23; $i++) {
    $tta[$i] = $_SESSION['tta'.$i];
    $update =  mysqli_query($connect, "UPDATE `checklist_observ` SET `tta$i` = '$tta[$i]' WHERE `checklist_observ`.`id_check` = '$idcheck';");
  }
  echo "<script>window.location = '../pekerja_observation.php';</script>";
} else if($page == "4") {
  $nama    = $_POST['nama'];
  $skill   = $_POST['skill'];
  $potensi = $_POST['potensi'];
  $terlibat= $_POST['terlibat'];
  $idcheck = rand(10,1000).date('dmY');
  $idobserv     = $_SESSION['idobserv'];

  $update  = mysqli_query($connect, "UPDATE `observation` SET `pekerja` = '$idcheck' WHERE `observation`.`id` = '$idobserv';");

  for ($i=0; $i < 10; $i++) {
    if ($nama[$i] != '') {
      $tes  = mysqli_query($connect, "INSERT INTO `pekerja_observ` (`no`, `nama`, `skill`, `potensi`, `terlibat`, `id_check`) VALUES (NULL, '$nama[$i]', '$skill[$i]', '$potensi[$i]', '$terlibat[$i]', '$idcheck');");
    }
  }
  echo "<script>window.location = '../index.php';</script>";
}
 ?>
