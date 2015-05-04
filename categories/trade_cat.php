<html>
<head><title>Trade Listings</title><link rel="stylesheet" type="text/css" href="../css/content.css" /></head>
<body>

<div id="container">

	<?php 
	include("../php/check_login.php");
	include("../header_sidebar.php"); 
	include("../php/connect_to_database.php");
	?>

<div id="content">

	<h1>Trade Listings</h1><hr />
    
    <h2>Newest Listings</h2>

	<?php

	$result_trade = mysql_query("SELECT * FROM listings WHERE listing_type='trade' ORDER BY date_added DESC LIMIT 5");

	echo "<table><tr>";

	while($row_trade = mysql_fetch_array($result_trade))
		{
		$title = $row_trade['title'];
		$listing_id = $row_trade['listing_id'];
		$url_listing = "/silkroad/listings/trade_listing.php?listing_id=" . $listing_id;
		
		echo "<td style='float:left; width:120px; text-align:top;'>";
		echo "<img scr='' width='120px' height='120px' alt='listing image'>";
		echo "<a href=$url_listing><b>$title</b></a><br />";
		
		echo "</td><td>";
		}
	
	echo "</tr></table>";

	?>
    
    <h2>All Listings</h2>
    
    <?php
	
	$result_all = mysql_query("SELECT * FROM listings WHERE listing_type='trade' ORDER BY title");
	
	echo "<table style='width:100%'>";
	
	while($row_all = mysql_fetch_array($result_all))
		{
		$listing_id = $row_all['listing_id'];
		
		$title = $row_all['title'];
		$description = $row_all['description'];
		$date_added = $row_all['date_added'];
		$listing_type = $row_all['listing_type'];
		$url_listing = "/silkroad/listings/" . $listing_type . "_listing.php?listing_id=" . $listing_id;
		
		echo "<tr><td style='width:25%'><a href=$url_listing><b>$title</b></a></td>";
		echo "<td style='word-wrap:break-word'>" . $description . "</td></tr>";
		}
		
	echo "</table>";

	mysql_close($con);
	
	
	
	
	?>

</div>

	<?php include("../footer.html"); ?>

</div>

</body>
</html>