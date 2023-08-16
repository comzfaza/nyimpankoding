<?php
$hostname = "localhost";
$database = "pengaduanmasyarakatdb";
$username = "root";
$password = "";

$koneksi = mysqli_connect($hostname, $username, $password, $database);

$nik = $_POST['nik'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$telp = $_POST['tlp'];

$koneksi->query("INSERT INTO `masyarakat` VALUES ('$nik','$nama','$username','$password','$telp')");
header("location:login.php");
?>