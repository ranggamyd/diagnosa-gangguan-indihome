<?php 
include "../koneksi.php";
?>
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
//function print element
function printDiv(elementId) {
    var a = document.getElementById('printing-css').value;
    var b = document.getElementById(elementId).innerHTML;
    window.frames["print_frame"].document.title = "Cetak Laporan Hasil";
    window.frames["print_frame"].document.body.innerHTML = '<style>' + a + '</style>' + b;
    window.frames["print_frame"].window.focus();
    window.frames["print_frame"].window.print();
}
</script>
<div class="form-title">
  <h4>Laporan Daftar Pengguna</h4>
</div>
<br>
<div class="form-body" data-example-id="simple-form-inline">
<form  class="form-inline" name="form1" method="post" enctype="multipart/form-data" action="haladmin.php?top=lapuser.php">
<div class="form-group"> 
  <label for="from">Dari</label>
  <input type="text" name="from" id="from" class="form-control" size="10" placeholder="yyyy-mm-dd" maxlength="10" />
</div>
<div class="form-group"> 
  <label for="from">Sampai</label>
<input type="text" name="to" id="to" class="form-control" size="10" placeholder="yyyy-mm-dd" maxlength="10" />
</div>
<button type="submit" name="submit" id="submit" class="btn btn-default">Tampil Data</button>
</div>
<div class="table-responsive" style="padding: 10px 10px;">
    <div id="print-area-2" class="print-area">
    <div style="text-align:right;"><a class="no-print btn btn-info" href="javascript:printDiv('print-area-2');">Cetak Laporan</a></div><br>
<table class="table table-bordered" width="100%" border="1" cellpadding="2" cellspacing="1">
  <tr bordercolor="#CCFFFF" bgcolor="#DBEAF5"> 
    <td width="29"><div align="center"><strong>No</strong></div></td>
    <td width="147"><div align="center"><b>Nama</b></div></td>
    <td width="166" align="center"><div align="center"><strong>Alamat</strong></div></td>
    <td width="235" align="center"><div align="center"><strong>Jenis Ganguan/Kerusakan</strong></div></td>
    <td width="150" align="center"><strong>Tanggal Diagnosa</strong> </td>
  </tr>
  <?php 
  #    <td width="96" align="center"><div align="center "><strong>Pilih</strong></div></td>
   if (isset($_POST['submit'])){
  $tanggal=$_POST["from"];
  $tanggal2=$_POST["to"];
  //$sql = "SELECT * FROM analisa_hasil,user WHERE tanggal BETWEEN '$tanggal' AND '$tanggal2'";
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
</table>
<textarea id="printing-css" style="display:none;">html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}body{line-height:1}ol,ul{list-style:none}blockquote,q{quotes:none}blockquote:before,blockquote:after,q:before,q:after{content:'';content:none}table{border-collapse:collapse;border-spacing:0}body{font:normal normal .8125em/1.4 Arial,Sans-Serif;background-color:white;color:#333}strong,b{font-weight:bold}cite,em,i{font-style:italic}a{text-decoration:none}a:hover{text-decoration:underline}a img{border:none}abbr,acronym{border-bottom:1px dotted;cursor:help}sup,sub{vertical-align:baseline;position:relative;top:-.4em;font-size:86%}sub{top:.4em}small{font-size:86%}kbd{font-size:80%;border:1px solid #999;padding:2px 5px;border-bottom-width:2px;border-radius:3px}mark{background-color:#ffce00;color:black}p,blockquote,pre,table,figure,hr,form,ol,ul,dl{margin:1.5em 0}hr{height:1px;border:none;background-color:#666}h1,h2,h3,h4,h5,h6{font-weight:bold;line-height:normal;margin:1.5em 0 0}h1{font-size:200%}h2{font-size:180%}h3{font-size:160%}h4{font-size:140%}h5{font-size:120%}h6{font-size:100%}ol,ul,dl{margin-left:3em}ol{list-style:decimal outside}ul{list-style:disc outside}li{margin:.5em 0}dt{font-weight:bold}dd{margin:0 0 .5em 2em}input,button,select,textarea{font:inherit;font-size:100%;line-height:normal;vertical-align:baseline}textarea{display:block;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}pre,code{font-family:"Courier New",Courier,Monospace;color:inherit}pre{white-space:pre;word-wrap:normal;overflow:auto}blockquote{margin-left:2em;margin-right:2em;border-left:4px solid #ccc;padding-left:1em;font-style:italic}table[border="1"] th,table[border="1"] td,table[border="1"] caption{border:1px solid;padding:.5em 1em;text-align:left;vertical-align:top}th{font-weight:bold}table[border="1"] caption{border:none;font-style:italic}.no-print{display:none}</textarea></form>
<iframe id="printing-frame" name="print_frame" src="about:blank" style="display:none;"></iframe>
</div>