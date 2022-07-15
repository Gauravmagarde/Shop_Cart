<!DOCTYPE html>
<html lang="en">

<head>
  <title>Shop Cart</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!----Font Awesome--->
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <style type="text/css">
    body {
      background: green;
      font-family: 'Montserrat', sans-serif;
    }

    .logo {
      background: white;
      width: 100px;
      height: 100px;
      border-radius: 50%;
      text-align: center;

    }

    .logo .fa {
      padding-top: 30px;
      color: green;
    }

    .text h3 {
      color: white;
      font-weight: bold;

    }

    .text p {
      color: white;
      font-size: 21px;
      opacity: 0.90;

    }

    .place_order button {
      background: white;
      color: green;
      outline: none;
      border: none;
      width: 200px;
      font-size: 18px;
      height: 45px;
      border-radius: 5px;

    }

    button .fa {
      margin-left: 10px;
      font-size: 21px;
    }
  </style>
</head>

<body>
  <a href="index.php">
    <button type="button" class="close" aria-label="Close" style="color: white; border: none; outline: none;">
      <span aria-hidden="true" style="font-size: 20px; margin: 10px; padding-top: 10px;">❌</span></button>
  </a>
  <br><br><br>
  <div class="place_order">
    <center>
      <div class="logo">
        <h1><i class="fa fa-check" aria-hidden="true"></i></h1>
      </div><br>
      <div class="text">
        <h3>Order Placed!</h3><br>
        <p>Your order is placed successfully!<br>
          Scan The QR And pay Amount For Confirm Your Order,<br>
          Your order Will be Delivery Within 4 to 5 days After Payment!<br>
          <br><img src="image/gpay2.jpeg" width="300"><br>
          <img src="image/payment.png" width="300">
      </div><br>
      <a href="index.php"><button>Delivery status<i class="fa fa-angle-right" aria-hidden="true"></i></button></a>
    </center>

  </div>

</body>

</html>