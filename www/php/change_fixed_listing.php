<?php

include("check_login.php");
include("connect_to_database.php");

$listing_id = $_POST['listing_id'];
$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];
$url_listing = "/silkroad/listings/fixed_listing.php?listing_id=" . $listing_id;

$sql_listing = "UPDATE listings SET title='$title', description='$description' WHERE listing_id='$listing_id'";

if (!mysql_query($sql_listing,$con)) { die('Error: ' . mysql_error()); }

$sql_price = "UPDATE fixed_listings SET price='$price' WHERE listing_id='$listing_id'";

if (!mysql_query($sql_price,$con)) { die('Error: ' . mysql_error()); }
else 
	{ 
	mysql_close($con);
	header ("Location: $url_listing"); 
	}

?>