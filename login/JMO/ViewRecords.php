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
            <div class="collapse navbar-collapse" style="position: fixed; margin-left: 600px;" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto text-uppercase">
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="ViewRecords.php">View Records</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="AddDetails.php">Add Details</a></li>
                   
                </ul>
            </div>
        </div>
    </nav>

    <?php $results = mysqli_query($link, "SELECT * FROM unidentifiedbodies where jmo='$username") ; ?>
    <h2 style="color:black; text-align: center; padding-top: 10%;">Unidentified bodies</h2>
    <div class="table1" >

    <table class="table1 table-dark table-striped" style="border:1px solid black;margin-left:auto;margin-right:auto;">
        <thead>
            <tr>
                <th style="padding:10px; text-align:center">SR No</th>
                <th style="padding:10px; text-align:center">Date</th>
                <th style="padding:10px; text-align:center">Province</th>
                <th style="padding:10px; text-align:center">District</th>
                <th style="padding:10px; text-align:center">Police Area</th>
                <th style="padding:10px; text-align:center">DNA</th>
                <th style="padding:10px; text-align:center">Fingerprint</th>
                <th style="padding:10px; text-align:center">Dental</th>
                <th style="padding:10px; text-align:center">Facial Photograpgh</th>
                <th style="padding:10px; text-align:center">Clothes</th>
                <th style="padding:10px; text-align:center">Ornaments</th>
                <th style="padding:10px; text-align:center">Tattoos</th>
                <th style="padding:10px; text-align:center">Special Remarks</th>
                <th style="padding:10px; text-align:center"></th>
                
            </tr>
        </thead>

        <?php while ($row = mysqli_fetch_array($results)) { ?>
            <tr>
                <td style="padding:10px; text-align:center"><?php echo $row['srno'];?></td>
                <td style="padding:10px; text-align:center"><?php echo $row['date'];?></td>
                <td style="padding:10px; text-align:center"><?php echo $row['province'];?></td>
                <td style="padding:10px; text-align:center"><?php echo $row['district'];?></td>
                <td style="padding:10px; text-align:center"><?php echo $row['policearea'];?></td>
                <td style="padding:10px; text-align:center"><?php echo $row['dna'];?></td>
                <td style="padding:10px; text-align:center"><?php echo $row['fingerprint'];?></td>
                <td style="padding:10px; text-align:center"><?php echo $row['dental'];?></td>   
                <td style="padding:10px; text-align:center"><?php echo $row['facialphotograph'];?></td>
                <td style="padding:10px; text-align:center"><?php echo $row['clothes'];?></td>
                <td style="padding:10px; text-align:center"><?php echo $row['ornaments'];?></td>
                <td style="padding:10px; text-align:center"><?php echo $row['tattoos'];?></td> 
                <td style="padding:10px; text-align:center"><?php echo $row['specialremarks'];?></td> 
                <td style="padding:10px; text-align:center"><button type="button" class="btn btn-secondary">Edit</button></td>
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