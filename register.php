<?php

    if($_POST){
        
        $con = mysqli_connect('localhost','root','','crud');
            if($con){
                $name = $_POST['name'];
                $email = $_POST['email'];
                $mobile = $_POST['mobile'];
                $qualification = $_POST['qualification'];
                $dob = $_POST['dob'];
                $gender = $_POST['gender'];
                $address = $_POST['address'];
                $password = $_POST['password'];
                
                $query = "INSERT INTO workshop_registration (name, email, mobile, qualification, dob, gender, address, password) values('$name', '$email', '$mobile', '$qualification', '$dob', '$gender', '$address', '$password')";
                $query = mysqli_query($con, $query);
                if($query){
                    echo "Data Inserted Suceessfully";
                }
                else{
                    echo "Error in data Insertion";
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