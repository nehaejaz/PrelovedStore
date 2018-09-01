<script>
    localStorage.setItem('user', <?php echo $user_token ?>);
</script>

<?php 
session_start();

if( $_SERVER['REQUEST_METHOD'] === "POST" ) {
    $userEmail = trim( $_POST['email']);
    $userPassword = $_POST['user_password'];
    $userfullname="";
}


 /// Database connections: 

 $database = new mysqli("localhost", "root", null, "preloved_store");

 if ( $database->connect_error === TRUE ) {
     die("Connection Faied!");
 } 


 // main query..

 $login_query = "SELECT user_id, email, first_name,last_name,user_password FROM user WHERE email='".$userEmail."' && user_password='".$userPassword."'";
 $result =  $database->query($login_query);
 if( $result->num_rows > 0 ) {

    while($row = $result->fetch_assoc()) {
       $user_id = $row['user_id'];
       $firstName=$row['first_name'];
       $lastName=$row['last_name'];
    //    echo $user_id;
        //echo  "<script> localStorage.setItem('user' , '".$user_token."'))</script>";
    }
    $_SESSION['first_name']=$firstName;
    $_SESSION['last_name']=$lastName;
    $_SESSION['email']=$userEmail;
    $_SESSION['user_password']=$userPassword;
    $_SESSION['id']=$user_id;
     header('location: profilepage.php');
 } else {
     echo "Incorrect email or password";
 }



?>

