<?php
    session_start();

     if(isset($_POST['submit'])) {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email =  $_POST['email'];
        $user_password = $_POST['user_password'];
        $user_password2=$_POST['user_password2'];
        $errors= array(); //array for storing all errors
        $_SESSION['message1']="";
        $_SESSION['message2']="";
        
    }


    /// Database connections: 
    $database = new mysqli("localhost", "root", null, "preloved_store");

    if ( $database->connect_error === TRUE ) {
        die("Connection Faied!");
        
    } 

    //checks for already exit email IDs
    $check_query= "SELECT * FROM user where email='$email' ";
    $result=mysqli_query($database,$check_query);
    $user=mysqli_fetch_assoc($result);
    
    if($user){
        if($user['email']===$email){
            array_push($errors,"email already existed"); //adds 1 if email already existed
            echo "<script>alert('email already existed')</script>";
            // $_SESSION['message1']="email already existed";
            // header("location: signup.php");
        }
    }

     //checks if both passwords are same or not
     if($user_password !== $user_password2){
        array_push($errors,"the two passwords do not match"); //adds 1 if passwords matches
        // $_SESSION['message2']="the two passwords do not match"; 
        // header("location: signup.php");       
    }
    

    //print_r($errors); execute it to find out what $errors

    //inserts the form into database
    if(count($errors) == 0 ){
    $registration_query = "INSERT INTO user (first_name, last_name, email, user_password ) 
    VALUES('".$first_name."', '".$last_name."', '".$email."', '".$user_password."')";
        if( $database->query($registration_query) ) {
        echo "Successfully Registered!";
        $_SESSION['first_name']=$first_name;
        $_SESSION['last_name']=$last_name;
        $_SESSION['email']=$email;
        $_SESSION['user_password'] =$user_password;
        
        header("location:http://localhost/thePrelovedstore/php/profilepage.php");
        } else {
        echo "ERROR WHILE REGISTERING: ".$database->error;
        }
    }
    else{
    //   print_r($errors);
    }

?>
