<?php
    session_start();
    unset($_SESSION["adminuser"],$_SESSION["adminpass"]);
    // session_destroy();
    header("location: index.php");
    
    
?>