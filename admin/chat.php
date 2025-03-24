<?php
    require("config.php");
    session_start();
    $user = $_POST["user"];
    if(isset($_POST["msg"])){
    $msg = $_POST["msg"];
    $side = "admin";
    $query = "insert into `chats` (username,side,message) values('".$user."','".$side."','".$msg."') ";
    $result = mysqli_query($con,$query);
    }
    
    $query = "update chats set status = 'seen' where username ='$user' ";
    $result = mysqli_query($con,$query);

    $query = "select * from chats where username ='$user' ORDER BY msg_id desc ";
    $result = mysqli_query($con,$query);
    ?>
    <div class="chathead">
        <h3><?php echo $user ?></h3>
    </div>

    <?php
    foreach($result as $row){
        if($row["side"]=='user'){
            echo '<div class="user"><p>'.$row["message"].'</p></div>';
        }
        else if($row["side"]=='admin'){
            echo '<div class="admin"><p>'.$row["message"].'</p></div>';
        }
    }
?>