<?php
session_start();
include ('../../class/config.php');

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['user_id'])) {
    header("Location: create_account.php");
    exit();
}

$user_id = $_SESSION['user_id'];

// Periksa apakah formulir dikirim dengan metode POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari formulir
    $recipient_name = $conn->real_escape_string($_POST['recipient_name']);
    $address_line1 = $conn->real_escape_string($_POST['address_line1']);
    $address_line2 = $conn->real_escape_string($_POST['address_line2']);
    $city = $conn->real_escape_string($_POST['city']);
    $postal_code = $conn->real_escape_string($_POST['postal_code']);
    $country = $conn->real_escape_string($_POST['country']);
    $phone_number = $conn->real_escape_string($_POST['phone_number']);

    // Periksa apakah alamat sudah ada untuk pengguna ini
    $sql_check = "SELECT * FROM addresses WHERE user_id = '$user_id'";
    $result_check = $conn->query($sql_check);

    if ($result_check->num_rows > 0) {
        // Jika alamat sudah ada, lakukan update
        $sql_update = "UPDATE addresses SET 
                        recipient_name = '$recipient_name', 
                        address_line1 = '$address_line1',
                        address_line2 = '$address_line2',
                        city = '$city',
                        postal_code = '$postal_code',
                        country = '$country',
                        phone_number = '$phone_number'
                       WHERE user_id = '$user_id'";
        if ($conn->query($sql_update) === TRUE) {
            // Redirect ke halaman alamat setelah update berhasil
            header("Location: ../menu/address.php");
            exit();
        } else {
            echo "Error updating record: " . $conn->error;
        }
    } else {
        // Jika alamat belum ada, lakukan insert
        $sql_insert = "INSERT INTO addresses (user_id, recipient_name, address_line1, address_line2, city, postal_code, country, phone_number) VALUES ('$user_id', '$recipient_name', '$address_line1', '$address_line2', '$city', '$postal_code', '$country', '$phone_number')";
        if ($conn->query($sql_insert) === TRUE) {
            // Redirect ke halaman alamat setelah insert berhasil
            header("Location: ../menu/address.php");
            exit();
        } else {
            echo "Error inserting record: " . $conn->error;
        }
    }
}

// Ambil informasi alamat pengguna dari database
$sql = "SELECT * FROM addresses WHERE user_id = '$user_id'";
$result = $conn->query($sql);

// Inisialisasi variabel
$recipient_name = "";
$address_line1 = "";
$address_line2 = "";
$city = "";
$postal_code = "";
$country = "";
$phone_number = "";

// Periksa apakah alamat ditemukan
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $recipient_name = $row['recipient_name'];
    $address_line1 = $row['address_line1'];
    $address_line2 = $row['address_line2'];
    $city = $row['city'];
    $postal_code = $row['postal_code'];
    $country = $row['country'];
    $phone_number = $row['phone_number'];
}
?>