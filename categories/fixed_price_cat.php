<html>
<head><title>Fixed Price Listings</title><link rel="stylesheet" type="text/css" href="../css/content.css" /></head>
<body>

<div id="container">

	<?php 
	include("../php/check_login.php");
	include("../header_sidebar.php"); 
	include("../php/connect_to_database.php");
	?>

<div id="content">

	<h1>Fixed Price Listings</h1><hr />
    
    <h2>Newest Listings</h2>

	<?php

	$result_fixed = mysql_query("SELECT * FROM listings WHERE listing_type='fixed' AND sold='0' ORDER BY date_added DESC LIMIT 5");
	
	echo "<table><tr>";

	while($row_fixed = mysql_fetch_array($result_fixed))
		{
		$listing_id = $row_fixed['listing_id'];
		
		$result_price = mysql_query("SELECT price FROM fixed_listings WHERE listing_id = '$listing_id'");
		$row_price = mysql_fetch_array($result_price);
		
		$title = $row_fixed['title'];
		$description = $row_fixed['description'];
		$price = $row_price['price'];
		$date_added = $row_fixed['date_added'];
		$url_listing = "/silkroad/listings/fixed_listing.php?listing_id=" . $listing_id;
		
		echo "<td style='float:left; width:120px; text-align:top;'>";
		echo "<img scr='' width='120px' height='120px' alt='listing image'>";
		echo "<a href=$url_listing><b>$title</b></a><br />";
		echo "$" . $price;
			
		echo "</td><td>";
		}
		
		echo "</tr></table>";

	?>
    
    <h2>All Listings</h2>
    
    <?php

	$result_all = mysql_query("SELECT * FROM listings WHERE listing_type='fixed' AND sold='0' ORDER BY title");
	
	echo "<table style='width:100%'>";
	
	while($row_all = mysql_fetch_array($result_all))
		{
		$listing_id = $row_all['listing_id'];
		
		$result_price = mysql_query("SELECT price FROM fixed_listings WHERE listing_id = '$listing_id'");
		$row_price = mysql_fetch_array($result_price);
		
		$title = $row_all['title'];
		$description = $row_all['description'];
		$price = $row_price['price'];
		$date_added = $row_all['date_added'];
		$listing_type = $row_all['listing_type'];
		$url_listing = "/silkroad/listings/" . $listing_type . "_listing.php?listing_id=" . $listing_id;
		
		echo "<tr><td style='width:25%'><a href=$url_listing><b>$title</b></a></td>";
		echo "<td style='word-wrap:break-word'>" . $description . "</td>";
		echo "<td style='width:25%'>$" . $price . "</td></tr>";
		}
		
	echo "</table>";

	mysql_close($con);

	?>

</div>

	<?php include("../footer.html"); ?>

</div>

</body>
</html>