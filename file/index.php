<?php
$title = 'Dashboard';
include ('module/handle/handle_index.php');
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
    <link rel="stylesheet" href="css/template_style.css">
    <link rel="stylesheet" href="css/dashboard_style.css">
    <link rel="stylesheet" href="css/template_responsive.css">
    <link rel="stylesheet" href="css/dashboard_responsive.css">
    <!-- My Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <!--Font Awesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <main>
        <?php include ('layout/navbar.php') ?>

        <section class="hero_sec" style=" background-image: url(assets/img/bg-coffee.png);">
            <article class="swipe-in">
                <h1>Welcome to:<br> Tuman Coffee.</h1>
                <p>Rasakan sensasi kebersamaan dengan coffee.</p>
                <div class="box-1">
                    <div class="btn btn1">
                        <a href="module/menu/product.php">SHOP NOW</a>
                    </div>
                </div>
            </article>
        </section>

        <section class="product-months">
            <div class="slide">
                <?php foreach ($products as $product): ?>
                    <div class="item" style="background-image: url(assets/img/<?= $product['image'] ?>-L.png);">
                        <div class="content">
                            <div class="name"><?= $product['name'] ?></div>
                            <div class="des"><?= $product['description'] ?></div>
                            <button><a href="#">Buy Now</a></button>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="button">
                <button class="prev"><i class="fa-solid fa-arrow-left"></i></button>
                <button class="next"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
        </section>

        <section class="highlight">
            <div>
                <article>
                    <img src="assets/img/waiter.png">
                    <div class="content">
                        <h2>Globally sourced. Locally crafted.</h2>
                        <p>Cupped, tested, developed and roasted at our Coffee Lab right here in West Java</p>
                    </div>
                </article>
                <article>
                    <img src="assets/img/coffee-plant.png">
                    <div class="content">
                        <h2>Modern Coffee. Holistic approach.</h2>
                        <p>it encappsulates the attention to detail, creativiy, and focus on provenance and quality.</p>
                    </div>
                </article>
                <article>
                    <img src="assets/img/coffee.png">
                    <div class="content">
                        <h2>Eighteen Houses, no two the same.</h2>
                        <p>Each of our locations are designed to play a contemporary role in the Modern Coffee
                            experience.</p>
                    </div>
                </article>
            </div>
        </section>

        <section class="definition" style="background-image: url(assets/img/coffee-shop.png)">
            <div class="container">
                <h1 class="swift-up-text">Coffee is a slow take on instant gratification. Thoughtful pours, rare flavour profiles and paraphernalia for your daily cup.</h1>
                <button>
                    <a href="module/menu/about.php">ABOUT US</a>
                </button>
            </div>

        </section>

        <section class="highlight-2">
            <div class="scroll">
                <div class="articles">
                    <article class="RightToLeft">
                        <h1>COFFEE</h1>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus obcaecati autem accusamus?
                        </p>
                    </article>
                    <article class="RightToLeft">
                        <h1>COFFEE</h1>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus obcaecati autem accusamus?
                        </p>
                    </article>
                    <article class="RightToLeft">
                        <h1>COFFEE</h1>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus obcaecati autem accusamus?
                        </p>
                    </article>
                    <article class="RightToLeft">
                        <h1>COFFEE</h1>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus obcaecati autem accusamus?
                        </p>
                    </article>
                </div>
            </div>
        </section>

        <section class="our-location">
                <img src="assets/img/cafe-5.png">
                <div>
                    <h1>Visit Us</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, rerum facilis voluptatum dicta
                        culpa eius nesciunt labore sapiente doloribus eaque vero quis cumque quidem voluptatibus,
                        cupiditate voluptates maxime id perspiciatis!</p>
                    <button>
                        <a href="https://maps.app.goo.gl/yjBM7eN2c7zAbTp16">OUR LOCATIONS</a>
                    </button>
                </div>
        </section>
    </main>
    <?php
    
    include ('layout/footer.php');
    ?>
    <!-- ion icon -->
    <script type="module" src="https://cdn.jsdelivr.net/npm/ionicons@latest/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://cdn.jsdelivr.net/npm/ionicons@latest/dist/ionicons/ionicons.js"></script>

    <!-- JQUERY CDN LINK -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- SLICK SLIDER LINK -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <!-- My Js -->
    <script src="js/template_script.js"></script>
    <script src="js/button_script.js"></script>
    <script src="js/inbox_script.js"></script>
    <script src="js/menu_script.js"></script>
</body>

</html>