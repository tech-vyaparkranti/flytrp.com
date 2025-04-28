<?php $head_title="404 || ravelo || ravelo PHP Template"?>
<?php require_once('parts/layout/top-layout.php'); ?>
<!-- header -->
<?php require_once('parts/header/header3.php'); ?>
<?php
$page_title = "404";
require_once('parts/page-title.php');
?>
       
        
        <!-- 404 Error Area start -->
        <section class="error-area pt-70 pb-100 rel z-1">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-5 col-lg-6">
                        <div class="error-content rmb-55" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                            <h1>OPPS! </h1>
                            <div class="section-title mt-15 mb-25">
                                <h2>This Page Can’t be Found</h2>
                            </div>
                            <p>Best features to include on business landing page are those that quickly convey your value proposition, build trust, and encourage action. Here are six essential features</p>
                            <form class="newsletter-form mt-40 mb-50" action="#">
                                <input id="news-email" type="text" placeholder="Search keyword" required>
                                <button type="submit" class="theme-btn bgc-secondary style-two">
                                    <span data-hover="Search">Search</span>
                                    <i class="fal fa-arrow-right"></i>
                                </button>
                            </form>
                            <div class="keywords">
                                <a href="blog.php">Travel</a>
                                <a href="blog.php">Luxury Hotel</a>
                                <a href="blog.php">Indonesia</a>
                                <a href="blog.php">Sea Beach</a>
                                <a href="blog.php">Camping</a>
                                <a href="blog.php">Hiking</a>
                                <a href="blog.php">Fishing</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="error-images" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                            <img src="assets/images/newsletter/404.png" alt="404 Error">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- 404 Error Area end -->
        

<?php require_once('parts/footer/footer2.php'); ?>
<?php require_once('parts/layout/bottom-layout.php'); ?> 