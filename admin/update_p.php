<!DOCTYPE html>
<?php

session_start();
include "connect.php";

?>
<html>

<head>
  <title>Smart Shop</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style type="text/css">
    h1 {

      font-size: 30px;
      font-family: sans-serif;
      text-align: center;
      padding-top: 30px;

    }

    table {
      font-family: sans-serif;
      font-size: 15px;
      font-weight: bold;
      font-style: normal;
      border-collapse: collapse;
      width: 600px;


    }

    input[type=text],
    [type=Email] {
      width: 80%;
      padding: 8px 15px;
      border-radius: 3px;
      border: 1px solid grey;
      height: 15px;
      padding-right: 10px;
      padding-left: 10px;


    }

    input[type=date] {
      width: 40%;
      padding: 5px 15px;
      border-radius: 3px;
      border: 1px solid grey;
      height: 15px;
      padding-right: 10px;
      padding-left: 10px;

    }

    input[type=submit],
    [type=reset] {
      border: 1px solid green;
      outline: none;
      color: white;
      background: green;
      font-size: 12px;
      font-family: sans-serif;
      padding: 8px 30px;
      margin-bottom: 10px;
      margin-left: 7px;
    }
  </style>
</head>

<body>
  <?php


  $id = $_GET['id'];
  $sql = "select * from product where id = '$id'";
  $result = mysqli_query($connect, $sql);
  while ($r = mysqli_fetch_array($result)) {
    $c = $r['category'];

    $s = $r['sub_category'];

    $n = $r['product_name'];

    $company = $r['company'];

    $price = $r['price'];

    $disc = $r['discount'];

    $d = $r['description'];

    /*$file1 = $r['image_1']['name'];
  $temp1 = $r['image_1']['tmp_name'];
  $folder1 = "../image/".$file1;
  move_uploaded_file($temp1, $folder1);

  $file2 = $r['image_2']['name'];
  $temp2 = $r['image_2']['tmp_name'];
  $folder2 = "../image/".$file2;
  move_uploaded_file($temp2, $folder2);

  $file3 = $r['image_3']['name'];
  $temp3 = $r['image_3']['tmp_name'];
  $folder3 = "../image/".$file3;
  move_uploaded_file($temp3, $folder3);*/

    $ship = $r['shipping'];

    $a = $r['availability'];
  }


  ?>

  <section>

    <div class="data-list">
      <div class="conatiner">
        <form method="POST" enctype="multipart/form-data">
          <table class="table1" align="center" cellpadding="8" width="500" style="font-family: sans-serif; font-size: 15px; font-weight: bold; font-style: normal; border-collapse: collapse;  width: 500px; height: 300px; border: 1px solid grey;">
            <tr>
              <td>
                <h3 style="color:black; font-size: 24px; font-family: sans-serif; padding-left: 10px; border-bottom: 2px solid grey; width: 200px; margin-bottom: 30px;">Update Product</h3>
              </td>
            </tr><br><br><br>
            <div id="Insert-Product" class="product">
              <tr>
                <td>Category</td>
                <td>
                  <input class="form-control" name="cat" value="<?php echo $c; ?>">
                </td>
              </tr>
              <tr>
                <td>Sub-Category</td>
                <td>
                  <input class="form-control" name="sub_cat" value="<?php echo $s; ?>">
                </td>
              </tr>
              <tr>
                <td>Product Name</td>
                <td><input class="form-control" name="product_name" value="<?php echo $n; ?>"></td>
              </tr>
              <tr>
                <td>Product Company</td>
                <td><input class="form-control" name="product_company" value="<?php echo $company; ?>"></td>
              </tr>
              <tr>
                <td>product price before discount</td>
                <td><input class="form-control" name="product_price" value="<?php echo $price; ?>"></td>
              </tr>
              <tr>
                <td>after discount</td>
                <td><input class="form-control" name="after_disc" value="<?php echo $disc; ?>"></td>
              </tr>
              <tr>
                <td>Product Description</td>
                <td><input class="form-control" rows="4" cols="20" placeholder="write description here.." name="product-description" value="<?php echo $d; ?>"></td>
              </tr>
              <tr>
                <td>Product shipping charges</td>
                <td><input class="form-control" name="product_shipping" value="<?php echo $ship; ?>"></td>
              </tr>
              <tr>
                <td>Product Availibilty</td>
                <td>
                  <input class="form-control" name="product_availability" value="<?php echo $a; ?>">
                </td>
              </tr>
              <tr>
                <td>Image</td>
                <td>
                  <input type="file" class="" id="" name="img1" value="<?php echo $folder1; ?>">
                </td>
                r
              <tr>
                <td>Image</td>
                <td>
                  <input type="file" class="" id="" name="img2" value="<?php echo $folder2; ?>">
                </td>
              </tr>
              <tr>
                <td>Image</td>
                <td>
                  <input type="file" class="" id="" name="img3" value="<?php echo $folder3; ?>">
                </td>
              </tr>
              <tr>
                <td>
                  <button type="submit" name="login" value="Login" onclick="showconfirm()" style="border: 1px solid #509900; outline: none; background: #509900; color: #fff; font-size: 16px;
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

      $sql = "update product set category='$c', sub_category='$s', product_name='$n', company='$company', price='$price', discount='$disc', description='$d', image_1='$folder1', image_2='$folder2', image_3='$folder3', shipping='$ship', availability='$a', posting_date='$current_time' where id='$id'";
      $result = mysqli_query($connect, $sql);
      echo "<script type='text/javascript'>location.href='insert-product.php';</script>";
    } else {
      echo "<p style='text-align:center; font-size:18px;'>Data not save</p>";
    }

    ?>

</body>

</html>