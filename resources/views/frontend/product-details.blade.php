@extends('parts.layout.top-layout')

@section('title', 'Product Details')
@section('page_title', 'Product Details') 

@section('content')
@include('parts.page-title') 
    
        <!-- Product Details Start -->
        <section class="product-details pt-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="product-details-images rmb-55" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                            <div class="tab-content preview-images">
                                <div class="tab-pane fade preview-item active show" id="preview1">
                                    <img src="assets/images/shop/preview1.png" alt="Perview">
                                </div>
                                <div class="tab-pane fade preview-item" id="preview2">
                                    <img src="assets/images/shop/preview1.png" alt="Perview">
                                </div>
                                <div class="tab-pane fade preview-item" id="preview3">
                                    <img src="assets/images/shop/preview1.png" alt="Perview">
                                </div>
                            </div>
                            <div class="nav thumb-images rmb-20">
                                <a href="#preview1" data-bs-toggle="tab" class="thumb-item active show">
                                    <img src="assets/images/shop/thumb1.png" alt="Thumb">
                                </a>
                                <a href="#preview2" data-bs-toggle="tab" class="thumb-item">
                                    <img src="assets/images/shop/thumb2.png" alt="Thumb">
                                </a>
                                <a href="#preview3" data-bs-toggle="tab" class="thumb-item">
                                    <img src="assets/images/shop/thumb3.png" alt="Thumb">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="product-details-content" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                            <div class="section-title">
                                <h2>Black & Gray Travel Cap</h2>
                            </div>
                            <div class="ratting mb-15">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span>(5.8k+ reviews)</span>
                            </div>
                            <span class="price mb-25">$188.00</span>
                            <p>Our Cap is designed elevate your business operations with cutting-edge technology and user-centric features. Crafted with precision, it offers seamless integration with existing systems, ensuring a smooth transition and immediate impact has been meticulously</p>
                            <hr class="mt-40">
                            <form action="#" class="add-to-cart pt-15 pb-30">
                               <h6>Quantity</h6>
                                <input type="number" value="01" min="1" max="20" onchange="if(parseInt(this.value,10)<10)this.value='0'+this.value;" required>
                                <button type="submit" class="theme-btn style-two bgc-secondary">
                                    <span data-hover="Add to Cart">Add to Cart</span>
                                    <i class="far fa-arrow-right"></i>
                                </button>
                            </form>
                            <hr class="mb-45">
                            <a href="#" class="wishlist"><i class="far fa-heart"></i> Add to Wishlist</a>
                            <ul class="category-tags mt-15">
                                <li>
                                    <b>SKU: </b>
                                    <span>TXYZ-12350</span>
                                </li>
                                <li>
                                    <b>Category: </b>
                                    <a href="#">Simple Products</a>
                                </li>
                                <li>
                                    <b>Tags: </b>
                                   <div class="tags">
                                        <a href="#">Cap</a>
                                        <a href="#">Sports</a>
                                        <a href="#">Travel</a>
                                   </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="nav nav product-tab mt-70 mb-30" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                    <li><a href="#details" data-bs-toggle="tab" class="active show">Descrptions <i class="far fa-arrow-right"></i></a></li>
                    <li><a href="#information" data-bs-toggle="tab">Additional Information's <i class="far fa-arrow-right"></i></a></li>
                    <li><a href="#reviews" data-bs-toggle="tab"> Reviews <i class="far fa-arrow-right"></i></a></li>
                </ul>
                <div class="tab-content" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                    <div class="tab-pane fade active show" id="details">
                        <p>Cap combines innovation and functionality to meet the demands of modern businesses. Engineered with the latest technology, it offers robust features that streamline processes, enhance efficiency, and deliver measurable results. Whether you're looking to boost productivity, improve customer experiences, or gain deeper insights into your operations, [Product Name] is designed to provide the solutions you need. With user-friendly interfaces and customizable options, it adapts to your unique requirements, making it an essential tool for achieving your business goals. Discover the power of [Product Name] and transform the way you work.</p>
                        <p>Our is designed to elevate your business operations with cutting-edge technology and user-centric features. Crafted with precision, it offers seamless integration with your existing systems, ensuring a smooth transition and immediate impact. Each aspect of [Product Name] has been meticulously developed to address your specific needs, from enhancing productivity to optimizing workflows. With a focus on reliability and performance, this product delivers consistent results that drive your business forward.</p>
                        <div class="row gap-50 pt-25 pb-20 align-items-center">
                            <div class="col-lg-7 pt-15">
                                <h5>Benefit For buy our product</h5>
                                <p>Whether you're looking to boost productivity, improve customer experiences, or gain deeper insights into your operations, [Product Name] is designed to provide the solutions you need. With user-friendly interfaces and customizable options, it adapts to your unique requirements</p>
                                <ul class="list-style-two mt-25">
                                    <li>Assisting customers in booking domestic and international flights.</li>
                                    <li>Organizing adventure activities such as trekking, diving, safaris, or extreme sports.</li>
                                    <li>Tailoring travel plans to meet the specific needs and preferences of the customer.</li>
                                </ul>
                            </div>
                            <div class="col-lg-5">
                                <div class="image rmt-45">
                                    <img src="assets/images/shop/product-details.jpg" alt="Product Details">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="information">
                        <p>Circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses</p>
                        <ul class="list-style-two my-35">
                            <li>Providing professional guides for city tours, cultural experiences, adventure activities, etc.</li>
                            <li>Arranging local transportation such as car rentals, airport transfers, or bus tours.</li>
                            <li>Helping customers navigate the visa application process for international travel.</li>
                            <li>Understand the demand in your area, competition, and potential customers.</li>
                            <li>Register your business, obtain necessary licenses, and ensure compliance with local regulations.</li>
                            <li>Build relationships with hotels, airlines, transport companies, and other service providers.</li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur quasi, atque! Repellat nihil vero ipsam, ipsa tempore sint deleniti amet inventore tenetur iure, quia eum. Facere nostrum veritatis nesciunt laudantium.</p>
                    </div>
                    <div class="tab-pane fade mb-20" id="reviews">
                        <h5>2 Reviews</h5>
                        <div class="comments my-30">
                            <div class="comment-body" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <div class="author-thumb">
                                    <img src="assets/images/blog/comment-author1.jpg" alt="Author">
                                </div>
                                <div class="content">
                                    <h6>Lonnie B. Horwitz</h6>
                                    <div class="ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                    <span class="time">Venice, Rome and Milan – 9 Days 8 Nights</span>
                                    <p>Tours and travels play a crucial role in enriching lives by offering unique experiences, cultural exchanges, and the joy of exploration.</p>
                                    <a class="read-more" href="#">Reply <i class="far fa-angle-right"></i></a>
                                </div>
                            </div>
                            <div class="comment-body" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <div class="author-thumb">
                                    <img src="assets/images/blog/comment-author3.jpg" alt="Author">
                                </div>
                                <div class="content">
                                    <h6>Jaime B. Wilson</h6>
                                    <div class="ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                    <span class="time">Venice, Rome and Milan – 9 Days 8 Nights</span>
                                    <p>Tours and travels play a crucial role in enriching lives by offering unique experiences, cultural exchanges, and the joy of exploration.</p>
                                    <a class="read-more" href="#">Reply <i class="far fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        
                        <h5>Add A Reviews</h5>
                        <form id="comment-form" class="comment-form bgc-lighter z-1 rel mt-30" name="review-form" action="#" method="post" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <div class="row gap-20">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" id="full-name" name="full-name" class="form-control" placeholder="Name" value="" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" id="email-address" name="email" class="form-control" placeholder="Email" value="" required="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" class="form-control" rows="5" placeholder="Comments" required=""></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-0">
                                        <button type="submit" class="theme-btn bgc-secondary style-two">
                                            <span data-hover="Submit reviews">Submit review</span>
                                            <i class="fal fa-arrow-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Product Details End -->
        
        
        <!-- Shop Details  Area start -->
        <section class="shop-details-page pt-80 pb-100 rel z-1">
            <div class="container">
                <div class="section-title text-center mb-40">
                    <h2>Related Product</h2>
                </div>
                <div class="product-slider">
                    <div class="product-item" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="image">
                            <img src="assets/images/shop/product1.png" alt="Product">
                        </div>
                        <div class="content">
                            <div class="ratting">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <h6><a href="product-details.php">Airport Travel Suitcases</a></h6>
                            <span class="price">$188.00</span>
                        </div>
                    </div>
                    <div class="product-item" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="50">
                        <div class="image">
                            <img src="assets/images/shop/product2.png" alt="Product">
                        </div>
                        <div class="content">
                            <div class="ratting">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <h6><a href="product-details.php">Travel Great blue hat</a></h6>
                            <span class="price">$188.00</span>
                        </div>
                    </div>
                    <div class="product-item" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="100">
                        <div class="image">
                            <img src="assets/images/shop/product3.png" alt="Product">
                        </div>
                        <div class="content">
                            <div class="ratting">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <h6><a href="product-details.php">Waistband and Mesh Fashion</a></h6>
                            <span class="price">$188.00</span>
                        </div>
                    </div>
                    <div class="product-item" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="150">
                        <div class="image">
                            <img src="assets/images/shop/product4.png" alt="Product">
                        </div>
                        <div class="content">
                            <div class="ratting">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <h6><a href="product-details.php">Sandals for Casual Techies</a></h6>
                            <span class="price">$188.00</span>
                        </div>
                    </div>
                    <div class="product-item" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="image">
                            <img src="assets/images/shop/product5.png" alt="Product">
                        </div>
                        <div class="content">
                            <div class="ratting">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <h6><a href="product-details.php">Children With Jute Soles</a></h6>
                            <span class="price">$188.00</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Shop Details  Area end -->
        
@endsection