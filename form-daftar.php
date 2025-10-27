<?php
// form-daftar.php
include("config.php");
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Formulir Pendaftaran | Bright School</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/style.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
  <div class="container-lg">
    <a class="navbar-brand" href="index.php">Bright School</a>
  </div>
</nav>

<div class="container-lg my-5">
  <div class="card-modern p-4">
    <h4>Formulir Pendaftaran Siswa Baru</h4>
    <p class="small-muted">Isi data dengan lengkap. Kolom wajib ditandai *</p>

    <form action="proses-pendaftaran.php" method="post" class="mt-3 needs-validation" novalidate>
      <div class="mb-3">
        <label class="form-label">Nama <span class="text-danger">*</span></label>
        <input type="text" name="nama" class="form-control" required>
        <div class="invalid-feedback">Nama wajib diisi.</div>
      </div>

      <div class="mb-3">
        <label class="form-label">Alamat <span class="text-danger">*</span></label>
        <textarea name="alamat" rows="3" class="form-control" required></textarea>
        <div class="invalid-feedback">Alamat wajib diisi.</div>
      </div>

      <div class="mb-3">
        <label class="form-label d-block">Jenis Kelamin <span class="text-danger">*</span></label>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="jenis_kelamin" id="jk1" value="laki-laki" required>
          <label class="form-check-label" for="jk1">Laki-laki</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="jenis_kelamin" id="jk2" value="perempuan" required>
          <label class="form-check-label" for="jk2">Perempuan</label>
        </div>
        <div class="invalid-feedback d-block">Pilih jenis kelamin.</div>
      </div>

      <div class="mb-3">
        <label class="form-label">Agama <span class="text-danger">*</span></label>
        <select class="form-select" name="agama" required>
          <option value="">-- Pilih agama --</option>
          <option>Islam</option>
          <option>Kristen</option>
          <option>Hindu</option>
          <option>Budha</option>
          <option>Atheis</option>
        </select>
        <div class="invalid-feedback">Pilih agama.</div>
      </div>

      <div class="mb-3">
        <label class="form-label">Sekolah Asal <span class="text-danger">*</span></label>
        <input type="text" name="sekolah_asal" class="form-control" required>
        <div class="invalid-feedback">Sekolah asal wajib diisi.</div>
      </div>

      <div class="d-flex gap-2">
        <button class="btn btn-primary" type="submit" name="daftar">Daftar</button>
        <a class="btn btn-outline-secondary" href="index.php">Batal</a>
      </div>
    </form>
  </div>

  <div class="small-muted mt-3">Note: Untuk peserta silahkan mengisi formulir dengan data yang valid.</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
// Bootstrap form validation
(function () {
  'use strict'
  var forms = document.querySelectorAll('.needs-validation')
  Array.prototype.slice.call(forms).forEach(function (form) {
    form.addEventListener('submit', function (event) {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }
      form.classList.add('was-validated')
    }, false)
  })
})();
</script>
</body>
</html>
