<?php 
include('../../conf/config.php');
$id = $_GET['id'];
$nama = $_GET['nama_rapat'];
$ruangan = $_GET['ruangan'];
$tanggal = $_GET['tanggal'];
$jam = $_GET['jam'];
$stat = $_GET['stat'];
$query = mysqli_query($koneksi,"UPDATE tb_rapat SET nama_rapat='$nama', ruangan='$ruangan',jam='$jam',tanggal='$tanggal', stat='$stat' WHERE id='$id'");
header('Location:../index.php?page=data-rapat');
?>