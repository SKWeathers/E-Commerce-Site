<?php 

include("php/check_login.php"); 
include("php/connect_to_database.php");
include("php/item_class.php");

?>

<html>
<head><title>Your Inventory</title><link rel="stylesheet" type="text/css" href="css/content.css" /></head>
<body>

<div id="container">

<?php include("header_sidebar.php"); ?>

<div id="content">

<h1>Your Inventory</h1><hr />

	<?php

	$customer_id = $user_id;

	$result_items = mysql_query("SELECT * FROM items WHERE customer_id='$customer_id' AND sold='0'");
	mysql_close($con);

	echo "<table style='width:100%'><tr><td style='width:25%'><h3>Title</h3></td><td><h3>Description</h3></td></tr>";

	while($row_items = mysql_fetch_array($result_items))
		{
		$item_id = $row_items['item_id'];
		$title = $row_items['title'];
		$description = $row_items['description'];
		$item_condition = $row_items['item_condition'];
		$price = $row_items['price'];
		$date_added = $row_items['date_added'];
		$url = "/silkroad/item_details.php?item_id=" . $item_id;

		echo "<tr><td><a href=$url>";
		echo $title;
		echo "</a></td><td>";
		echo $description;
		echo "</td></tr>";
		}

	echo "</table>";

	?>

</div>

<?php include("footer.html"); ?>

</div>

</body>
</html>