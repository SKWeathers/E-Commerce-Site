<html>
<head><title>Silkroad Homepage</title><link rel="stylesheet" type="text/css" href="css/content.css" /></head>
<body>

<div id="container">

	<?php
	
	include("php/check_login.php");
	include("header_sidebar.php"); 
	include("php/connect_to_database.php");
	 
	?>

<div id="content">

	<h1>Welcome to Silkroad</h1><hr />
    
    <h2>Newest Listings</h2>
    
    <?php
    
    $result = mysql_query("SELECT * FROM listings WHERE sold='0' ORDER BY date_added DESC LIMIT 5");
	
	echo "<table><tr>";

	while($row = mysql_fetch_array($result))
		{
		$listing_id = $row['listing_id'];
		
		$result_price = mysql_query("SELECT price FROM fixed_listings WHERE listing_id = '$listing_id'");
		$row_price = mysql_fetch_array($result_price);
		
		$title = $row['title'];
		$description = $row['description'];
		$price = $row_price['price'];
		$date_added = $row['date_added'];
		$listing_type = $row['listing_type'];
		$url_listing = "/silkroad/listings/" . $listing_type . "_listing.php?listing_id=" . $listing_id;
		
		echo "<td style='float:left; width:120px; text-align:top;'>";
		echo "<img scr='' width='120px' height='120px' alt='listing image'>";
		echo "<a href=$url_listing><b>$title</b></a><br />";
		if(isset($price)) {echo "$" . $price;}
		else {echo "Trade";}
			
		echo "</td><td>";
		}
		
		echo "</tr></table>";
    
    
    
    
    
    
    
    
    
    
    
    
    
    
	?>

</div>

	<?php include("footer.html"); ?>

</div>

</body>
</html>