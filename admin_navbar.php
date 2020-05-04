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
                                    <a class="js-acc-btn" href="#"><?php echo "<span> Admin </span>" ?></a>
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
                                            <?php echo "<p> admin </p>" ?>
                                            </h5>
                                            <span class="email"><?php echo "<p> Admin </p>" ?></span>
                                        </div>
                                    </div>           
                                    <div class="account-dropdown__footer">
                                        <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit" name="Logout">
                                            <i class="zmdi zmdi-power"></i>Logout</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </header>
