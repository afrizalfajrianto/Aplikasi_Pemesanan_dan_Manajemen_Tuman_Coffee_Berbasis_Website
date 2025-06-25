<?php
session_start();
include('../../class/config.php');

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['user_id'])) {
    header("Location: ../menu/create_account.php");
    exit();
}

// Periksa apakah parameter product_id ada dalam URL
if (isset($_GET['product_id'])) {
    // Dapatkan ID produk dari parameter URL
    $product_id = $_GET['product_id'];

    // Periksa apakah produk dengan ID yang diberikan ada dalam database
    $sql = "SELECT * FROM products WHERE id = '$product_id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Produk ditemukan
        $row = $result->fetch_assoc();
        $cart_item = array(
            'id' => $row['id'],
            'name' => $row['name'],
            'price' => $row['price'],
            'quantity' => 1 // Jumlah default adalah 1 saat menambahkan ke keranjang
        );

        // Periksa apakah pengguna sudah login
        if (isset($_SESSION['user_id'])) {
            $user_id = $_SESSION['user_id'];

            // Periksa apakah produk sudah ada dalam keranjang pengguna
            $sql_cart_check = "SELECT * FROM cart WHERE user_id = '$user_id' AND product_id = '$product_id'";
            $result_cart_check = $conn->query($sql_cart_check);

            if ($result_cart_check->num_rows > 0) {
                // Produk sudah ada dalam keranjang, tambahkan jumlah produk yang ditambahkan ke jumlah yang sudah ada
                $row_cart = $result_cart_check->fetch_assoc();
                $new_quantity = $row_cart['quantity'] + 1;

                // Perbarui jumlah produk dalam keranjang
                $sql_update_quantity = "UPDATE cart SET quantity = '$new_quantity' WHERE user_id = '$user_id' AND product_id = '$product_id'";
                if ($conn->query($sql_update_quantity) === TRUE) {
                    $_SESSION['product_status'][$product_id] = true;
                    // Redirect kembali ke halaman sebelumnya atau halaman keranjang
                    header("Location: ../menu/bag.php");
                    exit();
                } else {
                    echo "Error: " . $sql_update_quantity . "<br>" . $conn->error;
                }
            } else {
                // Produk belum ada dalam keranjang, tambahkan produk ke dalam keranjang
                $sql_add_to_cart = "INSERT INTO cart (user_id, product_id, quantity) VALUES ('$user_id', '$product_id', 1)";
                if ($conn->query($sql_add_to_cart) === TRUE) {
                    // Redirect kembali ke halaman sebelumnya atau halaman keranjang
                    $_SESSION['product_status'][$product_id] = true;
                    header("Location: ../menu/bag.php" );
                    exit();
                } else {
                    echo "Error: " . $sql_add_to_cart . "<br>" . $conn->error;
                }
            }
        } else {
            header("Location: ../menu/create_account.php");
            exit();
        }
    } else {
        // Produk tidak ditemukan dalam database
        echo "Produk tidak ditemukan.";
    }
} else {
    // Parameter product_id tidak ditemukan dalam URL
    echo "Parameter product_id tidak ditemukan.";
}


?>

