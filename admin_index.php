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
    <title>Tables</title>

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
    <!-- Logout -->
    <?php
        session_start();
        if(isset($_POST['Logout'])){
            $_SESSION['start'] = "";
            header("Location: index.php");
        }        
        include('./controllers/login_controller.php');
        include('./controllers/add_delete_course.php');
    ?>
    <div class="page-wrapper">
    <!-- Header -->   
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
                                    <a href="website_info.php">
                                        <i class="fas fa-desktop"></i>Website Info
                                        <span class="bot-line"></span>
                                    </a> 
                                </li>
                            </ul>
                        </div>                 
                        <div class="header__tool">
                            <div class="account-wrap">
                                <div class="account-item account-item--style2 clearfix js-item-menu">
                                    <div class="image">
                                        <img src="images/icon/izuku.png" alt="izuku_user" />
                                    </div>
                                    <div class="content">
                                        <a class="js-acc-btn" href="#">Admin</a>
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
                                                    Admin
                                                </h5>
                                                <span class="email">admin@gmail.com</span>
                                            </div>
                                        </div>           
                                        <div class="account-dropdown__footer">
                                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
                                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit" name="Logout">
                                                    <i class="zmdi zmdi-power"></i> Logout</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </header> 
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Course table</h3>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>Course_id</th>
                                                <th>Course_name</th>
                                                <th>Type</th>
                                                <th>Description</th>
                                                <th>Image_link</th>
                                                <th>Youtube_link</th>
                                                <th>teacher_id</th>
                                                <th>Delete</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                    <?php
                                        $connect = mysqli_connect('localhost','DaoKien','29082000','website_database');
                                        $course = mysqli_query($connect,"SELECT * FROM courses ;");
                                        while($array = mysqli_fetch_array($course)){
                                        echo"
                                            <tbody>
                                                <tr class=\"tr-shadow\">
                                                    <td>
                                                        <span class=\"course-id\">{$array['course_id']}</span>
                                                    </td>
                                                    <td>{$array['course_name']}</td>                                                   
                                                    <td>{$array['type']}</td>                                                   
                                                    <td>";                                                   
                                                        echo substr($array['description'], 0, 20);
                                                        echo "...";
                                                echo"
                                                    </td>
                                                    <td>";
                                                        echo substr($array['image_link'], 0, 20);
                                                        echo "...";
                                                echo"
                                                    </td>
                                                    <td>";
                                                        echo substr($array['youtube_link'], 0, 20);
                                                        echo "...";
                                                echo"
                                                    </td>
                                                    <td>{$array['teacher_id']}</td>
                                                    <td>
                                                    <form method=\"post\" enctype=\"multipart/form-data\">
                                                        <div class=\"table-data-feature\">
                                                            <button class=\"item\" data-toggle=\"tooltip\" name=\"Delete\" value=\"{$array['course_id']}\" data-placement=\"top\" title=\"Delete\">
                                                                <i class=\"zmdi zmdi-delete\"></i>
                                                            </button>
                                                        </div>
                                                    </form>
                                                    </td>
                                                </tr>
                                                <tr class=\"spacer\"></tr>                                                          
                                            </tbody>";}
                                    ?>
                                    </table>
                                </div>
                                    <!-- Add course -->
                                        <div class="page-content--bge5">
                                            <div class="container">
                                                <div class="login-wrap">
                                                    <div class="login-content">
                                                        <div class="login-form">  
                                                        <form method="post" enctype="multipart/form-data">                              
                                                                <div class="form-group">
                                                                    <label>Course name: </label>
                                                                    <input class="au-input au-input--full" required type="text" name="course_name" placeholder="Input Course_name">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Type: </label>
                                                                    <input class="au-input au-input--full" required type="text" name="type" placeholder="Input Type">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Description: </label>
                                                                    <input class="au-input au-input--full" required type="text" name="description" placeholder="Input Description">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Image link: </label>
                                                                    <input class="au-input au-input--full" required type="text" name="image_link" placeholder="Input Image_link">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Youtube link: </label>
                                                                    <input class="au-input au-input--full" required type="text" name="youtube_link" placeholder="Input Youtube_link">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Teacher id: </label>
                                                                    <input class="au-input au-input--full" required type="number" name="teacher_id" placeholder="Input Teacher_id">
                                                                </div>
                                                                <button class="au-btn au-btn-icon au-btn--green au-btn--small" type="submit" name ="add">
                                                                    <i class="zmdi zmdi-plus"></i> add item
                                                                </button>
                                                            </form>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <!-- End ADD COURSE -->
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                    <!-- COPYRIGHT-->
                        <?php
                            include('copyright.php');
                        ?>
                    <!-- END COPYRIGHT-->
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