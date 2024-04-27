<script type="text/javascript">
  $(document).ready(function() {
    $("#kd_kerusakan").focus();
  })

  function validasi(form) {
    if (form.kd_kerusakan.value == "") {
      alert("Masukkan Kode Gangguan/Kerusakan..!");
      form.kd_kerusakan.focus();
      return false;
    } else if (form.jenis_kerusakan.value == "") {
      alert("Masukkan Nama Gangguan/Kerusakan..!");
      form.jenis_kerusakan.focus();
      return false;
    } else if (form.definisi.value == "") {
      alert("Masukkan Definisi Gangguan/Kerusakan..!");
      form.definisi.focus();
      return false;
    } else if (form.solusi.value == "") {
      alert("Masukkan Solusi Penanganan Gangguan/Kerusakan..!");
      form.solusi.focus();
      return false
    }
  }

  function konfirmasi(kd_kerusakan) {
    var kd_hapus = kd_kerusakan;
    var url_str;
    url_str = "hpskerusakan.php?kdhapus=" + kd_hapus;
    var r = confirm("Yakin ingin menghapus data " + kd_hapus + "?");
    if (r == true) {
      window.location = url_str;
    } else {
      //alert("no");
    }
  }
</script>
<div class="form-title">
  <h4>Data Gangguan/Kerusakan dan Solusi Penanganannya</h4>
</div>
<br>
<form class="form-horizontal" name="form3" method="post" onSubmit="return validasi(this);" action="simpankerusakan.php">
  <div class="form-group">
    <label for="kd_kerusakan" class="col-sm-2 control-label">Kode Gangguan/Kerusakan</label>
    <div class="col-sm-9">
      <input class="form-control" id="kd_kerusakan" name="kd_kerusakan" type="text" id="kd_kerusakan" size="4" maxlength="4">
    </div>
  </div>
  <div class="form-group">
    <label for="jenis_kerusakan" class="col-sm-2 control-label">Jenis Gangguan/Kerusakan</label>
    <div class="col-sm-9">
      <input class="form-control" id="jenis_kerusakan" type="text" name="jenis_kerusakan" size="40" maxlength="100">
    </div>
  </div>
  <div class="form-group">
    <label for="definisi" class="col-sm-2 control-label">Penjelasan</label>
    <div class="col-sm-9">
      <textarea class="form-control1" name="definisi" id="definisi" rows="2" cols="70"></textarea>
    </div>
  </div>
  <div class="form-group">
    <label for="solusi" class="col-sm-2 control-label">Solusi Penanganannya</label>
    <div class="col-sm-9">
      <textarea class="form-control1" name="solusi" id="solusi" rows="2" cols="70"></textarea>
    </div>
  </div>
  <div class="col-sm-offset-2"> <button type="submit" class="btn btn-default">Input</button> <button type="reset" class="btn btn-danger">Ulang</button></div>
</form>
<hr>
<div class="table-responsive" style="padding: 10px 10px;">
  <table id="myTable" class="table table-bordered" width="100%">
    <thead>
      <tr>
        <th><strong>No.</strong></th>
        <th><strong>Kode Gangguan</strong></th>
        <th><strong>Jenis Gangguan</strong></th>
        <th><strong>Penjelasan</strong></th>
        <th><strong>Solusi Penanganan</strong></th>
        <th><strong>Edit</strong></th>
        <th><strong>Hapus</strong></th>
      </tr>
    </thead>
    <tbody>
      <?php
      //include "inc.connect/connect.php";
      //include "../librari/inc.koneksidb.php";
      include "../koneksi.php";
      $sql = "SELECT * FROM kerusakan ORDER BY kd_kerusakan";
      $qry = mysqli_query($koneksi, $sql) or die("SQL Error" . mysqli_error($qry));
      $no = 0;
      while ($data = mysqli_fetch_array($qry)) {
        $no++;
      ?>
        <tr valign="baseline">
          <td><?php echo $no; ?> </td>
          <td><?php echo $data['kd_kerusakan']; ?></td>
          <td><?php echo $data['jenis_kerusakan']; ?></td>
          <td>
            <?php echo substr($data['definisi'], 0, 100); ?>
            <?php if (strlen($data['definisi']) > 100) : ?>
              <a href="haladmin.php?top=kerusakan_more.php&kd=<?php echo $data['kd_kerusakan']; ?>">
                <strong>Selengkapnya >></strong>
              </a>
            <?php endif ?>
          </td>
          <td>
            <?php echo substr($data['solusi'], 0, 100); ?>
            <?php if (strlen($data['solusi']) > 100) : ?>
              <a href="haladmin.php?top=kerusakan_more.php&kd=<?php echo $data['kd_kerusakan']; ?>">
                <strong>Selengkapnya >></strong>
              </a>
            <?php endif ?>
          </td>
          <td><a title="Edit Gangguan/Kerusakan" href="haladmin.php?top=edkerusakan.php&kdubah=<?php echo $data['kd_kerusakan']; ?>"><img src="image/edit.jpeg" width="16" height="16" border="0"></a></td>
          <td><a title="Hapus Gangguan/Kerusakan" style="cursor:pointer;" onclick="return konfirmasi('<?php echo $data['kd_kerusakan']; ?>');"><img src="image/hapus.jpeg" width="16" height="16"></a>
          </td>
        </tr>
      <?php
      } ?>
    </tbody>
  </table>
</div>