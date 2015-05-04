<?php

$title = $_POST['title'];
$description = $_POST['description'];
$condition = $_POST['condition'];
$category = $_POST['category'];
$price = $_POST['price'];

include("check_login.php");
include("connect_to_database.php");

$customer_id = $user_id;

$sql="INSERT INTO items (customer_id, title, description, item_condition, category, price) VALUES ('$customer_id','$title','$description','$condition','$category','$price')";

if (!mysql_query($sql,$con)) { die('Error: ' . mysql_error()); }
else 
	{ 
	mysql_close($con);
	header ('Location: ../inventory.php'); 
	}

?>