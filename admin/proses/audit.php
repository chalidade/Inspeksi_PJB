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
    $insert = mysqli_query($connect, "INSERT INTO `audit` (`no`, `tgjawab`, `tanggal`, `bidang`, `tglberlaku`, `diminta`, `pekerjaan`, `lokasi`, `dari`, `sampai`, `wo`, `permit`, `checklist`) VALUES ($idaudit, '$tgjawab', '$tanggal', '$bidang', '', '', '', '', '', '', '', '', '');");
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
    $permit   = $_POST['permit'];
    $idaudit  = $_SESSION['idaudit'];

    $update1  = mysqli_query($connect, "UPDATE `audit` SET `tglberlaku` = '$berlaku', `diminta` = '$diminta', `pekerjaan` = '$pekerjaan', `lokasi` = '$lokasi', `dari` = '$dari', `sampai` = '$sampai', `wo` = '$wo', `permit` = '$permit' WHERE `audit`.`no` = '$idaudit';");

    // $_SESSION['tglberlaku'] = $_POST['date'];
    // $_SESSION['diminta']    = $_POST['diminta'];
    // $_SESSION['pekerjaan']  = $_POST['pekerjaan'];
    // $_SESSION['lokasi']     = $_POST['lokasi'];
    // $_SESSION['dari']       = $_POST['dari'];
    // $_SESSION['sampai']     = $_POST['sampai'];
    // $_SESSION['wo']         = $_POST['wo'];
    // $_SESSION['perusahaan'] = $_POST['perusahaan'];
    // $_SESSION['permit']     = $_POST['permit'];
    // $_SESSION['permit1']    = $_POST['permit1'];
    // $_SESSION['permit2']    = $_POST['permit2'];
    // $_SESSION['permit3']    = $_POST['permit3'];
    // $_SESSION['permit4']    = $_POST['permit4'];
    // $_SESSION['permit5']    = $_POST['permit5'];
    // $_SESSION['permit6']    = $_POST['permit6'];
    // $_SESSION['permit7']    = $_POST['permit7'];
    // $_SESSION['permit8']    = $_POST['permit8'];

    // echo $_SESSION['tglberlaku']." ".$_SESSION['diminta']." ".$_SESSION['pekerjaan']." ".$_SESSION['lokasi']." ".$_SESSION['dari']." ".$_SESSION['sampai']." ".$_SESSION['wo']." ".$_SESSION['perusahaan']." ".$_SESSION['permit1']." ".$_SESSION['permit2']." ".$_SESSION['permit3']." ".$_SESSION['permit4']." ".$_SESSION['permit5']." ".$_SESSION['permit6']." ".$_SESSION['permit7']." ".$_SESSION['permit8'];
    echo "<script>window.location = '../checklist_audit.php';</script>";
} else if($page == "3") {
    $_SESSION['audit1']   = $_POST['audit1'];
    $_SESSION['audit2']   = $_POST['audit2'];
    $_SESSION['audit3']   = $_POST['audit3'];
    $_SESSION['audit4']   = $_POST['audit4'];
    $_SESSION['audit5']   = $_POST['audit5'];
    $_SESSION['audit6']   = $_POST['audit6'];
    $_SESSION['audit7']   = $_POST['audit7'];
    $_SESSION['audit8']   = $_POST['audit8'];
    $_SESSION['audit9']   = $_POST['audit9'];
    $_SESSION['audit10']   = $_POST['audit10'];
    $_SESSION['audit11']   = $_POST['audit11'];
    $_SESSION['audit12']   = $_POST['audit12'];
    $_SESSION['audit13']   = $_POST['audit13'];
    $_SESSION['audit14']   = $_POST['audit14'];

    $idcheck  = rand(10,1000).date('dmY');
    $idaudit  = $_SESSION['idaudit'];

    $check    = mysqli_query($connect, "INSERT INTO `checklist_audit` (`id`, `check1`, `check2`, `check3`, `check4`, `check5`, `check6`, `check7`, `check8`, `check9`, `check10`, `check11`, `check12`, `check13`, `check14`) VALUES ('$idcheck', '', '', '', '', '', '', '', '', '', '', '', '', '', '');");

    for ($i=1; $i < 15; $i++) {
      $audit[$i] = $_SESSION['audit'.$i];
      $update =  mysqli_query($connect, "UPDATE `checklist_audit` SET `check$i` = '$audit[$i]' WHERE `checklist_audit`.`id` = '$idcheck';");
    }

    $update2 = mysqli_query($connect, "UPDATE `audit` SET `checklist` = '$idcheck' WHERE `audit`.`no` = '$idaudit';");

      echo "<script>alert('Data Audit Berhasil Ditambahkan');window.location = '../index.php';</script>";
}

?>
