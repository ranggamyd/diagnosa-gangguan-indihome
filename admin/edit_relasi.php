<div class="form-title">
  <h4>Edit Data Relasi Gejala dengan Jenis Gangguan</h4>
</div>
<br>
<?php
include "../koneksi.php";
$id_relasi = $_GET['id_relasi'];
if ($id_relasi != "") {
  #menampilkan data
  $sql = "SELECT * FROM relasi WHERE id_relasi='$id_relasi'";
  $qry = mysqli_query($koneksi, $sql)
    or die("SQL ERROR" . mysqli_error($qry));
  $data = mysqli_fetch_array($qry);
  #samakan dengan variabel form
  $kd_gejala = $data['kd_gejala'];
  $kd_kerusakan = $data['kd_kerusakan'];
  $bobot = $data['bobot'];
}
?>
<form class="form-horizontal" method="post" action="update_relasi.php" enctype="multipart/form-data">
  <div class="form-group">
    <label for="TxtKdPenyakit" class="col-sm-2 control-label">Kode Gangguan/Kerusakan</label>
    <div class="col-sm-9">
      <input class="form-control" type="text" name="TxtKdPenyakit" value="<?php echo $kd_kerusakan; ?>" disabled="disabled">
      <input name="TxtKdPenyakit" type="hidden" id="TxtKdPenyakit" value="<?php echo $kd_kerusakan; ?>">
      <input name="textrelasi" type="hidden" value="<?php echo $id_relasi ?>" />
    </div>
  </div>
  <div class="form-group">
    <label for="TxtKdGejala" class="col-sm-2 control-label">Gejala</label>
    <div class="col-sm-9">
      <select name="TxtKdGejala" id="TxtKdGejala" class="form-control1">
        <?php
        $sqlp = "SELECT * FROM gejala WHERE kd_gejala = '$kd_gejala'";
        $qryp = mysqli_query($koneksi, $sqlp)
          or die("SQL Error: " . mysqli_error($qry));
        while ($datag = mysqli_fetch_array($qryp)) {
          echo '<option value="' . $datag['kd_gejala'] . '">' . $datag['kd_gejala'] . '&nbsp;|&nbsp;' . $datag['gejala'] . '</option>';
        }
        ?>
        <?php
        $sqlp = "SELECT * FROM gejala ORDER BY kd_gejala";
        $qryg = mysqli_query($koneksi, $sqlp)
          or die("SQL Error: " . mysqli_error($qry));
        while ($datag = mysqli_fetch_array($qryg)) {
          if ($datag['kd_gejala'] == $kdgejala) {
            $cek = "selected";
          } else {
            $cek = "";
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
        <?php
        $sqlp = "SELECT * FROM relasi WHERE id_relasi = '$id_relasi'";
        $qryp = mysqli_query($koneksi, $sqlp)
          or die("SQL Error: " . mysqli_error($qry));
        while ($datab = mysqli_fetch_array($qryp)) {
          echo '<option value="' . $datab['bobot'] . '">' . $datab['bobot'] . '</option>';
        }
        ?>
        <option value="5">5 | Gejala Dominan</option>
        <option value="3">3 | Gejala Sedang</option>
        <option value="1">1 | Gejala Biasa</option>
      </select>
    </div>
  </div>
  <div class="col-sm-offset-2"> <button type="submit" class="btn btn-default">Update</button> <button type="reset" onclick="self.history.back();" class="btn btn-danger">Kembali</button></div>
</form>
<br>