<?php
session_start();
require_once('../../class/config.php');

header('Content-Type: application/json');

if (!isset($_SESSION['user_id'])) {
    echo json_encode(["error" => "User not logged in"]);
    exit();
}

$user_id = $_SESSION['user_id'];

$data = json_decode(file_get_contents('php://input'), true);
$order_id = $data['order_id'];
$action = $data['action'];

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    http_response_code(500);
    echo json_encode(["error" => "Connection failed: " . $conn->connect_error]);
    exit();
}

if ($action === 'cancel') {
    $status = 'cancelled';
} elseif ($action === 'accept') {
    $status = 'accepted';
} else {
    echo json_encode(["error" => "Invalid action"]);
    exit();
}

$sql = "UPDATE orders SET status = ? WHERE order_id = ? AND user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sii", $status, $order_id, $user_id);

if ($stmt->execute()) {
    echo json_encode(["success" => "Order status updated"]);
} else {
    echo json_encode(["error" => "Error updating order status: " . $stmt->error]);
}

$stmt->close();
$conn->close();
?>