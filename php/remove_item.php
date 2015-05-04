<?php

include("connect_to_database.php");

$item_id = $_POST['item_id'];

$sql = "DELETE FROM items WHERE item_id='$item_id'";

if (!mysql_query($sql,$con)) { die('Error: ' . mysql_error()); }
else 
	{ 
	mysql_close($con);
	header ('Location: ../inventory.php'); 
	}

?>