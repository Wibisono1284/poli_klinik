<?php
set_include_path(get_include_path() . PATH_SEPARATOR . __DIR__);
include 'config.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $level = $_POST['level'];

    // Cek apakah username sudah digunakan
    $query = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $query->bind_param("s", $username);
    $query->execute();
    $result = $query->get_result();

    if ($result->num_rows > 0) {
        echo "<script>alert('Username sudah terdaftar!'); window.location='register.php';</script>";
    } else {
        // Insert pengguna baru
        $query = $conn->prepare("INSERT INTO users (username, password, level) VALUES (?, ?, ?)");
        $query->bind_param("sss", $username, $password, $level);
        if ($query->execute()) {
            echo "<script>alert('Pendaftaran berhasil! Silakan login.'); window.location='login.php';</script>";
        } else {
            echo "<script>alert('Pendaftaran gagal! Silakan coba lagi.'); window.location='register.php';</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Daftar Akun Baru</h2>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <form action="register.php" method="POST">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="mb-3">
                        <label for="level" class="form-label">Level</label>
                        <select class="form-select" id="level" name="level">
                            <option value="user">User</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Daftar</button>
                </form>
                <p class="text-center mt-3">Sudah punya akun? <a href="login.php">Login di sini</a>.</p>
            </div>
        </div>
    </div>
</body>
</html>
