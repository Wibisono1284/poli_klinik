<?php
session_start();

// Cek apakah user sudah login
if (!isset($_SESSION['email'])) {
    // Jika belum login, arahkan ke halaman login
    header("Location: login.html");
    exit();
}

echo "Selamat datang, " . $_SESSION['email'] . "!<br>";
echo "<a href='logout.php'>Logout</a>";  // Logout link
?>
