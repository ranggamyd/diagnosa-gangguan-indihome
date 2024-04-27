<?php 
//include "inc.connect/connect.php";
include "../koneksi.php";
//$kdsakit = $_REQUEST['kdsakit'];
?>
<div class="form-title">
  <h4>Laporan Data Gejala</h4>
</div>
<br>
<p class="text-center">Tampilkan Gejala PerGangguan/Kerusakan </p>
<form class="form-horizontal" name="form1" method="post" action="haladmin.php?top=lapgejala2.php">
	<div class="form-group"> 
  <label for="CmbPenyakit" class="col-sm-2 control-label">Kode Gangguan/Kerusakan</label> 
  <div class="col-sm-9"> 
    <select name="CmbPenyakit" id="CmbPenyakit" class="form-control1">
			<option value="NULL">[ Daftar Gangguan/Kerusakan ]</option>
			<?php 
	$sqlp = "SELECT * FROM kerusakan ORDER BY kd_kerusakan";
	$qryp = mysqli_query($koneksi,$sqlp) 
		    or die ("SQL Error: ".mysqli_error($qryp));
	while ($datap=mysqli_fetch_array($qryp)) {
		if ($datap['kd_kerusakan']==$kdsakit) {
			$cek ="selected";
		}
		else {
			$cek ="";
		}
		echo "<option value='$datap[kd_kerusakan]' $cek>
			  $datap[jenis_kerusakan] ($datap[kd_kerusakan])</option>";
	}
  ?>
</select>
</div>
</div>
  <div class="col-sm-offset-2"> <button type="submit" class="btn btn-default">Tampilkan</button> <button type="reset" class="btn btn-danger">Ulang</button></div> 
</form>
<br>
