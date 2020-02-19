<?php 
include '../Admin/AdminFunc.php';
if (!isUCSCLoggedIn()){
    $_SESSION['msg'] = "You must Log in First";
    header('location:../AdminLogin.php');

}
if (isset($_POST['SUBMIT'])){
    $name = $_FILES['file'] ['name'];
    $temp = $_FILES['file'] ['tmp_name'];

    move_uploaded_file($temp,"uploaded/".$name);
    

})

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View requests</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="ucsc.css">
    <link rel="stylesheet" href="../assets/css/style.css"> 

    <style>
        .form1{
            padding-top: 200px;
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
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="ModelsUploaded.php">Models Uploaded</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="../Admin/AdminFunc.php?logout='1'">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class= "form1">
    <form action="ModelsUploaded.php" method="post" enctype="multipart/form-da">
        <input type="file" name="file" />
        <input type="submit" name="submit" value="upload" />
    </form>
    </div>
        
    
    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="../../assets/js/agency.js"></script>
</body>
</html>