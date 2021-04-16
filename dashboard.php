<?php

    session_start();

    if (!isset($_SESSION['userid']) || $_SESSION['userid'] !== true) {
        header("location: dashboard.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
</head>
<body>
    <h1>Hello, <strong><?php echo $_SESSION['name'];?></strong></h1>
</body>
</html>