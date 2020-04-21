<?php
    session_start();
    ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
<body>

    <!-- Logout -->
    <?php
        if(isset($_POST['Logout'])){
            $_SESSION['start'] = "";
            header("Location: index.php");
        }        
        include('./controllers/login_controller.php');
    ?>

    <!-- Content -->
    <header class="header-desktop3 d-none d-lg-block">
            <div class="section__content section__content--p35">
                <div class="header3-wrap">
                    <div class="header__logo">
                        <a href="#">
                            <img src="images/icon/indexlogo.png" alt="CoolAdmin" />
                        </a>
                    </div>
                    <div class="header__navbar">
                        <ul class="list-unstyled">
                            <li class="has-sub">
                                <a href="index.php">
                                    <i class="fa fa-home"></i>Home
                                    <span class="bot-line"></span>
                                </a>                               
                            </li>                                                       
                            <li class="has-sub">
                                <a href="#">
                                    <i class="fas fa-copy"></i>
                                    <span class="bot-line"></span>Course List
                                </a>
                                <ul class="header3-sub-list list-unstyled">
                                <?php 
                                $connect = mysqli_connect('localhost','id13279549_minh','Minh(1234567','id13279549_website_database');
                                $result = mysqli_query($connect, "SELECT * FROM user_courses WHERE user_id = '{$_SESSION['user_id']}';");                                
                                while($array = mysqli_fetch_array($result)){
                                    $result1 = mysqli_query($connect, "SELECT DISTINCT * FROM courses WHERE course_id = '{$array['course_id']}';");
                                    $array1 = mysqli_fetch_array($result1);                                   
                                    echo " 
                                        <li>
                                            <a href=\"./course-detail.php?course_id={$array['course_id']}\">
                                            {$array1['course_name']}
                                            </a>
                                        </li>                                       
                                ";}
                                ?> 
                                </ul>
                            </li>
                            <li class="has-sub">                                 
                                <a href="website_info.php">
                                    <i class="fas fa-desktop"></i>Website Info
                                     <span class="bot-line"></span>
                                </a> 
                            </li>
                        </ul>
                    </div>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
                    <div class="header__tool">
                        <div class="account-wrap">
                            <div class="account-item account-item--style2 clearfix js-item-menu">
                                <div class="image">
                                    <img src="images/icon/izuku.png" alt="izuku_user" />
                                </div>
                                <div class="content">
                                    <a class="js-acc-btn" href="#"><?php echo "<span> {$_SESSION['name']} </span>" ?></a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="info clearfix">
                                        <div class="image">
                                            <a href="#">
                                                <img src="images/icon/izuku.png" alt="izuku_user" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="name">
                                            <?php echo "<p> {$_SESSION['name']} </p>" ?>
                                            </h5>
                                            <span class="email"><?php echo "<p> {$_SESSION['email']} </p>" ?></span>
                                        </div>
                                    </div>           
                                    <div class="account-dropdown__footer">
                                        <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit" name="Logout">
                                            <i class="zmdi zmdi-power"></i> Logout</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </header>    

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
