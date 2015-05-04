<?php

include("../php/check_login.php");
include("../php/listing_class.php");
include("../php/item_class.php");
include("../php/customer_class.php");

$listing_id = $_POST['listing_id'];
$items = NEW Item();
$listing = NEW Listing();
$seller = NEW Customer();
$buyer = NEW Customer();

$listing->getFixedListingData($listing_id);
$buyer->getCustomerData($user_id);
$seller->getCustomerData($listing->customer_id);

?>

<html>
<head><title>Confirm Purchase of <?php echo $listing->title ?></title><link rel="stylesheet" type="text/css" href="../css/fixed_purchase_confirmation.css" /></head>
<body>

<div id="container">

	<?php include("../header_sidebar.php");	?>

<div id="content">

	<h1>Confirm Purchase of "<?php echo $listing->title ?>"</h1><hr />
	
<div id="listing_data">
	
<div id="description" style="float:left">
	<?php

	if ($listing->description==""){echo "No Description.<br /><br />";}
	else {echo $listing->description . "<br /><br />";}
	
	echo "<b>Price:</b> $" . $listing->price . "<br />";
	echo "<b>Date Listed:</b> " . $listing->date_added . "<br />";
	
	?>
	
</div>

<div id="items">

	<?php
	
	echo "<h3>Included Items</h3>";
	$items->getListingItems($listing_id);
	
	?>
	
</div>

</div>

<div id="buyer_shipping">

	<h2>Your Shipping Information</h2>
	
	<?php
	
	echo "Shipping to:<br />";
	echo $buyer->address . "<br />";
	echo $buyer->city . ", " . $buyer->state . " " . $buyer->zip . "<br /><br />";

	?>
	
	<div style="text-align:right"><a href="../edit_profile.php" align="right">Edit Shipping Information</a></div>
	
</div>

<div id="seller_shipping">

	<h2>Your Payment Information</h2>
	
	Payment information goes here<br /><br /><br /><br />
	
	<div style="text-align:right"><a href="../edit_payment_info.php">Edit Payment Information</a></div>
	
</div>

	<form action="/silkroad/php/make_purchase.php" align="right" method="post">
    <input type="hidden" name="listing_id" value="<?php echo $listing_id; ?>"/>
    <input type="hidden" name="seller" value="<?php echo $listing->customer_id; ?>"/>
	<input type="submit" value="Make Purchase"/>
	</form>
	
</div>

	<?php include("../footer.html"); ?>

</div>

</body>
</html>