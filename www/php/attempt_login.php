<?php

$username = $_POST['username'];
$password = $_POST['password'];

include ("customer_class.php");

$customer = NEW Customer();

$customer->login($username, $password);

?>
