<?php 
include "../koneksi.php";
$kdsakit = $_REQUEST['CmbPenyakit'];
$sqlp = "SELECT * FROM kerusakan WHERE kd_kerusakan='$kdsakit' ";
$qryp = mysqli_query($koneksi,$sqlp);
$datap= mysqli_fetch_array($qryp);
$sakit = $datap['jenis_kerusakan'];
?>
<div class="form-title">
  <h4>Jenis Gangguan/Kerusakan : <?php print_r($_POST['CmbPenyakit']);?></h4>
</div>
<div class="table-responsive" style="padding: 10px 10px;"> 
<table class="table table-bordered" width="100%" width="650" border="0" align="left" cellpadding="2" cellspacing="1" bgcolor="#99CC99">
  <tr> 
    <td colspan="3"><b>Daftar Gejala Gangguan/Kerusakan</b> <br>
      <br></td>
  </tr>
  <tr> 
    <td width="39" align="center"><b>No</b></td>
    <td width="84"><b>Kode</b></td>
    <td width="361"><b>Nama Gejala</b></td>
  </tr>
  <?php 
	$sqlg  = "SELECT gejala.* FROM gejala,relasi ";
	$sqlg .= "WHERE gejala.kd_gejala=relasi.kd_gejala ";
	$sqlg .= "AND  relasi.kd_kerusakan='$kdsakit' ";
	$sqlg .= "ORDER BY gejala.kd_gejala";
	$qryg = mysqli_query($koneksi,$sqlg)or die ("SQL Error".mysqli_error($qryg));
	$no=0;
	while ($datag=mysqli_fetch_array($qryg)) {
	$no++;
  ?>
  <tr bgcolor="#FFFFFF"> 
    <td align="center"><?php echo $no; ?></td>
    <td><?php echo $datag['kd_gejala']; ?></td>
    <td><?php echo $datag['gejala']; ?></td>
  </tr>
  <?php
  }
  ?>
   <tr>
  <td colspan="3"><div align="right"><button type="reset" onclick="self.history.back();" class="btn btn-danger">Kembali</button></div> </td>
</tr>
</table>
</body>
</html>
