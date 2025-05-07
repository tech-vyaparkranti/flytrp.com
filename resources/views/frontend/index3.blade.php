@extends('parts.layout.top-layout')

@section('title', 'About Us')

@section('content') 

{{-- @include('parts.home3.hidden') --}}
<!-- Hidden Sidebar -->
<section class="hidden-bar">
    <div class="inner-box text-center">
        <div class="cross-icon"><span class="fa fa-times"></span></div>
        <div class="title">
            <h4>Get Appointment</h4>
        </div>

        <!--Appointment Form-->
        <div class="appointment-form">
            <form method="post">
                <div class="form-group">
                    <input type="text" name="text" value="" placeholder="Name" required>
                </div>
                <div class="form-group">
                    <input type="email" name="email" value="" placeholder="Email Address" required>
                </div>
                <div class="form-group">
                    <textarea placeholder="Message" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="theme-btn style-two">
                        <span data-hover="Submit now">Submit now</span>
                        <i class="fal fa-arrow-right"></i>
                    </button>
                </div>
            </form>
        </div>

        <!--Social Icons-->
        <div class="social-style-one">
            <a href="contact.php"><i class="fab fa-twitter"></i></a>
            <a href="contact.php"><i class="fab fa-facebook-f"></i></a>
            <a href="contact.php"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-pinterest-p"></i></a>
        </div>
    </div>
</section>
<!--End Hidden Sidebar -->

{{-- @include('parts.home3.banner') --}}
<!-- Hero Area Start -->
<section class="hero-area-three bgs-cover overflow-hidden pt-130 pb-100 br-15 rel z-2" style="background-image: url(assets/images/hero/hero-three-bg.jpg);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-9 col-lg-10">
                <div class="hero-content-three counter-text-wrap text-white text-center mb-125 rmb-65" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                    <span class="subtitle mb-15">Ravelo Tours & Travel</span>
                    <h1>Explore and Start yours's Journey With Ravelo</h1>
                    <p>One site <span class="count-text plus" data-speed="3000" data-stop="34500">0</span> most popular experience you’ll remember</p>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-shapes">
        <div class="shape one" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
            <img src="assets/images/shapes/hero1.png" alt="Shape">
        </div>
        <div class="shape two" data-aos="fade-down" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
            <img src="assets/images/shapes/hero2.png" alt="Shape">
        </div>
        <div class="shape three" data-aos="fade-down" data-aos-duration="1500" data-aos-offset="50">
            <img src="assets/images/shapes/hero3.png" alt="Shape">
        </div>
        <div class="shape four" data-aos="fade-left" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
            <img src="assets/images/shapes/hero4.png" alt="Shape">
        </div>
    </div>
    <div class="container container-1400">
        <div class="search-filter-inner mt-0" data-aos="zoom-out-down" data-aos-duration="1500" data-aos-offset="50">
            <div class="filter-item clearfix">
                <div class="icon"><i class="fal fa-map-marker-alt"></i></div>
                <span class="title">Destinations</span>
                <select name="city" id="city">
                    <option value="value1">City or Region</option>
                    <option value="value2">City</option>
                    <option value="value2">Region</option>
                </select>
            </div>
            <div class="filter-item clearfix">
                <div class="icon"><i class="fal fa-flag"></i></div>
                <span class="title">All Activity</span>
                <select name="activity" id="activity">
                    <option value="value1">Choose Activity</option>
                    <option value="value2">Daily</option>
                    <option value="value2">Monthly</option>
                </select>
            </div>
            <div class="filter-item clearfix">
                <div class="icon"><i class="fal fa-calendar-alt"></i></div>
                <span class="title">Departure Date</span>
                <select name="date" id="date">
                    <option value="value1">Date from</option>
                    <option value="value2">10</option>
                    <option value="value2">20</option>
                </select>
            </div>
            <div class="filter-item clearfix">
                <div class="icon"><i class="fal fa-users"></i></div>
                <span class="title">Guests</span>
                <select name="cuests" id="cuests">
                    <option value="value1">0</option>
                    <option value="value2">1</option>
                    <option value="value2">2</option>
                </select>
            </div>
            <div class="search-button">
                <button class="theme-btn">
                    <span data-hover="Search">Search</span>
                    <i class="far fa-search"></i>
                </button>
            </div>
        </div>
    </div>
</section>
<!-- Hero Area End -->

{{-- @include('parts.home3.feature') --}}
 <!-- Features Area start -->
 <section class="features-area-three pt-10 rel z-1">
    <div class="row justify-content-center">
        <div class="col-xxl-3 col-xl-4 col-md-6" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50">
            <div class="feature-item style-three">
                <div class="icon"><i class="flaticon-route"></i></div>
                <div class="content">
                    <h3><a href="destination-details.php">500+ Destinations</a></h3>
                    <p>Adventure seekers can embark thrilling journeys through the Amazon Rainforest or scale</p>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-xl-4 col-md-6" data-aos="flip-left" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
            <div class="feature-item style-three bgc-secondary">
                <div class="icon"><i class="flaticon-best-price"></i></div>
                <div class="content">
                    <h3><a href="destination-details.php">Best Price Guarantee</a></h3>
                    <p>Adventure seekers can embark thrilling journeys through the Amazon Rainforest or scale</p>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-xl-4 col-md-6" data-aos="flip-left" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
            <div class="feature-item style-three bgc-primary">
                <div class="icon"><i class="flaticon-travel-1"></i></div>
                <div class="content">
                    <h3><a href="destination-details.php">Diverse Destinations</a></h3>
                    <p>Adventure seekers can embark thrilling journeys through the Amazon Rainforest or scale</p>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-xl-4 col-md-6" data-aos="flip-left" data-aos-delay="150" data-aos-duration="1500" data-aos-offset="50">
            <div class="feature-item style-three bgc-pink">
                <div class="icon"><i class="flaticon-guidepost"></i></div>
                <div class="content">
                    <h3><a href="destination-details.php">Best Travel Guide</a></h3>
                    <p>Adventure seekers can embark thrilling journeys through the Amazon Rainforest or scale</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Features Area end -->

{{-- @include('parts.home3.destinations') --}}
<!-- Destinations Area start -->
<section class="destinations-area pt-85 pb-100 rel z-1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section-title text-center counter-text-wrap mb-50" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                    <h2>Explore Our Popular Destinations</h2>
                    <p>One site <span class="count-text plus" data-speed="3000" data-stop="34500">0</span> most popular experience you’ll remember</p>
                </div>
            </div>
        </div>
        <div class="destination-active">
            <div class="destination-item style-two" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                <div class="image">
                    <img src="assets/images/destinations/destination-five1.jpg" alt="Destination">
                </div>
                <div class="content">
                    <h6><a href="destination-details.php">Switzerland's</a></h6>
                    <span class="tours">258 tours</span>
                </div>
            </div>
            <div class="destination-item style-two" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                <div class="image">
                    <img src="assets/images/destinations/destination-five2.jpg" alt="Destination">
                </div>
                <div class="content">
                    <h6><a href="destination-details.php">Poland</a></h6>
                    <span class="tours">258 tours</span>
                </div>
            </div>
            <div class="destination-item style-two" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                <div class="image">
                    <img src="assets/images/destinations/destination-five3.jpg" alt="Destination">
                </div>
                <div class="content">
                    <h6><a href="destination-details.php">Indonesia</a></h6>
                    <span class="tours">258 tours</span>
                </div>
            </div>
            <div class="destination-item style-two" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                <div class="image">
                    <img src="assets/images/destinations/destination-five4.jpg" alt="Destination">
                </div>
                <div class="content">
                    <h6><a href="destination-details.php">Thailand</a></h6>
                    <span class="tours">258 tours</span>
                </div>
            </div>
            <div class="destination-item style-two" data-aos="fade-up" data-aos-delay="150" data-aos-duration="1500" data-aos-offset="50">
                <div class="image">
                    <img src="assets/images/destinations/destination-five5.jpg" alt="Destination">
                </div>
                <div class="content">
                    <h6><a href="destination-details.php">Rome, Italy</a></h6>
                    <span class="tours">258 tours</span>
                </div>
            </div>
            <div class="destination-item style-two" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                <div class="image">
                    <img src="assets/images/destinations/destination-five2.jpg" alt="Destination">
                </div>
                <div class="content">
                    <h6><a href="destination-details.php">Indonesia</a></h6>
                    <span class="tours">258 tours</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Destinations Area end -->

{{-- @include('parts.home3.cta') --}}
<!-- CTA Three Area start -->
<section class="cta-three-area rel z-1">
    <div class="container">
        <div class="cta-three-inner bgc-black overflow-hidden br-10" style="background-image: url(assets/images/newsletter/newsletter-bg-lines.png);">
            <div class="row no-gap">
                <div class="col-lg-6 rel z-1">
                    <div class="cta-three-content text-white" data-aos="zoom-in-right" data-aos-duration="1500" data-aos-offset="50">
                        <div class="section-title counter-text-wrap mb-45">
                            <h2>Looking For Holiday Tour Package ?</h2>
                            <p>One site <span class="count-text plus bgc-primary" data-speed="3000" data-stop="34500">0</span> most popular experience you’ll remember our popular Ravelo</p>
                        </div>
                        <a href="tour-details.php" class="theme-btn style-two bgc-secondary">
                            <span data-hover="Explore Tours">Explore Tours</span>
                            <i class="fal fa-arrow-right"></i>
                        </a>
                    </div>
                    <div class="cta-three-shape">
                        <img src="assets/images/shapes/cta.png" alt="Shape">
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                    <div class="cta-three-image bgs-cover" style="background-image: url(assets/images/newsletter/newsletter-right.jpg);"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CTA Three Area end -->


{{-- @include('parts.home3.featuretwo') --}}
<!-- Features Tours Area start -->
<section class="features-tour-area pt-100 rel z-1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section-title text-center counter-text-wrap mb-50" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                    <h2>Explore Features Tours</h2>
                    <p>One site <span class="count-text plus bgc-primary" data-speed="3000" data-stop="34500">0</span> most popular experience you’ll remember</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="destination-item style-four no-border" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50">
                    <div class="image">
                        <span class="badge">10% Off</span>
                        <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                        <img src="assets/images/destinations/tour1.jpg" alt="Tour">
                    </div>
                    <div class="content">
                        <span class="location"><i class="fal fa-map-marker-alt"></i> Bali, Indonesia</span>
                        <h6><a href="tour-details.php">Relinking Beach in Nusa panada island, Bali, Indonesia</a></h6>
                    </div>
                    <div class="destination-footer">
                        <span class="price"><span>$58.00</span>/person</span>
                        <div class="ratting">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                    <a href="destination-details.php" class="theme-btn style-three">
                        <span data-hover="Explore">Explore</span>
                        <i class="fal fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="destination-item style-four no-border" data-aos="flip-left" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                    <div class="image">
                        <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                        <img src="assets/images/destinations/tour2.jpg" alt="Tour">
                    </div>
                    <div class="content">
                        <span class="location"><i class="fal fa-map-marker-alt"></i> New Zealand</span>
                        <h6><a href="tour-details.php">Relinking Beach in Nusa panada island, Bali, Indonesia</a></h6>
                    </div>
                    <div class="destination-footer">
                        <span class="price"><span>$58.00</span>/person</span>
                        <div class="ratting">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                    <a href="destination-details.php" class="theme-btn style-three">
                        <span data-hover="Explore">Explore</span>
                        <i class="fal fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="destination-item style-four no-border" data-aos="flip-left" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                    <div class="image">
                        <span class="badge bgc-pink">Featured</span>
                        <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                        <img src="assets/images/destinations/tour3.jpg" alt="Tour">
                    </div>
                    <div class="content">
                        <span class="location"><i class="fal fa-map-marker-alt"></i> Bali, Indonesia</span>
                        <h6><a href="tour-details.php">Relinking Beach in Nusa panada island, Bali, Indonesia</a></h6>
                    </div>
                    <div class="destination-footer">
                        <span class="price"><span>$58.00</span>/person</span>
                        <div class="ratting">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <a href="destination-details.php" class="theme-btn style-three">
                        <span data-hover="Explore">Explore</span>
                        <i class="fal fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="destination-item style-four no-border" data-aos="flip-left" data-aos-delay="150" data-aos-duration="1500" data-aos-offset="50">
                    <div class="image">
                        <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                        <img src="assets/images/destinations/tour4.jpg" alt="Tour">
                    </div>
                    <div class="content">
                        <span class="location"><i class="fal fa-map-marker-alt"></i> Rome, Italy</span>
                        <h6><a href="tour-details.php">Relinking Beach in Nusa panada island, Bali, Indonesia</a></h6>
                    </div>
                    <div class="destination-footer">
                        <span class="price"><span>$58.00</span>/person</span>
                        <div class="ratting">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                    <a href="destination-details.php" class="theme-btn style-three">
                        <span data-hover="Explore">Explore</span>
                        <i class="fal fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="destination-item style-four no-border" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50">
                    <div class="image">
                        <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                        <img src="assets/images/destinations/tour5.jpg" alt="Tour">
                    </div>
                    <div class="content">
                        <span class="location"><i class="fal fa-map-marker-alt"></i> Saudi Arabia</span>
                        <h6><a href="tour-details.php">Relinking Beach in Nusa panada island, Bali, Indonesia</a></h6>
                    </div>
                    <div class="destination-footer">
                        <span class="price"><span>$58.00</span>/person</span>
                        <div class="ratting">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                    <a href="destination-details.php" class="theme-btn style-three">
                        <span data-hover="Explore">Explore</span>
                        <i class="fal fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="destination-item style-four no-border" data-aos="flip-left" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                    <div class="image">
                        <span class="badge">15% Off</span>
                        <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                        <img src="assets/images/destinations/tour6.jpg" alt="Tour">
                    </div>
                    <div class="content">
                        <span class="location"><i class="fal fa-map-marker-alt"></i> Rome, Italy</span>
                        <h6><a href="tour-details.php">Relinking Beach in Nusa panada island, Bali, Indonesia</a></h6>
                    </div>
                    <div class="destination-footer">
                        <span class="price"><span>$58.00</span>/person</span>
                        <div class="ratting">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                    <a href="destination-details.php" class="theme-btn style-three">
                        <span data-hover="Explore">Explore</span>
                        <i class="fal fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="destination-item style-four no-border" data-aos="flip-left" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                    <div class="image">
                        <span class="badge">10% Off</span>
                        <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                        <img src="assets/images/destinations/tour7.jpg" alt="Tour">
                    </div>
                    <div class="content">
                        <span class="location"><i class="fal fa-map-marker-alt"></i> South Africa</span>
                        <h6><a href="tour-details.php">Relinking Beach in Nusa panada island, Bali, Indonesia</a></h6>
                    </div>
                    <div class="destination-footer">
                        <span class="price"><span>$58.00</span>/person</span>
                        <div class="ratting">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <a href="destination-details.php" class="theme-btn style-three">
                        <span data-hover="Explore">Explore</span>
                        <i class="fal fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="destination-item style-four no-border" data-aos="flip-left" data-aos-delay="150" data-aos-duration="1500" data-aos-offset="50">
                    <div class="image">
                        <span class="badge bgc-primary">Popular</span>
                        <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                        <img src="assets/images/destinations/tour8.jpg" alt="Tour">
                    </div>
                    <div class="content">
                        <span class="location"><i class="fal fa-map-marker-alt"></i> Bali, Indonesia</span>
                        <h6><a href="tour-details.php">Relinking Beach in Nusa panada island, Bali, Indonesia</a></h6>
                    </div>
                    <div class="destination-footer">
                        <span class="price"><span>$58.00</span>/person</span>
                        <div class="ratting">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <a href="destination-details.php" class="theme-btn style-three">
                        <span data-hover="Explore">Explore</span>
                        <i class="fal fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Features Tours Area end -->


{{-- @include('parts.home3.ctatwo') --}}
<!-- CTA Area start -->
<section class="cta-area pt-50 rel z-1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-4 col-md-6" data-aos="zoom-in-down" data-aos-duration="1500" data-aos-offset="50">
                <div class="cta-item" style="background-image: url(assets/images/cta/cta1.jpg);">
                    <span class="category">Tent Camping</span>
                    <h2>Explore the world best tourism</h2>
                    <a href="tour-details.php" class="theme-btn style-two bgc-secondary">
                        <span data-hover="Book Now">Explore Tours</span>
                        <i class="fal fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-md-6" data-aos="zoom-in-down" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                <div class="cta-item" style="background-image: url(assets/images/cta/cta2.jpg);">
                    <span class="category">Sea Beach</span>
                    <h2>World largest Sea Beach in Thailand</h2>
                    <a href="tour-details.php" class="theme-btn style-two">
                        <span data-hover="Book Now">Explore Tours</span>
                        <i class="fal fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-md-6" data-aos="zoom-in-down" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                <div class="cta-item" style="background-image: url(assets/images/cta/cta3.jpg);">
                    <span class="category">Water Falls</span>
                    <h2>Largest Water falls Bali, Indonesia</h2>
                    <a href="tour-details.php" class="theme-btn style-two bgc-secondary">
                        <span data-hover="Book Now">Explore Tours</span>
                        <i class="fal fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CTA Area end -->

{{-- @include('parts.home3.hot') --}}
<!-- Hot Deals Area start -->
<section class="hot-deals-area pt-70 rel z-1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section-title text-center counter-text-wrap" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                    <h2>Discover Hot Deals</h2>
                    <p>One site <span class="count-text plus" data-speed="3000" data-stop="34500">0</span> most popular experience you’ll remember</p>
                </div>
            </div>
        </div>
        <div class="hot-deals-active">
            <div class="destination-item style-four no-border" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50">
                <div class="image">
                    <span class="badge">10% Off</span>
                    <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                    <img src="assets/images/destinations/hot-deal1.jpg" alt="Hot Deal">
                </div>
                <div class="content">
                    <span class="location"><i class="fal fa-map-marker-alt"></i> City of Venice, Italy</span>
                    <h5><a href="destination-details.php">Venice Grand Canal, Metropolitan Summer in Venice</a></h5>
                </div>
                <div class="destination-footer">
                    <span class="price"><span>$58.00</span>/person</span>
                    <div class="ratting">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <a href="destination-details.php" class="theme-btn style-three">
                    <span data-hover="Explore">Explore</span>
                    <i class="fal fa-arrow-right"></i>
                </a>
            </div>
            <div class="destination-item style-four no-border" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50">
                <div class="image">
                    <span class="badge">10% Off</span>
                    <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                    <img src="assets/images/destinations/hot-deal2.jpg" alt="Hot Deal">
                </div>
                <div class="content">
                    <span class="location"><i class="fal fa-map-marker-alt"></i> Kyoto, Japan</span>
                    <h5><a href="destination-details.php">Japan, Kyoto, travel, and people in Kyoto, Japan by Sorasak</a></h5>
                </div>
                <div class="destination-footer">
                    <span class="price"><span>$58.00</span>/person</span>
                    <div class="ratting">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <a href="destination-details.php" class="theme-btn style-three">
                    <span data-hover="Explore">Explore</span>
                    <i class="fal fa-arrow-right"></i>
                </a>
            </div>
            <div class="destination-item style-four no-border" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50">
                <div class="image">
                    <span class="badge">10% Off</span>
                    <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                    <img src="assets/images/destinations/hot-deal3.jpg" alt="Hot Deal">
                </div>
                <div class="content">
                    <span class="location"><i class="fal fa-map-marker-alt"></i> Tamnougalt, Morocco</span>
                    <h5><a href="destination-details.php">Camels on desert under blue sky Morocco, Sahara.</a></h5>
                </div>
                <div class="destination-footer">
                    <span class="price"><span>$58.00</span>/person</span>
                    <div class="ratting">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <a href="destination-details.php" class="theme-btn style-three">
                    <span data-hover="Explore">Explore</span>
                    <i class="fal fa-arrow-right"></i>
                </a>
            </div>
            <div class="destination-item style-four no-border" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50">
                <div class="image">
                    <span class="badge">10% Off</span>
                    <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                    <img src="assets/images/destinations/hot-deal1.jpg" alt="Hot Deal">
                </div>
                <div class="content">
                    <span class="location"><i class="fal fa-map-marker-alt"></i> City of Venice, Italy</span>
                    <h5><a href="destination-details.php">Venice Grand Canal, Metropolitan Summer in Venice</a></h5>
                </div>
                <div class="destination-footer">
                    <span class="price"><span>$58.00</span>/person</span>
                    <div class="ratting">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <a href="destination-details.php" class="theme-btn style-three">
                    <span data-hover="Explore">Explore</span>
                    <i class="fal fa-arrow-right"></i>
                </a>
            </div>
            <div class="destination-item style-four no-border" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50">
                <div class="image">
                    <span class="badge">10% Off</span>
                    <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                    <img src="assets/images/destinations/hot-deal2.jpg" alt="Hot Deal">
                </div>
                <div class="content">
                    <span class="location"><i class="fal fa-map-marker-alt"></i> Kyoto, Japan</span>
                    <h5><a href="destination-details.php">Japan, Kyoto, travel, and people in Kyoto, Japan by Sorasak</a></h5>
                </div>
                <div class="destination-footer">
                    <span class="price"><span>$58.00</span>/person</span>
                    <div class="ratting">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <a href="destination-details.php" class="theme-btn style-three">
                    <span data-hover="Explore">Explore</span>
                    <i class="fal fa-arrow-right"></i>
                </a>
            </div>
            <div class="destination-item style-four no-border" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50">
                <div class="image">
                    <span class="badge">10% Off</span>
                    <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                    <img src="assets/images/destinations/hot-deal3.jpg" alt="Hot Deal">
                </div>
                <div class="content">
                    <span class="location"><i class="fal fa-map-marker-alt"></i> Tamnougalt, Morocco</span>
                    <h5><a href="destination-details.php">Camels on desert under blue sky Morocco, Sahara.</a></h5>
                </div>
                <div class="destination-footer">
                    <span class="price"><span>$58.00</span>/person</span>
                    <div class="ratting">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <a href="destination-details.php" class="theme-btn style-three">
                    <span data-hover="Explore">Explore</span>
                    <i class="fal fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- Hot Deals Area end -->


{{-- @include('parts.home3.benefit') --}}
<!-- Benefit Area start -->
<section class="benefit-area mt-110 rel z-1">
    <div class="container">
        <div class="benefit-area-inner py-100">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-4 col-lg-5">
                    <div class="benefit-content-part text-white rmb-55" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="section-title counter-text-wrap mb-40">
                            <h2>How to Benefit Our Ravelo Tours & Travels</h2>
                            <p>One site <span class="count-text plus bgc-primary" data-speed="3000" data-stop="34500">0</span> most popular experience</p>
                        </div>
                        <p>We go above and beyond to make your travel dreams trust us to handle the details so you can unforgettable memories. Explore the world with confidence</p>
                        <a href="about.php" class="theme-btn style-two bgc-secondary mt-25">
                            <span data-hover="Learn More Us">Learn More Us</span>
                            <i class="fal fa-arrow-right"></i>
                        </a>
                        <div class="happy-customer mt-45">
                            <h6>850K+ Happy<br> Customer</h6>
                            <div class="feature-authors">
                                <img src="assets/images/features/feature-author1.jpg" alt="Author">
                                <img src="assets/images/features/feature-author2.jpg" alt="Author">
                                <img src="assets/images/features/feature-author3.jpg" alt="Author">
                                <span>4k+</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="benefit-image-part">
                        <div class="image-one" data-aos="fade-down" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                            <img src="assets/images/benefit/benefit1.png" alt="Benefit">
                        </div>
                        <div class="image-two" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                            <img src="assets/images/benefit/benefit2.png" alt="Benefit">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Benefit Area end -->

{{-- @include('parts.home3.mobile') --}}
<!-- Mobile App Area start -->
<section class="mobile-app-area pt-100 rel z-1">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-6">
                <div class="row no-gap rmb-55" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                    <div class="col-6 col-small">
                        <div class="counter-item counter-text-wrap style-two">
                            <div class="icon"><i class="flaticon-business-travel"></i></div>
                            <span class="count-text k-plus" data-speed="3000" data-stop="28">0</span>
                            <span class="counter-title">Total Clients</span>
                        </div>
                    </div>
                    <div class="col-6 col-small">
                        <div class="counter-item counter-text-wrap style-two">
                            <div class="icon"><i class="flaticon-plane"></i></div>
                            <span class="count-text plus" data-speed="3000" data-stop="486">0</span>
                            <span class="counter-title">Total tours</span>
                        </div>
                    </div>
                    <div class="col-6 col-small">
                        <div class="counter-item counter-text-wrap style-two">
                            <div class="icon"><i class="flaticon-signpost"></i></div>
                            <span class="count-text plus" data-speed="3000" data-stop="200">0</span>
                            <span class="counter-title">Tour Guides</span>
                        </div>
                    </div>
                    <div class="col-6 col-small">
                        <div class="counter-item counter-text-wrap style-two">
                            <div class="icon"><i class="flaticon-key"></i></div>
                            <span class="count-text plus" data-speed="3000" data-stop="258">0</span>
                            <span class="counter-title">Luxury Hotel</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-6">
                <div class="mobile-app-content" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                    <div class="section-title mb-30">
                        <h2>The Ultimate Travel Experience Features That Set Our Agency Apart</h2>
                    </div>
                    <p>We go above and beyond to make your travel dreams a reality. Trust us to handle the details so you can creating unforgettable memories. Explore the world with confidence</p>
                    <ul class="list-style-two mt-35 mb-30">
                        <li>Experience Agency</li>
                        <li>Professional Team</li>
                        <li>Low Cost Travel</li>
                        <li>Online Support 24/7</li>
                    </ul>
                    <a href="about.php" class="theme-btn style-two">
                        <span data-hover="Explore Tours">Explore Tours</span>
                        <i class="fal fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Mobile App Area end -->

{{-- @include('parts.home3.blog') --}}
<!-- Blog Area start -->
<section class="blog-area pt-100 pb-70 rel z-1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section-title text-center counter-text-wrap mb-70" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                    <h2>Read Latest News & Blog</h2>
                    <p>One site <span class="count-text plus" data-speed="3000" data-stop="34500">0</span> most popular experience you’ll remember</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xxl-4 col-lg-6">
                <div class="blog-item style-two" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                    <div class="image">
                        <img src="assets/images/blog/blog-two1.jpg" alt="Blog">
                    </div>
                    <div class="content">
                        <ul class="blog-meta">
                            <li><i class="far fa-calendar-alt"></i> <a href="#">25 Feb 2024</a></li>
                            <li><i class="far fa-comments"></i> <a href="#">Comments (5)</a></li>
                        </ul>
                        <h5><a href="blog-details.php">Ultimate Guide to Planning Your Dream Vacation</a></h5>
                        <a href="blog-details.php" class="read-more">Read More <i class="fal fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-6">
                <div class="blog-item style-two" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                    <div class="image">
                        <img src="assets/images/blog/blog-two2.jpg" alt="Blog">
                    </div>
                    <div class="content">
                        <ul class="blog-meta">
                            <li><i class="far fa-calendar-alt"></i> <a href="#">25 Feb 2024</a></li>
                            <li><i class="far fa-comments"></i> <a href="#">Comments (5)</a></li>
                        </ul>
                        <h5><a href="blog-details.php">Ultimate Guide to Planning Your Dream Vacation</a></h5>
                        <a href="blog-details.php" class="read-more">Read More <i class="fal fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-6">
                <div class="blog-item style-two" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                    <div class="image">
                        <img src="assets/images/blog/blog-two3.jpg" alt="Blog">
                    </div>
                    <div class="content">
                        <ul class="blog-meta">
                            <li><i class="far fa-calendar-alt"></i> <a href="#">25 Feb 2024</a></li>
                            <li><i class="far fa-comments"></i> <a href="#">Comments (5)</a></li>
                        </ul>
                        <h5><a href="blog-details.php">Ultimate Guide to Planning Your Dream Vacation</a></h5>
                        <a href="blog-details.php" class="read-more">Read More <i class="fal fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Area end -->

{{-- @include('parts.home3.newsletter') --}}
<!-- Newsletter Area start -->
<section class="newsletter-three bgc-primary py-100 rel z-1" style="background-image: url(assets/images/newsletter/newsletter-bg-lines.png);">
    <div class="container container-1500">
        <div class="row">
            <div class="col-lg-6">
                <div class="newsletter-content-part text-white rmb-55" data-aos="zoom-in-right" data-aos-duration="1500" data-aos-offset="50">
                    <div class="section-title counter-text-wrap mb-45">
                        <h2>Subscribe Our Newsletter to Get more offer & Tips</h2>
                        <p>One site <span class="count-text plus" data-speed="3000" data-stop="34500">0</span> most popular experience you’ll remember</p>
                    </div>
                    <form class="newsletter-form mb-15" action="#">
                        <input id="news-email" type="email" placeholder="Email Address" required>
                        <button type="submit" class="theme-btn bgc-secondary style-two">
                            <span data-hover="Subscribe">Subscribe</span>
                            <i class="fal fa-arrow-right"></i>
                        </button>
                    </form>
                    <p>No credit card requirement. No commitments</p>
                </div>
                <div class="newsletter-bg-image" data-aos="zoom-in-up" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                    <img src="assets/images/newsletter/newsletter-bg-image.png" alt="Newsletter">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="newsletter-image-part bgs-cover" style="background-image: url(assets/images/newsletter/newsletter-two-right.jpg);" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50"></div>
            </div>
        </div>
    </div>
</section>
<!-- Newsletter Area end -->
@endsection
