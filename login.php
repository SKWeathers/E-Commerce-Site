<?php include("php/check_login.php"); ?>

<html>

<head>
<title>Silkroad Login</title>
<link rel="stylesheet" type="text/css" href="css/content.css" />
</head>

<body>

<div id="container">

<?php include("header_sidebar.php"); ?>

<div id="content">

<h1>Log In to Silkroad</h1> <hr />

	<?php 
	
	if (isset($_GET['error'])){echo "<p id='error_text'>Incorrect Login Data</p>";}
	if (isset($_GET['register'])){echo "<p style='background-color:yellow'>Successfully Registered! Please Log In. (<a href='login.php'>X</a>)</p>";}
	
	?>

	<form  action="php/attempt_login.php" method="post">
 		<table>
 		<tr><td>Username: </td><td><input type="text" name="username" maxlength="24" size="24" /></td></tr>
 		<tr><td>Password: </td><td><input type="password" name="password" maxlength="48" size="24" /><br /></td></tr>
 		</table>
 	<input type="submit" value="Log In"/>
	</form>

</div>

<?php include("footer.html"); ?>

</div>

</body>
</html>