<!DOCTYPE html>
<html>
<head>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>FaceID</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body id="page-top" >
    <!-- <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container"><a class="navbar-brand" href="#page-top">FaceID</a><button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarResponsive" type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false"
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
    </nav> -->

<div class="container">

<?php
                if(isset($_POST['submit'])){

                    $con = mysqli_connect("localhost","root","","faceid");
                    $key = $_POST['dist'] ;
                    $key2 = $_POST['polarea'] ;
                    $key3 = $_POST['fday'] ;

                    if (!$con){
                        die('Could not connect: ' . mysqli_error());
                    } 
                    
                    //checking which type to search
                    
                    if($key && $key!="Select District"){
                        $sql="SELECT * FROM unidentifiedbodies WHERE district = '$key' ";
                        
                    }
                    if ($key2 && $key2!="Select Police Area"){
                        $sql="SELECT * FROM unidentifiedbodies WHERE policearea = '$key2' ";
                    }
                    if ($key3){
                        $sql="SELECT * FROM unidentifiedbodies WHERE date > '$key3' ";
                        echo $key;
    
                    }
                    
                    // echo $sql;
                    
                    $result = mysqli_query($con,$sql);
                    
                    if (!$result) {
                        die('Error: ' . mysqli_error($con));
                    }?>

                    <!-- <div class="row"> -->
                    <?php
                    While ($row = mysqli_fetch_assoc($result)){ ?>
                        <!-- <div> -->
                        <p><img src="./assets/img/faceid.jpg" width="250px" height="150px" alt="sometext" hspace="15"/></p>
                        <?php
                        // echo "img src=".$dna."/"." width=100 height=100";
                        echo $row['date'];
                        echo $row['policearea'];
                        echo $row['province'];
                        echo $row['district'];
                        echo "</br>";?>
                        <!-- </div> -->
                        <?php

                    }?>

                    <!-- </div> -->
                                  
                <?php    
                }

            ?>
</div>

</html>