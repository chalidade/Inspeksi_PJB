<?php
session_start();
include "koneksi.php";
$id   = $_REQUEST['id'];
$page = $_REQUEST['page'];
if ($page == "1") {
    $idaudit  = $_SESSION['idaudit'] = rand(10,1000).date('dmY');
    $tgjawab  = $_POST['tgjawab'];
    $tanggal  = $_POST['tanggal'];
    $bidang   = $_POST['bidang'];

    // echo "$idaudit - $tgjawab - $tanggal - $bidang";
    $insert = mysqli_query($connect, "INSERT INTO `audit` (`no`, `tgjawab`, `tanggal`, `bidang`, `tglberlaku`, `diminta`, `pekerjaan`, `lokasi`, `dari`, `sampai`, `wo`, `permit`, `checklist`, `dokumentasi`, `tua`, `tuc`, `batas`) VALUES ($idaudit, '$tgjawab', '$tanggal', '$bidang', '', '', '', '', '', '', '', '', '', '', '', '', '');");
    echo "<script>window.location = '../live_audit.php';</script>";
} else if ($page == "2") {
    $berlaku  = $_POST['berlaku'];
    $diminta  = $_POST['diminta'];
    $pekerjaan= $_POST['pekerjaan'];
    $lokasi   = $_POST['lokasi'];
    $dari     = $_POST['dari'];
    $sampai   = $_POST['sampai'];
    $wo       = $_POST['wo'];
    $perusahan= $_POST['perusahaan'];
    $permit   = json_encode($_POST['permit']);
    $idaudit  = $_SESSION['idaudit'];
    $_SESSION['permit']   = $permit;
    $_SESSION['lokasi']   = $lokasi;

    $update1  = mysqli_query($connect, "UPDATE `audit` SET `tglberlaku` = '$berlaku', `diminta` = '$diminta', `pekerjaan` = '$pekerjaan', `lokasi` = '$lokasi', `dari` = '$dari', `sampai` = '$sampai', `wo` = '$wo', `permit` = '$permit' WHERE `audit`.`no` = '$idaudit';");

    echo "<script>window.location = '../checklist_audit.php';</script>";
} else if($page == "3") {
    $_SESSION['audit1']     = $_POST['audit1'];
    $_SESSION['audit2']     = $_POST['audit2'];
    $_SESSION['audit3']     = $_POST['audit3'];
    $_SESSION['audit4']     = $_POST['audit4'];
    $_SESSION['audit5']     = $_POST['audit5'];
    $_SESSION['audit6']     = $_POST['audit6'];
    $_SESSION['audit7']     = $_POST['audit7'];
    $_SESSION['audit8']     = $_POST['audit8'];
    $_SESSION['audit9']     = $_POST['audit9'];
    $_SESSION['audit10']    = $_POST['audit10'];
    $_SESSION['audit11']    = $_POST['audit11'];
    $_SESSION['audit12']    = $_POST['audit12'];
    $_SESSION['audit13']    = $_POST['audit13'];
    $_SESSION['audit14']    = $_POST['audit14'];
    $_SESSION['audit15']    = $_POST['audit15'];
    $_SESSION['audit16']    = $_POST['audit16'];
    $_SESSION['audit17']    = $_POST['audit17'];
    $_SESSION['audit18']    = $_POST['audit18'];

    $idcheck  = rand(10,1000).date('dmY');
    $idaudit  = $_SESSION['idaudit'];
    $lokasi         = json_encode($_POST['lantai']);
    $apd            = json_encode($_POST['apd']);
    $rambu          = json_encode($_POST['rambu']);
    // echo $idcheck." ".$lokasi." ".$apd." ".$rambu." ";
    $check_tambahan = mysqli_query($connect, "INSERT INTO `checklist_tambahan` (`id`, `apd`, `rambu`, `lokasi`) VALUES ('$idcheck', '$apd', '$rambu', '$lokasi');");
    $check    = mysqli_query($connect, "INSERT INTO `checklist_audit` (`id`, `check1`, `check2`, `check3`, `check4`, `check5`, `check6`, `check7`, `check8`, `check9`, `check10`, `check11`, `check12`, `check13`, `check14`, `check15`, `check16`, `check17`, `check18`) VALUES ('$idcheck', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');");

    for ($i=1; $i < 19; $i++) {
      $audit[$i] = $_SESSION['audit'.$i];
      echo $audit[$i];
      $update =  mysqli_query($connect, "UPDATE `checklist_audit` SET `check$i` = '$audit[$i]' WHERE `checklist_audit`.`id` = '$idcheck';");
    }

    $update2 = mysqli_query($connect, "UPDATE `audit` SET `checklist` = '$idcheck' WHERE `audit`.`no` = '$idaudit';");
    echo "<script>window.location = '../dokumentasi_audit.php';</script>";
} else if($page == "4") {
  $idaudit      = $_SESSION['idaudit'];
  $file         = basename($_FILES["file"]["name"]);
  $tua          = $_POST['tua'];
  $tuc          = $_POST['tuc'];
  $batas        = $_POST['batas'];
  $target_dir   = "upload/";
  $target_file  = $target_dir . basename($_FILES["file"]["name"]);
  $uploadOk = 1;
  if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        // echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
    } else {
        // echo "Sorry, there was an error uploading your file.";
    }
    $update = mysqli_query($connect, "UPDATE `audit` SET `dokumentasi` = '$file', `tua` = '$tua', `tuc` = '$tuc', `batas` = '$batas' WHERE `audit`.`no` = '$idaudit';");
    echo "<script>alert('Data Audit Berhasil Ditambahkan');window.location = '../index.php';</script>";
}

?>
