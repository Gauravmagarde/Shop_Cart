<!DOCTYPE html>
<?php
session_start();
include "connect.php";
?>
<html>

<head>
  <title>Shop Cart</title>

  <style type="text/css">
    h1 {
      font-size: 30px;
      font-family: sans-serif;
      border-bottom: 1px solid grey;
    }

    table {
      margin-top: 100px;
      font-family: sans-serif;
      font-size: 15px;
      font-weight: bold;
      font-style: normal;
      background-color: white;
      border-collapse: collapse;
      border: 1px solid grey;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, .50);
      width: 400px;
      height: 300px;
    }

    input[type=text] {
      width: 90%;
      padding: 8px 15px;
      border-radius: 3px;
      border: 1px solid grey;
      height: 13px;

    }

    input[type=email] {
      width: 90%;
      padding: 8px 15px;
      border-radius: 3px;
      height: 13px;
      border: 1px solid grey;
      margin-top: 0;
    }

    input[type=password] {
      width: 90%;
      padding: 8px 15px;
      border-radius: 3px;
      height: 13px;
      border: 1px solid grey;
      margin-top: 0;
    }

    select {
      padding: 4px;
      width: 32%;
      margin-top: 5px;
    }

    input[type=radio] {
      padding: 4px;
      margin-top: 5px;
    }

    .btn {
      border: 1px solid #0B0B45;
      outline: none;
      background: #0B0B45;
      color: #fff;
      font-size: 14px;
      font-family: sans-serif;
      padding: 10px 60px;
      border-radius: 3px;
      margin-bottom: 30px;
      cursor: pointer;
    }

    .btn a {
      text-decoration: none;
      color: white;
    }
    #reslogin{
      width: 400px; border: 1px solid grey; background: white; box-shadow: 0px 8px 16px 0px rgba(0,0,0,.50); 
    }
    

    @media (max-width:600px) {
    #reslogin{
      width: 400px; border: 1px solid grey; background: white; box-shadow: 0px 8px 16px 0px rgba(0,0,0,.50); 
    }
    }

    @media (max-width:545px) {
    #reslogin{
      width: 90%; border: 1px solid grey; background: white; box-shadow: 0px 8px 16px 0px rgba(0,0,0,.50); 
    }
    }

    @media (max-width:480px) {
#reslogin{
      width: 90%; border: 1px solid grey; background: white; box-shadow: 0px 8px 16px 0px rgba(0,0,0,.50); 
    }
    }

    @media (max-width:380px) {
#reslogin{
      width: 90%; border: 1px solid grey; background: white; box-shadow: 0px 8px 16px 0px rgba(0,0,0,.50); 
    }
    }

    @media (max-width:320px) {
#reslogin{
      width: 90%; border: 1px solid grey; background: white; box-shadow: 0px 8px 16px 0px rgba(0,0,0,.50); 
    }
    }
  </style>
  <script type="text/javascript">
    function showconfirm() {
      alert("Form submitted successfully");
    }
  </script>
</head>

<body>
  <form method="POST">
    <table align="center" cellpadding="15" id="reslogin">
      <tr>
        <td>
          <h1>
            <center><a href="index.php"><img src="../image/logo4.jpg" style="width: 250px; "></a></center>
          </h1>
        </td>
      </tr>
      <tr>
        <td>
          <h1 style="font-family: times roman;">Admin Login</h1>
        </td>
      </tr>
      <tr>
        <td>
          <div class="form-group">
            <label for="Username" style="font-family: times roman;">User name</label>
            <input type="text" class="form-control" id="Username" placeholder="username" name="username">
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <div class="form-group">
            <label for="Password" style="font-family: times roman;">Password address</label>
            <input type="password" class="form-control" id="Password" placeholder="Enter Password" name="password">
          </div>
        </td>
      </tr>
      <tr>
        <td align="center">
          <button name="login" type="submit" class="btn"><a href="create-category.php">Log In</a> </button>
        </td>
      </tr>
    </table>
  </form>
  <?php

  include "connect.php";
  if (isset($_POST['login'])) {
    $user = $_POST['username'];

    $pass = $_POST['password'];
    if (empty($user) || empty($pass)) {
      echo "<script>alert('please fill username and password')</script>";
    } else {
      $sql = "select * from admin_login where username='$user' and password='$pass'";
      $result = mysqli_query($connect, $sql);
      if ($r = mysqli_fetch_array($result)) {
        $_SESSION['user'] = $r['Username'];
        $id = $_SESSION['user'];
        echo "loged in successfully";
        header("location:create-category.php");
      } else {
        echo "please try again";
      }
    }
  }
  ?>
</body>

</html>