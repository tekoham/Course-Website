<?php
    session_start();
    
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
    <title>Home</title>

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
    <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
        <?php
            $connect = mysqli_connect('localhost','DaoKien','29082000', 'website_database');  
             if($_SESSION['start']){
                include('login-navbar.php');
                include('./controllers/enroll_controller.php');
                include('./controllers/leave_course_controller.php');
            }
            else {
                include("unlogin-navbar.php");               
            }  
        ?>
        <!-- END HEADER DESKTOP-->

        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">      
            <!-- STATISTIC-->
            <?php 
                $course = mysqli_query($connect,"SELECT * FROM courses WHERE course_id = '{$_SESSION['course_id']}'; ");
                $result = mysqli_fetch_array($course);
                echo"
                    <form action=\"index.php\" method=\"GET\" enctype=\"multipart/form-data\">
                        <section>
                            <div class=\"course-detail-container\">
                                <div class=\"row\">
                                    <div class=\"picture-container\">
                                        <div class=\"col\">
                                            <img src=\"{$result['image_link']}\" alt=\"logo\">
                                        </div> <br>
                                        <div class=\"d-flex justify-content-center\">
                                            <button class=\"btn btn-danger text-white\">
                                                <a href=\"./index.php?name={$result['course_id']}\" style=\"color: white\">
                                                    <b>Leave course</b>
                                                </a>
                                            </button>  
                                        </div>
                                    </div>                       
                                    <div class=\"col mt-5\">
                                        <h1 class=\"text-white\">{$result['course_name']}</h1> <br>
                                        <div class=\"course-descriptions text-dark\">
                                            {$result['description']}
                                        </div> 
                                    </div>
                                </div>                                                                                            
                            </div>
                            <div class=\"container\">
                                <div class=\"embed-responsive embed-responsive-16by9\">
                                    <iframe class=\"embed-responsive-item\" src=\"{$result['youtube_link']}\" allowfullscreen></iframe>
                                </div>
                            </div>
                        </section>
                    </form>
                ";
            ?>
            <!-- END STATISTIC-->


            <!-- COPYRIGHT-->
            <?php
                include("copyright.php");
            ?>
            <!-- END COPYRIGHT-->
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
