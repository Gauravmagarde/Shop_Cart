<?php
include "connect.php";
$id1= $_GET['id'];
$sql="delete from category where id='$id1'";

if(mysqli_query($connect, $sql))
{
	echo "<script>location.replace('create-category.php')</script>";
}
?>