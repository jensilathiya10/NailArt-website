<?php
    session_start();
    if(isset($_SESSION["adminuser"])){
        include("config.php");
        if(isset($_GET["delete"])){
            $id = $_GET["delete"];
            $query = "delete from users where username = '$id'";
            mysqli_query($con,$query);
        }

        ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.7.0.js"
        integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="users.css">
</head>

<body>
    <div class="content">
        <?php require("sidenav.php") ?>
        <div class="container">
            <div class="header">
                <h1>USERS</h1>
                <div class="profile">
                    <button><a href="logout.php">logout</a></button>
                </div>
            </div>
            <div class="data">
                <div class="user-container">
                    <div class="heading">
                        <div class="search">
                            <input id="usersearch" type="text">
                            <button>Search</button>
                        </div>
                    </div>
                    <div class="user"></div>
                </div>
            </div>
        </div>
        <script src="data.js"></script>

</body>

</html>
<?php
    }
    else{
        header("location: index.php");
    }
?>