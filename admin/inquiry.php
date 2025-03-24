<?php
    session_start();
    if(isset($_SESSION["adminuser"])){
        include("config.php");
        if(isset($_GET["delete"])){
            $id = $_GET["delete"];
            $query = "delete from contactus where id = '$id'";
            mysqli_query($con,$query);
        }
            ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="users.css">
</head>

<body>
    <div class="content">
        <?php require("sidenav.php") ?>
        <div class="container">
            <div class="header">
                <h1>Previous Bookings</h1>
                <!-- <hr> -->
                <div class="profile">
                    <button><a href="logout.php">logout</a></button>
                </div>
            </div>
            <div class="user-container">

                <div class="users" style="height:80vh !important;">
                    <table>
                        <thead>
                            <tr>
                                <th>user name</th>
                                <th>Profile image</th>
                                <!-- <th>firstname</th>
                                <th>lastname</th> -->
                                <th>email</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <?php
            require("config.php");
                $query="select * from contactus ";
            $result = mysqli_query($con,$query);
            
            foreach($result as $row){
                ?>

                        <tr>
                            <td><?php echo $row["username"] ?></td>
                            <td><img src="../assets/custom/images/1.jpg" width=100 height=100 style="border-radius:50%;padding: 10px 0px;"
                                    alt=""></td>
                            
                            <!-- <td><?php echo $row["firstname"] ?></td>
                            <td><?php echo $row["lastname"] ?></td> -->
                            <td><?php echo $row["email"] ?></td>
                            <td><?php echo $row["subject"] ?></td>
                            <td style=" word-wrap: break-word;max-width: 130px;padding: 5px 10px; "><?php echo $row["message"] ?></td>
                            <form action="">
                            <td><button class="delete" name="delete" value="<?php echo $row["id"] ?>">delete</button></td>
                            </form>
                        </tr>
                        <?php
            }
            ?>
                    </table>
                </div>
            </div>
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