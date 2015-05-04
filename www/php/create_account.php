<?php

//for each row in table customers, check if $username matches any entry in username column
//if match is found, return username taken error
//if no match is found, continue to next check

//for each row in table customers, check if $email matches any entry in email column
//if match is found, return email already in use error
//if no match is found, continue to next check

//check that $password and $confirm_password are identical
//if not identical, return passwords don't match error
//if identical, create account

include("check_login.php");

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];

include("connect_to_database.php");

$result = mysql_query("SELECT * FROM customers");

while($row = mysql_fetch_array($result))
	{
	if ($username == $row['username'])
		{die('Error: Username already taken.');}
	elseif ($email == $row['email'])
		{die('Error: Email already in use.');}
   	}

if ($password != $confirm_password){
	die('Error: Password and Confirm Password do not match.');}

$sql="INSERT INTO customers (username, email, password, fname, lname, address, city, state, zip) VALUES ('$username','$email','$password','$first_name','$last_name','$address','$city','$state','$zip')";

if (!mysql_query($sql,$con)) { die('Error: ' . mysql_error()); }
else
	{
	$url_listing = "/silkroad/login.php?register=yes";
	mysql_close($con);
	header("location: $url_listing");
	}
	
?>