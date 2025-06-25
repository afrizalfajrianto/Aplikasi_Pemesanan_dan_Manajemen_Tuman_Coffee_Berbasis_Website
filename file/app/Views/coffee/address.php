<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<section class="hero-profile">

    <div class="nav-hero ">
        <p>ACCOUNT</p>
        <ul>
            <li><a class="hover" href="/profile">My Account</a></li>
            <li><a class="hero-active" href="/address">Personal & Address.</a></li>
            <li><a class="hover" href="/order">My Orders.</a></li>
            <li><a class="hover" href="/bag">Bag.</a></li>
            <li><a class="hover" href="/logout">Logout.</a></li>
        </ul>
    </div>

    <div class="account swipe-in">
        <hr>
        <h1>Personal Information.</h1>
        <div class="details">
            <hr>
            <h4>Nama:<br><span>Dipca Anugrah</span></h4>
            <h4>Email:<br><span>dipcaanugrah@gmail.com</span></h4>
            <h4>No.Hp:<br><span>+6289567656676</span></h4>
            <h4>Kota/Kabupaten:<br><span>Bekasi</span></h4>
            <h4>Kecamatan:<br><span>Cikarang Barat</span></h4>
            <h4>Kelurahan:<br><span>Mekarwangi</span></h4>
            <h4>Catatan:<br><span>Kp. Rawa Banteng RT/RW 005/001</span></h4>

        </div>
    </div>
</section>


<?= $this->endSection(); ?>