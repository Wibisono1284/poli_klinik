<?php
// Konfigurasi database
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'poli_klinik';

// Membuat koneksi ke database
$conn = new mysqli($host, $user, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die('Koneksi gagal: ' . $conn->connect_error);
}
?>
