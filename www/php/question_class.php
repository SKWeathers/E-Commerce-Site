<?php

class Question
{

var $question_id;
var $question_title;
var $question_content;
var $listing_id;
var $customer_id;
var $date_submitted;
var $answer;

function addQuestion(){}

function getQuestions($listing_id)
{
	$con = mysql_connect("localhost","root");
	if (!$con) {die('Could not connect: ' . mysql_error());}
	mysql_select_db("silkroad_db1", $con);
	
	$result_questions = mysql_query("SELECT * FROM questions WHERE listing_id='$listing_id'");	
	
	if (!mysql_fetch_array($result_questions)){echo "No Questions Yet!";}
	else
		{while($row_questions = mysql_fetch_array($result_questions))
			{
			$this->question_id = $row_questions['question_id'];
			$this->question_title = $row_questions['question_title'];
			$this->question_content = $row_questions['question_content'];
			$this->customer_id = $row_questions['customer_id'];
		
			$result_user = mysql_query("SELECT username FROM customers WHERE customer_id='$this->customer_id'");
			$row_user = mysql_fetch_array($result_user);
			
			$result_answer = mysql_query("SELECT answer_content FROM answers WHERE question_id='$this->question_id'");
			$row_answer = mysql_fetch_array($result_answer);
		
			$asker_username = $row_user['username'];
			$this->answer = $row_answer['answer_content'];
		
			echo "<b>" . $asker_username . ":</b> <i>" . $this->question_title . "</i> " . $this->question_content . "<br />";
			if ($this->answer != "") {echo "<b>Answer:</b> " . $this->answer . "<br />";}
			echo "<hr style='align:left; width:100px;' />";
			}
		}

	mysql_close($con);
}



}

?>