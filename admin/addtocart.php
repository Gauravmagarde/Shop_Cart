<?php
include "header.php";
include "connection.php";
$id = $_GET['id'];
$sid = $_GET['sid'];
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Shop City</title>
  <link rel="shortcut icon" href="images/favicon.jpg" type="image/x-icon">
  </script>

<body>
  <?php
  $query = "SELECT * from product where  product_id=$id && sub_category=$sid ";
  $data = mysqli_query($conn, $query);
  while ($result = mysqli_fetch_array($data)) {
    echo "<div class='container' style='align:center;margin-top:61px;margin-bottom:61px;'>
        <div class='row'>
        <div class='col-md-6' style='margin-left:70px; margin-top:16px;'>
        <img src='" . $result['img1'] . "' style='height:403px; width:403px;'>";
    echo "<h3 style='font-family:ruby; margin-top:7px; margin-left:70px;'>" . $result['product_name'] . "</h3></div>";
    echo  "<div class='col-md-6' style='margin-left:-124px; margin-top:70px;'>
        <h1 style=' align-item:center; font-family:ruby;'>" . $result['company'] .  "</h1>";
    echo  "<h3 style='font-family:riby; margin-top:25px;'>" . $result['quantity'] . "</h3>";
    echo  "<h5 style='font-family:ruby; margin-top:25px;'>Price:" . $result['price'] . "₹</h5>";
    echo  "<h5 style='font-family:ruby; margin-top:25px;'> After Discount:" . $result['total'] . "₹</h5>";
    echo "<a href='#'><input class='btn btn-primary' value='Add To Cart' type='submit' style=' margin-top:43px;margin-left:133px;'>
        </a></div></div></div>";
  }
  ?>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <?php
  include "footer.php";
  ?>
</body>

</html>

<!-- @media screen and (max-width: 1281px) {}

@media screen and (max-width: 769px) {}

@media screen and (max-width: 541px) {}

@media screen and (max-width: 412px) {}

@media screen and (max-width: 376px) {}

@media screen and (max-width: 361px) {}

@media screen and (max-width: 281px) {} -->


<!-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="" height="305px" width="1200px" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="" height="305px" width="1200px" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src=" height="305px" width="1200px" alt="Second slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>  -->