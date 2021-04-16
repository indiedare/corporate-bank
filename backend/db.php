<?php
    // Enter your host name, database username, password, and 
    $db = mysqli_connect("localhost","root","","users");
    // Check connection
    /*if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }*/
    if ($db === false) {
        die("Error: connection error. " + mysqli_connect_error());
    }
?>