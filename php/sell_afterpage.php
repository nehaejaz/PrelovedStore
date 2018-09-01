<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">

    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://localhost/thePrelovedstore/css/hey.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/thePrelovedstore/css/sellAfterPage.css">
    <title>Home</title>
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
                    <a class="nav-link" id="licolor1" href="profilepage.php">My Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="licolor2" href="logout.php">Logout</a>
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
                                <!-- <li class="nav-item">
                                    <a href="" class="nav-link">Fragnances</a>
                                </li> -->
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
                                    <a href="" class="nav-link">Accessories</a>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">Toys</a>
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
                                <!-- <li class="nav-item">
                                    <a href="#" class="nav-link">Fragnances</a>
                                </li> -->
                            </ul>
                        </div>
                        <!--div  for 2nd columnb closed-->


                        <li class="nav-item">
                            <a href="sell_afterpage.php" class="nav-link">Sell</a>
                        </li>
                        <li class="nav-item">
                            <a href="http://localhost/thePrelovedstore/html/ourstory_after.html" class="nav-link">Our Story</a>
                        </li>


            </ul>
            <!--main ul closed-->
            </div>
            <!--container div closed-->
    </nav>
    <!--2nd navbar closed-->

    <!-- cards begins here -->
    <div class="card text-center" style="width:70%" id="maincard">
        <div class="card-header ">
            <h1 class="cardheading">Post an Ad</h1>
        </div>
        <!-- 1st card block -->
        <div class="card-block">
            <form action="sell_after.php" method="post">
                <!-- textbox for title -->
                <div class="form-group row">
                    <label for="title" class="col-sm-2 col-form-label">Add Tittle</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter Ad Tittle Here" required>
                    </div>
                </div>
                <!-- for drop down of category -->
                <div class="form-group row">
                    <label for="cat" class="col-sm-2 col-form-label">Category</label>
                    <div class="col-sm-7">
                        <select class="form-control" id="cat" name="category">
                            <option>Female</option>
                            <option>Male</option>
                            <option>Kids</option>
                        </select>
                    </div>
                </div>
                <!-- dropdown for sub-category -->
                <div class="form-group row">
                    <label for="sub_category" class="col-sm-2 col-form-label">Sub-Category</label>
                    <div class="col-sm-7">
                        <select class="form-control" name="sub_category" id="sub_category">
                            <option>Clothes</option>
                            <option>Footwear</option>
                            <option>Accessories</option>
                        </select>
                    </div>
                </div>
                <!-- comment box for description of product -->
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-7">
                        <textarea class="form-control" id="description" name="description_" rows="3" required placeholder="Enter description of your product here....."></textarea>
                    </div>
                </div>
                <hr>
                <!-- input for price -->
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Price</label>
                    <div class="col-sm-7">
                        <input type="number" min="0" class="form-control" name="price" placeholder="Price in Rs" required>
                    </div>
                </div>
                <!-- input for condition -->
                <div class="form-group row">
                    <label for="condition_" class="col-sm-2 col-form-label">Condition</label>
                    <div class="col-sm-7">
                        <select class="form-control" id="condition_" name="condition_">
                            <option>Excellent</option>
                            <option>Good</option>
                            <option>Average</option>
                        </select>
                    </div>
                </div>
                <!-- input for size -->
                <div class="form-group row">
                    <label for="size" class="col-sm-2 col-form-label">Size</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" placeholder="Enter Size" id="size" name="size" required>
                    </div>
                </div>
                <!-- input for brand name -->
                <div class="form-group row">
                    <label for="brandname" class="col-sm-2 col-form-label">Brand Name</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" placeholder="Enter Brand name here" id="brandname" name="brandname">
                    </div>
                </div>
                <hr>
                <!-- input for phone number -->
                <div class="form-group row">
                    <label for="phonenum" class="col-sm-2 col-form-label">Phone number</label>
                    <div class="col-sm-7">
                        <input type="tel" minlength="11" maxlength="14" placeholder="Phone number" class="form-control" name="phonenum" id="phonenum"
                            required>
                    </div>
                </div>
                <!-- input for email -->
                <div class="form-group row">
                    <label for="email_sell" class="col-sm-2 col-form-label">Email Address</label>
                    <div class="col-sm-7">
                        <input type="email" placeholder="Enter a valid email" class="form-control" name="email_sell" id="email_sell" required>
                    </div>
                </div>
                <hr>
                <!-- input for provience -->
                <div class="form-group row">
                    <label for="provience" class="col-sm-2 col-form-label">Provience</label>
                    <div class="col-sm-7">
                        <input type="text" placeholder="Enter Provience" class="form-control" name="provience" id="provience" required>
                    </div>
                </div>
                <!-- input for city -->
                <div class="form-group row">
                    <label for="city" class="col-sm-2 col-form-label">City</label>
                    <div class="col-sm-7">
                        <input type="text" placeholder="city" class="form-control" name="city" id="city" required>
                    </div>
                </div>
                <!-- input for postal code -->
                <div class="form-group row">
                    <label for="postalcode" class="col-sm-2 col-form-label">Postal code</label>
                    <div class="col-sm-7">
                        <input type="text" placeholder="Postal code" class="form-control" name="postalcode" id="postalcode" required>
                    </div>
                </div>
                <hr>
                <br>
                <p>By clicking 'Submit' you confirm that you have carefully read and understood all the facts, statements and
                    conditions stated in the Terms of Use & Posting Rules of our website to which you unconditionally agree
                    and accept as true and correct and constituting a binding agreement between us.</p>
                    <br>
                    <button type="submit" class="btn" id="submitbutton"  name="submit" value="submit"><i class="fas fa-sign-in-alt"></i>Submit</button>


            </form>
        </div>
        <!-- 1st card block end here -->
    </div>

</body>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"> </script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>

</html>