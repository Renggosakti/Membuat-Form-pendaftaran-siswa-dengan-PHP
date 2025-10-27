<?php
// form-edit.php
include("config.php");

// validasi id
if (!isset($_GET['id'])) {
    header('Location: list-siswa.php');
    exit;
}

$id = (int) $_GET['id'];
$sql = "SELECT * FROM calon_siswa WHERE id = ?";
$stmt = mysqli_prepare($db, $sql);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$siswa = mysqli_fetch_assoc($result);
mysqli_stmt_close($stmt);

if (!$siswa) {
    die("Data tidak ditemukan.");
}
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Edit Siswa | Bright School</title>
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
    <h4>Formulir Edit Siswa</h4>

    <form action="proses-edit.php" method="post" class="mt-3">
      <input type="hidden" name="id" value="<?php echo e($siswa['id']); ?>">
      <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" name="nama" class="form-control" value="<?php echo e($siswa['nama']); ?>" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Alamat</label>
        <textarea name="alamat" rows="3" class="form-control" required><?php echo e($siswa['alamat']); ?></textarea>
      </div>

      <div class="mb-3">
        <label class="form-label d-block">Jenis Kelamin</label>
        <?php $jk = $siswa['jenis_kelamin']; ?>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? 'checked' : ''; ?>>
          <label class="form-check-label">Laki-laki</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? 'checked' : ''; ?>>
          <label class="form-check-label">Perempuan</label>
        </div>
      </div>

      <div class="mb-3">
        <label class="form-label">Agama</label>
        <?php $agama = $siswa['agama']; ?>
        <select class="form-select" name="agama" required>
          <option <?php echo ($agama == 'Islam') ? 'selected' : ''; ?>>Islam</option>
          <option <?php echo ($agama == 'Kristen') ? 'selected' : ''; ?>>Kristen</option>
          <option <?php echo ($agama == 'Hindu') ? 'selected' : ''; ?>>Hindu</option>
          <option <?php echo ($agama == 'Budha') ? 'selected' : ''; ?>>Budha</option>
          <option <?php echo ($agama == 'Atheis') ? 'selected' : ''; ?>>Atheis</option>
        </select>
      </div>

      <div class="mb-3">
        <label class="form-label">Sekolah Asal</label>
        <input type="text" name="sekolah_asal" class="form-control" value="<?php echo e($siswa['sekolah_asal']); ?>" required>
      </div>

      <div class="d-flex gap-2">
        <button class="btn btn-primary" type="submit" name="simpan">Simpan Perubahan</button>
        <a class="btn btn-outline-secondary" href="list-siswa.php">Kembali</a>
      </div>
    </form>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
