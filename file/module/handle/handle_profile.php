<?php
session_start(); // Mulai sesi

include ('../../class/config.php'); // Include file konfigurasi Anda

// Periksa apakah session user_id telah diatur
if (!isset($_SESSION['user_id'])) {
  // Jika belum, arahkan pengguna ke halaman login
  header("Location: create_account.php");
  exit(); // Penting untuk menghentikan eksekusi skrip setelah mengalihkan pengguna
}

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}

$user_id = $_SESSION['user_id']; // Mendapatkan ID pengguna dari sesi

// Query untuk mengambil data profil pengguna dari database berdasarkan ID pengguna
$sql = "SELECT u.username, u.email, a.country 
        FROM users u
        INNER JOIN addresses a ON u.user_id = a.user_id
        WHERE u.user_id = '$user_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Output data dari setiap baris
  while ($row = $result->fetch_assoc()) {
    $username = $row["username"];
    $email = $row["email"];
    $country = $row["country"]; // Mengambil data alamat dari kolom 'country'
  }
} else {
  echo "Data profil tidak ditemukan";
}

// Tutup koneksi
$conn->close();
?>
