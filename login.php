<?php

    if($_POST){
        
        $con = mysqli_connect('localhost','root','','crud');
            if($con){
                 
                $email = $_POST['email'];
                $password = $_POST['password'];
                
                $query = "SELECT * FROM workshop_registration WHERE email = '$email' AND password = '$password'  ";
                $query = mysqli_query($con, $query);
                $rows = mysqli_num_rows($query);
                if($rows >0){
                    
                    $data=mysqli_fetch_array($query);
                    session_start();
                     $_SESSION['user_email'] = $data['email'];
                     header("Location: dashboard.php");
                    
                }
                else{
                    echo "No Record Found";
                    header( "refresh:3;url=signin.html" );
                }
                
            }
        else{
            echo "Connection Error!!!";
        }
    }
    else{
        echo "Invalid Activity ...";
        header("Location: index.html"); /* Redirect browser */
        exit();
    }


?>