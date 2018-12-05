<?php
    include('connection.php');
    session_start();
    if(isset($_SESSION['user_email']) && !empty($_SESSION['user_email'])) {
        $email = $_SESSION['user_email'];
        $query = "SELECT * FROM workshop_registration WHERE email = '$email' ";
       $query = mysqli_query($con, $query);
       $rows = mysqli_num_rows($query);
       if($rows >0){
           $data=mysqli_fetch_array($query);
           //var_dump($data);
           
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
                    <div class="row" style="margin:0"> 
                    <div class="col-lg-9 " style="border:2px solid #007bff;  padding:20px; border-radius: 10px;">
                   <span class="h4">Update Profile</span>
                   <hr>
                <form action="register.php" method="post" id="registerForm">
                    <div class="row padding0">
                        <div class="form-group col-lg-6 ">
                        <label for="name">Name :</label>
                        <input type="text" class="form-control" id="email" name="name" value="<?php echo $data['name'] ?>" required>
                      </div>
                        <div class="form-group col-lg-6 ">
                            <label for="email">Email :</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?php echo $data['email'] ?>" required readonly>
                        </div>
                        <div class="form-group col-lg-6 ">
                            <label for="mobile">Mobile :</label>
                            <input type="text" class="form-control" id="mobile" name="mobile" value="<?php echo $data['mobile'] ?>" required>
                        </div>
                        <div class="form-group col-lg-6 ">
                            <label for="qualification">Qualification :</label>
                            <input type="text" class="form-control" id="qualification" name="qualification" value="<?php echo $data['qualification'] ?>" required>
                        </div>
                        <div class="form-group col-lg-6 ">
                            <label for="dob">Date of Birth :</label>
                            <input type="text" class="form-control" id="dob" name="dob" value="<?php echo $data['dob'] ?>" required>
                        </div>
                        <div class="form-group col-lg-6 ">
                            <label for="gender">Gender :</label><br>
                            <?php  if($data['gender'] == "Male"){
                                $male="checked";
                                $female = "";
                            }
                           else{
                                $female="checked";
                                $male = "";
                           }
                            ?>
                            
                            <input type="radio" class=" " value="male" name='gender' required <?php echo $male; ?> /> Male &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" class=" " value="female" name='gender' <?php echo $female; ?>> Female
                        </div>
                        <div class="form-group col-lg-6 ">
                            <label for="address">Address</label><br>
                            <textarea name="address" id="" cols="32" rows="2" class="form-control"  style="width: 100%"> <?php echo $data['address'] ?></textarea>
                        </div>
                        
                        <div class="form-group col-lg-6 ">
                            <label for="password">Password :</label>
                            <input type="password" class="form-control" id="password" name="password" value="<?php echo $data['password'] ?>" required>
                        </div>
                        <div class="form-group col-lg-3 ">
                            <input type="submit" class="form-control btn btn-primary" value="Update"/>
                        </div>
                        <div class="form-group col-lg-3 ">
                            <a href="dashboard.php"><input type="button" class="form-control btn btn-primary" value="Back"/></a> 
                        </div>
                        
                    </div>
                </form>
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
             echo "No Record Found";
        }
    }
else
    {
    echo "Hello motu";
    session_destroy();
    header( "refresh:3;url=signin.html" );
    

}

?>


