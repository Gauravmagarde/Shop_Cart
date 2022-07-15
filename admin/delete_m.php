<?php
include "connect.php";
$id1= $_GET['id'];
$sql="delete from product where id='$id1'";

if(mysqli_query($connect, $sql))
{
	echo "<script>location.replace('manage-product.php')</script>";
}
?>