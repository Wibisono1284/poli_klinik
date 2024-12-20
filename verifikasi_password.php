if (password_verify($password, $row['password'])) {
    echo "Login berhasil!";
} else {
    echo "Password salah!";
}
