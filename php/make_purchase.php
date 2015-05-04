<?php

include("../php/check_login.php");
include("../php/connect_to_database.php");

$listing_id = $_POST['listing_id'];
$buyer_id = $user_id;
$seller_id = $_POST['seller'];
$url_success = "/silkroad/listings/successful_purchase.php?listing_id=" . $listing_id;

$sql_sale_made = "INSERT INTO sales_made (seller_id, buyer_id, listing_id) VALUES ('$seller_id', '$buyer_id', '$listing_id')";

if (!mysql_query($sql_sale_made,$con)) { die('Error!: ' . mysql_error()); }

$sql_sold_items = "UPDATE items, listing_items, listings SET items.sold = '1' WHERE items.item_id = listing_items.item_id AND listing_items.listing_id = '$listing_id'";

if (!mysql_query($sql_sold_items,$con)) { die('Error!: ' . mysql_error()); }

$sql_sold = "UPDATE listings SET sold = '1' WHERE listing_id = '$listing_id'";

if (!mysql_query($sql_sold,$con)) { die('Error!: ' . mysql_error()); }
else
	{
	mysql_close($con);
	header("location: $url_success");
	}

?>