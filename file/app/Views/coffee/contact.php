<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>


<section class="hero_contact">
    <article>
        <h1 class="swipe-in">Talk to us.</h1>
        <p class="swipe-in">Pakar kami siap membantu apa pun pertanyaan Anda, Anda datang ke tempat yang tepat.</p>
    </article>
</section>

<section class="contact_us">
    <h2>Send us a message.</h2>
    <form class="form">

        <p type="Name:"><input placeholder="Write your name here.."></input></p>
        <p type="Email:"><input placeholder="Let us know how to contact you back.."></input></p>
        <p type="Message:"><input placeholder="What would you like to tell us.."></input></p>
        <button>Send Message</button>
        <div>
            <span class="fa fa-phone"></span>001 1023 567
            <span class="fa fa-envelope-o"></span> contact@company.com
        </div>
    </form>
</section>
<?= $this->endSection(); ?>