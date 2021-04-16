<?php
    //development server
    $devHost = 'localhost';
    $devUser = 'root';
    $devPassword = '';
    $devDatabase = "users";
    $db = mysqli_connect($devHost, $devUser, $devPassword, $devDatabase);
    //production server
    /*$prodHost = 'localhost:3306';
    $prodUser = 'confgpea@localhost';
    $prodPassword = '';
    $prodDatabase = "confgpea_users";
    $db = mysqli_connect($prodHost, $prodUser, $prodPassword, $prodDatabase);*/    
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>