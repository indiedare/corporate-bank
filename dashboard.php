<?php

include("./backend/auth.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Confidential Bank - User Dashboard</title>
    <!-- bootstrap css files here -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="icon" href="./public/images/brandlogo.jpg">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="stylesheet/index.css">
</head>

<body>    
    <div class="container">
        <div class="row">
            <header>
                <nav class="navbar navbar-expand-lg justify-content-between py-4 navbar-light px-md-5">
                    <a class="navbar-brand brand-logo" href="">
                        <img src="public/images/brandlogo.jpg" class="img-fluid">
                    </a>
                    <div class="justify-content-end d-md-flex">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>

                        <div class="justify-content-end collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav desktop-navbar">
                                <li class="nav-item px-3">
                                    <a href="personal.html"><b>Personal</b></a>
                                </li>
                                <li class="nav-item px-3">
                                    <a href="business.html"><b>Business Banking</b></a>
                                </li>
                                <li class="nav-item px-3">
                                    <a href="about.html"><b>About Us</b></a></a>
                                </li>
                            </ul>
                        </div>
                        <a class="btn btn-info btn-lg btn-account" href="./backend/logout.php">Logout</a>                        
                    </div>
                </nav>
            </header>
        </div>
    </div>
    <div class="container">
        <div class="col-md-6">
            <div class="flex security-question-box">
                <form>
                    <label for="security">What is your Favourite Sport ?</label>
                </form>
            </div>
        
        </div>
        <div class="col-md-6"></div>
    </div>
    <h1>Hello, <strong><?php echo $_SESSION['username'];?></strong></h1>
</body>
</html>