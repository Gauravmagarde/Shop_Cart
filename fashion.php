<?php

include "admin/connect.php";
session_start();
if (!isset($_SESSION['cart'])) {
  $_SESSION['cart'] = array();
}
unset($_SESSION['qty_array']);




?>
<!DOCTYPE html>
<html>

<head>
  <title>Shop Cart</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!----Font Awesome--->
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!----Google Fonts--->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;600&display=swap" rel=" stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

  <style type="text/css">
    body {
      font-family: 'Montserrat', sans-serif;
    }

    .navbar-expand-md {
      border-bottom: 1px solid #ededed;
      height: 90px;
    }

    .input-group.md-form.form-sm.form-1 input {
      border: 1px solid #bdbdbd;
    }

    .input-group.md-form.form-sm.form-2 input {
      border: 1px solid #bdbdbd;

    }

    .input-group.md-form.form-sm.form-2 input.red-border {
      border: 1px solid #ef9a9a;
    }

    .input-group.md-form.form-sm.form-2 input.lime-border {
      border: 1px solid #cddc39;
    }

    .input-group.md-form.form-sm.form-2 input.amber-border {
      border: 1px solid #ffca28;
    }

    ::placeholder {
      font-family: 'Montserrat', sans-serif;
      padding: 8px;
      font-size: 14px;
    }

    input[type=text] {
      height: 45px;
    }

    .input-group .btn {
      background: #0B0B45;
      color: white;
      width: 70px;
    }

    .nav-item .btn {
      background-color: #0B0B45;
      box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .23), inset 1px 1px 0 0 hsla(0, 0%, 100%, .2);
      padding: 10px 0;
      text-align: center;
      height: 41px;
      border-radius: 2px;
      font-weight: 500;
      width: 120px;
      display: inline-block;
      color: #FFFFFF;
      text-decoration: none;
      color: inherit;
      border: none;
      outline: none;
    }

    .nav-item {
      margin: 8px;
    }

    .nav-text p {
      font-family: 'Montserrat', sans-serif;
      font-size: 13px;
      margin-top: 3px;
      color: black;
      text-transform: lowercase;

    }

    .navbar-nav li {
      font-family: 'Montserrat', sans-serif;
      font-size: 14px;
      color: white;
      font-weight: bold;
    }

    .navbar-nav li a {
      color: white;

    }

    .cart-button {
      background-color: #0B0B45;
      box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .23), inset 1px 1px 0 0 hsla(0, 0%, 100%, .2);
      padding: 10px 0;
      text-align: center;
      height: 41px;
      border-radius: 2px;
      font-weight: 500;
      width: 120px;
      display: inline-block;
      color: #FFFFFF;
      text-decoration: none;
      color: inherit;
      border: none;
      outline: none;
    }

    .cart-button:hover {
      text-decoration: none;
      color: #fff;
      cursor: pointer;
    }

    .cart-button .fa {
      margin-right: 10px;
    }

    .item-number {
      border-radius: 3px;
      background-color: rgba(0, 0, 0, .1);
      height: 20px;
      padding: 3px 6px;
      font-weight: 500;
      display: inline-block;
      color: #fff;
      line-height: 12px;
      margin-left: 10px;
    }

    .dropdown-menu a {
      color: black;
    }

    /* Style the tab */
    .tab {
      float: left;
      background-color: white;
      width: 200px;
      height: 100%;
      top: 0;
    }

    /* Style the buttons inside the tab */
    .tab button {
      display: block;
      background-color: inherit;
      color: grey;
      width: 100%;
      border: none;
      outline: none;
      text-align: left;
      cursor: pointer;
      transition: 0.3s;
      font-size: 14px;
      font-family: 'Montserrat', sans-serif;
      margin-top: 10px;
      font-weight: bold;

    }

    /* Change background color of buttons on hover */
    .tab button:hover {
      color: #0B0B45;
    }

    /* Create an active/current "tab button" class */
    .tab button.active {
      color: #0B0B45;
    }

    /* Style the tab content */
    .tabcontent {
      float: left;
      padding: 0px 12px;
      width: 100%;
      border-left: none;
      height: 100%;

    }

    .card-body img {
      display: inline-block;
      width: 220px;
      height: 200px;
      overflow: hidden;
    }

    .car-title h6 {
      display: inline-block;
      width: 220px;
      height: 200px;
      overflow: hidden;
    }

    .dropdown-menu a {
      display: block;
      background-color: inherit;
      color: grey;
      width: 100%;
      border: none;
      outline: none;
      margin-left: 20px;
      cursor: pointer;
      transition: 0.3s;
      font-size: 14px;
      font-family: 'Montserrat', sans-serif;
      font-weight: bold;
      text-decoration: none;
      padding-top: 5px;
    }

    .dropdown-menu a:hover {
      color: #0B0B45;
    }

    .dropdown-menu a.active {
      color: #0B0B45;
    }

    .dropdown-submenu {
      position: relative;
    }

    .dropdown-submenu .dropdown-menu {
      margin-top: -1px;
    }

    /*shop*/
    .product h4 {
      font-size: 21px;
      font-weight: bold;

    }

    /*footer*/
    .footer-text p {
      color: grey
    }

    @media (max-width: 801px) {

      #hideres {
        display: none;
      }

      .form-inline input {
        margin: 10px 0;
      }

      .form-inline {
        flex-direction: column;
        align-items: stretch;
      }

      .mail .text h3 {

        font-family: 'Montserrat', sans-serif;
        font-size: 12px;
        font-weight: bold;
      }

      .list li {
        color: #0B0B45;
        list-style: none;
      }


      h4 {
        margin: 2rem 0rem;
      }


      .item {
        border-radius: 4px;
        padding: 0.5rem;
        margin: 0.2rem;
      }

      .card-body img {
        display: inline-block;
        width: 220px;
        height: 200px;
        overflow: hidden;
      }

      .zoom {
        transition: transform .2s;
        /* Animation */
        margin: 0 auto;
      }

      .zoom:hover {
        transform: scale(1.1);
        /* (150% zoom)*/
      }

      /*brands*/


      /*footer*/
      .footer-text p {
        color: grey;
        font-size: 18px;

      }
    }

    @media (max-width:600px) {
      #logores {
        height: 70px;
      }

      .product-list {
        margin-left: 85px;
      }

      #resshop {
        margin-top: -150px;
      }

      #banresim {
        height: 200px;
        width: 100%;
      }

      #hideres {
        display: none;
      }
    }

    @media (max-width:545px) {
      .navbar-nav {
        display: inline;
      }

      #banresim {
        height: 150px;
        width: 100%;
      }

      #hideres {
        display: none;
      }
    }

    @media (max-width:480px) {

      .product-list {
        margin-left: 30px;
      }

      #resshop {
        margin-top: -170px;
      }

      #banresim {
        height: 130px;
        width: 100%;
      }

      #hideres {
        display: none;
      }
    }

    @media (max-width:380px) {

      .product-list {
        margin-left: 10px;
      }

      #resshop {
        margin-top: -180px;
      }

      #banresim {
        height: 120px;
        width: 100%;
      }

      #hideres {
        display: none;
      }
    }

    @media (max-width:320px) {

      .product-list {
        margin-left: 5px;
      }

      #banresim {
        height: 150px;
        width: 100%;
      }

      #hideres {
        display: none;
      }
    }
  </style>
</head>

<body>
  <!---- navbar---->
  <header>
    <nav class="navbar navbar-expand-md navbar-light sticky-top " style="background-color: #F0F8FF;">
      <a class="navbar-brand" href="index.php">
        <img src="image/logo4.jpg" height="85px" id="logores" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav11" aria-controls="basicExampleNav11" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse input-group">
        <input type="text" class="form-control" placeholder="Search for products.">
        <div class="input-group-append">
          <button class="btn" type="button">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>
      <div class="collapse navbar-collapse" id="basicExampleNav11" style="background-color: #F0F8FF;">
        <ul class="navbar-nav ml-auto">

          <?php
          if (isset($_SESSION['customer'])) {
            echo "
        <li class='nav-item' style='padding-left: 10px; '>
        <a href='logout.php'><button class='btn' style='font-size: 14px;'><i class='fa fa-sign-out'></i> logout</button></a> </li> 
        ";
          } else {
            echo "
        <li class='nav-item' style='padding-left: 10px; '>
        <a href='login.php'><button class='btn' style='font-size: 14px;' ><i class='fa fa-sign-in'></i> Login</button></a>
        </li> 
        ";
          }

          ?>
          <li class="nav-item" style='padding-left: 10px; '>
            <a href="cart.php" class="cart-button">
              <i class="fa fa-shopping-cart" aria-hidden="true"></i>Cart
              <span class="item-number " id="hideres"><?php echo count($_SESSION['cart']); ?></span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="electronics.php">ELECTRONICS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="books.php">BOOKS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="furniture.php">FURNITURE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="fashion.php">FASHION</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!----->

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-2" id="hideres">
        <div class="tab" style="border-right: 2px solid #ccc;"><br>
          <p style="margin-left: 8px; font-size: 18px; font-weight: bold; font-family: 'Montserrat', sans-serif;">Fashion</p>
          <button class="tablinks" onclick="openCity(event, 'All')" id="defaultOpen">All</button>
          <div class="dropdown show">
            <button class=" btn-default dropdown-toggle" class="tablinks" onclick="openCity(event, 'All')" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Women's Wear</button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <button class="tablinks" onclick="openCity(event, 'Ethnic_Fusion')" class="dropdown-item">Ethnic Fusion</button>
              <button class="tablinks" onclick="openCity(event, 'Western_Wear')" class="dropdown-item">Western Wear</button>
              <li class="dropdown-submenu">
                <button class="test" class="tablinks" onclick="openCity(event, 'All')" class="dropdown-item">Jewellery</button>
                <ul class="dropdown-menu">
                  <li><button tabindex="-1" class="tablinks" onclick="openCity(event, 'Earrings')" class="dropdown-item">Earrings</button></li>
                  <li><button tabindex="-1" class="tablinks" onclick="openCity(event, 'Jewellery_set')" class="dropdown-item">Jewellery Set</button></li>
                  <li><button tabindex="-1" class="tablinks" onclick="openCity(event, 'Bracelets')" class="dropdown-item">Bracelets</button></li>
                </ul>
              </li>
              <li class="dropdown-submenu">
                <button class="test" class="tablinks" onclick="openCity(event, 'All')" class="dropdown-item">Foot wear</button>
                <ul class="dropdown-menu">
                  <li><button tabindex="-1" class="tablinks" onclick="openCity(event, 'Fancy_Wear')" class="dropdown-item">Fancy Wear</button></li>
                  <li><button tabindex="-1" class="tablinks" onclick="openCity(event, 'Flip_Flops')" class="dropdown-item">Flip Flops</button></li>
                  <li><button tabindex="-1" class="tablinks" onclick="openCity(event, 'Sneakers')" class="dropdown-item">Sneakers</button></li>
                </ul>
              </li>
            </div>
          </div>

          <div class="dropdown show">

            <button class=" btn-default dropdown-toggle" class="tablinks" onclick="openCity(event, 'All')" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Men's Wear</button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <button class="tablinks" onclick="openCity(event, 'Top_Wear')" class="dropdown-item">Top Wear</button>
              <button class="tablinks" onclick="openCity(event, 'Bottom_Wear')" class="dropdown-item">Bottom Wear</button>
            </div>
          </div>

          <div class="dropdown show">

            <button class=" btn-default dropdown-toggle" class="tablinks" onclick="openCity(event, 'kids_wear')" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kid's Wear</button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <button class="tablinks" onclick="openCity(event, 'Girls_Wear')" class="dropdown-item">Girl's Wear</button>
              <button class="tablinks" onclick="openCity(event, 'Boys_Wear')" class="dropdown-item">Boy's Wear</button>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-10" style="padding-left: 40px;"><br>
        <div id="All" class="tabcontent">
          <div class="product">

            <!------ads--->
            <!-- <div class="ads">
            <div class="row" >
              <div class="col-lg-4" >
                <img src="image/bracelet1.jpg" style="height: 250px; width:300px; ">
              </div>
              <div class="col-lg-4">
                <img src="image/banner-clotes.jpg" style="height: 250px; width: 300px; ">
              </div>
              <div class="col-lg-4">
                <img src="image/flip-flop-banner.jpg" style="height: 250px; width: 300px;">
              </div>
            </div>
          </div> -->

            <!-- <div id="demo" class="carousel slide" data-ride="carousel" data-interval="3000"> -->
            <!-- The slideshow
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="row">
                    <div class="col-lg-4">
                      <img src="image/bracelet1.jpg" style="height: 250px; width:300px; ">
                    </div>
                    <div class="col-lg-4">
                      <img src="image/banner-clotes.jpg" style="height: 250px; width: 300px; ">
                    </div>
                    <div class="col-lg-4">
                      <img src="image/flip-flop-banner.jpg" style="height: 250px; width: 300px;">
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="row">
                    <div class="col-lg-4">
                      <img src="image/kids-banner.jpg" style="height: 250px; width:300px; ">
                    </div>
                    <div class="col-lg-4">
                      <img src="image/mens-banner.jpg" style="height: 250px; width: 300px; ">
                    </div>
                    <div class="col-lg-4">
                      <img src="image/winter-banner.jpg" style="height: 250px; width: 300px;">
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="image/banner-j.jpg" style="height: 250px; width: 100%;">
                </div>
              </div>
              Left and right controls -->
            <!-- <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
              </a>
              <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
              </a>
            </div> -->
            <br><br>
            <!-------->
            <h3 style="font-family:new times roman;">Explore Popular Categories</h3>
            <br><br>
            <div class="row">
              <?php
              include "admin/connect.php";
              $query = mysqli_query($connect, "select * from product where category= 'Fashion'");
              $num = mysqli_num_rows($query);
              if ($num > 0) {
                while ($row = mysqli_fetch_array($query)) {
              ?>
                  <div class="product-list">
                    <div class="col-lg-3">
                      <div class="card" style="width: 230px;  ">
                        <div class="card-body">
                          <a href="temp.php?id=<?php echo $row['id']; ?>">
                            <img src="image/<?php echo $row['image_1']; ?>" class="img-fluid" style="display: inline-block; width: 220px; height: 200px; overflow: hidden;"></a>
                          <div class="card-title">
                            <p style="font-weight: bold;">&#8377;<?php echo $row['price'] ?></p>
                            <h6 style="color: grey"><?php echo $row['category'] ?></h6>
                            <h6><b><?php echo $row['product_name'] ?></b></h6><br>
                            <center><a href="add_to_cart.php?id=<?php echo $row['id']; ?>" class="btn" style="background: #0B0B45; color: white; font-family: 'Montserrat', sans-serif; font-size: 14px;"><i class="fa fa-shopping-cart" aria-hidden="true" style="margin-right: 5px;"></i>Add to cart</a></center>
                          </div>
                        </div>
                      </div>
                    </div><br>
                  </div>
              <?php
                }
              }
              ?>
            </div>
          </div>
        </div>
        <div id="Ethnic_Fusion" class="tabcontent">
          <div class="product">
            <br><br>
            <h3 style="font-family:new times roman;">Fusion Wear For Women</h3>
            <br><br><br>
            <div class="row">
              <?php
              include "admin/connect.php";
              $query = mysqli_query($connect, "select * from product where sub_category= 'Ethnic Wear'");
              $num = mysqli_num_rows($query);
              if ($num > 0) {
                while ($row = mysqli_fetch_array($query)) {
              ?>
                  <div class="product-list">
                    <div class="col-lg-3">
                      <div class="card" style="width: 230px;  ">
                        <div class="card-body">
                          <a href="temp.php?id=<?php echo $row['id']; ?>">
                            <img src="image/<?php echo $row['image_1']; ?>" class="img-fluid" style="display: inline-block; width: 220px; height: 200px; overflow: hidden;"></a>
                          <div class="card-title">
                            <p style="font-weight: bold;">&#8377;<?php echo $row['price'] ?></p>
                            <h6 style="color: grey"><?php echo $row['category'] ?></h6>
                            <h6><b><?php echo $row['product_name'] ?></b></h6><br>
                            <center><a href="add_to_cart.php?id=<?php echo $row['id']; ?>" class="btn" style="background: #0B0B45; color: white; font-family: 'Montserrat', sans-serif; font-size: 14px;"><i class="fa fa-shopping-cart" aria-hidden="true" style="margin-right: 5px;"></i>Add to cart</a></center>
                          </div>
                        </div>
                      </div>
                    </div><br>
                  </div>
              <?php
                }
              }
              ?>
            </div>
          </div>
        </div>

        <div id="Western_Wear" class="tabcontent">
          <div class="product">
            <br><br>
            <h3 style="font-family:new times roman;">Fusion Wear For Women</h3>
            <br><br><br>
            <div class="row">
              <?php
              include "admin/connect.php";
              $query = mysqli_query($connect, "select * from product where sub_category= 'Western Wear'");
              $num = mysqli_num_rows($query);
              if ($num > 0) {
                while ($row = mysqli_fetch_array($query)) {
              ?>
                  <div class="product-list">
                    <div class="col-lg-3">
                      <div class="card" style="width: 230px;  ">
                        <div class="card-body">
                          <a href="temp.php?id=<?php echo $row['id']; ?>">
                            <img src="image/<?php echo $row['image_1']; ?>" class="img-fluid" style="display: inline-block; width: 220px; height: 200px; overflow: hidden;"></a>
                          <div class="card-title">
                            <p style="font-weight: bold;">&#8377;<?php echo $row['price'] ?></p>
                            <h6 style="color: grey"><?php echo $row['category'] ?></h6>
                            <h6><b><?php echo $row['product_name'] ?></b></h6><br>
                            <center><a href="add_to_cart.php?id=<?php echo $row['id']; ?>" class="btn" style="background: #0B0B45; color: white; font-family: 'Montserrat', sans-serif; font-size: 14px;"><i class="fa fa-shopping-cart" aria-hidden="true" style="margin-right: 5px;"></i>Add to cart</a></center>
                          </div>
                        </div>
                      </div>
                    </div><br>
                  </div>
              <?php
                }
              }
              ?>
            </div>
          </div>
        </div>

        <div id="Earrings" class="tabcontent">
          <div class="product">
            <br><br>
            <h3 style="font-family:new times roman;">Fashion Jewellery</h3>
            <br><br><br>
            <div class="row">
              <?php
              include "admin/connect.php";
              $query = mysqli_query($connect, "select * from product where sub_category= 'Earrings'");
              $num = mysqli_num_rows($query);
              if ($num > 0) {
                while ($row = mysqli_fetch_array($query)) {
              ?>
                  <div class="product-list">
                    <div class="col-lg-3">
                      <div class="card" style="width: 230px;  ">
                        <div class="card-body">
                          <a href="temp.php?id=<?php echo $row['id']; ?>">
                            <img src="image/<?php echo $row['image_1']; ?>" class="img-fluid" style="display: inline-block; width: 220px; height: 200px; overflow: hidden;"></a>
                          <div class="card-title">
                            <p style="font-weight: bold;">&#8377;<?php echo $row['price'] ?></p>
                            <h6 style="color: grey"><?php echo $row['category'] ?></h6>
                            <h6><b><?php echo $row['product_name'] ?></b></h6><br>
                            <center><a href="add_to_cart.php?id=<?php echo $row['id']; ?>" class="btn" style="background: #0B0B45; color: white; font-family: 'Montserrat', sans-serif; font-size: 14px;"><i class="fa fa-shopping-cart" aria-hidden="true" style="margin-right: 5px;"></i>Add to cart</a></center>
                          </div>
                        </div>
                      </div>
                    </div><br>
                  </div>
              <?php
                }
              }
              ?>
            </div>
          </div>
        </div>

        <div id="Jewellery_set" class="tabcontent">
          <div class="product">
            <br><br>
            <h3 style="font-family:new times roman;">Fashion Jewellery</h3>
            <br><br><br>
            <div class="row">
              <?php
              include "admin/connect.php";
              $query = mysqli_query($connect, "select * from product where sub_category= 'Jewellery set'");
              $num = mysqli_num_rows($query);
              if ($num > 0) {
                while ($row = mysqli_fetch_array($query)) {
              ?>
                  <div class="product-list">
                    <div class="col-lg-3">
                      <div class="card" style="width: 230px;  ">
                        <div class="card-body">
                          <a href="temp.php?id=<?php echo $row['id']; ?>">
                            <img src="image/<?php echo $row['image_1']; ?>" class="img-fluid" style="display: inline-block; width: 220px; height: 200px; overflow: hidden;"></a>
                          <div class="card-title">
                            <p style="font-weight: bold;">&#8377;<?php echo $row['price'] ?></p>
                            <h6 style="color: grey"><?php echo $row['category'] ?></h6>
                            <h6><b><?php echo $row['product_name'] ?></b></h6><br>
                            <center><a href="add_to_cart.php?id=<?php echo $row['id']; ?>" class="btn" style="background: #0B0B45; color: white; font-family: 'Montserrat', sans-serif; font-size: 14px;"><i class="fa fa-shopping-cart" aria-hidden="true" style="margin-right: 5px;"></i>Add to cart</a></center>
                          </div>
                        </div>
                      </div>
                    </div><br>
                  </div>
              <?php
                }
              }
              ?>
            </div>
          </div>
        </div>


        <div id="Bracelets" class="tabcontent">
          <div class="product">
            <br><br>
            <h3 style="font-family:new times roman;">Fashion Jewellery</h3>
            <br><br><br>
            <div class="row">
              <?php
              include "admin/connect.php";
              $query = mysqli_query($connect, "select * from product where sub_category= 'Bracelets'");
              $num = mysqli_num_rows($query);
              if ($num > 0) {
                while ($row = mysqli_fetch_array($query)) {
              ?>
                  <div class="product-list">
                    <div class="col-lg-3">
                      <div class="card" style="width: 230px;  ">
                        <div class="card-body">
                          <a href="temp.php?id=<?php echo $row['id']; ?>">
                            <img src="image/<?php echo $row['image_1']; ?>" class="img-fluid" style="display: inline-block; width: 220px; height: 200px; overflow: hidden;"></a>
                          <div class="card-title">
                            <p style="font-weight: bold;">&#8377;<?php echo $row['price'] ?></p>
                            <h6 style="color: grey"><?php echo $row['category'] ?></h6>
                            <h6><b><?php echo $row['product_name'] ?></b></h6><br>
                            <center><a href="add_to_cart.php?id=<?php echo $row['id']; ?>" class="btn" style="background: #0B0B45; color: white; font-family: 'Montserrat', sans-serif; font-size: 14px;"><i class="fa fa-shopping-cart" aria-hidden="true" style="margin-right: 5px;"></i>Add to cart</a></center>
                          </div>
                        </div>
                      </div>
                    </div><br>
                  </div>
              <?php
                }
              }
              ?>
            </div>
          </div>
        </div>


        <div id="Fancy_Wear" class="tabcontent">
          <div class="product">

            <br><br>
            <h3 style="font-family:new times roman;">Explore Popular Categories</h3>
            <br><br><br>
            <div class="row">
              <?php
              include "admin/connect.php";
              $query = mysqli_query($connect, "select * from product where sub_category= 'Sandals'");
              $num = mysqli_num_rows($query);
              if ($num > 0) {
                while ($row = mysqli_fetch_array($query)) {
              ?>
                  <div class="product-list">
                    <div class="col-lg-3">
                      <div class="card" style="width: 230px;  ">
                        <div class="card-body">
                          <a href="temp.php?id=<?php echo $row['id']; ?>">
                            <img src="image/<?php echo $row['image_1']; ?>" class="img-fluid" style="display: inline-block; width: 220px; height: 200px; overflow: hidden;"></a>
                          <div class="card-title">
                            <p style="font-weight: bold;">&#8377;<?php echo $row['price'] ?></p>
                            <h6 style="color: grey"><?php echo $row['category'] ?></h6>
                            <h6><b><?php echo $row['product_name'] ?></b></h6><br>
                            <center><a href="add_to_cart?id=<?php echo $row['id']; ?>" class="btn" style="background: #0B0B45; color: white; font-family: 'Montserrat', sans-serif; font-size: 14px;"><i class="fa fa-shopping-cart" aria-hidden="true" style="margin-right: 5px;"></i>Add to cart</a></center>
                          </div>
                        </div>
                      </div>
                    </div><br>
                  </div>
              <?php
                }
              }
              ?>
            </div>
          </div>
        </div>
        <div id="Flip_Flops" class="tabcontent">
          <div class="product">
            <br><br>
            <h3 style="font-family:new times roman;">Explore Popular Categories</h3>
            <br><br><br>
            <div class="row">
              <?php
              include "admin/connect.php";
              $query = mysqli_query($connect, "select * from product where sub_category= 'Flip Flops'");
              $num = mysqli_num_rows($query);
              if ($num > 0) {
                while ($row = mysqli_fetch_array($query)) {
              ?>
                  <div class="product-list">
                    <div class="col-lg-3">
                      <div class="card" style="width: 230px;  ">
                        <div class="card-body">
                          <a href="temp.php?id=<?php echo $row['id']; ?>">
                            <img src="image/<?php echo $row['image_1']; ?>" class="img-fluid" style="display: inline-block; width: 220px; height: 200px; overflow: hidden;"></a>
                          <div class="card-title">
                            <p style="font-weight: bold;">&#8377;<?php echo $row['price'] ?></p>
                            <h6 style="color: grey"><?php echo $row['category'] ?></h6>
                            <h6><b><?php echo $row['product_name'] ?></b></h6><br>
                            <center><a href="add_to_cart?id=<?php echo $row['id']; ?>" class="btn" style="background: #0B0B45; color: white; font-family: 'Montserrat', sans-serif; font-size: 14px;"><i class="fa fa-shopping-cart" aria-hidden="true" style="margin-right: 5px;"></i>Add to cart</a></center>
                          </div>
                        </div>
                      </div>
                    </div><br>
                  </div>
              <?php
                }
              }
              ?>
            </div>
          </div>
        </div>
        <div id="Sneakers" class="tabcontent">
          <div class="product">
            <br><br>
            <h3 style="font-family:new times roman;">Explore Popular Categories</h3>
            <br><br><br>
            <div class="row">
              <?php
              include "admin/connect.php";
              $query = mysqli_query($connect, "select * from product where sub_category= 'W_Sneakers'");
              $num = mysqli_num_rows($query);
              if ($num > 0) {
                while ($row = mysqli_fetch_array($query)) {
              ?>
                  <div class="product-list">
                    <div class="col-lg-3">
                      <div class="card" style="width: 230px;  ">
                        <div class="card-body">
                          <a href="temp.php?id=<?php echo $row['id']; ?>">
                            <img src="image/<?php echo $row['image_1']; ?>" class="img-fluid" style="display: inline-block; width: 220px; height: 200px; overflow: hidden;"></a>
                          <div class="card-title">
                            <p style="font-weight: bold;">&#8377;<?php echo $row['price'] ?></p>
                            <h6 style="color: grey"><?php echo $row['category'] ?></h6>
                            <h6><b><?php echo $row['product_name'] ?></b></h6><br>
                            <center><a href="add_to_cart.php?id=<?php echo $row['id']; ?>" class="btn" style="background: #0B0B45; color: white; font-family: 'Montserrat', sans-serif; font-size: 14px;"><i class="fa fa-shopping-cart" aria-hidden="true" style="margin-right: 5px;"></i>Add to cart</a></center>
                          </div>
                        </div>
                      </div>
                    </div><br>
                  </div>
              <?php
                }
              }
              ?>
            </div>
          </div>
        </div>
        <div id="Ethnic_Fusion" class="tabcontent">
          <div class="product">
            <br><br>
            <h3 style="font-family:new times roman;">Explore Popular Categories</h3>
            <br><br><br>
            <div class="row">
              <?php
              include "admin/connect.php";
              $query = mysqli_query($connect, "select * from product where sub_category= 'Ethnic Wear'");
              $num = mysqli_num_rows($query);
              if ($num > 0) {
                while ($row = mysqli_fetch_array($query)) {
              ?>
                  <div class="product-list">
                    <div class="col-lg-3">
                      <div class="card" style="width: 230px;  ">
                        <div class="card-body">
                          <a href="temp.php?id=<?php echo $row['id']; ?>">
                            <img src="image/<?php echo $row['image_1']; ?>" class="img-fluid" style="display: inline-block; width: 220px; height: 200px; overflow: hidden;"></a>
                          <div class="card-title">
                            <p style="font-weight: bold;">&#8377;<?php echo $row['price'] ?></p>
                            <h6 style="color: grey"><?php echo $row['category'] ?></h6>
                            <h6><b><?php echo $row['product_name'] ?></b></h6><br>
                            <center><a href="add_to_cart.php?id=<?php echo $row['id']; ?>" class="btn" style="background: #0B0B45; color: white; font-family: 'Montserrat', sans-serif; font-size: 14px;"><i class="fa fa-shopping-cart" aria-hidden="true" style="margin-right: 5px;"></i>Add to cart</a></center>
                          </div>
                        </div>
                      </div>
                    </div><br>
                  </div>
              <?php
                }
              }
              ?>
            </div>
          </div>
        </div>

        <div id="Girls_Wear" class="tabcontent">
          <div class="product">
            <br><br>
            <h3 style="font-family:new times roman;">Girls Wear</h3>
            <br><br><br>
            <div class="row">
              <?php
              include "admin/connect.php";
              $query = mysqli_query($connect, "select * from product where sub_category= 'Girls Wear'");
              $num = mysqli_num_rows($query);
              if ($num > 0) {
                while ($row = mysqli_fetch_array($query)) {
              ?>
                  <div class="product-list">
                    <div class="col-lg-3">
                      <div class="card" style="width: 230px;  ">
                        <div class="card-body">
                          <a href="temp.php?id=<?php echo $row['id']; ?>">
                            <img src="image/<?php echo $row['image_1']; ?>" class="img-fluid" style="display: inline-block; width: 220px; height: 200px; overflow: hidden;"></a>
                          <div class="card-title">
                            <p style="font-weight: bold;">&#8377;<?php echo $row['price'] ?></p>
                            <h6 style="color: grey"><?php echo $row['category'] ?></h6>
                            <h6><b><?php echo $row['product_name'] ?></b></h6><br>
                            <center><a href="add_to_cart.php?id=<?php echo $row['id']; ?>" class="btn" style="background: #0B0B45; color: white; font-family: 'Montserrat', sans-serif; font-size: 14px;"><i class="fa fa-shopping-cart" aria-hidden="true" style="margin-right: 5px;"></i>Add to cart</a></center>
                          </div>
                        </div>
                      </div>
                    </div><br>
                  </div>
              <?php
                }
              }
              ?>
            </div>
          </div>
        </div>

        <div id="Top_Wear" class="tabcontent">
          <div class="product">
            <br><br>
            <h3 style="font-family:new times roman;">Top Wear</h3>
            <br><br><br>
            <div class="row">
              <?php
              include "admin/connect.php";
              $query = mysqli_query($connect, "select * from product where sub_category= 'Top Wear'");
              $num = mysqli_num_rows($query);
              if ($num > 0) {
                while ($row = mysqli_fetch_array($query)) {
              ?>
                  <div class="product-list">
                    <div class="col-lg-3">
                      <div class="card" style="width: 230px;  ">
                        <div class="card-body">
                          <a href="temp.php?id=<?php echo $row['id']; ?>">
                            <img src="image/<?php echo $row['image_1']; ?>" class="img-fluid" style="display: inline-block; width: 220px; height: 200px; overflow: hidden;"></a>
                          <div class="card-title">
                            <p style="font-weight: bold;">&#8377;<?php echo $row['price'] ?></p>
                            <h6 style="color: grey"><?php echo $row['category'] ?></h6>
                            <h6><b><?php echo $row['product_name'] ?></b></h6><br>
                            <center><a href="add_to_cart.php?id=<?php echo $row['id']; ?>" class="btn" style="background: #0B0B45; color: white; font-family: 'Montserrat', sans-serif; font-size: 14px;"><i class="fa fa-shopping-cart" aria-hidden="true" style="margin-right: 5px;"></i>Add to cart</a></center>
                          </div>
                        </div>
                      </div>
                    </div><br>
                  </div>
              <?php
                }
              }
              ?>
            </div>
          </div>
        </div>

        <div id="Bottom_Wear" class="tabcontent">
          <div class="product">
            <br><br>
            <h3 style="font-family:new times roman;">Bottom Wear</h3>
            <br><br><br>
            <div class="row">
              <?php
              include "admin/connect.php";
              $query = mysqli_query($connect, "select * from product where sub_category= 'Bottom Wear'");
              $num = mysqli_num_rows($query);
              if ($num > 0) {
                while ($row = mysqli_fetch_array($query)) {
              ?>
                  <div class="product-list">
                    <div class="col-lg-3">
                      <div class="card" style="width: 230px;  ">
                        <div class="card-body">
                          <a href="temp.php?id=<?php echo $row['id']; ?>">
                            <img src="image/<?php echo $row['image_1']; ?>" class="img-fluid" style="display: inline-block; width: 220px; height: 200px; overflow: hidden;"></a>
                          <div class="card-title">
                            <p style="font-weight: bold;">&#8377;<?php echo $row['price'] ?></p>
                            <h6 style="color: grey"><?php echo $row['category'] ?></h6>
                            <h6><b><?php echo $row['product_name'] ?></b></h6><br>
                            <center><a href="add_to_cart.php?id=<?php echo $row['id']; ?>" class="btn" style="background: #0B0B45; color: white; font-family: 'Montserrat', sans-serif; font-size: 14px;"><i class="fa fa-shopping-cart" aria-hidden="true" style="margin-right: 5px;"></i>Add to cart</a></center>
                          </div>
                        </div>
                      </div>
                    </div><br>
                  </div>
              <?php
                }
              }
              ?>
            </div>
          </div>
        </div>


      </div>
    </div>
  </div>
  </div>





  <!---->
  <!---<div class="container-fluid" style="height: 150px;">
  <div class="ads">
    <div class="row">
      <div class="col-lg-6">
        <img src="image/feature-bg4.jpg" style="height: 150px; width:100%;">
      </div>
      <div class="col-lg-6">
        <img src="image/feature-bg3.jpg" style="height: 150px; width:100%;">
      </div>
    </div>
  </div>
</div><br><br>---->


  <!----footer----->
  <footer style="border-top: 1px solid #ededed; background-color:black; color:white;">
    <div class="container py-5">
      <div class="row py-3">
        <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
          <div class="footer-text text-muted pull-left">
            <div class="d-flex">
              <h1><img src="image/logo4.jpg" height="110"></h1>
            </div>
            <p style="padding-left: 10px;color:white;">Band of Trust<br>Awards<br>Careers</p>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">

        </div>
        <div class="col-lg-2 col-md-6 mb-4 mb-lg-0"><br>
          <h6 class="text-uppercase font-weight-bold mb-4">Policy</h6>
          <ul class="list-unstyled mb-0">
            <li class="mb-2"><a href="#" style="color:white;">Return Policy</a></li>
            <li class="mb-2"><a href="#" style="color:white;">Terms Of Use</a></li>
            <li class="mb-2"><a href="#" style="color:white;">Security</a></li>
            <li class="mb-2"><a href="#" style="color:white;">Privacy</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-6 mb-4 mb-lg-0"><br>
          <h6 class="text-uppercase font-weight-bold mb-4">Company</h6>
          <ul class="list-unstyled mb-0">
            <li class="mb-2"><a href="#" style="color:white;">Login</a></li>
            <li class="mb-2"><a href="#" style="color:white;">Register</a></li>
            <li class="mb-2"><a href="#" style="color:white;">Sitemap</a></li>
            <li class="mb-2"><a href="#" style="color:white;">Our Products</a></li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-6 mb-lg-0"><br>
          <h6 class="text-uppercase font-weight-bold mb-4">Registered Office Address</h6>
          <p class="mb-4" style="color:white;">Zingabai Takli, Godhani Road, Nagpur, Maharashtra.</p>
          <ul class="list-inline mt-4">
            <div class="fu-links" style="margin-left: 20px; margin-top: 20px;">
              <a href="https://www.facebook.com/gaurav.magarde.3/"><i class="fa fa-facebook" style="color: #4267B2; font-size: 21px; margin: 5px;"></i></a>
              <a href="https://twitter.com/MagardeGaurav" class="twitter"><i class="fa fa-twitter" style="color: #1DA1F2; font-size: 21px; margin: 5px;"></i></a>
              <a href="https://www.linkedin.com/in/gaurav-magarde/" class="Linkedin"><i class="fa fa-linkedin" style="color: #FF0000; font-size: 21px; margin: 5px;"></i></a>
              <a href="https://www.instagram.com/iamgvm/" class="instagram"><i class="fa fa-instagram" style="color: #8a3ab9; font-size: 21px; margin: 5px;"></i></a>
            </div>
          </ul>
        </div>
      </div>
    </div>
    <hr class="p-0 m-0 b-0">
    <div class="py-2" style="background-color:black; color:white;">
      <div class="footer-copyright text-center py-3">Copyright © 2022 Shop Cart Store. All Rights Reserved.Terms Of Use Privacy Policy
        <a href="" style="color: orangered ; font-family:times roman;"> gauravmagarde1858@gmail.com</a>
      </div>
    </div>
  </footer>
  <!-------------------->
  <!----------script--------->
  <script>
    function openCity(evt, cityName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
  </script>

  <script>
    $(document).ready(function() {
      $('.dropdown-submenu button.test').on("click", function(e) {
        $(this).next('ul').toggle();
        e.stopPropagation();
        e.preventDefault();
      });
    });
  </script>
  <!----------------->

</body>

</html>