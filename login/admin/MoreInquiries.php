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
    
    <?php
    $id = $_GET['id'];
    echo $id;
    $results = mysqli_query($link, "SELECT * FROM inquiries WHERE id='$id'"); 

    ?>

    <h2 style="color:black; text-align: center; padding-top: 10%;">Inquiries</h2>
    <div class="" >
        <div class="d-flex justify-content-center" style="padding:60px">
        
        <table class="table-dark table-striped" style="border:1px solid black;margin-left:auto;margin-right:auto;">
        
        <?php while ($row = mysqli_fetch_array($results)) { ?>
            <tr>
                <th style="padding:20px;text-align:center" width="300px">Name</th>
                <td style="padding:10px; text-align:center"><?php echo $row['name'];?></td>
            </tr>
            <tr>
                <th style="padding:20px;padding-left:50px;padding-right:50px; text-align:center" width="300px">Email Address</th>
                <td style="padding:10px; text-align:center"><?php echo $row['email'];?></td>
            </tr>
            <tr>
                <th style="padding:20px;padding-left:50px;padding-right:50px; text-align:center" width="300px">Contact Number</th>
                <td style="padding:10px; text-align:center"><?php echo $row['phone'];?></td>
            </tr>
            <tr>
                <th style="padding:20px;padding-left:50px;padding-right:50px; text-align:center" width="300px">Message</th>
                <td style="padding:10px; text-align:center"><?php echo $row['message'];?></td>
            </tr>
            <tr> 
                 <th style="padding:20px;padding-left:50px;padding-right:50px; text-align:center" width="300px">Images</th> 
                <!-- <td style="padding:10px; text-align:center"><?php echo $row['picture'];?></td> -->
             </tr> 


        <?php } ?>
    
    </table>



        </div>    
        
    </div>
    
    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="../../assets/js/agency.js"></script>
</body>
</html>