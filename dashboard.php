<?php
  session_start();
    if(isset($_SESSION['user_email']) && !empty($_SESSION['user_email'])) {
    

   ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Workshop</title>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="assets/css/style.css" rel="stylesheet" id="bootstrap-css">
    
</head>
<body>
    
<section id="header-navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <div class="d-flex flex-grow-1">
        <span class="w-100 d-lg-none d-block"><!-- hidden spacer to center brand on mobile --></span>
        <a class="navbar-brand d-none d-lg-inline-block text-light" href="#">
            Company Logo
        </a>
        <a class="navbar-brand-two mx-auto d-lg-none d-inline-block" href="#">
            <img src="//placehold.it/40?text=LOGO" alt="logo">
        </a>
        <div class="w-100 text-right">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
    <div class="collapse navbar-collapse flex-grow-1 text-right" id="myNavbar">
        <ul class="navbar-nav ml-auto flex-nowrap">
            <li class="nav-item">
                <a href="#" class="nav-link m-2 menu-item nav-active text-light">About Us</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:#fff;padding-top: 15px;">
                  Courses
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">MCA</a>
                  <a class="dropdown-item" href="#">BBA / BCA</a>
                  <a class="dropdown-item" href="#">Physics</a>
                  <a class="dropdown-item" href="#">Mathematics</a>
<!--                  <div class="dropdown-divider"></div>-->
                  <a class="dropdown-item" href="#">English</a>
                </div>
              </li>
            <li class="nav-item">
                <a href="#" class="nav-link m-2 menu-item text-light">Amenties</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link m-2 menu-item text-light">Academics</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link m-2 menu-item text-light">Department</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link m-2 menu-item text-light">Register</a>
            </li>
        </ul>
    </div>
</nav>
</section>
<section id="dashboardcontainer">
    <div class="container" style="background:#fff;padding:50px 20px 200px 20px;">
        <div class="row"> 
        <div class="col-lg-12">
            <div class="col-lg-12 padding0" style=" ">
                <p class="h3" style=""> DASHBOARD</p>
               
                <hr style="height:2px;background:#007bff;">
            </div>
            <div class="col-lg-12 padding0" style="margin-top:50px;">
                    
                 <dic class="row" style="padding:0; margin:0 5px;">
                     <div class="card" style="width: 18rem;">
                      <img class="card-img-top" src="assets/images/slider_1.jpg" alt="Card image cap">
                      <div class="card-body">
                        <p class="card-text h4">Personal Details</p>
                        <a href="personal_details.php"><p>View / Edit</p></a>
                      </div>
                 </div> 
                 
                 <div class="card" style="width: 18rem; margin:0 5px;">
                      <img class="card-img-top" src="assets/images/slider_2.jpg" alt="Card image cap">
                      <div class="card-body">
                        <p class="card-text h4">All User Details</p>
                        <a href="alluserdetails.php"><p>View / Edit / Delete</p></a>
                      </div>
                 </div> 
                 </dic>
                
            </div>
        </div>
        
    </div>
    </div>
</section>

<footer>
    <div class="row">
        <div class="col-lg-6 padding0">
        <span>Copyright © 2018 All Rights Reserved</span>
    </div>
    <div class="col-lg-6 padding0 text-right">
        Designed & Developed By : Nandan Kumar
    </div>
    </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"  ></script>
<script src="assets/js/bootstrap.min.js"  ></script>
</body>
</html>

<?php

}
else{
   echo "Invalid Activity";
    session_destroy();
   header( "refresh:3;url=signin.html" );
}

?>