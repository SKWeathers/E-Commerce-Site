<?php 

include("../php/check_login.php"); 
include("../php/listing_class.php");
include("../php/item_class.php");
include("../php/customer_class.php");
include("../php/question_class.php");

$listing_id = $_GET['listing_id'];

$listing = NEW Listing();
$listing->getTradeListingData($listing_id);

$items = NEW Item();

$seller = NEW Customer();
$seller->getCustomerData($listing->customer_id);

$questions = NEW Question();
	
?>

<html>
<head><title><?php echo $listing->title; ?></title><link rel="stylesheet" type="text/css" href="/silkroad/css/fixed_listing.css" /></head>
<body>

<div id="container">

	<?php include("../header_sidebar.php"); ?>

<div id="content">

<div id="listing_info">

	<?php

	echo "<h1>" . $listing->title . "</h1><hr />";

	if (isset($_GET['success'])){echo "<p id='notice'>Added to Wishlist</p><br />";}
	if ($listing->description==""){echo "No Description.<br /><br />";}
	else {echo $listing->description . "<br /><br />";}
	
	echo "<b>Date Listed:</b> " . $listing->date_added . "<br />";
	echo "<h3>Included Items</h3>";
	
	$items->getListingItems($listing_id);

	?>
    
</div>

<div id="seller_info">

	<h3>Trader Info</h3><hr />

	<?php 
	
	if ($listing->customer_id == $user_id){$url_seller_profile = "../your_profile.php";}
	else {$url_seller_profile = "../profile.php?customer_id=" . $listing->customer_id;}
	
	echo "<a href='$url_seller_profile'><b>" . $seller->username . "</b></a><br />";
	echo $seller->city . ", " . $seller->state . " " . $seller->zip . "<br /><br />";

	if($listing->customer_id != $user_id){
		
	?>
    
    <form action="" align="right" method="post">
    <input type="hidden" name="listing_id" value="<?php echo $listing_id; ?>"/>
	<input type="submit" value="Request Trade" />
	</form>
    
    <form action="/silkroad/php/add_to_wishlist.php" align="right" method="post">
    <input type="hidden" name="listing_id" value="<?php echo $listing_id; ?>"/>
	<input type="hidden" name="listing_type" value="<?php echo $listing->listing_type; ?>"/>
	<input type="submit" value="Add to Wishlist" />
	</form>
    
    <form action="/silkroad/listings/ask_question.php" align="right" method="get">
    <input type="hidden" name="listing_id" value="<?php echo $listing_id; ?>"/>
	<input type="submit" value="Ask a Question" />
	</form>
    
    <?php } else{ ?>
    
    <form action="/silkroad/listings/edit_trade_listing.php" align="right" method="get">
    <input type="hidden" name="listing_id" value="<?php echo $listing_id; ?>"/>
	<input type="submit" value="Edit Listing" />
	</form>
    
    <form action="/silkroad/php/remove_listing.php" align="right" method="post">
    <input type="hidden" name="listing_id" value="<?php echo $listing_id; ?>"/>
	<input type="submit" value="Remove Listing" />
	</form>
    
    <?php } ?>

</div>
	
<div id="preferred_trades">

	<hr width="745px" />
    
    <h2>Preferred Trades</h2>
	
	<?php
	
	include("../php/connect_to_database.php");

	$result_pref_trades = mysql_query("SELECT  description FROM preferred_trades WHERE listing_id = '$listing_id'");
	
	while($row_pref_trades = mysql_fetch_array($result_pref_trades))
		{
		$pref_trade_description = $row_pref_trades['description'];
		echo $pref_trade_description . "<br />";
		}
	
	mysql_close($con);
	
	?>
	
    <form action="/silkroad/listings/new_pref_trade.php" align="right" method="post">
    <input type="hidden" name="listing_id" value="<?php echo $listing_id; ?>"/>
	<input type="submit" value="Add Preferred Trade" />
	</form>

</div>
    
<div id="questions">
	
    <hr width="745px" />
    
    <h2>Questions</h2>
	
	<?php

	$questions->getQuestions($listing_id);
	
	?>
    
    <form action="/silkroad/listings/questions.php" align="right" method="get">
    <input type="hidden" name="listing_id" value="<?php echo $listing_id; ?>"/>
	<input type="submit" value="View All Questions/Answers" />
	</form>
	
</div>

</div>

	<?php include("../footer.html"); ?>

</div>

</body>
</html>