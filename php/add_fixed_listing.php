<?php

$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];
$selected_items = $_POST['selected_items'];

include("check_login.php");
include("connect_to_database.php");

$customer_id = $user_id;

$sql_add_listing="INSERT INTO listings (customer_id, title, description, listing_type) VALUES ('$customer_id','$title','$description','fixed')";

if (!mysql_query($sql_add_listing,$con))
	{ die('Error!: ' . mysql_error()); }

$listing_id = mysql_insert_id();
$url_listing = "/silkroad/listings/fixed_listing.php?listing_id=" . $listing_id;

foreach($selected_items as $items)
	{
	$sql_associate_items="INSERT INTO listing_items (listing_id, item_id) VALUES ('$listing_id','$items')";
	if (!mysql_query($sql_associate_items,$con))
		{ die('Error!: ' . mysql_error()); }	
	}
	
$sql_add_f_listing_price="INSERT INTO fixed_listings (listing_id, price) VALUES ('$listing_id', '$price')";

if (!mysql_query($sql_add_f_listing_price,$con)){ die('Error!: ' . mysql_error()); }
else 
	{ 
	mysql_close($con);
	header ("Location: $url_listing"); 
	}

?>