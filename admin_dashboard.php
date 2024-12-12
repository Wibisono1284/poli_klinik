<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit;
}

include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<body>
    <h2>Selamat Datang, Admin!</h2>
    <a href="kelola_dokter.php">Kelola Dokter</a><br>
    <a href="kelola_pasien.php">Kelola Pasien</a><br>
    <a href="kelola_poli.php">Kelola Poli</a><br>
    <a href="kelola_obat.php">Kelola Obat</a><br>
    <a href="pendaftaran.php">Pendaftaran Pasien</a><br>
    <a href="logout.php">Logout</a>
</body>
</html>
