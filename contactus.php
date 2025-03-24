<?php
    include("config.php");
    session_start();
    if(isset($_GET["contact"])){
        $username = $_SESSION['username'];
        $first = $_GET["first"];
        $last = $_GET["last"];
        $email = $_GET["email"];
        $subject = $_GET["subject"];
        $message = $_GET["msg"];
        $query = "insert into contactus(username,firstname,lastname,email,subject,message) values('$username','$first','$last','$email','$subject','$message')";
        mysqli_query($con,$query);
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Fables">
    <meta name="author" content="Enterprise Development">
    <link rel="shortcut icon" href="assets/custom/images/shortcut.png">

    <title>NailArt-Contact</title>
    
    <!-- animate.css-->  
    <link href="assets/vendor/animate.css-master/animate.min.css" rel="stylesheet">
    <!-- Load Screen -->
    <link href="assets/vendor/loadscreen/css/spinkit.css" rel="stylesheet">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <!-- Font Awesome 5 -->
    <link href="assets/vendor/fontawesome/css/fontawesome-all.min.css" rel="stylesheet">
    <!-- Fables Icons -->
    <link href="assets/custom/css/fables-icons.css" rel="stylesheet"> 
    <!-- Bootstrap CSS --> 
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap-4-navbar.css" rel="stylesheet">
    <!-- portfolio filter gallery -->
    <link href="assets/vendor/portfolio-filter-gallery/portfolio-filter-gallery.css" rel="stylesheet">
    <!-- FANCY BOX -->
    <link href="assets/vendor/fancybox-master/jquery.fancybox.min.css" rel="stylesheet"> 
    <!-- RANGE SLIDER -->
    <link href="assets/vendor/range-slider/range-slider.css" rel="stylesheet">
    <!-- OWL CAROUSEL  --> 
    <link href="assets/vendor/owlcarousel/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/owlcarousel/owl.theme.default.min.css" rel="stylesheet">
    <!-- FABLES CUSTOM CSS FILE -->
    <link href="assets/custom/css/custom.css" rel="stylesheet">
    <!-- FABLES CUSTOM CSS RESPONSIVE FILE -->
    <link href="assets/custom/css/custom-responsive.css" rel="stylesheet">
     
</head>

<body>
    <button onclick="topFunction()" id="myBtn" class="bounce-1" title="Go to top"><i class="fa fa-angle-double-up" aria-hidden="true"></i>
    </button>


    <div class="search-section">
        <a class="close-search" href="#"></a>
        <div class="d-flex justify-content-center align-items-center h-100">
            <form method="post" action="#" class="w-50">
                <div class="row">
                    <div class="col-10">
                        <input type="search" value="" class="form-control palce bg-transparent border-0 search-input"
                            placeholder="Search Here ..." />
                    </div>
                    <div class="col-2 mt-3">
                        <button type="submit" class="btn bg-transparent text-white"> <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>

    </div>
    

    <!-- Loading Screen -->
    <div id="ju-loading-screen">
        <div class="sk-double-bounce">
            <div class="sk-child sk-double-bounce1"></div>
            <div class="sk-child sk-double-bounce2"></div>
        </div>
    </div>


    <?php
        require("nav.php");
    ?>

    <!-- /End Fables Navigation -->

    <!-- Start Header -->
    <div class="fables-header fables-after-overlay bg-rules">
        <div class="container">
            <h2 class="fables-page-title fables-second-border-color wow fadeInLeft" data-wow-duration="1.5s"> Contact Us
            </h2>
        </div>
    </div>
    <!-- /End Header -->
  <!-- Start Breadcrumbs -->
  <div class="fables-light-gary-background">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="fables-breadcrumb breadcrumb px-0 py-3">
                <li class="breadcrumb-item"><a href="#" class="fables-second-text-color">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"> Contact Us</li>
            </ol>
        </nav>
    </div>
</div>
<!-- /End Breadcrumbs -->
     

<!-- Start page content --> 
    <div class="container"> 
        <div class="row my-4 my-md-5 overflow-hidden">
             <div class="col-12 col-sm-6 col-md-4 text-center mb-4 mb-md-0 wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".4s"> 
                    <span class="fables-iconmap-icon fa-2x fables-second-background-color text-white rounded-circle d-inline-block p-4"></span> 
                    <h2 class="font-16 semi-font fables-second-text-color my-3">Address Information</h2>
                    <p class="font-14 fables-forth-text-color">
                    level13, 2Elizabeth St, Melbourne,Victor 2000</p>        
                   
             </div>
             <div class="col-12 col-sm-6 col-md-4 text-center mb-4 mb-md-0 wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".8s"> 
                    <span class="fables-iconphone fa-2x  fables-second-background-color text-white rounded-circle d-inline-block p-4"></span>
                    <h2 class="font-16 semi-font fables-second-text-color my-3">Mail & Phone number</h2>
                    <p class="font-14 fables-forth-text-color">adminsupport@website.com</p>
                    <p class="font-14 fables-forth-text-color">+333 111 111 000</p> 
             </div>
             <div class="col-12 col-sm-6 col-md-4 text-center mb-4 mb-md-0 wow zoomIn" data-wow-duration="1.5s" data-wow-delay="1.2s"> 
                    <span class="fables-iconshare-icon fa-2x fables-second-background-color text-white rounded-circle d-inline-block p-4"></span>
                    <h2 class="font-16 semi-font fables-second-text-color my-3">Stay In Touch</h2>
                    <ul class="nav fables-contact-social-links"> 
                        <li><a href="#" target="_blank"><i class="fab fa-facebook-f fables-forth-text-color fa-fw"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-instagram fables-forth-text-color  fa-fw"></i></a></li> 
                        <li><a href="#" target="_blank"><i class="fab fa-twitter fables-forth-text-color    fa-fw"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-linkedin fables-forth-text-color   fa-fw"></i></a></li>
                    </ul> 
             </div>
        </div>  
    </div>
    <div class="fables-contact-caption fables-second-background-color px-2 px-sm-5 text-left text-sm-center py-5 bg-rules">
           <div class="container">
               <div class="row">
                   <div class="col-12 col-lg-8 offset-lg-2"> 
                       <h3 class="font-25 font-weight-bold white-color position-relative z-index">LATEST NAIL TRENDS AND DESIGNS FOR YOU!!</h3>  
                       <p class="font-weight-light fables-third-text-color my-3 position-relative z-index">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac lorem pretium laoreet enim at, malesuada Class aptent taciti sociosqu.</p>
                       <a href="#" class="btn bg-primar fables-rounded-btn white-color fables-btn-rounded font-19 px-5 mt-2 position-relative z-index">know more</a> 
                   </div>
                    
               </div>
               
           </div>
    </div> 
    <div class="container">     
        <div class="row my-4 my-md-5">
             <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2"> 
                <h3 class="font-35 font-weight-bold fables-second-text-color text-center mb-3">Contact Us</h3>
                <p class="fables-forth-text-color text-center">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal </p>
                 
             </div>   
         </div>    
        <div class="row overflow-hidden">
            <div class="col-12 wow slideInLeft" data-wow-duration="1.5s">
                <form class="fables-contact-form">
                  <div class="form-row">
                      <div class="form-group col-md-6">
                          <input type="text" class="form-control p-3 rounded-0" name="first"  placeholder="First Name">   
                      </div>
                      <div class="form-group col-md-6">
                          <input type="text" class="form-control p-3 rounded-0" name="last"  placeholder="Last Name">  
                      </div> 
                  </div>
                  <div class="form-row">
                      <div class="form-group col-md-6">
                          <input type="email" class="form-control p-3 rounded-0" name="email" placeholder="Email"> 
                      </div>
                      <div class="form-group col-md-6">
                          <input type="text" class="form-control p-3 rounded-0" name="subject" placeholder="Subject"> 
                      </div> 
                  </div> 
                  <div class="form-row"> 
                       <div class="form-group col-md-12">
                           <textarea class="form-control p-3 rounded-0" name="msg" placeholder="Message" rows="4"></textarea>
                      </div> 
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-12 text-center">
                        <button type="submit" name="contact" class="btn fables-second-background-color fables-btn-rounded white-color px-7 font-20 py-2">Send</button>
                    </div>
                  </div>
                </form>
                
                   
            </div>
                
        </div> 
    </div> 
        <h3 class="fables-second-text-color font-35 font-weight-bold text-center mt-0 mb-5 my-md-5">Our Location</h3>      
        <div class="mb-4 mb-md-0"  style="width:100%;height:420px">
        
            <iframe  style="width:100%;height:420px"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d238155.7061547983!2d72.49017888671877!3d21.145118000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be05274e362b3e3%3A0x672dfe4f512e4d87!2sSDJ%20International%20College!5e0!3m2!1sen!2sin!4v1693905581071!5m2!1sen!2sin"></iframe>
          </div> 
 
<!-- /End page content -->

  <!-- Start Footer 2 Background Image  -->
  <div class="fables-footer-image fables-after-overlay white-color py-4 py-lg-5 bg-rules">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 mt-2 mb-5 text-center">
                <h2 class="font-30 semi-font mb-5">Newsletter</h2>
                <form class="form-inline position-relative">
                    <div class="form-group fables-subscribe-formgroup">
                        <input type="email" class="form-control fables-subscribe-input fables-btn-rouned"
                            placeholder="Your Email">
                    </div>
                    <button type="submit"
                        class="btn fables-second-background-color fables-btn-rouned fables-subscribe-btn">Subscribe</button>
                </form>

            </div>
            <div class="col-12 col-lg-4 mb-4 mb-lg-0">
                <div class="navbar-brand text-center fables-logo-brand pl-0" style="width: 8em;">
                    <h1 class="m-0 site-logo "><a href="index.html" class="text-center">NailArt</a></h1>

                </div>
                <p class="font-15 fables-third-text-color">
                    t is a long established fact that a reader will be distracted by the readable content of a page
                    when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                    distribution of letters.
                    <br><br>
                    t is a long established fact that a reader will be distracted by the readable content of a page
                    when looking at its layout.
                </p>

            </div>

            <div class="col-12 col-sm-6 col-lg-4">
                <h2 class="font-20 semi-font fables-second-border-color border-bottom pb-3">Contact us</h2>
                <div class="my-3">
                    <h4 class="font-16 semi-font"><span
                            class="fables-iconmap-icon fables-second-text-color pr-2 font-20 mt-1 d-inline-block"></span>
                        Address Information</h4>
                    <p class="font-14 fables-fifth-text-color mt-2 ml-4">level13, 2Elizabeth St, Melbourne, Victor
                        2000</p>
                </div>
                <div class="my-3">
                    <h4 class="font-16 semi-font"><span
                            class="fables-iconphone fables-second-text-color pr-2 font-20 mt-1 d-inline-block"></span>
                        Call Now </h4>
                    <p class="font-14 fables-fifth-text-color mt-2 ml-4">+333 111 111 000</p>
                </div>
                <div class="my-3">
                    <h4 class="font-16 semi-font"><span
                            class="fables-iconemail fables-second-text-color pr-2 font-20 mt-1 d-inline-block"></span>
                        Mail </h4>
                    <p class="font-14 fables-fifth-text-color mt-2 ml-4">adminsupport@website.com</p>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <h2 class="font-20 semi-font fables-second-border-color border-bottom pb-3 mb-3">EXPLORE OUR SITE
                </h2>
                <ul class="nav fables-footer-links">
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="contactus.html">Contact Us</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                    <li><a href="team.html">Team</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="testimonials.html">Testimonials</a></li>
                </ul>
            </div>

        </div>

    </div>
</div>
<div class="copyright  mt-0 border-0 white-color" style="background-color: #82a7b3  ;">
    <ul class="nav fables-footer-social-links just-center fables-light-footer-links">
        <li><a href="#" target="_blank"><i class="fab fa-google-plus-square"></i></a></li>
        <li><a href="#" target="_blank"><i class="fab fa-facebook"></i></a></li>
        <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
        <li><a href="#" target="_blank"><i class="fab fa-pinterest-square"></i></a></li>
        <li><a href="#" target="_blank"><i class="fab fa-twitter-square"></i></a></li>
        <li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
    </ul>
    <p class="mb-0">Copyright © me 2018. All rights reserved.</p>

</div>

<!-- /End Footer 2 Background Image -->

<script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="assets/vendor/loadscreen/js/ju-loading-screen.js"></script>
<script src="assets/vendor/popper/popper.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap-4-navbar.js"></script>
<script src="assets/vendor/WOW-master/dist/wow.min.js"></script>
<script src="assets/vendor/owlcarousel/owl.carousel.min.js"></script>
<script src="assets/vendor/jQuery.countdown-master/jquery.countdown.min.js"></script>
<script src="assets/custom/js/custom.js"></script> 
<script src="assets/vendor/timeline/jquery.timelify.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyApW03tvAPTXWd1RHJBF2Up3iJMVu1wHi4&callback=JaMap"></script>
     
    
</body>
</html>