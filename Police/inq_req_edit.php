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
    <title>Admin</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="adminlogin.css">
    <link rel="stylesheet" href="../../assets/css/style.css"> 
</head>
<body id="page-top">

<?php
echo($rows[id]);
?>
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container"><a class="navbar-brand" href="../../index.html">FaceID</a><button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarResponsive" type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false"
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

        <h2 style="color:black; text-align: center; padding-top: 10%;">Inquiries Of Registered Users</h2>
        
    <div class="table1" align="center">

        <table class="table1 table-dark table-striped" style="border:1px solid black;margin-left:auto;margin-right:auto;">
        <thead>
        <tr>
                <th style="padding:10px">Name</th>
                <th style="padding:10px">Email Address</th>
                <th style="padding:10px">Contact Number</th>
                <th style="padding:10px">Message</th>
            </tr>
        </thead>
        <?php
        while($rows=mysqli_fetch_assoc($result))
        {
    ?>
        
            <tr>
                <td style="padding:10px"><?php echo $rows['id'];?></td>
                <td style="padding:10px"><?php echo $rows['email'];?></td>
                <td style="padding:10px"><?php echo $rows['phone'];?></td>
                <td style="padding:10px"><?php echo $rows['message'];?></td>
                <td style="padding:10px; text-align:center"><button type="button" class="btn btn-secondary">Edit</button></td>
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