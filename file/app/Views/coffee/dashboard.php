<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section class="hero_sec">
    <article class="swipe-in">
        <h1>Coffee of the month:<br> Latte.</h1>
        <p>Buy three bags get 15% off.</p>
        <div class="box-1">
            <div class="btn btn1">
                <a href="#">SHOP NOW</a>
            </div>
        </div>
    </article>
</section>

<section class="product-months">
    <div class="slide">

        <div class="item" style="background-image: url(/img/coffee-1.png);">
            <div class="content">
                <div class="name">Espresso</div>
                <div class="des">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!</div>
                <button><a href="#">Buy Now</a></button>
            </div>
        </div>
        <div class="item" style="background-image: url(/img/coffee-2.png);">
            <div class="content">
                <div class="name">Ristretto</div>
                <div class="des">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!</div>
                <button><a href="#">Buy Now</a></button>
            </div>
        </div>
        <div class="item" style="background-image: url(/img/coffee-3.png);">
            <div class="content">
                <div class="name">Americano</div>
                <div class="des">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!</div>
                <button><a href="#">Buy Now</a></button>
            </div>
        </div>
        <div class="item" style="background-image: url(/img/coffee-4.png);">
            <div class="content">
                <div class="name">Long Black</div>
                <div class="des">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!</div>
                <button><a href="#">Buy Now</a></button>
            </div>
        </div>
        <div class="item" style="background-image: url(/img/coffee-7.png);">
            <div class="content">
                <div class="name">Latte</div>
                <div class="des">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!</div>
                <button><a href="#">Buy Now</a></button>
            </div>
        </div>
        <div class="item" style="background-image: url(/img/coffee-6.png);">
            <div class="content">
                <div class="name">Cappucino</div>
                <div class="des">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!</div>
                <button><a href="#">Buy Now</a></button>
            </div>
        </div>

    </div>

    <div class="button">
        <button class="prev"><i class="fa-solid fa-arrow-left"></i></button>
        <button class="next"><i class="fa-solid fa-arrow-right"></i></button>
    </div>

</section>

<section class="highlight">
    <div>
        <article>
            <img src="/img/waiter.png">
            <div class="content">
                <h2>Globally sourced. Locally crafted.</h2>
                <p>Cupped, tested, developed and roasted at our Coffee Lab right here in West Java</p>
            </div>
        </article>
        <article>
            <img src="/img/coffee-plant.png">
            <div class="content">
                <h2>Modern Coffee. Holistic approach.</h2>
                <p>it encappsulates the attention to detail, creativiy, and focus on provenance and quality.</p>
            </div>
        </article>
        <article>
            <img src="/img/coffee.png">
            <div class="content">
                <h2>Eighteen Houses, no two the same.</h2>
                <p>Each of our locations are designed to play a contemporary role in the Modern Coffee
                    experience.</p>
            </div>
        </article>
    </div>
</section>

<section class="definition" style="background-image: url(/img/coffee-shop.png)">
    <div class="container">
        <h1 class="swift-up-text">Coffee is a slow take on instant gratification. Thoughtful pours, rare flavour profiles and paraphernalia for your daily cup.</h1>
        <button>
            <a href="about.html">ABOUT US</a>
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
    <img src="/img/cafe-3.png">
    <div class="content">
        <article>
            <h1>Visit Us</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, rerum facilis voluptatum dicta
                culpa eius nesciunt labore sapiente doloribus eaque vero quis cumque quidem voluptatibus,
                cupiditate voluptates maxime id perspiciatis!</p>
            <button>
                <a href="https://maps.app.goo.gl/yjBM7eN2c7zAbTp16">OUR LOCATIONS</a>
            </button>
        </article>
        <div class="image-container">
            <img src="/img/cafe-5.png">
            
        </div>
    </div>
</section>

<?= $this->endSection(); ?>