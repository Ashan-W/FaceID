<?php 
    // include './RegUser/UserFunc.php';

    // if (!isUserLoggedIn()){
    //     $_SESSION['msg'] = "You must Log in First";
    //     header('location:../UserLogin.php');
    // }
?>

<!DOCTYPE html>
<html>
<head>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>FaceID</title>
    <link rel="stylesheet"  href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>
<body id="page-top" style="background-color:white;">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container"><a class="navbar-brand" href="./index.php">FaceID</a><button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarResponsive" type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" style="position: fixed; margin-left: 250px;" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto text-uppercase">
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#about">about</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#search">Search for Missing</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#infoportal">information Portal</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#contact">Contact us</a></li>
                    <li class="nav-item dropdown">
                    <button type="button" class="btn btn-primary dropdown-toggle btn-signIN"  data-toggle="dropdown">
                            Sign In
                    </button>
                    <div class="dropdown-menu" >
                        <a class="dropdown-item" href="./login/admin/AdminLogin.php">Oficials</a>
                        <a class="dropdown-item" href="./login/registered_user/Userlogin.html">Registered User</a>
                    </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<!-- sending request abt resulted person -->
<div class="row" style=padding-top:160px;>
    <div class="col-lg-12">
        <form action="./send.php" method="POST" id="contactForm" name="contactForm" onsubmit="return checking()">
            <div class="form-row">
                <div class="col col-md-6 container-fluid">
                    <div class="form-group"><input class="form-control" type="text" required="" name="name" placeholder="Your Name *"><small class="form-text text-danger flex-grow-1 help-block lead"></small></div>
                    <div class="form-group"><input class="form-control" type="email" required="" name="email" placeholder="Your Email *"><small class="form-text text-danger help-block lead"></small></div>
                    <div class="form-group"><input class="form-control" type="tel" required="" name="phone" placeholder="Your Phone *"><small class="form-text text-danger help-block lead"></small></div>
                    <div class="form-group"><textarea class="form-control" required="" name="message" placeholder="Your Message *"></textarea><small class="form-text text-danger help-block lead"></small></div>
                    <div calss="form-group"><input class="form-control" type="file" name="picture" placeholder="Upload Image *" accept="image/*"><small class="form-text text-danger help-block lead"></small></div>
                </div>
                <div class="col-lg-12 text-center">
                    <div id="success"></div><button class="btn btn" type="submit" id="sendMessage">Send Message</button></div>
                </div>
            </div>
        </form>

        <!-- Checking the form validation -->
        <script>
            function checking(){
                
                var empt = document.forms["contactForm"]["name"].value;
                var empt1 = document.forms["contactForm"]["email"].value;
                var empt2 = document.forms["contactForm"]["phone"].value;
                var empt3 = document.forms["contactForm"]["message"].value;
                if (empt == "" || empt1 == "" || empt2 == "" || empt3 == ""){
                    alert("Please input a Value to Submit");
                    return false;
                }
                    return true; 
            }
        </script>
    </div>
</div>
   
</body>
</html>