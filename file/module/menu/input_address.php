<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trending|Tuman</title>
    <link rel="stylesheet" href="../css/template_2_style.css">
    <link rel="stylesheet" href="../css/profile_style.css">
    <link rel="stylesheet" href="../css/address.css">
    <link rel="stylesheet" href="../../css/template_responsive.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<?php include('../layout/navbar_2.php') ?>
<section class="hero-profile">

    <div class="nav-hero ">
        <p>ACCOUNT</p>
        <ul>
            <li><a class="hover" href="profile.php">My Account</a></li>
            <li><a class="hero-active" href="address.php">Personal & Address.</a></li>
            <li><a class="hover" href="order.php">My Orders.</a></li>
            <li><a class="hover" href="bag.php">Bag.</a></li>
            <li><a class="hover" href="logout.php">Logout.</a></li>
        </ul>
    </div>

    <div class="account swipe-in">
        <hr>
        <h1>Personal Information.</h1>
        <div class="form-group">
  <input type="street" 
         class="form-control" 
         id="autocomplete" 
         placeholder="Street">
  
  <input type="city" 
         class="form-control" 
         id="inputCity" 
         placeholder="City">
  
  <input type="state" 
         class="form-control" 
         id="inputState" 
         placeholder="State">
  
  <input type="zip" 
         class="form-control" 
         id="inputZip" 
         placeholder="Zip">
  
  <input type="county" 
         class="form-control" 
         id="inputCounty" 
         placeholder="County">
  
  <input type="country" 
         class="form-control" 
         id="inputCountry" 
         placeholder="Country">
</div>

    </div>
</section>

<?php include('../layout/footer_2.php') ?>