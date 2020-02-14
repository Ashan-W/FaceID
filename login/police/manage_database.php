<?php 
include_once('config.php'); 
$query="select * from unidentifiedbodies";
$result=mysqli_query($link,$query);
?>

<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="policelogin.css">
    <link rel="stylesheet" href="../../assets/css/style.css"> 
</head>
<body id="page-top">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container"><a class="navbar-brand" href="#page-top">FaceID</a><button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarResponsive" type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" style="position: fixed; margin-left: 250px;" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto text-uppercase">
                        <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="./manage_database.php">Manage Database</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="./inq_req.php">Manage Inquiries</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="./request3Dmodel.html">Request 3D Model</a></li>
               
                </ul>
            </div>
        </div>
    </nav>

    
    
    <h2 style="color:black; text-align: center; padding-top: 10%;">Unidentified bodies Database</h2>
    <div class="table1" align="center" >

        <table class="table1 table-dark table-striped" style="border:1px solid black;margin-left:auto;margin-right:auto;">
        <thead>
            <tr>
                <th style="padding:10px">SR No</th>
                <th style="padding:10px">Date</th>
                <th style="padding:10px">Police Division</th>
                <th style="padding:10px">Province</th>
            </tr>
        </thead>
        
        <?php
        while($rows=mysqli_fetch_assoc($result))
        {
           ?>
        
            <tr>
                <td style="padding:10px"><?php echo $rows['srno'];?></td>
                <td style="padding:10px"><?php echo $rows['date'];?></td>
                <td style="padding:10px"><?php echo $rows['policearea'];?></td>
                <td style="padding:10px"><?php echo $rows['province'];?></td>

                <form method="get" action="./reqest3d_database.html">
                    </div>
                    <br/><br/>
                    <div><td style="padding:10px; text-align:center">
                        <button typee="button" class="btn btn-secondary" >Edit</button><br/><br/><br/>       
                    </div>
                    <div><td style="padding:10px; text-align:center">
                        <button typee="button" class="btn btn-secondary" >Delete</button><br/><br/><br/>       
                    </div>
                </form>

                
            </tr>

        <?php 
        } 
         ?>
    
    </table>

    </div>
    
    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="../../assets/js/agency.js"></script>
</body>
</html>