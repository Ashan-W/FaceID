<?php 
include_once('config.php'); 
$mysqli=new mysqli('localhost','root','','faceid') or die(mysqli_error($mysqli)); 
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
    input {
  width: 100%;
}
    </style>
  
</head>
<body id="page-top">

<?php
//var_dump($rows[id]);
?>
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container"><a class="navbar-brand" href="../../index.html">FaceID</a><button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarResponsive" type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" style="position: fixed; margin-left: 250px;" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto text-uppercase">
                        <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="./dashboard.php">Dashboard</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="./manage_database.php">Manage Database</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="./inq_req.php">Manage Inquiries</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="./request3Dmodel.html">Request 3D Model</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="AdminFunc.php?logout='1'">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

        <h2 style="color:black; text-align: center; padding-top: 10%;">Inquiries Of Registered Users</h2>
        
    <div class="table1" align="center">

        <table class="table1 table-dark table-striped" style="border:1px solid black;margin-left:10%;margin-right:10%;">
    
        <?php

         if(isset($_GET['edit'])){
           // echo 'hi';
            $edit_id=$_GET['edit'];

            //var_dump ($edit_id);
           $results = $mysqli->query("SELECT * FROM inquiries WHERE id='$edit_id'") ;
          

            if(mysqli_num_rows($results)==1){
                $row =$results->fetch_array();
                $id=$row['id'];
                $name=$row['name']; 
                $email=$row['email'];
                $phone=$row['phone'];
                $message=$row['message'];
              
                //var_dump ( $row);
                  
            }
        }    
        
       
      
    
    ?>

    
            <!-- <tr>
                <td style="padding:10px">ID</th>
                <td style="padding:10px"><?php echo $row['id'];?></td>
            
            
                
            </tr> -->

            <tr>
           
            <th style="padding:10px">Name</th>
            <td style="padding:10px"><?php echo $row['name'];?></td>
            </tr>

            <tr>
           
           <th style="padding:10px">Message</th>
           <td style="padding:10px" "max-width=75%"><?php echo $row['message'];?></td>
           </tr>
           <tr>
           
           <th style="padding:10px">Reply</th>
           <td style="padding:10px" "max-width=75%"><?php echo $row['respond'];?></td>
           </tr>
            <td></td>
            <td> 
            <div class="container">
  <div class="row">
    <div class="col text-center">
      
    


    </div>
  </div>
</div>
          



    </td>
           </tr>
        
            

        <?php  
         ?>
    </table>

    </div>
    
    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="../../assets/js/agency.js"></script>
</body>
</html>