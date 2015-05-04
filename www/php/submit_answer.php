<?php

$answer_content = $_POST['answer_content'];
$question_id = $_POST['question_id'];
$listing_id = $_POST['listing_id'];
$listing_type = $_POST['listing_type'];
$url_listing = "/silkroad/listings/" . $listing_type . "_listing.php?listing_id=" . $listing_id;

include("check_login.php");
include("connect_to_database.php");

$sql_add_answer="INSERT INTO answers (answer_content, question_id) VALUES ('$answer_content','$question_id')";

if (!mysql_query($sql_add_answer,$con)){ die('Error!: ' . mysql_error()); }
else
	{ 
	mysql_close($con);
	header("location: $url_listing");
	}

?>