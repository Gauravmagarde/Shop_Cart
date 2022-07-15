<!DOCTYPE html>
<html>

<head>
  <title>Smart Shop</title>

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
      border: 1px solid #509900;
      outline: none;
      background: #509900;
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
  </style>
  <script type="text/javascript">
    function showconfirm() {
      alert("Form submitted successfully");
    }
  </script>
</head>

<body>
  <form method="POST">
    <table align="center" cellpadding="8" width="400">
      <tr>
        <td>
          <h1>Admin Login</h1>
        </td>
      </tr>
      <tr>
        <td>
          <input type="text" name="username" placeholder="Enter your email" />
        </td>
      </tr><br>
      <tr>
        <td>
          <input type="password" name="password" placeholder="New password" />
        </td>
      </tr><br><br>
      <tr>
        <td align="center">
          <button name="login" type="submit" class="btn" onclick="showconfirm()"><a href="admin-dash.php">Log In</a> </button>
        </td>
      </tr>
    </table>
  </form>
  <?php

  include "connect.php";
  if (isset($_POST['login'])) {

    $user = $_POST['username'];

    $pass = $_POST['password'];

    $sql = "INSERT INTO admin(username, password) VALUES ('$user','$pass')";
    $result = mysqli_query($connect, $sql);
  } else {
    echo "<p style='text-align:center; font-size:18px;'>Data not save</p>";
  }

  ?>
</body>

</html>