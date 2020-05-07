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
    <title>Police</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="policelogin.css">
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
        <div class="container"><a class="navbar-brand" href="#page-top">FaceID</a><button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarResponsive" type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false"
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

    
    <div class="row d-flex justify-content-center" align="center">
       <h2 class="text-center" style="color:black; text-align: center; padding-top: 10%;">Unidentified bodies Database</h2>
    </div>
    
    <div class=" row table1 mt-5" align="center">

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

                
                    <td style="padding:10px; text-align:center">
                    
                        <button type="button" class="btn btn-secondary"  >Request</button> 
                         
                    <!-- </div>
                    </form>
                    <form method="get" action="./process.php">
                    <div><td style="padding:10px; text-align:center">
                    <a href="process.php?delete=<?php echo $rows['srno']; ?>" 
                        <button type="button" class="btn btn-secondary" onclick="return confirm('Are you sure?')" >Delete</button></a>       
                    </div> -->
                

                
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
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<!-- <script>
function approvalFunction(edit) {
        params = {
            edit: edit,
           
        }
        $.get("./process.php", params, function(
            data) {

            window.alert(data)
            var response = JSON.parse(data);
            console.log(response)
            if (response.status) {
                
            } else {
                
            }
        });
    }
</script> -->
    
</body>
</html>