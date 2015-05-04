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

?>

<html>
<head><title>Edit <?php echo $title; ?> Details</title><link rel="stylesheet" type="text/css" href="css/content.css" /></head>
<body>

<div id="container">

	<?php include("header_sidebar.php"); ?>

<div id="content">

	<h1>Edit "<?php echo $title; ?>" Details</h1><hr />

	<form  action="php/change_item_details.php" method="post">
 		<table>
		<tr><td>Title: </td><td><input type="text" name="title" maxlength="128" size="40" value="<?php echo $title ?>" /></td></tr>
		<tr><td>Description: </td><td><textarea name="description" rows="5" cols="50" maxlength="1024"><?php echo $description; ?></textarea></td></tr>
 		<tr><td>Condition: </td><td><input type="text" name="item_condition" maxlength="12" size="12" value="<?php echo $item_condition; ?>" /></td></tr>
 		<tr><td>Price: </td><td><input type="text" name="price" maxlength="10" size="12" value="<?php echo $price; ?>" /><br /></td></tr>
		<tr><td>Category: </td><td><select name="category">
			<option value="Art">Art</option>
			<option value="Books">Books</option>
			<option value="Electronics">Electronics</option>
			<option value="Entertainment">Entertainment</option>
			<option value="Jewelry">Jewelry</option>
			<option value="Instruments">Instruments</option>
		</select></tr></td>
 		</table>
        <input type="hidden" name="item_id" value="<?php echo $item_id; ?>" />
 	<input type="submit" value="Change"/>
	</form>

</div>

	<?php include("footer.html"); ?>

</div>

</body>
</html>