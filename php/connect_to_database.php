<?php

$con = mysql_connect("localhost","root");
if (!$con) {die('Could not connect: ' . mysql_error());}

mysql_select_db("silkroad_db1", $con);

?>