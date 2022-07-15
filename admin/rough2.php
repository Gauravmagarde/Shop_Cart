<!DOCTYPE html>

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
      background: #509900;
    }

    .dropdown-btn:hover {
      color: white;
      text-decoration: none;
      border: none;
      outline: none;
      background: #509900;
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
      background: #509900;
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

</head>

<body style="background:#f1f1f1; ">
  <div class="container-fluid" style="background: #509900 ">
    <nav class="navbar">
      <li class="navbar-brand" style="color: white; margin-left: 180px;">
        Dashboard
      </li>
      <div class="dropdown" style="margin-right: 80px;">
        <a href="" class="dropdown-toggle" type="" id="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-user-o" aria-hidden="true"></i>
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#">Log Out</a>
          <a class="dropdown-item" href="#">Change Password</a>
        </div>
      </div>
    </nav>
  </div>
  <!------->
  <div class="sidenav">
    <img src="../image/logo.png" height="45" width="180" style="margin-top: -20px;">
    <a href="create-category.php" style="  margin-top: 30px;">Category</a>
    <a href="sub-category.php">Sub Category</a>
    <a href="insert-product.php">Insert Product</a>
    <a href="manage-product.php">Manage Product</a>
    <button class="dropdown-btn" style="border: none; outline: none;">Order Management
      <i class="fa fa-caret-down" style="margin-top: 5px;"></i>
    </button>
    <div class="dropdown-container">
      <a href="t-order.php">Today's Order</a>
      <a href="p-order.php">Pending Order</a>
      <a href="d-order.php">Delivered Order</a>
    </div>
    <a href="user-management.php">User Management</a>
    <a href="userlog.php">User Log</a>
    <a href="logout.php">Log Out</a>
  </div>
  <section>
    <div class="data-list">
      <div class="conatiner">
        <form method="POST">
          <table align="center" cellpadding="8" width="500" style="font-family: sans-serif; font-size: 15px; font-weight: bold; font-style: normal; border-collapse: collapse;  width: 500px; height: 300px; background: white;box-shadow: 0px 8px 16px 0px rgba(0,0,0,.50); ">
            <tr>
              <td>
                <h3 style="color:black; font-size: 26px; font-family: sans-serif; padding-left: 10px; border-bottom: 2px solid grey; width: 200px; margin-bottom: 30px;">Category</h3>
              </td>
            </tr><br><br><br>
            <tr>
              <td>Category</td>
              <td><input class="form-control" type="text" name="category" placeholder="Enter category"></td>
            </tr>
            <tr>
              <td>Category Description</td>
              <td><textarea class="form-control" name="description" rows="4" cols="20" placeholder="write description here.."></textarea></td>
            </tr>
            <tr>
              <td>
                <button type="submit" name="submit" style="border: 1px solid #509900; outline: none; background: #509900; color: #fff; font-size: 16px;
          font-family: sans-serif; padding: 8px 20px; border-radius: 3px; margin-bottom: 10px;  margin-top: 20px; width: 100px;">Save
                </button>
              </td>
            </tr>
          </table>
        </form>
      </div>
    </div>
  </section>
  <?php
  include "connect.php";

  if (isset($_POST['submit'])) {

    $c = $_POST['category'];

    $d = $_POST['description'];

    $current_time = date('d/m/Y, h:l:s, A');
    $sql = "INSERT INTO category(name, description, creation_date) VALUES ('$c','$d','$current_date')";
    $result = mysqli_query($connect, $sql);
  } else {
    echo "<p style='float: right;'>data not save</p>";
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