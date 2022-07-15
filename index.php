<?php

include "admin/connect.php";
session_start();
if (!isset($_SESSION['cart'])) {
  $_SESSION['cart'] = array();
}
unset($_SESSION['qty_array']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Shop Cart</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>

  <!----Font Awesome--->
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!----Google Fonts--->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;600&display=swap" rel=" stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

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
      width: 60px;
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
      font-size: 14px;


    }

    .nav-item {
      margin: 10px;
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

    #banresim {
      height: 250px;
      width: 100%;
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

    /*product*/
    .carousel-inner h1 {
      font-family: 'Montserrat', sans-serif;
      font-size: 25px;
      text-align: center;
      margin-top: 150px;
      color: black;
      font-weight: bold;

    }

    .carousel-inner .btn {
      background: orangered;
      width: 130px;
      height: 40px;
      outline: none;
      font-family: 'Montserrat', sans-serif;
      font-size: 15px;
      font-weight: bold;
      color: white;

    }

    .categories-item img {
      width: 200px;
    }

    .item-text h2 {
      font-family: 'Montserrat', sans-serif;
      font-size: 16px;
      color: black;
      font-weight: bold;

    }

    .item-text p {
      font-family: 'Montserrat', sans-serif;
      font-size: 13px;
      color: black;
      font-weight: bold;
      opacity: 0.70;

    }

    .categories button {
      background: white;
      width: 150px;
      height: 40px;
      border: 1px solid orangered;
      outline: none;
      font-family: 'Montserrat', sans-serif;
      font-size: 13px;
      font-weight: bold;
      color: #0B0B45;
    }

    /*shop*/
    .product h4 {
      font-size: 21px;
      font-weight: bold;

    }

    /*form*/

    .form-inline {
      display: flex;
      flex-flow: row wrap;
      align-items: center;
    }

    .form-inline label {
      margin: 5px 10px 5px 0;
    }

    .form-inline input {
      vertical-align: middle;
      margin: 5px 10px 5px 0;
      padding: 8px;
      background-color: #fff;
      border: 1px solid #ddd;
      width: 50%;
      border-radius: 3px;
      border: 1px solid grey;
    }

    .form-inline button {
      padding: 8px 20px;
      background-color: orangered;
      border: 1px solid #ddd;
      color: white;
      cursor: pointer;
      border-radius: 3px;
      font-family: 'Montserrat', sans-serif;
      font-size: 14px;
      font-weight: bold;
    }

    .form-inline button:hover {
      background-color: orange;
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
  <script type="text/javascript">
    function openNav() {
      document.getElementById("mySidenav").style.width = "70%";
      // document.getElementById("shop-navbar").style.width = "50%";
      document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    }

    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
      document.body.style.backgroundColor = "rgba(0,0,0,0)";
    }
  </script>
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

  <!--product--->
  <section id="hideres">
    <div id="demo" class="carousel slide" data-ride="carousel" style="background: #f9f9f9; height: 400px;">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-lg-5">
              <center>
                <h1 style="font-family:new times roman;">HP : laptop that's always by your side.<br> Providing a more efficient computing experience.</h1>
              </center><br>
              <center><a href="electronics.php"><button type="button" class="btn">Shop Now</button></a></center>
            </div>
            <div class="col-lg-5">
              <img src="image/hp-5.png" alt="" style="width: 550px; margin-top: 50px;">
            </div>
          </div>
          <div class="col-md-1"></div>

        </div>
        <div class="carousel-item">
          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-lg-5">
              <center>
                <h1 style="font-family:new times roman;">The best outfit for men starts here. <br>Fit for every man.</h1>
              </center><br>
              <center><a href="electronics.php"><button type="button" class="btn">Shop Now</button></a></center>
            </div>
            <div class="col-lg-5">
              <img src="image/mw-1.jpg" alt="" style="width: 550px; margin-top:50px;">
            </div>
          </div>
          <div class="col-md-1"></div>

        </div>
        <div class="carousel-item">
          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-lg-5">
              <center>
                <h1 style="font-family:new times roman;">Decorate your Life with Arts.<br>Low prices and best quality Furniture.</h1>
              </center><br>
              <center><a href="electronics.php"><button type="button" class="btn">Shop Now</button></a></center>
            </div>
            <div class="col-lg-5">
              <img src="image/fn-1.png" alt="" style="width: 550px; margin-top: 90px;">
            </div>
            <div class="col-md-1"></div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
    </div>
  </section>
  <!----->
  <br>
  <!---banner----->
  <div class="container" style="height: 150px;">
    <img src="image/ele-3.jpg" id="banresim">
  </div><br><br><br><br><br><br>
  <!------>

  <!-----shop---->
  <div class="container text-center shop " id="resshop">
    <div class="col-lg-12"><br>
      <div class="product" style="padding-left: 30px; border-bottom: 1px solid #ededed; padding-bottom: 40px;">
        <h4 style="font-family:new times roman;">Electronic Devices:</h4><br>
        <div class="row">
          <?php
          include "admin/connect.php";
          $query = mysqli_query($connect, "select * from product where category= 'Electronics'LIMIT 4");
          $num = mysqli_num_rows($query);
          if ($num > 0) {
            while ($row = mysqli_fetch_array($query)) {
          ?>
              <div class="product-list">
                <div class="col-lg-3">
                  <div class="card" style="width: 230px;">
                    <div class="card-body">
                      <a href="temp.php?id=<?php echo $row['id']; ?>">
                        <img src="image/<?php echo $row['image_1']; ?>" class="img-fluid" style="display: inline-block; width: 220px; height: 200px; overflow: hidden;">
                      </a>
                      <div class="card-title">
                        <p style="font-weight: bold;">&#8377;<?php echo $row['price'] ?></p>
                        <h6 style="color: grey"><?php echo $row['category'] ?></h6>
                        <h6><b><?php echo $row['product_name'] ?></b></h6><br>
                        <center>
                          <a href="add_to_cart.php?id=<?php echo $row['id']; ?>" class="btn" style="background: navy; color: white; font-family: 'Montserrat', sans-serif; font-size: 14px;"><i class="fa fa-shopping-cart" aria-hidden="true" style="margin-right: 5px;"></i>Add to cart</a>
                        </center>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          <?php
            }
          }
          ?>
        </div>
      </div>
      <div class="product" style="padding-left: 30px; border-bottom: 1px solid #ededed; padding-bottom: 40px;">
        <h4 style="font-family:new times roman;">Furniture Items:</h4><br>
        <div class="row">
          <?php

          include "admin/connect.php";

          $query = mysqli_query($connect, "select * from product where category= 'Furniture'LIMIT 4");
          $num = mysqli_num_rows($query);
          if ($num > 0) {
            while ($row = mysqli_fetch_array($query)) {
          ?>
              <div class="product-list">
                <div class="col-lg-3">
                  <div class="card" style="width: 230px;">
                    <div class="card-body">
                      <a href="temp.php?id=<?php echo $row['id']; ?>">
                        <img src="image/<?php echo $row['image_1']; ?>" class="img-fluid" style="display: inline-block; width: 220px; height: 200px; overflow: hidden;">
                      </a>
                      <div class="card-title">
                        <p style="font-weight: bold;">&#8377;<?php echo $row['price'] ?></p>
                        <h6 style="color: grey"><?php echo $row['category'] ?></h6>
                        <h6><b><?php echo $row['product_name'] ?></b></h6><br>
                        <center>
                          <a href="add_to_cart.php?id=<?php echo $row['id']; ?>" class="btn" style="background: navy; color: white; font-family: 'Montserrat', sans-serif; font-size: 14px;"><i class="fa fa-shopping-cart" aria-hidden="true" style="margin-right: 5px;"></i>Add to cart</a>
                        </center>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          <?php
            }
          }
          ?>
        </div>
      </div>

      <div class="product" style="padding-left: 30px; border-bottom: 1px solid #ededed; padding-bottom: 40px;">
        <h4 style="font-family:new times roman;">Books:</h4><br>
        <div class="row">
          <?php
          include "admin/connect.php";

          $query = mysqli_query($connect, "select * from product where category = 'books'LIMIT 4");
          $num = mysqli_num_rows($query);

          if ($num > 0) {
            while ($row = mysqli_fetch_array($query)) {
          ?>
              <div class="product-list">
                <div class="col-lg-3">
                  <div class="card zoom" style="width: 230px;">
                    <div class="card-body">
                      <a href="temp.php?id=<?php echo $row['id']; ?>">
                        <img src="image/<?php echo $row['image_1']; ?>" class="img-fluid" style="display: inline-block; width: 220px; height: 200px; overflow: hidden;"></a>
                      <div class="card-title">
                        <p style="font-weight: bold;">&#8377;<?php echo $row['price'] ?></p>
                        <h6 style="color: grey"><?php echo $row['category'] ?></h6>
                        <h6><b><?php echo $row['product_name'] ?></b></h6><br>
                        <center>
                          <a href="add_to_cart.php?id=<?php echo $row['id']; ?>" type="submit" class="btn" style="background: navy; color: white; font-family: 'Montserrat', sans-serif; font-size: 14px;"><i class="fa fa-shopping-cart" aria-hidden="true" style="margin-right: 5px;"></i>Add to cart</a>
                        </center>
                      </div>
                    </div>
                  </div>
                  </form>
                </div>
              </div>
          <?php
            }
          }
          ?>
        </div>
      </div><br><br>
      <div class="product" style="padding-left: 30px; border-bottom: 1px solid #ededed; padding-bottom: 40px;">
        <h4 style="font-family:new times roman;">Fashion & Accessories:</h4><br>
        <div class="row">
          <?php
          include "admin/connect.php";

          $query = mysqli_query($connect, "select * from product where category = 'Fashion'LIMIT 4");
          $num = mysqli_num_rows($query);

          if ($num > 0) {
            while ($row = mysqli_fetch_array($query)) {
          ?>
              <div class="product-list">
                <div class="col-lg-3">
                  <div class="card zoom" style="width: 230px;">
                    <div class="card-body">
                      <a href="temp.php?id=<?php echo $row['id']; ?>">
                        <img src="image/<?php echo $row['image_1']; ?>" class="img-fluid" style="display: inline-block; width: 220px; height: 200px; overflow: hidden;"></a>
                      <div class="card-title">
                        <p style="font-weight: bold;">&#8377;<?php echo $row['price'] ?></p>
                        <h6 style="color: grey"><?php echo $row['category'] ?></h6>
                        <h6><b><?php echo $row['product_name'] ?></b></h6><br>
                        <center>
                          <a href="add_to_cart.php?id=<?php echo $row['id']; ?>" type="submit" class="btn" style="background: navy; color: white; font-family: 'Montserrat', sans-serif; font-size: 14px;"><i class="fa fa-shopping-cart" aria-hidden="true" style="margin-right: 5px;"></i>Add to cart</a>
                        </center>
                      </div>
                    </div>
                  </div>
                  </form>
                </div>
              </div>
          <?php
            }
          }
          ?>
        </div>
      </div><br><br>
    </div>
  </div>
  <br>
  <!----------->
  <!------form----->
  <div class="container" id="hideres"><br><br>
    <div class="mail">
      <div class="text">
        <center>
          <h3 style="color: #0B0B45;">Get The Latest Deals</h3>
        </center>

      </div>
      <form class="form-inline" action="/action_page.php" style="padding-left: 350px;">
        <input type="email" id="email" placeholder="Enter email" name="email">
        <button type="submit">Send</button>
      </form>
    </div>
  </div>
  <br><br>
  <!------------->

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
  <!-----------script------------->
  <script type="text/javascript">
    $(document).ready(function() {

      if ($('.brands_slider').length) {
        var brandsSlider = $('.brands_slider');

        brandsSlider.owlCarousel({
          loop: true,
          autoplay: true,
          autoplayTimeout: 5000,
          nav: false,
          dots: false,
          autoWidth: true,
          items: 8,
          margin: 42
        });

        if ($('.brands_prev').length) {
          var prev = $('.brands_prev');
          prev.on('click', function() {
            brandsSlider.trigger('prev.owl.carousel');
          });
        }

        if ($('.brands_next').length) {
          var next = $('.brands_next');
          next.on('click', function() {
            brandsSlider.trigger('next.owl.carousel');
          });
        }
      }
    })
  </script>

  <!--------------------------->
</body>

</html>