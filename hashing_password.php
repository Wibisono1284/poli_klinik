<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $password = password_hash(trim($_POST['password']), PASSWORD_BCRYPT);
    $role = 'patient'; // Default role untuk user baru

    $stmt = $conn->prepare("INSERT INTO users (username, password, role) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $password, $role);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "Registrasi berhasil!";
    } else {
        echo "Registrasi gagal!";
    }
}
?>
