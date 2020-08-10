<?php 
	
	session_start();
	

	$connect = mysqli_connect('localhost','praveen','Amma1234');

	mysqli_select_db($connect,'user_register');

	
	$email	=	$_SESSION['PATIENT_EMAIL'];
	//$contact = $_POST['contact'];
	$password = $_POST['password'];
	$password1 = $_POST['repass'];
	$_SESSION['invalid']='';
	$_SESSION['count']=0;

	if(($password == $password1) &&($_SESSION['PATIENT_EMAIL']=== $email))
	{
		$s= "update patient_profile set PATIENT_PASSWORD='$password' where PATIENT_EMAIL='$email'";
		$result = mysqli_query($connect,$s);

		//echo "password SUCCESSFULLY updated";

		$r  = " select * from PATIENT_PROFILE where PATIENT_EMAIL = '$email' && PATIENT_PASSWORD='$password'";

		$result = mysqli_query($connect,$r);

		$name=mysqli_fetch_assoc($result);

		$_SESSION['PATIENT_NAME']=$name['PATIENT_NAME'];
		header('location:profile.php');
		$_SESSION['invalid']='successfully updated password';
		$_SESSION['count']=1;
	}
	
	else
	{
		$_SESSION['invalid']='Mismatch with password';
		$_SESSION['count']=1;
		header('location:profile.php');
		
	}

 ?>