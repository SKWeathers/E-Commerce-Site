<?php

include("check_login.php");
include("connect_to_database.php");

$listing_id = $_POST['listing_id'];
$title = $_POST['title'];
$description = $_POST['description'];
$url_listing = "/silkroad/listings/trade_listing.php?listing_id=" . $listing_id;

$sql_listing = "UPDATE listings SET title='$title', description='$description' WHERE listing_id='$listing_id'";

if (!mysql_query($sql_listing,$con)) { die('Error: ' . mysql_error()); }
else 
	{ 
	mysql_close($con);
	header ("Location: $url_listing"); 
	}

?>