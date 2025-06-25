<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section class="hero-product">
    <article>
        <h1 class="swipe-in">All Products</h1>
    </article>
</section>

<section class="product">

    <article class="card">
        <img class="card__background" src="/img/latte-p.png"
            alt="Photo of Cartagena's cathedral at the background and some colonial style houses" width="1920"
            height="2193" />
        <div class="card__content | flow">
            <div class="card__content--container | flow">
                <h2 class="card__title">Latte</h2>
                <p class="card__description">
                    Coffee latte hanyalah satu atau dua gelas espresso yang kental dan lezat dengan susu kukus segar dan
                    manis di atasnya.
                </p>
                <p class="card__price">
                    Rp. 23.000,00
                </p>
            </div>
            <button class="card__button button_shop">Shop</button>
            <button class="card__button button_add"><ion-icon name="add-outline"></ion-icon></button>
            <div class="card_keterangan">
                <input type="radio" value="panas" name="keterangan">
                <label for="panas">Panas</label>
                <input type="radio" value="dingin" name="keterangan">
                <label for="dingin">Dingin</label>
            </div>

        </div>
    </article>
    <article class="card">
        <img class="card__background" src="/img/cappuccino-P.png"
            alt="Photo of Cartagena's cathedral at the background and some colonial style houses" width="1920"
            height="2193" />
        <div class="card__content | flow">
            <div class="card__content--container | flow">
                <h2 class="card__title">Cappuccino</h2>
                <p class="card__description">
                    Coffee Cappuccino hanyalah satu atau dua gelas espresso yang kental dan lezat dengan susu kukus
                    segar dan manis di atasnya.
                </p>
                <p class="card__price">
                    Rp. 25.000,00
                </p>
            </div>
            <button class="card__button button_shop">Shop</button>
            <button class="card__button button_add"><ion-icon name="add-outline"></ion-icon></button>
            <div class="card_keterangan">
                <input type="radio" value="panas" name="keterangan">
                <label for="panas">Panas</label>
                <input type="radio" value="dingin" name="keterangan">
                <label for="dingin">Dingin</label>
            </div>
        </div>
    </article>
    <article class="card">
        <img class="card__background" src="/img/americano-p.jpg"
            alt="Photo of Cartagena's cathedral at the background and some colonial style houses" width="1920"
            height="2193" />
        <div class="card__content | flow">
            <div class="card__content--container | flow">
                <h2 class="card__title">Americano</h2>
                <p class="card__description">
                    Coffee Americano hanyalah satu atau dua gelas espresso yang kental dan lezat dengan susu kukus segar
                    dan manis di atasnya.
                </p>
                <p class="card__price">
                    Rp. 13.000,00
                </p>
            </div>
            <button class="card__button button_shop">Shop</button>
            <button class="card__button button_add"><ion-icon name="add-outline"></ion-icon></button>
            <div class="card_keterangan">
                <input type="radio" value="panas" name="keterangan">
                <label for="panas">Panas</label>
                <input type="radio" value="dingin" name="keterangan">
                <label for="dingin">Dingin</label>
            </div>
        </div>
    </article>
    <article class="card">
        <img class="card__background" src="/img/expresso-p.jpg"
            alt="Photo of Cartagena's cathedral at the background and some colonial style houses" width="1920"
            height="2193" />
        <div class="card__content | flow">
            <div class="card__content--container | flow">
                <h2 class="card__title">Expresso</h2>
                <p class="card__description">
                    Coffee Expresso hanyalah satu atau dua gelas espresso yang kental dan lezat dengan susu kukus segar
                    dan manis di atasnya.
                </p>
                <p class="card__price">
                    Rp. 23.000,00
                </p>
            </div>
            <button class="card__button button_shop">Shop</button>
            <button class="card__button button_add"><ion-icon name="add-outline"></ion-icon></button>
            <div class="card_keterangan">
                <input type="radio" value="panas" name="keterangan">
                <label for="panas">Panas</label>
                <input type="radio" value="dingin" name="keterangan">
                <label for="dingin">Dingin</label>
            </div>
        </div>
    </article>
    <article class="card">
        <img class="card__background" src="/img/latte-p.png"
            alt="Photo of Cartagena's cathedral at the background and some colonial style houses" width="1920"
            height="2193" />
        <div class="card__content | flow">
            <div class="card__content--container | flow">
                <h2 class="card__title">Latte</h2>
                <p class="card__description">
                    Coffee latte hanyalah satu atau dua gelas espresso yang kental dan lezat dengan susu kukus segar dan
                    manis di atasnya.
                </p>
                <p class="card__price">
                    Rp. 23.000,00
                </p>
            </div>
            <button class="card__button button_shop">Shop</button>
            <button class="card__button button_add"><ion-icon name="add-outline"></ion-icon></button>
            <div class="card_keterangan">
                <input type="radio" value="panas" name="keterangan">
                <label for="panas">Panas</label>
                <input type="radio" value="dingin" name="keterangan">
                <label for="dingin">Dingin</label>
            </div>
        </div>
    </article>
</section>

<?= $this->endSection(); ?>