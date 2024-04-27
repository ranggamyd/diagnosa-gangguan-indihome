<div class="form-title">
  <h4>Data Gangguan/Kerusakan dan Solusi Penanganannya</h4>
</div>
<div class="table-responsive" style="padding: 10px 10px;">
<table id="myTable" class="table table-bordered" width="100%">
  <thead>
  <tr>
  	<th ><strong>No.</strong></th>
    <th ><strong>Kode Gangguan</strong></th>
    <th ><strong>Jenis Gangguan</strong></th>
	<th ><strong>Penjelasan</strong></th>
    <th ><strong>Solusi Penanganan</strong></th>
    <th ><strong>Edit</strong></th>
    <th ><strong>Hapus</strong></th>
  </tr>
</thead>
  <tbody>
  <?php
	//include "inc.connect/connect.php";
	//include "../librari/inc.koneksidb.php";
	include "../koneksi.php";
	$sql = "SELECT * FROM kerusakan WHERE kd_kerusakan='".$_GET['kd']."' ORDER BY kd_kerusakan";
	$qry = mysqli_query($koneksi,$sql) or die ("SQL Error".mysqli_error($qry));
	$no=0;
	while ($data = mysqli_fetch_array ($qry)) {
	$no++;
   ?>
  <tr valign="baseline">
 	<td><?php echo $no; ?> </td>
    <td><?php echo $data['kd_kerusakan']; ?></td>
    <td><?php echo $data['jenis_kerusakan']; ?></td>
	<td><?php echo $data['definisi']; ?></td>
    <td><?php echo $data['solusi']; ?></td>
    <td><a title="Edit Gangguan/Kerusakan" href="haladmin.php?top=edkerusakan.php&kdubah=<?php echo $data['kd_kerusakan'];?>"><img src="image/edit.jpeg" width="16" height="16" border="0"></a></td>
    <td><a title="Hapus Gangguan/Kerusakan" style="cursor:pointer;" onclick="return konfirmasi('<?php echo $data['kd_kerusakan'];?>');"><img src="image/hapus.jpeg" width="16" height="16" ></a>
    </td>
  </tr>
  <?php
  } ?>
</tbody>
</table>
</div>
