<?php 

    include('./Admin/AdminFunc.php');


?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./Admin/adminlogin.css">
    <link rel="stylesheet" href="assets/css/style.css"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
  
    

</head>
<body id="page-top" >
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container"><a class="navbar-brand" href="#page-top">FaceID</a><button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarResponsive" type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" style="position: fixed; margin-left: 250px;" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto text-uppercase">
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="../index.html">about</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="../index.html">Search for Missing</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="../index.html#infoportal">information Portal</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#contact">Contact us</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                          Sign in 
                        </a>
                        <div class="dropdown-menu">
                        <a class="dropdown-item" href="AdminLogin.php">Officials</a>
                          <a class="dropdown-item" href="../registered_user/UserLogin.html">Registered Users</a>
                          
                        </div>
                      </li>
                </ul>
            </div>
        </div>
    </nav>
  

    <div class="container login-container ">
            <div class="row">
                <div class="col-md-6 login-form">
                        
                    <h3>Officials</h3>
                    <form action="AdminLogin.php" method="post">
                       
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
		                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		                    </div>
                            <input type="text" name="nic" class="form-control" placeholder="NIC*" />
                        </div>    
                            <span class="help-block"><?php echo $nic_err; ?></span>
                        
                      
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
		                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		                    </div>
                            <input type="password" name="password" class="form-control" placeholder="Password *" value="" />
                        </div>    
                            <span class="help-block"><?php echo $pass_err; ?></span>
                        
                            
                        <div class="form-group">
                            <input type="submit" name="OfficialsLogin_button" class="btnSubmit" value="Login" />
                        </div>
                    </form>
                </div>
             
            </div>

            <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/agency.js"></script>
</body>
</html>