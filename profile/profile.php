<?php 

	$connect = mysqli_connect('localhost','praveen','Amma1234');

	mysqli_select_db($connect,'user_register');
	$profile = $_SESSION['PATIENT_EMAIL'];

	$s  = " select * from patient_profile where PATIENT_EMAIL = '$profile' ";

	$result = mysqli_query($connect,$s);

	$num = mysqli_num_rows($result);


	if($num==1)
	{
		$name=mysqli_fetch_assoc($result);
		$username = $name['PATIENT_NAME'];
		$email	=	$name['PATIENT_EMAIL'];
		$contact = $name['PATIENT_CONTACT'];
		$password = $name['PATIENT_PASSWORD'];
		
		$blood = $name['PATIENT_BLOOD'];
		$gender  = $name['PATIENT_GENDER'];
		$DOB = $name['PATIENT_DOB'];
     
		
	}
  if ($_SESSION['count']==0) {
    
    $_SESSION['invalid']='';
  }
  $_SESSION['PATIENT_EMAIL']=$email;

 ?>

 <div class="container bg-light" style="margin-top: 5px;" >
  <div style="text-align: center;background: rgba(50,210,50,0.5);">
   <?php echo $_SESSION['invalid']; ?>
 </div>
 	
 	<pre style="font-size: 18px; margin-left: none;">
 		Username:<?php echo "  ".$username; ?>

 		E-mail  :<?php echo "  ".$email; ?>

 		Password:<?php echo "  ".$password; ?>

 		Contact :<?php echo "  ".$contact; ?>

 		Blood   :<?php echo "  ".$blood; ?>

 		Gender  :<?php echo "  ".$gender; ?>

 		DOB     :<?php echo "  ".$DOB; ?>

 	</pre>

 	<a href="profile.php" style="text-align: center;display: block; margin:none" type="submit" data-toggle="modal" data-target="#myModal2" data-dismiss="modal">change password?</a>
	<div class="modal fade" id="myModal2">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
        
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Change Password</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
          
            <!-- Modal body -->
            <div class="modal-body">
              <form action="profilepass.php" method="POST">
                
                <div class="form-group">
                  <label for="password">Password:</label>
                  <input type="password" class="form-control" placeholder="Enter password" id="password" name="password" required>
                </div>

                <div class="form-group">
                  <label for="repass">Password:</label>
                  <input type="password" class="form-control" placeholder="Re-Enter password" id="password" name="repass" required>
                </div>

                <div class="form-group form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox"> Remember me
                  </label>
                </div>
                

                <br>
                <button type="submit" class="btn btn-primary " style="margin:0% 40%; " >Change password</button>
              </form>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary "  data-dismiss="modal">Close</button>
            </div> 
          
          </div> 
        </div>
     </div>


 </div>
 
