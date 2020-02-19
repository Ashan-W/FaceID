<?php 
include '../Admin/AdminFunc.php';
if (!isJMOLoggedIn()){
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
    <title>Add Details</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="jmologin.css">
    <link rel="stylesheet" href="../assets/css/style.css"> 
</head>
    <body id="page-top">
        <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
            <div class="container"><a class="navbar-brand" href="#page-top">FaceID</a><button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarResponsive" type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false"
                    aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
                <div class="collapse navbar-collapse" style="position: fixed; margin-left: 450px;" id="navbarResponsive">
                    <ul class="nav navbar-nav ml-auto text-uppercase">
                        <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="Dashboard.php">Dashboard</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="ViewRecords.php">View Records</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="AddDetails.php">Add Details</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="../Admin/AdminFunc.php?logout='1'">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>

                <form class="form d-flex-justify" method="post" action="AddDetails.php" style="margin-top:100px;">
                    <caption>
                        <thead>VICTIM IDENTIFICATION</thead>
                        <h2>Dead Body</h2>
                    </caption>
                    <div class="form-group">
                        <label>SR Number</label>
                        <input type="number" class="form-control" id="srno" name="srno" placeholder="SRNo.." style="width: 400px" required> 
                    </div>
                    <div class="form-group">
                        <label>Date</label>
                        <input type="date" class="form-control" name="date" style="width: 400px" required>
                    </div>
                    <div class="form-group">
                        <label>Police Area</label>
                        <input type="text" name="policearea" class="form-control" style="width: 400px" required>
                    </div>
                    <div class="form-group">
                            <label>Province:</label>
                            <select name = "province" class="form-control" style="width: 403px">
                            <option value="Central">Central</option>
                            <option value="Eastern">Eastern</option>
                            <option value="Northern">Northern</option>
                            <option value="Southern">Southern</option>
                            <option value="Western">Western</option>
                            <option value="North Western">North Western</option>
                            <option value="North Central">North Central</option>
                            <option value="Uva">Uva</option>
                            <option value="Sabaragamuwa">Sabaragamuwa</option> 
                        </select>
                    </div>
                    <div class="form-group">
                        <label> District: </label>
                        <select class="form-control" name="district" style="width: 403px">
                            <option value="Ampara">Ampara</option>
                            <option value="Anuradhapura">Anuradhapura</option>
                            <option value="Badulla">Badulla</option>
                            <option value="Batticaloa">Batticaloa</option>
                            <option value="Colombo">Colombo</option>
                            <option value="Galle">Galle</option>
                            <option value="Gampaha">Gampaha</option>
                            <option value="Hambantota">Hambantota</option>
                            <option value="Jaffna">Jaffna</option>
                            <option value="Kalutara">Kalutara</option>
                            <option value="Kandy">Kandy</option>
                            <option value="Kegalle">Kegalle</option>
                            <option value="Kilinochchi">Kilinochchi</option>
                            <option value="Kurunegala">Kurunegala</option>
                            <option value="Mannar">Mannar</option>
                            <option value="Matale">Matale</option>
                            <option value="Matara">Matara</option>
                            <option value="Monaragala">Monaragala</option>
                            <option value="Mullaitivu">Mullaitivu</option>
                            <option value="Nuwara Eliya">Nuwara Eliya</option>
                            <option value="Polonnaruwa">Polonnaruwa</option>
                            <option value="Puttalam">Puttalam</option>
                            <option value="Ratnapura">Ratnapura</option>
                            <option value="Trincomalee">Trincomalee</option>
                            <option value="Vavuniya">Vavuniya</option>
                        </select>
                    </div>
                        <div class="form-group">
                            <label>Estimated age </label>
                            <input class="form-control" type="number" name="est_age"style="width: 400px">    
                                Height(cm) <br>
                            <input type="number" class="form-control"name="height" style="width: 400px">
                            <br>Weight(kg) <br>
                            <input type="number" class="form-control"name="weight" style="width: 400px">
                        </div>
                        <div class="form-group">
                            <label>DNA: </label>
                            <input type="file" class="form-control-file" name="dna" accept="image/*"></div>
                        <div class="form-group">
                            <label>Finger Print</label>
                            <input type="file" name="fingerprint" class="form-control-file"  accept="image/*">
                        </div>
                        <div class="form-group">
                            <label>Dental</label>
                            <input type="file" class="form-control-file" name="dental" accept="image/*">
                        </div>
                        <div class="form-group">
                            <label> Facial Photgraph</label>
                            <input type="file" class="form-control-file" name="facial" accept="image/*">
                        </div>
                        <div class="form-group">                               
                            <label>Clothes </label>
                            <input type="file" class="form-control-file" name="clothes" accept="image/*">
                        </div>
                        <div class="form-group">
                            <label>Ornaments</label>
                            <input type="file" class="form-control-file" name="ornaments" accept="image/*">
                        </div>
                        <div class="form-group">
                            <label>Tattoos</label>
                            <input type="file" class="form-control-file" name="tattoos" accept="image/*">
                        </div>     
                        <div class="form-group">
                            <label>Special Remarks<label>
                            <input type="text" class="form-control"name="specialremarks" style="width:830px;height: 120px">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-secondary" name="adddet" type="submit" id="btnsubmit1">
                        </div>
                    </form>
            </div> 
        </div>

        <script src="../../assets/js/jquery.min.js"></script>
        <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="../../assets/js/agency.js"></script>
    </body>
</html>