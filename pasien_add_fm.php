<div class="card-body text-center">
  <div class="text-center">
    <h3><img src="images/postheadericon.png" width="28" height="27" alt="" />Registrasi Pelanggan Layanan (Pengguna)</h3>
  </div>
  <script type="text/javascript">
    function validasi(form) {
      if (form.TxtNama.value == "") {
        alert("Masukkan nama !");
        form.TxtNama.focus();
        return false;
      } else if (form.cbojk.value == 0) {
        alert("Masukkan jenis kelamin !");
        form.cbojk.focus();
        return false;
      } else if (form.umur.value == "") {
        alert("Masukkan umur anda !");
        form.TxtUmur.focus();
        return false;
      } else if (form.TxtAlamat.value == "") {
        alert("Masukkan alamat anda !");
        form.TxtAlamat.focus();
        return false;
      } else if (form.textemail.value == "") {
        alert("Masukkan email !");
        form.textemail.focus();
        return false;
      }
      form.submit();
    }
  </script>
  <div class="border border-dark py-4 my-5 px-5">
    <h2>MASUKAN DATA ACCOUNT PELANGGAN ANDA</h2>
    <form onSubmit="return validasi(this)" method="post" name="form1" target="_self" action="?top=pasienaddsim.php">
      <div class="form-group row">
        <label for="TxtNama" class="col-sm-3 col-form-label">Nama Lengkap</label>
        <div class="col-sm-6">
          <input type="text" name="TxtNama" class="form-control" id="TxtNama" maxlength="30" required="">
        </div>
      </div>
      <div class="form-group row">
        <label for="cbojk" class="col-sm-3 col-form-label">Jenis Kelamin</label>
        <div class="col-sm-6">
          <select class="browser-default custom-select" name="cbojk" id="cbojk">
            <option value="0" selected="selected">- Jenis Kelamin -</option>
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <label for="merk" class="col-sm-3 col-form-label">Tipe Paket Pelanggan</label>
        <div class="col-sm-6">
          <select class="browser-default custom-select" name="merk" id="merk">
            <option value="0">- Paket Langanan -</option>
            <option value="Learning From Home">Learning From Home</option>
            <option value="Khusus Guru">Khusus Guru</option>
            <option value="Berkah Dari Rumah">Berkah Dari Rumah</option>
            <option value="Prestige">Prestige</option>
            <option value="Gamer">Gamer</option>
            <option value="Bundling Cloude Storage">Bundling Cloud Storage</option>
            <option value="Bundling Smart Camera">Bundling Smart Camera</option>
            <option value="BUMN">BUMN</option>
            <option value="Streamix">Streamix</option>
            <option value="Phonix">Phonix</option>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <label for="TxtAlamat" class="col-sm-3 col-form-label">Alamat</label>
        <div class="col-sm-6">
          <textarea class="form-control" name="TxtAlamat" id="TxtAlamat" maxlength="100"></textarea>
        </div>
      </div>
      <div class="form-group row">
        <label for="umur" class="col-sm-3 col-form-label">ID Pelanggan</label>
        <div class="col-sm-6">
          <input type="number" name="TxtUmur" class="form-control" id="umur" maxlength="30" required="">
        </div>
      </div>
      <div class="form-group row">
        <label for="textemail" class="col-sm-3 col-form-label">Email</label>
        <div class="col-sm-6">
          <input type="email" name="textemail" class="form-control" id="textemail" maxlength="25" required="">
        </div>
      </div>
      <div class="form-group row">
        <div class="col-sm-10">
          <button class="btn btn-primary" type="submit" name="submit">Daftar</button>
          <button class="btn btn-danger" type="reset" value="Reset">Reset</button>
        </div>
      </div>
    </form>
  </div>
</div>