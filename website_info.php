<?php
    session_start();
    if($_SESSION['start']){
                include "login-navbar.php";
            }
            else {
                include "unlogin-navbar.php";               
            }  
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Title Page-->
  <title>Website Info</title>

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
      
      <!-- END HEADER DESKTOP-->

      <!-- MAIN CONTENT-->
      <div class="main-content">
        <div class="section__content section__content--p30">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <strong class="card-title">Website Info</strong>
                  </div>
                  <div class="card-body">
                    <div class="typo-headers">
                      <h1 class="pb-2 display-4 text-center">WELCOME TO OUR WEBSITE</h1>
                      <h2 class="pb-2 display-5">This web was created by: </h2>
                      <h3 class="pb-2 display-5">DAO TRUNG KIEN</h3>
                      <h3 class="pb-2 display-5">PHAM CONG MINH</h3>
                      <h3 class="pb-2 display-5 mb-3">NGUYEN HONG THAI</h3>
                    </div>
                    <div class="typo-articles">
                      <h3>Overview</h3>
                      <p class="mb-3">
                      Online_learning is a website optimized for learning, testing, and training. Examples might be simplified to improve
                       reading and basic understanding. Tutorials, references, and examples are constantly reviewed to avoid errors, but 
                       we cannot warrant full correctness of all content. While using this site, you agree to have read and accepted our 
                       terms of use, cookie and privacy policy.
                      </p>
                    </div>
                    <div class="vue-lists">
                          <h3>Emerging Trends in Information Technology for 2020</h3>
                          <p class="mb-3">
                            Technology is an ever-changing playing field and those wanting to remain at the helm of innovation have to adapt.
                            The consumer journey is charting a new course and customers and companies alike are embracing emerging technologies.
                            As the IT industry trends such as cloud computing and SaaS become more pervasive, the world will look to brands who can
                            deliver with accuracy and real-time efficiency.
                            To help meet the demands of a technology-enabled consumer base, businesses and solution providers must also turn 
                            toward the latest trends and possibilities provided by emerging innovations to realize their full potential.
                             But, where to begin? These are the emerging trends businesses need to keep their eyes on in 2020.
                            </p>                       
                            <h3>We are here to provide you with our best course about the latest technology trends that will impact businesses in 2020</h3>
                            <ol class="vue-ordered">
                              <li>
                                Artificial Intelligence.
                              </li>
                              <li>Internet of Thing.</li>
                              <li>Machine Learning.</li>
                              <li>Blockchain.</li>
                              <li>Cybersecurity as Critical Business Function.</li>
                              <li>Basic progamming.</li>
                              <li>3D Printing.</li>                            
                            </ol> 
                            <h5>
                                And many other course that you can find in our website......
                            </h5>
                    </div>
                    <div class="vue-misc">
                      <h2 class="display-5 my-3">Special thanks to : A1K39 Kunn</h2>
                      <div class="row">
                        <div class="col-md-6">
                          <h3>Address</h3>
                          <address class="mt-3">
                            144 XuanThuy
                            </br> DichVongHau CauGiay HaNoi
                          </address>
                        </div>
                        <div class="col-md-6">
                          <h3 class="mb-3">Contact</h3>
                            <strong>ProjectDatabase@gmail.com</strong>
                            <br> 0796458415
                        </div>
                      </div>
                    </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END PAGE CONTAINER-->

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
