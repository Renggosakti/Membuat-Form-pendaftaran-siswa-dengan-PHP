<?php
// proses-edit.php
include("config.php");

if (isset($_POST['simpan'])) {
    $id = (int) $_POST['id'];
    $nama = trim($_POST['nama']);
    $alamat = trim($_POST['alamat']);
    $jk = isset($_POST['jenis_kelamin']) ? $_POST['jenis_kelamin'] : '';
    $agama = trim($_POST['agama']);
    $sekolah = trim($_POST['sekolah_asal']);

    if ($nama === '' || $alamat === '' || $jk === '' || $agama === '' || $sekolah === '') {
        die("Data tidak lengkap.");
    }

    $stmt = mysqli_prepare($db, "UPDATE calon_siswa SET nama=?, alamat=?, jenis_kelamin=?, agama=?, sekolah_asal=? WHERE id=?");
    mysqli_stmt_bind_param($stmt, "sssssi", $nama, $alamat, $jk, $agama, $sekolah, $id);
    $exec = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    if ($exec) {
        header('Location: list-siswa.php');
        exit;
    } else {
        die("Gagal menyimpan perubahan: " . mysqli_error($db));
    }
} else {
    die("Akses tidak diizinkan.");
}
