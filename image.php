<?php
include "admin/connect.php";
$query = mysqli_query($connect, "select * from product where sub_category= 'Laptop'");
$num = mysqli_num_rows($query);
if ($num > 0) {
  while ($row = mysqli_fetch_array($query)) {

    echo " <img src='image/" . $row['image_1'] . "'>"; ?>
    <p style="font-weight: bold;">&#8377;<?php echo $row['price'] ?></p>
    <h6 style="color: grey"><?php echo $row['category'] ?></h6>
    <h6><?php echo $row['product_name'] ?></h6>

<?php
  }
}
?>

<!DOCTYPE html>
<html>

<head>
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a href="login.php" style="outline: none; border: none;"><button class="btn">Log In</button></a>
    </li>
    <ul>
</body>

</html>