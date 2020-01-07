<?php include 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="adminlogin.css">
    <link rel="stylesheet" href="../../assets/css/style.css"> 
</head>
<body id="page-top">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container"><a class="navbar-brand" href="../../index.html">FaceID</a><button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarResponsive" type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" style="position: fixed; margin-left: 250px;" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto text-uppercase">
                <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="ManageDatabase.php">Manage Database</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#search">Manage Portal</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="ViewInquiries.php">View Inquiries</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Manage accounts
</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="ManageOfficials.php">Police & JMOs</a>
                            <a class="dropdown-item" href="ManageRUsers.php">Registered Users</a> 
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section id="infoportal" class="bg-light" style="background-color: #f5f5f5; margin-top: -3%;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase section-heading">Information portal</h2>
                    <h3 class="section-subheading text-muted">About our researches and other things</h3>
                </div>
            </div>
            
            <div class="navigationContainer" align="center" >
                <div class="row1">
                    <div class="col-sm-6 col-md-4 ">
                        <div class="sex">
                            <img src="../../assets/img/imageicon.png" class="class1">
                            <img src="../../assets/img/addicon.png" id="addIcon">
                        </div>
                        <div class="infoportal-caption">
                            <h4><a href="imagegallery.html">Images</a></h4>
                            <p class="text-muted">Image Gallery</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 ">
                        <div class="sex">    
                            <img class="img-fluid" src="../../assets/img/videoicon.png" >
                            <img src="../../assets/img/addicon.png" id="addIcon">
                        </div>
                        <div class="infoportal-caption">
                            <h4><a href="videogallery.html">Videos</a></h4>
                            <p class="text-muted">Video Gallery</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 ">
                        <div class="sex">
                            <img src="../../assets/img/magazineicon.png" class="class1">
                            <img src="../../assets/img/addicon.png" id="addIcon">
                        </div>
                        <div class="infoportal-caption">
                            <h4><a href="imagegallery.html">Magazines</a></h4>
                            <p class="text-muted">Data from Magazines</p>
                        </div>
                    </div>
                </div>
                <div class="row2">
                    <div class="col-sm-6 col-md-4 ">
                        <div class="sex">
                            <img src="../../assets/img/booksicon.png" class="class1">
                            <img src="../../assets/img/addicon.png" id="addIcon">
                        </div>
                        <div class="infoportal-caption">
                            <h4><a href="imagegallery.html">Books</a></h4>
                            <p class="text-muted">Data from Books</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 ">
                        <div class="sex">
                            <img src="../../assets/img/paperarticleicon.png" class="class1">
                            <img src="../../assets/img/addicon.png" id="addIcon">
                        </div>
                        <div class="infoportal-caption">
                            <h4><a href="imagegallery.html">Paper Articles</a></h4>
                            <p class="text-muted">Articles</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 ">
                        <div class="sex">
                            <img src="../../assets/img/othericon.png" class="class1">
                            <img src="../../assets/img/addicon.png" id="addIcon">
                        </div>
                        <div class="infoportal-caption">
                            <h4><a href="imagegallery.html">Other Resources</a></h4>
                            <p class="text-muted">All other resources</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    
</body>
</html>