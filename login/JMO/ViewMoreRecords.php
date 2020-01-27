<?php include 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Records</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="jmologin.css">
    <link rel="stylesheet" href="../../assets/css/style.css"> 
</head>
<body id="page-top">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container"><a class="navbar-brand" href="#page-top">FaceID</a><button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarResponsive" type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" style="position: fixed; margin-left: 450px;" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto text-uppercase">
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="ViewRecords.php">View Records</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="AddDetails.php">Add Details</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="ModelRequests.php">3D Model Requests</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <?php
    $srno = $_GET['srno'];
    echo $id;
    $results = mysqli_query($link, "SELECT * FROM unidentifiedbodies  WHERE srno='$srno'"); 

    ?>


    <h2 style="color:black; text-align: center; padding-top: 10%;">Unidentified bodies</h2>
    <div class="table1" >

    <table class="table1 table-dark table-striped" style="border:1px solid black; margin-left:auto; margin-right:auto; width: 70%">
    <?php while ($row = mysqli_fetch_array($results)) { ?>

    <tr>
        <th style="padding:20px; text-align:center">SR No</th>
        <td style="padding:10px; text-align:center"><?php echo $row['srno'];?></td>
    </tr>
    <tr>
        <th style="padding:20px; text-align:center">Date</th>
        <td style="padding:10px; text-align:center"><?php echo $row['date'];?></td>
    </tr>
    <tr>
        <th style="padding:20px; text-align:center">Province</th>
        <td style="padding:10px; text-align:center"><?php echo $row['province'];?></td>
    </tr>
    <tr>
        <th style="padding:20px; text-align:center">District</th>
        <td style="padding:10px; text-align:center"><?php echo $row['district'];?></td>
    </tr>
    <tr>
        <th style="padding:20px; text-align:center">Police Area</th>
        <td style="padding:10px; text-align:center"><?php echo $row['policearea'];?></td>
    </tr>
    <tr>
        <th style="padding:20px; text-align:center">DNA</th>
        <td style="padding:10px; text-align:center"><?php echo $row['dna'];?></td>
    </tr>
    <tr>
        <th style="padding:20px; text-align:center">Fingerprint</th>
        <td style="padding:10px; text-align:center"><?php echo $row['fingerprint'];?></td>
    </tr>
    <tr>
        <th style="padding:20px; text-align:center">Dental</th>
        <td style="padding:10px; text-align:center"><?php echo $row['dental'];?></td> 
    </tr>
    <tr>
        <th style="padding:20px; text-align:center">Facial Photograpgh</th>
        <td style="padding:10px; text-align:center"><?php echo $row['facialphotograph'];?></td>
    </tr>
    <tr>
        <th style="padding:20px; text-align:center">Clothes</th>
        <td style="padding:10px; text-align:center"><?php echo $row['clothes'];?></td>
    </tr>
    <tr>
        <th style="padding:20px; text-align:center">Ornaments</th>
        <td style="padding:10px; text-align:center"><?php echo $row['ornaments'];?></td>
    </tr>
    <tr>
        <th style="padding:20px; text-align:center">Tattoos</th>
        <td style="padding:10px; text-align:center"><?php echo $row['tattoos'];?></td> 
    </tr>
    <tr>
        <th style="padding:20px; text-align:center">Special Remarks</th>
        <td style="padding:10px; text-align:center"><?php echo $row['specialremarks'];?></td> 
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