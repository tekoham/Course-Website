<?php 
    session_start();
    ob_start();
    $connect = mysqli_connect('localhost','id13279549_minh','Minh(1234567','id13279549_website_database');        $email = $password = "";
        function alert($message) {
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
        $alert = "";
        if (isset($_POST['SignIn'])){
            $email = $_POST['email'];
            $password = $_POST['password'];
            $checkemail = mysqli_query($connect,"SELECT * FROM user WHERE email ='$email'; ");
            $num = mysqli_num_rows($checkemail);
            if ($num > 0){
                $checkPassword = mysqli_query($connect,"SELECT * FROM user WHERE email = '$email' and password = '$password';");               
                $num2 = mysqli_num_rows($checkPassword);
                $user = mysqli_fetch_array($checkPassword);
                $_SESSION['start'] = "start";
                    $_SESSION['email'] = $user['email'];
                    $_SESSION['name'] = $user['name'];  
                    $_SESSION['user_id'] = $user['user_id']; 
                if ($num2 > 0){
                    $_SESSION['start'] = "start";
                    $_SESSION['email'] = $user['email'];
                    $_SESSION['name'] = $user['name'];  
                    $_SESSION['user_id'] = $user['user_id'];                                                       
                    header("Location: index.php");
                }   else $alert = "Wrong Password";
            }else $alert = "This email has not been registered";
            if ($alert) alert($alert);
        }
    ob_end_flush();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Login</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <!-- Content -->
    <div class="page-wrapper"></div>
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="images/icon/schoollogo1.png" alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" required type="email" name="email" placeholder="Email" value="<?php echo "$email" ?>">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" required type="password" name="password" placeholder="Password">
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">Remember Me
                                    </label>
                                    <label>
                                        <a href="forget-pass.html">Forgotten Password?</a>
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit" name ="SignIn">Sign In</button>
                                <div class="Sign-up text-center">
                                    Haven't had account yet ? <a href="register.php">Sign Up</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    
    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->