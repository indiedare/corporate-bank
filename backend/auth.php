<?php
    session_start();
    if(!isset($_SESSION["username"])) {
        header("Location: login.php");
        exit();
    }
    /*if (isset($_SESSION['userid']) && $_SESSION['userid'] === true) {
        header("location: dashboard.php");
        //exit;
    }*/
?>