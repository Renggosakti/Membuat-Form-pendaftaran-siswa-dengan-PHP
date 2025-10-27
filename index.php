<?php
// index.php
include("config.php");
$status = isset($_GET['status']) ? $_GET['status'] : '';
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Pendaftaran Siswa Baru | Bright School</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/style.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
  <div class="container-lg">
    <a class="navbar-brand" href="#">Bright School</a>
    <div class="ms-auto small-muted">Sistem Pendaftaran Siswa Baru</div>
  </div>
</nav>

<div class="container-lg my-5">
  <div class="row g-4">
    <div class="col-lg-7">
      <div class="card-modern p-4 header-hero">
        <h3 class="mb-1">Pendaftaran Siswa Baru</h3>
        <p class="faint">Isi formulir pendaftaran untuk calon siswa baru. Data tersimpan aman di database.</p>

        <?php if($status == 'sukses'): ?>
          <div class="alert alert-success" role="alert">Pendaftaran berhasil! ✅</div>
        <?php elseif($status == 'gagal'): ?>
          <div class="alert alert-danger" role="alert">Terjadi kesalahan saat menyimpan data.</div>
        <?php endif; ?>

        <div class="mt-3">
          <a class="btn btn-primary me-2" href="form-daftar.php">Daftar Baru</a>
          <a class="btn btn-outline-secondary" href="list-siswa.php">Lihat Pendaftar</a>
        </div>
      </div>
    </div>

    <div class="col-lg-5">
      <div class="card-modern p-3">
        <h5 class="mb-2">Info</h5>
        <p class="small-muted mb-0">Aplikasi contoh ini dibuat untuk latihan CRUD menggunakan PHP + MySQL. Untuk kekurangan dan kesalahan mohon maaf sebelumnya akan diusahakan lagi selamat mencoba.</p>
        <hr>
        <p class="small-muted mb-0">Tips: gunakan data valid pada form, dan cek tabel <code>calon_siswa</code> ketika perlu.</p>
      </div>
    </div>
  </div>

  <div class="footer">© <?php echo date('Y'); ?> Bright School • 5025241072 Arya rangga copyright</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
