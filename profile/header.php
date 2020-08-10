 <?php 
  

  session_start();
  if(!isset($_SESSION['PATIENT_NAME']))
  {
    header('location:login.php');
  }
  
  //print_r($_SESSION['PATIENT_EMAIL']);
 ?>



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
          text-decoration: none;
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
      .card1
      {
        border: none;
        min-height: 100px;
        max-height: 500px;
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
  h5
  {
    font-family: Trajan Pro;
    font-size: 15px;
  }


  </style>
  </head>
  <body>
    

    <!--nav-->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="home.php"><h3>PRAVEEN HOSPITALS</h3></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
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
