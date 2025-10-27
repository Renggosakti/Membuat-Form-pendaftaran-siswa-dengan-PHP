<?php
// proses-pendaftaran.php
include("config.php");

if (isset($_POST['daftar'])) {
    $nama = trim($_POST['nama']);
    $alamat = trim($_POST['alamat']);
    $jk = isset($_POST['jenis_kelamin']) ? $_POST['jenis_kelamin'] : '';
    $agama = trim($_POST['agama']);
    $sekolah = trim($_POST['sekolah_asal']);

    // simple validation
    if ($nama === '' || $alamat === '' || $jk === '' || $agama === '' || $sekolah === '') {
        header('Location: form-daftar.php?status=gagal');
        exit;
    }

    // prepared statement untuk keamanan
    $stmt = mysqli_prepare($db, "INSERT INTO calon_siswa (nama, alamat, jenis_kelamin, agama, sekolah_asal) VALUES (?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($stmt, "sssss", $nama, $alamat, $jk, $agama, $sekolah);
    $exec = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    if ($exec) {
        header('Location: index.php?status=sukses');
    } else {
        header('Location: index.php?status=gagal');
    }
    exit;
} else {
    die("Akses tidak diizinkan.");
}
