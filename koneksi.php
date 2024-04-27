<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbName = "db_pakar_gangguanindie";
$koneksi = mysqli_connect($host, $user, $pass, $dbName);
// $db=mysqli_select_db($dbName,$koneksi)or die("<center color='red'><strong>" .mysqli_error()."</strong></center>"
// ."<center><font color='red'><strong>Koneksi Gagal...! karena database tidak ada</strong></font></center>");
// if(!$koneksi){
// 		echo"<center><font color='red'><strong>Koneksi Gagal...!</strong></font></center>";
// 	echo"<center><font color='red'><strong>DATABASE $dbName tidak ditemukan...!</strong></font></center>";
// 	}
