<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Details</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="jmologin.css">
    <link rel="stylesheet" href="../../assets/css/style.css"> 
</head>
<body id="page-top">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container"><a class="navbar-brand" href="#page-top">FaceID</a><button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarResponsive" type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" style="position: fixed; margin-left: 450px;" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto text-uppercase">
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="ViewRecords.php">View Records</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="AddDetails.php">Add Details</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="ModelRequests.php">3D Model Requests</a></li>
                   
                </ul>
            </div>
        </div>
    </nav>


    <div class="container">
    
            <form action="action_page.php" style="margin-top:100px;">
                <table class="table1" style=" solid black; width:60%"; align="center">
                    <caption>
                        <thead>VICTIM IDENTIFICATION</thead>
                        <h2>Dead Body</h2>
                    </caption>
                    <tr>
                        <td>
                            SR No: <br>
                            <input type="text" id="srno" name="srno" placeholder="SRNo.." style="width: 400px"> 
                        </td>
                        <td>
                            Date: <br>
                            <input type="date" name="date" style="width: 400px">
                        </td>
                    </tr><br>
                    <tr>
                        <td>
                            Police Area: <br> 
                            <select style="width: 403px">
                                <option value="val1">val1</option>
                                <option value="val2">val2</option>
                                <option value="val3">val3</option>
                                <option value="val4">val4</option>
                            </select>
                        </td>
                        <td>
                            Province: <br> 
                            <select style="width: 403px">
                                <option value="1">Central</option>
                                <option value="2">Eastern</option>
                                <option value="3">Northern</option>
                                <option value="4">Southern</option>
                                <option value="5">Western</option>
                                <option value="6">North Western</option>
                                <option value="7">North Central</option>
                                <option value="8">Uva</option>
                                <option value="9">Sabaragamuwa</option> 
                            </select>
                            </td>
                    </tr><br>
                    <tr>
                        <td>
                            District: <br> 
                            <select style="width: 403px">
                            <option value="1">Ampara</option>
                            <option value="2">Anuradhapura</option>
                            <option value="3">Badulla</option>
                            <option value="4">Batticaloa</option>
                            <option value="5">Colombo</option>
                            <option value="6">Galle</option>
                            <option value="7">Gampaha</option>
                            <option value="8">Hambantota</option>
                            <option value="9">Jaffna</option>
                            <option value="10">Kalutara</option>
                            <option value="11">Kandy</option>
                            <option value="12">Kegalle</option>
                            <option value="13">Kilinochchi</option>
                            <option value="14">Kurunegala</option>
                            <option value="15">Mannar</option>
                            <option value="16">Matale</option>
                            <option value="17">Matara</option>
                            <option value="18">Monaragala</option>
                            <option value="19">Mullaitivu</option>
                            <option value="20">Nuwara Eliya</option>
                            <option value="21">Polonnaruwa</option>
                            <option value="22">Puttalam</option>
                            <option value="23">Ratnapura</option>
                            <option value="24">Trincomalee</option>
                            <option value="25">Vavuniya</option>
                            </select><br><br>
                            Other: <br>
                            <input type="text" name="Other"style="width: 400px"><br><br>
                            Other2: <br>
                            <input type="text" name="other2" style="width: 400px">
                        </td>
                        <td>
                            DNA: <br>
                            <input style="height:150px;width:400px;font-size:11pt" type="text" name="dna"><br><br>
                        </td>
                    </tr>
                    <tr >
                        <td>
                            Finger Print: <br>
                            <input style="height:100px;width:400px;font-size:11pt" type="text" name="textfingerp"><br>
                            <input type="file" name="fingerprint" accept="image/*">
                            <br><br>
                        </td>
                        <td>
                            Dental:<br>
                            <input style="height:100px;width:400px;font-size:11pt" type="text" name="textfingerp"><br>
                            <input type="file" name="dental" accept="image/*">
                            <br><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Facial Photgraph: <br>
                            <input style="height:100px;width:400px;font-size:11pt" type="text" name="textfacial"><br>
                            <input type="file" name="facial" accept="image/*">
                            <br><br>
                        </td>
                        <td>                                
                            Clothes: <br>
                            <input style="height:100px;width:400px;font-size:11pt" type="text" name="textclothes"><br>
                            <input type="file" name="Clothes" accept="image/*">
                            <br><br>
                
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Ornaments: <br>
                            <input style="height:100px;width:400px;font-size:11pt" type="text" name="textornaments"><br>
                            <input type="file" name="ornaments" accept="image/*">
                            <br><br>
                        </td>
                        <td>
                            Tattoos: <br>
                            <input style="height:100px;width:400px;font-size:11pt" type="text" name="texttattoo"><br>
                            <input type="file" name="tattoos" accept="image/*">
                            <br><br>
                        </td>
                    </tr>       
                    <tr>
                        <td colspan="2">
                            Special Remarks: <br>
                            <input type="text" name="sremarks" style="width:830px;height: 120px">
                        </td>
                    </tr>
                    <tr>
                        <td align="center" colspan="2">
                            <input type="submit" id="btnsubmit1">
                        </td>
                    </tr>
                </table>
            </form>
        </div>

        <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="../../assets/js/agency.js"></script>
</body>
</html>