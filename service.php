<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Fables">
    <meta name="author" content="Enterprise Development">
    <link rel="shortcut icon" href="assets/custom/images/shortcut.png">

    <title>NailArt-SERVICE</title>

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
    <link href="assets/custom/css/custom.css" rel="stylesheet">
    <!-- FABLES CUSTOM CSS RESPONSIVE FILE -->
    <link href="assets/custom/css/custom-responsive.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


</head>


<body>
    <button onclick="topFunction()" id="myBtn" class="bounce-1" title="Go to top"><i class="fa fa-angle-double-up"
            aria-hidden="true"></i>
    </button>
    <?php
session_start();
if(isset($_SESSION['username'])){
    ?>
<div class="feedback-btn">
        <p class="feedback-txt text-center" id="openModalBtn"> Appointment</p>
    </div>
    <?php
    
}
else{
    ?>
    <div class="feedback-btn">
        <p class="feedback-txt text-center"><a href="signin.php"> Appointment</a></p>
    </div>
    <?php
}
?>
    

    <div id="modal" class="modal">

        <div class="modal-content ">
            <span class="close" id="closeModalBtn">&times;</span>
            <h2 class="text-center">Book an Appointment</h2>
            <form class="bookform" action="index.php">
                <div class="flex flex-wrap formbold--mx-3">

                    <div class="w-full sm:w-half formbold-px-3">
                        <div class="formbold-mb-5">
                            <div class="fontuser modal-fontuser">
                                <i class="fa fa-user fa-lg modal-icon"></i>
                                <input type="text" placeholder="Name" name="username">
                            </div>
                        </div>
                    </div>
                    <div class="w-full sm:w-half formbold-px-3">
                        <div class="formbold-mb-5">
                            <div class="fontuser modal-fontuser">

                                <i class="fa fa-envelope modal-icon" aria-hidden="true"></i>
                                <input type="text" placeholder="E-mail" name="email">
                            </div>
                        </div>
                    </div>
                    <div class="w-full sm:w-half formbold-px-3">
                        <div class="formbold-mb-5">
                            <div class="fontuse modal-fontuser">

                                <i class="fa fa-phone modal-icon" aria-hidden="true"></i>
                                <input type="text" placeholder="Phone" name="phone">
                            </div>
                        </div>
                    </div>
                    <div class="w-full sm:w-half formbold-px-3">
                        <div class="formbold-mb-5">
                            <div class="fontuse modal-fontuser">

                                <i class="fa fa-calendar modal-icon" aria-hidden="true"></i>
                                <input type="date" placeholder="Date" name="date">
                            </div>
                        </div>
                    </div>
                    <div class="w-full sm:w-half formbold-px-3">
                        <div class="formbold-mb-5">
                            <div class="fontuse modal-fontuser">

                                <i class="fa fa-hourglass modal-icon" aria-hidden="true"></i>
                                <input type="text" list="time" placeholder="Time" name="time">
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
                            <div class="fontuse r">
                                <input list="browsers" placeholder="Service" type="text" name="service">
                                <datalist id="browsers" class="dropdown-menu" aria-labelledby="sub-nav1">
                                    <option value="MANICURE TREATMENTS" class="dropdown-item">
                                    <option value="PEDICURE TREATMENTS" class="dropdown-item">
                                    <option value="NAIL ARTS TREATMENTS" class="dropdown-item">
                                    <option value="PARAFFIN HANDS" class="dropdown-item">
                                </datalist>
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="book"
                        class="btn fables-second-background-color white-color white-color-hover fables-btn-rounded px-4 py-2">Book
                        Now</button>

                </div>
            </form>
        </div>
    </div>
    <div id="chat-container" style="display:none;">
        <button id="openChatBtn" class="chat-button">Open Chat</button>
        <div id="chat-box" class="chat-box">
            <div class="chat-header">
                <span class="close-chat" id="closeChatBtn">&times;</span>
                <h2>Live Chat</h2>
            </div>
            <div class="chat-content">
            </div>
            <div class="chat-input">
                <input type="text" id="messageInput" placeholder="Type your message...">
                <button id="sendMessageBtn">Send</button>
            </div>
        </div>
    </div>

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
            <h2 class="fables-page-title fables-second-border-color wow fadeInLeft" data-wow-duration="1.5s">Services
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
                    <li class="breadcrumb-item active" aria-current="page">Service</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- /End Breadcrumbs -->

    <div class="fables-price-bg  py-4 py-lg-5 my-4 my-lg-5 bg-rules overflow-hidden">
        <div class="container position-relative z-index">
            <h2 class=" font-35 font-weight-bold text-center mb-4 mb-md-5">Our Pricing</h2>
            <div class="row" id="data">
                <div class="col-12 col-sm-6 col-lg-3 text-center mb-4 mb-lg-0 wow bounceInDown" data-wow-delay=".4s"
                    data-wow-duration="1.5s">
                    <div class="table-border-light fables-second-hover-border colored-table">
                        <div class="bg-blue py-4">
                            <h4 class="white-color font-weight-bold position-relative fables-third-after  table-title">
                                MANICURE TREATMENTS</h4>
                            <h2 class="white-color font-weight-bold font-35 position-relative mt-4 d-inline-block">30.99
                                <span class="table-badge white-color position-absolute">$</span>
                            </h2>
                            <p class="white-color font-13 mb-4">From</p>
                            <span
                                class="fables-table-arrow border-2 bg-blue white-color rounded-circle border-white position-absolute"><i
                                    class="fas fa-arrow-down"></i></span>
                        </div>
                        <div class="py-4" style="background-color: #ae8cc354;">
                            <p class="fables-forth-text-color my-4 px-4 line-height-large font-15">
                                Color/Gel Removal<br />
                                Plain Manicure<br />
                                Single Colour<br />
                                Nail Art
                            </p>
                            <a href="manicure.php"
                                class="btn fables-second-background-color white-color white-color-hover fables-btn-rounded px-4 py-2">Book
                                Now</a>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-sm-6 col-lg-3 text-center mb-4 mb-lg-0 wow bounceInDown" data-wow-delay=".8s"
                    data-wow-duration="1.5s">
                    <div class="table-border-light fables-second-hover-border colored-table">
                        <div class=" fables-second-background-colo py-4"
                            style="background-color: #E0D6B3   !important; transition: all ease-in-out .3s;">
                            <h4 class="white-color font-weight-bold position-relative fables-third-after table-title">
                                PEDICURE TREATMENTS</h4>
                            <h2 class="white-color font-weight-bold font-35 position-relative mt-4 d-inline-block">30.99
                                <span class="table-badge white-color position-absolute">$</span>
                            </h2>
                            <p class="white-color font-13 mb-4">From</p>
                            <span
                                class="fables-table-arrow border-2 fables-second-background-colo white-color rounded-circle border-white position-absolute"><i
                                    class="fas fa-arrow-down"></i></span>
                        </div>
                        <div class="py-4" style="background-color: #eae2c678;">
                            <p class="fables-forth-text-color my-4 px-4 line-height-large font-15">
                                Color/Gel Removal<br />
                                Plain Manicure<br />
                                Single Colour<br />
                                Nail Art
                            </p>
                            <a href="pedicure.php"
                                class="btn fables-second-background-color white-color white-color-hover fables-btn-rounded px-4 py-2">Book
                                Now</a>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-sm-6 col-lg-3 text-center mb-4 mb-lg-0 wow bounceInDown" data-wow-delay="1.2s"
                    data-wow-duration="1.5s">
                    <div class="table-border-light fables-second-hover-border colored-table">
                        <div class="bg-primar py-4">
                            <h4 class="white-color font-weight-bold position-relative fables-third-after  table-title">
                                NAIL ARTS TREATMENTS
                            </h4>
                            <h2 class="white-color font-weight-bold font-35 position-relative mt-4 d-inline-block">30.99
                                <span class="table-badge white-color position-absolute">$</span>
                            </h2>
                            <p class="white-color font-13 mb-4">From</p>
                            <span
                                class="fables-table-arrow border-2 bg-primar white-color rounded-circle border-white position-absolute"><i
                                    class="fas fa-arrow-down"></i></span>
                        </div>
                        <div class="py-4" style="background-color: #f1aca761;">
                            <p class="fables-forth-text-color my-4 px-4 line-height-large font-15">
                                Color/Gel Removal<br />
                                Plain Manicure<br />
                                Single Colour<br />
                                Nail Art
                            </p>
                            <a href="nailart.php"
                                class="btn fables-second-background-color white-color white-color-hover fables-btn-rounded px-4 py-2">Book
                                Now</a>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-sm-6 col-lg-3 text-center mb-4 mb-lg-0 wow bounceInDown" data-wow-delay="1.6s"
                    data-wow-duration="1.5s">
                    <div class="table-border-light fables-second-hover-border colored-table">
                        <div class="fables-main-background-color py-4">
                            <h4 class="white-color font-weight-bold position-relative fables-third-after table-title">
                                PARAFFIN <br />HANDS
                            </h4>
                            <h2 class="white-color font-weight-bold font-35 position-relative mt-4 d-inline-block">30.99
                                <span class="table-badge white-color position-absolute">$</span>
                            </h2>
                            <p class="white-color font-13 mb-4">From</p>
                            <span
                                class="fables-table-arrow border-2 fables-main-background-color white-color rounded-circle border-white position-absolute"><i
                                    class="fas fa-arrow-down"></i></span>
                        </div>
                        <div class=" py-4" style="background-color: #c4c9408f;">
                            <p class="fables-forth-text-color my-4 px-4 line-height-large font-15">
                                Color/Gel Removal<br />
                                Plain Manicure<br />
                                Single Colour<br />
                                Nail Art
                            </p>
                            <a href="paraffina.php"
                                class="btn fables-second-background-color white-color white-color-hover fables-btn-rounded px-4 py-2">Book
                                Now</a>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>

    <div class=" py-3 py-md-5 bg-rules" style="background-color: black;     height: 580px;">
        <h4 class="fables-second-text-color  font-weight-bold text-left mb-4 mb-md-5" style="margin-left: 51px;">Our
            Services</h4>
        <div class="text-right">
            <a href="#" class="btn fables-second-background-color white-color white-color-hover px-4 py-2" style="margin-right: 80px;
                width: 10em;">Read More</a>
        </div>
        <h1 class="text-white text-left mb-4 mb-md-5" style="margin-left: 51px;     margin-top: -31px;">WHAT WE OFFER
        </h1>
        <h6 class="text-white text-left " style="margin-left: 51px;     margin-top: -31px;">It is a long established
            fact that a reader will be distracted by the readable content of a page when looking</h6>
        <h6 class="text-white text-left " style="margin-left: 51px;  margin-top: 5px;  "> at its ayout. The point of
            using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as</h6>
        <h6 class="text-white text-left " style="margin-left: 51px; margin-bottom: 36px; margin-top: 5px;"> opposed to
            using 'Content here, content here', making it look like readable English.</h6>

        <div class="container">
            <div class=" py-3 py-md-5 " style="background-color: #82a7b1; height: 460px;">
                <div class="row" style="margin-left: 46px;
                margin-right: 46px;">
                    <div class="col-12 col-sm-6 col-lg-3 text-center mb-4 mb-lg-0 wow bounceInDown"
                        data-wow-delay="0.6s" data-wow-duration="0.5s">
                        <div class="table-border-light fables-second-hover-border colored-table">
                            <div class="py-4 shine-effect image-container">
                                <img src="./assets/custom/images/service-one.png" alt=""
                                    style="height: 300px; margin-top: -20px;">
                            </div>
                            <div class="bg-primar pp py-4">
                                <h5 class="white-color  position-relative fables-third-after  table-title">
                                    Manicure</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 text-center mb-4 mb-lg-0 wow bounceInDown"
                        data-wow-delay="0.6s" data-wow-duration="0.5s">
                        <div class="table-border-light fables-second-hover-border colored-table">
                            <div class=" py-4 shine-effect image-container">
                                <img src="./assets/custom/images/service-three.png" alt=""
                                    style="height: 300px; margin-top: -20px;">
                            </div>
                            <div class="bg-primar pp py-4">
                                <h5 class="white-color  position-relative fables-third-after  table-title">
                                    Pedicure </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 text-center mb-4 mb-lg-0 wow bounceInDown"
                        data-wow-delay="0.6s" data-wow-duration="0.5s">
                        <div class="table-border-light fables-second-hover-border colored-table">
                            <div class=" py-4 shine-effect image-container">
                                <img src="./assets/custom/images/service-two.png" alt=""
                                    style="height: 300px; margin-top: -20px;">
                            </div>
                            <div class="bg-primar pp py-4">
                                <h5 class="white-color  position-relative fables-third-after  table-title">
                                    Nailart</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 text-center mb-4 mb-lg-0 wow bounceInDown"
                        data-wow-delay="0.6s" data-wow-duration="0.5s">
                        <div class="table-border-light fables-second-hover-border colored-table">
                            <div class="py-4 shine-effect image-container">
                                <img src="./assets/custom/images/service-four.png" alt=""
                                    style="height: 300px; margin-top: -20px;">
                            </div>
                            <div class="bg-primar pp py-4">
                                <h5 class="white-color  position-relative fables-third-after  table-title">
                                    Paraffin Hands</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container py-3">
            <div class="fables-Testimonials my-3 text-center" style="background:url('./assets/custom/images/bg-testimonial.jpg');  height: 500px; /* You must set a specified height */
            background-position: center; 
            background-repeat: no-repeat; 
            background-size: cover;">
                <h4 class="fables-second-text-color mb-5 font-weight-bold"> Testimonials </h4>
                <h3 class="text-center" style="  margin-top: -44px;
                              margin-bottom: 52px;"> WHAT OUR CLIENT’S SAY</h3>
                <div class="row text-center">
                    <div class="col-12 col-md-12 text-center" style="
                    margin-left:175px;
                ">
                        <div class="box text-center" style="border: 2px solid black; width: 50rem;">
                            <div class="owl-carousel owl-theme dots-0 nav-default default-carousel text-center">
                                <div class="text-center">
                                    <div>
                                        <div class="image-container shine-effect d-inline-block rounded-circle">
                                            <img src="assets/custom/images/testimonial-img.png" alt="Fables Template"
                                                class="fables-testimonial-carousel-img my-0 mx-auto rounded-circle">
                                        </div>

                                        <h3 class="font-14 semi-font   mt-3">Billy Richards</h3>
                                        <h3 class="font-13 font-italic  mt-2 mb-4">Chief Manager, Simba Co</h3>
                                    </div>
                                    <div class="fables-testimonial-carousel-item fables-rounded p-3">
                                        <div style="  margin-right: 20px; margin-left: 20px;"
                                            class="fables-testimonial-detail font-15 font-italic  position-relative">
                                            No matter what issue or questions pops up, you are always there to
                                            assist me. Thank you so much for your excellent assistance and great
                                            customer support through years.
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <div>
                                        <div class="image-container shine-effect d-inline-block rounded-circle">
                                            <img src="assets/custom/images/testimonial-img.png" alt="Fables Template"
                                                class="fables-testimonial-carousel-img my-0 mx-auto rounded-circle">
                                        </div>
                                        <h3 class="font-14 semi-font   mt-3">Billy Richards</h3>
                                        <h3 class="font-13 font-italic  mt-2 mb-4">Chief Manager, Simba Co</h3>
                                    </div>
                                    <div class="fables-testimonial-carousel-item fables-rounded p-3">
                                        <div style="  margin-right: 20px; margin-left: 20px;"
                                            class="fables-testimonial-detail font-15 font-italic  position-relative">
                                            No matter what issue or questions pops up, you are always there to
                                            assist me. Thank you so much for your excellent assistance and great
                                            customer support through years.
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>



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
                            t is a long established fact that a reader will be distracted by the readable content of a
                            page
                            when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less
                            normal
                            distribution of letters.
                            <br><br>
                            t is a long established fact that a reader will be distracted by the readable content of a
                            page
                            when looking at its layout.
                        </p>

                    </div>

                    <div class="col-12 col-sm-6 col-lg-4">
                        <h2 class="font-20 semi-font fables-second-border-color border-bottom pb-3">Contact us</h2>
                        <div class="my-3">
                            <h4 class="font-16 semi-font"><span
                                    class="fables-iconmap-icon fables-second-text-color pr-2 font-20 mt-1 d-inline-block"></span>
                                Address Information</h4>
                            <p class="font-14 fables-fifth-text-color mt-2 ml-4">level13, 2Elizabeth St, Melbourne,
                                Victor
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
                        <h2 class="font-20 semi-font fables-second-border-color border-bottom pb-3 mb-3">EXPLORE OUR
                            SITE
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
        <script src="assets/vendor/jquery-circle-progress/circle-progress.min.js"></script>
        <script src="assets/vendor/popper/popper.min.js"></script>
        <script src="assets/vendor/jQuery.countdown-master/jquery.countdown.min.js"></script>
        <script src="assets/vendor/timeline/jquery.timelify.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap-4-navbar.js"></script>
        <script src="assets/vendor/WOW-master/dist/wow.min.js"></script>
        <script src="assets/vendor/owlcarousel/owl.carousel.min.js"></script>
        <script src="assets/custom/js/jquery-data-to.js"></script>
        <script src="assets/vendor/fancybox-master/jquery.fancybox.min.js"></script>
        <script src="assets/custom/js/custom.js"></script>
</body>

</html>