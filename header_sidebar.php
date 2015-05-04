<html>
<head><link rel="stylesheet" type="text/css" href="../css/content.css" /></head>
<body>

<div id="banner_div">

	<form action="/silkroad/search.php" method="GET">
	<input type="text"name="search_query" />
	<input type="submit" value="Search"/>
	</form>	

	<a href="/silkroad/home.php"><img id="banner_img" src="/silkroad/images/silkroad_banner.png" alt="Silkroad Banner"/></a>

</div>

<div id="header_div">

	<?php

	if ($user_id != ""){
		echo "<p><a class='h_link' href='/silkroad/activity.php'>Activity</a> | <a class='h_link' href='/silkroad/your_profile.php'>Profile</a> | <a class='h_link' href='/silkroad/inventory.php'>Inventory</a> | <a class='h_link' href='/silkroad/wishlist.php'>Wishlist</a> | <a class='h_link' href='/silkroad/new_item.php'>New Item</a> | <a class='h_link' href='/silkroad/new_listing.php'>New Listing</a> | <a class='h_link' href='/silkroad/php/logout.php'>Logout</a></p>";}
	else{
		echo "<p><a class='h_link' href='/silkroad/login.php'>Login</a> | <a class='h_link' href='/silkroad/signup.php'>New Account</a></p>";}
	
	?>

</div>

<div id="sidebar_div">

	<table>
		<tr><td><a class="h_link" href="/silkroad/categories/fixed_price_cat.php">Fixed Price Listings</a></td></tr>
		<tr><td><a class="h_link" href="/silkroad/categories/trade_cat.php">Trade Listings</a></td></tr>
		<tr><td><hr /></td></tr>
		<tr><td><a class="h_link" href="/silkroad/categories/art_cat.php">Art</a></td></tr>
		<tr><td><a class="h_link" href="/silkroad/categories/books_cat.php">Books</a></td></tr>
		<tr><td><a class="h_link" href="/silkroad/categories/electronics_cat.php">Electronics</a></td></tr>
		<tr><td><a class="h_link" href="/silkroad/categories/entertainment_cat.php">Entertainment</a></td></tr>
		<tr><td><a class="h_link" href="/silkroad/categories/instruments_cat.php">Instruments</a></td></tr>
        <tr><td><a class="h_link" href="/silkroad/categories/jewelry_cat.php">Jewelry</a></td></tr>
	</table>

</div>

</body>
</html>