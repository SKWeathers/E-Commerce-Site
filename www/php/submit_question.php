<?php

$question_title = $_POST['question_title'];
$question_content = $_POST['question_content'];
$listing_id = $_POST['listing_id'];
$listing_type = $_POST['listing_type'];

include("check_login.php");
include("connect_to_database.php");

$customer_id = $user_id;
$url_listing = "/silkroad/listings/" . $listing_type . "_listing.php?listing_id=" . $listing_id;

$sql_add_question="INSERT INTO questions (customer_id, question_title, question_content, listing_id) VALUES ('$customer_id','$question_title','$question_content','$listing_id')";

if (!mysql_query($sql_add_question,$con)){ die('Error!: ' . mysql_error()); }
else
	{ 
	mysql_close($con);
	header("location: $url_listing");
	}

?>