<?php

include("../php/check_login.php");
include("../php/listing_class.php");
include("../php/item_class.php");

$listing_id = $_GET['listing_id'];

$listing = NEW Listing();
$listing->getTradeListingData($listing_id);
$item = NEW Item();
$item->getUserItemData($user_id);

include("../php/connect_to_database.php");
$result_items = mysql_query("SELECT * FROM items WHERE customer_id='$user_id'");
mysql_close($con);

?>

<html>
<head><title>Edit <?php echo $listing->title; ?></title><link rel="stylesheet" type="text/css" href="css/content.css" /></head>
<body>

<div id="container">

	<?php include("../header_sidebar.php"); ?>

<div id="content">

	<h1>Edit "<?php echo $listing->title; ?>"</h1><hr />

	<form  action="/silkroad/php/change_trade_listing.php" method="post">
 		<table>
		<tr><td>Title: </td><td><input type="text" name="title" maxlength="128" value="<?php echo $listing->title; ?>" /></td></tr>
		<tr><td>Description: </td><td><input type="text" name="description" maxlength="1024" value="<?php echo $listing->description; ?>"/></td></tr>
		<tr><td>Items: </td><td><select name="selected_items[]" size="5" multiple="multiple">
			<?php
			
			while($row = mysql_fetch_array($result_items))
				{
				$item_id = $row['item_id'];
				$title = $row['title'];
				echo "<option value=$item_id >";
				echo $title;
				echo "</option>";
				}
			
			?>
		</select></td></tr>
 		</table>
    <input type="hidden" name="listing_id" value="<?php echo $listing_id; ?>" />
 	<input type="submit" value="Submit Fixed Price Listing"/>
	</form>

</div>

	<?php include("../footer.html"); ?>

</div>

</body>
</html>