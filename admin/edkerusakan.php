<?php
include "../koneksi.php";
$kdubah = $_GET['kdubah'];
if($kdubah !=""){
	#menampilkan data
	$sql = "SELECT * FROM kerusakan WHERE kd_kerusakan='$kdubah'";
	$qry = mysqli_query ($koneksi, $sql)
			or die ("SQL ERROR".mysqli_error($qry));
	$data = mysqli_fetch_array($qry);
	#samakan dengan variabel form
	$in_id_penyakit = $data['kd_kerusakan'];
	$in_penyakit = $data['jenis_kerusakan'];
	$in_definisi = $data['definisi'];
	$in_solusi = $data['solusi'];
}
?>
<div class="form-title">
  <h4>Edit Gangguan/Kerusakan Layanan</h4>
</div>
<br>
<form class="form-horizontal" id="form1" name="form1" method="post" action="edsimkerusakan.php">
<div class="form-group"> 
  <label for="kd_kerusakan" class="col-sm-2 control-label">Kode Gangguan/Kerusakan</label> 
  <div class="col-sm-9"> 
    <input class="form-control" type="text" value="<?php echo $in_id_penyakit;?>" disabled="disabled">
     <input name="kd_kerusakan" type="hidden" id="kd_kerusakan" value="<?php echo $in_id_penyakit;?>">
  </div> 
</div>
<div class="form-group"> 
  <label for="in_penyakit" class="col-sm-2 control-label">Jenis Kerusakan</label> 
  <div class="col-sm-9"> 
    <input class="form-control" type="text" name="in_penyakit" id="in_penyakit" value="<?php echo $in_penyakit;?>">
  </div> 
</div>
<div class="form-group"> 
  <label for="in_definisi" class="col-sm-2 control-label">Penjelasan</label> 
  <div class="col-sm-9"> 
    <textarea class="form-control1" name="in_definisi" id="in_definisi" cols="45" rows="5"><?php echo $in_definisi;?></textarea>
  </div> 
</div>
<div class="form-group"> 
  <label for="solusi" class="col-sm-2 control-label">Solusi</label> 
  <div class="col-sm-9"> 
    <textarea class="form-control1"name="in_solusi" id="in_solusi" cols="45" rows="5"><?php echo $in_solusi;?></textarea>
  </div> 
</div>
<div class="col-sm-offset-2"> <button type="submit" class="btn btn-default">Update</button> <button type="reset" onclick="self.history.back();" class="btn btn-danger">Kembali</button></div> 
</form>
<br>