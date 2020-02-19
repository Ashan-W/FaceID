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
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./adminlogin.css">
    <link rel="stylesheet" href="../assets/css/style.css"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

    <style>
        .card-columns{
            padding-top: 50px;
            padding-left: 300px;
            padding-right: 100px;  
        }.card-text{
            color: black;
            font-size:
        }h2{
            padding-top:150px;
            color:black;
            text-align:center;
        }
    </style>

    
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
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                              Manage accounts
                            </a>
                            <div class="dropdown-menu">
                            <a class="dropdown-item" href="AddUser.php">Add New Account</a>
                            <a class="dropdown-item" href="ManageOfficials.php">Police,Model Creators & JMOs</a>
                              <a class="dropdown-item" href="ManageRUsers.php">Registered Users</a>  
                            </div>
                          </li>
                          <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="AdminFunc.php?logout='1'">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <?php
        //Total number of Registered Users
        $sql ="SELECT COUNT(nic) FROM reg_users";
        $results1 = $link->query($sql);
        $regUsers = $results1->fetch_assoc()['COUNT(nic)'];

        //Total number of Inquiries to be checked
        $sql ="SELECT COUNT(id) FROM inquiries WHERE type='0' ";
        $results2 = $link->query($sql);
        $inquiries1 = $results2->fetch_assoc()['COUNT(id)'];

        //Total number of Inquiries checked
        $sql ="SELECT COUNT(id) FROM inquiries WHERE type='1' ";
        $results3 = $link->query($sql);
        $inquiries2 = $results3->fetch_assoc()['COUNT(id)'];

        //Total number of JMO accounts
        $sql ="SELECT COUNT(nic) FROM officials WHERE type= '0' ";
        $results4 = $link->query($sql);
        $jmos = $results4->fetch_assoc()['COUNT(nic)'];

        //Total number of Police accounts  
        $sql ="SELECT COUNT(nic) FROM officials WHERE type= '1' ";
        $results5 = $link->query($sql);
        $police = $results5->fetch_assoc()['COUNT(nic)'];

        //Total number of JMOs
        $sql ="SELECT COUNT(nic) FROM officials WHERE type= '0' ";
        $results6 = $link->query($sql);
        $model = $results6->fetch_assoc()['COUNT(nic)'];

        $percentage = ($inquiries1/($inquiries1+$inquiries2))*100;
    ?>
    <h2>Accounts </h2>
    <div class="card-columns">
        <div class="card bg-secondary">
            <div class="card-body text-center">
                <p class="card-text font-weight-bold">Number of Registered Users</p>
                <p class="card-text"><?php echo $regUsers;?> </p>
            </div>
        </div>

        <div class="card bg-secondary">
            <div class="card-body text-center">
                <p class="card-text font-weight-bold">Number of JMO accounts</p>
                <p class="card-text"><?php echo $jmos;?> </p>
            </div>
        </div>

        <div class="card bg-secondary">
            <div class="card-body text-center">
                <p class="card-text font-weight-bold">Number of Police accounts</p>
                <p class="card-text"><?php echo $police;?> </p>
            </div>
        </div>

        <div class="card bg-secondary">
            <div class="card-body text-center">
                <p class="card-text font-weight-bold">Number of model creators</p>
                <p class="card-text"><?php echo $model;?> </p>
            </div>
        </div>
    </div>   
    <h2>Inquiries </h2>
    <div class="card-columns">
    <div class="card bg-secondary">
            <div class="card-body text-center">
                <p class="card-text font-weight-bold">Number of Inquiries</p>
                <p class="card-text"><?php echo $inquiries1;?> </p>
            </div>
        </div>

        <div class="card bg-secondary">
            <div class="card-body text-center">
                <p class="card-text font-weight-bold">Number of Inquiries checked</p>
                <p class="card-text"><?php echo $inquiries2;?> </p>
            </div>
        </div>
    </div> 

    <div class="card-columns">
    <div class="card bg-secondary">
            <div class="card-body text-center">
                <p class="card-text font-weight-bold">Percentage of Inquiries checked</p>
                <p class="card-text"><?php echo $percentage;?> % </p>
            </div>
        </div>
    </div>

    <div class="card-columns">
    <div id="piechart" style="width: 900px; height: 500px;"></div>

    </div>
    
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="../assets/js/agency.js"></script>
</body>
</html>