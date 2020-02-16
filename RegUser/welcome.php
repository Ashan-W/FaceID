<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Details</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="jmologin.css">
    <link rel="stylesheet" href="../../assets/css/style.css"> 
</head>
<body id="page-top">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container"><a class="navbar-brand" href="#page-top">FaceID</a><button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarResponsive" type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" style="position: fixed; margin-left: 450px;" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto text-uppercase">
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="ViewRecords.php">View Records</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="AddDetails.php">Add Details</a></li>
                    
                </ul>
            </div>
        </div>
    </nav>


    <div class="container">
    <h2>Victim Identification</h2>
    
    <form class="form-inline" style="padding-top:200px;">
        

    <div class="form-group mr-5">
        <label for="srno">SR No</label>
        <input type="text" class="form-control ml-3" id="srno" placeholder="SR No">
    </div>
    <div class="form-group mr-5">
        <label for="date">Date</label>
        <input type="date" class="form-control ml-3" id="date" placeholder="Date">
    </div>
    <div class="form-group mr-5">
    <select class="custom-select">
    <option selected>Select Province</option>
    <option value="1">Central</option>
                                <option value="2">Eastern</option>
                                <option value="3">Northern</option>
                                <option value="4">Southern</option>
                                <option value="5">Western</option>
                                <option value="6">North Western</option>
                                <option value="7">North Central</option>
                                <option value="8">Uva</option>
                                <option value="9">Sabaragamuwa</option> 
</select>
</div>
    <button type="submit" class="btn" id="btnsubmit1">Sign in</button>
</form>
        </div>

        <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="../../assets/js/agency.js"></script>
</body>
</html>