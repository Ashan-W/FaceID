<?php 
    include('./RegUser/UserFunc.php');
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Registration</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="userlogin.css">
    <link rel="stylesheet" href="../../assets/css/style.css">   
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
     <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
     <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body id="page-top"  >
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container"><a class="navbar-brand" href="#page-top">FaceID</a><button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarResponsive" type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" style="position: fixed; margin-left: 250px;" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto text-uppercase">
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="../../index.html">about</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="../../index.html">Search for Missing</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="../../index.html#infoportal">information Portal</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#contact">Contact us</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                          Sign in 
                        </a>
                        <div class="dropdown-menu">
                        <a class="dropdown-item" href="../Admin/AdminLogin.php">Officials</a>
                          <a class="dropdown-item" href="./UserLogin.html">Registered Users</a>
                          
                        </div>
                      </li>
                </ul>
            </div>
        </div>
    </nav>
  

<div class="container d-flex justify-content-center" style="padding-top:150px;">
    <div class="col-lg-6">
        <div class="card bg-light" style="background-color:red">
        <article class="card-body mx-auto" style="max-width: 400px;">
            <h4 class="card-title mt-3 text-center">Create Account</h4>
            
            <form action="Register.php" method="post">

            <!--Full name -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                </div>
                <input name="name" class="form-control" placeholder="Full name" type="text" required>
            </div> 

            <!--Username -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                </div>
                
                <input name="username" class="form-control" placeholder="Username" type="text" required>
            </div> 
            
            <!-- Email Address -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                </div>
                <input name="email" class="form-control" placeholder="Email address" type="email" required>
            </div> 
            
            <!-- Contact Number -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                </div>
                <input name="contact" class="form-control" placeholder="Phone number" type="text" required>
            </div> 
            
            <!-- NIC -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-id-badge"></i> </span>
                </div>
                <?php echo $nic_err;?></span>
                <input name="nic" class="form-control" placeholder="National Identity Card" type="text" required>
                <span class="error">
                
            </div> 
            
            <!-- Password -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                </div>
                <input class="form-control" name="password" placeholder="Create password" type="password" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                <span class="error"><?php echo $pass_err;?></span>
            </div> 
            
            <!-- Confirm Password -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                </div>
                <input class="form-control" name="confirm_password" placeholder="Repeat password" type="password" required>
            </div> 
            
                                                
            <div class="form-group">
                <button type="submit" name="reg_button" class="btnsubmit btn-block"> Create Account  </button>
            </div> 

            <p class="text-center">Have an account? <a href="UserLogin.php">Log In</a> </p>                                                                 
            </form>
        </article>
    </div>  <!--container end.//-->
    
    </div>
</div>



<script>
var myInput = document.getElementById("password");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");



// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
}

  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}

</script>

    
            <script src="../../assets/js/jquery.min.js"></script>
            <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
            <script src="../../assets/js/agency.js"></script>
</body>
</html>