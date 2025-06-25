<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include '../../class/config.php';

    // Decode JSON input
    $data = json_decode(file_get_contents('php://input'), true);

    // Validate and sanitize inputs
    $cart_id = isset($data['cart_id']) ? intval($data['cart_id']) : 0;
    $operation = isset($data['operation']) ? $data['operation'] : '';

    if ($cart_id <= 0 || !in_array($operation, ['increase', 'decrease'])) {
        http_response_code(400);
        exit("Invalid input parameters");
    }

    // Create database connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        http_response_code(500);
        exit("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute SELECT statement to get current quantity
    $sql_select = "SELECT quantity FROM cart WHERE cart_id = ?";
    $stmt_select = $conn->prepare($sql_select);
    $stmt_select->bind_param("i", $cart_id);
    $stmt_select->execute();
    $result_select = $stmt_select->get_result();

    // Check if cart item exists
    if ($result_select->num_rows > 0) {
        $row = $result_select->fetch_assoc();
        $current_quantity = $row['quantity'];

        // Calculate new quantity based on operation
        if ($operation === 'increase') {
            $new_quantity = $current_quantity + 1;
        } elseif ($operation === 'decrease' && $current_quantity > 1) {
            $new_quantity = $current_quantity - 1;
        } else {
            http_response_code(400);
            exit("Cannot decrease quantity further");
        }

        // Prepare and execute UPDATE statement
        $sql_update = "UPDATE cart SET quantity = ? WHERE cart_id = ?";
        $stmt_update = $conn->prepare($sql_update);
        $stmt_update->bind_param("ii", $new_quantity, $cart_id);

        if ($stmt_update->execute()) {
            echo json_encode(['success' => true, 'new_quantity' => $new_quantity]);
        } else {
            http_response_code(500);
            exit("Error updating quantity: " . $stmt_update->error);
        }

        $stmt_update->close();
    } else {
        http_response_code(404);
        exit("Cart item not found");
    }

    // Close prepared statements and database connection
    $stmt_select->close();
    $conn->close();
} else {
    http_response_code(405);
    exit("Only POST requests are allowed");
}
?>
