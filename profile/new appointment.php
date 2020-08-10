<?php 


 ?>

<div class="container bg-light my-2" style="height: 300px;">
  <h4>Select Specialization</h4>
  <div class="row" >
    <div class=" col-md-3 col-lg-3">
      <div class="card bg-light">

        <img src="https://wallpaperaccess.com/full/1871472.jpg" class="card-img-top rounded-circle fade-in">
          <div class="card-block-center" >
            <br>
            
            <form action="makeappointment.php" method="POST">
              <button type="submit" name="DOC_DEPT" value="NEUROLOGIST"<?php $_SESSION['DOC_DEPT']='NEUROLOGIST'?> class="btn btn-secondary "style="margin:0% 35%;"  >Brain</button>
            </form>
                     
            
          </div>
      </div>
      
    </div>
    <div class=" col-md-3 col-lg-3 ">
      <div class="card bg-light">

        <img src="https://ak.picdn.net/shutterstock/videos/5365598/thumb/1.jpg" class="card-img-top rounded-circle fade-in">
          <div class="card-block ">
            <br>
            <form action="makeappointment.php" method="POST">
              <button type="submit" name="DOC_DEPT" value="CARDIOLOGIST"<?php $_SESSION['DOC_DEPT']='CARDIOLOGIST'?> class="btn btn-secondary "style="margin:0% 35%;"  >Heart</button>
            </form>
                       
            
          </div>
      </div>
      
    </div>
    <div class=" col-md-3 col-lg-3">
      <div class="card bg-light">

        <img src="https://c1.wallpaperflare.com/preview/881/472/914/skin-brown-skin-skin-up-close-brown-skin-up-close.jpg" class="card-img-top rounded-circle fade-in">
          <div class="card-block">
            <br>
            <form action="makeappointment.php" method="POST">
              <button type="submit" name="DOC_DEPT" value="DERMATOLOGIST"<?php $_SESSION['DOC_DEPT']='DERMATOLOGIST'?> class="btn btn-secondary "style="margin:0% 35%;"  >Skin</button>
            </form>
                       
            
          </div>
      </div>
      
    </div>
    <div class=" col-md-3 col-lg-3">
      <div class="card bg-light">

        <img src="https://ak.picdn.net/shutterstock/videos/7240810/thumb/2.jpg" class="card-img-top fade-in">
          <div class="card-block">
            <br>
            <form action="makeappointment.php" method="POST">
              <button type="submit" name="DOC_DEPT" value="NEPHROLOGIST"<?php $_SESSION['DOC_DEPT']='NEPHROLOGIST'?> class="btn btn-secondary "style="margin:0% 35%;"  >Kidney</button>
            </form>
                       
            
          </div>
      </div>
      
    </div>
    
  </div>
  
</div>