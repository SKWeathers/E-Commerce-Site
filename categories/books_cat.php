<html>
<head><title>Books Listings</title><link rel="stylesheet" type="text/css" href="../css/content.css" /></head>
<body>

<div id="container">

	<?php 
	include("../php/check_login.php");
	include("../header_sidebar.php"); 
	?>

<div id="content">

	<h1>Books Listings</h1><hr />
    
    <h2>Newest Listings</h2>

	<?php

	include("../php/connect_to_database.php");
	
	$result_book = mysql_query("SELECT listings.* FROM listings, listing_items, items WHERE listings.listing_id = listing_items.listing_id AND listing_items.item_id = items.item_id AND items.category = 'Books' ORDER BY date_added DESC LIMIT 5");

	echo "<table><tr>";

	while($row_book = mysql_fetch_array($result_book))
		{
		$title = $row_book['title'];
		$description = $row_book['description'];
		//$price = $row_book['price'];
		$date_added = $row_book['date_added'];
		$listing_id = $row_book['listing_id'];
		$listing_type = $row_book['listing_type'];
		
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