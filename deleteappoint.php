

 	<?php 
 		$connect = mysqli_connect('localhost','praveen','Amma1234');

		mysqli_select_db($connect,'user_register');

 		$del_app=$_POST['APPOINT_ID'];

 		$del="DELETE FROM APPOINTMENT WHERE APPOINT_ID='$del_app'";
 		$q=mysqli_query($connect,$del);
 		header('location:history.php');
 		


 	?>






