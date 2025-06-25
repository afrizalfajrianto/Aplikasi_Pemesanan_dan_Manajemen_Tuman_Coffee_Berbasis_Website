<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<section class="hero-profile">

    <div class="nav-hero ">
        <p>ACCOUNT</p>
        <ul>
            <li><a class="hero-active" href="/profile">My Account</a></li>
            <li><a class="hover" href="/address">Personal & Address.</a></li>
            <li><a class="hover" href="/order">My Orders.</a></li>
            <li><a class="hover" href="/bag">Bag.</a></li>
            <li><a class="hover" href="/logout">Logout.</a></li>
        </ul>
    </div>

    <div class="account swipe-in">
        <hr>
        <h1>Account Details.</h1>
        <div class="details">
            <hr>
            <h4>Name:<br><span>Dipca Anugrah</span></h4>
            <h4>Email:<br><span>dipcaanugrah@gmail.com</span></h4>
            <h4>Address:<br><span>Indonesia. West Java</span></h4>
        </div>
    </div>
</section>



<?= $this->endSection(); ?>