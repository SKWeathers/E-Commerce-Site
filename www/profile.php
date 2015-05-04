<?php

include("php/check_login.php");
include("php/customer_class.php");

$customer_id = $_GET['customer_id'];

$customer = NEW Customer();
$customer->getCustomerData($customer_id);

?>

<html>
<head><title><?php echo $customer->username; ?>'s Profile</title><link rel="stylesheet" type="text/css" href="css/profile.css" /></head>
<body>

<div id="container">

	<?php
	

	include("header_sidebar.php"); 
	
	?>

<div id="content">

	<h1><?php echo $customer->username; ?>'s Profile</h1><hr />

<div id="info">
<div id="profile_info">

	<?php 
	
	
	
	
	echo "<h3>" . $customer->username . "</h3>";
	echo $customer->first_name . " " . $customer->last_name . "<br />";
	echo $customer->city . ", " . $customer->state . " " . $customer->zip;
	
	?>

</div>

<div id="seller_info">

	<h3>Seller Data</h3>
	
	<p>
	Seller Rating<br />
	Maybe number of sales<br />
	Etc.
	</p>

</div>

</div>


<div id="listings">

	<hr /><h3>Most Recent Listings</h3>

	<?php include("php/view_listing_test.php"); ?>

	<hr />

</div>

</div>

	<?php include("footer.html"); ?>

</div>

</body>
</html>