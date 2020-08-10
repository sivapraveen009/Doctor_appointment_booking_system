<?php 
	
	session_start();
	

	$connect = mysqli_connect('localhost','praveen','Amma1234');

	mysqli_select_db($connect,'user_register');

	
	$email	=	$_POST['email'];
	//$contact = $_POST['contact'];
	$password = $_POST['password'];
	$password1 = $_POST['repass'];

	if($password == $password1)
	{
		$s= "update patient_profile set PATIENT_PASSWORD='$password' where PATIENT_EMAIL='$email'";
		$result = mysqli_query($connect,$s);

		//echo "password updated";

		$r  = " select * from patient_profile where PATIENT_EMAIL = '$email' && PATIENT_PASSWORD='$password'";

		$result = mysqli_query($connect,$r);

		$name=mysqli_fetch_assoc($result);

		$_SESSION['PATIENT_NAME']=$name['PATIENT_NAME'];
		$_SESSION['PATIENT_EMAIL']=$email;
		header('location:home.php');
	}
	
	else
	{
		header('location:login.php');
		
	}

 ?>