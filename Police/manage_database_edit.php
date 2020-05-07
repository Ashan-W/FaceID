<?php 
include_once('config.php'); 
include_once('process.php');
// $query="select * from unidentifiedbodies";
// $result=mysqli_query($link,$query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Police</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="policelogin.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <style>
    body {
 background-image: url("img/faceid.jpg");
 background-color: #cccccc;
}
    </style>
</head>

<body id="page-top">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container"><a class="navbar-brand" href="#page-top">FaceID</a><button
                class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarResponsive"
                type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" style="position: fixed; margin-left: 250px;" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto text-uppercase">
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="./dashboard.php">Dashboard</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="./manage_database.php">Manage Database</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger"  href="./inq_req.php">Manage Inquiries</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="./request3Dmodel.html">Request 3D Model</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="../Admin/AdminFunc.php?logout='1'">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>



    <h2 style="color:black; text-align: center; padding-top: 10%;">Edit Unidentified Dead Body Details</h2>
    <div class="table1" align="center">



        <table class="table1 table-dark table-striped"
            style="border:1px solid black;margin-left:auto;margin-right:auto;">

            <?php
//         if(isset($_GET['edit'])){
//     $id = $_GET['edit'];
//     //echo $id;
//     $result = $mysqli->query("SELECT * FROM 'unidentifiedbodies' WHERE srno='11'") ;
//     var_dump($result);
//    while ($row = mysqli_fetch_array($result)) { 
        
          
//     var_dump($row);
        
//     }
// }
if(isset($_GET['edit'])){
    //echo 'hi';
    $edit_id=$_GET['edit'];
    $result = $mysqli->query("SELECT * FROM unidentifiedbodies WHERE srno='$edit_id'") or die($symbol->error());
    if(mysqli_num_rows($result)==1){
        $row =$result->fetch_array();
        $srno=$row['srno'];
        $date=$row['date'];  /////////////////////////////////////
        $policearea=$row['policearea'];
        $policearea=$row['province'];

        $dna=$row['dna'];
        $fingerprint=$row['fingerprint'];
        $dental=$row['dental'];
        $facialphotograph=$row['facialphotograph'];
        $clothes=$row['clothes'];
        $ornaments=$row['ornaments'];
        $tattoos=$row['tattoos'];
        $specialremarks=$row['specialremarks'];
        $district=$row['district'];
        $jmo=$row['jmo'];
        $model=$row['model'];
       // echo $date;
       
          
    }
     
}

//var_dump( $province);  


      ?>
            <form action="./edit.php" method="get">
           
                <table class="table1 table-dark table-striped"
                    style="border:1px solid black;margin-left:auto;margin-right:auto;">
                  
                    <thead>
                        <tr>
                            <th style="padding:10px">SR No</th>
                            <th style="padding:10px"><input type="text"   name="srno" value=<?php echo $row['srno'];?>></th>
                        </tr>
                        <tr>
                            <td style="padding:10px"><label>Date</label></td>
                            <td style="padding:10px"><input type="text" name="date" value=<?php echo $row['date'];?> >
                           
                            </td>
                        </tr>

                        <tr>
                            <td style="padding:10px"><label>Police Division</label></td>
                            <td style="padding:10px"><input type="text" name="policediv"
                                    value=<?php echo $row['policearea'];?>></td>
                        </tr>

                        <tr>
                            <td style="padding:10px"><label>Province</label></td>
                            <td style="padding:10px"><input type="text" name="province"
                                    value=<?php echo $row['province'];?>></td>

                        </tr>


                         

                         <tr>
                            <td style="padding:10px"><label>Clothes</label></td>
                            <td style="padding:10px"><input type="text" name="clothes"
                                    value=<?php echo $row['clothes'];?>></td>
                        </tr>

                         <tr>
                            <td style="padding:10px"><label>Ornaments</label></td>
                            <td style="padding:10px"><input type="text" name="ornaments"
                                    value=<?php echo $row['ornaments'];?>></td>
                        </tr>

                         <tr>
                            <td style="padding:10px"><label>Tattoos</label></td>
                            <td style="padding:10px"><input type="text" name="tattoos"
                                    value=<?php echo $row['tattoos'];?>></td>
                        </tr>

                         <tr>
                            <td style="padding:10px"><label>Special Remarks</label></td>
                            <td style="padding:10px"><input type="text" name="specialremarks"
                                    value=<?php echo $row['specialremarks'];?>></td>
                        </tr>

                         <tr>
                            <td style="padding:10px"><label>District</label></td>
                            <td style="padding:10px"><input type="text" name="district"
                                    value=<?php echo $row['district'];?>></td>
                        </tr>

                         <tr>
                            <td style="padding:10px"><label>JMO</label></td>
                            <td style="padding:10px"><input type="text" name="jmo"
                                    value=<?php echo $row['jmo'];?>></td>
                        </tr>

                         <tr>
                            <td style="padding:10px"><label>Model</label></td>
                            <td style="padding:10px"><input type="text" name="model"
                                    value=<?php echo $row['policearea'];?>></td>
                        </tr>

                        
                        
                </table>


                </br></br>
                <button type="submit" name="save" class="btn btn-secondary" onclick="return confirm('Are you sure?')" >SAVE</button>
            </form>



            <script src="../../assets/js/jquery.min.js"></script>
            <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
            <script src="../../assets/js/agency.js"></script>
</body>

</html>



