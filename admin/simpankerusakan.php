<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Simpan Data Gangguan/Kerusakan</title>
<link rel="stylesheet" type="text/css" href="../style.css">
<link href="../Image/icon.png" rel="shortcut icon">
</head>
<body>

</body>
</html>
<?php
//include "inc.connect/connect.php";
include "../koneksi.php";
$kd_kerusakan=$_POST['kd_kerusakan'];
$jenis_kerusakan=$_POST['jenis_kerusakan'];
$definisi=$_POST['definisi'];
$solusi=$_POST['solusi'];
//cek keberadaan data
$sqlrs=mysqli_query($koneksi,"SELECT kd_kerusakan FROM kerusakan WHERE kd_kerusakan='$kd_kerusakan'");
$rs=mysqli_num_rows($sqlrs);
if($rs==0){
	$perintah="INSERT INTO kerusakan(kd_kerusakan,jenis_kerusakan,definisi,solusi)VALUES('$kd_kerusakan','$jenis_kerusakan','$definisi','$solusi')";
	$berhasil=mysqli_query($koneksi,$perintah);
	//jika data berhasil disimpan
	if($berhasil){
		echo"<center>Penyimpanan Berhasil</center><br>";
		echo "<center><a href='../admin/haladmin.php?top=kerusakan.php'>OK</a></center>";
		}else{
		echo"<center><font color='#ff0000'><strong>Penyimpanan Gagal</strong></font></center><br>";
		echo "<center><a href='../admin/haladmin.php?top=kerusakan.php'>Kembali</a></center>";
		}	
	}else{
	echo"<table style='margin-top:150px;' align='center'><tr><td>";
	echo"<div style='width:500px; height:50px auto; border:1px dashed #CCC; color:#F90; padding:3px 3px 3px 3px;'>";
	echo "<center><font>Kode Gangguan/Kerusakan $kd_gejala <strong>Telah ada di database, Masukkan Kode Unik..!</strong></font></center><br>";
	echo "<center><a href='../admin/haladmin.php?top=kerusakan.php'>Kembali</a></center>";
	echo"</div>";
	echo"</td></tr></table>";
	}
?>