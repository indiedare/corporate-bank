<?php
    require('db.php');    
    session_start();
    $error = '';
    if(isset($_POST['username'])) {
        $uname = stripslashes($_REQUEST['username']);
        $uname = mysqli_real_escape_string($db, $uname);
        $pwd = stripslashes($_REQUEST['password']);
        $pwd = mysqli_real_escape_string($db, $pwd);
        
        $query = "SELECT * FROM `logins` WHERE user_id='$uname' AND password='$pwd'";

        $result = mysqli_query($db, $query) or die(mysqli_error($db));
        $row = mysqli_num_rows($result);
        
        if ($row == 1) {
            $_SESSION['username'] = $uname;
            header("location: ../dashboard.php");
        } else {
            $error = 'Incorrect Username / Password';        
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Confidential Bank</title>
    <!-- bootstrap css files here -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="../stylesheet/dashicons.min.css">
    <link rel="icon" href="./public/images/brandlogo.jpg">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="../stylesheet/index.css">
    <link rel="stylesheet" href="../stylesheet/dashboard.css">
    <link rel="stylesheet" href="../stylesheet/login.css">
</head>

<body>
    <div class="container">
        <div class="row mt-3">
            <header>
                <nav class="navbar navbar-expand-lg justify-content-between py-4 navbar-light px-md-5">
                <a class="navbar-brand brand-logo" href="">
                        <img src="../public/images/brandlogo.jpg" class="img-fluid">
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
                                <li class="nav-item px-3">
                                    <a href="./backend/login.php"><b>Login</b></a></a>
                                </li>
                            </ul>
                        </div>
                        <a href="#" class="btn btn-info btn-lg btn-account" data-toggle="modal" data-target="#myModal">Open an Account</a>
                    </div>
                </nav>
            </header>
        </div>
    </div>
    <div class="login">
        <h1 class="text-capitalize font-weight-bold">Log in to your account</h1>
        <form name="loginform" id="loginform" class="d-flex mx-auto loginform align-items-center flex-column" method="post">
            <div class="form-group my-3 w-100">
                <label for="user_login">Online ID*</label>
                <input type="text" name="username" id="username" class="input form-control px-4" value="" size="20" autocapitalize="off">
            </div>
            <div class="form-group user-pass-wrap my-3 w-100">
                <label for="user_pass">Password*</label>
                <div class="pswd-control">
                    <input type="password" name="password" id="password" class="input px-4 password-input form-control" value="" size="20" />
                    <button type="button" class="button button-secondary wp-hide-pw hide-if-no-js" data-toggle="0" aria-label="Hide password">
                        <span class="dashicons dashicons-hidden" aria-hidden="true"></span>
                    </button>
                </div>
            </div>
            <div class="form-group my-3 align-self-start">
                <span class="remember-me d-flex align-items-baseline">
                    <input name="rememberme" type="checkbox" class="form-check" id="rememberme" value="forever">
                    <label for="rememberme" class="ml-2">Remember Me</label>
                </span>
            </div>
            <input type="submit" class="btn-reg btn mt-3 continue" value="Log In">
            <p style="color: red;"><?php echo $error; ?></p>            
        </form>

        <p class="text-center mt-3">
            <a href="">Lost your password?</a>
        </p>
        <p class="text-center mt-4">
            <a href="/">← Go to Home</a>
        </p>
        <script>
            /*document.querySelector('.btn-reg').addEventListener('click', e => {
                e.preventDefault();
            })*/
            const passwordInput = document.querySelector('.password-input')
            const setPasswordVisibilityBtn = document.querySelector('.wp-hide-pw')
            const dashIconsStyle = document.querySelector('.dashicons')
            console.log(passwordInput)
            console.log(passwordInput.type)
                //passwordInput.type = 'password'
            setPasswordVisibilityBtn.addEventListener('click', () => {
                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text'
                    dashIconsStyle.classList.remove('dashicons-hidden')
                    dashIconsStyle.classList.add('dashicons-visibility')

                } else {
                    passwordInput.type = 'password'
                    dashIconsStyle.classList.remove('dashicons-visibility')
                    dashIconsStyle.classList.add('dashicons-hidden')

                }
            })
        </script>
    </div>

</body>

</html>