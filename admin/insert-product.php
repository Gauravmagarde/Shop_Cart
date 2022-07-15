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

    .dropdown-menu {
      width: 100px;
    }

    .dropdown-menu a {
      font-size: 14px;

    }

    .sidenav {
      height: 1000px;
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

    table {
      font-family: sans-serif;
      font-size: 15px;
      font-weight: bold;
      font-style: normal;
      border-collapse: collapse;
      border: 1px solid grey;
      width: 500px;
      height: 300px;


    }

    .data-list input[type=text] {
      width: 100%;
      border: 1px solid grey;


    }

    .data-list select {
      padding: 4px;
      width: 90%;
      margin-top: 5px;
      color: black;
    }

    .form-control {
      border: 1px solid grey;
      outline: none;

    }
  </style>
  <script type="text/javascript">
    function showconfirm() {
      alert("Data Saved successfully");
    }
  </script>

  <?php
  include "connect.php";
  ?>
</head>

<body style="background:#f1f1f1; ">
  <div class="container-fluid" style="background: #0B0B45; position: fixed; ">
    <nav class="navbar">
      <li class="navbar-brand" style="color: white; margin-left: 180px;">
        Dashboard
      </li>
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
    <a href="create-category.php" style="margin-top: 30px">Category</a>
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
  <section>

    <div class="data-list">
      <div class="conatiner">
        <form method="POST" enctype="multipart/form-data">
          <table align="center" cellpadding="8" width="500" style="font-family: sans-serif; font-size: 15px; font-weight: bold; font-style: normal; border-collapse: collapse; background: white;box-shadow: 0px 8px 16px 0px rgba(0,0,0,.50); width: 500px; height: 300px; ">
            <tr>
              <td>
                <h3 style="color:black; font-size: 24px; font-family: sans-serif; padding-left: 10px; border-bottom: 2px solid grey; width: 200px; margin-bottom: 30px;">Insert Product</h3>
              </td>
            </tr><br><br><br>
            <div id="Insert-Product" class="product">
              <tr>
                <td>Category</td>
                <td>
                  <select class="form-control" name="cat">
                    <option>Please select category</option>

                    <?php

                    $q = mysqli_query($connect, "select * from category");
                    while ($row = mysqli_fetch_array($q)) {

                      echo "<option>" . $row['category_name'] . "</option>";
                    }

                    ?>
                  </select>
                </td>
              </tr>
              <tr>
                <td>Sub-Category</td>
                <td>
                  <select class="form-control" name="sub_cat">
                    <option>Please select sub-category</option>

                    <?php

                    $q = mysqli_query($connect, "select * from sub_category");
                    while ($row = mysqli_fetch_array($q)) {

                      echo "<option>" . $row['sub_cat'] . "</option>";
                    }

                    ?>
                  </select>
                </td>
              </tr>
              <tr>
                <td>Product Name</td>
                <td><input class="form-control" type="text" name="product_name"></td>
              </tr>
              <tr>
                <td>Product Company</td>
                <td><input class="form-control" type="text" name="product_company"></td>
              </tr>
              <tr>
                <td>product price before discount</td>
                <td><input class="form-control" type="text" name="product_price"></td>
              </tr>
              <tr>
                <td>after discount</td>
                <td><input class="form-control" type="text" name="after_disc"></td>
              </tr>
              <tr>
                <td>Product Description</td>
                <td><textarea class="form-control" rows="4" cols="20" placeholder="write description here.." name="product-description"></textarea></td>
              </tr>
              <tr>
                <td>Product shipping charges</td>
                <td><input class="form-control" type="text" name="product_shipping"></td>
              </tr>
              <tr>
                <td>Product Availibilty</td>
                <td>
                  <select class="form-control" name="product_availability">
                    <option>In Stock</option>
                    <option>Out of Stock</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td>Image</td>
                <td>
                  <input type="file" class="" id="" name="img1" />
                </td>
              </tr>
              <tr>
                <td>Image</td>
                <td>
                  <input type="file" class="" id="" name="img2" />
                </td>
              </tr>
              <tr>
                <td>Image</td>
                <td>
                  <input type="file" class="" id="" name="img3" />
                </td>
              </tr>
              <tr>
                <td>
                  <button type="submit" name="login" value="Login" onclick="showconfirm()" style="border: 1px solid #0B0B45; outline: none; background: orangered; color: #fff; font-size: 16px;
          font-family: sans-serif; padding: 8px 20px; border-radius: 3px; margin-bottom: 10px;  margin-top: 20px; width: 100px;">Save
                  </button>
                </td>
              </tr>
          </table>
        </form>
      </div>
    </div>
    </div>
  </section><br><br>

  <section>
    <div id="product" class="">
      <?php

      $product = "select * from product";
      $data = mysqli_query($connect, $product);
      $count = 0;

      ?>
      <div class="data-list">
        <div class="container" style="width: 70%">
          <tr>
            <td>
              <h3 style="color:black; font-size: 24px; font-family: sans-serif;  border-bottom: 2px solid grey; width: 210px; margin-top: 20px; margin-left: 50px;">Product Data</h3>
            </td>
          </tr><br>
          <div class="table-responsive" style="margin-left: 50px; ">
            <table class="table table-bordered table-hover  table-sm" style=" background: white;">
              <thead class="thead-light">
                <tr>
                  <th>Sr.&nbsp;No.</th>
                  <th>Category</th>
                  <th>Sub&nbsp;Category</th>
                  <th>Product&nbsp;Name</th>
                  <th>Product&nbsp;Company</th>
                  <th>Discount</th>
                  <th>After&nbsp;Discount</th>
                  <th>Product&nbsp;Description</th>
                  <th>Image&nbsp;I</th>
                  <th>Image&nbsp;II</th>
                  <th>Image&nbsp;III</th>
                  <th>shipping&nbsp;charges</th>
                  <th>Availibilty</th>
                  <th>Posting&nbsp;Date</th>
                  <th>Update&nbsp;Date</th>
                  <th colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Action</th>
                </tr>
              </thead>
              <?php
              while ($datalist = mysqli_fetch_assoc($data)) {

              ?>
                <tbody>
                  <tr>
                    <td><?php echo $datalist['id']; ?></td>
                    <td><?php echo $datalist['category']; ?></td>
                    <td><?php echo $datalist['sub_category']; ?></td>
                    <td><?php echo $datalist['product_name']; ?></td>
                    <td><?php echo $datalist['company']; ?></td>
                    <td><?php echo $datalist['price']; ?></td>
                    <td><?php echo $datalist['discount']; ?></td>
                    <td><?php echo $datalist['description']; ?></td>
                    <td><?php echo "<img src='" . $datalist['image_1'] . "' style='width: 100px; height: 100px;'"; ?></td>
                    <td><?php echo "<img src='" . $datalist['image_2'] . "' style='width: 100px; height: 100px;'"; ?></td>
                    <td><?php echo "<img src='" . $datalist['image_3'] . "' style='width: 100px; height: 100px;'"; ?></td>
                    <td><?php echo $datalist['shipping']; ?></td>
                    <td><?php echo $datalist['availability']; ?></td>
                    <td><?php echo $datalist['posting_date']; ?></td>
                    <td><?php echo $datalist['update_date']; ?></td>
                    <?php echo "
        <td>
          <div class='btn' style=''>
          <a href='update_p.php?id=" . $datalist['id'] . "' style='color: green; font-size: 21px;'><i class='fa fa-pencil-square-o' aria-hidden='true' style=''></i></a></div></td>
          <td>
          <div class='btn' style=''>
          <a href='delete_product.php?id=" . $datalist['id'] . "' style='color: red; font-size: 21px;'><i class='fa fa-times' aria-hidden='true'></i></a></td>
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
    </div>
  </section>


  <?php


  if (isset($_POST['login'])) {
    $c = $_POST['cat'];

    $s = $_POST['sub_cat'];

    $n = $_POST['product_name'];

    $company = $_POST['product_company'];

    $price = $_POST['product_price'];

    $disc = $_POST['after_disc'];

    $d = $_POST['product-description'];

    $file1 = $_FILES['img1']['name'];
    $temp1 = $_FILES['img1']['tmp_name'];
    $folder1 = "../image/" . $file1;
    move_uploaded_file($temp1, $folder1);

    $file2 = $_FILES['img2']['name'];
    $temp2 = $_FILES['img2']['tmp_name'];
    $folder2 = "../image/" . $file2;
    move_uploaded_file($temp2, $folder2);

    $file3 = $_FILES['img3']['name'];
    $temp3 = $_FILES['img3']['tmp_name'];
    $folder3 = "../image/" . $file3;
    move_uploaded_file($temp3, $folder3);

    $ship = $_POST['product_shipping'];

    $a = $_POST['product_availability'];

    date_default_timezone_set('Asia/kolkata');
    $current_time = date('d-m-Y h:i:s, A', time());

    $sql = "INSERT INTO product(category, sub_category, product_name, company, price, discount, description, image_1, image_2, image_3, shipping, availability, posting_date) VALUES ('$c','$s','$n','$company','$price','$disc','$d','$folder1','$folder2','$folder3','$ship','$a','$current_time')";
    $result = mysqli_query($connect, $sql);
  } else {
    echo "<p style='text-align:center; font-size:18px;'>Data not save</p>";
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