<?php
    require("config.php");
    session_start();
    if(isset($_SESSION["adminuser"])){
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="request.css">
            <script src="data.js"></script>
        </head>
        <body>
            <div class="content">
            <?php require("sidenav.php") ?>
            <div class="container">
                <div class="header">
                <h1>REQUESTS</h1>
                <div class="profile">
                    <button><a href="logout.php">logout</a></button>
                </div>
                </div>
                <div class="data">

                </div>
            </div>
            </div>
            
        </body>
        </html>
        <?php
        if(isset($_GET["complete"])){
            $bookid = $_GET["bookingid"];
            echo $bookid;
            $query = "update bookings set status = 'completed' where id =$bookid ";
            $result = mysqli_query($con,$query);
            if(mysqli_affected_rows($result)==0){
                echo "failed";
            }
        }
        if(isset($_GET["cancel"])){
            $bookid = $_GET["bookingid"];
            echo $bookid;
            $query = "update bookings set status = 'canceled' where id =$bookid ";
            $result = mysqli_query($con,$query);
            if(mysqli_affected_rows($result)==0){
                echo "failed";
            }
        }
    }
    else{
        header("location: index.php");
    }
?>