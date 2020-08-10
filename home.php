

 <?php 
  
  //welcome page
  session_start();
  if(!isset($_SESSION['PATIENT_EMAIL']))
  {
    header('location:login.php');
  }
  $_SESSION['count']=0;
  $_SESSION['PATIENT_EMAIL']=$_SESSION['PATIENT_EMAIL'];
  $_SESSION['new']=0;
 ?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 

    <title>first</title>
    
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
  .input
  {
    width: 65%;
    float: left;

  }
  .dropdown-menu
  {
    background-color: rgba(255,255,255,0.8);
  }
  h3,p,ul,a,label,form
  {
    font-family: Trajan Pro;
    
  }
    </style>
  </head>
  <body>
    

    <!--nav-->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><h3>PRAVEEN HOSPITALS</h3></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          contact us
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">9182590059</a>
          <a class="dropdown-item" href="#">9946664766</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">0123456789</a>
        </div>
        
      </li>
       
        <li class="nav-item active">
            <a class="nav-link" href="profile.php">Profile <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle dropdown-item " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" >
                Appointments
              </a>
                            <ul class="dropdown-menu">

                                <li class="dropdown-item"><a href="newappointment.php">New Appointment</a></li>
                                <li class="dropdown-item"><a href="history.php">My bookings</a></li>
                                <li class="dropdown-item"><a href="history.php">cancel Appointment</a></li>
                                <li class="dropdown-item"><a href="history.php">Edit Appointment</a></li>
                            </ul>
        </li>    
    </ul>
    
    <span style="margin-right: 5px; font-size: 20px;">Welcome <?php echo $_SESSION['PATIENT_NAME']; ?></span>
    <a href="logout.php" class="btn btn-danger">logout</a>
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