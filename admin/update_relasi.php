
<?php
include "../koneksi.php";
$id_relasi=$_POST['textrelasi'];
$kd_kerusakan=$_POST['TxtKdPenyakit'];
$kd_gejala=$_POST['TxtKdGejala'];
$bobot=$_POST['txtbobot'];
$query=mysqli_query($koneksi,"UPDATE relasi SET kd_kerusakan='$kd_kerusakan',kd_gejala='$kd_gejala',bobot='$bobot' WHERE id_relasi='$id_relasi'")or die(mysqli_error($query));
if($query){
	echo '<script type="text/javascript">alert("Data Berhasil Diupdate"); setTimeout(function(){ window.location="haladmin.php?top=Relasi.php"; }, 1000);</script>';
	}else{
		echo '<script type="text/javascript">alert("Data Gagal Diupdate"); setTimeout(function(){ window.location="haladmin.php?top=Relasi.php"; }, 1000);</script>';
		}
?>