<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $address = $_POST['address'];

    $conn->query("INSERT INTO patients (name, age, address) VALUES ('$name', '$age', '$address')");
    header("Location: patients.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Pasien</title>
</head>
<body>
    <h2>Tambah Pasien</h2>
    <form method="POST" action="">
        <label>Nama:</label>
        <input type="text" name="name" required><br><br>
        <label>Umur:</label>
        <input type="number" name="age" required><br><br>
        <label>Alamat:</label>
        <textarea name="address" required></textarea><br><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
