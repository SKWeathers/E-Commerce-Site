<?php

include("../php/check_login.php");
include("../php/listing_class.php");
include("../php/item_class.php");

$listing_id = $_GET['listing_id'];

$listing = NEW Listing();
$listing->getFixedListingData($listing_id);
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

	<form  action="php/change_fixed_listing.php" method="post">
 		<table>
		<tr><td>Title: </td><td><input type="text" name="title" maxlength="128" size="40" value="<?php echo $listing->title; ?>" /></td></tr>
		<tr><td>Description: </td><td><textarea name="description" rows="5" cols="50" maxlength="1024"><?php echo $listing->description; ?></textarea></td></tr>
		<tr><td>Price: </td><td><input type="text" name="price" maxlength="10" size="12" value="<?php echo $listing->price; ?>"/></td></tr>
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