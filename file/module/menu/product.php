<?php
$title = 'Products';
include ('../handle/handle_product.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trending|Tuman</title>
    <link rel="stylesheet" href="../../css/template_2_style.css">
    <link rel="stylesheet" href="../../css/product_style.css">
    <link rel="stylesheet" href="../../css/template_responsive.css">
    <link rel="stylesheet" href="../../css/product_responsive.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <main>
        <?php include ('../../layout/navbar_2.php') ?>
        <section class="hero-product">
            <article>
                <h1 class="swipe-in">All Products</h1>
            </article>
        </section>

        <section class="product">
            <?php foreach ($all_products as $product): ?>
                <article class="card">
                    <img class="card__background" src="../../assets/img/<?= $product['image'] ?>.png"
                        alt="Photo of Cartagena's cathedral at the background and some colonial style houses"  />
                    <div class="card__content | flow">
                        <div class="card__content--container | flow">
                            <h2 class="card__title"><?= $product['name'] ?></h2>
                            <p class="card__description"><?= $product['description'] ?></p>
                            <p class="card__price">Rp. <?= number_format($product['price'], 2) ?></p>
                        </div>

                        <a href="../handle/handle_shop.php?product_id=<?= $product['id'] ?>"
                            class="card__button button_shop">Shop</a>
                        <!-- Tambahkan tautan untuk menambahkan produk ke keranjang -->
                        <a href="../handle/handle_bag.php?product_id=<?= $product['id'] ?>"
                            class="card__button button_add"><ion-icon name="add-outline"></ion-icon></a>
                    </div>
                </article>
            <?php endforeach; ?>
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