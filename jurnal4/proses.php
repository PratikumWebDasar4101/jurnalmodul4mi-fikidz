<?php
session_start();

$gambar = $_FILES['gambar']['name'];
$tmp_gambar = $_FILES['gambar']['tmp_name'];
$dir = "upload/";
$target = $dir.$gambar;

$_SESSION['hobi'] = $_POST['hobi'];
$_SESSION['gambar'] = $target;

if (!move_uploaded_file($tmp_gambar, $target)) {
	die("Upload Gagal!");
}
header("location: hasil.php");
?>