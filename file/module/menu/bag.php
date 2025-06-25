<?php
session_start();
include('../../class/config.php'); // Include file konfigurasi Anda

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $database);

if (!isset($_SESSION['user_id'])) {
    // Jika belum, arahkan pengguna ke halaman login
    header("Location: create_account.php");
    exit(); // Penting untuk menghentikan eksekusi skrip setelah mengalihkan pengguna
}
$title = 'Bag';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="../../css/template_2_style.css">
    <link rel="stylesheet" href="../../css/bag_style.css">
    <link rel="stylesheet" href="../../css/template_responsive.css">

    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Midtrans -->
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="SB-Mid-client-VSD5P3G59gGxk5av"></script>
</head>

<body>
    <main>
        <?php include('../../layout/navbar_2.php'); ?>

        <section class="bag">
            <div class="shopping-cart swipe-in">
                <!-- Title -->
                <div class="title">
                    Shopping Bag
                </div>

                <?php
                // Query untuk mengambil data dari tabel keranjang berdasarkan data dari tabel produk
                $user_id = $_SESSION['user_id']; // Ambil user_id dari sesi
                $sql = "SELECT * FROM cart INNER JOIN products ON cart.product_id = products.id WHERE cart.user_id = '$user_id'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Output data dari setiap baris
                    while ($row = $result->fetch_assoc()) {
                        // Variabel untuk menyimpan data
                        $cart_id = $row["cart_id"];
                        $product_id = $row["product_id"];
                        $product_name = $row["name"];
                        $description = $row["description"];
                        $price = $row["price"];
                        $image = $row["image"];
                        $quantity = $row["quantity"];
                        $product_price = floatval($row['price']);
                        ?>
                        <!-- Product -->
                        <div class="item">
                            <div class="buttons">
                                <form action="../handle/handle_bag.php" method="post" class="edit-form">
                                    <input type="hidden" name="cart_id" value="<?php echo $cart_id; ?>">
                                    <button type="submit" class="delete-btn"
                                        style="background: url('../../assets/icon/delete-icn.svg') no-repeat; top: 9px; width: 18px; height: 17px;"
                                        name="remove_from_cart"></button>
                                    <input type="checkbox" name="selected_products[]" value="<?php echo $product_id; ?>"
                                        class="like-checkbox" data-product-price="<?php echo $product_price; ?>"
                                        data-product-quantity="<?php echo $quantity; ?>" <?php echo (isset($_SESSION['product_status'][$product_id]) && $_SESSION['product_status'][$product_id] ? 'checked' : ''); ?>>
                                </form>
                            </div>
                            <div class="image">
                                <img src="../../assets/img/<?php echo $image; ?>.png" alt="<?php echo $product_name; ?>" />
                            </div>
                            <div class="description">
                                <span><?php echo $product_name; ?></span>
                                <span><?php echo $description; ?></span>
                            </div>
                            <div class="quantity">
                                <button type="button" class="quantity-btn decrease" data-cart-id="<?php echo $cart_id; ?>"
                                    data-operation="decrease">-</button>

                                <input type="number" name="quantity" value="<?php echo $quantity; ?>" min="1"
                                    class="quantity-input" readonly>

                                <button type="button" class="quantity-btn increase" data-cart-id="<?php echo $cart_id; ?>"
                                    data-operation="increase">+</button>
                            </div>

                            <div class="total-price"><?php echo number_format($price, 2); ?></div>
                        </div>
                        <hr>
                        <?php
                    }
                } else {
                    echo "<p>No items in the cart</p>";
                }
                ?>

                <div class="select-all">
                    <button type="button" id="select-all-btn" class="select_all">Select All</button>
                    <p>Total <b id="total-price">Rp 0</b></p>
                    <input type="hidden" id="gross-amount" name="gross_amount">
                    <button type="button" id="checkout-btn" class="checkout">Checkout</button>
                </div>
            </div>
        </section>
    </main>

    <?php include('../../layout/footer_2.php'); ?>

    <!-- Ion Icons -->
    <script type="module" src="https://cdn.jsdelivr.net/npm/ionicons@latest/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://cdn.jsdelivr.net/npm/ionicons@latest/dist/ionicons/ionicons.js"></script>

    <!-- My Js -->
    <script src="../../js/template_script.js"></script>
    <script src="../../js/inbox_script.js"></script>
    <script src="../../js/address.js"></script>
    <script src="../../js/bag_script.js"></script>
    <script src="../../js/menu_script.js"></script>

    <script>
        document.getElementById('checkout-btn').addEventListener('click', function () {
            const selectedProducts = Array.from(document.querySelectorAll('input[name="selected_products[]"]:checked')).map(checkbox => checkbox.value);
            if (selectedProducts.length === 0) {
                alert('Please select at least one product to checkout.');
                return;
            }

            fetch('../../module/handle/create_transaction.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ selectedProducts: selectedProducts })
            })
                .then(response => {
                    if (!response.ok) {
                        return response.text().then(text => { throw new Error(text); });
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.snapToken) {
                        snap.pay(data.snapToken, {
                            onSuccess: function (result) {
                                alert("Payment success!"); // Ganti dengan logika yang Anda inginkan
                            },
                            onPending: function (result) {
                                alert("Payment pending!"); // Ganti dengan logika yang Anda inginkan
                            },
                            onError: function (result) {
                                alert("Payment failed!"); // Ganti dengan logika yang Anda inginkan
                            },
                            onClose: function () {
                                alert('You closed the popup without finishing the payment');
                            }
                        });
                    } else {
                        alert('Failed to get snap token');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Error processing your request: ' + error.message);
                });
        });

        // Menggunakan event delegation untuk menangani klik tombol "decrease" dan "increase"
        document.addEventListener('click', function (event) {
            if (event.target.classList.contains('quantity-btn')) {
                const operation = event.target.dataset.operation;
                const cartId = event.target.dataset.cartId;
                const quantityInput = event.target.parentElement.querySelector('.quantity-input');

                if (operation === 'decrease') {
                    updateQuantity(cartId, 'decrease', quantityInput);
                } else if (operation === 'increase') {
                    updateQuantity(cartId, 'increase', quantityInput);
                }
            }
        });

        function updateQuantity(cartId, operation, quantityInput) {
            fetch('../../module/handle/update_quantity.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    cartId: cartId,
                    operation: operation
                })
            })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Failed to update quantity');
                    }
                    return response.json();
                })
                .then(data => {
                    // Update nilai input jumlah sesuai dengan respons dari server
                    quantityInput.value = data.quantity;
                })
                .catch(error => {
                    console.error('Error updating quantity:', error);
                    alert('Error updating quantity: ' + error.message);
                });
        }


    </script>
</body>

</html>