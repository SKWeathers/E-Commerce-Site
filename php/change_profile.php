<?php

include("check_login.php");
include("connect_to_database.php");

$email = $_POST['email'];
$password = $_POST['password'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];

//for each row in table customers, check if $email matches any entry in email column
//if match is found, return email already in use error
//if no match is found, continue to next check

$sql = "UPDATE customers SET email='$email', password='$password', fname='$first_name', lname='$last_name', address='$address', city='$city', state='$state', zip='$zip' WHERE customer_id='$user_id'";

if (!mysql_query($sql,$con)) { die('Error: ' . mysql_error()); }
else
	{
	mysql_close($con);
	header ('Location: ../profile.php');
	}

?>