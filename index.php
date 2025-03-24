<?php
    include("config.php");
    session_start();
    if(isset($_GET["book"])){
        $username = $_SESSION['username'];
        $email = $_GET["email"];
        $mobile = $_GET["phone"];
        $date = $_GET["date"];
        $time = $_GET["time"];
        $service = $_GET["service"];
        $query = "insert into bookings(username,email,phone,date,time,service) values('$username','$email','$mobile','$date','$time','$service')";
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

    <title> NailArt-Home</title>

    <!-- animate.css-->
    <link href="assets/vendor/animate.css-master/animate.min.css" rel="stylesheet">
    <!-- Load Screen -->
    <link href="assets/vendor/loadscreen/css/spinkit.css" rel="stylesheet">
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

    <!-- Start Header -->
    <div class="fables-header fables-after-overlay overlay-lighter index-traingle bg-rules"
        style="background-image: url(assets/custom/images/bg-.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-7 mr-auto index-carousel">
                    <div
                        class="owl-carousel owl-theme default-carousel nav-0 z-index mt-md-4 mt-xl-5 pt-md-4 pt-xl-5 dots-0 pb-md-5">
                        <div class="pt-0 mt-0 pt-xl-5 mt-xl-5 wow slideInUp" data-wow-duration="2s"
                            data-wow-delay=".4s">
                            <h1 class="fables-main-text-color font-weight-bold mb-1">CHOOSE THE BEST ATTITUDE
                                <span class="fables-second-text-color">AND SERVICES</span>
                            </h1>
                            <p class="fables-forth-text-colo mb-3 light-font fables-header-slider-details">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s,
                            </p>
                            <a href="#"
                                class="btn fables-second-background-color fables-second-border-color white-color rounded-0 mr-4 px-3 px-md-4 py-2 bg-hover-transparent fables-second-hover-color">Our
                                Services</a>
                            <a href="#"
                                class="btn fables-second-border-color fables-second-text-color rounded-0 px-3 px-md-4 py-2 fables-second-hover-background-color">Appointment
                            </a>
                        </div>
                        <div class="pt-0 mt-0 pt-xl-5 mt-xl-5 wow slideInUp" data-wow-duration="2s"
                            data-wow-delay=".8s">
                            <h1 class="fables-main-text-color font-weight-bold mb-1">GET YOUR NAILS DONE BY A
                                <span class="fables-second-text-color">SKILLED NAIL ARTIST</span>
                            </h1>
                            <p class="fables-forth-text-colo mb-3 light-font fables-header-slider-details">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s,
                            </p>
                            <a href="#"
                                class="btn fables-second-background-color fables-second-border-color white-color rounded-0 mr-4 px-3 px-md-4 py-2 bg-hover-transparent fables-second-hover-color">Our
                                Services</a>
                            <a href="#"
                                class="btn fables-second-border-color fables-second-text-color rounded-0 px-3 px-md-4 py-2 fables-second-hover-background-color">Appointment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /End Header -->



    <!-- Start page content -->
    <div class="container">
        <div class="row my-3 my-md-5 overflow-hidden">
            <div class="col-12 col-sm-6 col-lg-3 text-center mb-4 mb-lg-0 wow fadeInDown" data-wow-delay=".4s"
                data-wow-duration="1.5s">
                <span class=" fables-second-text-color fa-3x"><img src="./assets/custom/images/weicon1.png"
                        alt=""></span>
                <h2 class="fables-main-text-color font-18 my-2">Nail Art</h2>
                <p class="fables-forth-text-color font-15">
                    Lorem ipsum dolor sit amet, consectetur.
                </p>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 text-center mb-4 mb-lg-0 wow fadeInDown" data-wow-delay=".8s"
                data-wow-duration="1.5s">
                <span class="fables-second-text-color fa-3x"><img src="./assets/custom/images/weicon2.png" /></span>
                <h2 class="fables-main-text-color font-18 my-2">Manicure</h2>
                <p class="fables-forth-text-color font-15">
                    Lorem ipsum dolor sit amet, consectetur.
                </p>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 text-center mb-4 mb-lg-0 wow fadeInDown" data-wow-delay="1.2s"
                data-wow-duration="1.5s">
                <span class=" fables-second-text-color fa-3x"><img src="./assets/custom/images/weicon3.png"
                        alt=""></span>
                <h2 class="fables-main-text-color font-18 my-2">Pedicure</h2>
                <p class="fables-forth-text-color font-15">
                    Lorem ipsum dolor sit amet, consectetur.
                </p>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 text-center mb-4 mb-lg-0 wow fadeInDown" data-wow-delay="1.6s"
                data-wow-duration="1.5s">
                <span class=" fables-second-text-color fa-3x"><img src="./assets/custom/images/weicon4.png"
                        alt="" /></span>
                <h2 class="fables-main-text-color font-18 my-2">Paraffin wax</h2>
                <p class="fables-forth-text-color font-15">
                    Lorem ipsum dolor sit amet, consectetur.
                </p>
            </div>
        </div>

    </div>
    <div class="fables-choose-background fables-after-overlay py-4 py-md-5 bg-rules overflow-hidden px-3 px-md-0">
        <div class="container position-relative z-index">
            <div class="row">
                <div class="col-12 col-lg-6 p-0 image-container translate-effect-right wow fadeInLeft mb-3 mb-md-0"
                    data-wow-delay="1s" data-wow-duration="1.5s">
                    <img src="assets/custom/images/about.jpg" alt="" class="w-100">
                </div>
                <div class="col-12 col-lg-6 bg-white px-6 py-3 py-md-5 wow fadeInRight" data-wow-delay="1s"
                    data-wow-duration="1.5s">
                    <h2 class="font-30 font-weight-bold fables-second-text-color">WHY CHOOSE US</h2>
                    <p class="fables-main-text-color font-14 my-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos reiciendis cum aliquid quam,
                        consequatur.
                    </p>
                    <div id="accordion">
                        <div class="card border-0 mb-2">
                            <div class="card-header p-0 border bg-transparent rounded-0" id="headingOne">
                                <h5 class="mb-0 position-relative">
                                    <span class="fables-second-background-color white-color d-inline-block 
 position-absolute fables-lus-icon pt-2 text-center">
                                        <i class="fas fa-plus"></i>
                                    </span>
                                    <button
                                        class="btn fables-main-text-color bg-transparent font-18 focus-0 d-block position-relative z-index pl-6 pt-2 pb-2 w-100 text-left border-0 text-truncate"
                                        data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne">
                                        Clean and modern websites , Clean and modern websites
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#accordion">
                                <div class="card-body fables-forth-text-color font-14 py-1 py-xl-2 pl-6 pr-0">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos reiciendis cum
                                    aliquid quam, consequatur. quisquam consectetur culpa commodi maxime in harum
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
                                        class="btn fables-main-text-color bg-transparent font-18 focus-0 d-block position-relative z-index pl-6 pt-2 pb-2 w-100 text-left border-0 text-truncate collapsed"
                                        data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                        Clean and modern websites
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordion">
                                <div class="card-body fables-forth-text-color font-14 py-1 py-xl-2 pl-6 pr-0">
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
                                        class="btn fables-main-text-color bg-transparent font-18 focus-0 d-block position-relative z-index pl-6 pt-2 pb-2 w-100 text-left border-0 text-truncate collapsed"
                                        data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Clean and modern websites
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordion">
                                <div class="card-body fables-forth-text-color font-14 py-1 py-xl-2 pl-6 pr-0">
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
                                        class="btn fables-main-text-color bg-transparent font-18 focus-0 d-block position-relative z-index pl-6 pt-2 pb-2 w-100 text-left border-0 text-truncate collapsed"
                                        data-toggle="collapse" data-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Clean and modern websites
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingfour"
                                data-parent="#accordion">
                                <div class="card-body fables-forth-text-color font-14 py-1 py-xl-2 pl-6 pr-0">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos reiciendis cum
                                    aliquid quam, consequatur. quisquam consectetur culpa commodi maxime in harum
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2 text-center">
                <h2 class="fables-second-text-color font-35 font-weight-bold my-3 mt-md-5 mb-md-4">we are creative
                    agency</h2>
                <p class="fables-forth-text-color">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos reiciendis cum aliquid quam,
                    consequatur.
                    quisquam consectetur culpa commodi maxime in harum sunt nam. Minima, repellat aspernatur atque
                    voluptate dolores quos vel dolor! Debitis, consequatur, aliquid.
                </p>
            </div>
        </div>
        <div class="row mt-4 mt-md-5">
            <div class="col-6 col-md-3">
                <div class="fables-counter">
                    <h2 class="fables-counter-value font-40 font-weight-bold mb-3 fables-main-text-color border fables-second-border-color d-inline-block px-4 py-2 mb-4"
                        data-count="307">0</h2>
                    <h3 class="font-14 semi-font fables-forth-text-color">SATISFIED CLIENTS</h3>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="fables-counter">
                    <h2 class="fables-counter-value font-40 font-weight-bold mb-3 fables-main-text-color border fables-second-border-color d-inline-block px-4 py-2 mb-4"
                        data-count="95">0</h2>
                    <h3 class="font-14 semi-font fables-forth-text-color">OUR MEMBERS</h3>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="fables-counter">
                    <h2 class="fables-counter-value font-40 font-weight-bold mb-3 fables-main-text-color border fables-second-border-color d-inline-block px-4 py-2 mb-4"
                        data-count="55">0</h2>
                    <h3 class="font-14 semi-font fables-forth-text-color">AWWARDS WIN</h3>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="fables-counter">
                    <h2 class="fables-counter-value font-40 font-weight-bold mb-3 fables-main-text-color border fables-second-border-color d-inline-block px-4 py-2 mb-4"
                        data-count="16">0</h2>
                    <h3 class="font-14 semi-font fables-forth-text-color">YEARS EXPIRIENCE</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="    margin-top: -130px;  ">
                <div
                    class="owl-carousel owl-theme default-carousel nav-0 z-index mt-md-4 mt-xl-5 pt-md-4 pt-xl-5 dots-0 pb-md-5">
                    <div class="pt-0 mt-0 pt-xl-5 mt-xl-5 wow slideInUp" data-wow-duration="2s" data-wow-delay=".4s">
                        <img src="./assets/custom/images/slider-three.jpg" alt="">
                    </div>
                    <div class="pt-0 mt-0 pt-xl-5 mt-xl-5 wow slideInUp" data-wow-duration="2s" data-wow-delay=".8s">
                        <img src="./assets/custom/images/slider-four.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
  

    <div class="container mb-4 mb-md-5">
        <div class="row">
            <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                <div class="text-center">
                    <h2 class="fables-main-text-color font-35 font-weight-bold mb-4">Latest Works</h2>
                    <p class="fables-forth-text-color">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos reiciendis cum aliquid quam,
                        consequatur. quisquam consectetur culpa commodi maxime in harum sunt nam.

                    </p>
                </div>
            </div>
        </div>

        <div class="gallery-filter">
            <div class="portfolioFilter my-3 clearfix">
                <a href="#" data-filter="*" class="current">ALL</a>
                <a href="#" data-filter=".webDesign" class="fables-forth-text-color">MANICURE TREATMENTS</a>
                <a href="#" data-filter=".appDesign" class="fables-forth-text-color">PEDICURE TREATMENTS</a>
                <a href="#" data-filter=".brand" class="fables-forth-text-color">NAIL ARTS TREATMENTS</a>
                <a href="#" data-filter=".development" class="fables-forth-text-color">PARAFFIN HANDS</a>
            </div>
            <div class="portfolioContainer row filter-masonry">
                <div class="drawings places col-sm-6 col-md-3 mb-2">
                    <div class="filter-img-block position-relative image-container translate-effect-right">
                        <img src="assets/custom/images/12 (2).jpg" alt="image" class="w-100">
                        <div class="img-filter-overlay fables-main-color-transparent row m-0">
                            <a href="#" class="gallery-filter-icon white-color fables-second-hover-color"><span
                                    class="fables-iconlink"></span></a>
                            <a data-fancybox="gallery" href="assets/custom/images/12 (2).jpg"
                                class="gallery-filter-icon white-color fables-second-hover-color"><span
                                    class="fables-iconsearch-icon"></span></a>
                        </div>
                    </div>
                </div>
                <div class="webDesign objects col-sm-6 col-md-3 mb-2">
                    <div class="filter-img-block position-relative image-container translate-effect-right">
                        <img src="assets/custom/images/gallery.jpg" alt="image" class="w-100">
                        <div class="img-filter-overlay fables-main-color-transparent row m-0">
                            <a href="#" class="gallery-filter-icon white-color fables-second-hover-color"><span
                                    class="fables-iconlink"></span></a>
                            <a data-fancybox="gallery" href="assets/custom/images/gallery.jpg"
                                class="gallery-filter-icon white-color fables-second-hover-color"><span
                                    class="fables-iconsearch-icon"></span></a>
                        </div>
                    </div>

                </div>
                <div class="webDesign food col-sm-6 col-md-3 mb-2">
                    <div class="filter-img-block position-relative image-container translate-effect-right">
                        <img src="assets/custom/images/gallery10.jpg" alt="image" class="w-100">
                        <div class="img-filter-overlay fables-main-color-transparent row m-0">
                            <a href="#" class="gallery-filter-icon white-color fables-second-hover-color"><span
                                    class="fables-iconlink"></span></a>
                            <a data-fancybox="gallery" href="assets/custom/images/gallery10.jpg"
                                class="gallery-filter-icon white-color fables-second-hover-color"><span
                                    class="fables-iconsearch-icon"></span></a>
                        </div>
                    </div>
                </div>

                <div class="appDesign brand col-sm-6 col-md-3 mb-2">
                    <div class="filter-img-block position-relative image-container translate-effect-right">
                        <img src="assets/custom/images/gallery4.png" alt="image" class="w-100">
                        <div class="img-filter-overlay fables-main-color-transparent row m-0">
                            <a href="#" class="gallery-filter-icon white-color fables-second-hover-color"><span
                                    class="fables-iconlink"></span></a>
                            <a data-fancybox="gallery" href="assets/custom/images/gallery4.png"
                                class="gallery-filter-icon white-color fables-second-hover-color"><span
                                    class="fables-iconsearch-icon"></span></a>
                        </div>
                    </div>
                </div>

                <div class="webDesign col-sm-6 col-md-3 mb-2">
                    <div class="filter-img-block position-relative image-container translate-effect-right">
                        <img src="assets/custom/images/gallery9.jpg" alt="image" class="w-100">
                        <div class="img-filter-overlay fables-main-color-transparent row m-0">
                            <a href="#" class="gallery-filter-icon white-color fables-second-hover-color"><span
                                    class="fables-iconlink"></span></a>
                            <a data-fancybox="gallery" href="assets/custom/images/gallery9.jpg"
                                class="gallery-filter-icon white-color fables-second-hover-color"><span
                                    class="fables-iconsearch-icon"></span></a>
                        </div>
                    </div>
                </div>
                <div class="webDesign col-sm-6 col-md-3 mb-2">
                    <div class="filter-img-block position-relative image-container translate-effect-right">
                        <img src="assets/custom/images/gallery6.jpeg" alt="image" class="w-100">
                        <div class="img-filter-overlay fables-main-color-transparent row m-0">
                            <a href="#" class="gallery-filter-icon white-color fables-second-hover-color"><span
                                    class="fables-iconlink"></span></a>
                            <a data-fancybox="gallery" href="assets/custom/images/gallery6.jpeg"
                                class="gallery-filter-icon white-color fables-second-hover-color"><span
                                    class="fables-iconsearch-icon"></span></a>
                        </div>
                    </div>
                </div>


            </div>
            <div class="text-center">
                <a href="#"
                    class="btn fables-main-border-color fables-main-text-color mt-md-4 px-5 py-2 fables-btn-rounded fables-main-hover-background-color white-color-hover">Show
                    All Projects</a>
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
    <div class="container">
        <div class="row overflow-hidden">
            <div class="col-12">
                <h2 class="font-35 font-weight-bold text-center fables-main-text-color my-4 my-lg-5">Latest News</h2>
            </div>
            <div class="col-12 col-md-4 mb-4 mb-lg-5 wow bounceInLeft" data-wow-delay=".4s" data-wow-duration="1.5s">
                <div class="image-container translate-effect-right">
                    <a href="#"><img src="assets/custom/images/news-31.png" alt=""></a>
                </div>
                <h2 class="font-18 semi-font font-18  mt-3"><a href="#"
                        class="fables-main-text-color fables-second-hover-color">Getting to Another Level of Design</a>
                </h2>
                <p class="fables-fifth-text-color font-13 my-1">09 November, 2018</p>
                <p class="fables-forth-text-color font-14">
                    When you need your company to have a new website or if you venture on updating your old webpage with
                    a new look and functionality. the choices are versatile Assuming that you will goWhen you need your
                    company to have a new website or if you venture on updating your old webpage with a new look and
                    functionality.
                </p>
                <a href="" class="btn fables-main-text-color fables-second-hover-color p-0 underline mt-2">Read More</a>

            </div>
            <div class="col-12 col-md-4 mb-4 mb-lg-5 wow bounceInLeft" data-wow-delay=".8s" data-wow-duration="1.5s">
                <div class="image-container translate-effect-right">
                    <a href="#"><img src="assets/custom/images/news-32.png" alt=""></a>
                </div>
                <h2 class="font-18 semi-font font-18  mt-3"><a href="#"
                        class="fables-main-text-color fables-second-hover-color">Getting to Another Level of Design</a>
                </h2>
                <p class="fables-fifth-text-color font-13 my-1">09 November, 2018</p>
                <p class="fables-forth-text-color font-14">
                    When you need your company to have a new website or if you venture on updating your old webpage with
                    a new look and functionality. the choices are versatile Assuming that you will goWhen you need your
                    company to have a new website or if you venture on updating your old webpage with a new look and
                    functionality.
                </p>
                <a href="" class="btn fables-main-text-color fables-second-hover-color p-0 underline mt-2">Read More</a>

            </div>
            <div class="col-12 col-md-4 mb-4 mb-lg-5 wow bounceInLeft" data-wow-delay="1.2s" data-wow-duration="1.5s">
                <div class="image-container translate-effect-right">
                    <a href="#"><img src="assets/custom/images/news-33.png" alt=""></a>
                </div>
                <h2 class="font-18 semi-font font-18  mt-3"><a href="#"
                        class="fables-main-text-color fables-second-hover-color">Getting to Another Level of Design</a>
                </h2>
                <p class="fables-fifth-text-color font-13 my-1">09 November, 2018</p>
                <p class="fables-forth-text-color font-14">
                    When you need your company to have a new website or if you venture on updating your old webpage with
                    a new look and functionality. the choices are versatile Assuming that you will goWhen you need your
                    company to have a new website or if you venture on updating your old webpage with a new look and
                    functionality.
                </p>
                <a href="" class="btn fables-main-text-color fables-second-hover-color p-0 underline mt-2">Read More</a>

            </div>
        </div>
    </div>
    <div class="fables-testimonial fables-after-overlay py-4 py-lg-5 bg-rules">
        <div class="container">
            <h2 class="position-relative z-index white-color font-35 font-weight-bold text-center mb-4">Testimonial</h2>
            <div class="owl-carousel owl-theme" id="fables-testimonial-carousel">
                <div class="row text-center fables-testimonial-carousel-item rounded py-4">
                    <div class="col-12 col-md-3">
                        <img src="assets/custom/images/testimonial-img.png" alt="Fables Template"
                            class="fables-testimonial-carousel-img">
                        <h3 class="font-14 semi-font text-white">Billy Richards</h3>
                        <h3 class="font-14 font-italic text-white mt-2">Chief Manager, Simba Co</h3>
                    </div>
                    <div class="col-12 col-md-9 p-0 p-md-2">
                        <div class="fables-testimonial-detail font-15 font-italic text-white p-4 position-relative">
                            No matter what issue or questions pops up, you are always there to
                            assist me. Thank you so much for your excellent assistance and great
                            customer support through years.
                        </div>
                    </div>
                </div>
                <div class="row text-center fables-testimonial-carousel-item rounded py-4">
                    <div class="col-12 col-md-3">
                        <img src="assets/custom/images/testimonial-img.png" alt="Fables Template"
                            class="fables-testimonial-carousel-img">
                        <h3 class="font-14 semi-font text-white">Billy Richards</h3>
                        <h3 class="font-14 font-italic text-white mt-2">Chief Manager, Simba Co</h3>
                    </div>
                    <div class="col-12 col-md-9 p-0 p-md-2">
                        <div class="fables-testimonial-detail font-15 font-italic text-white p-4 position-relative">
                            No matter what issue or questions pops up, you are always there to
                            assist me. Thank you so much for your excellent assistance and great
                            customer support through years.
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <div class="container">
       
        <div class="row my-3 my-lg-5">

            <div class="owl-carousel owl-theme px-6 my-0" id="fables-partner-carousel">
                <div>
                    <img src="assets/custom/images/partner2-1.jpg" alt="Fables Template"
                        class="fables-partner-carousel-img">
                </div>
                <div>
                    <img src="assets/custom/images/partner2-2.jpg" alt="Fables Template"
                        class="fables-partner-carousel-img">
                </div>
                <div>
                    <img src="assets/custom/images/partner2-3.jpg" alt="Fables Template"
                        class="fables-partner-carousel-img">
                </div>
                <div>
                    <img src="assets/custom/images/partner2-4.jpg" alt="Fables Template"
                        class="fables-partner-carousel-img">
                </div>
                <div>
                    <img src="assets/custom/images/partner2-3.jpg" alt="Fables Template"
                        class="fables-partner-carousel-img">
                </div>
                <div>
                    <img src="assets/custom/images/partner2-1.jpg" alt="Fables Template"
                        class="fables-partner-carousel-img">
                </div>
                <div>
                    <img src="assets/custom/images/partner2-2.jpg" alt="Fables Template"
                        class="fables-partner-carousel-img">
                </div>
                <div>
                    <img src="assets/custom/images/partner2-3.jpg" alt="Fables Template"
                        class="fables-partner-carousel-img">
                </div>
                <div>
                    <img src="assets/custom/images/partner2-4.jpg" alt="Fables Template"
                        class="fables-partner-carousel-img">
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
        <p class="mb-0">Copyright © me. All rights reserved.</p>

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
    <script src="assets/vendor/portfolio-filter-gallery/jquery.isotope.min.js"></script>
    <script src="assets/vendor/portfolio-filter-gallery/portfolio-filter-gallery.js"></script>
    <script src="assets/vendor/fancybox-master/jquery.fancybox.min.js"></script>
    <script src="assets/custom/js/custom.js"></script>


</body>

</html>