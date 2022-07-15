<?php
include "connect.php";
$id1= $_GET['id'];
$sql="delete from sub_category where id='$id1'";

if(mysqli_query($connect, $sql))
{
	echo "<script>location.replace('sub-category.php')</script>";
}
?>