<script type="text/javascript">
  function validasi(form) {
    if (form.gejala.value == "") {
      alert("Masukkan Gejala Gangguan..!");
      form.gejala.focus();
      return false;
    }
    form.submit();
  }
</script>
<div class="form-title">
  <h4>Edit Gejala</h4>
</div>
<br>
<?php
#Baca variabel URL (if register global ON)
//include "connect/config.php";
//include "inc.connect/connect.php" ;
include "../koneksi.php";
$kdubah = $_REQUEST['kdubah'];
if ($kdubah != "") {
  #menampilkan data
  $sql = "SELECT * FROM gejala WHERE kd_gejala='$kdubah'";
  $qry = mysqli_query($koneksi, $sql)
    or die("SQL ERROR" . mysqli_error($qry));
  $data = mysqli_fetch_array($qry);

  #samakan dengan variabel form
  $kd_gejala = $data['kd_gejala'];
  $gejala = $data['gejala'];
}
?>
<form class="form-horizontal" onSubmit="return validasi(this);" method="post" action="edsimgejala.php" target="_self">
  <div class="form-group">
    <label for="kd_gejala" class="col-sm-2 control-label">Kode gejala</label>
    <div class="col-sm-9">
      <input class="form-control" name="kd_gejala" type="text" id="kd_gejala" value="<? echo $kd_gejala; ?>" disabled="disabled">
      <input name="kd_gejala2" type="hidden" id="kd_gejala2" value="<? echo " $kd_gejala"; ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="gejala" class="col-sm-2 control-label">Gejala</label>
    <div class="col-sm-9">
      <textarea class="form-control1" name="gejala" rows="2" cols="40" id="gejala"><? echo "$gejala"; ?></textarea>
    </div>
  </div>
  <div class="col-sm-offset-2"> <button type="submit" class="btn btn-default">Update</button> <button type="reset" onclick="self.history.back();" class="btn btn-danger">Kembali</button></div>
</form>
<br>