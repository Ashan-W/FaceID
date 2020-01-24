<?php include 'config.php'; 

//retrieving data for display 
$id = $_GET['nic'];
echo $nic;
$name=$username=$contact=$email="";

$results = mysqli_query($link, "SELECT Name,Username,Contact,Email FROM officials WHERE NIC='$nic'") ; 
while ($row = mysqli_fetch_array($results)) {
    $name = $row['Name'];
    $username = $row['Username'];
    $contact = $row['Contact'];
    $email = $row['Email'];

}

//update

if(isset($_POST['update'])){
    global $name,$username,$contact,$email,$nic;
    $name=$_POST['name'];
    $username=$_POST['username'];
    $contact=$_POST['contact'];
    $email=$_POST['email'];

    $results = mysqli_query($link,"UPDATE officials SET Name=$name,Username=$username,Contact=$contact,Email=$email WHERE NIC='$nic'");
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
    <form method="post" action = "<?php $_PHP_SELF ?>">
        <div class="d-flex justify-content-center" style="padding:60px">
        
        <table class="table-dark table-striped" style="border:1px solid black;margin-left:auto;margin-right:auto;">

            
            <tr>
                <th style="padding:20px;text-align:center" width="200px">Name</th>
                <td style="text-align:center"  width="600px"> <input type="text"  name="name"  size="60" value="<?php echo $name?>" ></td>
            </tr>
            <tr>
                <th style="padding:20px; text-align:center" width="200px">Username</th>
                <td style=" text-align:center"> <input type="text"  name="username" placeholder="Username" size="60" value='{$row1['Username']}'></td>
            </tr>
            <tr>
                <th style="padding:20px; text-align:center" width="200px">Contact Number</th>
                <td style=" text-align:center"> <input type="text"  name="contact" placeholder="Contact Number" size="60" value='{$row1['Contact']}' ></td>
            </tr>
            <tr>
                <th style="padding:20px; text-align:center" width="200px">Email Address</th>
                <td style="text-align:center"> <input type="email"  name="email" placeholder="Email Address" size="60" value='{$row1['Email']}' ></td>
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