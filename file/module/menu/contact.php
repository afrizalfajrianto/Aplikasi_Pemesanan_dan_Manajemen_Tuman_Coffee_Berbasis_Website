<?php
$title = 'Contact Us';
include ('../../class/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $title; ?>|Tuman
    </title>

    <!-- My CSS -->
    <link rel="stylesheet" href="../../css/template_style.css">
    <link rel="stylesheet" href="../../css/contact_style.css">
    <link rel="stylesheet" href="../../css/template_responsive.css">
    <!-- My Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <!--Font Awesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <main>
        <?php include ('../../layout/navbar_2.php') ?>
        <section class="hero_contact" style="background-image: url(../../assets/img/contact_us.jpg);">
            <article>
                <h1 class="swipe-in">Talk to us.</h1>
                <p class="swipe-in">Pakar kami siap membantu apa pun pertanyaan Anda, Anda datang ke tempat yang tepat.
                </p>
            </article>
        </section>

        <section class="contact_us">
            <h2>Send us a message.</h2>
            <form class="form">

                <p type="Name:"><input placeholder="Write your name here.."></input></p>
                <p type="Email:"><input placeholder="Let us know how to contact you back.."></input></p>
                <p type="Message:"><input placeholder="What would you like to tell us.."></input></p>
                <button>Send Message</button>
                <div>
                    <span class="fa fa-phone"></span>001 1023 567
                    <span class="fa fa-envelope-o"></span> contact@company.com
                </div>
            </form>
        </section>
    </main>
    <?php
    include ('../../layout/footer_2.php');
    ?>
    <!-- ion icon -->
    <script type="module" src="https://cdn.jsdelivr.net/npm/ionicons@latest/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://cdn.jsdelivr.net/npm/ionicons@latest/dist/ionicons/ionicons.js"></script>

    <!-- My Js -->
    <script src="../../js/template_script.js"></script>
    <script src="../../js/button_script.js"></script>
    <script src="../../js/inbox_script.js"></script>
    <script src="../../js/menu_script.js"></script>

</body>

</html>