<div class="card-body">
  <div class="text-center">
    <h3>Daftar Gangguan / Kerusakan Layanan Jaringan</h3>
  </div>
  <div class="mt-2 my-5 text-center">
    <table width="95%" border="0" align="center" cellpadding="2" cellspacing="1">
      <tr>
        <td colspan="4">&nbsp;</td>
      </tr>
      <tr>
      </tr>
      <?php
      include 'koneksi.php';
      $sql = "SELECT * FROM kerusakan ORDER BY kd_kerusakan";
      $qry = mysqli_query($koneksi, $sql) or die("SQL Error" . mysqli_error($qry));
      $no = 0;
      while ($data = mysqli_fetch_array($qry)) {
        $no++;
      ?>
        <tr bgcolor="#FFFFFF">

          <td>
            <div align="left">
              <div align="left"><?php echo "<h3><em>$data[jenis_kerusakan]</em></h3>"; ?></div>
              <ul>
                <li>
                  <label>Jenis Pemeriksaan :</label>
                  <p><?php echo "$data[definisi]"; ?></p>
                </li>
                <li><label>Solusi :</label>
                  <p><?php echo "$data[solusi]"; ?></p>
                </li>
              </ul>

          </td>
        </tr>
      <?php
      }
      ?>
    </table>
  </div>
</div>