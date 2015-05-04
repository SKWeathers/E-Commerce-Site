<?php

class Listing
{

var $listing_id;
var $customer_id;
var $title;
var $description;
var $price;
var $listing_type;
var $date_added;
var $preferred_trade;

function getFixedListingData($listing_id)
{
	$con = mysql_connect("localhost","root");
	if (!$con) {die('Could not connect: ' . mysql_error());}
	mysql_select_db("silkroad_db1", $con);
	
	$result_listing = mysql_query("SELECT * FROM listings WHERE listing_id='$listing_id'");
	$row_listing = mysql_fetch_array($result_listing);
		
	$result_price = mysql_query("SELECT price FROM fixed_listings WHERE listing_id='$listing_id'");
	$row_price = mysql_fetch_array($result_price);
	
	$this->customer_id = $row_listing['customer_id'];
	$this->title = $row_listing['title'];
	$this->description = $row_listing['description'];
	$this->price = $row_price['price'];
	$this->listing_type = $row_listing['listing_type'];
	$this->date_added = $row_listing['date_added'];
	


	mysql_close($con);
}

function getTradeListingData($listing_id)
{
	$con = mysql_connect("localhost","root");
	if (!$con) {die('Could not connect: ' . mysql_error());}
	mysql_select_db("silkroad_db1", $con);
	
	$result_listing = mysql_query("SELECT * FROM listings WHERE listing_id='$listing_id'");
	$row_listing = mysql_fetch_array($result_listing);
		
	//$result_p_trade = mysql_query("SELECT price FROM fixed_listings WHERE listing_id='$listing_id'");
	//$row_p_trade = mysql_fetch_array($result_p_trade);
	
	$this->customer_id = $row_listing['customer_id'];
	$this->title = $row_listing['title'];
	$this->description = $row_listing['description'];
	$this->listing_type = $row_listing['listing_type'];
	$this->date_added = $row_listing['date_added'];
	
	mysql_close($con);
}

}

?>