<?php
$title = 'About Us';
include ('../../class/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?>|Tuman</title>
    <link rel="stylesheet" href="../../css/template_style.css">
    <link rel="stylesheet" href="../../css/template_responsive.css">
    <link rel="stylesheet" href="../../css/about_style.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <main>

        <?php include ('../../layout/navbar_2.php') ?>

        <section class="hero_about" style="background-image: url(../../assets/img/about.jpg);">
            <article>
                <h1 class="swipe-in">Our story.</h1>
                <p class="swipe-in">Handpicked coffee beans sourced from the finest plantations across Indonesia, meticulously roasted to unleash their full flavor potential and release an irresistible aroma.</p>
            </article>
        </section>

        <section class="about">
            <div class="content">
                <h1 class="swipe-in">About Us</h1>
                <p class="swipe-in">Step into Tuman Coffee and embark on a culinary adventure beyond traditional coffee. Our menu boasts an exciting array of trendy drinks, each meticulously crafted with fresh, high-quality ingredients to tantalize your taste buds and leave you feeling energized.</p>
                <div class="social-media">
                    <ul>
                        <li><a href="https://mail.google.com/"><ion-icon name="mail-outline"></ion-icon></a>EMAIL</li>
                        <li><a href=""><ion-icon name="phone-portrait-outline"></ion-icon></a>PHONE</li>
                        <li><a href="https://www.instagram.com/anugrahdpc"><ion-icon
                                    name="logo-instagram"></ion-icon></a>INSTAGRAM</li>
                        <li><a href="https://twitter.com/i/flow/login"><ion-icon
                                    name="logo-twitter"></ion-icon></a>TWITTER</li>
                    </ul>
                </div>
            </div>
            <aside>
                <article class="profile">
                    <h3>OUR LOCATION.</h3>
                    <figure>
                        <img src="../../assets/img/coffee-our.jpg" alt="TumanCoffee">
                        <figcaption>COFEES</figcaption>
                    </figure>
                    <section>
                        <table>
                            <tr>
                                <th>Negara</th>
                                <td>: Indonesia</td>
                            </tr>
                            <tr>
                                <th>Kota</th>
                                <td>: Bekasi</td>
                            </tr>
                            <tr>
                                <th>Kecamatan</th>
                                <td>: Cikarang Barat</td>
                            </tr>
                            <tr>
                                <th>Berdiri</th>
                                <td>: 22 Januari 2019</td>
                            </tr>
                        </table>
                    </section>
                </article>
            </aside>
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