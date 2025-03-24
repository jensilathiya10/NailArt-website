<?php
    session_start();
    require("config.php");
    if(isset($_SESSION["adminuser"])){

        $query1 = "select * from users";
        $result1 = mysqli_query($con,$query1);
        $users = mysqli_num_rows($result1);

        $query2 = "select * from bookings";
        $result2 = mysqli_query($con,$query2);
        $bookings = mysqli_num_rows($result2);

        $query3 = "select * from bookings where status = 'pending'";
        $result3 = mysqli_query($con,$query3);
        $pending = mysqli_num_rows($result3);

        $query4 = "select * from contactus";
        $result4 = mysqli_query($con,$query4);
        $inquiry = mysqli_num_rows($result4);
            ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dashboard.css">
</head>

<body>
    <div class="content">
        <?php require("sidenav.php") ?>
        <div class="container">
            <div class="header">
                <h1>DASHBOARD</h1>
                <div class="profile">
                    <button><a href="logout.php">logout</a></button>
                </div>
            </div>
            <div class="totals">
                <div class="card">
                    <div class="left">
                        <h1><?php echo $users; ?></h1>
                        <H5>TOTAL USERS</H5>
                    </div>
                    <div class="right">
                        <img src="../assets/custom/images/1.jpg" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="left">
                        <h1><?php echo $bookings; ?></h1>
                        <H5>TOTAL BOOKINGS</H5>
                    </div>
                    <div class="right">
                        <img src="../assets/custom/images/1.jpg" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="left">
                        <h1><?php echo $pending; ?></h1>
                        <H5>TOTAL PENDINGS</H5>
                    </div>
                    <div class="right">
                        <img src="../assets/custom/images/1.jpg" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="left">
                        <h1><?php echo $inquiry; ?></h1>
                        <h5>TOTAL INQUIRY</h5>
                    </div>
                    <div class="right">
                        <img src="../assets/custom/images/1.jpg" alt="">
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