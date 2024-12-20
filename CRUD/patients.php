<?php
include 'config.php';

// Ambil data pasien
$result = $conn->query("SELECT * FROM patients");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Pasien</title>
</head>
<body>
    <h2>Data Pasien</h2>
    <a href="add_patient.php">Tambah Pasien</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['age']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td>
                <a href="edit_patient.php?id=<?php echo $row['id']; ?>">Edit</a> | 
                <a href="delete_patient.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Hapus pasien ini?')">Hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
