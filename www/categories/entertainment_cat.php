<html>
<head><title>Entertainment Listings</title><link rel="stylesheet" type="text/css" href="../css/content.css" /></head>
<body>

<div id="container">

	<?php 
	include("../php/check_login.php");
	include("../header_sidebar.php"); 
	?>

<div id="content">

	<h1>Entertainment Listings</h1><hr />
    
    <h2>Newest Listings</h2>

	<?php

	include("../php/connect_to_database.php");
	
	$result_ent = mysql_query("SELECT listings.* FROM listings, listing_items, items WHERE listings.listing_id = listing_items.listing_id AND listing_items.item_id = items.item_id AND items.category = 'Entertainment' ORDER BY date_added DESC LIMIT 5");

	echo "<table><tr>";
	
	while($row_ent = mysql_fetch_array($result_ent))
		{
		$title = $row_ent['title'];
		$description = $row_ent['description'];
		//$price = $row_ent['price'];
		$date_added = $row_ent['date_added'];
		$listing_id = $row_ent['listing_id'];
		$listing_type = $row_ent['listing_type'];
		
		$url_listing = "/silkroad/listings/" . $listing_type . "_listing.php?listing_id=" . $listing_id;
		$result_listing_items = mysql_query("SELECT item_id FROM listing_items WHERE listing_id='$listing_id'");
		
		echo "<td style='float:left; width:120px; text-align:top;'>";
		echo "<img scr='' width='120px' height='120px' alt='listing image'>";
		echo "<a href=$url_listing><b>$title</b></a><br />";
		//echo "$" . $price;
			
		echo "</td><td>";
		}
		
	echo "</tr></table>";
	mysql_close($con);

	?>

</div>

	<?php include("../footer.html"); ?>

</div>

</body>
</html>