<?php
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['email'])) {
    header("Location: login.php"); // Jika belum login, arahkan ke halaman login
    exit();
}

// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "poli_klinik");

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Ambil data dari form
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    // Update data pengguna berdasarkan ID atau email
    $update_query = "UPDATE users SET name = ?, email = ?, address = ? WHERE email = ?";
    $stmt = $conn->prepare($update_query);
    $stmt->bind_param("ssss", $name, $email, $address, $_SESSION['email']); // Update berdasarkan email yang sudah login

    if ($stmt->execute()) {
        // Jika berhasil, arahkan kembali ke dashboard
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
}

$conn->close(); // Menutup koneksi
?>
