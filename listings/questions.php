<?php

include("../php/check_login.php");
include("../php/connect_to_database.php");

$listing_id = $_GET['listing_id'];
$result_listing = mysql_query("SELECT title, listing_type FROM listings WHERE listing_id='$listing_id'");

$row_listing = mysql_fetch_array($result_listing);

$listing_title = $row_listing['title'];
$listing_type = $row_listing['listing_type'];

?>

<html>
<head><title>Questions About <?php echo $listing_title; ?></title><link rel="stylesheet" type="text/css" href="css/content.css" /></head>
<body>

<div id="container">

	<?php include("../header_sidebar.php"); ?>

<div id="content">

	<h1>Questions About <?php echo $listing_title; ?></h1><hr />

	<?php

	$result_questions = mysql_query("SELECT * FROM questions WHERE listing_id='$listing_id'");
	
	if (!mysql_fetch_array($result_questions)){echo "No Questions Yet!";}
	else
		{while($row_questions = mysql_fetch_array($result_questions))
			{
			$question_id = $row_questions['question_id'];
			$question_title = $row_questions['question_title'];
			$question_content = $row_questions['question_content'];
			$customer_id = $row_questions['customer_id'];
		
			$result_user = mysql_query("SELECT username FROM customers WHERE customer_id='$customer_id'");
			$row_user = mysql_fetch_array($result_user);
			
			$result_answer = mysql_query("SELECT answer_content FROM answers WHERE question_id='$question_id'");
			$row_answer = mysql_fetch_array($result_answer);
		
			$asker_username = $row_user['username'];
			$answer = $row_answer['answer_content'];
		
			echo "<b>" . $asker_username . ":</b> <i>" . $question_title . "</i> " . $question_content . "<br />";
			if ($answer != "") {echo "<b>Answer:</b> " . $answer . "<br />";}
			
			echo "<form action='/silkroad/listings/answer_question.php' align='right' method='get'>";
    		echo "<input type='hidden' name='question_id' value=" . $question_id . "/>";
			echo "<input type='hidden' name='listing_id' value=" . $listing_id . "/>";
			echo "<input type='hidden' name='listing_type' value=" . $listing_type . "/>";
			echo "<input style='float:right' type='submit' value='Answer this Question' />";
			echo "</form>";
			
			echo "<hr style='align:left; width:100px;' />";
			}
		}

	mysql_close($con);
	
	?>

</div>

	<?php include("../footer.html"); ?>

</div>

</body>
</html>