<?php
session_start(); // Mulai sesi

// Pastikan permintaan dikirim melalui metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sambungkan ke database
    include '../../class/config.php'; // Sesuaikan dengan nama file koneksi Anda

    // Ambil data yang dikirim dari client
    $product_id = $_POST['product_id'];
    $user_id =  $_SESSION['user_id'];
    $checked = $_POST['checked'];

    // Periksa apakah sesi produk_status sudah diset
    if (isset($_SESSION['product_status'])) {
        // Perbarui status produk di sesi
        $_SESSION['product_status'][$product_id] = $checked;
    } else {
        // Jika sesi belum diset, buat sesi baru dan set status produk
        $_SESSION['product_status'] = array($product_id => $checked);
    }

    // Update status produk di keranjang
    $sql = "UPDATE cart SET status = '$checked' WHERE product_id = '$product_id' AND user_id = '$user_id'";

    if ($conn->query($sql) === TRUE) {
        echo "Status produk berhasil diperbarui";
    } else {
        echo "Error updating status produk: " . $conn->error;
    }

    // Tutup koneksi ke database
    $conn->close();
} else {
    // Jika permintaan tidak dikirim melalui metode POST, beri respon dengan status error
    http_response_code(405); // Method Not Allowed
    exit("Only POST requests are allowed");
}
?>
