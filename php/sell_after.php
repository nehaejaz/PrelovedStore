<?php
 session_start();

if (isset($_POST["submit"])){
    $title=$_POST['title'];
    $category=$_POST['category'];
    $sub_category=$_POST['sub_category'];
    $description_=$_POST['description_'];
    $price=$_POST['price'];
    $condition_=$_POST['condition_'];
    $size=$_POST['size'];
    $brandname=$_POST['brandname'];
    $phonenum=$_POST['phonenum'];
    $email_sell=$_POST['email_sell'];
    $provience=$_POST['provience'];
    $city=$_POST['city'];    
    $postalcode=$_POST['postalcode'];
    $errors=array(); //array for errors
    
}
//connection to database
$database= new mysqli("localhost","root", null, "preloved_store");
if($database->connect_error === true){
    die("Connection Failed");
}
echo"database connected"; echo $_SESSION['id']; 

// insertion query, first bracket contain table attributes, second bracket contains the varible we created for storing the values from user
$insertion_query="INSERT INTO sell(user_id,title,category,sub_category,description_,price,condition_,size,brandname,
phonenum,email_sell,provience,city,postalcode) VALUES
('".$_SESSION['id']."','".$title."','".$category."','".$sub_category."','".$description_."','".$price."','".$condition_."','".$size."',
'".$brandname."','".$phonenum."','".$email_sell."','".$provience."','".$city."','".$postalcode."')";

if ($database->query($insertion_query)){
    header("location: sell_returnpage.php");
}

else {
    echo "ERROR WHILE REGISTERING: ".$database->error;
    }




?>