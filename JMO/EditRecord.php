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
    <link rel="stylesheet" type="text/css" href="./jmologin.css">
    <link rel="stylesheet" href="../assets/css/style.css"> 

    <style>
        h2 {
            color: black;
            text-align: center;
            padding-top: 10%;
            padding-bottom: 10px;
        }

        .table1 {
            margin-left: auto;
            margin-right: auto;
            border:1px solid black;
            margin-left:auto; 
            margin-right:auto; 
            width: 70%"
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
    echo $srno;
    $results = mysqli_query($link, "SELECT * FROM unidentifiedbodies  WHERE srno='$srno'"); 

    ?>


    <h2 >Unidentified bodies</h2>
    <div class="d-flex justify-content-center" style="padding:60px">

    <table class="table1 table-dark table-striped" >
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
        <td  width="600px"> <input type="date" min="current date" class="rounded" name="date"  size="60" value="<?php echo $row['date']; ?> " ></td>
    </tr>
    <tr>
        <th >Province</th>
        <td  width="600px"> <input type="text" class="rounded" name="province"  size="60" value="<?php echo $row['province']; ?>" ></td>
    </tr>
    <tr>
        <th >Police Area</th>
        <td  width="600px"> <input class="rounded" type="text"  name="policearea"  size="60" value="<?php echo $row['policearea']; ?>" ></td>
    </tr>
    <tr>
        <th >District</th>
        <td  width="600px"> <input type="text" class="rounded" name="district"  size="60"  value="<?php echo $row['district']; ?>"></td>
    </tr>
    <tr>
        <th >Estimated Age</th>
        <td  width="600px"> <input type="number" class="rounded" name="est_age"  size="60" value="<?php echo $row['est_age']; ?>" ></td>
    </tr>
    <tr>
        <th >Height</th>
        <td  width="600px"> <input class="rounded" type="number"  name="height"  size="60" value="<?php echo $row['height']; ?>" ></td>
    </tr>
    <tr>
        <th >Weight</th>
        <td  width="600px"> <input type="number" class="rounded" name="weight"  size="60"  value="<?php echo $row['weight']; ?>"></td>
    </tr>
    <tr>
        <th >DNA</th>
        <td  width="600px"> <input type="file" class="rounded" name="dna"  size="60" ><?php echo "<img src ='data:image/jpg;base64,".base64_encode($dna)."'alt = ''/ width=300px height=300px>"; ?></td>
    </tr>
    <tr>
        <th >Fingerprint</th>
        <td  width="600px"> <input type="file" class="rounded" name="fingerprint"  size="60"  ><?php echo "<img src ='data:image/jpg;base64,".base64_encode($fingerprint)."'alt = ''/ width=300px height=300px>"; ?></td>
    </tr>
    <tr>
        <th >Dental</th>
        <td  width="600px"> <input type="file" class="rounded" name="dental"  size="60"  ><?php echo "<img src ='data:image/jpg;base64,".base64_encode($dental)."'alt = ''/ width=300px height=300px>"; ?></td>
    </tr>
    <tr>
        <th >Facial Photograpgh</th>
        <td  width="600px"> <input type="file" class="rounded" name="facial"  size="60"  ><?php echo "<img src ='data:image/jpg;base64,".base64_encode($face)."'alt = ''/ width=300px height=300px>"; ?></td>>
    </tr>
    <tr>
        <th >Clothes</th>
        <td  width="600px"> <input type="file" class="rounded" name="clothes"  size="60"  ><?php echo "<img src ='data:image/jpg;base64,".base64_encode($clothes)."'alt = ''/ width=300px height=300px>"; ?></td>
    </tr>
    <tr>
        <th >Ornaments</th>
        <td  width="600px"> <input type="file" class="rounded" name="ornaments"  size="60"  ><?php echo "<img src ='data:image/jpg;base64,".base64_encode($ornaments)."'alt = ''/ width=300px height=300px>"; ?></td>
    </tr>
    <tr>
        <th >Tattoos</th>
        <td  width="600px"> <input type="file" class="rounded" name="tattoos"  size="60"  ><?php echo "<img src ='data:image/jpg;base64,".base64_encode($tattoos)."'alt = ''/ width=300px height=300px>"; ?></td> 
    </tr>
    <tr>
        <th >Special Remarks</th>
        <td  width="600px"> <input type="text"  name="name"  size="60"  ></td> 
    </tr>
    <form method="post" action="EditRecord.php">
    <tr>
        <th ></th>
        <input type="hidden" name="srno" id="srno" value="<?php echo $row['srno']; ?>" />
        <td style="padding:10px; text-align:center"><button name="updateDetails" type="submit" name="editrecord_btn" class="btn btn-secondary" >Update</button></td>
    </tr>
    </form>
    
    <?php } ?>
    </table>

    </div>


    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="../assets/js/agency.js"></script>
</body>
</html>