<?php 
include('../handle/handle_profile.php');
$title = 'Account'; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title; ?>|Tuman</title>
  <link rel="stylesheet" href="../../css/template_2_style.css">
  <link rel="stylesheet" href="../../css/profile_style.css">
  <link rel="stylesheet" href="../../css/template_responsive.css">
  
  <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <main>
    <?php include ('../../layout/navbar_2.php') ?>
    <section class="hero-profile">
      <div class="nav-hero ">
        <p>ACCOUNT</p>
        <ul>
          <li><a class="hero-active" href="profile.php">My Account</a></li>
          <li><a class="hover" href="address.php">Personal & Address.</a></li>
          <li><a class="hover" href="order.php">My Orders.</a></li>
          <li><a class="hover" href="bag.php">Bag.</a></li>
          <li><a class="hover" href="logout.php">Logout.</a></li>
        </ul>
      </div>
      <div class="account swipe-in">
        <hr>
        <h1>Account Details.</h1>
        <div class="details">
          <hr>
          <h4>Name:<br><span><?php echo $username; ?></span></h4>
          <h4>Email:<br><span><?php echo $email; ?></span></h4>
          <h4>Country:<br><span><?php echo $country; ?></span></h4>
        </div>
      </div>
    </section>
  </main>
  <?php 
  
  include ('../../layout/footer_2.php') 
  ?>
  <!-- ion icon -->
  <script type="module" src="https://cdn.jsdelivr.net/npm/ionicons@latest/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://cdn.jsdelivr.net/npm/ionicons@latest/dist/ionicons/ionicons.js"></script>

  <!-- JQUERY CDN LINK -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- SLICK SLIDER LINK -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

  <!-- My Js -->
  <script src="../../js/template_script.js"></script>
  <script src="../../js/button_script.js"></script>
  <script src="../../js/inbox_script.js"></script>
  <script src="../../js/menu_script.js"></script>
</body>

</html>