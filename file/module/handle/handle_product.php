<?php 
include('../../class/config.php');

// Query untuk mengambil semua produk
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

// Query untuk mengambil produk dengan kategori 'milk based' atau 'manual brew'
$sql_drink = "SELECT * FROM products WHERE category = 'manual brew' OR 'milk based'";
$result_drink = $conn->query($sql_drink);

$sql_manual_brew = "SELECT * FROM products WHERE category = 'manual brew'";
$result_manual_brew = $conn->query($sql_manual_brew);

$sql_milk_based = "SELECT * FROM products WHERE category = 'milk based'";
$result_milk_based = $conn->query($sql_milk_based);

$sql_coffee = "SELECT * FROM products WHERE category = 'espresso based'";
$result_coffee = $conn->query($sql_coffee);

$sql_trending = "SELECT * FROM products WHERE buy > 5 AND category = 'espresso based'";
$result_trending = $conn->query($sql_trending);

$sql_espresso_based = "SELECT * FROM products WHERE category = 'espresso based'";
$result_espresso_based = $conn->query($sql_espresso_based);

// Inisialisasi array untuk menyimpan data produk
$all_products = array();
$drink_products = array();
$manual_brew_products = array();
$milk_based_products = array();
$coffee_products = array();
$trending_products = array();
$espresso_based_products = array();

// Memeriksa apakah kueri berhasil dan menyimpan data produk ke dalam array
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $all_products[] = $row;
    }
} else {
    echo "Tidak ada data produk.";
}

// Memeriksa apakah kueri berhasil dan menyimpan data produk ke dalam array
if ($result_drink->num_rows > 0) {
    while ($row = $result_drink->fetch_assoc()) {
        $drink_products[] = $row;
    }
} else {
    echo "Tidak ada data minuman.";
}

// Memeriksa apakah kueri berhasil dan menyimpan data minuman ke dalam array
if ($result_manual_brew->num_rows > 0) {
    while ($row = $result_manual_brew->fetch_assoc()) {
        $manual_brew_products[] = $row;
    }
} else {
    echo "Tidak ada data produk manual brew.";
}

// Memeriksa apakah kueri berhasil dan menyimpan data minuman ke dalam array
if ($result_milk_based->num_rows > 0) {
    while ($row = $result_milk_based->fetch_assoc()) {
        $milk_based_products[] = $row;
    }
} else {
    echo "Tidak ada data produk milk based.";
}

// Memeriksa apakah kueri berhasil dan menyimpan data minuman ke dalam array
if ($result_coffee->num_rows > 0) {
    while ($row = $result_coffee->fetch_assoc()) {
        $coffee_products[] = $row;
    }
} else {
    echo "Tidak ada data produk coffee.";
}

// Memeriksa apakah kueri berhasil dan menyimpan data minuman ke dalam array
if ($result_trending->num_rows > 0) {
    while ($row = $result_trending->fetch_assoc()) {
        $trending_products[] = $row;
    }
} else {
    echo "Tidak ada data produk trending.";
}

// Memeriksa apakah kueri berhasil dan menyimpan data minuman ke dalam array
if ($result_espresso_based->num_rows > 0) {
    while ($row = $result_espresso_based->fetch_assoc()) {
        $espresso_based_products[] = $row;
    }
} else {
    echo "Tidak ada data produk espresso based.";
}
// Sekarang Anda dapat menggunakan $all_products dan $drink_products sesuai kebutuhan
?>
