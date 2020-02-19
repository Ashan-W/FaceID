<?php
include 'AdminFunc.php';
if (!isAdminLoggedIn()) {
    $_SESSION['msg'] = "You must Log in First";
    header('location:../AdminLogin.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add User</title>
    <link rel="stylesheet" href="../bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="adminlogin.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

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

    <h2>Add Official</h2>
    <div class="container d-flex justify-content-center">
        <div class="col-lg-6">
            <div class="card bg-light">
                <article class="card-body mx-auto" style="max-width: 400px;">

                    <form action="AddUser.php" method="post">

                        <!--Full name -->
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                            </div>
                            <input name="name" class="form-control" placeholder="Full name" type="text" required>
                        </div>

                        <!--Username -->
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                            </div>

                            <input name="username" class="form-control" placeholder="Username" type="text" required>
                        </div>

                        <!-- Email Address -->
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                            </div>
                            <input name="email" class="form-control" placeholder="Email address" type="email" required>
                        </div>

                        <!-- Contact Number -->
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                            </div>
                            <input name="contact" class="form-control" placeholder="Phone number" type="tel" pattern="[0-9]{10}" required>
                        </div>

                        <!-- NIC -->
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-id-badge"></i> </span>
                            </div>
                            <?php echo $nic_err; ?></span>
                            <input name="nic" class="form-control" placeholder="National Identity Card" type="text" pattern="[0-9v]{10}" minlength="10" maxlength="10" required>
                            <span class="error">

                        </div>

                        <!-- Type -->
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                            </div>
                            <input class="form-control" name="type" type="radio" value="0" required><label>JMO</label>
                            <input class="form-control" name="type" type="radio" value="1" required><label>Police</label>
                            <input class="form-control" name="type" type="radio" value="2" required><label>UCSC</label>
                        </div>

                        <!-- Password -->
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                            </div>
                            <input class="form-control" name="password" placeholder="Create password" type="password" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                            <span class="error"><?php echo $pass_err; ?></span>
                        </div>

                        <!-- Confirm Password -->
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                            </div>
                            <input class="form-control" name="confirm_password" placeholder="Repeat password" type="password" required>
                        </div>


                        <div class="form-group">
                            <button type="submit" name="AddUser_btn" class="btnsubmit btn-block"> Create Account </button>
                        </div>

                    </form>
                </article>
            </div>
            <!--container end.//-->

        </div>
    </div>

    <script>
        var myInput = document.getElementById("password");
        var letter = document.getElementById("letter");
        var capital = document.getElementById("capital");
        var number = document.getElementById("number");
        var length = document.getElementById("length");



        // When the user starts to type something inside the password field
        myInput.onkeyup = function() {
            // Validate lowercase letters
            var lowerCaseLetters = /[a-z]/g;
            if (myInput.value.match(lowerCaseLetters)) {
                letter.classList.remove("invalid");
                letter.classList.add("valid");
            } else {
                letter.classList.remove("valid");
                letter.classList.add("invalid");
            }

            // Validate capital letters
            var upperCaseLetters = /[A-Z]/g;
            if (myInput.value.match(upperCaseLetters)) {
                capital.classList.remove("invalid");
                capital.classList.add("valid");
            } else {
                capital.classList.remove("valid");
                capital.classList.add("invalid");
            }

            // Validate numbers
            var numbers = /[0-9]/g;
            if (myInput.value.match(numbers)) {
                number.classList.remove("invalid");
                number.classList.add("valid");
            } else {
                number.classList.remove("valid");
                number.classList.add("invalid");
            }

            // Validate length
            if (myInput.value.length >= 8) {
                length.classList.remove("invalid");
                length.classList.add("valid");
            } else {
                length.classList.remove("valid");
                length.classList.add("invalid");
            }
        }
    </script>


    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="../assets/js/agency.js"></script>
</body>

</html>