<html>
<head><title>Edit Profile</title><link rel="stylesheet" type="text/css" href="css/content.css" /></head>
<body>

<div id="container">

	<?php
	
	include("php/check_login.php");
	include("header_sidebar.php"); 
	include("php/customer_class.php");
	
	$customer = NEW Customer();
	$customer->getCustomerData($user_id);
	//include("php/grab_user_data.php");

	//$row = grab_profile_data($user_id);
	
	?>

<div id="content">

	<h1>Edit Profile</h1><hr />

	<form  action="php/change_profile.php" method="post">
 		<table>
		<tr><td>First Name: </td><td><input type="text" name="first_name" maxlength="24" size="24" value="<?php echo $customer->first_name; ?>" /></td></tr>
		<tr><td>Last Name: </td><td><input type="text" name="last_name" maxlength="24" size="24" value="<?php echo $customer->last_name; ?>" /></td></tr>
 		<tr><td>Email: </td><td><input type="text" name="email" maxlength="48" size="24" value="<?php echo $customer->email; ?>" /></td></tr>
 		<tr><td>Password: </td><td><input type="password" name="password" maxlength="48" size="24" value="<?php echo $customer->password; ?>" /><br /></td></tr>
		<tr><td>Address: </td><td><input type="text" name="address" maxlength="128" size="24" value="<?php echo $customer->address; ?>" /></td></tr>
		<tr><td>City: </td><td><input type="text" name="city" maxlength="48" size="24" value="<?php echo $customer->city; ?>" /></td></tr>
		<tr><td>State: </td><td><select name="state">
			<option value="AL">Alabama</option>
			<option value="AK">Alaska</option>
			<option value="AZ">Arizona</option>
			<option value="AR">Arkansas</option>
			<option value="CA">California</option>
			<option value="CO">Colorado</option>
			<option value="CT">Connecticut</option>
			<option value="DE">Delaware</option>
			<option value="DC">District of Columbia</option>
			<option value="FL">Florida</option>
			<option value="GA">Georgia</option>
			<option value="HI">Hawaii</option>
			<option value="ID">Idaho</option>
			<option value="IL">Illinois</option>
			<option value="IN">Indiana</option>
			<option value="IA">Iowa</option>
			<option value="KS">Kansas</option>
			<option value="KY">Kentucky</option>
			<option value="LA">Louisiana</option>
			<option value="ME">Maine</option>
			<option value="MD">Maryland</option>
			<option value="MA">Massachusetts</option>
			<option value="MI">Michigan</option>
			<option value="MN">Minnesota</option>
			<option value="MS">Mississippi</option>
			<option value="MO">Missouri</option>
			<option value="MT">Montana</option>
			<option value="NE">Nebraska</option>
			<option value="NV">Nevada</option>
			<option value="NH">New Hampshire</option>
			<option value="NJ">New Jersey</option>
			<option value="NM">New Mexico</option>
			<option value="NY">New York</option>
			<option value="NC">North Carolina</option>
			<option value="ND">North Dakota</option>
			<option value="OH">Ohio</option>
			<option value="OK">Oklahoma</option>
			<option value="OR">Oregon</option>
			<option value="PA">Pennsylvania</option>
			<option value="RI">Rhode Island</option>
			<option value="SC">South Carolina</option>
			<option value="SD">South Dakota</option>
			<option value="TN">Tennessee</option>
			<option value="TX">Texas</option>
			<option value="UT">Utah</option>
			<option value="VT">Vermont</option>
			<option value="VA">Virginia</option>
			<option value="WA">Washington</option>
			<option value="WV">West Virginia</option>
			<option value="WI">Wisconsin</option>
			<option value="WY">Wyoming</option>
		</select></tr></td>
		<tr><td>Zip: </td><td><input type="text" name="zip" maxlength="5" size="5" value="<?php echo $customer->zip; ?>" /></td></tr>
 		</table>
 	<input type="submit" value="Change"/>
	</form>

</div>

	<?php include("footer.html"); ?>

</div>

</body>
</html>