<?php

class Customer
{

var $customer_id;
var $username;
var $email;
var $fname;
var $lname;
var $address;
var $city;
var $state;
var $zip;

function login($username, $password)
{
	$con = mysql_connect("localhost","root");
	if (!$con) {die('Could not connect: ' . mysql_error());}
	mysql_select_db("silkroad_db1", $con);

	$result = mysql_query("SELECT * FROM customers WHERE username='$username' and password='$password'");
	$count = mysql_num_rows($result);
	$row = mysql_fetch_array($result);

	$user_id = $row['customer_id'];

	if($count == 1){
		setcookie("login", $user_id, time()+60*60*24*30, "/");
		header ('Location: ../home.php');}
	else{
		header ('Location: ../login.php?error=1');}

	mysql_close($con);
}

function getCustomerData($customer_id)
{
	$con = mysql_connect("localhost","root");
	if (!$con) {die('Could not connect: ' . mysql_error());}
	mysql_select_db("silkroad_db1", $con);

	$result = mysql_query("SELECT * FROM customers WHERE customer_id='$customer_id'");
	$row = mysql_fetch_array($result);
	
	$this->username = $row['username'];
	$this->email = $row['email'];
	$this->first_name = $row['fname'];
	$this->last_name = $row['lname'];
	$this->address = $row['address'];
	$this->city = $row['city'];
	$this->state = $row['state'];
	$this->zip = $row['zip'];
	
	//TEMPORARY
	$this->password = $row['password'];

	mysql_close($con);
}

function getCustomerItemData($customer_id){}

function changeCustomerProfileData(){}

}

?>