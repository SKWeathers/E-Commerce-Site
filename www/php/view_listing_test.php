<?php

	include("check_login.php");
	include("connect_to_database.php");

	$result_recent_listings = mysql_query("SELECT * FROM listings WHERE customer_id='$customer_id' ORDER BY date_added LIMIT 5");

	echo "<table><tr><td>Title</td><td>Description</td><td>Items</td></tr>";

	while($row_recent_listings = mysql_fetch_array($result_recent_listings))
		{
		$title = $row_recent_listings['title'];
		$description = $row_recent_listings['description'];
		$listing_id = $row_recent_listings['listing_id'];
		$listing_type = $row_recent_listings['listing_type'];
		$url = "/silkroad/listings/" . $listing_type . "_listing.php?listing_id=" . $listing_id . "&title=" . $title;
		$result_listing_items = mysql_query("SELECT item_id FROM listing_items WHERE listing_id='$listing_id'");
		
		echo "<tr><td><a href=$url>$title</a></td><td>";
		echo $description . "</td><td>";

		while($row_listing_items = mysql_fetch_array($result_listing_items))
			{
			$item_id = $row_listing_items['item_id'];
			$result_items = mysql_query("SELECT title FROM items WHERE item_id='$item_id'");
			$row_items = mysql_fetch_array($result_items);
			$item_title = $row_items['title'];
			echo $item_title . ", ";
			}
		
		echo "</td></tr>";

		}

	echo "</table>";

	mysql_close($con);

	?>