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
  $sql = "select * from category where id = '$id'";
  $result = mysqli_query($connect, $sql);
  while ($r = mysqli_fetch_array($result)) {
    $c = $r['category_name'];
    $d = $r['category_desc'];
  }


  ?>

  <section>
    <div class="conatiner">
      <form method="POST">
        <table class="table1" align="center" cellpadding="8" width="500" style="font-family: sans-serif; font-size: 15px; font-weight: bold; font-style: normal; border-collapse: collapse;  width: 500px; height: 300px; border: 1px solid grey;">
          <tr>
            <td>
              <h3 style="color:black; font-size: 24px; font-family: sans-serif; padding-left: 10px; border-bottom: 2px solid grey; width: 200px; margin-bottom: 30px;">Update Category</h3>
            </td>
          </tr><br><br><br>
          <tr>
            <td>Category</td>
            <td><input class="form-control" name="category_name" value="<?php echo $c; ?>"></td>
          </tr>
          <tr>
            <td>Description</td>
            <td><input class="form-control" name="category_desc" value="<?php echo $d; ?>"></td>
          </tr>
          <tr>
            <td>
              <button type="submit" name="login" value="Login" style="border: 1px solid #509900; outline: none; background: #509900; color: #fff; font-size: 16px;
          font-family: sans-serif; padding: 8px 20px; border-radius: 3px; margin-bottom: 10px;  margin-top: 20px; width: 100px;">Save
              </button>
            </td>
          </tr>
        </table>
      </form>
    </div>
  </section>
  <?php

  if (isset($_POST['login'])) {
    $c = $_POST['category_name'];

    $d = $_POST['category_desc'];


    $sql = "update category set category_name='$c', category_desc='$d' where id='$id'";
    $result = mysqli_query($connect, $sql);
    echo "<script type='text/javascript'>location.href='create-category.php';</script>";
  } else {
    echo "<p style='text-align:center; font-size:18px;'>Data not save</p>";
  }

  ?>

</body>

</html>