<?php
session_start();
if ($_SESSION['role'] != 'doctor') {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Dokter</title>
</head>
<body>
    <h2>Selamat datang, Dokter <?php echo $_SESSION['username']; ?>!</h2>
    <a href="logout.php">Logout</a>
</body>
</html>
