<?php

require("config.php");
session_start();
$dest = "../assets/custom/images";
if(isset($_SESSION['adminuser'])){
    header("location: dashboard.php");

}
if(isset($_POST["register"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $mobile = $_POST["phone"];
    
    try{
        $query = "INSERT INTO admin VALUES ('$username','$password','$email','$mobile')";
        $result = mysqli_query($con,$query);
        header("location: index.php");
    }
    catch(Exception $e){
        ?>
            <script>alert("please try again")</script>
        <?php
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Form-v4 by Colorlib</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" type="text/css" href="css/opensans-font.css">
    <link rel="stylesheet" type="text/css" href="fonts/line-awesome/css/line-awesome.min.css">

    <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">

    <link rel="stylesheet" href="register.css" />
    <meta name="robots" content="noindex, follow">

<body class="form-v4">
    <div class="page-content">
        <div class="form-v4-content">
            <div class="form-left" style="background-image: url(../assets/custom/images/1.jpg);">
            <!-- <img src="../assets/custom/images/1.jpg" alt="" srcset=""> -->
            </div>


            <form class="form-detail" action="" method="POST" enctype="multipart/form-data" id="myform">
                <h2>REGISTER FORM</h2>
                <div class="form-group">
                    <div class="form-row">
                        <label for="your_email">Username</label>
                        <input type="text" name="username" id="your_email" class="input-text" required>
                    </div>
                    <div class="form-row">
                        <label for="your_email">Password</label>
                        <input type="text" name="password" id="your_email" class="input-text" required>
                    </div><br>
                </div>
                <!-- <div class="form-group">
                    <div>
                        <label for="password">Profile Image</label>
                        <input type="file" name="profileimg" id="profile" class="input-text" required>
                        <input type="file" name="file" class="input-text" id="">
                    </div>
                </div> -->
                <div class="form-row">
                    <label for="your_email">Your Email</label>
                    <input type="text" name="email" id="your_email" class="input-text" required>
                </div>
                <div class="form-group">
                    <div class="form-row form-row-1 ">
                        <label for="password">Mobile No.</label>
                        <input type="text" name="phone" id="password" class="input-text" required>
                    </div>
                </div>

                <div class="form-row-last">
                    <input type="submit" name="register" class="register" value="Register">
                </div>
                <p style="text-align:center;">Not a member? <a data-toggle="tab" href="register.php">Sign Up</a></p>
            </form>
            
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>


    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/v8b253dfea2ab4077af8c6f58422dfbfd1689876627854"
        integrity="sha512-bjgnUKX4azu3dLTVtie9u6TKqgx29RBwfj3QXYt5EKfWM/9hPSAI/4qcV5NACjwAo8UtTeWefx6Zq5PHcMm7Tg=="
        data-cf-beacon='{"rayId":"80ebe194ca420332","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2023.8.0","si":100}'
        crossorigin="anonymous"></script>
</body>

</html>