<?php
include "../koneksi.php";
	$kd_gejala = $_REQUEST['kd_gejala2'];
	$gejala = $_REQUEST['gejala'];
	$sql = "UPDATE gejala SET gejala='$gejala' WHERE kd_gejala='$kd_gejala'";
	$result=mysqli_query($koneksi, $sql)	or die ("SQL Error".mysqli_error($sql));
	if($result){
		echo '<script type="text/javascript">alert("Data Berhasil Diupdate"); setTimeout(function(){ window.location="haladmin.php?top=gejala.php"; }, 1000);</script>';
		}else{
			echo '<script type="text/javascript">alert("Data Gagal Diupdate"); setTimeout(function(){ window.location="haladmin.php?top=gejala.php"; }, 1000);</script>';
		}
?>