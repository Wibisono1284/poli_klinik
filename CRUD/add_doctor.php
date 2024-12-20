<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $specialty = $_POST['specialty'];
    $phone = $_POST['phone'];

    $conn->query("INSERT INTO doctors (name, specialty, phone) VALUES ('$name', '$specialty', '$phone')");
    header("Location: doctors.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Dokter</title>
</head>
<body>
    <h2>Tambah Dokter</h2>
    <form method="POST" action="">
        <label>Nama:</label>
        <input type="text" name="name" required><br><br>
        <label>Spesialis:</label>
        <input type="text" name="specialty" required><br><br>
        <label>No. Telepon:</label>
        <input type="text" name="phone"><br><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
