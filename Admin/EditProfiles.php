<?php
include 'AdminFunc.php';
if (!isAdminLoggedIn()) {
    $_SESSION['msg'] = "You must Log in First";
    header('location:../AdminLogin.php');
}

$name = $username =  $contact =  $email = $nic = "";


if (isset($_POST['edit_btn'])) {
    global $name, $username,  $contact,  $email;

    $nic = $_POST['nic'];
    echo $nic;
    $sql = "SELECT * FROM officials WHERE NIC='$nic'";
    $results = $link->query($sql);
    $row = $results->fetch_assoc();
    $name = $row['Name'];
    $username = $row['Username'];
    $contact = $row['Contact'];
    $email = $row['Email'];
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Profiles</title>
    <link rel="stylesheet" href="../bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="adminlogin.css">
    <link rel="stylesheet" href="../assets/css/style.css">

    <style>
        h2 {
            color: black;
            text-align: center;
            padding-top: 10%;
        }

        .table1 {
            border: 1px solid black;
            margin-left: auto;
            margin-right: auto;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }

        input {
            border: none;
            border: 1px solid white;
            background-color: transparent;
            color: white;
        }
    </style>

</head>

<body id="page-top">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container"><a class="navbar-brand" href="../index.php">FaceID</a><button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarResponsive" type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" style="position: fixed; margin-left: 400px;" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto text-uppercase">
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="Dashboard.php">Dashboard</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="ManagePortal.php">Manage Portal</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="ViewInquiries.php">View Inquiries</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Manage accounts
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="AddUser.php">Add New Account</a>
                            <a class="dropdown-item" href="ManageOfficials.php">Police,Model Creators & JMOs</a>
                            <a class="dropdown-item" href="ManageRUsers.php">Registered Users</a>
                        </div>
                    </li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="AdminFunc.php?logout='1'">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <h2>Edit Account</h2>
    <form method="post" action="./ManageOfficials.php">
        <div class="d-flex justify-content-center form-group" style="padding:60px">

            <table class="table1 table-dark table-striped">
                <tr>
                    <th width="200px">NIC</th>
                    <td width="600px"> <?php echo $nic; ?>
                    <td>
                </tr>
                <tr>
                    <th width="200px">Name</th>
                    <td width="600px"> <?php echo $name; ?></td>
                </tr>
                <tr>
                    <th width="200px">Username</th>
                    <td> <input type="text" class="rounded" name="username" size="60" value="<?php echo $username; ?>"></td>
                </tr>
                <tr>
                    <th width="200px">Contact Number</th>
                    <td> <input type="tel" class="rounded" name="contact" pattern="[0-9]{10}" value="<?php echo $contact; ?>" size="60"></td>
                </tr>
                <tr>
                    <th width="200px">Email Address</th>
                    <td> <input type="text" class="rounded" name="email" value="<?php echo $email; ?>" size="60"></td>
                </tr>
                <tr>
                    <th></th>
                    <input type="hidden" name="nic" id="nic" value="<?php echo $row['NIC'] ?>">
                    <td ><button type="submit" onclick="Function()" formmethod="post" name="update" class="btn btn-secondary">Update</button></td>
                </tr>
            </table>
        </div>
    </form>
    
    <script>
        function Function() {
            alert("Account updated.");
        }
    </script>

    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="../assets/js/agency.js"></script>
</body>

</html>