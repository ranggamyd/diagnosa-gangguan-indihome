<style type="text/css">
	p {
		padding-left: 2px;
		text-indent: 0px;
	}
</style>
<div class="col-md-12">
	<div class="konten">
		<table width="100%" border="0" bgcolor="#0099FF" cellspacing="1" cellpadding="4" bordercolor="#0099FF">
			<tr bgcolor="#ffffff">
				<td height="32" style="color:#C60;">
					<div style="text-align:center; background-color:#7500EA; color:#ffffff; font-family:Calibri; border-radius:50px 50px; height:25px; margin-bottom:8px;">
						<a style="background-color:#C90;" href="index.php?top=konsultasifm.php"><strong>ULANG DIAGNOSA</strong></a>
						<a style="background-color:#99AB74;" href="index.php?top=pasien_add_fm.php"><strong>BACK HOME</strong></a>Hasil Diagnosa Gangguan/Kerusakan Layanan</div>
				</td>
			</tr>
			<tr bgcolor="#ffffff">
				<td height="32" style="color:#C60;">
					<table width="100%" border="1">
						<tr>
							<td width="27%">
								<div style='border-radius:50px 50px;background-color:#0099FF; padding:2px 2px 2px 5px; color:#ffffff;'><strong>IDENTITAS PELANGGAN/PENGGUNA LAYANAN</strong></div>
								<?php
								include "koneksi.php";
								$query_pasien = mysqli_query($koneksi, "SELECT * FROM tmp_pasien ORDER BY id DESC");
								$data_pasien = mysqli_fetch_array($query_pasien);
								echo "Nama : <br>" . $data_pasien['nama'] . "<br>";
								echo "<hr>Jenis Kelamin :<br> ";
								$lk = $data_pasien['kelamin'];
								if ($lk == "L") {
									echo "Laki-laki";
								} else {
									echo "Perempuan";
								};
								echo "<br>";
								echo "<hr>Merk Printer : <br>" . $data_pasien['merk'] . "<br>";
								echo "<hr>Alamat : <br>" . $data_pasien['alamat'] . "<br>";
								echo "<hr>";
								?>
							</td>
							<td width="73%"> <?php
												include "koneksi.php";
												echo "<div style='border-radius:50px 50px;background-color:#0099FF; padding:2px 2px 2px 5px; color:#ffffff;'><strong>GEJALA YANG DIALAMI</strong></div>";
												$query_gejala_input = mysqli_query($koneksi, "SELECT gejala.gejala AS namagejala,tmp_gejala.kd_gejala FROM gejala,tmp_gejala WHERE tmp_gejala.kd_gejala=gejala.kd_gejala");
												$nogejala = 0;
												while ($row_gejala_input = mysqli_fetch_array($query_gejala_input)) {
													$nogejala++;
													echo "<li style='list-style:none;'><img src='images/checkbox.jpg' width='20' height='20'><strong>" . $row_gejala_input['namagejala'] . "</strong></li>";
												}
												?>
								<p></p>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr bgcolor="#ffffff">
				<td height="32" style="color:#C60;">
					<?php
					include "koneksi.php";
					// kosongkan tabel tmp_kerusakan
					$Nilai_bawah = 0;
					$kosong_tmp_kerusakan = mysqli_query($koneksi, "DELETE FROM tmp_kerusakan");
					echo "<h3 align='center'>PROSES PERHITUNGAN MANUAL CASE BASED REASONING (CBR)</h3><hr>";
					$sqlpenyakit = "SELECT * FROM relasi,kerusakan WHERE relasi.kd_kerusakan=kerusakan.kd_kerusakan  GROUP BY relasi.kd_kerusakan ";
					$querypenyakit = mysqli_query($koneksi, $sqlpenyakit);
					$Similarity = 0;
					echo "<div style='width:700px'>";
					echo "Keterangan : *KL(kasus lama), *KB(kasus baru)<br>";
					while ($rowpenyakit = mysqli_fetch_array($querypenyakit)) {
						// data penyakit di tabel relasi
						echo "<hr>";
						echo "<font color='#FF0000'>" . $rowpenyakit['jenis_kerusakan'] . "|" . $rowpenyakit['kd_kerusakan'] . "</font><br>";
						$kd_pen = $rowpenyakit['kd_kerusakan'];
						//mengambil gejala di tabel relasi
						$query_gejala = mysqli_query($koneksi, "SELECT * FROM relasi WHERE kd_kerusakan='$kd_pen'");
						$var1 = 0;
						$var2 = 0;
						$querySUM = mysqli_query($koneksi, "select sum(bobot)AS jumlahbobot from relasi where kd_kerusakan='$kd_pen'");
						$resSUM = mysqli_fetch_array($querySUM);
						//echo "<strong>Jumlah bobot pada kasus lama</strong> = " .$resSUM['jumlahbobot'] ."<br>";
						echo "SUM bobot pada kasus ini = " . $SUMbobot = (int) $resSUM['jumlahbobot'] . "<br>";
						while ($row_gejala = mysqli_fetch_array($query_gejala)) {
							// kode gejala di tabel relasi
							$kode_gejala_relasi = $row_gejala['kd_gejala'];
							$bobotRelasi = $row_gejala['bobot'];
							// var_dump($bobotRelasi);
							echo "Gejala lama : $kode_gejala_relasi | bobot = " . $bobotRelasi . "<br>";
							echo "<p align='center'>";
							// mencari data di tabel tmp_gejala dan membandingkannya
							$query_tmp_gejala = mysqli_query($koneksi, "SELECT * FROM tmp_gejala WHERE kd_gejala='$kode_gejala_relasi'");
							$row_tmp_gejala = mysqli_fetch_array($query_tmp_gejala);
							//$bobot_TMP=$row_tmp_gejala['bobot'];
							// Mengecek apakah ada data di tabel tmp_gejala
							$adadata = mysqli_num_rows($query_tmp_gejala);
							if ($adadata !== 0) {
								echo "IF (KL = KB) THEN [1xbobot] {[ ";
								//echo " Kode Gejala pada tabel tmp_gejala = ".$row_tmp_gejala['kd_gejala'] ."<br>";
								//$bobotNilai=$bobotRelasi*1; echo "Nilai bobot hasil kali 1 = ".$bobotNilai;
								$bobotNilai = $bobotRelasi * 1;
								// var_dump($bobotNilai);
								$HasilKaliSatu;
								$var1 = (int)$bobotNilai / (int)$SUMbobot;
								echo "$bobotNilai*1 = " . $bobotNilai . "]} / " . $SUMbobot . "=$var1";
							} else {
								echo "IF NOT (KL = xKB) THEN [0xbobot] {[";
								$bobotNilai = $bobotRelasi * 0; //echo "Nilai = ".$bobotNilai;
								$var2 = $bobotNilai + $bobotNilai; //echo "Nilai Jika 0=". $var2;
								echo "$bobotNilai*0 = " . $bobotNilai . "]} / " . $SUMbobot . "=$var2";
							}
							$Nilai_tmp_gejala = $var1 + $var2; //echo "Nilai akhir".$Nilai_tmp_gejala;
							$Nilai_bawah = $Nilai_bawah + $bobotRelasi;
							$Nilai_Pembilang = $Nilai_tmp_gejala;
							$Nilai_Penyebut = $Nilai_bawah;
							// menghasilkan nilai Similarity dengan membagikan $Nilai_Pembilang/$Nilai_Penyebut
							$Similarity = $Nilai_Pembilang / $Nilai_Penyebut;
							//echo "Nilai Similarity (kemiripan) = ". substr($Similarity,0,6);
							// input data ke tabel tmp_kerusakan		
							echo "</p>";
						}
						echo "<hr><p style='border:1px dotted #ffcc99; font-family:'Courier New', Courier, monospace; font-size:9pt;'><em>Similarity (problem case) </em>";
						echo "= <span style='text-decoration:underline;'>S1*W1+S2*W2+..........+Sn*Wn</span><br />";
						echo "<span style='padding-left:220px;'>W1+W2+.....+Wn</span><br />";
						echo "<span style='text-decoration:underline; padding-left:148px'>= " . substr($Nilai_tmp_gejala, 0, 6) . "</span><br />";
						echo "<span style='padding-left:220px;'>$SUMbobot</span><br />";
						echo "<span style='text-decoration:underline; padding-left:148px'>= " . substr($Similarity, 0, 6) . "</span><br />";
						echo "<span>Keterangan :</span><br />";
						echo "<span>S =<em>similarity</em> (nilai kemiripan)</span><br />";
						echo "<span>W =<em>weight</em> (bobot yang diberikan)</span></p>";
						$query_tmp_kerusakan = mysqli_query($koneksi, "INSERT INTO tmp_kerusakan(kd_kerusakan,nilai) VALUES ('$kd_pen','$var1')");
						$nilaiMin = mysqli_query($koneksi, "SELECT kd_kerusakan,MAX(nilai)  AS NilaiAkhir FROM tmp_kerusakan GROUP BY nilai  ORDER BY nilai DESC ");
						//$nilaiMin=mysqli_query($koneksi, "SELECT kd_kerusakan,MIN(nilai)  AS NilaiAkhir FROM tmp_kerusakan");
						$rowMin = mysqli_fetch_array($nilaiMin);
						$rendah = $rowMin['NilaiAkhir'];
						echo substr($rendah, 0, 6);
						//echo "Gejala yang paling dominan adalah : ". $rowMin['NilaiAkhir'];
						//echo "<h3>Hasil Diagnosa : </h3>";
						//echo $rowMin['kd_kerusakan']. "<br>";
						$penyakitakhir = $rowMin['kd_kerusakan'];
						echo "<input type='hidden' value='$rowMin[kd_kerusakan]'>";
						$sql_pilih_penyakit = mysqli_query($koneksi, "SELECT * FROM kerusakan WHERE kd_kerusakan='$penyakitakhir'");
						$row_hasil = mysqli_fetch_array($sql_pilih_penyakit);
						$kd_kerusakan = $row_hasil['kd_kerusakan'];
						$penyakit = $row_hasil['jenis_kerusakan'];
						$keterangan_penyakit = $row_hasil['definisi'];
						$solusi = $row_hasil['solusi'];
					}
					echo "</div>";
					?>
				</td>
			</tr>
			<tr bgcolor="#FFFFFF">
				<td align="center">
					<div style='border-radius:50px 50px;background-color:#0099FF; text-align:center; padding:2px 2px 2px 5px; color:#ffffff;'><strong>HASIL DIAGNOSA</strong></div>
					<?php
					//mencari persen
					$query_nilai = mysqli_query($koneksi, "SELECT SUM(nilai) as nilaiSum FROM tmp_kerusakan");
					$rowSUM = mysqli_fetch_array($query_nilai);
					$nilaiTotal = $rowSUM['nilaiSum'];
					//echo "Nilai Total ". $rowSUM['nilaiSum']. "<br>";
					$query_sum_tmp = mysqli_query($koneksi, "SELECT * FROM tmp_kerusakan WHERE NOT nilai='0' ORDER BY nilai DESC ");
					while ($row_sumtmp = mysqli_fetch_array($query_sum_tmp)) {
						$nilai = $row_sumtmp['nilai'];
						$nilai_persen = $nilai / $nilaiTotal * 100;
						$data_persen = $nilai_persen;
						$persen = substr($data_persen, 0, 5);
						//echo "Nilai persen : ".$persen. "%<br>";
						$kd_pen2 = $row_sumtmp['kd_kerusakan'];
						//echo $kd_pen2 ."<br>";
						//echo $kd_pen2. "<br>";
						$query_penyasol = mysqli_query($koneksi, "SELECT * FROM kerusakan WHERE kd_kerusakan='$kd_pen2'");
						while ($row_penyasol = mysqli_fetch_array($query_penyasol)) {
							// jika hasil diagnosa 100%
							if ($persen == 100 || $persen >= 70) {
								echo "<strong>Jaringan Mengalami Gangguan/Kerusakan [" . $row_penyasol['kd_kerusakan'] . "]" . $row_penyasol['jenis_kerusakan'] . "</strong><br>";
								echo "<p>" . $row_penyasol['definisi'] . "</p>";
								echo "<p>" . "<strong>Solusi Perbaikan/Penanganannya :</strong> " . $row_penyasol['solusi'] . "</p><hr>";
								// simpan hasil
								$query_temp = mysqli_query($koneksi, "SELECT * FROM tmp_pasien ORDER BY id DESC");
								$row_pasien = mysqli_fetch_array($query_temp);
								$nama = $row_pasien['nama'];
								$kelamin = $row_pasien['kelamin'];
								$merk = $row_pasien['merk'];
								$alamat = $row_pasien['alamat'];
								$tanggal = $row_pasien['tanggal'];
								$kode_penyakit = $row_sumtmp['kd_kerusakan'];
								//echo $kode_penyakit ."100%";
								$query_hasil = "INSERT INTO analisa_hasil(nama,kelamin,merk,alamat,kd_kerusakan,tanggal) VALUES ('$nama','$kelamin','$merk','$alamat','$kode_penyakit','$tanggal')";
								$res_hasil = mysqli_query($koneksi, $query_hasil);
								if ($res_hasil) {
									echo "";
								} else {
									echo "<font color='#FF0000'>Data tidak dapat disimpan..!</font><br>";
								}
								//#end simpan
							} else {
								echo "<strong>Jaringan Mengalami Gangguan/Kerusakan [" . $row_penyasol['kd_kerusakan'] . "]&nbsp;" . $row_penyasol['jenis_kerusakan'] . " Sebesar " . $persen . "%" . "</strong><br>";
								echo "<p>" . $row_penyasol['definisi'] . "</p>";
								echo "<p>" . "<strong>Solusi Perbaikan/Penanganannya :</strong> " . $row_penyasol['solusi'] . "</p><hr>";
								// simpan data
								$query_temp = mysqli_query($koneksi, "SELECT * FROM tmp_pasien ORDER BY id DESC");
								$row_pasien = mysqli_fetch_array($query_temp);
								$nama = $row_pasien['nama'];
								$kelamin = $row_pasien['kelamin'];
								$merk = $row_pasien['merk'];
								$alamat = $row_pasien['alamat'];
								$tanggal = $row_pasien['tanggal'];
								$kode_penyakit = $row_sumtmp['kd_kerusakan'];
								$query_hasil2 = "INSERT INTO analisa_hasil(nama,kelamin,merk,alamat,kd_kerusakan,tanggal) VALUES ('$nama','$kelamin','$merk','$alamat','$kode_penyakit','$tanggal')";
								$res_hasil2 = mysqli_query($koneksi, $query_hasil2);
								if ($res_hasil2) {
									echo "";
								} else {
									echo "<font color='#FF0000'>Data tidak dapat disimpan..!</font><br>";
								}
							}
						}
					}
					?>
				</td>
			</tr>
			<tr bgcolor="#FFFFFF">
				<td><a href="index.php?top=pasien_add_fm.php"><strong>&laquo;&laquo;Kembali</strong></a>
				</td>
			</tr>
		</table>
	</div>
</div>