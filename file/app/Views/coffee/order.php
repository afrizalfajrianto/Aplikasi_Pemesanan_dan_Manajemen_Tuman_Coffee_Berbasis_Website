<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<section class="hero-profile">

<div class="nav-hero ">
    <p>ACCOUNT</p>
    <ul>
        <li><a class="hover" href="/profile">My Account</a></li>
        <li><a class="hover" href="/address">Personal & Address.</a></li>
        <li><a class="hero-active" href="/order">My Orders.</a></li>
        <li><a class="hover" href="/bag">Bag.</a></li>
        <li><a class="hover" href="/logout">Logout.</a></li>
    </ul>
</div>

<div class="account swipe-in">
    <hr>
    <h1>Order Details.</h1>
    <hr>
    <div class="order">
        <img src="/img/latte-P.png">
        <div class="content">
            <h1>Latte <span>x1</span></h1>
            <p>dolor sit amet, consectetur adipisicing elit. Mollitia sunt</p>
            <h4>Total:</h4>
            <p class="price">38.000,00</p>
            <p>Sedang dalam proses</p>
            <details>
                <summary>Details</summary>
                <hr>
                <div class="detail_order">
                    <div class="detail_head">
                        <p>Latte</p>
                        <p>Harga</p>
                        <p>Pengiriman</p>
                        <p>Total</p>
                        <p>Waktu Pemesanan</p>
                        <p>Alamat</p>
                    </div>
                    <div class="detail_body">
                        <p>: x1</p>
                        <p>: 23.000,00</p>
                        <p>: 15.000,00</p>
                        <p>: 38.000,00</p>
                        <p>: 12-04-2024 12:03</p>
                        <p>: Cikarang Barat</p>
                    </div>
                </div>
            </details>
            <hr>
            <button class="batal">Batalkan Pesanan</button>
            <button class="terima">Pesanan Diterima</button>
        </div>
    </div>
</div>
</section>

<?= $this->endSection(); ?>