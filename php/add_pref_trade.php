<?php

include("connect_to_database.php");

$listing_id = $_POST['listing_id'];
$description = $_POST['preferred_trade'];
$url_listing = "/silkroad/listings/trade_listing.php?listing_id=" . $listing_id;

$sql_add_preferred_trade = "INSERT INTO preferred_trades (listing_id, description) VALUES ('$listing_id', '$description')";

if (!mysql_query($sql_add_preferred_trade,$con)){ die('Error!: ' . mysql_error()); }
else 
	{ 
	mysql_close($con);
	header ("Location: $url_listing"); 
	}

?>