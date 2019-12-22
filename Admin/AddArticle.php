<?php 
include 'AdminFunc.php';
if (!isAdminLoggedIn()){
    $_SESSION['msg'] = "You must Log in First";
    header('location:../AdminLogin.php');
}?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Article</title>
    <link rel="stylesheet" href="../bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./adminlogin.css">
    <link rel="stylesheet" href="../assets/css/style.css"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

</head>
<body id="page-top">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container"><a class="navbar-brand" href="../index.php">FaceID</a><button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarResponsive" type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" style="position: fixed; margin-left: 400px;" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto text-uppercase">
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="Dashboard.php">Dashboard</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="ManagePortal.php">Manage Portal</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="ViewInquiries.php">View Inquiries</a></li>
                    <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Manage accounts</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="AddUser.php">Add New Account</a>
                                <a class="dropdown-item" href="ManageOfficials.php">Police,UCSC & JMOs</a>
                                <a class="dropdown-item" href="ManageRUsers.php">Registered Users</a>
                            </div>
                    </li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="AdminFunc.php?logout='1'">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <h2 style="color:black; text-align: center; padding-top: 10%;">Add new Article</h2>

    <form method="post" action = "ManagePortal.php">
        <div class="d-flex justify-content-center form-group" style="padding:60px">
            <table class="table-dark table-striped" style="border:1px solid black;margin-left:auto;margin-right:auto;">
                <tr>
                    <th style="padding:20px;text-align:center" width="200px">Article</th>
                    <td style="text-align:center"  width="600px"> <input type="text" class="rounded"  style="width:95%;border:none;border:1px solid white;background-color:transparent;color:white;" name="article" size="500"></td>
                </tr>
                <tr>
                    <th style="padding:20px;text-align:center" width="200px"></th>
                    <td style="text-align:center"  width="600px"> <button class="btn btn-secondary" name="AddArti" formmethod="post" type="submit">Submit</td>
                </tr>
            </table>
        </div>    
    </form>
    
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="../assets/js/agency.js"></script>
</body>
</html>