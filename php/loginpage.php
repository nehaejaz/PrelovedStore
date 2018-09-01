<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ"
        crossorigin="anonymous">
    
    <!--for font icons-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <!--for font icons-->
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <!--for brand font-->
    <link rel="stylesheet" type="text/css" href="http://localhost/thePrelovedstore/css/hey.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/thePrelovedstore/css/loginpage.css">
    <title>Login</title>
</head>

<body>
    <!--1st navbar starting-->
    <nav class="navbar navbar-light navbar-toggleable-md bg-faded nav1">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#firstnavbar">
            <span class="navbar-toggler-icon bg-faded"></span>
        </button>
        <a class="navbar-brand" id="preloved" href="http://localhost/thePrelovedstore/indexfinal.html">The Preloved Store</a>
        <div class="collapse navbar-collapse" id="firstnavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" id="licolor1" href="http://localhost/thePrelovedstore/php/signup.php">Signup</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="licolor2" href="login.html">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="licolor3" href="mycart.html">MyCart</a>
                </li>
            </ul>
            <form class="form-inline">
                <input type="text" class="form-control" placeholder="Search">
                <button class="btn btn-outline-warning">Search</button>
            </form>
        </div>
    </nav>
    <!--1st navbar closed-->


    <!--starting of menu navbar-->
    <nav class="navbar navbar-toggleable-md bg-warning ">

        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="secondnavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container collapse navbar-collapse" id="secondnavbar">

            <ul class="menu-main">
                <li class="nav-item">
                    <!--firstitem-->
                    <a href="http://localhost/thePrelovedstore/indexfinal.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <!--2nditem with MegaMenu-->
                    <a href="#" class="nav-link">Shop</a>
                    <div class="menu-sub">
                        <!--div for sub menu-->


                        <div class="menu-col-1">
                            <!--div for col 1 starting-->

                            <h3 class="menu-category">Women</h3>
                            <ul>
                                <li class="nav-item">
                                    <a href="" class="nav-link">Clothes</a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link">Footwear</a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link">Accessories</a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link">Fragnances</a>
                                </li>
                            </ul>


                            <h3 class="menu-category">KIDS</h3>
                            <ul>
                                <li class="nav-item">
                                    <a href="" class="nav-link">Clothes</a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link">Footwear</a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link">Toys</a>
                                </li>
                            </ul>



                        </div>
                        <!--div for col 1 closed-->

                        <div class="menu-col-1">
                            <!--div for 2nd columnb-->
                            <h3 class="menu-category">MEN</h3>
                            <ul>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Clothes</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Footwear</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Accessories</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Fragnances</a>
                                </li>
                            </ul>
                        </div>
                        <!--div  for 2nd columnb closed-->


                        <li class="nav-item">
                            <a href="sell.html" class="nav-link">Sell</a>
                        </li>
                        <li class="nav-item">
                            <a href="ourstory.html" class="nav-link">Our Story</a>
                        </li>


            </ul>
            <!--main ul closed-->
            </div>
            <!--container div closed-->
    </nav>
    <!--2nd navbar closed-->

    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <!--main content of form-->
            <div class="modal-content">
                <!--div for user image-->
                <div class="col-12 user-image">
                    <img src="http://localhost/thePrelovedstore/images/usericon.jpg" alt="userface">
                </div>
                <!--user image div closed-->
                <!--for all form inputs-->
                <form class="col-12" action="http://localhost/thePrelovedstore/php/login.php" method="POST">
                    <!--for username-->
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Enter Email" name="email">
                    </div>
                    <!--for password-->
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Enter Password" name="user_password">
                    </div>
                    <button type="submit" name="submit" class="btn" id="btnforlogin">
                        <i class="fas fa-sign-in-alt"></i>Login</button>
                </form>
                <!--form inputs closed-->
                <!--div for forget password option-->
                <div class="col-12 forget">
                    <a href="#">Forget Password?</a>
                </div><!--div for forget password closed-->
                <div class="col-12 signin">
                   <p>Dont have an account?<a href="signup.php"> Sign up here</a></p>
                </div>


            </div>
        </div>
    </div>
</body>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"> </script>
<script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>

</html>