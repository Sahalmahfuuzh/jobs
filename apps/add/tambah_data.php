<?php 
include('../../conf/config.php');
$nama = $_GET['nama_rapat'];
$ruangan = $_GET['ruangan'];
$tanggal = $_GET['tanggal'];
$jam = $_GET['jam'];
$stat = $_GET['stat'];


$k = mysqli_query($koneksi,"SELECT * FROM tb_rapat WHERE jam='$jam'");
$cek =mysqli_num_rows($k);

if($cek==0){
    mysqli_query($koneksi,"INSERT INTO tb_rapat (id,nama_rapat,ruangan,jam,tanggal,stat) VALUES('','$nama','$ruangan','$jam','$tanggal','$stat')");
} else {
    echo"Jam Sudah Di Pakai";
}
header('Location:../index.php?page=data-rapat');
?>