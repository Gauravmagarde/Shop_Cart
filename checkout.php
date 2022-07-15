<!DOCTYPE html>
<?php
session_start();
include "admin/connect.php";
?>

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

  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
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

    tbody td {
      font-size: 14px;

    }

    table tr {
      border-bottom: 1px solid #D3D3D3;
      height: 70px;

    }

    .mb-3 input {
      height: 40px;
    }

    .mb-3 label {
      font-size: 14px;
      font-weight: bold;
    }

    .mb-3 .fa {
      margin-right: 8px;
      color: grey;
    }

    .billing_details h4 {
      border-bottom: 1px solid #D3D3D3;
      font-weight: bold;
      height: 35px;
    }

    /*footer*/
    .footer-text p {
      color: grey
    }

    .col-lg-4 input[type=text] {
      width: 150px;
      border: none;
      outline: none;
      font-weight: bold;


    }

    .col-lg-4 input {
      width: 150px;
      border: none;
      outline: none;
      font-weight: bold;
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
  <br><br>

  <section>
    <div class="container">
      <div class="row">
        <div class="col-lg-8" style="padding-right: 50px;">
          <div class="billing_details">
            <h4>Billing Details</h4><br>
            <form method="POST">
              <div class="mb-3 mt-3">
                <label for="name" class="form-label"><i class="fa fa-user"></i>Full Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter username" name="name" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="mb-3 mt-3">
                <label for="email"><i class="fa fa-envelope-o" aria-hidden="true"></i>E-mail</label>
                <input type="text" class="form-control" id="email" placeholder="*****@example.com" name="email">
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="mb-3 mt-3">
                <label for="phone"><i class="fa fa-phone" aria-hidden="true"></i>Phone</label>
                <input type="text" class="form-control" id="phone" placeholder="91********" name="phone">
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="mb-3 mt-3">
                <label for="address"><i class="fa fa-address-card-o" aria-hidden="true"></i>Street Address</label>
                <input type="text" class="form-control" id="f_address" placeholder="House number and street name" name="f_address" required><br>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="mb-3 mt-3">
                <label for="landmark"><i class="fa fa-address-card-o" aria-hidden="true"></i>Landmark</label>
                <input type="text" class="form-control" id="s_address" placeholder="apartment, suite, unit, etc(optional)" name="s_address" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="mb-3 mt-3">
                <label for="city"><i class="fa fa-institution"></i>Town/City</label>
                <input type="text" class="form-control" id="city" placeholder="" name="city" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="mb-3 mt-3">
                <label for="state"><i class="fa fa-globe" aria-hidden="true"></i>State</label>
                <input type="text" class="form-control" id="state" placeholder="Enter state" name="state" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="mb-3 mt-3">
                <label for="zip">Zip</label>
                <input type="text" class="form-control" id="zip" placeholder="Enter zip" name="zip" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group form-check">
                <label class="form-check-label">
                  <input class="form-check-input is-invalid" type="checkbox" name="remember" required>
                  <p><b>I have read and agree to <span style="color: #0B0B45;">Shop Cart's</span> Terms of Service Cancellation Policy.</b></p>
                  <div class="invalid-feedback">Check this checkbox to continue.></div>
                  <br>
                  <button type="submit" name="submit" class="btn" style="background: #0B0B45; color:white;">Place Order</button>
                </label>
              </div>
          </div>
        </div>
        <div class="col-lg-4" style="border: 1px solid  #0B0B45; height: 100%;"><br>
          <div class="product-details">
            <table class="table table-borderless">
              <p style="color: grey; font-size: 21px; font-weight: bold;">Your Order</p>
              <thead>
                <tr style="border-bottom: 1px solid #D3D3D3;">
                  <th>Product</th>
                  <th>Subtotal</th>
                </tr>
              </thead>
              <tbody>
                <?php


                $total = 0;
                if (!empty($_SESSION['cart'])) {
                  //connection
                  include "admin/connect.php";

                  //create array of initail qty which is 1
                  $index = 0;
                  if (!isset($_SESSION['qty_array'])) {
                    $_SESSION['qty_array'] = array_fill(0, count($_SESSION['cart']), 1);
                  }
                  $sql = "SELECT * FROM product WHERE id IN (" . implode(',', $_SESSION['cart']) . ")";
                  $result = mysqli_query($connect, $sql);

                  while ($row = mysqli_fetch_array($result)) {


                ?>


                    <tr style="border: none; outline: none; margin-top: 50px;">
                      <td>
                        <b><input type="text" name="company" value="<?php echo $row['company']; ?>"></b>
                      </td>
                      <td><input name="price" value="&#8377;<?php echo number_format($row['price'], 2);  ?>"></td>
                    </tr>
                    <tr>
                      <td>
                        <input type="text" name="product_name" class="product_name" value="<?php echo $row['product_name']; ?>" style=" color: grey;">
                        <p><a href="delet_checkout_item.php?id=<?php echo $row['id']; ?>&index=<?php echo $index; ?>" class="">Remove</a></p>
                      </td>
                    </tr>


                    <!--<p>Total <span class="price" style="color:black"><b><?php echo number_format($_SESSION['qty_array'][$index] * $row['discount'], 2); ?></b></span></p>
                          <?php $total += $_SESSION['qty_array'][$index] * $row['price']; ?>-->

                <?php
                    $index++;
                  }
                }
                ?>
                <tr>
                  <td><b>Subtotal</b></td>
                  <td><input name="subtotal" value="&#8377;<?php echo number_format($total, 2); ?>"><b></b></td>
                </tr>
                <tr>
                  <td><b>Shipping</b></td>
                  <td><b>Free Shipping</b></td>
                </tr>
                <tr>
                  <td><b>Total</b></td>
                  <td><input name="total" value="&#8377;<?php echo number_format($total, 2); ?>"></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      </form>
    </div>
    </div>
  </section>
  <?php


  include "admin/connect.php";
  if (isset($_POST['submit'])) {
    $n = $_POST['name'];
    $e = $_POST['email'];
    $p = $_POST['phone'];
    $address = $_POST['f_address'];
    $s = $_POST['state'];
    $c = $_POST['city'];
    $z = $_POST['zip'];
    $product_name = $_POST['product_name'];
    $comp = $_POST['company'];
    $subtotal = $_POST['subtotal'];
    $tot = $_POST['total'];



    date_default_timezone_set('Asia/kolkata');
    $current_time = date('d-m-Y h:i:s, A', time());


    $sql = "INSERT INTO user_data(name, email, contact, shipping_address, shipping_state, shipping_city, shipping_pincode, billing_address, billing_state,  billing_city, billing_pincode, product_name, company, subtotal, total, order_date) VALUES ('$n','$e','$p','$address','$s','$c','$z','$address','$s','$c','$z','$product_name', '$comp','$subtotal','$tot','$current_time')";
    $result = mysqli_query($connect, $sql);
    echo "<script>
      window.location.href='place_order.php';
      </script>";
  } else {
    echo "<p style='text-align:center; font-size:18px;'>Data not save</p>";
  }


  ?>




  <br><br><br>
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
</body>

</html>