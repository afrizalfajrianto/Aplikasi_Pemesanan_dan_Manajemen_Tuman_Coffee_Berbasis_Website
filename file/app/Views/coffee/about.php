<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<section class="hero_about">
    <article>
        <h1 class="swipe-in">Our story.</h1>
        <p class="swipe-in">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt at aliquid deleniti
            impedit nemo, est, minus a non nam esse ducimus omnis repellendus eaque nobis tempora dignissimos sed id
            suscipit?</p>
    </article>
</section>

<section class="about">
    <div class="content">
        <h1 class="swipe-in">About Us</h1>
        <p class="swipe-in">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor quam consequatur ipsam
            quaerat nemo blanditiis itaque labore earum voluptatum. Expedita repudiandae officiis, repellendus in et
            debitis reprehenderit ducimus velit amet.</p>
        <div class="social-media">
            <ul>
                <li><a href="https://mail.google.com/"><ion-icon name="mail-outline"></ion-icon></a>EMAIL</li>
                <li><a href=""><ion-icon name="phone-portrait-outline"></ion-icon></a>PHONE</li>
                <li><a href="https://github.com/DipcaAnugrah"><ion-icon name="logo-facebook"></ion-icon></a>FACEBOOK
                </li>
                <li><a href="https://www.instagram.com/anugrahdpc"><ion-icon
                            name="logo-instagram"></ion-icon></a>INSTAGRAM</li>
                <li><a href="https://twitter.com/i/flow/login"><ion-icon name="logo-twitter"></ion-icon></a>TWITTER</li>
            </ul>
        </div>
    </div>
    <aside>
        <article class="profile">
            <h3>OUR LOCATION.</h3>
            <figure>
                <img src="/img/coffee-our.jpg" alt="DipcaAnugrah">
                <figcaption>COFEESS</figcaption>
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


<?= $this->endSection(); ?>