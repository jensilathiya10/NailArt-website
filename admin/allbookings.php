<?php
    session_start();
    if(isset($_SESSION["adminuser"])){
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
                            <th>email</th>
                            <th>phone</th>
                            <th>service</th>
                            <th>date</th>
                            <th>time</th>
                            <th>status</th>
                        </tr>
                    </thead>

                    <?php
            require("config.php");
                $query="select * from bookings ";
            $result = mysqli_query($con,$query);
            foreach($result as $row){
                ?>
                    <tr>
                        <td><?php echo $row["username"] ?></td>
                        <td><?php echo $row["email"] ?></td>
                        <td><?php echo $row["service"] ?></td>
                        <td><?php echo $row["phone"] ?></td>
                        <td><?php echo $row["date"] ?></td>
                        <td><?php echo $row["time"] ?></td>
                        <td><?php echo $row["status"] ?></td>
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