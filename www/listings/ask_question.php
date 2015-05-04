<?php

include("../php/check_login.php");
include("../php/connect_to_database.php");

$listing_id = $_GET['listing_id'];

$result_listing = mysql_query("SELECT * FROM listings WHERE listing_id='$listing_id'");
$row_listing = mysql_fetch_array($result_listing);

$title = $row_listing['title'];
$listing_type = $row_listing['listing_type'];

mysql_close($con);

?>

<html>
<head><title>Ask About <?php echo $title; ?></title><link rel="stylesheet" type="text/css" href="css/content.css" /></head>
<body>

<div id="container">

	<?php include("../header_sidebar.php"); ?>

<div id="content">

	<h1>Ask About "<?php echo $title; ?>"</h1><hr />
    
	<form  action="../php/submit_question.php" method="post">
 		<table>
		<tr><td>Question Title: </td><td><input type="text" name="question_title" maxlength="128" /></td></tr>
		<tr><td>Your Question: </td><td><input type="text" name="question_content" maxlength="1024" /></td></tr>
 		</table>
        <input type="hidden" name="listing_id" value="<?php echo $listing_id; ?>" />
        <input type="hidden" name="listing_type" value="<?php echo $listing_type; ?>" />
 	<input type="submit" value="Submit"/>
	</form>


</div>

	<?php include("../footer.html"); ?>

</div>

</body>
</html>