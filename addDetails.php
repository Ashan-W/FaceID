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
            <div class="collapse navbar-collapse" style="position: fixed; margin-left: 250px;" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto text-uppercase">
                <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="ManageDatabase.php">Manage Database</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="ManagePortal.php">Manage Portal</a></li>
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

    <?php $results = mysqli_query($link, "SELECT srno,date,policearea,province FROM unidentifiedbodies") ; ?>
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

        <?php while ($row = mysqli_fetch_array($results)) { ?>
            <tr>
                <td style="padding:10px"><?php echo $row['srno'];?></td>
                <td style="padding:10px"><?php echo $row['date'];?></td>
                <td style="padding:10px"><?php echo $row['policearea'];?></td>
                <td style="padding:10px"><?php echo $row['province'];?></td>
            </tr>

        <?php } ?>
    
    </table>

    </div>
    
    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="../../assets/js/agency.js"></script>
</body>
</html>