<?php

include("connect_to_database.php");

$listing_id = $_POST['listing_id'];

$sql = "DELETE FROM listings WHERE listing_id='$listing_id'";

if (!mysql_query($sql,$con)) { die('Error: ' . mysql_error()); }
else 
	{ 
	mysql_close($con);
	header ('Location: ../your_profile.php'); 
	}

?>