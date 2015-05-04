<?php
/*
function grab_profile_data($user_id){
	$con = mysql_connect("localhost","root");
	if (!$con) {die('Could not connect: ' . mysql_error());}
	mysql_select_db("silkroad_db1", $con);

	$result = mysql_query("SELECT * FROM customers WHERE customer_id='$user_id'");
	$row = mysql_fetch_array($result);
	return $row;

	mysql_close($con);}



function get_user_id($user_id){
	$con = mysql_connect("localhost","root");
	if (!$con) {die('Could not connect: ' . mysql_error());}
	mysql_select_db("silkroad_db1", $con);

	$result=mysql_query("SELECT customer_id FROM customers WHERE user='$user'");
	while($row = mysql_fetch_array($result, MYSQL_ASSOC))
		{
		$customer_id = $row["customer_id"];
		}
	return $customer_id;

	mysql_close($con);}



function grab_user_item_data($customer_id){
	$con = mysql_connect("localhost","root");
	if (!$con) {die('Could not connect: ' . mysql_error());}
	mysql_select_db("silkroad_db1", $con);

	$customer_id = $customer_id;

	$result = mysql_query("SELECT * FROM items WHERE customer_id='$customer_id'");
	$row = mysql_fetch_array($result);
	return $row;

	mysql_close($con);}

*/


//inventory function
//all listings function
//billing info function

?>