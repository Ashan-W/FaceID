<!DOCTYPE html>
<html>
<head>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>FaceID</title>
    <link rel="stylesheet"  href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>
<body id="page-top" style="background-color:white;">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container"><a class="navbar-brand" href="#page-top">FaceID</a><button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarResponsive" type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" style="position: fixed; margin-left: 250px;" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto text-uppercase">
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#about">about</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#search">Search for Missing</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#infoportal">information Portal</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#contact">Contact us</a></li>
                    <li class="nav-item dropdown">
                    <button type="button" class="btn btn-primary dropdown-toggle btn-signIN"  data-toggle="dropdown">
                            Sign In
                    </button>
                    <div class="dropdown-menu" >
                        <a class="dropdown-item" href="./login/admin/AdminLogin.php">Oficials</a>
                        <a class="dropdown-item" href="./login/registered_user/Userlogin.html">Registered User</a>
                    </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<div class="container" style="margin-top: 120px;">

<!-- connection -->
<?php
    if(isset($_POST['respondsubmit'])){
        $srno =  $_POST['srno'];
        $connn = mysqli_connect("localhost","root","","faceid");
        if (!$connn){
            die('Could not connect: ' . mysqli_error());
        }

        // selecting details relevent to the button click 
        $sql = "SELECT * FROM unidentifiedbodies WHERE srno='".$srno."';";
        
        $result = mysqli_query($connn,$sql);  
        
        if (!$result) {
            die('Error: ' . mysqli_error($connn));
        }?>

    <!-- table with fully detailed result     -->
    <table class="table">
    <?php
        While ($row = mysqli_fetch_assoc($result)) {
        $a=$row['facialphotograph']; //set image into variable a
        $b=$row['dna'];
        $c=$row['fingerprint'];
        $d=$row['dental'];
        $e=$row['clothes'];
        $f=$row['ornaments'];
        $g=$row['tattoos'];  ?>
        <thead class="thead-dark">
            <tr>
                <th scope="col">Section</th>
                <th scope="col">Description</th>
            <tr>
        </thed>
        <tbody>
            <tr>
                <th scope="row">Facial  Photograph</th>
                <td> <?php echo "<img src ='data:image/jpg;base64," . base64_encode($a) ."' alt = ''/ width=100px height=100px> ";?> </td>
            </tr>
            <tr>
                <th scope="row">ID</th>
                <td> <?php echo $row['srno']; ?> </td>
            </tr>
            <tr>
                <th scope="row">Date</th>
                <td> <?php echo $row['date']; ?>  </td>
            </tr>
            <tr>
                <th scope="row">Province</th>
                <td> <?php echo $row['province']; ?>  </td>
            </tr>
            <tr>
                <th scope="row">District</th>
                <td> <?php echo $row['district']; ?>  </td>
            </tr>
            <tr>
                <th scope="row">PoliceArea</th>
                <td> <?php echo $row['policearea']; ?> </td>
            </tr>
            <tr>
                <th scope="row">Clothes</th>
                <td> <?php echo "<img src ='data:image/jpg;base64," . base64_encode($e) ."' alt = ''/ width=100px height=100px> ";?> </td>
            </tr>
            <tr>
                <th scope="row">Ornaments</th>
                <td> <?php echo "<img src ='data:image/jpg;base64," . base64_encode($f) ."' alt = ''/ width=100px height=100px> ";?> </td>
            </tr>
            <tr>
                <th scope="row">Tattos</th>
                <td> <?php echo "<img src ='data:image/jpg;base64," . base64_encode($g) ."' alt = ''/ width=100px height=100px> ";?> </td>
            </tr>
            <tr>
                <th scope="row">SpaecialRemarks</th>
                <td> <?php echo $row['specialremarks']; ?>  </td>
            </tr>
            <tr>
                <th scope="row">Other</th>
                <td> <?php echo $row['other']; ?> </td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td>
                    <!-- parsing the srno value to req form -->
                    <form method="post" action="./reqform.php">
                    <input type="hidden" name="srno" value="<?php echo $row["srno"] ?>"/>
                    <button type="submit" name="requestsubmit" class="btn">
                        <h5>Request</h5>
                    </button>
                </td>
            </tr>
        </tbody>    
        <?php
        } 
    }?>
    </table>
</body>
</html>
        
        

 