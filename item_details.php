<?php

include("php/check_login.php");
include("php/connect_to_database.php");
	
$item_id = $_GET['item_id'];

$result_item = mysql_query("SELECT * FROM items WHERE item_id='$item_id'");
mysql_close($con);

$row_item = mysql_fetch_array($result_item);

$title = $row_item['title'];
$description = $row_item['description'];
$item_condition = $row_item['item_condition'];
$category = $row_item['category'];
$price = $row_item['price'];
$date_added = $row_item['date_added'];
$customer_id = $row_item['customer_id'];

?>

<html>
<head><title><?php echo $title ?> Details</title><link rel="stylesheet" type="text/css" href="css/content.css" /></head>
<body>

<div id="container">

	<?php include("header_sidebar.php"); ?>

<div id="content">

	<h1>"<?php echo $title ?>" Details</h1><hr />

	<?php
	
	if ($description==""){echo "No Description.<br /><br />";}
	else {echo $description . "<br /><br />";}
	
	echo "<B>Category:</B> " . $category . "<br />";
	echo "<B>Condition:</B> " . $item_condition . "<br />";
	echo "<B>Price:</B> $" . $price . "<br /><br />";
	
	if ($customer_id == $user_id){
	?>

	<form action="/silkroad/php/remove_item.php" align="right" style="display:inline" method="POST">
    <input type="hidden" name="item_id" value="<?php echo $item_id; ?>"/>
	<input type="submit" value="Remove Item" />
	</form>
	
	<form action="/silkroad/edit_item_details.php" align="right" style="display:inline" method="GET">
    <input type="hidden" name="item_id" value="<?php echo $item_id; ?>"/>
	<input type="submit" value="Edit Item Details" />
	</form>
    
    <?php } ?>

</div>

	<?php include("footer.html"); ?>

</div>

</body>
</html>