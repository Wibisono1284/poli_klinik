<?php
include 'config.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM doctors WHERE id = $id");
$doctor = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $specialty = $_POST['specialty'];
    $phone = $_POST['phone'];

    $conn->query("UPDATE doctors SET name = '$name', specialty = '$specialty', phone = '$phone' WHERE id = $id");
    header("Location: doctors.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Dokter</title>
</head>
<body>
    <h2>Edit Dokter</h2>
    <form method="POST" action="">
        <label>Nama:</label>
        <input type="text" name="name" value="<?php echo $doctor['name']; ?>" required><br><br>
        <label>Spesialis:</label>
        <input type="text" name="specialty" value="<?php echo $doctor['specialty']; ?>" required><br><br>
        <label>No. Telepon:</label>
        <input type="text" name="phone" value="<?php echo $doctor['phone']; ?>"><br><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
