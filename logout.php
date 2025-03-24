<?php
    session_start();
    if(isset($_SESSION["username"])){
        unset($_SESSION["username"]);
        // session_destroy();
        header("location: signin.php");
    }
    else{
        header("location: signin.php");
    }
    

?>