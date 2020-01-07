<?php

// Initialize the session
session_start();
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username; 
                            
                            // Redirect user to welcome page
                            header("location: ManageRUsers.html");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Admin Login</title>
    <link rel="stylesheet" href="bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="../assets/css/material-kit.css?v=2.0.6" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <!-- <link href="../assets/css/demo.css" rel="stylesheet" /> -->

</head>
<body id="page-top">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container"><a class="navbar-brand" href="#page-top">FaceID</a><button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarResponsive" type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" style="position: fixed; margin-left: 250px;" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto text-uppercase">
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#about">about</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#search">Search for Missing</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#infoportal">information Portal</a></li>
                    <!-- <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#portal">Portal</a></li> -->
                    <!-- <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#database">unidentified database</a></li> -->
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#contact">Contact us</a></li>
                    <li>
                        <div class="dropdown" style="margin-left: 180px; ">
                            <button type="button" class="btn btn-primary dropdown-toggle btn-signIN"  data-toggle="dropdown">
                            Sign In
                            </button>
                            <div class="dropdown-menu" >
                                <a class="dropdown-item" href="./login/admin/admin.php">Admin</a>
                                <a class="dropdown-item" href="./login/police/police.php">Police</a>
                                <a class="dropdown-item" href="./login/registered_user/login.php">Registered User</a>
                            </div>
                      </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="page-header header-filter" style="background-image: url('../../assets/img/img/profile_city.jpg'); background-size: cover; background-position: top center;height:100vh">
    <!-- <div class="container">
      <div class="row" style="padding-top:180px;">
        <div class="col-lg-4 col-md-6 ml-auto mr-auto">
          <div class="card card-login" style="padding:50px;background-color:#eee;border: solid #222">
            <form class="form" method="" action="" >
              <div class="card-header card-header-primary text-center">
                <h4 class="card-title">Login</h4>
              </div>
              <br>
              <div class="card-body">
                <div class="input-group">
                  <div class="input-group-prepend" >
                    <span class="input-group-text">
                      <i class="material-icons">face</i>
                    </span>
                  </div>
                  <input type="text" class="form-control" placeholder="First Name...">
                </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">mail</i>
                    </span>
                  </div>
                  <input type="email" class="form-control" placeholder="Email...">
                </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  </div>
                  <input type="password" class="form-control" placeholder="Password...">
                </div>
              </div>
              <div class="footer text-center">
                <a href="#pablo" class="btn btn-lg" style="background-color:#0c1446">Get Started</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div> -->

    <div class="bg-img" style="background-image: url('../../assets/img/Gallery/Slides/party.jfif');">                                
    <div class="overlay"></div>
  </div>

        <div class="container text-center" style="padding-top:200px;font-family: 'Roboto';">
            <div class="row justify-content-md-center col-lg-10">
                <div class="col-md-6 col-lg-6" style="padding:50px;background-color: #223;border-radius: 30px;border: solid royalblue;">
                    <!-- Logo eka danna -->
                    <h4 style="color:white"> Login </h4>
                    <br>

                    <form #form="" autocomplete="off">
                        <div class="form-group">
                            <label for="Email"></label>
                            <input required ngModel name="email"  id="email" class="form-control" placeholder="Email Address..." style="background-color: #223;" />
                        </div>
                        <div class="form-group">
                            <label for="Password"></label>
                            <input required name="password"id="password" type="password" class="form-control  white-text" style="background-color: #223;"  placeholder="Password..." >
                        </div>
                        <br>
                        <div class="col-lg-9 container text-center">
                            <button class="btn btn-lg btn-round btn-block white-text" style="background-color: royalblue;color:white"> Log in </button>
                        </div>
                        <a class="button-cus btn" href="#"> Dont have an account ? Sign up Here </a>
                        <a class="button-cus btn" href="#"> Forgot your Password ? </a>          
                    </form>
                </div>
            </div>



</body>
</html>