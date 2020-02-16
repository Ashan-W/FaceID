<?php 
include 'AdminFunc.php';
if (!isAdminLoggedIn()){
    $_SESSION['msg'] = "You must Log in First";
    header('location:../AdminLogin.php');
}?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Respond to Inquiries</title>
    <link rel="stylesheet" href="../bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="adminlogin.css">
    <link rel="stylesheet" href="../assets/css/style.css"> 
</head>
<body id="page-top">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container"><a class="navbar-brand" href="#page-top">FaceID</a><button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarResponsive" type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" style="position: fixed; margin-left: 400px;" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto text-uppercase">
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#search">Manage Portal</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="ViewInquiries.php">View Inquiries</a></li>
                    <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                              Manage accounts
                            </a>
                            <div class="dropdown-menu">
                            <a class="dropdown-item" href="ManageOfficials.php">Police,UCSC & JMOs</a>
                              <a class="dropdown-item" href="ManageRUsers.php">Registered Users</a>
                            </div>
                          </li>
                          <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="AdminFunc.php?logout='1'">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <?php
    $id = $_GET['id'];
    echo $id;
    $results = mysqli_query($link, "SELECT * FROM inquiries WHERE id='$id'"); 
    ?>

    
    

    <h2 style="color:black; text-align: center; padding-top: 10%;">Inquiries</h2>
    <div class="" >
        <div class="d-flex justify-content-center" style="padding:60px">
        
        <table class="table-dark table-striped" style="border:1px solid black;margin-left:auto;margin-right:auto;width:80%;">
        
        <?php while ($row = mysqli_fetch_array($results)) { ?>

            <form action="sendMail.php" method="post" enctype="text/plain">
            <tr>
                <th style="padding:20px;text-align:center" width="300px">Name</th>
                <td style="padding:10px"><?php echo $row['name'];?></td>
            </tr>
            <tr>
                <th style="padding:20px;padding-left:50px;padding-right:50px; text-align:center" width="300px">Email Address</th>
                <input type="hidden" name="email" id="email" value="<?php echo $row['email']; ?>" />
                <td style="padding:10px"><?php echo $row['email'];?></td>
            </tr>
            <tr>
                <th style="padding:20px;padding-left:50px;padding-right:50px; text-align:center" width="300px">Contact Number</th>
                <td style="padding:10px"><?php echo $row['phone'];?></td>
            </tr>
            <tr>
                <th style="padding:20px;padding-left:50px;padding-right:50px; text-align:center" width="300px">Message</th>
                <td style="padding:10px"><?php echo $row['message'];?></td>
            </tr>
            <tr> 
                 <th style="padding:20px;padding-left:50px;padding-right:50px; text-align:center" width="300px">Images</th> 
                <!-- <td style="padding:10px; text-align:center"><?php echo $row['picture'];?></td> -->
             </tr> 
             <tr>
                <th style="padding:20px; text-align:center" width="200px">Reply</th>
                <td style="text-align:center"> <input type="text" styleclass="rounded"  style="height:40px;width:98%;border:none;border:1px solid white;background-color:transparent;color:white;" name="email" id="subject" placeholder=" Write your reply here" size="60" ></td>
             </tr> 

             <tr> 
                 <th style="padding:20px;padding-left:50px;padding-right:50px; text-align:center" width="300px"></th> 
                 <td style="padding:10px;padding-left:30px;padding-right:30px; text-align:center"><button class="btn btn-secondary"  onclick="myFunction()">Respond </button></td>
             </tr> 

             <script>
             function myFunction() {
                var input = document.getElementById('email');
                email = input.value;
                var input = document.getElementById('subject');
                subject = input.value;

                window.location.href = "mailto:" + email + "?subject=" + subject;
            }
            </script>
        <?php } ?>
    
    </table>



        </div>    
        
    </div>
    
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="../assets/js/agency.js"></script>
</body>
</html>