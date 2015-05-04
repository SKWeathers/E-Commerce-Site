<?php

include("../php/listing_class.php");
include("../php/check_login.php");

$listing_id = $_POST['listing_id'];

$listing = NEW Listing();
$listing->getTradeListingData($listing_id);

?>

<html>
<head><title>Add Preferred Trade to <?php echo $listing->title ?></title><link rel="stylesheet" type="text/css" href="css/content.css" /></head>
<body>

<div id="container">

	<?php
	
	include("../header_sidebar.php"); 
	 
	?>

<div id="content">

	<h1>Add Preferred Trade to "<?php echo $listing->title ?>"</h1><hr />
	
	<form  action="../php/add_pref_trade.php" method="post">
	Preferred Trade: <input type="text" name="preferred_trade" maxlength="1024"/>
	<input type="hidden" name="listing_id" value="<?php echo $listing_id; ?>" />
 	<input type="submit" value="Add Preferred Trade"/>
	</form>


</div>

	<?php include("../footer.html"); ?>

</div>

</body>
</html>