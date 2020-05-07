<?php 
include_once('config.php');
$mysqli=new mysqli('localhost','root','','faceid') or die(mysqli_error($mysqli));
?>

<html lang="en">
<head >
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Police Login</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    
    <link rel="stylesheet" type="text/css" href="./style_css/policelogin.css">
    <link rel="stylesheet" href="../../assets/css/style.css"> 
    <style>
    body {
 /*background-image: url("img/faceid.jpg");*/
 background-color: #cccccc;
}
    </style>
</head>


<body id="page-top">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container"><a class="navbar-brand" href="../../index.html">FaceID</a><button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarResponsive" type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" style="position: fixed; margin-left: 250px;" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto text-uppercase">
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" >Dashboard</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="./manage_database.php">Manage Database</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="./inq_req.php">Manage Inquiries</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="./request3Dmodel.html">Request 3D Model</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="../Admin/AdminFunc.php?logout='1'">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <h2 style="color:black; text-align: center; padding-top: 10%;">Police Department</h2>
    <h3 style="color:black; text-align: center; padding-top: 5%;">Sri Lanka</h3>

    <div class="center"> 
        <img src="./img/1.png" alt="police logo" class="center">
    </div>


    
    <br><br><br>
    <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-2">
                      <div class="card text-white bg-dark mb-3" style="width: 18rem;">
                            <div class="card-header"></div>
                            <div class="card-body">
                              <h5 class="card-title">Model Requests</h5>
                              <p class="card-text">Count: <?php  
                                $sql=$mysqli->query("SELECT * FROM model_requests");
                                  echo mysqli_num_rows($sql);
                       
                                  ?> 
                              </p>
                            </div>
                        </div>
      </div>

      <div class="col-md-2"></div>    
      <div class="col-md-2">
                          
      <div class="card text-white bg-dark mb-3" style="width: 18rem;">
      <div class="card-header"></div>
      <div class="card-body">
          <h5 class="card-title">Unidentified Bodies</h5>
          <p class="card-text">Count: <?php  
                      $sql=$mysqli->query("SELECT * FROM unidentifiedbodies ");
                      echo mysqli_num_rows($sql);
                       ?>
      </div>
     </div>
    </div>
    
    <div class="col-md-2"></div>    
    <div class="col-md-2">
    <div class="card text-white bg-dark mb-3" style="width: 18rem;">
    <div class="card-header"></div>
    <div class="card-body">
        <h5 class="card-title">Request Received</h5>
        <p class="card-text">Count:<?php  
                       $sql=$mysqli->query("SELECT * FROM inquiries ");
                      echo mysqli_num_rows($sql);
                       ?></p>
    </div>
   </div>

    </div>    
    </div>
    <div class="col-md-1"></div>            

                  </div>        
   
   



    
   
   <!-- rgtgrt-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/agency.js"></script>
</body>
