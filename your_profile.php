<html>
<head><title>Your Profile</title><link rel="stylesheet" type="text/css" href="css/profile.css" /></head>
<body>

<div id="container">

	<?php
	
	include("php/check_login.php");
	include("header_sidebar.php"); 
	
	$customer_id = $user_id;
	
	?>

<div id="content">

	<h1>Your Profile</h1><hr />

<div id="info">
<div id="profile_info">

	<?php 
	
	include("php/customer_class.php");
	$customer = NEW Customer();
	$customer->getCustomerData($user_id);
	
	echo "<h3>" . $customer->username . "</h3>";
	echo $customer->first_name . " " . $customer->last_name . "<br />";
	echo $customer->email . "<br />";
	echo $customer->address . "<br />";
	echo $customer->city . ", " . $customer->state . " " . $customer->zip;
	
	?>

	<form action="edit_profile.php" align="right">
	<input type="submit" value="Edit Profile" />
	</form>

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