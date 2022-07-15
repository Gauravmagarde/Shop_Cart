<!DOCTYPE html>
<?php

session_start();
include "connect.php";
?>
<html lang="en">

<head>
  <title>Smart Shop</title>
  <meta charset="utf-8">
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
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;600&display=swap" rel="    stylesheet">

  <style type="text/css">
    .navbar .fa {
      color: white;
      font-size: 25px;
    }

    .dropdown-toggle {
      color: white;
    }

    .dropdown-toggle:hover {
      color: white;
      text-decoration: none;
    }

    .dropdown-menu a {
      font-size: 14px;

    }

    .sidenav {
      height: 100%;
      width: 200px;
      position: fixed;
      z-index: 1;
      left: 0;
      border: 1px solid #ccc;
      background-color: white;
      overflow-x: hidden;
      padding-top: 20px;
      top: 0;

    }

    .sidenav a,
    .dropdown-btn {
      padding: 6px 8px 6px 16px;
      text-decoration: none;
      font-size: 14px;
      color: grey;
      display: block;
      border: none;
      background: none;
      width: 100%;
      text-align: left;
      cursor: pointer;
      outline: none;
      float: left;
      margin-bottom: 10px;
      font-family: 'Montserrat', sans-serif;
      font-weight: bold;
    }

    .sidenav a:hover {
      color: white;
      background: #0B0B45;
    }

    .dropdown-btn:hover {
      color: white;
      text-decoration: none;
      border: none;
      outline: none;
      background: #0B0B45;
    }

    .main {
      margin-left: 200px;
      /* Same as the width of the sidenav */
      font-size: 20px;
      /* Increased text to enable scrolling */
      padding: 0px 10px;
    }

    .dropdown-container {
      display: none;
      background-color: #f1f1f1;
      padding-left: 8px;

    }

    .dropdown-container a {
      font-size: 15px;
      color: grey;
      font-weight: bold;
    }

    .dropdown-container a:hover {
      font-size: 15px;
      color: white;
      background: #0B0B45;
      width: 180px;
    }

    .fa-caret-down {
      float: right;
      padding-right: 8px;
    }

    @media screen and (max-height: 450px) {
      .sidenav {
        padding-top: 15px;
      }

      .sidenav a {
        font-size: 18px;
      }
    }

    h3 {
      color: black;
      font-size: 26px;
      font-family: sans-serif;
      padding-left: 10px;
      border-bottom: 2px solid grey;
      width: 200px;
      margin-bottom: 30px;

    }
  </style>
  <?php
  include "connect.php";
  ?>
</head>

<body>
  <div class="container-fluid" style="background: #0B0B45; position: fixed; top: 0;">
    <nav class="navbar">
      <li class="navbar-brand" style="color: white; margin-left: 180px;">Dashboard</li>
      <div class="dropdown" style="margin-right: 80px;">
        <a href="" class="dropdown-toggle" type="" id="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-user-o" aria-hidden="true"></i>
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#">Change Password</a>
          <a class="dropdown-item" href="logout.php">Log Out</a>
        </div>
      </div>
    </nav>
  </div>
  <!------->
  <div class="sidenav">
    <img src="../image/logo4.jpg" width="180" style="margin-top: -20px;">
    <a href="create-category.php" style="margin-top: 30px;">Category</a>
    <a href="sub-category.php">Sub Category</a>
    <a href="insert-product.php">Insert Product</a>
    <a href="manage-product.php">Manage Product</a>
    <button class="dropdown-btn" style="border: none; outline: none;">Order Management
      <i class="fa fa-caret-down" style="margin-top: 5px;"></i>
    </button>
    <div class="dropdown-container">
      <a href="t-order.php">Order Details</a>
      <a href="p-order.php">Order</a>
    </div>
    <a href="user-management.php">User Management</a>
    <a href="userlog.php">User Log</a>
  </div>
  <!----->
  <br><br><br>
  <section>
    <div id="Manage-Product" class="product">
      <?php

      $product = "select * from product";
      $data = mysqli_query($connect, $product);
      $count = 0;

      ?>
      <div class="data-list">
        <div class="container" style="width: 70%;">
          <tr>
            <td>
              <h3 style="color:black; font-size: 24px; font-family: sans-serif; padding-left: 10px; border-bottom: 2px solid grey; width: 250px; margin-top: 20px; margin-left: 50px;">Manage Product</h3>
            </td>
          </tr><br>
          <table class="table table-bordered table-hover table-sm" style=" background: white; margin-left: 50px;">
            <thead class="thead-light">
              <tr>
                <th>Sr.&nbsp;No.</th>
                <th>Product Name</th>
                <th>Category</th>
                <th>Sub&nbsp;Category</th>
                <th>Company&nbsp;Name</th>
                <th>Product&nbsp;Creation&nbsp;Date</th>
                <th colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;Action</th>
              </tr>
            </thead>
            <?php
            while ($datalist = mysqli_fetch_assoc($data)) {

            ?>
              <tbody>
                <tr>
                  <td><?php echo $datalist['id']; ?></td>
                  <td><?php echo $datalist['product_name']; ?></td>
                  <td><?php echo $datalist['category']; ?></td>
                  <td><?php echo $datalist['sub_category']; ?></td>
                  <td><?php echo $datalist['company']; ?></td>
                  <td><?php echo $datalist['posting_date']; ?></td>
                  <?php echo "
        <td>
          <div class='btn' style=''>
          <a href='update_m.php?id=" . $datalist['id'] . "' style='color: green; font-size: 21px;'><i class='fa fa-pencil-square-o' aria-hidden='true' style=''></i></a></div></td>
          <td>
          <div class='btn' style=''>
          <a href='delete_m.php?id=" . $datalist['id'] . "' style='color: red; font-size: 21px;'><i class='fa fa-times' aria-hidden='true'></i></a></td>
        </div>"; ?>
                </tr>
              <?php
            }

              ?>
              </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>


  <?php
  include "connect.php";

  if (isset($_POST['login'])) {

    date_default_timezone_set('Asia/kolkata');
    $current_time = date('d-m-Y h:i:s, A', time());

    $sql = "INSERT INTO sub_category(posting_date) VALUES ('$current_time')";
    $result = mysqli_query($connect, $sql);
    echo "<p style='text-align:center; font-size:18px;'>Data Saved Successfully</p>";
  }

  ?>
  <script>
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
      dropdown[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
          dropdownContent.style.display = "none";
        } else {
          dropdownContent.style.display = "block";
        }
      });
    }
  </script>
</body>

</html>