<?php include("php/check_login.php"); ?>

<html>

<head>
<title>New Item</title>
<link rel="stylesheet" type="text/css" href="css/content.css" />
</head>

<body>

<div id="container">

	<?php include("header_sidebar.php"); ?>

<div id="content">

	<h1>Add New Item to Inventory</h1><hr />


	<form  action="php/add_item.php" method="post">
 		<table>
		<tr><td>Title: </td><td><input type="text" name="title" maxlength="128" size="40" /></td></tr>
		<tr><td>Description: </td><td><textarea name="description" rows="5" cols="50" maxlength="1024"></textarea></td></tr>
 		<tr><td>Condition: </td><td><input type="text" name="condition" maxlength="12" size="12" /></td></tr>
		<tr><td>Price: </td><td><input type="text" name="price" maxlength="10" size="12" /></td></tr>
 		<tr><td>Category: </td><td><select name="category" />
			<option value="Art">Art</option>
			<option value="Books">Books</option>
			<option value="Electronics">Electronics</option>
			<option value="Entertainment">Entertainment</option>
            <option value="Instruments">Instruments</option>
			<option value="Jewelry">Jewelry</option>
		</select></td></tr>
 		</table>
 	<input type="submit" value="Add Item"/>
	</form>






</div>

	<?php include("footer.html"); ?>

</div>

</body>
</html>