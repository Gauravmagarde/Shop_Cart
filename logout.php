<?php

include "admin/connect.php";
session_start(); 

    date_default_timezone_set('Asia/kolkata');
    $current_time = date('d-m-Y h:i:s, A', time());

    
    $sql="INSERT INTO user_log(logout_date_time) VALUES ('$current_time')";
    $result=mysqli_query($connect, $sql);

    //mysqli_query($connect, "UPDATE user_log SET logout_date_time = NOW() WHERE email = '$_SESSION[customer]'");


session_unset(); 
session_destroy(); 

header("location:index.php"); 

?>