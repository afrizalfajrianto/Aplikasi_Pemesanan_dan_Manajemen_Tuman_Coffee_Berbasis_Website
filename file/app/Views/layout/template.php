<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $title; ?>
    </title>

    <!-- My CSS -->
    <link rel="stylesheet" href="/css/<?= $template_style; ?>">
    <link rel="stylesheet" href="/css/<?= $style; ?>">
    <!-- My Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <!--Font Awesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <main>
        <?= $this->include('layout/navbar'); ?>

        <?= $this->renderSection('content'); ?>

        <section class="inbox">
            <div class="content">
                <h1 id="text">Proudly originating in a former 19th century watch house 'on London's famous Bermondsey
                    Stree.</h1>
            </div>
            <hr>
            <div class="content">
                <h2>Perk up your inbox</h2>
                <p>Become a subscriber and enjoy 10% off your first order plus access to the hottest coffee beans while
                    they’re still cooling.</p>
                <form action="" method="POST">
                    <input type="email" placeholder="Enter your email address.">
                    <ion-icon name="arrow-forward-outline"></ion-icon>
                </form>
            </div>
        </section>

    </main>
    <?= $this->include('layout/footer'); ?>

    <!-- ion icon -->
    <script type="module" src="https://cdn.jsdelivr.net/npm/ionicons@latest/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://cdn.jsdelivr.net/npm/ionicons@latest/dist/ionicons/ionicons.js"></script>

    <!-- JQUERY CDN LINK -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- SLICK SLIDER LINK -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <!-- My Js -->
    <script src="/js/template_script.js"></script>
    <script src="/js/button_script.js"></script>
    <script src="/js/inbox_script.js"></script>
</body>

</html>