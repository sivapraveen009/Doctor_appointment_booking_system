<?php 
	
	session_start();

	$connect = mysqli_connect('localhost','praveen','Amma1234');

	mysqli_select_db($connect,'user_register');

	
	$email	=	$_POST['email'];
	//$contact = $_POST['contact'];
	$password = $_POST['password'];
	

	$s  = " select * from PATIENT_PROFILE where PATIENT_EMAIL = '$email' && PATIENT_PASSWORD='$password'";

	$result = mysqli_query($connect,$s);

	$num = mysqli_num_rows($result);


	

	if($num==1)
	{
		$name=mysqli_fetch_assoc($result);
		$_SESSION['PATIENT_NAME']=$name['PATIENT_NAME'];
		$_SESSION['PATIENT_EMAIL']=$name['PATIENT_EMAIL'];
		header('location:home.php');
	}
	else
	{	
		
		header('location:errorlogin.php');
	}

 ?>