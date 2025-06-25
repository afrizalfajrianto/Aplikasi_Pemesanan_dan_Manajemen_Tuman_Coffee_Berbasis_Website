<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<section class="bag">
    <div class="shopping-cart swipe-in">
        <!-- Title -->
        <div class="title">
            Shopping Bag
        </div>

        <!-- Product #1 -->
        <div class="item">
            <div class="buttons">
                <span class="delete-btn"></span>
                <span class="like-btn"></span>
            </div>

            <div class="image">
                <img src="/img/americano-p.jpg" alt="" />
            </div>

            <div class="description">
                <span>Americano</span>
                <span>coffee dengan rasa pahit</span>
                <span>Panas</span>
            </div>

            <div class="quantity">
                <button class="plus-btn" type="button" name="button">
                    <img src="/icon/plus.svg" alt="" />
                </button>
                <input type="text" name="name" value="1">
                <button class="minus-btn" type="button" name="button">
                    <img src="/icon/minus.svg" alt="" />
                </button>
            </div>

            <div class="total-price">23.000,00</div>
        </div>

        <!-- Product #2 -->
        <div class="item">
            <div class="buttons">
                <span class="delete-btn"></span>
                <span class="like-btn"></span>
            </div>

            <div class="image">
                <img src="/img/latte-P.png" alt="" />
            </div>

            <div class="description">
                <span>Latte</span>
                <span>coffee dengan rasa manis</span>
                <span>Dingin</span>
            </div>

            <div class="quantity">
                <button class="plus-btn" type="button" name="button">
                    <img src="/icon/plus.svg" alt="" />
                </button>
                <input type="text" name="name" value="1">
                <button class="minus-btn" type="button" name="button">
                    <img src="/icon/minus.svg" alt="" />
                </button>
            </div>

            <div class="total-price">23.000,00</div>
        </div>

        <!-- Product #3 -->
        <div class="item">
            <div class="buttons">
                <span class="delete-btn"></span>
                <span class="like-btn"></span>
            </div>

            <div class="image">
                <img src="/img/expresso-p.jpg" alt="" />
            </div>

            <div class="description">
                <span>Expresso</span>
                <span>coffee dengan rasa manis</span>
                <span>Panas</span>
            </div>

            <div class="quantity">
                <button class="plus-btn" type="button" name="button">
                    <img src="/icon/plus.svg" alt="" />
                </button>
                <input type="text" name="name" value="1">
                <button class="minus-btn" type="button" name="button">
                    <img src="/icon/minus.svg" alt="" />
                </button>
            </div>

            <div class="total-price">23.000,00</div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>