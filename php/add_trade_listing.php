<?php

$title = $_POST['title'];
$description = $_POST['description'];
$selected_items = $_POST['selected_items'];
$preferred_trade = $_POST['preferred_trade'];

include("check_login.php");
include("connect_to_database.php");

$customer_id = $user_id;

$sql_add_listing="INSERT INTO listings (customer_id, title, description, listing_type) VALUES ('$customer_id','$title','$description','trade')";

if (!mysql_query($sql_add_listing,$con))
	{ die('Error!: ' . mysql_error()); }

$listing_id = mysql_insert_id();
$url_listing = "/silkroad/listings/trade_listing.php?listing_id=" . $listing_id;

foreach($selected_items as $items)
	{
	$sql_associate_items="INSERT INTO listing_items (listing_id, item_id) VALUES ('$listing_id','$items')";
	if (!mysql_query($sql_associate_items,$con))
		{ die('Error!: ' . mysql_error()); }
	}
	
$sql_add_preferred_trade = "INSERT INTO preferred_trades (listing_id, description) VALUES ('$listing_id', '$preferred_trade')";

if (!mysql_query($sql_add_preferred_trade,$con)) { die('Error!: ' . mysql_error()); }
else
	{
	mysql_close($con);
	header ("Location: $url_listing");
	}

?>