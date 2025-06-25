<?php
$title = 'Edit address';
include('../handle/handle_address.php');

// Inisialisasi nilai default agar tidak error
$recipient_name = $recipient_name ?? '';
$address_line1 = $address_line1 ?? '';
$address_line2 = $address_line2 ?? '';
$city = $city ?? '';
$postal_code = $postal_code ?? '';
$country = $country ?? '';
$phone_number = $phone_number ?? '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?> | Tuman</title>
    <link rel="stylesheet" href="../../css/template_2_style.css">
    <link rel="stylesheet" href="../../css/profile_style.css">
    <link rel="stylesheet" href="../../css/address_style.css">
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
                    <li><a class="hero-active" href="address.php">Personal & Address.</a></li>
                    <li><a class="hover" href="order.php">My Orders.</a></li>
                    <li><a class="hover" href="bag.php">Bag.</a></li>
                    <li><a class="hover" href="logout.php">Logout.</a></li>
                </ul>
            </div>

            <div class="account swipe-in">
                <hr>
                <h1>Edit Address</h1>
                <form action="../handle/handle_address.php" method="post" class="address_edit">
                    <label for="recipient_name">Recipient Name:</label><br>
                    <input type="text" id="recipient_name" name="recipient_name"
                        value="<?= htmlspecialchars($recipient_name) ?>"><br>

                    <label for="address_line1">Address Line 1:</label><br>
                    <input type="text" id="address_line1" name="address_line1"
                        value="<?= htmlspecialchars($address_line1) ?>"><br>

                    <label for="address_line2">Address Line 2:</label><br>
                    <input type="text" id="address_line2" name="address_line2"
                        value="<?= htmlspecialchars($address_line2) ?>"><br>

                    <label for="city">City:</label><br>
                    <input type="text" id="city" name="city" value="<?= htmlspecialchars($city) ?>"><br>

                    <label for="postal_code">Postal Code:</label><br>
                    <input type="text" id="postal_code" name="postal_code"
                        value="<?= htmlspecialchars($postal_code) ?>"><br>

                    <label for="country">Country:</label><br>
                    <input type="text" id="country" name="country" value="<?= htmlspecialchars($country) ?>"><br>

                    <label for="phone_number">Phone Number:</label><br>
                    <input type="text" id="phone_number" name="phone_number"
                        value="<?= htmlspecialchars($phone_number) ?>"><br><br>

                    <input class="done" type="submit" value="Done">
                </form>
            </div>
        </section>
    </main>

    <?php include('../../layout/footer_2.php') ?>

    <!-- ion icons -->
    <script type="module" src="https://cdn.jsdelivr.net/npm/ionicons@latest/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://cdn.jsdelivr.net/npm/ionicons@latest/dist/ionicons/ionicons.js"></script>

    <!-- Scripts -->
    <script src="../../js/template_script.js"></script>
    <script src="../../js/inbox_script.js"></script>
    <script src="../../js/address.js"></script>
    <script src="../../js/menu_script.js"></script>
</body>

</html>