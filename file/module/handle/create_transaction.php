<?php
session_start();
require_once('../../class/config.php');
require_once('../../class/midtrans-php-master/Midtrans.php');

// Set konfigurasi Midtrans
\Midtrans\Config::$serverKey = 'SB-Mid-server-A-GJiUJvquXqsX8-lgCdjLa2';
\Midtrans\Config::$isProduction = false;
\Midtrans\Config::$isSanitized = true;
\Midtrans\Config::$is3ds = true;

header('Content-Type: application/json');

$data = json_decode(file_get_contents('php://input'), true);

if (!isset($data['selectedProducts'])) {
    http_response_code(400); // Bad Request
    echo json_encode(["error" => "No selected products"]);
    exit();
}

$selectedProducts = $data['selectedProducts'];

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    http_response_code(500);
    echo json_encode(["error" => "Connection failed: " . $conn->connect_error]);
    exit();
}

$user_id = $_SESSION['user_id'];
$placeholders = implode(',', array_fill(0, count($selectedProducts), '?'));

$sql = "SELECT * FROM cart INNER JOIN products ON cart.product_id = products.id WHERE cart.user_id = ? AND cart.product_id IN ($placeholders)";
$stmt = $conn->prepare($sql);
if ($stmt === false) {
    http_response_code(500);
    echo json_encode(["error" => "Error preparing statement: " . $conn->error]);
    exit();
}

$types = str_repeat('i', count($selectedProducts) + 1);
$params = array_merge([$user_id], $selectedProducts);

$stmt->bind_param($types, ...$params);

if (!$stmt->execute()) {
    http_response_code(500);
    echo json_encode(["error" => "Error executing statement: " . $stmt->error]);
    exit();
}

$result = $stmt->get_result();
if ($result === false) {
    http_response_code(500);
    echo json_encode(["error" => "Error getting result: " . $stmt->error]);
    exit();
}

$items = [];
$totalAmount = 0;
while ($row = $result->fetch_assoc()) {
    $items[] = [
        'id' => $row['product_id'],
        'price' => $row['price'],
        'quantity' => $row['quantity'],
        'name' => $row['name']
    ];
    $totalAmount += $row['price'] * $row['quantity'];
}

$transaction_details = [
    'order_id' => rand(),
    'gross_amount' => $totalAmount
];

$item_details = $items;

$customer_details = [
    'first_name' => 'John',
    'last_name' => 'Doe',
    'email' => 'john.doe@example.com',
    'phone' => '08111222333'
];

$transaction = [
    'transaction_details' => $transaction_details,
    'item_details' => $item_details,
    'customer_details' => $customer_details
];

try {
    $snapToken = \Midtrans\Snap::getSnapToken($transaction);

    // Simpan informasi pesanan ke database
    $order_sql = "INSERT INTO orders (user_id, order_id, total_amount, status) VALUES (?, ?, ?, ?)";
    $order_stmt = $conn->prepare($order_sql);
    $status = 'Pending';
    $order_stmt->bind_param("iiis", $user_id, $transaction_details['order_id'], $totalAmount, $status);
    $order_stmt->execute();
    
    // Simpan detail pesanan
    foreach ($items as $item) {
        $order_detail_sql = "INSERT INTO order_details (order_id, product_id, quantity, price) VALUES (?, ?, ?, ?)";
        $order_detail_stmt = $conn->prepare($order_detail_sql);
        $order_detail_stmt->bind_param("iiid", $transaction_details['order_id'], $item['id'], $item['quantity'], $item['price']);
        $order_detail_stmt->execute();
    }

    echo json_encode(['snapToken' => $snapToken]);
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(["error" => "Error getting snap token: " . $e->getMessage()]);
    exit();
}

$conn->close();
?>
