<?php 
include '../Admin/AdminFunc.php';
if (!isUCSCLoggedIn()){
    $_SESSION['msg'] = "You must Log in First";
    header('location:../AdminLogin.php');
}?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="modelC.css">
	<link rel="stylesheet" href="../assets/css/style.css"> 

    <style>
        .card-columns{
            padding-top: 150px;
            padding-left: 300px;
            padding-right: 100px;  
        }.card-text{
            color: black;
        }
    </style>
</head>
<body id="page-top">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container"><a class="navbar-brand" href="#page-top">FaceID</a><button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarResponsive" type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" style="position: fixed; margin-left: 450px;" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto text-uppercase">
                <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="dashboard.php">Dashboard</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="Requests.php">View Requests</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="ModelRequests.php">Models Uploaded</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="../Admin/AdminFunc.php?logout='1'">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <?php $results = mysqli_query($link, "SELECT * FROM model_requests WHERE type='1'") ; ?> //type = 1,if model is uploaded
    
    <?php
        //Number of Requests
        $sql ="SELECT COUNT(id) FROM model_requests WHERE type='0'";
        $results1 = $link->query($sql);
        $requests = $results1->fetch_assoc()['COUNT(id)'];

        //Number of Requests
        $sql ="SELECT COUNT(id) FROM model_requests WHERE type='1'";
        $results2 = $link->query($sql);
        $uploaded = $results2->fetch_assoc()['COUNT(id)'];
    ?>

    <div class="card-columns">
        <div class="card bg-secondary">
            <div class="card-body text-center">
                <p class="card-text">Number of Requests</p>
                <p class="card-text"><?php echo $requests;?> </p>
            </div>
        </div>

        <div class="card bg-secondary">
            <div class="card-body text-center">
                <p class="card-text">Number of uploads</p>
                <p class="card-text"><?php echo $uploaded;?> </p>
            </div>
        </div>
    </div>   

    
        
    
    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="../../assets/js/agency.js"></script>
</body>
</html>