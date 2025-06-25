<?php
session_start();
include('../../class/config.php');

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$user_id = $_SESSION['user_id'];

// Query untuk mengambil data order dan produk
$sql = "SELECT orders.order_id, orders.total_amount, orders.status, orders.created_at, 
        products.name, products.description, products.image, order_details.quantity, order_details.price 
        FROM orders 
        INNER JOIN order_details ON orders.order_id = order_details.order_id 
        INNER JOIN products ON order_details.product_id = products.id 
        WHERE orders.user_id = ? AND orders.status = 'pending'";


$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$orders = [];
while ($row = $result->fetch_assoc()) {
    $orders[] = $row;
}

// Query untuk mengambil alamat
$sql_check = "SELECT city FROM addresses WHERE user_id = ?";
$stmt_check = $conn->prepare($sql_check);
$stmt_check->bind_param("i", $user_id);
$stmt_check->execute();
$result_check = $stmt_check->get_result();
$address = $result_check->fetch_assoc();
$city = $address['city'];

$title = 'Orders';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?> | Tuman</title>
    <link rel="stylesheet" href="../../css/template_2_style.css">
    <link rel="stylesheet" href="../../css/profile_style.css">
    <link rel="stylesheet" href="../../css/template_responsive.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <main>

        <?php include('../../layout/navbar_2.php') ?>
        <section class="hero-profile">

            <div class="nav-hero">
                <p>ACCOUNT</p>
                <ul>
                    <li><a class="hover" href="profile.php">My Account</a></li>
                    <li><a class="hover" href="address.php">Personal & Address.</a></li>
                    <li><a class="hero-active" href="order.php">My Orders.</a></li>
                    <li><a class="hover" href="bag.php">Bag.</a></li>
                    <li><a class="hover" href="logout.php">Logout.</a></li>
                </ul>
            </div>
            <div class="account swipe-in">
                <hr>
                <h1>Order Details</h1>
                <hr>
                <?php if (!empty($orders)): ?>
                    <?php foreach ($orders as $order): ?>
                        <div class="order">
                            <img src="../../assets/img/<?php echo $order['image']; ?>.png" alt="<?php echo $order['name']; ?>">
                            <div class="content">
                                <h1><?php echo $order['name']; ?> <span>x<?php echo $order['quantity']; ?></span></h1>
                                <p><?php echo $order['description']; ?></p>
                                <h4>Total:</h4>
                                <p class="price"><?php echo number_format($order['total_amount'], 2); ?></p>
                                <p><?php echo $order['status']; ?></p>
                                <details>
                                    <summary>Details</summary>
                                    <hr>
                                    <div class="detail_order">
                                        <p>Product <span>: <?php echo $order['name']; ?></span></p>
                                        <p>Price <span>: <?php echo number_format($order['price'], 2); ?></span></p>
                                        <p>Quantity <span>: <?php echo $order['quantity']; ?></span></p>
                                        <p>Total <span>: <?php echo number_format($order['total_amount'], 2); ?></span></p>
                                        <p>Order Time <span>: <?php echo $order['created_at']; ?></span></p>
                                        <p>Address <span>: <?php echo $city; ?></span></p>
                                    </div>
                                </details>
                                <hr>
                                <div class="button">
                                    <button class="batal"
                                        onclick="updateOrderStatus(<?php echo $order['order_id']; ?>, 'cancel')">Cancel
                                        Order</button>
                                    <button class="terima"
                                        onclick="updateOrderStatus(<?php echo $order['order_id']; ?>, 'accept')">Accept
                                        Order</button>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No orders found.</p>
                <?php endif; ?>
            </div>
        </section>
        <?php include('../../layout/footer_2.php'); ?>
        <script type="module" src="https://cdn.jsdelivr.net/npm/ionicons@latest/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://cdn.jsdelivr.net/npm/ionicons@latest/dist/ionicons/ionicons.js"></script>
        <script src="../../js/template_script.js"></script>
        <script src="../../js/inbox_script.js"></script>
        <script src="../../js/address.js"></script>
        <script src="../../js/menu_script.js"></script>
        <script>
            function updateOrderStatus(orderId, action) {
                fetch('../handle/update_order_status.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        order_id: orderId,
                        action: action
                    })
                })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            alert('Order status updated successfully.');
                            location.reload(); // Refresh halaman untuk menampilkan status terbaru
                        } else {
                            alert('Error updating order status: ' + data.error);
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('Error updating order status.');
                    });
            }
        </script>
    </main>
</body>

</html>