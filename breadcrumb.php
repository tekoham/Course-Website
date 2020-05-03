<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section class="au-breadcrumb2">
            <div class="container">
                <div class="row">
                    <div class="col-3">
                        <div class="au-breadcrumb-content">
                            <div class="au-breadcrumb-left">
                                <span class="au-breadcrumb-span">You are here:</span>
                                <ul class="list-unstyled list-inline au-breadcrumb__list">
                                   <li class="list-inline-container active">
                                   <a href="index.php">Home</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 ml-auto">
                        <form class="au-form-icon--sm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
                            <input class="au-input--w300 au-input--style2 ml-auto" name = "input" type="text" placeholder="Search for course">
                            <button class="au-btn--submit2" name ="search" type="submit">
                                <i class="zmdi zmdi-search"></i>
                            </button>
                        </form> 
                    </div>
                </div>
             </div>
        </section>
    <?php
        if(isset($_REQUEST['search'])){
            $search = addslashes($_GET['input']);
        }
    ?>
</body>
</html>