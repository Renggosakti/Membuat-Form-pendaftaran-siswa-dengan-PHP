<?php
// list-siswa.php
include("config.php");
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Daftar Pendaftar | Bright School</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/style.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
  <div class="container-lg">
    <a class="navbar-brand" href="index.php">Bright School</a>
    <div class="ms-auto">
      <a class="btn btn-outline-primary btn-sm" href="form-daftar.php">[+] Tambah Baru</a>
    </div>
  </div>
</nav>

<div class="container-lg my-5">
  <div class="card-modern p-4">
    <h4 class="mb-3">Siswa yang sudah mendaftar</h4>

    <div class="table-responsive">
      <table class="table align-middle">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Sekolah Asal</th>
            <th>Tindakan</th>
          </tr>
        </thead>
        <tbody>
        <?php
        $sql = "SELECT * FROM calon_siswa ORDER BY id DESC";
        $query = mysqli_query($db, $sql);
        if (!$query) {
            echo "<tr><td colspan='7'>Terjadi kesalahan: ".mysqli_error($db)."</td></tr>";
        } else {
            $no = 1;
            while ($s = mysqli_fetch_assoc($query)) {
                echo "<tr>";
                echo "<td>" . $no++ . "</td>";
                echo "<td>" . e($s['nama']) . "</td>";
                echo "<td>" . e($s['alamat']) . "</td>";
                echo "<td>" . e($s['jenis_kelamin']) . "</td>";
                echo "<td>" . e($s['agama']) . "</td>";
                echo "<td>" . e($s['sekolah_asal']) . "</td>";
                echo "<td>";
                echo "<a class='btn btn-sm btn-outline-secondary me-1' href='form-edit.php?id=" . $s['id'] . "'>Edit</a>";
                echo "<a class='btn btn-sm btn-outline-danger' href='hapus.php?id=" . $s['id'] . "' onclick=\"return confirm('Yakin ingin menghapus data ini?');\">Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }
        }
        ?>
        </tbody>
      </table>
    </div>

    <div class="small-muted">Total: <?php echo mysqli_num_rows($query); ?> pendaftar</div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
