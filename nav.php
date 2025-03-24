<?php
     error_reporting(E_ERROR | E_PARSE);
     session_start();

?>
<div class="fables-transparent py-3 py-lg-0">
    <div class="container" style="padding-left:0px !important;">
        <div class="row">
            <div class="col-12 col-md-10 pr-md-0">
                <nav class="navbar navbar-expand-md btco-hover-menu py-lg-2">

                    <div class="navbar-brand  fables-logo-brand pl-0">
                        <h1 class="m-0 site-logo "><a href="index.php" class="text-center">NailArt</a></h1>

                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#fablesNavDropdown"
                        aria-controls="fablesNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fables-iconmenu-icon text-white font-16"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="fablesNavDropdown">

                        <ul class="navbar-nav mx-auto fables-nav">
                            <li
                                class="nav-item <?php if($_SERVER['SCRIPT_NAME']=="/nailart-1/index.php") {  echo 'active';  }  ?>">
                                <a class="nav-link" href="index.php" id="sub-nav1">
                                    Home
                                </a>
                            </li>
                            <li
                                class="nav-item <?php if($_SERVER['SCRIPT_NAME']=="/nailart-1/about.php") {  echo 'active';  }  ?>">
                                <a class="nav-link " href="about.php" id="sub-nav3">
                                    About
                                </a>

                            </li>
                            <li
                                class="nav-item <?php if($_SERVER['SCRIPT_NAME']=="/nailart-1/service.php") {  echo 'active';  }  ?>">
                                <a class="nav-link" href="service.php" id="sub-nav2">
                                    Services
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="sub-nav1">
                                    <li><a class="dropdown-item" href="manicure.php">MANICURE TREATMENTS</a></li>
                                    <li><a class="dropdown-item" href="pedicure.php">PEDICURE TREATMENTS</a></li>
                                    <li><a class="dropdown-item" href="nailart.php">NAIL ARTS TREATMENTS</a></li>
                                    <li><a class="dropdown-item" href="paraffina.php">PARAFFIN HANDS</a></li>
                                </ul>

                            </li>
                            <li
                                class="nav-item <?php if($_SERVER['SCRIPT_NAME']=="/nailart-1/gallery.php") {  echo 'active';  }  ?>">
                                <a class="nav-link " href="gallery.php" id="sub-nav6">
                                    Gallery
                                </a>
                            </li>

                            <li
                                class="nav-item <?php if($_SERVER['SCRIPT_NAME']=="/nailart-1/blog-timeLine.php") {  echo 'active';  }  ?>">
                                <a class="nav-link " href="blog-timeLine.php" id="sub-nav5">
                                    Blog
                                </a>

                            </li>

                            <li
                                class="nav-item <?php if($_SERVER['SCRIPT_NAME']=="/nailart-1/contactus.php") {  echo 'active';  }  ?>">
                                <a class="nav-link " href="contactus.php" id="sub-nav5">
                                    Contact Us</a>
                            </li>
                            <?php
                                if(isset($_SESSION["username"])){
                                    ?>
                            <li
                                class="nav-item <?php if($_SERVER['SCRIPT_NAME']=="/nailart-1/updatepass.php") {  echo 'active';  }  ?>">
                                <a class="nav-link " href="updatepass.php" id="sub-nav5">
                                    Update Password</a>
                            </li>
                            <?php
                                }
                            ?>
                        </ul>
                    </div>

                </nav>
            </div>

            <div class="col-5 col-md-2 pr-md-0 icons-header-mobile">

                <div class="fables-header-icons pt-lg-4 text-right">

                    <?php 
                    if($_SESSION["username"]!=null){
                        ?>
                    <a href="#" class="fables-third-text-color fables-mega-menu-btn px-4  fables-second-hover-color"
                        id="profile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span
                            class="fables-iconuser"></span></a>
                    <?php
                    }
                    else{
                        ?>
                    <a href="signin.php"
                        class=" fables-third-text-color fables-mega-menu-btn px-4  fables-second-hover-color"><span
                            class="fables-iconuser"></span></a>
                    <?php
                    }
                    ?>
                    <div class="dropdown-menu logoutdropdown " style="margin-top:10px !important;"
                        aria-labelledby="profile">
                        <img src="" alt="" srcset="">
                        <img src="./assets/custom/images/<?php echo $_SESSION['profileimg']; ?>" width=50 height=50
                            style="border-radius:50%;" alt="" srcset="">
                        <b style="margin-left:10px;"> <?php echo $_SESSION["username"]; ?></b>
                        <a href="logout.php"><button class="logoutbtn btn btn-primary">Logout</button></a>
                    </div>




                    <a href="#"
                        class="open-search fables-third-text-color fables-mega-menu-btn px-4  fables-second-hover-color">
                        <span class="fables-iconsearch-icon"></span>
                    </a>

                    <div class="dropdown d-inline-block float-left float-md-none">
                        <a href="#_"
                            class="fables-third-text-color dropdown-toggle px-4 fables-second-hover-color fables-mega-menu-btn position-relative"
                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                            <span class="fa fa-calendar" aria-hidden="true"></span>
                            <span class="fables-cart-number fables-second-background-color text-center">3</span>
                        </a>



                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <div class="p-3 cart-block">
                                <p class="fables-second-text-color semi-font mb-4 font-17">(2) Items in my cart</p>
                                <div class="row mx-0 mb-3">
                                    <div class="col-4 p-0">
                                        <a href="#"><img src="assets/custom/images/insta-blog6.png" alt=""
                                                class="w-100"></a>
                                    </div>
                                    <div class="col-8">
                                        <h2><a href="#"
                                                class="fables-main-text-color font-13 d-block fables-main-hover-color">LUIS
                                                LEATHER DRIVING</a></h2>
                                        <p class="fables-second-text-color font-weight-bold">$ 100.00</p>
                                        <p class="fables-forth-text-color">QTY : 1</p>
                                    </div>
                                </div>
                                <div class="row mx-0 mb-3">
                                    <div class="col-4 p-0">
                                        <a href="#"><img src="assets/custom/images/insta-blog3.png" alt=""
                                                class="w-100"></a>
                                    </div>
                                    <div class="col-8">
                                        <h2><a href="#"
                                                class="fables-main-text-color font-13 d-block fables-main-hover-color">LUIS
                                                LEATHER DRIVING</a></h2>
                                        <p class="fables-second-text-color font-weight-bold">$ 100.00</p>
                                        <p class="fables-forth-text-color">QTY : 1</p>
                                    </div>
                                </div>
                                <span class="font-16 semi-font fables-main-text-color">TOTAL</span>
                                <span class="font-14 semi-font fables-second-text-color float-right">$200.00</span>
                                <hr>
                                <div class="text-center">
                                    <a href="#"
                                        class="fables-third-text-color fables-second-hover-color font-13 top-header-link px-3 px-md-2 px-lg-4 max-line-height"><span
                                            class="fables-iconuser"></span></a>

                                    <a href="#"
                                        class="fables-second-background-color fables-btn-rounded  text-center white-color py-2 px-3 font-14 bg-hover-transparent border fables-second-border-color fables-second-hover-color">View
                                        my cart</a>

                                    <a href="#"
                                        class="fables-second-text-color border fables-second-border-color fables-btn-rounded text-center white-color p-2 px-4 font-14 fables-second-hover-background-color">Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>
</div>

<div class="login-section">
    <a class="close-login" href="#"> <i class="fa fa-times" style="font-size:24px;margin-left: 6px;
            margin-top: 6px;" aria-hidden="true"></i></a>
    <div class="d-flex justify-content-center align-items-center h-100" id="div-forms">
        <form method="post" action="#" id="login-form">

            <h3 class="text-center" style="margin-bottom: 10px;">Login</h3>
            <hr /> <br />

            <div class="row ">

                <div class="col-2 text-center"> <i class="fa fa-user icon" aria-hidden="true"></i></div>
                <div class="col-8 text-center">
                    <input type="text" value="" class="form-control palce bg-transparent border-0 login-input"
                        id="login_username" placeholder="UserName Here ..." /><br />
                </div>
            </div>
            <div class="row ">

                <div class="col-2 text-center"><i class="fa fa-lock icon" aria-hidden="true"></i> </div>
                <div class="col-8 text-center">
                    <input type="password" value="" class="form-control palce bg-transparent border-0 login-input"
                        id="login_password" placeholder="Password Here ..." />
                </div>

            </div>
            <div class="row ">
                <div class="col-2"></div>
                <div class="col-6 mt-3 text-center"><input type="checkbox" name="pass" id="">
                    <label class="text-left" style="color: gray;"> Remember me</label>
                </div>

            </div>
            <hr />
            <div class="row">

                <div class="col-2"></div>

                <div class="col-4 mt-3 text-center">
                    <button type="submit"
                        class="btn fables-second-background-color fables-btn-rounded white-color white-color-hover"
                        style="width: 7em;"> Login
                    </button>
                </div>
                <div class="col-4 mt-3  text-center">
                    <button type="button" id="login_register_btn"
                        class="btn fables-second-background-color fables-btn-rounded white-color white-color-hover"
                        style="width: 7em;"> Register
                    </button>
                </div>
                <div class="col-2"></div>

            </div>
        </form>


        <form method="post" action="#" style="display:none;" id="register-form">

            <h3 class="text-center" style="margin-bottom: 10px;">Create Account</h3>
            <hr /> <br />

            <div class="row ">

                <div class="col-2 text-center"> <i class="fa fa-user icon" aria-hidden="true"></i></div>
                <div class="col-8 text-center">
                    <input type="text" value="" class="form-control palce bg-transparent border-0 login-input"
                        id="register_username" placeholder="UserName Here ..." /><br />
                </div>
            </div>
            <div class="row ">

                <div class="col-2 text-center"><i class="fa fa-envelope icon" aria-hidden="true"></i> </div>
                <div class="col-8 text-center">
                    <input type="Email" value="" class="form-control palce bg-transparent border-0 login-input"
                        id="register_email" placeholder="Email Here ..." />
                </div>

            </div>
            <div class="row ">

                <div class="col-2 text-center"><i class="fa fa-lock icon" aria-hidden="true"></i> </div>
                <div class="col-8 text-center">
                    <input type="password" value="" class="form-control palce bg-transparent border-0 login-input"
                        id="register_password" placeholder="Password Here ..." />
                </div>

            </div>

            <hr />
            <div class="row">

                <div class="col-2">

                </div>
                <div class="col-4 mt-3  text-center">
                    <button type="submit"
                        class="btn fables-second-background-color fables-btn-rounded white-color white-color-hover"
                        style="width: 7em;"> Register
                    </button>
                </div>
                <div class="col-4 mt-3 text-center">
                    <button type="button" id="register_login_btn"
                        class="btn fables-second-background-color fables-btn-rounded white-color white-color-hover"
                        style="width: 7em;"> Login
                    </button>
                </div>

                <div class="col-2"></div>

            </div>
        </form>
    </div>

</div>