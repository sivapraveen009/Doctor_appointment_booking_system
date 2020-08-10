<?php 

	//session_start();
	$connect = mysqli_connect('localhost','praveen','Amma1234');

	mysqli_select_db($connect,'user_register');

	$department=$_POST['DOC_DEPT'];

	$s  = " select * from DOCTOR where DOC_DEPT = '$department' ";

	$result = mysqli_query($connect,$s);

	$num = mysqli_num_rows($result);
	//echo $num;

	$name=mysqli_fetch_all($result,MYSQLI_ASSOC);
	
	
 ?>


 <!DOCTYPE html>
 <html>
 
 	<?php include('profile/header.php'); ?>
 	<!---<?php //include('profile/make_appointment.php'); ?>--->
 	<div class="container d-flex justify-content-center" >
 		<form action="editappoint1.php" method="POST" style="margin-top: 50px">
                <div class="form-group"  style="margin-top: 5px;">
	            <label for="DOC_NAME" class="label">select doctor:</label>
	            <select id="DOC_NAME" name="DOC_NAME" class="input" style="margin-right: 5px"required>
	            	<?php foreach($name as $doc) { $x=$doc['DOC_NAME'];?>
	            		 
	              		<option value="<?php print_r($x)?>"><?php print_r($x)?></option>
	              	<?php } ?>
	             
	              	
	           	</select>
         		</div>
         		<div class="clearfix"></div>
                <label for="APPOINTMENT_DATE" class="label " >select date</label>
            	<input type="date" id="birthday" name="APPOINTMENT_DATE" class="input" required>

                              
            	<div class="clearfix"></div>
                <br>
                <button type="submit" class="btn btn-primary " style="margin:0% 40%; " >Confirm</button>
              </form>
 		
 	</div>

 	<?php include('profile/footer.php'); ?>
 

 </html>




