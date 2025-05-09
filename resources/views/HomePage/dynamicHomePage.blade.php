@extends('layouts.webSite')
@section('content')
    <!-- about-section -->
    <!-- Hero Area Start -->
    <section class="hero-area bgc-black pt-130 rpt-120 rel z-2">
        <!-- <img src="./assets/images/aisbanner1.jpg" alt="banner-image"> -->
        <div class="swiper main-slider">
            <div class="swiper-wrapper">
                @if (isset($sliders) && count($sliders) > 0)
                    @foreach ($sliders as $slide)
                        <div class="swiper-slide swiper-slide-next">
                            <img class="img-fluid" width="" height="" alt="Image"
                                src="{{ asset($slide->image) }}" />
                        </div>
                    @endforeach
                @else
                    <div class="swiper-slide swiper-slide-next">
                        <img class="img-fluid" width="" height="" alt="Image"
                            src="./assets/images/banner_hom5.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img class="img-fluid" width="" height="" alt="Image"
                            src="./assets/images/banner_hom2.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img class="img-fluid" width="" height="" alt="Image"
                            src="./assets/images/banner_hom3.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img class="img-fluid" width="" height="" alt="Image"
                            src="./assets/images/banner_hom4.jpg" />
                    </div>
                @endif
            </div>
        </div>
        <div class="container-fluid">
            <!-- <h1 class="hero-title" data-aos="flip-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">tour & -->
            <!-- Travel</h1> -->
            <!-- <div class="main-hero-image bgs-cover"> -->

            <!-- </div> -->
        </div>
        <div class="container container-1400">
            {{-- <div class="search-filter-inner" data-aos="zoom-out-down" data-aos-duration="1500" data-aos-offset="50">
                <div class="filter-item clearfix">
                    <div class="icon"><i class="fal fa-map-marker-alt"></i></div>
                    <span class="title">Destinations</span>
                    <select name="city" id="city">
                        <option value="value1">City or Region</option>
                        @foreach ($destinations as $destination)
                            <option value="{{ $destination }}">{{ $destination }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="filter-item clearfix">
                    <div class="icon"><i class="fal fa-flag"></i></div>
                    <span class="title">All Categories</span>
                    <select name="activity" id="activity">
                        <option value="value1">Travel Category</option>
                        @foreach ($travelCategories as $category)
                            <option value="{{ $category }}">{{ $category }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="filter-item clearfix" style="position: relative;">
                    <div class="icon"><i class="fal fa-calendar-alt"></i></div>
                    <span class="title" id="calendarTrigger" style="cursor: pointer;">Departure Date</span>
                    <div id="calendar"
                        style="display: none; position: absolute; top: 30px; left: 0; background: #fff; border: 1px solid #ccc; border-radius: 5px; padding: 10px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);">
                    </div>
                    <p id="selectedDate" style="margin-top: 10px; font-size: 14px; color: #555;"></p>
                </div>
                <div class="search-button">
                    <button class="theme-btn">
                        <span data-hover="Search">Search</span>
                    </button>
                </div>
            </div> --}}
            {{-- <div class="search-filter-inner" data-aos="zoom-out-down" data-aos-duration="1500" data-aos-offset="50">
                <form action="{{ route('filterPackages') }}" method="POST" style="display: contents;">
                    <div class="filter-item clearfix">
                        <div class="icon"><i class="fal fa-map-marker-alt"></i></div>
                        <span class="title">Destinations</span>
                        <select name="city" id="city">
                            <option value="">City or Region</option>
                            @foreach ($destinations as $destination)
                                <option value="{{ $destination }}">{{ $destination }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="filter-item clearfix">
                        <div class="icon"><i class="fal fa-flag"></i></div>
                        <span class="title">All Categories</span>
                        <select name="activity" id="activity">
                            <option value="">Travel Category</option>
                            @foreach ($travelCategories as $category)
                                <option value="{{ $category }}">{{ $category }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="filter-item clearfix" style="position: relative;">
                        <div class="icon"><i class="fal fa-calendar-alt"></i></div>
                        <span class="title" id="calendarTrigger" style="cursor: pointer;">Departure Date</span>
                        <input type="date" name="departure_date" id="departure_date"
                            style="display: none; position: absolute; top: 30px; left: 0; background: #fff; border: 1px solid #ccc; border-radius: 5px; padding: 10px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);">
                        <p id="selectedDate" style="margin-top: 10px; font-size: 14px; color: #555;"></p>
                    </div>
                    <div class="search-button">
                        <button type="submit" class="theme-btn">
                            <span data-hover="Search">Search</span>
                        </button>
                    </div>
                </form>
            </div>             --}}
            <div class="search-filter-inner mb-9" data-aos="zoom-out-down" data-aos-duration="1500" data-aos-offset="50">
                {{-- <form action="{{ route('filterPackages') }}" method="POST" style="display: contents;">
                    @csrf

                    <!-- Name Field -->
                    <div class="filter-item clearfix mb-3" style="position: relative;">
                        <div class="icon"><i class="fal fa-user"></i></div>
                        <span class="title">Your Name</span>
                        <input type="text" name="name" id="name"
                            style="display: block; width: 100%;height:40px; margin-top: 8px; background: #fff; border: 1px solid #ccc; border-radius: 5px; padding: 10px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
                    </div>

                    <!-- City Dropdown -->
                    <div class="filter-item clearfix mb-3">
                        <div class="icon"><i class="fal fa-map-marker-alt"></i></div>
                        <span class="title">Destinations</span>
                        <select name="city" id="city"
                            style="display: block; width: 100%; height: 45px;margin-top:10px; background: #fff; border: 1px solid #ccc; border-radius: 5px; padding: 0 12px; font-size: 15px; appearance: none; -webkit-appearance: none; -moz-appearance: none;">
                            <option value="">City or Region</option>
                            @foreach ($destinations as $destination)
                                <option value="{{ $destination }}" {{ request('city') == $destination ? 'selected' : '' }}>
                                    {{ $destination }}
                                </option>
                            @endforeach
                        </select>
                    </div>


                    <!-- Mobile Number -->
                    <div class="filter-item clearfix mb-3" style="position: relative;">
                        <div class="icon"><i class="fal fa-phone-alt"></i></div>
                        <span class="title">Mobile Number</span>
                        <input type="text" name="mobile_no" id="mobile_no"
                            style="display: block; width: 100%; margin-top: 8px;height:40px; background: #fff; border: 1px solid #ccc; border-radius: 5px; padding: 10px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
                    </div>

                    <!-- Departure Date -->
                    <div class="filter-item clearfix mb-3" style="position: relative;">
                        <div class="icon"><i class="fal fa-calendar-alt"></i></div>
                        <span class="title">Departure Date</span>
                        <input type="date" name="departure_date" id="departure_date"
                            style="display: block; width: 100%; margin-top: 8px;height:40px; background: #fff; border: 1px solid #ccc; border-radius: 5px; padding: 10px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
                    </div>

                    <!-- Submit Button -->
                    <div class="search-button">
                        <button type="submit" class="theme-btn">
                            <span data-hover="Submit">Submit</span>
                        </button>
                    </div>
                </form> --}}

                {{-- new correction start 5/07 --}}
                {{-- @if (session('success'))
                <script>
                    alert("{{ session('success') }}");
                </script>
            @endif

            @if (session('error'))
                <script>
                    alert("{{ session('error') }}");
                </script>
            @endif --}}
                <form method="POST" style="display: contents;" id="bookingEnquiryForm">
                    @csrf

                    <style>
                        .input-wrapper {
                            position: relative;
                            display: flex;
                            align-items: center;
                            width: 100%;
                            margin-bottom: 1rem;
                        }

                        .input-wrapper i {
                            position: absolute;
                            left: 12px;
                            color: #888;
                            font-size: 16px;
                        }

                        .input-wrapper input,
                        .input-wrapper select {
                            width: 90%;
                            height: 45px;
                            padding: 10px 12px 10px 36px;
                            border: 1px solid #ccc;
                            border-radius: 5px;
                            background: #fff;
                            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                            font-size: 15px;
                        }

                        .search-button {
                            display: flex;
                            align-items: center;
                            margin-left: 15px;
                        }

                        .theme-btn {
                            background-color: #7BBE47;
                            color: #fff;
                            padding: 10px 20px;
                            border: none;
                            border-radius: 25px;
                            font-weight: bold;
                            cursor: pointer;

                        }

                        .theme-btn:hover {
                            background-color: #68a53e;
                        }

                        .nice-select {
                            width: 100%;
                            height: 46px !important;
                            border-radius: 5px;
                            font-weight: 400;
                            border-radius: 5px !important;
                            font-size: 16px;
                            padding: 3px 30px !important;
                            /* background-color: grey; */
                            border: 1px solid #d3cece !important;
                            font-family: var(--heading-font);
                            -webkit-transition: 0.3s;
                            -o-transition: 0.3s;
                            transition: 0.3s;

                        }

                        /* Small devices (phones, less than 600px) */
                        @media screen and (max-width: 599px) {
                            .nice-select {
                                width: 92% !important;
                            }
                        }

                        /* Medium devices (tablets, 600px to 991px) */
                        @media screen and (min-width: 600px) and (max-width: 991px) {
                            .nice-select {

                                width: 91% !important;
                            }
                        }

                        /* Large devices (desktops, 992px and up) */
                        @media screen and (min-width: 992px) {
                            .nice-select {
                                width: 91% !important;
                            }
                        }
                    </style>

                    <style>
                        .input-wrapper {
                            position: relative;
                            display: flex;
                            align-items: center;
                            width: 100%;
                            margin-bottom: 1rem;
                        }

                        .input-wrapper i {
                            position: absolute;
                            left: 12px;
                            color: #888;
                            font-size: 16px;
                            z-index: 1;
                        }

                        .input-wrapper select {
                            width: 100%;
                            height: 45px;
                            padding: 0 12px 0 36px;
                            border: 1px solid #ccc;
                            border-radius: 10px;
                            background: #fff;
                            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                            font-size: 16px;
                            line-height: 45px;
                            text-align: center;
                            text-align-last: center;
                            /* for Firefox */
                            color: #333;
                            appearance: none;
                            -webkit-appearance: none;
                            -moz-appearance: none;
                        }
                    </style>




                    <!-- Name Field -->
                    <div class="input-wrapper">
                        <i class="fal fa-user"></i>
                        <input type="text" name="name" id="name" placeholder="Your Name">
                    </div>

                    <!-- City Dropdown -->
                    {{-- <div class="input-wrapper">
                        <i class="fal fa-map-marker-alt"></i>
                        <select name="city" id="city">
                            <option value=""  >City or Region</option>
                            @foreach ($destinations as $destination)
                                <option value="{{ $destination }}" {{ request('city') == $destination ? 'selected' : '' }}>
                                    {{ $destination }}
                                </option>
                            @endforeach
                        </select>
                    </div> --}}

                    <div class="input-wrapper" style="padding-right: 5px">
                        <i class="fal fa-map-marker-alt"></i>
                        <select name="destination" id="city">
                            <option value="">Destinations</option>
                            @foreach ($destinations as $destination)
                                <option value="{{ $destination }}"
                                    {{ request('destination') == $destination ? 'selected' : '' }}>
                                    {{ $destination }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Mobile Number -->
                    <div class="input-wrapper">
                        <i class="fal fa-phone-alt"></i>
                        <input type="text" name="phone" id="mobile_no" placeholder="Mobile Number">
                    </div>

                    <!-- Departure Date -->
                    <div class="input-wrapper">
                        <i class="fal fa-calendar-alt"></i>
                        <input type="date" name="destination_date" id="departure_date" placeholder="=travel Date">
                    </div>

                    <!-- Submit Button -->
                    <div class="search-button">
                        <button type="submit" class="theme-btn style-two bgc-secondary">
                            <span data-hover="Submit">Submit</span>

                        </button>
                         {{-- <a href="contact.php" class="theme-btn style-two bgc-secondary">
                                <span data-hover="Book Now">Book Now</span>
                                <i class="fal fa-arrow-right"></i>
                            </a> --}}
                    </div>
                </form>

                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script>
                    document.getElementById('bookingEnquiryForm').addEventListener('submit', function(e) {
                        e.preventDefault();
                        const form = e.target;
                        const formData = new FormData(form);

                        fetch("{{ route('bookingEnquiry') }}", {
                                method: "POST",
                                headers: {
                                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                    'Accept': 'application/json'
                                },
                                body: formData
                            })
                            .then(async res => {
                                const json = await res.json();
                                if (json.status) {
                                    Swal.fire('Success', json.message, 'success');
                                    form.reset();
                                } else {
                                    Swal.fire('Error', json.message, 'error');
                                }
                            })
                            .catch(err => {
                                Swal.fire('Error', 'Unexpected error occurred.', 'error');
                                console.error(err);
                            });
                    });
                </script>



                {{-- new correction end here  --}}
            </div>

        </div>
    </section>
    <!-- Hero Area End -->

    <!-- Popular Packages Area start -->
    <section class="destinations-area bgc-black pt-100 pb-70 rel z-1">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section-title text-white text-center counter-text-wrap mb-70" data-aos="fade-up"
                        data-aos-duration="1500" data-aos-offset="50">
                        <!-- <h2>Discover the World's Treasures with FLYTRP Holidays</h2> -->
                        <h2 class="popular-destination mt-5" data-aos="fade-up">Explore Popular Packages</h2>
                        <p>One site many popular experience you’ll remember</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="swiper packages mt-4">
                    <div class="swiper-wrapper">
                        @if (isset($packages) && count($packages) > 0)
                            @foreach ($packages as $item)
                                @php
                                    // Ensure package_image is a valid JSON string before decoding
                                    $images = is_string($item->package_image)
                                        ? json_decode($item->package_image, true)
                                        : $item->package_image;

                                    // Check if images is a valid array and get the first image
                                    $displayImage = is_array($images) && !empty($images) ? $images[0] : null;
                                @endphp
                                <div class="col-xxl-3 col-xl-4 col-md-6 swiper-slide">
                                    <a href="{{ route('packageDetailpage', ['slug' => $item->slug]) }}">
                                        <div class="destination-item" data-aos="fade-up" data-aos-duration="1500"
                                            data-aos-offset="50">
                                            <div class="image">
                                                @if ($displayImage)
                                                    {{-- <figure class="images"> --}}
                                                    <img src="{{ asset('storage/' . $displayImage) }}"
                                                        alt="{{ $item->package_name }}" class="gallery-image">
                                                    {{-- </figure> --}}
                                                @else
                                                    {{-- <figure class="images"> --}}
                                                    <img src="{{ asset('path/to/default/image.jpg') }}"
                                                        alt="Default Image">
                                                    {{-- </figure> --}}
                                                @endif

                                                {{-- <div class="ratting">{{ $item->package_type }}</div> --}}
                                            </div>
                                            <div class="content tourpackage">
                                                <span class="location">
                                                    <i class="fal fa-map-marker-alt"></i> {{ $item->package_country }}
                                                </span>
                                                <h5 class="card-heading">
                                                    {!! $item->package_name !!}
                                                </h5>
                                                <span class="time">
                                                    {!! $item->package_duration_days !!} Days / {!! $item->package_duration_nights !!} Nights
                                                </span>
                                            </div>
                                            <div class="destination-footer price">
                                                <span class="offer-price">
                                                    <i class="fa-solid fa-indian-rupee-sign"></i>
                                                    {!! IND_money_format($item->package_offer_price) !!}
                                                </span>
                                                <span class="sale-price">
                                                    <i class="fa-solid fa-indian-rupee-sign"></i>
                                                    {!! IND_money_format($item->package_price) !!}
                                                </span>
                                                <span class="offer-amount">
                                                    Save <i class="fa-solid fa-indian-rupee-sign"></i>
                                                    {{ IND_money_format($item->package_price - $item->package_offer_price) }}
                                                </span>

                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        @else
                            <p>NO Data Available</p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="view-more-buttons" style="display:block; text-align:center;">
                <a class="service-view-buttons" style="color:white;" href="{{ route('packagePage') }}"><button
                        type="submit" class="theme-btn style-two text-center col-4 ">
                        <span data-hover="Send Comments">Explore More</span>
                        <i class="fal fa-arrow-right"></i></a>
                </button>
            </div>
        </div>
    </section>
    <!-- Popular Packages Area end -->

    @if ($offerPackage->isNotEmpty())
    <section class="promo-banner-section">
        <!-- Background shapes -->
        <div class="promo-shapes">
            <div class="promo-shape promo-shape-1"></div>
            <div class="promo-shape promo-shape-2"></div>
            <div class="promo-shape promo-shape-3"></div>
        </div>
        <div class="container promo-container">


            @php $first = true; @endphp
            <div class="row">
                @foreach ($offerPackage as $index => $item)
                    @php
                        $package = $item->package;
                        $original = $package->package_price;
                        $offer = $package->package_offer_price;
                        $discount = $original > 0 ? round((($original - $offer) / $original) * 100) : 0;
                        $desc = Str::limit(strip_tags($package->description), 200);
                    @endphp

                    @if ($first)
                        {{-- First full-width primary banner --}}
                        <div class="col-lg-12">
                            <div class="promo-banner-primary animate__animated animate__fadeIn">
                                <div class="promo-decoration promo-decoration-1"></div>
                                <div class="promo-decoration promo-decoration-2"></div>
                                <div class="promo-decoration promo-decoration-3"></div>

                                <div class="promo-banner-content">
                                    <span class="promo-subtitle animate__animated animate__fadeInUp animate__delay-1s">
                                        {{ $item->category_name }}
                                    </span>
                                    <h2 class="promo-title animate__animated animate__fadeInUp animate__delay-1s">
                                        {{ $package->package_name }}
                                    </h2>
                                    <p class="promo-description animate__animated animate__fadeInUp animate__delay-2s">
                                        {{ $desc }}
                                    </p>
                                    {{-- <button class="promo-btn animate__animated animate__fadeInUp animate__delay-3s">
                                        Book Now <i class="fas fa-arrow-right"></i>
                                    </button> --}}
                                    <a href="{{ route('packageDetailpage', ['slug' => $package->slug]) }}" class="promo-btn animate__animated animate__fadeInUp animate__delay-3s">
                                        Book Now <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>

                                <div class="promo-discount-badge">
                                    <span class="promo-discount-text">{{ $discount }}%</span>
                                    <span class="promo-discount-label">OFF</span>
                                </div>
                            </div>
                        </div>
                        @php $first = false; @endphp
                    @else
                        {{-- Secondary banners (2-column split) --}}
                        <div class="col-md-6 mb-4 mb-md-0">
                            <div
                                class="promo-banner-secondary animate__animated animate__fadeInLeft animate__delay-3s">
                                <div class="promo-banner-content">
                                    <span class="promo-subtitle">{{ $item->category_name }}</span>
                                    <h3 class="promo-title">{{ $package->package_name }}</h3>
                                    <p class="promo-description">{{ $desc }}</p>
                                    {{-- <button class="promo-btn">
                                        Book Now <i class="fas fa-arrow-right"></i>
                                    </button> --}}
                                    <a href="{{ route('packageDetailpage', ['slug' => $package->slug]) }}" class="promo-btn animate__animated animate__fadeInUp animate__delay-3s">
                                        Book Now <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                                <div class="promo-discount-badge">
                                    <span class="promo-discount-text">{{ $discount }}%</span>
                                    <span class="promo-discount-label">OFF</span>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

        </div>
    </section>
@endif
    <!-- About Us Area start -->
    <section class="about-us-area py-100 rpb-90 rel z-1">
        <div class="container">
            <div class="row align-items-center">
                <h2 class="text-center mb-4">About Us </h2>
                <div class="col-xl-5 col-lg-6">
                    <div class="about-us-content rmb-55" data-aos="fade-left" data-aos-duration="1500"
                        data-aos-offset="50">
                        <div class="section-title mb-25">
                            <h2>{!! $home_aboutus_content_heading ?? 'Travel with Confidence Top Reasons to Choose FLYTRP Holidays' !!}</h2>
                        </div>
                        <p>{!! $home_aboutus_content_subheading ??
                            'We go above and beyond to make your travel dreams reality hidden gems and must-see attractions' !!}
                        </p>
                        <div class="divider counter-text-wrap mt-45 mb-55"><span>We have <span><span
                                        class="count-text plus" data-speed="3000"
                                        data-stop="{{ strip_tags($years_of_experience ?? '15') }}"></span> Years</span> of
                                experience</span></div>
                        <div class="row">
                            <div class="col-6">
                                <div class="counter-item counter-text-wrap">
                                    <span class="count-text k-plus" data-speed="3000"
                                        data-stop="{!! $home_aboutus_content_popular_destination_no ?? '3' !!}">0</span>
                                    <span class="counter-title">Popular Destination</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="counter-item counter-text-wrap">
                                    <span class="count-text m-plus" data-speed="3000"
                                        data-stop="{!! $home_aboutus_content_satisfied_clients_no ?? '9' !!}">0</span>
                                    <span class="counter-title">Satisfied Clients</span>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('destinationpage') }}" class="theme-btn mt-10 style-two">
                            <span data-hover="Explore Destinations">Explore Destinations</span>
                            <i class="fal fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                    <div class="about-us-image">
                        <div class="shape"><img src="assets/images/about/shape1.png" alt="Shape"></div>
                        <div class="shape"><img src="assets/images/about/shape2.png" alt="Shape"></div>
                        <div class="shape"><img src="assets/images/about/shape3.png" alt="Shape"></div>
                        <div class="shape"><img src="assets/images/about/shape4.png" alt="Shape"></div>
                        <div class="shape"><img src="assets/images/about/shape5.png" alt="Shape"></div>
                        <div class="shape"><img src="assets/images/about/shape6.png" alt="Shape"></div>
                        <div class="shape"><img src="assets/images/about/shape7.png" alt="Shape"></div>
                        <img src="{{ asset($home_aboutus_content_image ?? '/gir_suit_final.png') }}"
                            alt="About">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Area end -->

    <!-- Destinations Area start -->
    <section class="destinations-area bgc-black pt-100 pb-70 rel z-1">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section-title text-white text-center counter-text-wrap mb-70" data-aos="fade-up"
                        data-aos-duration="1500" data-aos-offset="50">
                        <!-- <h2>Discover the World's Treasures with FLYTRP Holidays</h2> -->
                        <h2 class="popular-destination" data-aos="fade-up"> Popular Destinations</h2>
                        <p>One site many popular experience you’ll remember</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="swiper packages mt-4">
                    <div class="swiper-wrapper">
                        @if (isset($homedestinations) && count($homedestinations) > 0)
                            @foreach ($homedestinations as $item)
                                <div class="col-xxl-3 col-xl-4 col-md-6 swiper-slide">
                                    <a
                                        href="{{ route('destinationDetailpage', ['destination_slug' => $item->destination_slug]) }}">
                                        <div class="destination-item" data-aos="fade-up" data-aos-duration="1500"
                                            data-aos-offset="50">
                                            <div class="image">
                                                @php
                                                    // Ensure package_image is a valid JSON string before decoding
                                                    $images = is_string($item->destination_image)
                                                        ? json_decode($item->destination_image, true)
                                                        : $item->destination_image;

                                                    // Check if images is a valid array and get the first image
                                                    $displayImage =
                                                        is_array($images) && !empty($images) ? $images[0] : null;
                                                @endphp

                                                @if ($displayImage)
                                                    <img src="{{ asset('storage/' . $displayImage) }}"
                                                        alt="{{ $item->destination_name }}" class="hotel-image"
                                                        style="margin-right: 10px;">
                                                @else
                                                    <img src="{{ asset('path/to/default/image.jpg') }}"
                                                        alt="Default Image" class="hotel-image">
                                                @endif
                                            </div>
                                            <div class="content">
                                                {{-- <span class="location">
                                                    {{ $item->package_type }}
                                                </span> --}}
                                                <h5 class="card-heading">
                                                    {{ $item->destination_name }}
                                                </h5>
                                                {{-- <span class="time">
                                                    {!! $item->package_duration_days !!} Days / {!! $item->package_duration_nights !!} Nights
                                                </span> --}}
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        @else
                            <div class="col-xxl-3 col-xl-4 col-md-6">
                                <div class="destination-item" data-aos="fade-up" data-aos-duration="1500"
                                    data-aos-offset="50">
                                    <div class="image">
                                        <img src="./assets/images/destination1.jpg" alt="Destination">
                                    </div>
                                    <div class="content">
                                        <span class="location"><i class="fal fa-map-marker-alt"></i> Tours, France</span>
                                        <h5><a href="{{ route('destinationpage') }}">Brown Concrete Building Basilica St
                                                Martin</a>
                                        </h5>
                                        <span class="time">3 days 2 nights</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-md-6">
                                <div class="destination-item" data-aos="fade-up" data-aos-delay="100"
                                    data-aos-duration="1500" data-aos-offset="50">
                                    <div class="image">
                                        <img src="./assets/images/destination2.jpg" alt="Destination">
                                    </div>
                                    <div class="content">
                                        <span class="location"><i class="fal fa-map-marker-alt"></i> Wildest, Italy</span>
                                        <h5><a href="{{ route('destinationpage') }}">Blue lake water view taken travel
                                                with
                                                daytime</a>
                                        </h5>
                                        <span class="time">3 days 2 night</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-md-6">
                                <div class="destination-item" data-aos="fade-up" data-aos-delay="200"
                                    data-aos-duration="1500" data-aos-offset="50">
                                    <div class="image">
                                        <img src="./assets/images/destination4.jpg" alt="Destination">
                                    </div>
                                    <div class="content">
                                        <span class="location"><i class="fal fa-map-marker-alt"></i> Rome, Italy</span>
                                        <h5><a href="{{ route('destinationpage') }}">Woman standing near Colosseum,
                                                Rome</a></h5>
                                        <span class="time">3 days 2 nights</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-md-6">
                                <div class="destination-item" data-aos="fade-up" data-aos-delay="300"
                                    data-aos-duration="1500" data-aos-offset="50">
                                    <div class="image">
                                        <img src="./assets/images/destination3.jpg" alt="Destination">
                                    </div>
                                    <div class="content">
                                        <span class="location"><i class="fal fa-map-marker-alt"></i> Rome, Italy</span>
                                        <h5><a href="{{ route('destinationpage') }}">Woman standing near Colosseum,
                                                Rome</a></h5>
                                        <span class="time">3 days 2 nights</span>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="view-more-buttons" style="display:block; text-align:center;">
                <a class="service-view-buttons" style="color:white;" href="{{ route('destinationpage') }}"><button
                        type="submit" class="theme-btn style-two text-center col-4 ">
                        <span data-hover="Send Comments">Explore More</span>
                        <i class="fal fa-arrow-right"></i></a>
                </button>
            </div>
        </div>
    </section>
    <!-- Destinations Area end -->


    <!-- Features Area start -->
    <section class="features-area pt-100 pb-45 rel z-1">
        <div class="container">
            <div class="row align-items-center">
                <h2 class="service text-center">Other Services</h2>
                <div class="col-xl-6">
                    <div class="features-content-part mb-55" data-aos="fade-left" data-aos-duration="1500"
                        data-aos-offset="50">
                        <div class="section-title mb-60">
                            <h2>{!! $home_other_services_content_heading ?? 'The Ultimate Travel Experience Features That Set Our Agency Apart' !!}</h2>
                        </div>
                        <div class="features-customer-box">
                            <div class="image">
                                <img src="{{ asset($home_other_services_image ?? './assets/images/features-box.jpg') }}"
                                    alt="Features">
                            </div>
                            <div class="content">
                                <h6>{!! $home_other_services_happy_customer_no ?? '850K+ Happy Customer' !!}</h6>
                                <div class="divider style-two counter-text-wrap my-25"><span><span class="count-text plus"
                                            data-speed="3000" data-stop="{{ strip_tags($years_of_experience ?? '15') }}"></span> Years</span>
                                </div>
                                <p>{!! $home_other_services_content_subheading ?? 'We pride ourselves offering personalized itineraries' !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                    <div class="row pb-25">
                        <div class="col-md-6">
                            <div class="feature-item">
                                <div class="icon"><i class="fa-solid fa-umbrella-beach fs-1 text-primary"></i></div>
                                <div class="content">
                                    <h5><a href="{{ route('packagePage') }}">Holidays</a></h5>
                                    <p>{!! $home_other_services_holidays_content ??
                                        'We are Casting Moments & Creating Memories lifelong Your ideal leaves are staying for
                                                                                                                                                    you.' !!}</p>
                                </div>
                            </div>
                            <div class="feature-item">
                                <div class="icon"><i class="fa-regular fa-calendar-check fs-1 text-primary"></i></div>
                                <div class="content">
                                    <h5><a href="{{ route('packagePage') }}">Event</a></h5>
                                    <p>{!! $home_other_services_event_content ?? 'Moments, Perfecting Every Detail Events Which is Beyond Imagination.' !!}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-item mt-20">
                                <div class="icon"><i class="fa-solid fa-hand-holding-hand fs-1 text-primary"></i></div>
                                <div class="content">
                                    <h5><a href="{{ route('packagePage') }}">Weddings</a></h5>
                                    <p>{!! $home_other_services_weddings_content ??
                                        'Love in Every Detail Creating Your Perfect Day, Your Dream marriage, Our violent
                                                                                                                                                    Hand.' !!}</p>
                                </div>
                            </div>
                            <div class="feature-item">
                                <div class="icon"><i class="fa-solid fa-headset fs-1 text-primary"></i></div>
                                <div class="content">
                                    <h5><a href="{{ route('packagePage') }}">Friendly Support</a></h5>
                                    <p>{!! $home_other_services_friendly_support_content ??
                                        'Trip Support Beyond Boundaries Leading Your peregrination, trip Support Beyond
                                                                                                                                                    Boundaries.' !!}</p>
                                </div>
                            </div>
                        </div>
                        <div class="view-more-button">
                            <a class="service-view-buttons" style="color:white;"
                                href="{{ route('servicePages') }}"><button type="submit"
                                    class="theme-btn style-two text-center col-4 ">
                                    <span data-hover="Send Comments">View More</span>
                                    <i class="fal fa-arrow-right"></i></a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="client-logo-area mb-100">
        <div class="container">
            <div class="client-logo-wrap pt-60 pb-55">
                <div class="text-center mb-40" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">
                    <h4 class="style" style="color:#022f5d;">Who Believe in Us</h4>
                </div>
                <div class="client-logo-active">
                    @if (isset($home_recognitions) && count($home_recognitions) > 0)
                        @foreach ($home_recognitions as $item)
                            <div class="client-logo-item" data-aos="flip-up" data-aos-duration="1500"
                                data-aos-offset="50">
                                <a href="#"><img src="{{ asset($item->image) }}" alt="Client Logo"></a>
                            </div>
                        @endforeach
                    @else
                        <div class="client-logo-item" data-aos="flip-up" data-aos-duration="1500" data-aos-offset="50">
                            <a href="#"><img src="assets/images/mytrip.png" alt="Client Logo"></a>
                        </div>
                        <div class="client-logo-item" data-aos="flip-up" data-aos-delay="50" data-aos-duration="1500"
                            data-aos-offset="50">
                            <a href="#"><img src="assets/images/goibibo.png" alt="Client Logo"></a>
                        </div>
                        <div class="client-logo-item" data-aos="flip-up" data-aos-delay="100" data-aos-duration="1500"
                            data-aos-offset="50">
                            <a href="#"><img src="assets/images/tripadv.png" alt="Client Logo"></a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Blog Area start -->
    <section class="blog-area py-70 rel z-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section-title text-center counter-text-wrap mb-70" data-aos="fade-up"
                        data-aos-duration="1500" data-aos-offset="50">
                        <h2>Read Latest News & Blog</h2>
                        <p>One site many popular experience you’ll remember</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @if (isset($blogs) && count($blogs) > 0)
                    @foreach ($blogs as $item)
                        <div class="col-xl-4 col-md-6">
                            <div class="blog-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <div class="image">
                                    <img src="{{ asset($item->image) }}" alt="{{ $item->title }}">
                                </div>
                                <div class="content">
                                    <a class="category">{{ $item->blog_category }}</a>
                                    <h5><a
                                            href="{{ route('blogDetailpage', ['slug' => $item->slug]) }}">{{ $item->title }}</a>
                                    </h5>
                                </div>

                                <a href="{{ route('blogDetailpage', ['slug' => $item->slug]) }}" class="theme-btn">
                                    <span data-hover="Book Now">Read More</span>
                                    <i class="fal fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-xl-4 col-md-6">
                        <div class="blog-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <img src="./assets/images/blog-1.jpg" alt="Blog">
                            </div>
                            <div class="content">
                                <a class="category">Travel</a>
                                <h5><a href="{{ route('blogpage') }}">Ultimate Guide to Planning Your Dream Vacation
                                        with Ravelo
                                        Travel Agency</a></h5>
                                <!-- <ul class="blog-meta">
                                                                <li><i class="far fa-calendar-alt"></i> <a href="#">25 February 2024</a></li>
                                                                <li><i class="far fa-comments"></i> <a href="#">Comments (5)</a></li>
                                                            </ul> -->
                            </div>

                            <a href="{{ route('blogpage') }}" class="theme-btn">
                                <span data-hover="Book Now">Read More</span>
                                <i class="fal fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="blog-item" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500"
                            data-aos-offset="50">
                            <div class="image">
                                <img src="./assets/images/blog-3.jpg" alt="Blog">
                            </div>
                            <div class="content">
                                <a class="category">Travel</a>
                                <h5><a>Unforgettable Adventures Travel Agency Bucket List
                                        Experiences</a></h5>
                                <!-- <ul class="blog-meta">
                                                                <li><i class="far fa-calendar-alt"></i> <a href="#">25 February 2024</a></li>
                                                                <li><i class="far fa-comments"></i> <a href="#">Comments (5)</a></li>
                                                            </ul> -->
                            </div>

                            <a href="{{ route('blogpage') }}" class="theme-btn">
                                <span data-hover="Book Now">Read More</span>
                                <i class="fal fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="blog-item" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500"
                            data-aos-offset="50">
                            <div class="image">
                                <img src="./assets/images/blog-3.jpg" alt="Blog">
                            </div>
                            <div class="content">
                                <a href="" class="category">Travel</a>
                                <h5><a>Exploring Culture and way Cuisine Travel Agency's they Best
                                        Foodie Destinations</a></h5>
                                <!-- <ul class="blog-meta">
                                                                <li><i class="far fa-calendar-alt"></i> <a href="#">25 February 2024</a></li>
                                                                <li><i class="far fa-comments"></i> <a href="#">Comments (5)</a></li>
                                                            </ul> -->
                            </div>

                            <a href="{{ route('blogpage') }}" class="theme-btn">
                                <span data-hover="Book Now">Read More</span>
                                <i class="fal fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
    <!-- Blog Area end -->


    {{-- offer section start --}}


    <!-- Bootstrap CSS -->
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet"> --}}
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    {{-- <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@700;800;900&display=swap" rel="stylesheet"> --}}

    <style>
        :root {
            --promo-primary: #ff6b6b;
            --promo-secondary: #1e3799;
            --promo-accent: #feca57;
            --promo-dark: #222f3e;
            --promo-light: #f5f6fa;
        }

        /*
                body {
                    font-family: 'Poppins', sans-serif;
                    background-color: #f8f9fa;
                } */

        /* Main offer banner section */
        .promo-banner-section {
            padding: 40px 0;
            position: relative;
            overflow: hidden;
            background-color: var(--promo-light);
        }

        /* Main banner container */
        .promo-container {
            position: relative;
            z-index: 10;
        }

        /* Banner background shapes */
        .promo-shapes {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            overflow: hidden;
        }

        .promo-shape {
            position: absolute;
            border-radius: 50%;
            opacity: 0.1;
        }

        .promo-shape-1 {
            width: 300px;
            height: 300px;
            background-color: var(--promo-primary);
            top: -100px;
            right: -50px;
        }

        .promo-shape-2 {
            width: 200px;
            height: 200px;
            background-color: var(--promo-accent);
            bottom: -50px;
            left: 10%;
        }

        .promo-shape-3 {
            width: 150px;
            height: 150px;
            background-color: var(--promo-secondary);
            top: 40%;
            right: 15%;
        }

        /* Primary offer banner */
        .promo-banner-primary {
            background: linear-gradient(135deg, var(--promo-secondary) 0%, #4a69bd 100%);
            border-radius: 16px;
            overflow: hidden;
            position: relative;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
            margin-bottom: 30px;
        }

        .promo-banner-content {
            padding: 40px;
            color: white;
            position: relative;
            z-index: 3;
        }

        .promo-subtitle {
            font-size: 1rem;
            text-transform: uppercase;
            letter-spacing: 3px;
            font-weight: 600;
            color: var(--promo-accent);
            margin-bottom: 10px;
            display: inline-block;
        }

        .promo-title {
            font-family: 'Montserrat', sans-serif;
            font-size: 2.8rem;
            font-weight: 800;
            margin-bottom: 15px;
            line-height: 1.2;
        }

        .promo-description {
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 25px;
            max-width: 600px;
        }

        .promo-timer {
            display: flex;
            margin-bottom: 30px;
        }

        .promo-timer-item {
            background-color: rgba(255, 255, 255, 0.15);
            border-radius: 8px;
            padding: 10px 15px;
            margin-right: 15px;
            text-align: center;
            min-width: 70px;
        }

        .promo-timer-number {
            font-size: 1.8rem;
            font-weight: 700;
            display: block;
            line-height: 1;
        }

        .promo-timer-label {
            font-size: 0.8rem;
            text-transform: uppercase;
            opacity: 0.8;
        }

        .promo-btn {
            background-color: var(--promo-accent);
            color: var(--promo-dark);
            font-weight: 600;
            padding: 12px 30px;
            border-radius: 50px;
            font-size: 1rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(254, 202, 87, 0.4);
            border: none;
        }

        .promo-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(254, 202, 87, 0.6);
            background-color: #ffdb7e;
        }

        .promo-btn i {
            margin-left: 8px;
        }

        .promo-discount-badge {
            position: absolute;
            top: 30px;
            right: 40px;
            background-color: var(--promo-primary);
            width: 100px;
            height: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            flex-direction: column;
            transform: rotate(10deg);
            box-shadow: 0 8px 15px rgba(255, 107, 107, 0.5);
            animation: pulse-discount 2s infinite;
        }

        .promo-discount-text {
            font-size: 1.6rem;
            font-weight: 800;
            line-height: 1;
        }

        .promo-discount-label {
            font-size: 0.9rem;
            text-transform: uppercase;
            font-weight: 600;
        }

        .promo-decoration {
            position: absolute;
            z-index: 2;
        }

        .promo-decoration-1 {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.1);
            top: 25%;
            left: 10%;
            animation: float 6s ease-in-out infinite;
        }

        .promo-decoration-2 {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.1);
            bottom: 15%;
            left: 20%;
            animation: float 8s ease-in-out infinite;
        }

        .promo-decoration-3 {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.1);
            top: 15%;
            right: 25%;
            animation: float 7s ease-in-out infinite;
        }

        /* Secondary offer banner cards */
        .promo-banner-secondary {
            height: 100%;
            border-radius: 12px;
            overflow: hidden;
            position: relative;
            background: linear-gradient(135deg, var(--promo-primary) 0%, #e84118 100%);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .promo-banner-secondary:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }

        .promo-banner-secondary .promo-banner-content {
            padding: 25px;
        }

        .promo-banner-secondary .promo-title {
            font-size: 1.8rem;
            margin-bottom: 10px;
        }

        .promo-banner-secondary .promo-description {
            font-size: 0.95rem;
            margin-bottom: 15px;
        }

        .promo-banner-secondary .promo-btn {
            padding: 10px 20px;
            font-size: 0.9rem;
        }

        .promo-banner-secondary .promo-discount-badge {
            width: 70px;
            height: 70px;
            top: 20px;
            right: 20px;
        }

        .promo-banner-secondary .promo-discount-text {
            font-size: 1.2rem;
        }

        .promo-banner-secondary .promo-discount-label {
            font-size: 0.7rem;
        }

        /* Alternate secondary banner */
        .promo-banner-alternate {
            background: linear-gradient(135deg, var(--promo-accent) 0%, #ff9f43 100%);
        }

        .promo-banner-alternate .promo-subtitle {
            color: white;
        }

        .promo-banner-alternate .promo-btn {
            background-color: var(--promo-secondary);
            color: white;
            box-shadow: 0 5px 15px rgba(30, 55, 153, 0.4);
        }

        .promo-banner-alternate .promo-btn:hover {
            background-color: #334f92;
            box-shadow: 0 8px 20px rgba(30, 55, 153, 0.6);
        }

        .promo-banner-alternate .promo-discount-badge {
            background-color: white;
            color: var(--promo-dark);
            box-shadow: 0 8px 15px rgba(255, 255, 255, 0.3);
        }

        /* Animations */
        @keyframes float {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        @keyframes pulse-discount {
            0% {
                transform: scale(1) rotate(10deg);
            }

            50% {
                transform: scale(1.05) rotate(10deg);
            }

            100% {
                transform: scale(1) rotate(10deg);
            }
        }

        /* Media queries for responsiveness */
        @media (max-width: 1200px) {
            .promo-title {
                font-size: 2.5rem;
            }

            .promo-banner-secondary .promo-title {
                font-size: 1.6rem;
            }
        }

        @media (max-width: 992px) {
            .promo-title {
                font-size: 2.2rem;
            }

            .promo-description {
                font-size: 1rem;
            }

            .promo-timer-item {
                min-width: 60px;
                padding: 8px 12px;
            }

            .promo-timer-number {
                font-size: 1.5rem;
            }

            .promo-discount-badge {
                width: 90px;
                height: 90px;
            }

            .promo-banner-secondary .promo-banner-content {
                padding: 20px;
            }

            .promo-banner-secondary .promo-title {
                font-size: 1.5rem;
            }

            .secondary-banner-container {
                margin-top: 30px;
            }
        }

        @media (max-width: 768px) {
            .promo-banner-content {
                padding: 30px;
            }

            .promo-title {
                font-size: 2rem;
            }

            .promo-subtitle {
                font-size: 0.9rem;
            }

            .promo-discount-badge {
                width: 80px;
                height: 80px;
                top: 20px;
                right: 20px;
            }

            .promo-discount-text {
                font-size: 1.4rem;
            }

            .promo-discount-label {
                font-size: 0.8rem;
            }

            .promo-banner-secondary {
                margin-bottom: 20px;
            }
        }

        @media (max-width: 576px) {
            .promo-banner-section {
                padding: 30px 0;
            }

            .promo-banner-content {
                padding: 25px;
            }

            .promo-title {
                font-size: 1.8rem;
            }

            .promo-description {
                font-size: 0.9rem;
                margin-bottom: 20px;
            }

            .promo-subtitle {
                font-size: 0.8rem;
                letter-spacing: 2px;
            }

            .promo-timer {
                margin-bottom: 20px;
            }

            .promo-timer-item {
                min-width: 55px;
                padding: 8px 10px;
                margin-right: 10px;
            }

            .promo-timer-number {
                font-size: 1.3rem;
            }

            .promo-timer-label {
                font-size: 0.7rem;
            }

            .promo-discount-badge {
                width: 70px;
                height: 70px;
                top: 15px;
                right: 15px;
            }

            .promo-discount-text {
                font-size: 1.2rem;
            }

            .promo-discount-label {
                font-size: 0.7rem;
            }

            .promo-btn {
                padding: 10px 20px;
                font-size: 0.9rem;
            }
        }

        @media (max-width: 400px) {
            .promo-title {
                font-size: 1.6rem;
            }

            .promo-description {
                font-size: 0.85rem;
            }

            .promo-timer-item {
                min-width: 50px;
                padding: 6px 8px;
                margin-right: 8px;
            }

            .promo-timer-number {
                font-size: 1.2rem;
            }

            .promo-discount-badge {
                width: 60px;
                height: 60px;
            }

            .promo-discount-text {
                font-size: 1rem;
            }

            .promo-discount-label {
                font-size: 0.6rem;
            }
        }
    </style>



    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <script>
        // Countdown timer functionality
        function updateCountdown() {
            // Set the target date (3 days from now for demo purposes)
            const now = new Date();
            const targetDate = new Date();
            targetDate.setDate(now.getDate() + 3);
            targetDate.setHours(23, 59, 59, 0);

            // Calculate remaining time
            const currentTime = now.getTime();
            const targetTime = targetDate.getTime();
            const remainingTime = targetTime - currentTime;

            // Calculate days, hours, minutes, seconds
            const days = Math.floor(remainingTime / (1000 * 60 * 60 * 24));
            const hours = Math.floor((remainingTime % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((remainingTime % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((remainingTime % (1000 * 60)) / 1000);

            // Update the HTML
            document.getElementById('days').textContent = days.toString().padStart(2, '0');
            document.getElementById('hours').textContent = hours.toString().padStart(2, '0');
            document.getElementById('minutes').textContent = minutes.toString().padStart(2, '0');
            document.getElementById('seconds').textContent = seconds.toString().padStart(2, '0');

            // Continue the countdown
            if (remainingTime > 0) {
                setTimeout(updateCountdown, 1000);
            } else {
                // If countdown is over
                document.getElementById('days').textContent = "00";
                document.getElementById('hours').textContent = "00";
                document.getElementById('minutes').textContent = "00";
                document.getElementById('seconds').textContent = "00";
            }
        }

        // Start the countdown when the page loads
        document.addEventListener('DOMContentLoaded', function() {
            updateCountdown();

            // Additional animation for elements when they come into view
            const animateOnScroll = function() {
                const elements = document.querySelectorAll('.promo-banner-primary, .promo-banner-secondary');

                elements.forEach(element => {
                    const position = element.getBoundingClientRect();

                    // If element is in viewport
                    if (position.top < window.innerHeight && position.bottom >= 0) {
                        if (!element.classList.contains('animate__animated')) {
                            element.classList.add('animate__animated', 'animate__fadeIn');
                        }
                    }
                });
            }

            // Run on scroll
            window.addEventListener('scroll', animateOnScroll);

            // Run once on page load
            animateOnScroll();
        });
    </script>




    {{-- offer section end here --}}


    {{-- gallery start --}}


    <!-- Bootstrap CSS -->
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet"> --}}
    <!-- AOS Animation CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <!-- Slick Carousel CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet"> --}}

    <style>
        /* :root {
                    --wanderlust-primary: #3498db;
                    --wanderlust-secondary: #2c3e50;
                    --wanderlust-accent: #e74c3c;
                    --wanderlust-light: #ecf0f1;
                    --wanderlust-dark: #2c3e50;
                } */

        /* .a{
                    text-decoration: none !important;
                } */

        .wanderlust-gallery-section {
            padding: 80px 0;
            background-color: #fff;
            position: relative;
            overflow: hidden;
        }

        .wanderlust-section-title {
            text-align: center;
            margin-bottom: 50px;
            position: relative;
        }

        .wanderlust-section-title::after {
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background: var(--wanderlust-accent);
            margin: 15px auto;
        }

        .wanderlust-subtitle {
            color: var(--wanderlust-primary);
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 10px;
            display: block;
        }

        .wanderlust-gallery-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--wanderlust-dark);
        }

        .wanderlust-featured-gallery {
            margin-bottom: 40px;
        }

        .wanderlust-card {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            margin: 15px;
            position: relative;
            transition: all 0.4s ease;
            height: 350px;
        }

        .wanderlust-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }

        .wanderlust-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .wanderlust-card:hover .wanderlust-img {
            transform: scale(1.1);
        }

        .wanderlust-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.8), transparent);
            padding: 20px;
            color: white;
            transition: all 0.3s;
        }

        .wanderlust-card:hover .wanderlust-overlay {
            background: linear-gradient(to top, rgba(52, 152, 219, 0.9), transparent);
        }

        .wanderlust-location {
            display: flex;
            align-items: center;
            margin-bottom: 5px;
            font-size: 0.9rem;
        }

        .wanderlust-location i {
            margin-right: 5px;
            color: var(--wanderlust-accent);
        }

        .wanderlust-rating {
            display: flex;
            align-items: center;
            margin-top: 8px;
        }

        .wanderlust-rating i {
            color: #f1c40f;
            margin-right: 2px;
            font-size: 0.8rem;
        }

        .wanderlust-rating span {
            font-size: 0.9rem;
            margin-left: 5px;
        }

        .wanderlust-slider {
            overflow: hidden;
            position: relative;
        }

        .wanderlust-slick-carousel .slick-slide {
            margin: 0 10px;
        }

        .wanderlust-slick-carousel .slick-list {
            margin: 0 -10px;
        }

        .wanderlust-controls {
            text-align: center;
            margin-top: 30px;
        }

        .wanderlust-controls button {
            background: var(--wanderlust-primary);
            color: white;
            border: none;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin: 0 5px;
            transition: all 0.3s;
            opacity: 0.7;
        }

        .wanderlust-controls button:hover {
            opacity: 1;
            transform: scale(1.1);
        }

        /* Responsive styles for all screen sizes */
        @media (max-width: 1200px) {
            .wanderlust-card {
                height: 330px;
            }
        }

        @media (max-width: 992px) {
            .wanderlust-card {
                height: 320px;
            }

            .wanderlust-gallery-title {
                font-size: 2.2rem;
            }
        }

        @media (max-width: 768px) {
            .wanderlust-gallery-section {
                padding: 60px 0;
            }

            .wanderlust-card {
                height: 300px;
                margin: 10px;
            }

            .wanderlust-gallery-title {
                font-size: 2rem;
            }

            .wanderlust-section-title::after {
                width: 60px;
            }

            .wanderlust-overlay {
                padding: 15px;
            }

            .wanderlust-overlay h4 {
                font-size: 1.1rem;
            }

            .wanderlust-overlay p {
                font-size: 0.9rem;
            }
        }

        @media (max-width: 576px) {
            .wanderlust-gallery-section {
                padding: 40px 0;
            }

            .wanderlust-card {
                height: 250px;
                margin: 8px;
            }

            .wanderlust-gallery-title {
                font-size: 1.8rem;
            }

            .wanderlust-section-title {
                margin-bottom: 30px;
            }

            .wanderlust-overlay {
                padding: 12px;
            }

            .wanderlust-overlay h4 {
                font-size: 1rem;
                margin-bottom: 5px;
            }

            .wanderlust-overlay p {
                font-size: 0.8rem;
                margin-bottom: 5px;
            }

            .wanderlust-rating i {
                font-size: 0.7rem;
            }

            .wanderlust-controls button {
                width: 35px;
                height: 35px;
            }
        }

        @media (max-width: 380px) {
            .wanderlust-card {
                height: 220px;
            }

            .wanderlust-overlay {
                padding: 10px;
            }

            .wanderlust-overlay p {
                display: -webkit-box;
                -webkit-line-clamp: 2;
                -webkit-box-orient: vertical;
                overflow: hidden;
            }
        }

        /* Animation classes with unique names */
        .wanderlust-fade-up {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.5s ease, transform 0.5s ease;
        }

        .wanderlust-fade-up.active {
            opacity: 1;
            transform: translateY(0);
        }

        .wanderlust-zoom-in {
            opacity: 0;
            transform: scale(0.9);
            transition: opacity 0.5s ease, transform 0.5s ease;
        }

        .wanderlust-zoom-in.active {
            opacity: 1;
            transform: scale(1);
        }

        /* Delay classes for animations */
        .wanderlust-delay-1 {
            transition-delay: 0.1s;
        }

        .wanderlust-delay-2 {
            transition-delay: 0.2s;
        }

        .wanderlust-delay-3 {
            transition-delay: 0.3s;
        }
    </style>


    <section class="wanderlust-gallery-section">
        <div class="container">
            <div class="wanderlust-section-title" data-aos="fade-up">

                {{-- <h2 class="wanderlust-gallery-title">Discover Amazing Destinations</h2>
            <span class="wanderlust-subtitle">Explore Our Gallery</span> --}}
                <h2>Explore Our Gallery</h2>
                <p>Discover Amazing Destinations</p>
            </div>


            @if ($galleryItems->isNotEmpty())
            <div class="row wanderlust-featured-gallery">
                @foreach($galleryItems as $index => $item)
                    @if($index < 3)
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4" data-aos="{{ $index == 0 ? 'fade-up' : ($index == 1 ? 'zoom-in' : 'fade-left') }}" data-aos-delay="{{ $index * 200 }}">
                            <div class="wanderlust-card">
                                <img src="{{ $item->image_link ?? asset($item->local_image) }}" alt="{{ $item->alternate_text }}" class="wanderlust-img">
                                <div class="wanderlust-overlay">
                                    <h4>{{ $item->title }}</h4>

                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

            <!-- Slider Section -->
            @if(count($galleryItems) > 3)
            <div class="wanderlust-slider" data-aos="fade-up" data-aos-delay="300">
                <div class="wanderlust-slick-carousel">
                    @foreach($galleryItems as $index => $item)
                        @if($index >= 3)
                            <div>
                                <div class="wanderlust-card">
                                    <img src="{{ $item->image_link ?? asset($item->local_image) }}" alt="{{ $item->alternate_text }}" class="wanderlust-img">
                                    <div class="wanderlust-overlay">
                                        <h4>{{ $item->title }}</h4>
                                        {{-- <div class="wanderlust-location">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
            @endif
            @else
            <div class="row wanderlust-featured-gallery">
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4" data-aos="fade-up">
                    <div class="wanderlust-card">
                        <img src="https://static.vecteezy.com/system/resources/previews/011/883/276/original/modern-graphic-apple-fruit-colorful-logo-good-for-technology-logo-fruits-logo-apple-logo-nutrition-logo-company-logo-dummy-logo-bussiness-logo-vector.jpg"
                            alt="Santorini, Greece" class="wanderlust-img">
                        <div class="wanderlust-overlay">
                            <h4>Santorini, Greece</h4>
                            {{-- <div class="wanderlust-location">
                                <i class="fas fa-map-marker-alt"></i> Mediterranean
                            </div> --}}
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 col-sm-12 mb-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="wanderlust-card">
                        <img src="https://static.vecteezy.com/system/resources/previews/011/883/276/original/modern-graphic-apple-fruit-colorful-logo-good-for-technology-logo-fruits-logo-apple-logo-nutrition-logo-company-logo-dummy-logo-bussiness-logo-vector.jpg"
                            alt="Bali, Indonesia" class="wanderlust-img">
                        <div class="wanderlust-overlay">
                            <h4>Bali, Indonesia</h4>
                            {{-- <div class="wanderlust-location">
                                <i class="fas fa-map-marker-alt"></i> Southeast Asia
                            </div> --}}
                            {{-- <p>Explore the tropical paradise with beautiful beaches and ancient temples</p>
                        <div class="wanderlust-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span>4.9 (412 reviews)</span>
                        </div> --}}
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 mb-4" data-aos="fade-left" data-aos-delay="400">
                    <div class="wanderlust-card">
                        <img src="https://static.vecteezy.com/system/resources/previews/011/883/276/original/modern-graphic-apple-fruit-colorful-logo-good-for-technology-logo-fruits-logo-apple-logo-nutrition-logo-company-logo-dummy-logo-bussiness-logo-vector.jpg"
                            alt="Machu Picchu, Peru" class="wanderlust-img">
                        <div class="wanderlust-overlay">
                            <h4>Machu Picchu, Peru</h4>
                            {{-- <div class="wanderlust-location">
                                <i class="fas fa-map-marker-alt"></i> South America
                            </div> --}}
                            {{-- <p>Visit the ancient Incan citadel set high in the Andes Mountains</p>
                        <div class="wanderlust-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span>5.0 (290 reviews)</span>
                        </div> --}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="wanderlust-slider" data-aos="fade-up" data-aos-delay="300">
                <div class="wanderlust-slick-carousel">
                    <!-- Slider Item 1 -->
                    <div>
                        <div class="wanderlust-card">
                            <img src="https://static.vecteezy.com/system/resources/previews/011/883/276/original/modern-graphic-apple-fruit-colorful-logo-good-for-technology-logo-fruits-logo-apple-logo-nutrition-logo-company-logo-dummy-logo-bussiness-logo-vector.jpg"
                                alt="Kyoto, Japan" class="wanderlust-img">
                            <div class="wanderlust-overlay">
                                <h4>Kyoto, Japan</h4>
                                {{-- <div class="wanderlust-location">
                                    <i class="fas fa-map-marker-alt"></i> East Asia
                                </div> --}}
                                {{-- <p>Discover traditional temples, gardens and geisha districts</p>
                            <div class="wanderlust-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span>4.7 (356 reviews)</span>
                            </div> --}}
                            </div>
                        </div>
                    </div>

                    <!-- Slider Item 2 -->
                    <div>
                        <div class="wanderlust-card">
                            <img src="https://static.vecteezy.com/system/resources/previews/011/883/276/original/modern-graphic-apple-fruit-colorful-logo-good-for-technology-logo-fruits-logo-apple-logo-nutrition-logo-company-logo-dummy-logo-bussiness-logo-vector.jpg"
                                alt="Venice, Italy" class="wanderlust-img">
                            <div class="wanderlust-overlay">
                                <h4>Venice, Italy</h4>
                                {{-- <div class="wanderlust-location">
                                    <i class="fas fa-map-marker-alt"></i> Europe
                                </div> --}}
                                {{-- <p>Explore the unique city built on canals with historic architecture</p>
                            <div class="wanderlust-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>4.5 (278 reviews)</span>
                            </div> --}}
                            </div>
                        </div>
                    </div>

                    <!-- Slider Item 3 -->
                    <div>
                        <div class="wanderlust-card">
                            <img src="https://static.vecteezy.com/system/resources/previews/011/883/276/original/modern-graphic-apple-fruit-colorful-logo-good-for-technology-logo-fruits-logo-apple-logo-nutrition-logo-company-logo-dummy-logo-bussiness-logo-vector.jpg"
                                alt="Maldives" class="wanderlust-img">
                            <div class="wanderlust-overlay">
                                <h4>Maldives Islands</h4>
                                {{-- <div class="wanderlust-location">
                                    <i class="fas fa-map-marker-alt"></i> Indian Ocean
                                </div> --}}
                                {{-- <p>Enjoy crystal clear waters, white beaches and luxury overwater bungalows</p>
                            <div class="wanderlust-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span>4.9 (410 reviews)</span>
                            </div> --}}
                            </div>
                        </div>
                    </div>

                    <!-- Slider Item 4 -->
                    <div>
                        <div class="wanderlust-card">
                            <img src="https://static.vecteezy.com/system/resources/previews/011/883/276/original/modern-graphic-apple-fruit-colorful-logo-good-for-technology-logo-fruits-logo-apple-logo-nutrition-logo-company-logo-dummy-logo-bussiness-logo-vector.jpg"
                                alt="New York, USA" class="wanderlust-img">
                            <div class="wanderlust-overlay">
                                <h4>New York City, USA</h4>
                                {{-- <div class="wanderlust-location">
                                    <i class="fas fa-map-marker-alt"></i> North America
                                </div> --}}
                                {{-- <p>Experience the iconic cityscape, culture, and energy of the Big Apple</p>
                            <div class="wanderlust-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span>4.8 (520 reviews)</span>
                            </div> --}}
                            </div>
                        </div>
                    </div>

                    <!-- Slider Item 5 -->
                    <div>
                        <div class="wanderlust-card">
                            <img src="https://static.vecteezy.com/system/resources/previews/011/883/276/original/modern-graphic-apple-fruit-colorful-logo-good-for-technology-logo-fruits-logo-apple-logo-nutrition-logo-company-logo-dummy-logo-bussiness-logo-vector.jpg"
                                alt="Cape Town, South Africa" class="wanderlust-img">
                            <div class="wanderlust-overlay">
                                <h4>Cape Town, South Africa</h4>
                                {{-- <div class="wanderlust-location">
                                    <i class="fas fa-map-marker-alt"></i> Africa
                                </div> --}}
                                {{-- <p>Visit this stunning coastal city with Table Mountain as a backdrop</p>
                            <div class="wanderlust-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>4.6 (245 reviews)</span>
                            </div> --}}
                            </div>
                        </div>
                    </div>

                    <!-- Slider Item 6 -->
                    <div>
                        <div class="wanderlust-card">
                            <img src="https://static.vecteezy.com/system/resources/previews/011/883/276/original/modern-graphic-apple-fruit-colorful-logo-good-for-technology-logo-fruits-logo-apple-logo-nutrition-logo-company-logo-dummy-logo-bussiness-logo-vector.jpg"
                                alt="Great Barrier Reef, Australia" class="wanderlust-img">
                            <div class="wanderlust-overlay">
                                <h4>Great Barrier Reef, Australia</h4>
                                {{-- <div class="wanderlust-location">
                                    <i class="fas fa-map-marker-alt"></i> Oceania
                                </div> --}}
                                {{-- <p>Explore the world's largest coral reef system with amazing marine life</p>
                            <div class="wanderlust-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span>4.7 (330 reviews)</span>
                            </div> --}}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            @endif


    </section>

    <!-- Blade file popup-modal.blade.php -->

<!-- Modal Popup CSS -->
<style>
    .modal-overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 1000;
        justify-content: center;
        align-items: center;
        padding: 1rem;
        overflow-y: auto;
    }

    .modal-container {
        background-color: white;
        border-radius: 0.5rem;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        width: 100%;
        max-width: 800px;
       
        overflow: hidden;
        display: flex;
        flex-direction: column;
        max-height: 100vh; /* Prevent modal from exceeding screen */
        overflow-y: auto;
    }

    @media (min-width: 768px) {
    .modal-container {
        flex-direction: row; /* Side-by-side only on desktop */
        max-height: 80vh;     /* Adjust height for large screens */
    }
}

    .modal-image-section {
        width: 100%;
        background-color: #EFF6FF; /* blue-50 */
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 1.5rem;
    }

    @media (min-width: 768px) {
        .modal-image-section {
            width: 50%;
        }
    }

    .modal-form-section {
        width: 100%;
        padding: 1.5rem;
        position: relative;
    }

    @media (min-width: 768px) {
        .modal-form-section {
            width: 50%;
        }
    }

    .close-btn {
        position: absolute;
        top: 1rem;
        right: 1rem;
        background: none;
        border: none;
        cursor: pointer;
        font-size: 1.5rem;
        color: #6B7280; /* gray-500 */
    }

    .close-btn:hover {
        color: #374151; /* gray-700 */
    }

    .form-group {
        margin-bottom: 1rem;
    }

    .form-label {
        display: block;
        font-size: 0.875rem;
        font-weight: 500;
        color: #374151; /* gray-700 */
        margin-bottom: 0.25rem;
    }

    .form-input {
        width: 100%;
        padding: 0.5rem 0.75rem;
        border: 1px solid #D1D5DB; /* gray-300 */
        border-radius: 0.375rem;
    }

    .form-input:focus {
        outline: none;
        border-color: #3B82F6; /* blue-500 */
        box-shadow: 0 0 0 2px rgba(59, 130, 246, 0.3);
    }

    .form-textarea {
        width: 100%;
        padding: 0.5rem 0.75rem;
        border: 1px solid #D1D5DB; /* gray-300 */
        border-radius: 0.375rem;
        resize: vertical;
    }

    .form-textarea:focus {
        outline: none;
        border-color: #3B82F6; /* blue-500 */
        box-shadow: 0 0 0 2px rgba(59, 130, 246, 0.3);
    }

    .submit-btn {
        width: 100%;
        background-color: #2563EB; /* blue-600 */
        color: white;
        padding: 0.5rem 1rem;
        border: none;
        border-radius: 0.375rem;
        font-weight: 500;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .submit-btn:hover {
        background-color: #1D4ED8; /* blue-700 */
    }
</style>

<!-- Modal Structure -->
<div id="contactModal" class="modal-overlay">
    <div class="modal-container">
        <!-- Image Section -->
        <div class="modal-image-section">
            <div style="width: 100%; max-width: 400px; aspect-ratio: 1/1; background-color: #BFDBFE; border-radius: 0.5rem; overflow: hidden;height:400px">
                <img src="{{ asset('./assets/images/banner_hom2.jpg') }}" alt="Contact us" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
        </div>
        
        <!-- Form Section -->
        <div class="modal-form-section">
            <button class="close-btn" onclick="closeModal()">×</button>
            
            <div style="margin-bottom: 1.5rem;">
                <h2 style="font-size: 1.5rem; font-weight: 700; color: #1F2937; margin-bottom: 0.5rem;">Enquiry Now</h2>
                <p style="color: #4B5563;">Fill out the form below and we'll get back to you soon!</p>
            </div>
            
            <form id="contactForm" method="POST">
                @csrf
                
                <div class="form-group">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" id="name" name="name" class="form-input" required>
                </div>
                
                <div class="form-group">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="tel" id="phone" name="phone_number" class="form-input" required>
                </div>
                
                <div class="form-group">
                    <label for="message" class="form-label">Message</label>
                    <textarea id="message" name="message" rows="3" class="form-textarea" required></textarea>
                </div>
                <div class="form-group">
                    <label for="captcha_enquiry_form" class="form-label">Captcha</label>
                    <input type="text" id="captcha_enquiry_form" name="captcha" class="form-input" required placeholder="Enter Captcha">
                
                    {{-- <div style="display: flex; align-items: center; gap: 1rem; margin-top: 0.5rem;">
                        <img class="img-thumbnail" style="max-width: 150px;" 
                        src="{{ captcha_src() }}" 
                        id="captcha_img_id_enquiry_form" 
                        alt="captcha">
                                   
                        <button type="button" class="btn btn-icon btn-light" onclick="refreshCapthca('captcha_img_id_enquiry_form','captcha_enquiry_form')">
                            <i class="fa fa-refresh"></i>
                        </button>
                    </div> --}}
                </div>
                
                
                <button type="submit" class="submit-btn mb-5">Submit</button>
            </form>
        </div>
    </div>
</div>

<!-- JavaScript for Modal functionality -->
<script>
    // Show modal after 20 seconds
    document.addEventListener('DOMContentLoaded', function() {
        setTimeout(function() {
            document.getElementById('contactModal').style.display = 'flex';
        }, 20000); 
    });

    // Close modal function
    function closeModal() {
        $("#contactForm")[0].reset();
        document.getElementById('contactModal').style.display = 'none';
    }

    // function refreshCapthca(imgId, inputId) {
    //     const baseUrl = "{{ url('captcha/default') }}";
    //     document.getElementById(imgId).src = baseUrl + "?" + Math.random();
    //     document.getElementById(inputId).value = "";
    // }

    // Submit form with AJAX (optional)
    document.getElementById('contactForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Get form data
        const formData = new FormData(this);
        // let captcha_enquiry_form = $("#captcha_enquiry_form").val();
        // if(!captcha_enquiry_form){
        //     errorMessage("Captcha is required.");
        //     return false;
        // }
        
        $.ajax({
            type: 'post',
            url: '{{ route('saveEnquiryFormData') }}',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function(response) {
                if (response.status) {
                    successMessage(response.message);
                    closeModal();

                } else {
                    errorMessage(response.message ?? "Something went wrong.");
                    $("#submitButton").attr("disabled", false);
                }
            },
            failure: function(response) {
                errorMessage(response.message ?? "Something went wrong.");
                $("#submitButton").attr("disabled", false);
            },
            error: function(response) {
                errorMessage(response.message ?? "Something went wrong.");
                $("#submitButton").attr("disabled", false);
            }
        });
    });

    // Close modal when clicking outside
    document.getElementById('contactModal').addEventListener('click', function(e) {
        if (e.target === this) {
            closeModal();
        }
    });
</script>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <script>
        $(document).ready(function() {
            // Initialize AOS animation library
            AOS.init({
                duration: 1000,
                once: true,
                mirror: false,
                disable: window.innerWidth < 768 // Disable animations on mobile for better performance
            });

            // Initialize the slick carousel with improved responsive settings
            $('.wanderlust-slick-carousel').slick({
                dots: false,
                infinite: true,
                speed: 500,
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3000,
                prevArrow: $('.wanderlust-prev'),
                nextArrow: $('.wanderlust-next'),
                rtl: false,
                responsive: [{
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 576,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            autoplaySpeed: 2500
                        }
                    }
                ]
            });

            // Custom animations with new class names
            setTimeout(function() {
                $('.wanderlust-fade-up').addClass('active');
            }, 300);

            setTimeout(function() {
                $('.wanderlust-zoom-in').addClass('active');
            }, 600);

            // Better responsive handling - adjust slider height on window resize
            $(window).on('resize', function() {
                setTimeout(function() {
                    $('.wanderlust-slick-carousel').slick('refresh');
                }, 100);
            });

            // Pause autoplay on hover
            $('.wanderlust-slider').hover(
                function() {
                    $('.wanderlust-slick-carousel').slick('slickPause');
                },
                function() {
                    $('.wanderlust-slick-carousel').slick('slickPlay');
                }
            );
        });
    </script>



    {{-- gallery end  --}}


    <style>
        .service-view-button button {
            color: white;
        }

        .view-more-button {
            /* margin-left: 212px; */
        }

        h2 {
            color: #022f5d;
        }

        .main-slider .swiper-wrapper img {
            /* transition: 3s ease-in-out; */
            transform: scale(1.1);
            max-height: 650px !important;
            width: 100%;
            /* opacity: 1; */
        }

        .main-slider .swiper-wrapper .swiper-slide.swiper-slide-next img {
            /* transition: 10s ease-in-out; */
            /* opacity: 0.5; */
            transform: scale(1);
        }

        h5.card-heading {
            color: #fff;
        }

        /* .fade {
                                      animation: fadeInOut 4.7s infinite;
                                    }

                                    @keyframes fadeInOut {
                                      0% {
                                        opacity: 0.5;
                                      }
                                      50% {
                                        opacity: 0.8;
                                      }
                                      100% {
                                        opacity: 1;
                                      }
                                    } */
        .text-primary {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-primary-rgb), var(--bs-text-opacity)) !important;
        }
    </style>
    {{-- <script>
        document.addEventListener("DOMContentLoaded", function() {
            const calendarTrigger = document.getElementById("calendarTrigger");
            const calendarDiv = document.getElementById("calendar");
            const selectedDateDisplay = document.getElementById("selectedDate");
            const hiddenDepartureDate = document.getElementById("hiddenDepartureDate");

            function generateCalendar(year, month) {
                const today = new Date(); // Get today's date
                const daysInMonth = new Date(year, month + 1, 0).getDate();
                const firstDay = new Date(year, month, 1).getDay();

                let calendarHTML = `
                    <table style="border-collapse: collapse; width: 100%; text-align: center;">
                        <thead>
                            <tr>
                                <th style="padding: 5px;">Sun</th>
                                <th style="padding: 5px;">Mon</th>
                                <th style="padding: 5px;">Tue</th>
                                <th style="padding: 5px;">Wed</th>
                                <th style="padding: 5px;">Thu</th>
                                <th style="padding: 5px;">Fri</th>
                                <th style="padding: 5px;">Sat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                `;

                for (let i = 0; i < firstDay; i++) {
                    calendarHTML += `<td style="padding: 5px; border: 1px solid #ddd;"></td>`;
                }

                for (let day = 1; day <= daysInMonth; day++) {
                    const currentDate = new Date(year, month, day);

                    if ((firstDay + day - 1) % 7 === 0 && day > 1) {
                        calendarHTML += `</tr><tr>`;
                    }

                    // Disable past dates
                    const isPast = currentDate < today.setHours(0, 0, 0, 0);
                    calendarHTML += `
                        <td style="padding: 5px; border: 1px solid #ddd; cursor: ${isPast ? 'not-allowed' : 'pointer'};
                                   background-color: ${isPast ? '#f0f0f0' : 'transparent'};
                                   color: ${isPast ? '#ccc' : '#000'};"
                            data-date="${isPast ? '' : `${year}-${month + 1}-${day}`}">
                            ${day}
                        </td>`;
                }

                calendarHTML += `
                            </tr>
                        </tbody>
                    </table>
                `;
                return calendarHTML;
            }

            function handleDateSelection(event) {
                const selectedDate = event.target.getAttribute("data-date");
                if (selectedDate) {
                    selectedDateDisplay.textContent = `Selected Date: ${selectedDate}`;
                    hiddenDepartureDate.value = selectedDate; // Set the hidden input value
                    calendarDiv.style.display = "none";
                }
            }

            calendarTrigger.addEventListener("click", function() {
                if (calendarDiv.style.display === "none") {
                    const today = new Date();
                    calendarDiv.innerHTML = generateCalendar(today.getFullYear(), today.getMonth());
                    calendarDiv.style.display = "block";
                    calendarDiv.addEventListener("click", handleDateSelection);
                } else {
                    calendarDiv.style.display = "none";
                }
            });

            document.addEventListener("click", function(e) {
                if (!calendarDiv.contains(e.target) && e.target !== calendarTrigger) {
                    calendarDiv.style.display = "none";
                }
            });
        });
    </script> --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const calendarTrigger = document.getElementById('calendarTrigger');
            const departureDateInput = document.getElementById('departure_date');
            const selectedDateText = document.getElementById('selectedDate');

            // Set the min attribute of the date input to today's date
            const today = new Date();
            const formattedDate = today.toISOString().split('T')[0]; // Format as YYYY-MM-DD
            departureDateInput.setAttribute('min', formattedDate);

            // Toggle visibility of the date input on clicking the calendar trigger
            calendarTrigger.addEventListener('click', function() {
                if (departureDateInput.style.display === 'none') {
                    departureDateInput.style.display = 'block';
                } else {
                    departureDateInput.style.display = 'none';
                }
            });

            // Update selected date text when a date is chosen
            departureDateInput.addEventListener('change', function() {
                const selectedDate = departureDateInput.value;
                selectedDateText.textContent = `Selected Date: ${selectedDate}`;
            });
        });
    </script>


@endsection
