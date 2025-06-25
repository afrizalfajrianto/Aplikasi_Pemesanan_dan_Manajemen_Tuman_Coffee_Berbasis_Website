<?php
include ('../../class/config.php');
$sql = "SELECT * FROM products";
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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trending|Tuman</title>
    <link rel="stylesheet" href="../css/template_2_style.css">
    <link rel="stylesheet" href="../css/checkout_style.scss">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <main>
        <div class="wrapper">
            <div class="container">
                <form action="">
                    <h1>
                        <i class="fas fa-shipping-fast"></i>
                        Shipping Details
                    </h1>
                    <div class="name">
                        <div>
                            <label for="f-name">Name</label>
                            <input type="text" name="f-name">
                        </div>
                    </div>
                    <div class="street">
                        <label for="name">Street</label>
                        <input type="text" name="address">
                    </div>
                    <div class="address-info">
                        <div>
                            <label for="city">City</label>
                            <input type="text" name="city">
                        </div>
                        <div>
                            <label for="state">State</label>
                            <input type="text" name="state">
                        </div>
                        <div>
                            <label for="zip">Zip</label>
                            <input type="text" name="zip">
                        </div>
                    </div>
                    <h1>
                        <i class="far fa-credit-card"></i> Payment Information
                    </h1>
                    <div class="cc-num">
                        <label for="card-num">Credit Card No.</label>
                        <input type="text" name="card-num">
                    </div>
                    <div class="cc-info">
                        <div>
                            <label for="card-num">Exp</label>
                            <input type="text" name="expire">
                        </div>
                        <div>
                            <label for="card-num">CCV</label>
                            <input type="text" name="security">
                        </div>
                    </div>
                    <div class="btns">
                        <button>Purchase</button>
                        <button>Back to bag</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>

</html>