<?php
include "koneksi.php";
session_start();
$kode     = $_SESSION['kode'];
$nama     = $_POST['nama'];
$email    = $_POST['email'];
$password = $_POST['password'];
$role     = $_POST['role'];

// echo "$nama - $email - $password - $role";
$update = mysqli_query($connect, "UPDATE `user` SET `nama` = '$nama', `email` = '$email', `password` = '$password', `role` = '$role' WHERE `user`.`id` = '$kode';");
echo "<script>alert('Data Akun Berhasil Diupdate');window.location = '../account.php';</script>";


 ?>
