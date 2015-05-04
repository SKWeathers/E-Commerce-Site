<?php

include("../php/check_login.php");
include("../php/connect_to_database.php");

$question_id = $_GET['question_id'];

$result_question = mysql_query("SELECT * FROM questions WHERE question_id='$question_id'");
$row_question = mysql_fetch_array($result_question);

$customer_id = $row_question['customer_id'];
$question_title = $row_question['question_title'];
$question_content = $row_question['question_content'];
$date_submitted = $row_question['date_submitted'];
$listing_id = $row_question['listing_id'];

$result_customer = mysql_query("SELECT username FROM customers WHERE customer_id='$customer_id'");
$row_customer = mysql_fetch_array($result_customer);

$asker_username = $row_customer['username'];

mysql_close($con);

?>

<html>
<head><title><?php echo $question_title; ?></title><link rel="stylesheet" type="text/css" href="css/content.css" /></head>
<body>

<div id="container">

	<?php include("../header_sidebar.php"); ?>

<div id="content">

	<h1>"<?php echo $question_title; ?>"</h1><hr />
    
    <?php
	
	echo "<p>From: <b>" . $asker_username . "</b></p>";
	echo "<p>" . $question_content . "</p>";
	
	?>
    
	<form  action="../php/submit_answer.php" method="post">
 		<table>
		<tr><td><b>Your Answer: </b></td><td><input type="text" name="answer_content" maxlength="1024" /></td></tr>
 		</table>
        <input type="hidden" name="question_id" value="<?php echo $question_id; ?>" />
 	<input type="submit" value="Answer"/>
	</form>


</div>

	<?php include("../footer.html"); ?>

</div>

</body>
</html>