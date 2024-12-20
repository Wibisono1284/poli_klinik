$stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        echo "Login berhasil!";
    } else {
        echo "Password salah!";
    }
} else {
    echo "Email tidak ditemukan!";
}
$stmt->close();
