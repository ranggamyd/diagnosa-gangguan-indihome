<?php 
include "../koneksi.php";
?>
<html>
<head>
<title>Tampilan Data Gangguan/Karusakan</title>
<link type="text/css" rel="stylesheet" href="../jquery-ui.css">
<script type="text/javascript" src="../jquery-1.10.2.js"></script>
<script type="text/javascript" src="../jquery-ui.js"></script>
<script type="text/ecmascript" src="../jquery.printElement.min.js"></script>
<script type="text/javascript">
$(function() {
    $( "#from" ).datepicker({showOn: "both", buttonImage: "../images/calendar.png", buttonImageOnly: true, nextText: "", prevText: "", changeMonth: true, changeYear: true, dateFormat: "yy-mm-dd"});
	$( "#to" ).datepicker({showOn: "both", buttonImage: "../images/calendar.png", buttonImageOnly: true, nextText: "", prevText: "", changeMonth: true, changeYear: true, dateFormat: "yy-mm-dd"});
  });
function konfirmasi(id_user){
	var kd_hapus=id_user;
	var url_str;
	url_str="hapus_user.php?id_user="+kd_hapus;
	var r=confirm("Yakin ingin menghapus data..?"+kd_hapus);
	if (r==true){   
		window.location=url_str;
		}else{
			//alert("no");
			}
	}
	
	function print_tabel(){
	$("#tabel2").printElement({printMode:'popup'});
	}
</script>
</head>
<body>
<h2 class="art-postheader">Laporan Daftar Pelanggan/Pengguna</h2>
<div class="CSSTableGenerator">
<form name="form1" method="post" enctype="multipart/form-data" action="haladmin.php?top=lapuser.php">
<table align="center"  width="100%">
<tr>
  <td colspan="5">&nbsp;</td>
  </tr>
<tr>
<td width="70">Dari :</td> <td width="219"><input type="text" name="from" id="from"  size="10" placeholder="yyyy-mm-dd" maxlength="10" /></td>
<td width="68">Sampai :</td>
<td width="250"><input type="text" name="to" id="to"  size="10" placeholder="yyyy-mm-dd" maxlength="10" /></td>
<td width="123" valign="top"><input type="submit" name="submit" id="submit" value="Tampil Data"></td>
</tr>
</table></form>
<input type="button" onClick="print_tabel();" value="Cetak Laporan"><a href="print_element.php">Print</a>
<div id="tabel2" name="tabel2">
<table  width="100%" border="0" cellpadding="2" cellspacing="1" bgcolor="#22B5DD">
  <tr bordercolor="#CCFFFF" bgcolor="#DBEAF5"> 
    <td width="29"><div align="center"><strong>No</strong></div></td>
    <td width="147"><div align="center"><b>Nama</b></div></td>
    <td width="166" align="center"><div align="center"><strong>Alamat</strong></div></td>
    <td width="235" align="center"><div align="center"><strong>Jenis Gangguan</strong></div></td>
    <td width="150" align="center"><strong>Tanggal Diagnosa</strong> </td>
  </tr>
  <?php 
  #    <td width="96" align="center"><div align="center	"><strong>Pilih</strong></div></td>
 	 if (isset($_POST['submit'])){
	$tanggal=$_POST["from"];
	$tanggal2=$_POST["to"];
	//$sql = "SELECT * FROM hasil,user WHERE tanggal BETWEEN '$tanggal' AND '$tanggal2'";
	$sql = "SELECT * FROM analisa_hasil,kerusakan WHERE analisa_hasil.kd_kerusakan=kerusakan.kd_kerusakan AND tanggal BETWEEN '$tanggal' AND '$tanggal2' order by analisa_hasil.id";
	$qry = mysqli_query($koneksi,$sql);
	//$sql = "SELECT * FROM analisa_hasil,kerusakan WHERE analisa_hasil.kd_kerusakan=kerusakan.kd_kerusakan order by analisa_hasil.id";
	$qry = mysqli_query($koneksi,$sql)  or die ("SQL Error".mysqli_error($qry));
	$no=0;
	while ($data=mysqli_fetch_array($qry)) {
	$no++;
  ?>
  <tr bgcolor="#FFFFFF"> 
    <td><?php echo $no; ?></td>
    <td><?php echo $data['nama']; ?></td>
    <td><?php echo $data['alamat']; ?></td>
    <td><?php echo $data['jenis_kerusakan']; ?> ( <?php echo $data['kd_kerusakan']; ?> )</td>
    <td><?php echo $data['tanggal']; ?>&nbsp;|<a title="hapus pengguna" style="cursor:pointer;" onClick="return konfirmasi('<?php echo $data['id'];?>')"><img src="image/hapus.jpeg" width="16" height="16" ></a></td>
  </tr>
  <?php
  }}
  ?>
</table></div>
</div>

</body>
</html>
