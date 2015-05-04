<?php

class Item
{

var $item_id;
var $customer_id;
var $title;
var $description;
var $item_condition;
var $category;
var $price;
var $date_added;

function getListingItems($listing_id)
{
	$con = mysql_connect("localhost","root");
	if (!$con) {die('Could not connect: ' . mysql_error());}
	mysql_select_db("silkroad_db1", $con);

	$result = mysql_query("SELECT item_id FROM listing_items WHERE listing_id='$listing_id'");

	while($row = mysql_fetch_array($result))
		{
		$this->item_id = $row['item_id'];
		$result_items = mysql_query("SELECT title FROM items WHERE item_id='$this->item_id'");
		$row_items = mysql_fetch_array($result_items);
		$this->title = $row_items['title'];
		$url_item = "/silkroad/item_details.php?item_id=" . $this->item_id;
		echo "<a href=$url_item>" . $this->title . "</a><br />";
		}
		
	mysql_close($con);
}

function getUserItemData($customer_id)
{
	$con = mysql_connect("localhost","root");
	if (!$con) {die('Could not connect: ' . mysql_error());}
	mysql_select_db("silkroad_db1", $con);

	$result = mysql_query("SELECT * FROM items WHERE customer_id='$customer_id'");
	$row = mysql_fetch_array($result);
	return $row;

	mysql_close($con);
}

}

?>