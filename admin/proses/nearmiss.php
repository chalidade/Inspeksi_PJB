<?php
session_start();
include "koneksi.php";
$id   = $_REQUEST['id'];
$kode = $_REQUEST['kode'];
$page = $_REQUEST['page'];
if ($page == "1") {
    $tgjawab = $_POST['tgjawab'];
    $tanggal = $_POST['tanggal'];
    $bidang  = $_POST['bidang'];
    $idnear  = $_SESSION['idnear'] = rand(10,1000).date('dmY');
    // echo "$tgjawab - $tanggal - $bidang - $idnear";
    $insert   = mysqli_query($connect, "INSERT INTO `nearmiss` (`id`, `tg_jawab`, `tanggal`, `bidang`, `lokasi`, `unit`, `status`, `keterangan`, `dokumentasi`) VALUES ('$idnear', '$tgjawab', '$tanggal', '$bidang', '', '', '', '', '');");
    echo "<script>window.location = '../nearmiss.php';</script>";
} else if ($page == "2") {
    $lokasi     = $_POST['lokasi'];
    $unit       = $_POST['unit'];
    $status     = $_POST['status'];
    $keterangan = $_POST['keterangan'];
    // $dokumentasi= $_POST['dokumentasi'];
    $idnear     = $_SESSION['idnear'];

    $target_dir  = "upload/";
    $dokumentasi = $_FILES["fileToUpload"]["name"];
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if $uploadOk is set to 0 by an error

    if ($uploadOk == 0) {
        // echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        } else {
            // echo "Sorry, there was an error uploading your file.";
        }
    }
    $update = mysqli_query($connect, "UPDATE `nearmiss` SET `lokasi` = '$lokasi', `unit` = '$unit', `status` = '$status', `keterangan` = '$keterangan', `dokumentasi` = '$dokumentasi' WHERE `nearmiss`.`id` = '$idnear';");
    // echo "$lokasi - $unit - $status - $keterangan - $dokumentasi";
    echo "<script>window.location = '../verifikasi_nearmiss.php';</script>";
} else if($id == 'delete') {
  $hapus = mysqli_query($connect, "DELETE FROM `nearmiss` WHERE `nearmiss`.`id` = '$kode'");
  echo "<script>alert('Data Berhasil Di Hapus');window.location = '../data-nearmiss.php';</script>";
} else if($id == 'penanganan') {
  $kode       = $_REQUEST['kode'];
  $keterangan = $_POST['keterangan'];
  $target_dir  = "upload/";
  $dokumentasi = $_FILES["fileToUpload"]["name"];
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  // Check if $uploadOk is set to 0 by an error

  if ($uploadOk == 0) {
      // echo "Sorry, your file was not uploaded.";
      // if everything is ok, try to upload file
  } else {
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
          // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
      } else {
          // echo "Sorry, there was an error uploading your file.";
      }
  }

  $penanganan = mysqli_query($connect, "INSERT INTO `penanganan` (`id_nearmiss`, `dokumentasi`, `keterangan`) VALUES ('$kode', '$dokumentasi', '$keterangan');");
  echo "<script>window.location = '../data-nearmiss.php';</script>";
}
?>
