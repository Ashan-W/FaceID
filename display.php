<!DOCTYPE html>
<html>
<head>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>FaceID</title>
    <link rel="stylesheet"  href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700">

    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>
<body id="page-top" style="background-color:white;">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
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
    </nav>
     
<div class="container-fluid bg-dark">
    <h1 align="center" class="text-white">3D Model
    </h1>
</div>

<?php    
        $servername = "localhost";
        $username   = "root";
        $password   = "";
        $dbname     = "faceid";
        
        // Create connection
        $con = mysqli_connect($servername, $username, $password, $dbname);
        
        // Check connection
        if (!$con) {
            die("Connection failed: " . mysqli_connect_error());
        }
        
        $target="vids";
        $vid_url =$target."/";
        $result = mysqli_query($con,"SELECT * FROM videos ORDER BY id");
        //$row = mysqli_fetch_assoc($result);
        echo '<div class="container-fluid">
        <div class="row">
        ';
        while($row=mysqli_fetch_array($result))
        {
            echo '<div class="col-md-6" style="margin-bottom:2%";>';
            $video = $vid_url.$row["file_name"];
            $type = $row["type"];
            ?>
<div class="card">
    <div class="card-body bg-dark text-white">
        <p class="card-text font-weight-bold" align="center"><?php echo $row["file_name"]; ?></p>
    </div>
    <video width="100%" controls>
        <source src="<?php echo $video; ?>" type="video/<?php echo $type; ?>">
    </video>

</div>
</div>
<?php
    
        }
        echo '</div> </div>';
    ?>
<div class="container-fluid" style="margin-top:5%;">
    <a href="index.php" class="btn btn-info btn-block">
        <i class="fa fa-home" aria-hidden="true"></i>
        Home</a>
</div>