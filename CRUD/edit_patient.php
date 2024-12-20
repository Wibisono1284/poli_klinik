<?php
include 'config.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM patients WHERE id = $id");
$patient = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $address = $_POST['address'];

    $conn->query("UPDATE patients SET name = '$name', age = '$age', address = '$address' WHERE id = $id");
    header("Location: patients.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Pasien</title>
</head>
<body>
    <h2>Edit Pasien</h2>
    <form method="POST" action="">
        <label>Nama:</label>
        <input type="text" name="name" value="<?php echo $patient['name']; ?>" required><br><br>
        <label>Umur:</label>
        <input type="number" name="age" value="<?php echo $patient['age']; ?>" required><br><br>
        <label>Alamat:</label>
        <textarea name="address" required><?php echo $patient['address']; ?></textarea><br><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
