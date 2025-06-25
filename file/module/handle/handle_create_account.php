<?php
session_start(); // Mulai sesi

include ('../../class/config.php'); // Include file konfigurasi Anda

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$register_error = $login_error = ""; // Deklarasi variabel untuk pesan kesalahan

// Handle registrasi
if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $country = $_POST['country'];
    
    // Lakukan validasi data, misalnya cek apakah username atau email sudah ada di database
    // Lakukan juga hashing password sebelum menyimpannya ke database
    // Contoh:
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    
    // Buat query untuk memasukkan data registrasi ke dalam tabel users
    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')";
    if ($conn->query($sql) === TRUE) {
        // Dapatkan ID pengguna yang baru saja diinsert
        $user_id = $conn->insert_id;
        
        // Buat query untuk memasukkan data alamat ke dalam tabel addresses
        $address_sql = "INSERT INTO addresses (user_id, country) VALUES ('$user_id', '$country')";
        if ($conn->query($address_sql) === TRUE) {
            // Jika kedua query berhasil, redirect ke halaman profil
            header("Location: profile.php");
        } else {
            $register_error = "Error: " . $address_sql . "<br>" . $conn->error;
        }
    } else {
        $register_error = "Error: " . $sql . "<br>" . $conn->error;
    }
}


if (isset($_POST['login'])) {
    $email_or_username = $_POST['email_or_username'];
    $password = $_POST['password'];
    
    // Buat query untuk memeriksa apakah email atau username ada di database
    $sql = "SELECT * FROM users WHERE email='$email_or_username' OR username='$email_or_username'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // Email atau username ditemukan, periksa password
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // Password cocok, user berhasil login
            $_SESSION['user_id'] = $row['user_id']; // Set session user_id setelah login berhasil
            header("Location: profile.php"); // Redirect ke halaman profil
            exit();
        } else {
            $login_error = "Password salah!";
        }
    } else {
        $login_error = "Email atau username tidak ditemukan!";
    }
}


// Tutup koneksi
$conn->close();
?>
