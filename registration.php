<?php 
	

	//signup validation
	session_start();

	$connect = mysqli_connect('localhost','praveen','Amma1234');

	mysqli_select_db($connect,'user_register');

	$username = $_POST['username'];
	$email	=	$_POST['email'];
	$contact = $_POST['contact'];
	$password = $_POST['password'];
	$repass = $_POST['repass'];
	$blood = $_POST['Blood'];
	$gender  = $_POST['gender'];
	$DOB = $_POST['DOB'];

	$s  = " select PATIENT_EMAIL from PATIENT_PROFILE where PATIENT_EMAIL = '$email' ";

	$result = mysqli_query($connect,$s);

	$num = mysqli_num_rows($result);

	if($num==1)
	{
		
		header('location:login.php');
	}
	else
	{
		if($password==$repass)
		{
			$reg = "INSERT INTO PATIENT_PROFILE
				(PATIENT_EMAIL,PATIENT_PASSWORD,PATIENT_NAME,PATIENT_DOB,PATIENT_GENDER,PATIENT_BLOOD,PATIENT_CONTACT) VALUES 
				('$email','$password','$username','$DOB','$gender','$blood','$contact')";
			mysqli_query($connect,$reg);
			$_SESSION['PATIENT_NAME']=$username;
			$_SESSION['PATIENT_EMAIL']=$email;
			header('location:home.php');
		}
		else
			header('location:errorlogin.php');
	}

 ?>