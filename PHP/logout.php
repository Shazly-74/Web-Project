<?php

    //echo "<script>alert('You have logged out')</script>";
    session_start();
    session_unset();
    session_destroy();
    header("Location: login.php");
?>
