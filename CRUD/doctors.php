<?php
include 'config.php';

// Ambil semua data dokter
$result = $conn->query("SELECT * FROM doctors");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Dokter</title>
</head>
<body>
    <h2>Kelola Dokter</h2>
    <a href="add_doctor.php">Tambah Dokter</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Spesialis</th>
            <th>No. Telepon</th>
            <th>Aksi</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['specialty']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td>
                <a href="edit_doctor.php?id=<?php echo $row['id']; ?>">Edit</a> |
                <a href="delete_doctor.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Yakin hapus dokter ini?')">Hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
