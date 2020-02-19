<?php 
include '../Admin/AdminFunc.php';
if (!isJMOLoggedIn()){
    $_SESSION['msg'] = "You must Log in First";
    header('location:../AdminLogin.php');
}
?>

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
    
    <style>
        h2 {
            color: black;
            text-align: center;
            padding-top: 10%;
            padding-bottom: 20px;
        }

        .table1 {
            margin-left: auto;
            margin-right: auto;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body id="page-top">
<nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container"><a class="navbar-brand" href="#page-top">FaceID</a><button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarResponsive" type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" style="position: fixed; margin-left: 450px;" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto text-uppercase">
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="Dashboard.php">Dashboard</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="ViewRecords.php">View Records</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="AddDetails.php">Add Details</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="../Admin/AdminFunc.php?logout='1'">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <?php
    $srno = $_POST['srno'];
    echo $id;
    $results = mysqli_query($link, "SELECT * FROM unidentifiedbodies  WHERE srno='$srno'"); 
    

    ?>


    <h2 >Unidentified bodies</h2>
    <div class="d-flex justify-content-center" style="padding:60px">

    <table class="table1 table-dark table-striped" style="border:1px solid black; margin-left:auto; margin-right:auto; width: 70%">
    <?php while ($row = mysqli_fetch_array($results)) { 
        $dna = $row['dna'];
    $fingerprint = $row['fingerprint'];
    $dental = $row['dental'];
    $face = $row['facialphotograph'];
    $clothes = $row['clothes'];
    $ornaments = $row['ornaments'];
    $tattoos = $row['tattoos'];
    ?>

    <tr>
        <th >SR No</th>
        <td><?php echo $row['srno'];?></td>
    </tr>
    <tr>
        <th >Date</th>
        <td><?php echo $row['date'];?></td>
    </tr>
    <tr>
        <th >Province</th>
        <td><?php echo $row['province'];?></td>
    </tr>
    <tr>
        <th >District</th>
        <td><?php echo $row['district'];?></td>
    </tr>
    <tr>
        <th >Police Area</th>
        <td><?php echo $row['policearea'];?></td>
    </tr>
    <tr>
        <th >DNA</th>
        <td><?php echo "<img src ='data:image/jpg;base64,".base64_encode($dna)."'alt = ''/ width=300px height=300px>"; ?></td>
    </tr>
    <tr>
        <th >Fingerprint</th>
        <td><?php echo "<img src ='data:image/jpg;base64,".base64_encode($fingerprint)."'alt = ''/ width=300px height=300px>"; ?></td>
    </tr>
    <tr>
        <th >Dental</th>
        <td><?php echo "<img src ='data:image/jpg;base64,".base64_encode($dental)."'alt = ''/ width=300px height=300px>"; ?></td> 
    </tr>
    <tr>
        <th >Facial Photograpgh</th>
        <td><?php echo "<img src ='data:image/jpg;base64,".base64_encode($face)."'alt = ''/ width=300px height=300px>"; ?></td>
    </tr>
    <tr>
        <th >Clothes</th>
        <td><?php echo "<img src ='data:image/jpg;base64,".base64_encode($clothes)."'alt = ''/ width=300px height=300px>"; ?></td>
    </tr>
    <tr>
        <th >Ornaments</th>
        <td><?php echo "<img src ='data:image/jpg;base64,".base64_encode($ornaments)."'alt = ''/ width=300px height=300px>"; ?></td>
    </tr>
    <tr>
        <th >Tattoos</th>
        <td><?php echo "<img src ='data:image/jpg;base64,".base64_encode($tattoos)."'alt = ''/ width=300px height=300px>"; ?></td> 
    </tr>
    <tr>
        <th >Special Remarks</th>
        <td><?php echo $row['specialremarks'];?></td> 
    </tr>
    <form method="post" action="EditRecord.php">
    <tr>
        <th ></th>
        <input type="hidden" name="srno" id="srno" value="<?php echo $row['srno']; ?>" />
        <td><button type="submit" class="btn btn-secondary" >Edit Details</button></td>
    </tr>
    </form>
    
    <?php } ?>
    </table>

    </div>


    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="../../assets/js/agency.js"></script>
</body>
</html>