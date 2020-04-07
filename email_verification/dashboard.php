<?php

//http://127.0.0.1/php/email_verification/check.php?id=736599392 
session_start();
if(!isset($_SESSION['IS_LOGIN'])){
	header('location:login.php');
	die();
}
?>
Welcome User<br/>
<a href="logout.php">Logout</a>



