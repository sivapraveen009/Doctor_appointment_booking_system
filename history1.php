<?php 
	

	
 ?>


 <!DOCTYPE html>
 <html>
 
 	<?php include('profile/header.php'); ?>

 	<?php 

	$connect = mysqli_connect('localhost','praveen','Amma1234');

	mysqli_select_db($connect,'user_register');

	
		$doc_name=$_POST['DOC_NAME'];
		$appointment_date=$_POST['APPOINTMENT_DATE'];
		$s  = " select * from DOCTOR where DOC_NAME = '$doc_name' ";

		$result = mysqli_query($connect,$s);

		$num=mysqli_num_rows($result);

		$name=mysqli_fetch_assoc($result);

		$doc_id= $name['DOC_ID'];
		$x=$_SESSION['PATIENT_EMAIL'];
 		$r="select PATIENT_ID FROM PATIENT_PROFILE WHERE PATIENT_EMAIL= '$x'";
 		$result = mysqli_query($connect,$r);

		$name=mysqli_fetch_assoc($result);

		$patient_id=$name['PATIENT_ID'];

		$p="INSERT INTO appointment (PATIENT_ID,DOC_ID,APPOINTMENT_DATE) SELECT * FROM
		(SELECT '$patient_id','$doc_id','$appointment_date') AS AP WHERE NOT EXISTS (SELECT PATIENT_ID, DOC_ID,APPOINTMENT_DATE FROM APPOINTMENT  WHERE PATIENT_ID='$patient_id' AND DOC_ID='$doc_id' AND APPOINTMENT_DATE='$appointment_date')";
		mysqli_query($connect,$p);
		
		
		$x=$_SESSION['PATIENT_EMAIL'];
		$r="select PATIENT_ID FROM PATIENT_PROFILE WHERE PATIENT_EMAIL= '$x'";
 		$result = mysqli_query($connect,$r);

		$name=mysqli_fetch_assoc($result);

		$patient_id=$name['PATIENT_ID'];
	
		
 		

		$history=" SELECT APPOINT_ID,PATIENT_ID,PATIENT_NAME, APPOINTMENT_DATE , DOC_NAME, DOC_DEPT,DOC_FEE 
	FROM PATIENT_PROFILE NATURAL JOIN APPOINTMENT NATURAL JOIN DOCTOR NATURAL JOIN DEPARTMENT WHERE PATIENT_ID='$patient_id' ORDER BY APPOINTMENT_DATE DESC";
	$result1=mysqli_query($connect,$history);
	$bookings=mysqli_fetch_all($result1,MYSQLI_ASSOC);

	$_SESSION['PATIENT_ID']=$patient_id;


	
	 


 	?>
 	<div class="container">
 		<h3>My Appointments:</h3>
 		<br>

 		<?php foreach($bookings as $book) { 
 			$patient_name=$book['PATIENT_NAME'];
 			$appointment_date=$book['APPOINTMENT_DATE'];
 			$doctor_name=$book['DOC_NAME'];
 			$fee=$book['DOC_FEE'];
 			$dept=$book['DOC_DEPT'];
 			$ap_id=$book['APPOINT_ID'];
 			$_SESSION['edit']=1;

 		 ?>
 			<div class="col s6 md3">
 				<div class="card1 z-depth-0" style="max-height: 2px;">
 					<div class="card1-content-center">
	 					<div class="card-content-center">
	 						<h6><?php echo "Hi, $patient_name !! your appointment has been confirmed with Dr.$doctor_name($dept) on $appointment_date. Kindly pay the fee(amount of $fee) at the hospital's counter prior to 30 min. Thank you" ; ?></h6>
	 						
	 					</div>
	 					<div class="right-align">
	 					<form action="editappoint.php" method="POST" style="margin-top: 50px">
	 						<button name="APPOINT_ID" value="<?php print_r($ap_id); ?>" type="submit" class="btn btn-success" style="color: white;height:35px; border-radius: 5px;padding: 2px; float:left;" >Edit Appointment</button>
	 					</form>
	 					<form action="deleteappoint.php" method="POST" style="margin-top: 50px">
	 						<button name="APPOINT_ID" value="<?php print_r($ap_id); ?>" type="submit" class="btn" style=" background-color: rgba(210,50,50,0.5);color: white;height:35px; border-radius: 5px;padding: 2px; float:right;" >Delete Appointment</button>
	 					</form>
	 					

	 						
	 					</div>
 					</div>
 					
 				</div>
 			</div>
 			<div class="clearfix"></div>
 		<?php } ?>
 	

 	</div>



 	<?php include('profile/footer.php'); ?>
 

 </html>




