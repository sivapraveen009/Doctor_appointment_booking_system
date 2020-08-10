<?php 
//logout of page
	session_start();
	session_destroy();
	header('location:login.php');

 ?>