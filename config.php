<?php
// config.php
$server = "localhost";
$user = "root";
$password = "seblak26"; // <-- sesuai permintaanmu
$nama_database = "pendaftaran_siswa";

$db = mysqli_connect($server, $user, $password, $nama_database);

if (!$db) {
    die("Gagal terhubung ke database: " . mysqli_connect_error());
}

// helper sederhana untuk escape output
function e($str) {
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}
