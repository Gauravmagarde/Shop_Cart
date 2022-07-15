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
      font-weight: bold;
      display: block;
      border: none;
      background: none;
      width: 100%;
      text-align: left;
      cursor: pointer;
      outline: none;
      float: left;
      margin-bottom: 10px;
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
      width: 100%;

    }

    .dropdown-container a {
      font-size: 15px;
      color: grey;
      font-weight: bold;
    }

    .dropdown-container a:hover {
      font-size: 15px;
      color: #0B0B45;
      background: #ededed;
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

    .sidenav a.active {
      background-color: #0B0B45;
      color: white;
      border: none;
    }
  </style>


</head>

<body>
  <div class="container-fluid" style="background: #0B0B45;">
    <nav class="navbar">
      <li class="navbar-brand" style="color: white; margin-left: 180px;">Dashboard</li>
      <div class="dropdown" style="margin-right: 80px;">
        <a href="" class="dropdown-toggle" type="" id="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-user-o" aria-hidden="true" style="margin-top: 5px;"></i>
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="font-size: 14px;">
          <a class="dropdown-item" href="#">Log Out</a>
          <a class="dropdown-item" href="#">Change Password</a>
        </div>
      </div>
    </nav>
  </div>
  <!------->
  <div class="sidenav">
    <img src="../image/logo.png" height="45" width="180" style="margin-top: -20px;">
    <a href="create-category.php" id="defaultOpen" style="margin-top: 30px">Category</a>
    <a href="sub-category.php">Sub Category</a>
    <a href="insert-product.php">Insert Product</a>
    <a href="manage-product.php">Manage Product</a>
    <button class="dropdown-btn" style="border: none; outline: none;">Order Management
      <i class="fa fa-caret-down"></i>
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

  <script>
    /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
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

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
  </script>
</body>

</html>