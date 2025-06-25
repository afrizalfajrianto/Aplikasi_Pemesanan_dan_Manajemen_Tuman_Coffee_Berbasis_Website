<?php 
$title = 'Create account';
include ('../handle/handle_create_account.php') 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?>|Tuman</title>
    <link rel="stylesheet" href="../../css/template_2_style.css">
    <link rel="stylesheet" href="../../css/create_style.css">
    <link rel="stylesheet" href="../../css/template_responsive.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <main>

        <?php include ('../../layout/navbar_2.php') ?>

        <section class="register" style="	background-image: url(../../assets/img/login.jpg);">
            <div class="main swipe-in">
                <input type="checkbox" id="chk" aria-hidden="true">

                <div class="signup">
                    <form action="" method="post">
                        <label class="title" for="chk" aria-hidden="true">Sign up</label>
                        <input type="text" name="username" placeholder="Username" required>
                        <input type="email" name="email" placeholder="Email" required>
                        <input type="text" name="country" placeholder="Country" required>
                        <input type="password" name="password" placeholder="Password" required>
                        <button type="submit" class="button_register" name="register">Sign up</button>
                    </form>
                    <?php echo $register_error; ?>
                </div>

                <div class="login">
                    <form action="" method="post">
                        <label class="title" for="chk" aria-hidden="true">Login</label>
                        <<input type="text" name="email_or_username" placeholder="Email or Username" required>
                            <input type="password" name="password" placeholder="Password" required>
                            <button type="submit" class="button_login" name="login">Login</button>
                    </form>
                    <?php echo $login_error; ?>
                </div>
            </div>
        </section>
    </main>
    <?php include ('../../layout/footer_2.php') ?>
    <!-- ion icon -->
    <script type="module" src="https://cdn.jsdelivr.net/npm/ionicons@latest/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://cdn.jsdelivr.net/npm/ionicons@latest/dist/ionicons/ionicons.js"></script>

    <!-- JQUERY CDN LINK -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- SLICK SLIDER LINK -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <!-- My Js -->
    <script src="../../js/template_script.js"></script>
    <script src="../../js/button_script.js"></script>
    <script src="../../js/inbox_script.js"></script>
    <script src="../../js/menu_script.js"></script>

</body>

</html>