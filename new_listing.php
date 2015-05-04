<?php include("php/check_login.php"); ?>

<html>

<head>
<title>New Listing</title>
<link rel="stylesheet" type="text/css" href="css/content.css" />
</head>

<body>

<div id="container">

	<?php include("header_sidebar.php"); ?>

<div id="content">

	<h1>Add New Listing</h1><hr />

	<?php	

	include("php/connect_to_database.php");

	$customer_id = $user_id;

	$result = mysql_query("SELECT * FROM items WHERE customer_id='$customer_id' AND sold='0'");
	

	?>

	<form  action="php/add_fixed_listing.php" method="post">
 		<table>
		<tr><td>Title: </td><td><input type="text" name="title" maxlength="128" size="40"/></td></tr>
		<tr><td>Description: </td><td><textarea name="description" rows="5" cols="50" maxlength="1024"></textarea></td></tr>
		<tr><td>Price: </td><td>$<input type="text" name="price" maxlength="10" size="12" /></td></tr>
		<tr><td>Items: </td><td><select name="selected_items[]" size="5" multiple="multiple">
			<?php
			while($row = mysql_fetch_array($result))
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
 	<input type="submit" value="Submit Fixed Price Listing"/>
	</form>
	
	<hr />
	
	<?php $result_trade = mysql_query("SELECT * FROM items WHERE customer_id='$customer_id' AND sold='0'"); ?>

	<form  action="php/add_trade_listing.php" method="post">
 		<table>
		<tr><td>Title: </td><td><input type="text" name="title" maxlength="128" size="40"/></td></tr>
		<tr><td>Description: </td><td><textarea name="description" rows="5" cols="50" maxlength="1024"></textarea></td></tr>
		<tr><td>Items: </td><td><select name="selected_items[]" size="5" multiple="multiple">
			<?php
			while($row = mysql_fetch_array($result_trade))
				{
				$item_id = $row['item_id'];
				$title = $row['title'];
				echo "<option value=$item_id >";
				echo $title;
				echo "</option>";
				}
			?>
		</select></td></tr>
		<tr><td>Preferred Trade: </td><td><textarea name="preferred_trade" rows="5" cols="50" maxlength="1024"></textarea></td></tr>
 		</table>
 	<input type="submit" value="Submit Trade Listing"/>
	</form>
	
	<?php mysql_close($con); ?>

</div>

	<?php include("footer.html"); ?>

</div>

</body>
</html>