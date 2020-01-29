<?php include 'config.php'; 

$nic = $_GET['nic'];
    $results = mysqli_query($link, "SELECT * FROM reg_users WHERE NIC='$nic'") ; 

if(isset($_POST['update'])){
  $name = mysqli_real_escape_string($link,$_POST['name']);
  $username = mysqli_real_escape_string($link,$_POST['username']);
  $email = mysqli_real_escape_string($link,$_POST['email']);
  $contact = mysqli_real_escape_string($link,$_POST['contact']);



  $sql = "UPDATE reg_users SET ";
  if($name != NULL){
    $sql = $sql . "Name='$name',";
  }
  if($username != NULL){
    $sql = $sql . "Username= '$username',";
  }
  if($email != NULL){
    $sql = $sql . "Email='$email',";
  }
  if($contact != NULL){
    $sql = $sql . "Contact='$contact',";
  }
  


  $sql=rtrim($sql,", ");
  $sql = $sql . " WHERE NIC='$nic'";

  if($link->query($sql) == TRUE){
    echo "<script type='text/javascript'>alert('User updated successfully!');
    window.location='ManageOfficials.php';
    </script>";
  }else{
   $error =  "Error: " .$sql . "<br>".$link->error;
 }
}
?>


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
        <div class="container"><a class="navbar-brand" href="#page-top">FaceID</a><button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarResponsive" type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" style="position: fixed; margin-left: 400px;" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto text-uppercase">
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#search">Manage Portal</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="ViewInquiries.php">View Inquiries</a></li>
                    <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                              Manage accounts
                            </a>
                            <div class="dropdown-menu">
                            <a class="dropdown-item" href="ManageOfficials.php">Police,UCSC & JMOs</a>
                              <a class="dropdown-item" href="ManageRUsers.php">Registered Users</a>
                              
                            </div>
                          </li>
                </ul>
            </div>
        </div>
    </nav>

    section id="main-content">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="stat-widget-two">
                                        <div class="stat-content">
                                            <div class="stat-text">Today Expenses </div>
                                            <div class="stat-digit"> <i class="fa fa-usd"></i>8500</div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success w-85" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="stat-widget-two">
                                        <div class="stat-content">
                                            <div class="stat-text">Income Detail</div>
                                            <div class="stat-digit"> <i class="fa fa-usd"></i>7800</div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-primary w-75" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="stat-widget-two">
                                        <div class="stat-content">
                                            <div class="stat-text">Task Completed</div>
                                            <div class="stat-digit"> <i class="fa fa-usd"></i> 500</div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-warning w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="stat-widget-two">
                                        <div class="stat-content">
                                            <div class="stat-text">Task Completed</div>
                                            <div class="stat-digit"> <i class="fa fa-usd"></i>650</div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-danger w-65" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /# card -->
                            </div>
                            <!-- /# column -->
                        </div>
                     


    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="../../assets/js/agency.js"></script>
</body>
</html>