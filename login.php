<!DOCTYPE html>
<?php
include "admin/connect.php";

session_start();

?>
<html lang="en">

<head>
  <title>Shop Cart</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!----Google Fonts--->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;600&display=swap" rel=" stylesheet">
  <style type="text/css">
    body {
      font-family: 'Montserrat', sans-serif;
    }

    label {
      font-size: 12px;
      font-weight: bold;
    }

    .form-group input[type=text] {
      height: 40px;
    }

    .form-group ::placeholder {
      font-size: 12px;
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
</head>

<body>
  <div class="logo">
    <center><a href="index.php"><img src="image/logo4.jpg" style="width: 250px; "></a></center>
  </div><br>
  <div class="container" id="reslogin"><br>
    <p style=" font-size: 25px; font-family: new times roman; border-bottom: 1px solid #e6e6e6;">Log In Here</p>

    <form method="POST" style="margin-top: 10px;">
      <center><label class="form-check-label" style="font-family: new times roman; font-size:16px;">
          To continue, log in to shop Cart
        </label></center><br>

      <a href="https://www.facebook.com/"><button type="submit" class="btn" style="width: 100%; background: #4267B2; color: white; font-size: 12px; font-weight: bold;">LOG IN WITH FACEBOOK</button></a>
      <center>
        <div>
          <p style="font-size: 10px; color: black; font-weight: bold;">OR</p>
        </div>
      </center>

      <div class="form-group">
        <label for="email">Email address</label>
        <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>

      <div class="form-group">
        <label for="pwd">Password<span style="margin-left: 100px; color: #1DA1F2; font-size: 12px; font-weight: bold; border-bottom: 1px solid #1DA1F2;">Forgot password</span></label>
        <input type="text" class="form-control" placeholder="Enter password" name="pass">
      </div>

      <a href="#"><button type="submit" name="submit" class="btn" onclick="msg()" style="width: 100%; background: #0B0B45; color: white; font-size: 12px; font-weight: bold;">LOG IN</button></a>

      <!--<center>
    <label class="form-check-label" style="margin-top: 10px;">
        <a href="logout.php" style="color: #509900; font-weight: bold; border-bottom: 1px solid #509900;font-weight: bold;"><button style=" color: #509900; font-weight: bold; width: 100%; border: none; outline: none; background: inherit; text-decoration: none;">Log Out</button></a> 
      </label>
    </center><br>-->

      <div class="form-group form-check">
        <label class="form-check-label" style="color: grey">
          <input class="form-check-input" type="checkbox" name="remember">
          Remember me for 30 days.
        </label>
      </div>
      <label class="form-check-label" style="color: grey;">
        Dont't have an account?
        <label class="form-check-label" style="margin-top: 10px;">
          <a href="register.php" style="color: orangered; font-weight: bold; border-bottom: 1px solid orangered;font-weight: bold; text-decoration: none;">Create account</a> ,
          <a href="admin/adminlogin.php" style="color: orangered; font-weight: bold; border-bottom: 1px solid orangered;font-weight: bold; text-decoration: none;">admin login</a>
        </label><br><br><br>
    </form>
  </div>
  <a href="index.php">Back</a>
  <br><br><br>
</body>

<?php

include "admin/connect.php";

if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $pass = $_POST['pass'];

  $result = mysqli_query($connect, "SELECT * FROM user_login WHERE email ='$email' AND password ='$pass'");


  if (mysqli_num_rows($result)) {

    $_SESSION['customer'] = $email;


    echo "<script>
      alert('You are successfully Login');
      window.location.href='checkout.php';
      </script>";
  } else {
    echo "<script>
      alert('Incorrect email or password');
      window.location.href='login.php';
      </script>";
  }
  date_default_timezone_set('Asia/kolkata');
  $current_time = date('d-m-Y h:i:s, A', time());

  //$login_date = date("Y-m-d"); 
  //$login_time = date("H:i:s"); 


  $sql = "INSERT INTO user_log(user_email, login_date_time) VALUES ('$email','$current_time')";
  $result = mysqli_query($connect, $sql);
}
?>
<!----<script type="text/javascript">
    function msg(){
        alert("Login Successfully");
    }
</script>-->

</html>