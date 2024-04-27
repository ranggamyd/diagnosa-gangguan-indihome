<style type="text/css">
p {text-indent:0pt;}
</style>
<script type="text/javascript">
function konfirmasi(id_relasi){
	var kd_hapus=id_relasi;
	var url_str;
	url_str="hapus_relasi.php?id_relasi="+kd_hapus;
	var r=confirm("Yakin ingin menghapus data..?"+kd_hapus);
	if (r==true){   
		window.location=url_str;
		}else{
			//alert("no");
			}
	}
</script>
<div class="form-title">
  <h4>Data Relasi</h4>
</div>
<br>
<?php
include "../koneksi.php";
?>
<form class="form-horizontal" id="form1" name="form1" method="post" action="relasisim.php" enctype="multipart/form-data">
<div class="form-group"> 
  <label for="TxtKdPenyakit" class="col-sm-2 control-label">Kode Gangguan/Kerusakan</label> 
  <div class="col-sm-9"> 
    <select class="form-control1" name="TxtKdPenyakit" id="TxtKdPenyakit">
          <option value="NULL">[ Jenis Gangguan/Kerusakan ]</option>
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
		echo "<option value='$datap[kd_kerusakan]' $cek>$datap[kd_kerusakan]&nbsp;|&nbsp;$datap[jenis_kerusakan]</option>";
	}
  ?>
        </select>
  </div> 
</div>
<div class="form-group"> 
  <label for="TxtKdGejala" class="col-sm-2 control-label">Gejala</label> 
  <div class="col-sm-9"> 
     <select name="TxtKdGejala" id="TxtKdGejala" class="form-control1">
            <option value="NULL">[ Daftar Gejala]</option>
            <?php 
	$sqlp = "SELECT * FROM gejala ORDER BY kd_gejala";
	$qryg = mysqli_query($koneksi,$sqlp) 
		    or die ("SQL Error: ".mysqli_error($qryg));
	while ($datag=mysqli_fetch_array($qryg)) {
		if ($datag['kd_gejala']==$kdgejala) {
			$cek ="selected";
		}
		else {
			$cek ="";
		}
		echo "<option value='$datag[kd_gejala]' $cek>$datag[kd_gejala]&nbsp;|&nbsp;$datag[gejala]</option>";
	}
  ?>
          </select>
  </div> 
</div>
<div class="form-group"> 
  <label for="definisi" class="col-sm-2 control-label">Bobot</label> 
  <div class="col-sm-9"> 
    <select name="txtbobot" id="txtbobot" class="form-control1">
        <option value="0">[ Bobot Gangguan ]</option>
        <option value="5">5 | Gejala Dominan</option>
        <option value="3">3 | Gejala Sedang</option>
        <option value="1">1 | Gejala Biasa</option>
        </select>
  </div> 
</div>
<div class="col-sm-offset-2"> <button type="submit" class="btn btn-default">Input</button> <button type="reset" class="btn btn-danger">Ulang</button></div> 
</form>


<div class="table-responsive" style="padding: 10px 10px;"> 
<table id="myTable" class="table table-bordered" width="100%">
	 <thead>
            <tr>
                <th>No</th>
                <th>Gejala</th>
                <th><strong>Nama Gangguan/Kerusakan</strong></th>
            </tr>
  </thead>
    <?php
    $query=mysqli_query($koneksi,"SELECT relasi.kd_gejala,relasi.kd_kerusakan,kerusakan.kd_kerusakan,kerusakan.jenis_kerusakan AS penyakit FROM relasi,kerusakan WHERE kerusakan.kd_kerusakan=relasi.kd_kerusakan GROUP BY relasi.kd_kerusakan")or die(mysqli_error($qryp));
	$no=0;
	while($row=mysqli_fetch_array($query)){
	$idpenyakit=$row['kd_kerusakan'];
	$no++;
	?>
	<tbody>
  <tr bgcolor="#FFFFFF" bordercolor="#333333">
    <td valign="top"><?php echo $no;?></td>
    <td valign="top"><?php
    //$query2=mysqli_query("SELECT relasi.kd_gejala,gejala.kd_gejala FROM relasi,gejala WHERE gejala.kd_gejala='$idpenyakit'")or die(mysqli_error($qryp));
	//$query2=mysqli_query("SELECT relasi.kd_gejala FROM relasi WHERE relasi.kd_kerusakan='$idpenyakit'")or die(mysqli_error($qryp));
	$query2=mysqli_query($koneksi,"SELECT relasi.id_relasi,relasi.kd_gejala,relasi.bobot,relasi.kd_kerusakan,gejala.gejala AS namagejala FROM relasi,gejala WHERE relasi.kd_kerusakan='$idpenyakit' AND gejala.kd_gejala=relasi.kd_gejala")or die(mysqli_error($qryp));
	while ($row2=mysqli_fetch_array($query2)){
		$kd_gej=$row2['kd_gejala'];
		$kd_pen=$row2['kd_kerusakan'];
		echo "<table width='600' border='0' cellpadding='4' cellspacing='1' bordercolor='#F0F0F0' bgcolor='#DBEAF5'>";
		echo "<tr bgcolor='#FFFFFF' bordercolor='#333333'>";
		echo "<td width='50'>$row2[kd_gejala]</td>";
		echo "<td width='300'>$row2[namagejala]</td>";
		echo "<td width='50'>$row2[bobot]</td>";
		echo "<td width='20'><a title='Edit Relasi' href='haladmin.php?top=edit_relasi.php&id_relasi=$row2[id_relasi]&kd_kerusakan=$row2[kd_kerusakan]&kd_gejala=$row2[kd_gejala]&bobot=$row2[bobot]'>Edit</a></td>";
		echo "<td width='20'><a title='Hapus Relasi' style='cursor:pointer;' onclick='return konfirmasi($row2[id_relasi])'>Hapus</a></td>";
		echo "</tr>";
		echo "</table>";
		}
	?>    <br /></td>
    <td><?php echo $row['kd_kerusakan'];?>
      &nbsp;|&nbsp;<strong>
      <?php echo $row['penyakit'];?>
      </strong></td>
    </tr><?php } ?>
</tbody>
</table>
</div>