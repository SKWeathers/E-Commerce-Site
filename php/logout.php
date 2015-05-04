<?php 

include("php/check_login.php");

setcookie("login", "", time()-3600, "/");
header ('Location: ../home.php');

?>