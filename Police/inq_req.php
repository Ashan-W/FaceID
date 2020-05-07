<?php 
include_once('config.php'); 
$query="select * from inquiries";
$result=mysqli_query($link,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Police</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="adminlogin.css">
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
                        <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="./dashboard.php">Dashboard</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="./manage_database.php">Manage Database</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="./inq_req.php">Manage Inquiries</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="./request3Dmodel.html">Request 3D Model</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="../Admin/AdminFunc.php?logout='1'">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

        <h2 style="color:black; text-align: center; padding-top: 10%;">Inquiries Of Registered Users</h2>
        
    <div class="table1" align="center">

        <table class="table1 table-dark table-striped" style="border:1px solid black;margin-left:10%;margin-right:10%;">
        <thead>
            <tr>
                <th style="padding:10px">Name</th>
                <th style="padding:10px">Email Address</th>
                <th style="padding:10px">Contact Number</th>
                <th style="padding:10px">Message</th>
                <th style="padding:10px">Respond</th>
            </tr>
        </thead>
        <?php
        while($rows=mysqli_fetch_assoc($result))
        {
    ?>
        
            <tr>
                <td style="padding:10px"><?php echo $rows['name'];?></td>
                <td style="padding:10px"><?php echo $rows['email'];?></td>
                <td style="padding:10px"><?php echo $rows['phone'];?></td>
                <td style="padding:10px"><?php echo $rows['message'];?></td>
                <td style="padding:10px"><?php echo $rows['respond'];?></td>
                <td>
                    <!-- <form method="GET" action="inq_req_edit.php">
                    <input type="hidden" name="edit" value= $rows['id']>
                    <input type="submit" name="edits" value = "View">
                    </form> -->
                    <form method="GET" action="inq_req_edit.php">
                    <div><td style="padding:10px; text-align:center">
                        <a href="inq_req_edit.php? edit=<?php echo $rows['id']; ?>"
                        <button type="button" class="btn btn-secondary"  >View</button></a>  
                         
                    </div>
                    </form>
                    </td>
            </tr>

        <?php } 
         ?>
    </table>

    </div>
    
    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="../../assets/js/agency.js"></script>
</body>
</html>