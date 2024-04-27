<script type="text/javascript">
  function validasi(form) {
    if (form.kd_gejala.value == "") {
      alert("Masukkan kode gejala..!");
      form.kd_gejala.focus();
      return false;
    } else if (form.gejala.value == "") {
      alert("Masukkan gejala..!");
      form.gejala.focus();
      return false;
    }
    form.submit();
  }

  function konfirmasi(kd_gejala) {
    var kd_hapus = kd_gejala;
    var url_str;
    url_str = "hpsgejala.php?kdhapus=" + kd_hapus;
    var r = confirm("Yakin ingin menghapus data gejala..?" + kd_hapus);
    if (r == true) {
      window.location = url_str;
    } else {
      //alert("no");
    }
  }
</script>
<div class="form-title">
  <h4>Data Gejala-Gejala</h4>
</div>
<br>
<form class="form-horizontal" onSubmit="return validasi(this);" method="post" action="simpangejala.php">
  <div class="form-group">
    <label for="kd_gejala" class="col-sm-2 control-label">Kode Gejala</label>
    <div class="col-sm-9">
      <input class="form-control" name="kd_gejala" type="text" id="kd_gejala" size="4" maxlength="4">
    </div>
  </div>
  <div class="form-group">
    <label for="gejala" class="col-sm-2 control-label">Gejala</label>
    <div class="col-sm-9">
      <textarea class="form-control1" name="gejala" rows="2" cols="40" id="gejala"></textarea>
    </div>
  </div>
  <div class="col-sm-offset-2"> <button type="submit" class="btn btn-default">Input</button> <button type="reset" class="btn btn-danger">Ulang</button></div>
</form>
<div class="table-responsive" style="padding: 10px 10px;">
  <table id="myTable" class="table table-bordered" width="100%">
    <thead>
      <tr>
        <th>Kode Gejala</th>
        <th>Gejala</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      //include("inc.connect/connect.php");
      include "../koneksi.php";
      $sql = "SELECT * FROM gejala ORDER BY kd_gejala";
      $qry = mysqli_query($koneksi, $sql) or die("SQL Error" . mysqli_error($sql));
      $no = 0;
      while ($data = mysqli_fetch_array($qry)) {
        $no++;
      ?>

        <tr>
          <td><?php echo $data['kd_gejala']; ?></td>
          <td><?php echo $data['gejala']; ?></td>
          <td><a title="Edit Penyakit" href="haladmin.php?top=edgejala.php&kdubah=<? echo $data['kd_gejala'];?>"><img src="image/edit.jpeg" width="16" height="16" border="0"></a><a title="Hapus Gejala" style="cursor:pointer;" onclick="return konfirmasi('<?php echo $data['kd_gejala']; ?>');"><img src="image/hapus.jpeg" width="16" height="16"></a></td>
        </tr>
      <?php
      } ?>
    </tbody>
  </table>
</div>