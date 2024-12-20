<?php
session_start();

// Cek apakah pengguna sudah login dan memiliki role
if (!isset($_SESSION['username']) || !isset($_SESSION['role'])) {
    header("Location: login.php");
    exit();
}

// Cek apakah role user adalah dokter atau pasien
if ($_SESSION['role'] == 'doctor') {
    // Tampilkan dashboard dokter
    header("Location: dashboard_doctor.php");
    exit();
} elseif ($_SESSION['role'] == 'patient') {
    // Tampilkan dashboard pasien
    header("Location: dashboard_patient.php");
    exit();
} else {
    echo "Role tidak dikenali!";
}
?>







