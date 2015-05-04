<?php

include("check_login.php");
include("connect_to_database.php");

$listing_id = $_POST['listing_id'];
$listing_type = $_POST['listing_type'];
$url_listing = "/silkroad/listings/" . $listing_type . "_listing.php?listing_id=" . $listing_id . "&success=yes";

$sql = "INSERT INTO wishlist (customer_id, listing_id) VALUES ('$user_id', '$listing_id')";

if (!mysql_query($sql,$con)) { die('Error!: ' . mysql_error()); }
else
	{ 
	mysql_close($con);
	header ("Location: $url_listing");
	}

?>