<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 

    <title>Praveen Hospitals</title>
    
    <style type="text/css">
    .dropdown-submenu {
          position: relative;
      }

      .dropdown-submenu>.dropdown-menu {
          top: 0;
          left: 100%;
          margin-top: -6px;
          margin-left: -1px;
          -webkit-border-radius: 0 6px 6px 6px;
          -moz-border-radius: 0 6px 6px;
          border-radius: 0 6px 6px 6px;
      }

      .dropdown-submenu:hover>.dropdown-menu {
          display: block;
      }

      .dropdown-submenu>a:after {
          display: block;
          content: " ";
          float: right;
          width: 0;
          height: 0;
          border-color: transparent;
          border-style: solid;
          text-decoration: none;
          border-width: 5px 0 5px 5px;
          border-left-color: #ccc;
          margin-top: 5px;
          margin-right: -10px;
      }

      .dropdown-submenu:hover>a:after {
          border-left-color: #fff;
      }

      .dropdown-submenu.pull-left {
          float: none;
      }

      .dropdown-submenu.pull-left>.dropdown-menu {
          left: -100%;
          margin-left: 10px;
          -webkit-border-radius: 6px 0 6px 6px;
          -moz-border-radius: 6px 0 6px 6px;
          border-radius: 6px 0 6px 6px;
      }
            

      .card h5
      {
        text-align: center;
      }
      .card img
      {
        border-radius: 50%;
        transition:transform 0.5s ease-in;
      }
      .card img:hover
      {
        transform: scale(1.01);
      }

      .card
      {
        border: none;
        min-height: 500px;
        max-height: 1000px;
        margin: 20px;
        
      }
      
      .fade-in:hover {
        animation: fadeIn ease 1s;

      }
      @keyframes fadeIn {
      0% {opacity:0.85;}
      100% {opacity:1;}
      }
      .label
  {
    width: 30%;
    float: left;
  }

  .dropdown-menu
  {
    background-color: rgba(255,255,255,0.8);
  }
  h3,p,ul,a,label,form,h5
  {
    font-family: Trajan Pro;
    
  }
  h5
  {
    text-transform: uppercase;
  
  }
  p
  {
    opacity: 0.85;
  }
  ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  
}

li {
  float: left;
  margin-right: 5px;
}
li input {
  display: block;
  width: 50px;
  text-decoration: none;
}
ul div
{
  float: left;
}



  </style>
  </head>
  <body>
    

   <!-- modals--->
<!--modal for reset password-->
    <div class="modal fade" id="myModal2">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
        
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Reset password</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
          
            <!-- Modal body -->
            <div class="modal-body">
              <form action="changepass.php" method="POST">
                <div class="form-group">
                  <label for="email">Email address:</label>
                  <input type="email" class="form-control" placeholder="Enter email" id="email" name="email" required>
                </div>
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
                <button type="submit" class="btn btn-primary " style="margin:0% 40%; " >Change-password</button>
              </form>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary "  data-dismiss="modal">Close</button>
            </div> 
          
          </div> 
        </div>
     </div>


    
      
      <div class="modal fade" id="myModal1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Sign-up/Register</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          
          <!-- Modal body -->
          <div class="modal-body">
            <form action="registration.php" method="POST">
          <div class="form-group">
            <label class="label" for="username" style="margin-top: 5px;">Username:</label>
            <input type="text" class="form-control input" placeholder="Enter email" name="username" id="username" required>
          </div>
          <div class="form-group">
            <label class="label" for="email" style="margin-top: 5px;">Email address:</label>
            <input type="email" class="form-control input" placeholder="Enter email" name="email" id="email" required>
          </div>
          <div class="clearfix"></div>
          <div class="form-group" style="margin-top: 5px;">
            <label for="contact" class="label">Contact No:</label>
            <input required type="tel" class="form-control input" placeholder="Enter Contact Number" name="contact" id="contact" maxlength="10">
          </div>
          <div class="clearfix"></div>
          <div class="form-group" style="margin-top: 5px;">
            <label for="pwd" class="label">Password:</label>
            <input required type="password" class="form-control input" placeholder="Enter password" name="password" id="pwd">
          </div>
          <div class="clearfix"></div>

          <div class="form-group" style="margin-top: 5px;">
            <label for="pwd1" class="label">Re-enter Password:</label>
            <input required type="password" class="form-control input" placeholder="Re-Enter password" name="repass" id="pwd1">
          </div>
          <div class="clearfix"></div>

          <div class="form-group"  style="margin-top: 5px;">
            <label for="Blood" class="label">Blood Group:</label>
            <select id="Blood" name="Blood" class="input" required>
              <option value="A+">A+</option>
              <option value="B+">B+</option>
              <option value="O+">O+</option>
              <option value="AB+">AB+</option>
              <option value="A-">A-</option>
              <option value="B-">B-</option>
              <option value="O-">O-</option>
              <option value="AB-">AB-</option>
           </select>
          </div>
          <div class="clearfix"></div>

          <div class="form-group" style="margin-top: 5px;">
            <label for="gender" class="label">Gender:</label>
            <select id="gender" name="gender" class="input" required>
              <option value="M">Male</option>
              <option value="F">Female</option>
           </select>
          </div>
          <div class="clearfix"></div>

            <label for="birthday" class="label ">Date of birth:</label>
            <input type="date" id="birthday" name="DOB" class="input" required>
              
              
          <div class="clearfix"></div>

          <div class="form-group form-check">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox"> Remember me
            </label>
          </div>
          <div class="clearfix"></div>
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="reset" class="btn btn-danger">Reset</button>
        </form>
          </div>
          
          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          </div>
          
        </div>
      </div>
      </div>


    <!--nav-->


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><h3>PRAVEEN HOSPITALS</h3></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only"></span></a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          contact us
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="">9182590059</a>
          <a class="dropdown-item" href="">9946664766</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="">1234567890</a>
        </div>
          
        </li>
         <li class="nav-item dropdown">
                
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Specializations</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Cardiology</a>
                  <a class="dropdown-item" href="#">Neurology</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Many more...</a>
                </div> 
                </li>
        
      </ul>

    <div style="margin-top: 15px;margin-bottom: -5px;">
      <div class="row">
            <div >
            <form action="validation.php" method="POST">
              <ul style="float:left;">
                <div>
                  <li><input type="email" class="form-control" placeholder="Enter email" id="email" name="email" required></li>
                  <li><input type="password" class="form-control input" placeholder="password" name="password" required></li>
                </div>
                <div>
                  <li><button type="submit" class="btn btn-primary">Login</button></li>
                </div>
                
              </ul>
          </form>
          </div>
          <button class="btn btn-outline-success " type="submit" data-toggle="modal" data-target="#myModal1">Signup</button>
      </div>
      <div class="row">
            <div  style="width:35%;padding: none;overflow: none;"><p></p></div>
            <div class="col"><a href="" style="display: block; margin:none" type="submit" data-toggle="modal" data-target="#myModal2" >forget password?</a></div>
      </div>
      

    </div>
  </div>

</nav>

    <!--carousel-->

 <div id="carouselExampleCaptions" class="carousel slide carousel-fade"  data-ride="carousel">

  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://images.unsplash.com/photo-1583324113626-70df0f4deaab?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1789&q=80" alt="..." >
      <div class="carousel-caption d-none d-md-block">
        <h5>#Stay Home #Stay Safe</h5>
        <p>STAY home , KEEP a safe distance , WASH hands often ,COVER your cough , SICK? Call the helpline</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1551190822-a9333d879b1f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" class="d-block w-100" alt="..."  >
      <div class="carousel-caption d-none d-md-block">
        <h5>Intensive care</h5>
        <p>Doctors dedicate themselves to public service. They serve our country by ensuring our good health and caring for us.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1532938911079-1b06ac7ceec7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1789&q=80" class="d-block w-100" alt="..." >
      <div class="carousel-caption d-none d-md-block">
        <h5>Doctor-Patient reltionship</h5>
        <p>The doctor–patient relationship is a central part of health care and the practice of medicine. ... The doctor and patient's values and perspectives about disease, life, and time available play a role in</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!--cardds-->
<div class="container bg-light my-2">

  <div class="row" >
    <div class=" col-md-6 col-lg-6">
      <div class="card bg-light">

        <img src="https://ak.picdn.net/shutterstock/videos/5365598/thumb/1.jpg" class="card-img-top rounded-circle fade-in">
          <div class="card-block ">
            <br>
            <h5>CARDIOLOGY</h5>
            <p>Cardiology is a branch of medicine that deals with the disorders of the heart as well as some parts of the circulatory system. The field includes medical diagnosis and treatment of congenital heart defects, coronary artery disease, heart failure, valvular heart disease and electrophysiology.</p>
            
            
          </div>
      </div>
      
    </div>
    <div class=" col-md-6 col-lg-6 ">
      <div class="card bg-light">

        <img src="https://wallpaperaccess.com/full/1871472.jpg" class="card-img-top rounded-circle fade-in">
          <div class="card-block ">
            <br>
            <h5>NEUROLOGY</h5>
            <p>Neurology is a  branch of medicine dealing with disorders of the nervous system. Neurology deals with the diagnosis and treatment of all categories of conditions and disease involving the central and peripheral nervous systems </p>
            
            
          </div>
      </div>
      
    </div>
    <div class=" col-md-6 col-lg-6">
      <div class="card bg-light">

        <img src="https://c1.wallpaperflare.com/preview/881/472/914/skin-brown-skin-skin-up-close-brown-skin-up-close.jpg" class="card-img-top rounded-circle fade-in">
          <div class="card-block">
            <br>
            <h5>DERMATOLOGY</h5>
            <p>Dermatology is the branch of medicine dealing with the skin.It is a speciality with both medical and surgical aspects. A dermatologist is a specialist doctor who manages diseases related to skin, hair and nails and some cosmetic problems.</p>
            
            
          </div>
      </div>
      
    </div>
    <div class=" col-md-6 col-lg-6">
      <div class="card bg-light">

        <img src="https://ak.picdn.net/shutterstock/videos/7240810/thumb/2.jpg" class="card-img-top fade-in">
          <div class="card-block">
            <br>
            <h5>NEPHROLOGY</h5>
            <p>Nephrology is a specialty of medicine and pediatric medicine focused on the kidneys, specifically normal kidney function and kidney disease, the preservation of kidney health, and the treatment of kidney disease, from diet and medication to renal replacement therapy (dialysis and kidney transplantation).</p>
            
            
          </div>
      </div>
      
    </div>
    
  </div>
  
</div>
<!--footer-->
<div class="container-fluid text-center bg-light py-5">
  <p>@Copyright 2020 Praveen Hospitals</p>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>