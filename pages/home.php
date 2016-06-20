<?php 
    session_start();
    if(!isset($_SESSION['total_items'])){
    $_SESSION['total_items']=null;
}
?>
<!DOCTYPE html>


<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Telecom</title>
    <!-- Bootstrap -->
    <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/index.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    
	<!-- Thumbnail gallery responsive -->
    <!-- <link href="resources/css/thumbnail-gallery.css" rel="stylesheet"> -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="../lib/js/jquery-2.2.4.min.js"></script>
</head>

<body>

    <!-- Landmark template incuded -->
     <?php require_once('../php/template_landmarks.php'); ?>

    <!-- Begin page wrapper -->
    <div class="page-wrap">
        
        <div class="carousel slide" id="telCarousel" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#telCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#telCarousel" data-slide-to="1"></li>
            </ol>
          <!-- Wraper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="../img/home/homeactive.png" alt="Telecom"/>
                <div class="carousel-caption">
                    <h2 class="mojH1">Samsung Galaxy S7 | S7 Edge</h2>
                    <h3>From 20€/month and after a year<br/> you are free to keep it, change it or return it</h3>
                     <a href="devices.html" class="btn btn-primary btn-xl">Find Out More</a>
                </div>
            </div>

            <div class="item">
                <img src="../img/home/home2.png" alt="Telecom"/>
                <div class="carousel-caption">
                    <h2>Big Gym</h2>
                    <h3>Be more. Do more.</h3>
                     <a href="devices.html" class="btn btn-primary btn-xl">Find Out More</a>
                </div>
            </div>
        </div>

           <!-- Left and right controls -->
           <a class="left carousel-control" href="#telCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#telCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>

        </div>

        <!-- Page content starts from here -->
        <div class="container">
            <div class="the_group_container row">
                <div class="col-md-6">
                    <h3>The Group </h3>
                    <div class="the_group_info "> </div>
                </div>
                <div class="the_group_img col-md-6">
                    <img class="img-rounded img-responsive"/>
                </div>
            </div>

            <div class="governance_container row">
                <div class="governance_img col-md-6">
                    <img class="img-rounded img-responsive"/>
                </div>
                <div class="col-md-6">
                    <h3>Governance </h3>
                    <div class="governance_info "> </div>
                </div>
            </div>
            <div class="bm_container row">
                <div class="col-md-6">
                    <h3 >Business&Management</h3>
                    <div class="bm_info"> </div>
                </div>
                <div class="bm_img col-md-6">
                    <img class="img-rounded"/>
                </div>
            </div>
            <div class="for_investors_container row">
                <div class="for_investors_img col-md-6">
                    <img/>
                </div>
                <div class="col-md-6">
                    <h3>For investors</h3>
                    <div class="for_investors_info "> </div>
                </div>
            </div>
           
             
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h2 class="section-heading">News</h2>
                            <hr class="primary">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <!-- CARUSEL OVDE -->

                        <div class="carousel slide" id="newsCarousel" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <!-- <li data-target="#newsCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#newsCarousel" data-slide-to="1"></li> -->
                                </ol>
                              <!-- Wraper for slides -->
                              <div class="carousel-inner" role="listbox" id="newsCarouselI">

                                <!-- <div class="item active">
                                    <img src="../img/home/homeactive.png" alt="Telecom"/>
                                    <div class="carousel-caption">
                                        <h2 class="mojH1">Samsung Galaxy S7 | S7 Edge</h2>
                                        <h3>From 20€/month and after a year<br/> you are free to keep it, change it or return it</h3>
                                         <a href="./devices.html" class="btn btn-primary btn-xl">Find Out More</a>
                                    </div>
                                </div>

                                <div class="item">
                                    <img src="../img/home/home2.png" alt="Telecom"/>
                                    <div class="carousel-caption">
                                        <h2>Big Gym</h2>
                                        <h3>Be more. Do more.</h3>
                                         <a href=".devices-list.html" class="btn btn-primary btn-xl">Find Out More</a>
                                    </div>
                                </div> -->

                            </div>

                               <!-- Left and right controls -->
                               <a class="left carousel-control" href="#newsCarousel" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="right carousel-control" href="#newsCarousel" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>

                            </div>

                        <!-- CARUSEL KRAJ -->
                    </div>
                </div>    

                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h2 class="section-heading">About Us</h2>
                            <hr class="primary">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row row-centered">
                        <div class="col-lg-4 col-md-4 text-center col-centered ">
                            <div class="service-box ">
                                <div class="col-md-12">
                                    <img class="img-circle img-responsive center-block" src="../img/home/innovation-icon.png"/>
                                </div>
                                <i class="fa fa-4x fa-diamond text-primary sr-icons"></i>
                                <h3>Inovation</h3>
                                <p class="text-muted inovation"></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 text-center col-centered">
                            <div class="service-box">
                                <div class="col-md-12 ">
                                    <img class="img-circle img-responsive center-block" src="../img/home/testimonial-icon.png"/>
                                </div>
                                <i class="fa fa-4x fa-paper-plane text-primary sr-icons"></i>
                                <h3>Testimonials</h3>
                                <p class="text-muted testimonials">You can use this theme as is, or you can make changes!</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 text-center col-centered">
                            <div class="service-box">
                                 <div class="col-md-12">
                                    <img class="img-circle img-responsive center-block" src="../img/home/projects-icon.png"/>
                                </div>
                                <i class="fa fa-4x fa-newspaper-o text-primary sr-icons"></i>
                                <h3>Projects</h3>
                                <p class="text-muted projects">We update dependencies to keep things fresh.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Form -->

                <!-- Map & contact --> 
                <div class="container">
                    <div class="row" id="map_contact_container">
                        <div class="col-md-6">
                            <h2>Contact</h2>
                            <form role="form">
                                <div class="form-group">
                                    <label for="nameField">Name:</label>
                                    <input type="text" class="form-control" id="nameField" placeholder="Enter Name" required/>
                                    <label for="emailField">Email:</label>
                                    <input type="email" class="form-control" id="emailField" placeholder="Enter Email" required/>
                                    <label for="MessageField">MessageField:</label>
                                    <textarea class="form-control" id="MessageField" placeholder="Enter Message" ></textarea>
                                    <p></p>
                                    <button class="btn btn-default">Submit</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6" id="map_container">
                            <div id="map_canvas"></div>
                        </div>
                    </div>

                </div>        
    </div>


    </div>
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p class="text-muted">Telecom 2016</p>
        </div>
    </footer>
    <script src="../lib/bootstrap/js/bootstrap.min.js"></script> <!-- !!! -->
    <!--<script src="../js/devices.js"></script> -->

    <script src="../js/loadPageContent.js"></script>
    <script src="../js/home.js"></script>
    <script src="../js/loadMap.js"></script>
</body>

</html>
