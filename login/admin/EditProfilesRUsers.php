<?php include 'config.php'; 

$nic = $_GET['nic'];
    $results = mysqli_query($link, "SELECT * FROM reg_users WHERE NIC='$nic'") ; 

if(isset($_POST['update'])){
  $name = mysqli_real_escape_string($link,$_POST['name']);
  $username = mysqli_real_escape_string($link,$_POST['username']);
  $email = mysqli_real_escape_string($link,$_POST['email']);
  $contact = mysqli_real_escape_string($link,$_POST['contact']);



  $sql = "UPDATE reg_users SET ";
  if($name != NULL){
    $sql = $sql . "Name='$name',";
  }
  if($username != NULL){
    $sql = $sql . "Username= '$username',";
  }
  if($email != NULL){
    $sql = $sql . "Email='$email',";
  }
  if($contact != NULL){
    $sql = $sql . "Contact='$contact',";
  }
  


  $sql=rtrim($sql,", ");
  $sql = $sql . " WHERE NIC='$nic'";

  if($link->query($sql) == TRUE){
    echo "<script type='text/javascript'>alert('User updated successfully!');
    window.location='ManageOfficials.php';
    </script>";
  }else{
   $error =  "Error: " .$sql . "<br>".$link->error;
 }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="adminlogin.css">
    <link rel="stylesheet" href="../../assets/css/style.css"> 
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
                </ul>
            </div>
        </div>
    </nav>

        <h2 style="color:black; text-align: center; padding-top: 10%;">Edit Account</h2>
    <form method="post" action = "">
        <div class="d-flex justify-content-center" style="padding:60px">
        
        <table class="table-dark table-striped" style="border:1px solid black;margin-left:auto;margin-right:auto;">

        <tr>
                <th style="padding:20px;text-align:center" width="200px">NIC</th>
                <td style="text-align:center"  width="600px"> <?php echo $nic;?><td>
            </tr>
            <tr>
                <th style="padding:20px;text-align:center" width="200px">Name</th>
                <td style="text-align:center"  width="600px"> <input type="text"  placeholder="Name"name="name"  size="60"  ></td>
            </tr>
            <tr>
                <th style="padding:20px; text-align:center" width="200px">Username</th>
                <td style=" text-align:center"> <input type="text"  name="username" placeholder="Username" size="60"></td>
            </tr>
            <tr>
                <th style="padding:20px; text-align:center" width="200px">Contact Number</th>
                <td style=" text-align:center"> <input type="text"  name="contact" placeholder="Contact Number" size="60" ></td>
            </tr>
            <tr>
                <th style="padding:20px; text-align:center" width="200px">Email Address</th>
                <td style="text-align:center"> <input type="email"  name="email" placeholder="Email Address" size="60" ></td>
             </tr> 
             <tr>
                 <th></th>
                <td style="padding:10px; text-align:center"><button type="submit" name="update" class="btn btn-secondary" value= 'update' >Update</button></td>
            </tr>
    
    </table>
        </div>    
        </form>
  
    
    
    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="../../assets/js/agency.js"></script>
</body>
</html>