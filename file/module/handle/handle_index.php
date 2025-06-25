<?php
include ('class/config.php');

$sql = "SELECT * FROM products WHERE buy > 5";
$result = $conn->query($sql);

// Memeriksa apakah kueri berhasil
if ($result->num_rows > 0) {
    // Inisialisasi array $products untuk menyimpan data produk
    $products = array();

    // Menyimpan data produk ke dalam array $products
    while ($row = $result->fetch_assoc()) {
        $products[] = $row;
    }
} else {
    echo "Tidak ada data produk.";
}
?>