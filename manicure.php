<?php
session_start();
if(!isset($_SESSION['username'])){
    header("location: signin.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NailArt-MANICURE</title>

    <!-- animate.css-->
    <link href="assets/vendor/animate.css-master/animate.min.css" rel="stylesheet">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
        rel="stylesheet">
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
    <link href="assets/custom/css/mani.css" rel="stylesheet">
    <link href="assets/custom/css/custom.css" rel="stylesheet">
    <!-- FABLES CUSTOM CSS RESPONSIVE FILE -->
    <link href="assets/custom/css/custom-responsive.css" rel="stylesheet">

</head>
<style>
.fables-lus-icon {
    display: inline-block;
    height: 39px;
    /* text-align: center; */
    width: 48px;
    padding-top: 7px;
    line-height: 26px;
    top: -1px;
    left: -1px;
}
</style>

<body>
    <button onclick="topFunction()" id="myBtn" class="bounce-1" title="Go to top"><i class="fa fa-angle-double-up"
            aria-hidden="true"></i>
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
            <h2 class="fables-page-title fables-second-border-color wow fadeInLeft" data-wow-duration="1.5s">MANICURE
                TREATMENTS
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
                    <li class="breadcrumb-item"><a href="#" class="fables-second-text-color">Service</a></li>
                    <li class="breadcrumb-item active" aria-current="page">MANICURE TREATMENTS</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- /End Breadcrumbs -->


    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-12" style=" margin-top: -130px;  ">
                <div
                    class="owl-carousel owl-theme default-carousel nav-0 z-index mt-md-4 mt-xl-5 pt-md-4 pt-xl-5 dots-0 pb-md-5">
                    <div class="pt-0 mt-0 pt-xl-5 mt-xl-5 wow slideInUp" data-wow-duration="2s" data-wow-delay=".4s">
                        <img src="./assets/custom/images/menicure-1.jpg" alt="">
                    </div>
                    <div class="pt-0 mt-0 pt-xl-5 mt-xl-5 wow slideInUp" data-wow-duration="2s" data-wow-delay=".8s">
                        <img src="./assets/custom/images/menicure-2.jpg" alt="">
                    </div>
                    <div class="pt-0 mt-0 pt-xl-5 mt-xl-5 wow slideInUp" data-wow-duration="2s" data-wow-delay=".8s">
                        <img src="./assets/custom/images/menicure-3.jpg" alt="">
                    </div>
                    <div class="pt-0 mt-0 pt-xl-5 mt-xl-5 wow slideInUp" data-wow-duration="2s" data-wow-delay=".8s">
                        <img src="./assets/custom/images/menicure-4.jpg" alt="">
                    </div>
                </div>
                <h3 class="headd">MANICURE TREATMENTS </h3>
                <p class="head">
                    The treatment for improving the appearance of fingernails and hands is known as manicure, whereas,
                    the same
                    treatment meant for improving the appearance of toenails, feet and legs is known as pedicure. In
                    this Session,
                    you will learn about ‘manicure’.
                </p>
                <p class="head">
                    Manicure is a popular service in salons as smooth skin, well-shaped and varnished nails are vital
                    for a
                    well-groomed appearance Regular beauty treatment helps prevent minor nail damages. Professional
                    attention to
                    nails and surrounding skin encourages nail growth, keeps cuticles pushed back and prevents minor
                    skin
                    conditions. </p>
                <p class="head">
                    Remove the old nail paint first. Check the nails for ridges and other problems. Examine the nail
                    plate in its
                    natural condition after removing the nail polish. Sanitise the hand to prevent cross-infection and
                    do a manual
                    contra-indication check.If required, cut the nails to give them a shape as per the client’s
                    preference. This
                    should be done only with sterilised scissors. The nail clippings need to be collected in a tissue
                    paper and
                    disposed of appropriately. Step 5: Now, file the nails using an emery board. </p>



                <div class="formbold-main-wrapper text-left">

                    <div class="formbold-form-wrapper">

                        <form action="index.php">
                            <h5 class="bookinghead">Please Select Your Booking </h5>
                            <div class="contain">
                                <div class="formbold-mb-5">
                                    <div class="fables-team">
                                        <div class="row">
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                            <h6>Select Expert</h6>
                                        </div>
                                        <div class="row my-3 my-md-5 overflow-hidden">
                                            <div class="col-6 col-md-3 mb-4 wow fadeInDown" data-wow-delay="1.2s">
                                                <div
                                                    class="card fables-team-block fables-second-hover-text-color fables-team-border fables-second-border-color">
                                                    <div class="image-container shine-effect">
                                                        <a href="#"><img class="w-100"
                                                                src="assets/custom/images/team-1.jpg"
                                                                alt="Card image cap"></a>
                                                    </div>
                                                    <div class="card">
                                                        <h6><a href="#"
                                                                class=" semi-font fables-forth-text-color fables-second-hover-color team-name">
                                                                Jordan Mike</a></h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-3 mb-4 wow fadeInDown" data-wow-delay="1.2s">
                                                <div
                                                    class="card fables-team-block fables-second-hover-text-color fables-team-border fables-second-border-color">
                                                    <div class="image-container shine-effect">
                                                        <a href="#"><img class="w-100"
                                                                src="assets/custom/images/team-2.jpg"
                                                                alt="Card image cap"></a>
                                                    </div>
                                                    <div class="card">
                                                        <h6><a href="#"
                                                                class="semi-font fables-forth-text-color fables-second-hover-color team-name">Kelley
                                                                Miles
                                                            </a></h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-3 mb-4 wow fadeInDown" data-wow-delay="1.2s">
                                                <div
                                                    class="card fables-team-block fables-second-hover-text-color fables-team-border fables-second-border-color">
                                                    <div class="image-container shine-effect">
                                                        <a href="#"><img class="w-100"
                                                                src="assets/custom/images/team-3.jpg"
                                                                alt="Card image cap"></a>
                                                    </div>
                                                    <div class="card">
                                                        <h6><a href="#"
                                                                class=" semi-font fables-forth-text-color fables-second-hover-color team-name">Smith
                                                                Dan
                                                            </a></h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-3 mb-4 wow fadeInDown" data-wow-delay="1.2s">
                                                <div
                                                    class="card fables-team-block fables-second-hover-text-color fables-team-border fables-second-border-color">
                                                    <div class="image-container shine-effect">
                                                        <a href="#"><img class="w-100"
                                                                src="assets/custom/images/team-4.jpg"
                                                                alt="Card image cap"></a>
                                                    </div>
                                                    <div class="card">
                                                        <h6><a href="#"
                                                                class=" semi-font fables-forth-text-color fables-second-hover-color team-name">Carolyn
                                                                Olson
                                                            </a></h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-wrap formbold--mx-3">

                                    <div class="w-full sm:w-half formbold-px-3">
                                        <div class="formbold-mb-5">
                                            <div class="fontuser">

                                                <input type="text" placeholder="Name" name="username" required>
                                                <i class="fa fa-user fa-lg"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-full sm:w-half formbold-px-3">
                                        <div class="formbold-mb-5">
                                            <div class="fontuser">

                                                <input type="text" placeholder="E-mail" name="email" required>
                                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-full sm:w-half formbold-px-3">
                                        <div class="formbold-mb-5">
                                            <div class="fontuser">

                                                <input type="text" placeholder="Phone" name="phone" required>
                                                <i class="fa fa-phone" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-full sm:w-half formbold-px-3">
                                        <div class="formbold-mb-5">
                                            <div class="fontuser">

                                                <input type="date" placeholder="Date" name="date" required>
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-full sm:w-half formbold-px-3">
                                        <div class="formbold-mb-5">
                                            <div class="fontuser">

                                                <input type="text" autocomplete="off" list="time" placeholder="Time"
                                                    name="time" required>
                                                <i class="fa fa-hourglass" aria-hidden="true"></i>
                                                <datalist id="time" class="dropdown-menu" aria-labelledby="sub-nav1">
                                                    <option value="08:00" class="dropdown-item">
                                                    <option value="09:00" class="dropdown-item">
                                                    <option value="10:00" class="dropdown-item">
                                                    <option value="11:00" class="dropdown-item">
                                                </datalist>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="w-full sm:w-half formbold-px-3">
                                        <div class="formbold-mb-5">
                                            <div class="fontuser">
                                                <input list="browsers" autocomplete="off" placeholder="Service"
                                                    type="text" name="service" required>
                                                <datalist id="browsers" class="dropdown-menu"
                                                    aria-labelledby="sub-nav1">
                                                    <option value="MANICURE TREATMENTS" class="dropdown-item">
                                                    <option value="PEDICURE TREATMENTS" class="dropdown-item">
                                                    <option value="NAIL ARTS TREATMENTS" class="dropdown-item">
                                                    <option value="PARAFFIN HANDS" class="dropdown-item">
                                                </datalist>
                                            </div>
                                        </div>
                                    </div>
                                </div>




                                <div>
                                    <button name="book"
                                        class="btn fables-second-background-color white-color white-color-hover fables-btn-rounded px-4 py-2">Book
                                        Appointment</button>
                                </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-12 col-sm-12 col-12">
            <div style="margin-left: 15px;">

                <h5 class=" bookinghead" style="margin-top:61px;">Working Hours </h5>
                <div class="contain" style="    padding: 23px;">
                    <table>
                        <tr>
                            <td class="day">Monday</td>
                            <td style=" padding-top: 11px;">9 AM - 5 PM</td>

                        </tr>
                        <tr>
                            <td class="day">Tuesday</td>
                            <td style=" padding-top: 11px;">9 AM - 5 PM</td>

                        </tr>
                        <tr>
                            <td class="day">Wednesday</td>
                            <td style=" padding-top: 11px;">9 AM - 5 PM</td>

                        </tr>
                        <tr>
                            <td class="day">Thursday</td>
                            <td style=" padding-top: 11px;">9 AM - 5 PM</td>

                        </tr>
                        <tr>
                            <td class="day">Friday </td>
                            <td style=" padding-top: 11px;">9 AM - 5 PM</td>
                        </tr>
                        <tr>
                            <td class="day">Saturday</td>
                            <td style=" padding-top: 11px;">9 AM - 5 PM</td>
                        </tr>
                        <tr>
                            <td class="day">Sunday</td>
                            <td style="color: red;  padding-top: 11px;">CLOSED</td>
                        </tr>
                    </table>
                </div>
                <h5 class=" bookinghead" style="margin-top:28px;">Location</h5>
                <div>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d238155.7061547983!2d72.49017888671877!3d21.145118000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be05274e362b3e3%3A0x672dfe4f512e4d87!2sSDJ%20International%20College!5e0!3m2!1sen!2sin!4v1693905581071!5m2!1sen!2sin"
                        style="    
            
            width: 259px;
            height: 310px;
                   " allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <h5 class=" bookinghead" style="margin-top:28px;">FAQ</h5>
                <div>
                    <div id="accordion">
                        <div class="card border-0 mb-2">
                            <div class="card-header p-0 border bg-transparent rounded-0" id="headingOne">
                                <h5 class="mb-0 position-relative">
                                    <span class="fables-second-background-color white-color d-inline-block 
                            position-absolute fables-lus-icon pt-2 text-center">
                                        <i class="fas fa-plus"></i>
                                    </span>
                                    <button
                                        class="btn fables-main-text-color bg-transparent  focus-0 d-block position-relative z-index pl-6 pt-2 pb-2 w-100 text-left border-0 text-truncate"
                                        data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne" style="    font-size: 14px;">
                                        Learn Anytime & Anywhere
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#accordion">
                                <div class="card-body fables-forth-text-color font-14 py-1 py-xl-2  pr-0">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos reiciendis cum
                                    aliquid quam, consequatur. quisquam consectetur culpa commodi maxime in harum
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 mb-2">
                        <div class="card-header bg-transparent p-0 border rounded-0" id="headingTwo">
                            <h5 class="mb-0 position-relative">
                                <span class="fables-second-background-color white-color d-inline-block 
                              position-absolute fables-lus-icon pt-2 text-center">
                                    <i class="fas fa-plus"></i>
                                </span>
                                <button
                                    class="btn fables-main-text-color bg-transparent  focus-0 d-block position-relative z-index pl-6 pt-2 pb-2 w-100 text-left border-0 text-truncate collapsed"
                                    data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo" style="    font-size: 14px;">
                                    Learn Anytime & Anywhere </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body fables-forth-text-color font-14 py-1 py-xl-2  pr-0">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos reiciendis cum
                                aliquid quam, consequatur. quisquam consectetur culpa commodi maxime in harum
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 mb-2">
                        <div class="card-header p-0 border bg-transparent rounded-0" id="headingThree">
                            <h5 class="mb-0 position-relative">
                                <span class="fables-second-background-color white-color d-inline-block 
                              position-absolute fables-lus-icon pt-2 text-center">
                                    <i class="fas fa-plus"></i>
                                </span>
                                <button
                                    class="btn fables-main-text-color bg-transparent focus-0 d-block position-relative z-index pl-6 pt-2 pb-2 w-100 text-left border-0 text-truncate collapsed"
                                    data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree" style="    font-size: 14px;">
                                    Learn Anytime & Anywhere </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                            data-parent="#accordion">
                            <div class="card-body fables-forth-text-color font-14 py-1 py-xl-2  pr-0">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos reiciendis cum
                                aliquid quam, consequatur. quisquam consectetur culpa commodi maxime in harum
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 mb-2">
                        <div class="card-header p-0 border bg-transparent rounded-0" id="headingfour">
                            <h5 class="mb-0 position-relative">
                                <span class="fables-second-background-color white-color d-inline-block 
                                        position-absolute fables-lus-icon pt-2 text-center">
                                    <i class="fas fa-plus"></i>
                                </span>
                                <button
                                    class="btn fables-main-text-color bg-transparent  focus-0 d-block position-relative z-index pl-6 pt-2 pb-2 w-100 text-left border-0 text-truncate collapsed"
                                    data-toggle="collapse" data-target="#collapseFour" aria-expanded="false"
                                    aria-controls="collapseThree" style="    font-size: 14px;">
                                    Learn Anytime & Anywhere </button>
                            </h5>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingfour" data-parent="#accordion">
                            <div class="card-body fables-forth-text-color font-14 py-1 py-xl-2  pr-0">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos reiciendis cum
                                aliquid quam, consequatur. quisquam consectetur culpa commodi maxime in harum
                            </div>
                        </div>
                    </div>
                </div>
                <h5 class=" bookinghead" style="margin-top:28px;">Location</h5>
                <div class="contain" style="  padding: 20px;">

                    <!-- Facebook -->
                    <i class="fab fa-facebook-f " style="color: #3b5998; padding: 7px;    font-size: 22px;"></i>

                    <!-- Twitter -->
                    <i class="fab fa-twitter " style="color: #55acee;  padding: 7px;    font-size: 22px;"></i>

                    <!-- Google -->
                    <i class="fab fa-google " style="color: #dd4b39;  padding: 7px; font-size: 22px;"></i>

                    <!-- Instagram -->
                    <i class="fab fa-instagram " style="color: #ac2bac;  padding: 7px; font-size: 22px;"></i>

                    <!-- Linkedin -->
                    <i class="fab fa-linkedin-in " style="color: #0082ca;  padding: 7px; font-size: 22px;"></i>

                    <!-- Pinterest -->
                    <i class="fab fa-pinterest " style="color: #c61118;  padding: 7px; font-size: 22px;"></i>

                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    </div>
    <div class="fables-after-overlay py-5 bg-rules" style="background-color: #82a7b3;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="fables-contact-caption-txt">
                        <h3 class="font-25 font-weight-bold white-color mb-3 position-relative z-index">
                            LATEST NAIL TRENDS AND DESIGNS FOR YOU!!</h3>
                        <p class="fables-third-text-color position-relative z-index font-weight-light">Lorem ipsum dolor
                            sit amet, consectetur adipiscing elit. Aenean ac lorem pretium laoreet enim at, malesuada
                            Class aptent taciti sociosqu.</p>

                    </div>
                </div>
                <div class="col-12 col-md-3 offset-xl-2 col-xl-2">
                    <a href="contactus1.html"
                        class="btn bg-primar fables-btn-rounded white-color mt-3 position-relative z-index font-19 px-5 py-2 white-color-hover">Contact
                        us</a>
                </div>
            </div>

        </div>
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
    <script src="assets/vendor/jquery-circle-progress/circle-progress.min.js"></script>
    <script src="assets/vendor/popper/popper.min.js"></script>
    <script src="assets/vendor/jQuery.countdown-master/jquery.countdown.min.js"></script>
    <script src="assets/vendor/timeline/jquery.timelify.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap-4-navbar.js"></script>
    <script src="assets/vendor/WOW-master/dist/wow.min.js"></script>
    <script src="assets/vendor/owlcarousel/owl.carousel.min.js"></script>
    <script src="assets/custom/js/jquery-data-to.js"></script>
    <script src="assets/vendor/jquery-circle-progress/circle.js"></script>
    <script src="assets/custom/js/custom.js"></script>

</body>

</html>