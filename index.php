<?php
    session_start();
    ob_start();
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
        $connect = mysqli_connect('localhost','id13279549_minh','Minh(1234567','id13279549_website_database');
        $title = mysqli_query($connect,"SELECT DISTINCT type FROM courses; ");
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
            <!-- BREADCRUMB-->
                <?php
                    include("breadcrumb.php");
                ?>
            <!-- END BREADCRUMB-->
            
            <?php while($array1 = mysqli_fetch_array($title)){ 
                $course = mysqli_query($connect,"SELECT * FROM courses WHERE type='{$array1['type']}'; ");
                echo"
                <!-- WELCOME-->
                <section class=\"welcome p-t-10\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <h1 class=\"title-4\"> {$array1['type']} course
                                </h1>
                                <hr class=\"line-seprate\">
                            </div>
                        </div>
                    </div>
                </section>
                <!-- END WELCOME-->

                <!-- PROGRAM COURSE-->
                <form action=\"course-detail.php\" method=\"POST\" enctype=\"multipart/form-data\">
                    <section class=\"statistic statistic2\">
                        <div class=\"container\">
                            <div class=\"row\">";
                            if($_SESSION['start']){
                                while($array = mysqli_fetch_array($course)){
                                $findcourse = mysqli_query($connect , "SELECT * FROM user_courses WHERE user_id = {$_SESSION['user_id']} AND course_id = '{$array['course_id']}'");
                                $numcourse = mysqli_num_rows($findcourse);
                                $name ="";
                                if ($numcourse > 0) $name = "Continue";
                                else $name = "Enroll me";
                                    echo "
                                    <div class=\"course-container\">                           
                                        <img src=\"{$array['image_link']}\" alt=\"course-logo\">                            
                                        <a href=\"course-detail.php\"><h2 class=\"course-name ml-2\">{$array['course_name']}</h2>
                                        </a>
                                        <div class=\"course-description ml-2\">
                                            <p>{$array['description']}</p>
                                        </div> 
                                        <button class=\"d-flex ml-auto mr-3 btn btn-success\">
                                        <a href=\"./course-detail.php?course_id={$array['course_id']}\" style=\"color: white\"> {$name} </a>
                                        </button>
                                    </div> ";}
                            } else {
                                while($array = mysqli_fetch_array($course)){
                                    $findcourse = mysqli_query($connect , "SELECT * FROM user_courses WHERE user_id = {$_SESSION['user_id']} AND course_id = '{$array['course_id']}'");
                                    $numcourse = mysqli_num_rows($findcourse);
                                    $name ="";
                                    if ($numcourse > 0) $name = "Continue";
                                    else $name = "Enroll me";
                                        echo "
                                        <div class=\"course-container\">                           
                                            <img src=\"{$array['image_link']}\" alt=\"course-logo\">                            
                                            <h2 class=\"course-name ml-2\">{$array['course_name']}</h2>                              
                                            <div class=\"course-description ml-2\">
                                                <p>{$array['description']}</p>
                                            </div> 
                                            <button class=\"d-flex ml-auto mr-3 btn btn-success\">
                                            <a href=\"./login.php?\" style=\"color: white\"> Login to enroll course </a>
                                            </button>
                                        </div> ";}
                            }
                                echo "                                                                                                                                                                      
                        </div>
                    </section>
                <form>
                <!-- END PROGRAM COURSE-->
                ";}           
            ?>    
            
                       
            <!-- COPYRIGHT-->
                <?php
                    include('copyright.php');
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
