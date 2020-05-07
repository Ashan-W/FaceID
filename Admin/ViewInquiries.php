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
    <title>View Inquiries</title>
    <link rel="stylesheet" href="../bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="adminlogin.css">
    <link rel="stylesheet" href="../assets/css/style.css">  
</head>
<body id="page-top">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container"><a class="navbar-brand" href="../index.php">FaceID</a><button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarResponsive" type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false"
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

    

    <?php $results = mysqli_query($link, "SELECT * FROM inquiries") ; ?>
    <h2 style="color:black; text-align: center; padding-top: 10%;">Inquiries</h2>
    
    <div class="d-flex justify-content-center" style="padding:60px">
        <table class="table1 table-dark table-striped" style="border:1px solid black;margin-left:auto;margin-right:auto;width:95%">
        <thead>
            <tr>
                <th style="padding:10px; text-align:center">Name</th>
                <th style="padding:10px; text-align:center">Email Address</th>
                <th style="padding:10px; text-align:center">Contact Number</th>
                <th style="padding:10px; text-align:center">Message</th>
                <th style="padding:10px; text-align:center"></th>
            </tr>
        </thead>

        <?php while ($row = mysqli_fetch_array($results)) { ?>
            <form method="get" action="MoreInquiries.php">
            <tr>
                <td style="padding:10px;padding-left:30px;padding-right:30px; text-align:center"><?php echo $row['name'];?></td>
                <td style="padding:10px;padding-left:30px;padding-right:30px; text-align:center"><?php echo $row['email'];?></td>
                <td style="padding:10px;padding-left:30px;padding-right:30px; text-align:center"><?php echo $row['phone'];?></td>
                <td style="padding:10px;padding-left:30px;padding-right:30px; text-align:center;"><?php echo substr($row['message'],0,60)."...";?></td>
                <input type="hidden" name="id" id="id" value="<?php echo $row['id']; ?>" >
                <td style="padding:10px;padding-left:30px;padding-right:30px; text-align:center"><button class="btn btn-secondary" type="submit">View </button></td>
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