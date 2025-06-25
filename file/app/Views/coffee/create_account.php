<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<section class="register">
            <div class="main swipe-in">  	
                <input type="checkbox" id="chk" aria-hidden="true">
        
                    <div class="signup">
                        <form>
                            <label class="title" for="chk" aria-hidden="true">Sign up</label>
                            <input type="text" name="txt" placeholder="User name" required="">
                            <input type="email" name="email" placeholder="Email" required="">
                            <input type="password" name="pswd" placeholder="Password" required="">
                            <button class="button_register">Sign up</button>
                        </form>
                    </div>
        
                    <div class="login">
                        <form>
                            <label class="title" for="chk" aria-hidden="true">Login</label>
                            <input type="email" name="email" placeholder="Email" required="">
                            <input type="password" name="pswd" placeholder="Password" required="">
                            <button class="button_login">Login</button>
                        </form>
                    </div>
            </div>
        </section>
        

<?= $this->endSection(); ?>