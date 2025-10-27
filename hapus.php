<?php
// hapus.php
include("config.php");

if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];

    $stmt = mysqli_prepare($db, "DELETE FROM calon_siswa WHERE id = ?");
    mysqli_stmt_bind_param($stmt, "i", $id);
    $exec = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    if ($exec) {
        header('Location: list-siswa.php');
        exit;
    } else {
        die("Gagal menghapus data: " . mysqli_error($db));
    }
} else {
    die("ID tidak ditemukan.");
}
