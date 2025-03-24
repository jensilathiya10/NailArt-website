<?php
    session_start();
    if(isset($_SESSION["adminuser"])){
        include("config.php");
        if(isset($_GET["edit"])){
            $user = $_GET["edit"];
            $query = "select * from users where username = '$user'";
            $result = mysqli_query($con,$query);
            foreach($result as $row){
                $username = $_GET["edit"];
                $password = $row["password"];
                $first = $row["firstname"];
                $last = $row["lastname"];
                $email = $row["email"];
            }
        }
        if(isset($_GET["update"])){
            $x = $_GET["curr"];
            $username = $_GET["username"];
            $password = $_GET["password"];
            $first = $_GET["first"];
            $last = $_GET["last"];
            $email = $_GET["email"];
            $query = "update users set username='$username',password='$password',firstname='$first',lastname='$last',email='$email' where username='$x'";
            $result = mysqli_query($con,$query);
        }

            ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="users.css">
    <link rel="stylesheet" href="edit.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

</head>

<body>
    <div class="content">
        <?php require("sidenav.php") ?>
        <div class="container" style="margin:0px; width:85vw;">
            <div class="header" style="width:inherit">
                <h1>UPDATE USER</h1>
                <!-- <hr> -->
                <div class="profile">
                    <button><a href="logout.php">logout</a></button>
                </div>
            </div>
            <div class="form-container">
                <div class="container" style="margin:0px;">

                    <div class="card bg-light">
                        <article class="card-body mx-auto" style="max-width: 400px;">
                            <h4 class="card-title mt-3 text-center">update user</h4>

                            <form>
                                <div class="form-group input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                    </div>
                                    <input name="curr" value="<?php echo $username;  ?>" class="form-control" placeholder="Username" type="hidden">

                                    <input name="username" value="<?php echo $username;  ?>" class="form-control" placeholder="Username" type="text">
                                </div> <!-- form-group// -->
                                <div class="form-group input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                    </div>
                                    <input name="password" value="<?php echo $password;  ?>" class="form-control" placeholder="Password" type="text">
                                </div> <!-- form-group// -->
                                <div class="form-group input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                    </div>

                                    <input name="first" value="<?php echo $first;  ?>" class="form-control" placeholder="First Name" type="text">
                                </div> <!-- form-group// -->
                                <div class="form-group input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                    </div>

                                    <input name="last" value="<?php echo $last;  ?>" class="form-control" placeholder="Last Name" type="text">
                                </div> <!-- form-group end.// -->
                                
                                <div class="form-group input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                                    </div>
                                    <input name="email" class="form-control" value="<?php echo $email;  ?>" placeholder="Email" type="text">
                                </div> <!-- form-group// -->
                                 <!-- form-group// -->
                                <div class="form-group">
                                    <button type="submit" name="update" class="btn btn-primary btn-block"> Update
                                    </button>
                                </div> <!-- form-group// -->
                            </form>
                        </article>
                    </div> <!-- card.// -->

                </div>



                </form>

            </div>
        </div>
    </div>

</body>

</html>
<?php
    }
    else{
        header("location: index.php");
    }
 

?>