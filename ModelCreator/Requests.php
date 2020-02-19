<?php 
include '../Admin/AdminFunc.php';
if (!isUCSCLoggedIn()){
    $_SESSION['msg'] = "You must Log in First";
    header('location:../AdminLogin.php');
}?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View requests</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="ucsc.css">
    <link rel="stylesheet" href="../assets/css/style.css"> 
</head>
<body id="page-top">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container"><a class="navbar-brand" href="#page-top">FaceID</a><button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarResponsive" type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" style="position: fixed; margin-left: 450px;" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto text-uppercase">
                <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="dashboard.php">Dashboard</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="Requests.php">View Requests</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="ModelsUploaded.php">Models uploaded</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="../Admin/AdminFunc.php?logout='1'">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <?php $results = mysqli_query($link, "SELECT * FROM model_requests WHERE type='0'") ; ?> //type = 0,if model is not uploaded
    <h2 style="color:black; text-align: center; padding-top: 10%;">Requests for models</h2>
    
    <div class="d-flex justify-content-center" style="padding:60px">
        <table class="table1 table-dark table-striped" style="border:1px solid black;margin-left:auto;margin-right:auto;">
        <thead>
            <tr>
                <th style="padding:10px; text-align:center">SR No</th>
                <th style="padding:10px; text-align:center">Date</th>
                <th style="padding:10px; text-align:center"></th>
                <th style="padding:10px; text-align:center"></th>
            </tr>
        </thead>

        <?php while ($row = mysqli_fetch_array($results)) { ?>
            
            <tr>
                <td style="padding:10px;padding-left:30px;padding-right:30px; text-align:center"><?php echo $row['srno'];?></td>
                <td style="padding:10px;padding-left:30px;padding-right:30px; text-align:center"><?php echo $row['date'];?></td>
                <form method="post" action="ViewInfo.php">
                    <input type="hidden" name="srno" id="srno" value="<?php echo $row['srno']; ?>" />
                    <td style="padding:10px;padding-left:30px;padding-right:30px; text-align:center"><button class="btn btn-secondary" formmethod="post" name="view_btn" type="submit">View Details </button></td>
                </form>
                <form method="post" action="UploadModel.php">
                    <input type="hidden" name="srno" id="srno" value="<?php echo $row['srno']; ?>" />
                    <td style="padding:10px;padding-left:30px;padding-right:30px; text-align:center"><button class="btn btn-secondary" name="upload_btn" type="submit">Upload Model </button></td>
                </form>
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