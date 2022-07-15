<!DOCTYPE html>
<?php

include "connect.php";

$sub_sql = "";
$toDate = $fromDate = "";
if (isset($_POST['submit'])) {
  $from = $_POST['from'];
  $fromDate = $from;
  $fromArr = explode("/", $from);
  $from = $fromArr['0'] . '-' . $fromArr['1'] . '-' . $fromArr['2'];
  $from = $from . " 00:00:00";

  $to = $_POST['to'];
  $toDate = $to;
  $toArr = explode("/", $to);
  $to = $toArr['0'] . '-' . $toArr['1'] . '-' . $toArr['2'];
  $to = $to . " 23:59:59";

  $sub_sql = " where order_date >= '$from' && order_date <= '$to' ";
}

$user = mysqli_query($connect, "select * from user_data $sub_sql ");
?>
<html>

<head>
  <title>Smart Shop</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>

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
</head>

<body>
  <div class="container-fluid" style="background: #0B0B45; position: fixed; top: 0;">
    <nav class="navbar">
      <li class="navbar-brand" style="color: white; margin-left: 180px">Dashboard</li>
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
  <!----->

  <br><br><br>

  <!----->
  <section>
    <div id="Today's Order" class="product">

      <div class="data-list">
        <div class="container" style="width: 70%;">
          <tr>
            <td>
              <h3 style="color:black; font-size: 24px; font-family: sans-serif; padding-left: 10px; border-bottom: 2px solid grey; width: 250px; margin-top: 20px; margin-left: 50px;">Order Details</h3>
            </td>
          </tr><br>


          <div class="container" style="width: 500px;"><br><br>

            <!--<form method="post">
    <p>From: <input type="text" id="from" name="from" required value="<?php echo $fromDate ?>"> To: <input type="text" id="to" name="to" required value="<?php echo $toDate ?>"> <input type="submit" name="submit" class="btn btn-danger" value="Search"></p>
  </form>--->

            <form method="POST">
              <div class="form-group">
                <label><b>From</b></label>
                <input type="text" class="form-control" placeholder="dd/mm/yy" id="from" name="from" required value="<?php echo $fromDate ?>">
              </div>
              <div class="form-group">
                <label><b>To</b></label>
                <input type="text" class="form-control" placeholder="dd/mm/yy" id="to" name="to" required value="<?php echo $toDate ?>">
              </div>
              <button type="submit" name="submit" class="btn" style="padding: 8px 20px; background-color: orangered; border: 1px solid #ddd; color: white; cursor: pointer; border-radius: 3px; font-family: 'Montserrat', sans-serif; font-size: 14px; font-weight: bold;">Search</button>
            </form>
          </div>

          <br><br>
          <!------------->

          <br />
          <?php if (mysqli_num_rows($user) > 0) { ?>
            <div class="table-responsive" style="margin-left: 50px;">
              <table class="table table-bordered table-hover thead-light table-sm">
                <thead class="thead-light">
                  <tr>
                    <th>Sr.&nbsp;No.</th>
                    <th>Customer&nbsp;Name</th>
                    <th>Email</th>
                    <th>Contact&nbsp;No.</th>
                    <th>Product&nbsp;Name</th>
                    <th>Company</th>
                    <th>Subtotal</th>
                    <th>Total</th>
                    <th>Order&nbsp;Date</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <?php while ($row = mysqli_fetch_assoc($user)) { ?>
                  <tbody>
                    <tr>
                      <td><?php echo $row['id']; ?></td>
                      <td><?php echo $row['name']; ?></td>
                      <td><?php echo $row['email']; ?></td>
                      <td><?php echo $row['contact']; ?></td>
                      <td><?php echo $row['product_name']; ?></td>
                      <td><?php echo $row['company']; ?></td>
                      <td><?php echo $row['subtotal']; ?></td>
                      <td><?php echo $row['total']; ?></td>
                      <td><?php echo $row['order_date']; ?></td>
                      <td></td>
                    </tr>
                  <?php
                }

                  ?>
                  </tbody>
              </table>
            <?php } else {
            echo "<center><h4 style='color: grey; font-family: 'Montserrat', sans-serif; font-weight: bold; font-size: 25px;'>No data found..</h4></center>";
          }
            ?>

            </div>
        </div>
      </div>
    </div>
  </section>

  <br><br><br><br>

  <script>
    $(function() {
      var dateFormat = "dd/mm/yy",
        from = $("#from")
        .datepicker({
          defaultDate: "+1w",
          changeMonth: true,
          numberOfMonths: 1,
          dateFormat: "dd/mm/yy",
        })
        .on("change", function() {
          to.datepicker("option", "minDate", getDate(this));
        }),
        to = $("#to").datepicker({
          defaultDate: "+1w",
          changeMonth: true,
          numberOfMonths: 1,
          dateFormat: "dd/mm/yy",
        })
        .on("change", function() {
          from.datepicker("option", "maxDate", getDate(this));
        });

      function getDate(element) {
        var date;
        try {
          date = $.datepicker.parseDate(dateFormat, element.value);
        } catch (error) {
          date = null;
        }

        return date;
      }
    });
  </script>
</body>
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


</html>