<?php

include("check_login.php");
include("connect_to_database.php");

$item_id = $_POST['item_id'];
$title = $_POST['title'];
$description = $_POST['description'];
$item_condition = $_POST['item_condition'];
$price = $_POST['price'];
$category = $_POST['category'];
$url_item = "/silkroad/item_details.php?item_id=" . $item_id;

$sql = "UPDATE items SET title='$title', description='$description', item_condition='$item_condition', price='$price', category='$category' WHERE item_id='$item_id'";

if (!mysql_query($sql,$con)) { die('Error: ' . mysql_error()); }
else 
	{ 
	mysql_close($con);
	header ("Location: $url_item"); 
	}

?>