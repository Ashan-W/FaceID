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
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
<<<<<<< HEAD
    <link rel="stylesheet" type="text/css" href="style_css/welcome.css">
 </head>
<body>
    <div class="header-container">
        <div class="page-header title-container" >
            <img src="./img/2.jpg" alt="regi_user" class="center" width="150" height="200">
            <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>.</h1>
            <h2>Welcome to FACE ID</h2>
        </div>
        <div class="header-btn-cantainer">
            <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
            <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
            <a href="formhospital.html" class="btn btn-primary"> Enter Details</a>
        </div>
    </div>
    <div class="container" align="center">           
        <button class="btn btn-warning" >VIEW INFORMATION PORTAL </button><br/><br/>
        <button class="btn btn-warning">CONTACT THE FORENSIC DEPARTMENT</button><br/><br/>
        <button class="btn btn-warning">SEARCH FOR MISSING PERSON</button><br/><br/>
        <button class="btn btn-warning">ADD DETAILS ABOUT MISSING PERSON</button><br/><br/>
    </div>
=======
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header" >
    <img src="./img/2.jpg" alt="regi_user" class="center" width="150" height="200">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>.</h1>
        <h2>Welcome to FACE ID</h2>
    </div>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
    <p>
        <a href="formhospital.html" class="btn btn-primary"> Enter Details</a>
    </p>
    <div class="container" align="center">
              
                <button class="btn btn-warning" >VIEW INFORMATION PORTAL </button><br/><br/>
                <button class="btn btn-warning">CONTACT THE FORENSIC DEPARTMENT</button><br/><br/>
                <button class="btn btn-warning">SEARCH FOR MISSING PERSON</button><br/><br/>
                <button class="btn btn-warning">ADD DETAILS ABOUT MISSING PERSON</button><br/><br/>
                
              </div>
>>>>>>> a65dca921a8cb392851e4ff3b2bd8c25a4ed2907
</body>
</html>