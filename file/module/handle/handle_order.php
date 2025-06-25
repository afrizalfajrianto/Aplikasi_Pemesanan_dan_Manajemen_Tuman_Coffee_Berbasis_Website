<?php
session_start();

// Pastikan permintaan dikirim melalui metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sambungkan ke database
    include '../../class/config.php'; // Sesuaikan dengan nama file koneksi Anda

    // Periksa apakah pengguna sudah login
    if (isset($_SESSION['user_id'])) {
        // Ambil data yang dikirim dari frontend
        $gross_amount = $_POST['gross_amount'];
        $user_id = $_SESSION['user_id'];
        $order_date = date("Y-m-d H:i:s"); // Ambil waktu saat ini untuk order_date

        // Masukkan data ke dalam tabel order
        $sql = "INSERT INTO `order` (user_id, gross_amount, order_date) VALUES ('$user_id', '$gross_amount', '$order_date')";
        if ($conn->query($sql) === TRUE) {
            // Beri respons sukses ke frontend
            echo "Checkout berhasil. Pesanan telah diproses.";
        } else {
            // Beri respons kesalahan jika gagal menyimpan data
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        // Jika pengguna belum login, kirimkan respons kesalahan ke frontend
        http_response_code(401); // Unauthorized
        exit("Anda harus login untuk melakukan checkout.");
    }

    // Tutup koneksi ke database
    $conn->close();
} else {
    // Jika permintaan tidak dikirim melalui metode POST, kirimkan respons kesalahan ke frontend
    http_response_code(405); // Method Not Allowed
    exit("Only POST requests are allowed.");
}
?>
