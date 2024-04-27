<?php
//include "connect/config.php";
//include_once('index.php');
include "../koneksi.php" ;
$kd_kerusakan=$_POST['kd_kerusakan'];
$penyakit=$_POST['in_penyakit'];
$definisi=$_POST['in_definisi'];
$solusi =$_POST['in_solusi'];
$sql = "UPDATE kerusakan SET jenis_kerusakan='$penyakit',definisi='$definisi', solusi='$solusi' WHERE kd_kerusakan='$kd_kerusakan'";
$result=mysqli_query($koneksi,$sql)or die ("SQL Error".mysqli_error($sql));
if($result){
	echo '<script type="text/javascript">alert("Data Berhasil Diupdate"); setTimeout(function(){ window.location="haladmin.php?top=kerusakan.php"; }, 1000);</script>';
	}else{
		echo '<script type="text/javascript">alert("Data Gagal Diupdate"); setTimeout(function(){ window.location="haladmin.php?top=kerusakan.php"; }, 1000);</script>';
		}
?>