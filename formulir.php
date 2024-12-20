<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $complaint = $_POST['complaint'];

    // Simpan ke database (contoh menggunakan MySQL)
    $conn = new mysqli("localhost", "username", "password", "database");
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }
    
    $sql = "INSERT INTO patients (name, phone, email, dob, complaint) 
            VALUES ('$name', '$phone', '$email', '$dob', '$complaint')";

    if ($conn->query($sql) === TRUE) {
        echo "Pendaftaran berhasil!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
