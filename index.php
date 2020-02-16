<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>FaceID</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="my_js.js"></script>

    <style type="text/css">
        .search-box{
        width: 300px;
        position: relative;
        display: inline-block;
        font-size: 14px;
    }
    .search-box input[type="text"]{
        height: 32px;
        padding: 5px 10px;
        border: 1px solid #CCCCCC;
        font-size: 14px;
    }
    .result{
        position: relative;        
        z-index: 999;
        top: 100%;
        left: 0;
    }
    .search-box input[type="text"], .result{
        width: 100%;
        box-sizing: border-box;
    }
    /* Formatting result items */
    .result p{
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
    }
    .result p:hover{
        background: #f2f2f2;
    } 
    </style>

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        $('.search-box input[type="text"]').on("keyup input", function(){
            /* Get input value on change */
            var inputVal = $(this).val();
            var resultDropdown = $(this).siblings(".result");
            if(inputVal.length){
                $.get("search.php", {term: inputVal}).done(function(data){
                    // Display the returned data in browser
                    resultDropdown.html(data);
                });
            } else{
                resultDropdown.empty();
            }
        });
        
        // Set search input value on click of result item
        $(document).on("click", ".result p", function(){
            $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
            $(this).parent(".result").empty();
        });
    });
    
    </script>


</head>

<body id="page-top">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container"><a class="navbar-brand" href="#page-top">FaceID</a><button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarResponsive" type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" style="position: fixed; margin-left: 250px;" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto text-uppercase">
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#about">about</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#search">Search for Missing</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#infoportal">information Portal</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#contact">Contact us</a></li>
                    <li class="nav-item dropdown">
                    <button type="button" class="btn btn-primary dropdown-toggle btn-signIN"  data-toggle="dropdown">
                            Sign In
                    </button>
                    <div class="dropdown-menu" >
                        <a class="dropdown-item" href="AdminLogin.php">Oficials</a>
                        <a class="dropdown-item" href="Userlogin.html">Registered User</a>
                    </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead" style="background-image: url('assets/img/faceid4.jpg')" >
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in img-title-sub"><span>Welcome !</span></div>
                <div class="intro-heading text-uppercase img-title-main"><span>National Unrecognized
                     Persons  Database</span></div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" style="opacity: 0.8;" role="button" href="#search">Search</a></div>
            </div>
    </header>
    <section id="about" style="background-color: white;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase section-heading">about</h2>
                    <h3 class="text-muted section-subheading">About what we do</h3>
                </div>
            </div>
            
        </div>
    </section>
    <section id="search" style="background-color: white;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <form action="" method="post">
                    <h2 class="text-uppercase section-heading">Search</h2>
                    <h3 class="text-muted section-subheading">Search Here</h3>

                    <!-- Select district -->
                    <select class="browser-default custom-select custom-select-lg mb-3" name="dist" id="dist" #ss>
                        <option selected>Select District</option>
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

                    <!-- Select police area   -->
                    <select class="custom-select custom-select-sm" name="polarea" id="polarea" #ss>
                        <option selected>Select Police Area</option>
                        <option value="Ampara Division">AMPARA DIVISION</option>
                        <option value="Kandy Division">KANDY DIVISION</option>
                        <option value="Gampola Division">GAMPOLA DIVISION</option>
                        <option value="Matale Division">MATALE DIVISION</option>
                        <option value="Nuwaraeliya Division">NUWARAELIYA DIVISION</option>
                        <option value="Hatton Division">HATTON DIVISION</option>
                        <option value="Batticaloa Division">BATTICALOA DIVISION</option>
                        <option value="Trincomalee Division">TRINCOMALEE DIVISION</option>
                        <option value="Kantale Division">KANTALE DIVISION</option>
                        <option value="Anuradhapura Division">ANURADHAPURA DIVISION</option>
                        <option value="Polonnaruwa Division">POLONNARUWA DIVISION</option>
                        <option value="Kankasanthurai Division">KANKASANTHURAI DIVISION</option>
                        <option value="Jaffa Division">JAFFNA DIVISION</option>
                        <option value="Vavunia Division">VAVUNIYA DIVISION</option>
                        <option value="Kilinochchi Division">KILINOCHCHI DIVISION</option>
                        <option value="Mannar Division">MANNAR DIVISION</option>
                        <option value="Mulathivu Division">MULATHIVU DIVISION</option>
                        <option value="Kurunegala Division">KURUNAGALA DIVISION</option>
                        <option value="Kuliyapitiya Division">KULIYAPITIYA DIVISION</option>
                        <option value="Nikaweratiya Division">NIKAWERATIYA DIVISION</option>
                        <option value="Puttalam Division">PUTTALAM DIVISION</option>
                        <option value="Chilaw Division">CHILAW DIVISION</option>
                        <option value="Ratnapura Division">RATNAPURA DIVISION</option>
                        <option value="Kegalle Division">KAGALLE DIVISION</option>
                        <option value="Seethawaka Division">SEETHAWAKAPURA DIVISION</option>
                        <option value="Matara Division">MATARA DIVISION</option>
                        <option value="Galle Division">GALLE DIVISION</option>
                        <option value="Elpitiya Division">ELPITIYA DIVISION</option>
                        <option value="Tangalle Division">TANGALLE DIVISION</option>
                        <option value="Badulla Division">BADULLA DIVISION</option>
                        <option value="Andrawela Division">ANDARAWELA DIVISION</option>
                        <option value="Monaragala Division">MONARAGALA DIVISION</option>
                        <option value="Colombo Central Division">COLOMBO CENTRAL DIVISION</option>
                        <option value="Colombo North Division">COLOMBO NORTH DIVISION</option>
                        <option value="Colombo South Division">COLOMBO SOUTH DIVISION</option>
                        <option value="Kelaniya Division">KELANIYA DIVISION</option>
                        <option value="Gampaha Division">GAMPAHA DIVISION</option>
                        <option value="Negombo Division">NEGOMBO DIVISION</option>
                        <option value="Nugegoda Division">NUGEGODA DIVISION</option>
                        <option value="Mount Lavinia Division">MOUNT LAVINIA DIVISION</option>
                        <option value="Panadura Division">PANADURA DIVISION</option>
                        <option value="Kaluthara Division">KALUTARA DIVISION</option>
                    </select> 
                    <br>
                    <br>

                    <!-- Seach from the police areas that included in the Database -->
                    <div class="search-box">
                        <input type="text" autocomplete="off" placeholder="Search Police Area..." />
                        <div class="result"></div>
                    </div>

                    </br>
                    </br>

                      <!-- <form action="/action_page.php" > -->
                        Missing Dates From: <input type="date" id="fday" name="fday" style="border-radius: 20px;">
                        To: <input type="date" id="tday" name="tday" style="border-radius: 20px;">
                        <input type="submit" >
                      <br>
                      <br>
                      <button type="submit" name="submit" class="btn btn-outline-primary" formaction="./searchresult.php" ><h3>Search</h3> </button>
                    </form>
                </div>
            </div>
            
            <?php
                if(isset($_POST['submit'])){

                    $con = mysqli_connect("localhost","root","","faceid");
                    $key = $_POST['dist'] ;
                    $key2 = $_POST['polarea'] ;
                    $key3 = $_POST['fday'] ;

                    if (!$con){
                        die('Could not connect: ' . mysqli_error());
                    }      
                
                    $sql="SELECT * FROM unidentifiedbodies WHERE policearea = '$key2' ";

                    // echo $sql;
                
                    $result = mysqli_query($con,$sql);
                    
                    if (!$result) {
                        die('Error: ' . mysqli_error($con));
                    }?>

                    <!-- <div class="row"> -->
                    <?php
                    While ($row = mysqli_fetch_assoc($result)){ ?>
                        <!-- <div> -->
                        <p><img src="./assets/img/faceid.jpg" width="250px" height="150px" alt="sometext" hspace="15"/></p>
                        <?php
                        echo "img src=".$dna."/"." width=100 height=100";
                        echo $row['date'];
                        echo $row['policearea'];
                        echo $row['province'];
                        echo $row['district'];
                        echo "</br>";?>
                        <!-- </div> -->
                        <?php

                    }?>

                    <!-- </div> -->
                                  
                <?php    
                }

            ?>
            
            <br>
            <br>
            <!-- <div class="row">
                <div class="img-with-text">
                    <p><img src="./assets/img/faceid.jpg" width="250px" height="150px" alt="sometext" hspace="15"/></p>
                    <p align="center">Data 1</p>
                    <p align="center">District</p>
                    <p align="center"><a href="view.html">Click here for more details</a></p>    
                </div>
                <div class="img-with-text">
                    <p><img src="./assets/img/faceid.jpg" width="250px" height="150px" alt="sometext" hspace="15"/></p>
                    <p align="center">Data 2</p>
                    <p align="center">District</p>
                    <p align="center"><a href="view.html">Click here for more details</a></p>
                </div>
                <div class="img-with-text">
                    <p><img src="./assets/img/faceid.jpg" width="250px" height="150px" alt="sometext" hspace="15" /></p>
                    <p align="center">Data 3</p>
                    <p align="center">District</p>
                    <p align="center"><a href="view.html">Click here for more details</a></p>
                </div>
                <div class="img-with-text">
                    <p><img src="./assets/img/faceid.jpg" width="250px" height="150px" alt="sometext" hspace="15" /></p>
                    <p align="center">Data 4</p>
                    <p align="center">District</p>
                    <p align="center"><a href="view.html">Click here for more details</a></p>
                </div>
                <div class="img-with-text">
                    <p><img src="./assets/img/faceid.jpg" width="250px" height="150px" alt="sometext" hspace="15"/></p>
                    <p align="center">Data 1</p>
                    <p align="center">District</p>
                    <p align="center"><a href="view.html">Click here for more details</a></p>        
                </div>
                <div class="img-with-text">
                    <p><img src="./assets/img/faceid.jpg" width="250px" height="150px" alt="sometext" hspace="15"/></p>
                    <p align="center">Data 2</p>
                    <p align="center">District</p>
                    <p align="center"><a href="view.html">Click here for more details</a></p>
                </div>
                <div class="img-with-text">
                    <p><img src="./assets/img/faceid.jpg" width="250px" height="150px" alt="sometext" hspace="15" /></p>
                    <p align="center">Data 3</p>
                    <p align="center">District</p>
                    <p align="center"><a href="view.html">Click here for more details</a></p>
                </div>
                <div class="img-with-text">
                    <p><img src="./assets/img/faceid.jpg" width="250px" height="150px" alt="sometext" hspace="15" /></p>
                    <p align="center">Data 4</p>
                    <p align="center">District</p>
                    <p align="center"><a href="view.html">Click here for more details</a></p>
                </div> 
            </div> -->
            <!-- <p align="center"><button type="button" class="btn btn-outline-primary"><h5>View More Data</h5></button></p> -->
        </div>
    </section>
    <section id="infoportal" class="bg-light" style="background-color: #f5f5f5;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase section-heading">Information portal</h2>
                    <h3 class="section-subheading text-muted">About our researches and other things</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4 infoportal-item">
                    <a href="#infoportalModal1" class="infoportal-link" data-toggle="modal">
                        <div class="infoportal-hover">
                            <div class="infoportal-hover-content"></div>
                        </div><img class="img-fluid" src="assets/img/imageicon.png" width="200" height="200"></a>
                    <div class="infoportal-caption">
                        <h4><a href="imagegallery.html">Images</a></h4>
                        <p class="text-muted">Image Gallery</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 infoportal-item">
                    <a href="#infoportalModal2" class="infoportal-link" data-toggle="modal">
                        <div class="infoportal-hover">
                            <div class="infoportal-hover-content"></div>
                        </div><img class="img-fluid" src="assets/img/videoicon.png" width="200" height="200"></a>
                    <div class="infoportal-caption">
                        <h4><a href="videogallery.html">Videos</a></h4>
                        <p class="text-muted">Video Gallery</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 infoportal-item">
                    <a href="#infoportalModal3" class="infoportal-link" data-toggle="modal">
                        <div class="infoportal-hover">
                            <div class="infoportal-hover-content"></div>
                        </div><img class="img-fluid" src="assets/img/magazineicon.png" width="200" height="200"></a>
                    <div class="infoportal-caption">
                        <h4><a href="magazinegallery.html">Magazines</a></h4>
                        <p class="text-muted">Data from Magazines</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 infoportal-item">
                    <a href="#infoportalModal4" class="infoportal-link" data-toggle="modal">
                        <div class="infoportal-hover">
                            <div class="infoportal-hover-content"></div>
                        </div><img class="img-fluid" src="assets/img/booksicon.png" width="200" height="200"></a>
                    <div class="infoportal-caption">
                        <h4><a href="booksgallery.html">Books</a></h4>
                        <p class="text-muted">Data from Books</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 infoportal-item">
                    <a href="#infoportalModal5" class="infoportal-link" data-toggle="modal">
                        <div class="infoportal-hover">
                            <div class="infoportal-hover-content"></div>
                        </div><img class="img-fluid img-fluid" src="assets/img/paperarticleicon.png" width="170" height="170"></a>
                    <div class="infoportal-caption">
                        <h4><a href="articlegallery.html">Paper Articles</a></h4>
                        <p class="text-muted">Articles</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 infoportal-item">
                    <a href="#infoportalModal6" class="infoportal-link" data-toggle="modal">
                        <div class="infoportal-hover">
                            <div class="infoportal-hover-content"></div>
                        </div><img class="img-fluid" src="assets/img/othericon.png" width="200" height="200"></a>
                    <div class="infoportal-caption">
                        <h4><a href="othergallery.html">Other Resources</a></h4>
                        <p class="text-muted">All other resources</p>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    <section id="portal" style="background-color: #f5f5f5 ;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase">Portal</h2>
                    <h3 class="text-muted section-subheading">&nbsp;View the Database</h3>
                </div>
            </div>
        </div>
    </section>
    
    <section>
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img class="d-block w-100" src=".../800x400?auto=yes&bg=777&fg=555&text=First slide" alt="First slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100" src=".../800x400?auto=yes&bg=666&fg=444&text=Second slide" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100" src=".../800x400?auto=yes&bg=555&fg=333&text=Third slide" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>
    
    <section id="contact" style="background-image:url('assets/img/map-image.png');">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase section-heading">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Send your requests here</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form action="./contactus/form.php" method="POST" id="contactForm" name="contactForm" novalidate="novalidate">
                        <div class="form-row">
                            <div class="col col-md-6">
                                <div class="form-group"><input class="form-control" type="text" required="" name="fname" placeholder="Your Name *"><small class="form-text text-danger flex-grow-1 help-block lead"></small></div>
                                <div class="form-group"><input class="form-control" type="email" required="" name="email" placeholder="Your Email *"><small class="form-text text-danger help-block lead"></small></div>
                                <div class="form-group"><input class="form-control" type="tel" required="" name="phone" placeholder="Your Phone *"><small class="form-text text-danger help-block lead"></small></div>
                                
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"><textarea class="form-control" required="" name="message" placeholder="Your Message *"></textarea><small class="form-text text-danger help-block lead"></small></div>
                            </div>
                            <div class="col-md-6">
                                <div calss="form-group"><input class="form-control" type="file" name="cimage" placeholder="Upload Image *" accept="image/*"><small class="form-text text-danger help-block lead"></small></div>
                            </div>
                            <!-- <div class="col">
                                <div class="clearfix"></div>
                            </div> -->
                            <div class="col-lg-12 text-center">
                                <div id="success"></div><button class="btn btn-primary btn-xl text-uppercase" type="submit" id="sendMessageButton">Send Message</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/agency.js"></script>
</body>

</html>