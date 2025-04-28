        <!-- main header -->
        <header class="main-header header-two">
            <!--Header-Upper-->
            <div class="header-upper">
                <div class="container-fluid clearfix">

                    <div class="header-inner rel d-flex align-items-center justify-content-between">
                        <div class="logo-outer d-block">
                            <div class="logo"><a href="index.php"><img src="assets/images/logos/logo-two.png" alt="Logo" title="Logo"></a></div>
                        </div>

                        <!-- Menu Button -->
                        <div class="menu-btns py-10">
                            <!-- menu sidbar -->
                            <div class="menu-sidebar">
                                <button class="bg-transparent">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Header Upper-->
        </header>


        <!-- Hidden Sidebar -->
        <section class="hidden-bar">
            <div class="inner-box">
                <div class="cross-icon"><span class="fal fa-times"></span></div>
                <div class="logo text-lg-center">
                    <a href="index.php"><img src="assets/images/logos/logo-two.png" alt="Logo"></a>
                </div>
                <hr class="my-40">
                
                <?php require_once('parts/header/sidebarMenu.php'); ?>
                
                <a href="contact.php" class="theme-btn style-two style-three mt-15 mb-55">
                    <span data-hover="Book Now">Book Now</span>
                    <i class="fal fa-arrow-right"></i>
                </a>
                
                <hr class="mb-65">
                <h6>Social Media</h6>
                <!--Social Icons-->
                <div class="social-style-two mt-10">
                    <a href="contact.php"><i class="fab fa-twitter"></i></a>
                    <a href="contact.php"><i class="fab fa-facebook-f"></i></a>
                    <a href="contact.php"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                </div>
            </div>
        </section>
        <!--End Hidden Sidebar -->