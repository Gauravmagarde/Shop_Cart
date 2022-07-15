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
      height: 30px;
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
    <p style=" font-size: 25px; font-family: sans-serif; border-bottom: 1px solid #e6e6e6;">Create Account</p>
    <form method="POST" style="margin-top: 10px;">
      <div class="form-group">
        <label for="">Your Name</label>
        <input type="text" class="form-control" id="email" placeholder="Enter email" name="name">
      </div>
      <div class="form-group">
        <label for="">Mobile number</label>
        <input type="text" class="form-control" id="email" placeholder="Enter email" name="phone">
        </td>
      </div>
      <div class="form-group">
        <label for="">Email address</label>
        <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
      <div class="form-group">
        <label for="">Password</label>
        <input type="text" class="form-control" placeholder="Enter password" name="pass">
      </div>
      <div class="form-group">
        <label for="comment">Address</label>
        <textarea class="form-control" name="address" rows="3" id="comment" placeholder="Address"></textarea>
      </div>
      <div class="form-group">
        <label for="">Town/City</label>
        <input type="text" class="form-control" placeholder="city" name="city">
      </div>
      <label class="form-check-label" style="opacity: 0.60;">
        We will send you a text to verify your phone. Message and Data rates may apply.
      </label><br><br>

      <a href=""><button type="submit" name="submit" class="btn" style="width: 100%; background: #0B0B45; color: white; font-size: 12px; font-weight: bold;">Sign Up</button></a><br><br>

      <label class="form-check-label" style="color: grey">
        Already have an account?
        <a href="login.php" style="color: orangered; font-weight: bold; border-bottom: 1px solid orangered;font-weight: bold; text-decoration: none;">Sign In</a>
      </label><br><br>
  </div>
  </form>
  <a href="index.php">Back</a>
  </div><br><br><br>
</body>

<?php


if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $pass = $_POST['pass'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $city = $_POST['city'];


  $same_email = mysqli_query($connect, "SELECT * FROM user_login WHERE email ='$email'");
  $same_name = mysqli_query($connect, "SELECT * FROM user_login WHERE name ='$name'");

  if (mysqli_num_rows($same_email)) {
    echo "<script>
    alert('This email is already exit..');
    window.location.href='register.php';
    </script>";
  }
  if (mysqli_num_rows($same_name)) {
    echo "<script>
    alert('This username is already exit..');
    window.location.href='register.php';
    </script>";
  } else {
    $sql = "INSERT INTO user_login(name, email, password, phone, address, city) VALUES ('$name','$email','$pass','$phone','$address','$city')";
    $result = mysqli_query($connect, $sql);

    echo "<script>
    alert('Registration successfully..');
    window.location.href='login.php';
    </script>";
  }
}
?>


</html>