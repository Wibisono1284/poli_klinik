<?php
session_start();
include 'config.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$query = $conn->prepare("SELECT * FROM admin WHERE username = ? AND password = ?");
$query->bind_param("ss", $username, $password);
$query->execute();
$result = $query->get_result();

if ($result->num_rows > 0) {
    $_SESSION['admin'] = $username;
    header("Location: index.php");
} else {
    echo "<script>alert('Username atau password salah!'); window.location='login.php';</script>";
}
?>
