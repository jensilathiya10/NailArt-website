<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
    crossorigin="anonymous"></script>

<?php
    require("config.php");
    error_reporting(E_ERROR | E_PARSE);

    if($_POST["reqfrom"]=="request"){

    $query="select * from bookings where status = 'pending'";
    $result = mysqli_query($con,$query);
    foreach($result as $row){
        ?>
<div class="card">

    <div class="row">
        <label>Name : </label>
        <b><?php echo $row["username"] ?></b>
    </div>
    <div class="row">
        <label>Service: </label>
        <b><?php echo $row["service"] ?></b>
    </div>
    <div class="row">
        <label>Email : </label>
        <b><?php echo $row["email"] ?></b>
    </div>
    <div class="row">
        <label>Mobile : </label>
        <b><?php echo $row["phone"] ?></b>
    </div>
    <div class="row">
        <label>Date : </label>
        <b><?php echo $row["date"] ?></b>
    </div>
    <div class="row">
        <label>Time : </label>
        <b><?php echo $row["time"] ?></b>
    </div>
    <div class="row address">
    </div>
    <div class="btn">
        <form action="" method="GET">
            <input type="hidden" name="bookingid" value=<?php echo $row["id"] ?>>
            <button name="cancel" style="right: 80px;">Cancel</button>
            <button name="complete">Accept</button>
        </form>
    </div>
</div>

<?php               
    }
    }

    if($_POST["reqfrom"]=="users"){
        ?>
<div class="users">
    <table>
        <thead>
            <tr>
                <th>user name</th>
                <th>password</th>
                <th>first name</th>
                <th>last name</th>
                <th>Email</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>

        <?php
            require("config.php");
            if(isset($_POST["search"])){
                $search = $_POST["search"];
                $query="select * from users where username like '%$search%' ";

            }
            else{
                $query="select * from users";
            }
            $result = mysqli_query($con,$query);
            foreach($result as $row){
                ?>
        <tr>
            <td><?php echo $row["username"] ?></td>
            <td><?php echo $row["password"] ?></td>
            <td><?php echo $row["firstname"] ?></td>
            <td><?php echo $row["lastname"] ?></td>
            <td style="min-width:130px;"><?php echo $row["email"] ?></td>
            <td ><form action="edit.php">
                <button name="edit" type="submit" value="<?php echo $row["username"] ?>">Edit</button>
            </form></td>
            <td><form action="">
            <button name="delete" type="submit" value="<?php echo $row["username"] ?>">Delete</button>
            </form></td>
           

        </tr>
        <?php
            }
            ?>
    </table>
</div>
</div>

<?php
    }
?>