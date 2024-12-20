if ($result->num_rows > 0) {
    echo "Username ditemukan!<br>";
    echo "Password dari form: $password<br>";
    echo "Password di database: " . $row['password'] . "<br>";
    
    if (password_verify($password, $row['password'])) {
        echo "Password cocok!";
    } else {
        echo "Password tidak cocok!";
    }
} else {
    echo "Username tidak ditemukan!";
}
