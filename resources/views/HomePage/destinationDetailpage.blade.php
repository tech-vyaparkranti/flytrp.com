@extends('layouts.webSite')
@section('title', $homedestination->meta_title)
@section('meta_description', $homedestination->meta_description)
@section('meta_keywords', $homedestination->meta_keyword)
@section('content')


    <!-- Destination Gallery start -->
    <div class="destination-gallery pt-100">
        <div class="blog-banner" style="margin-bottom:50px; ">
            <img src="{{ asset('./assets/images/bannerblog.jpg') }}" alt=""
                style="height:350px; max-height:350px; width:100%; object-fit:cover; border-radius: 0px !important;">
        </div>
        <div class="container-fluid">
            <div class="row gap-10 justify-content-center rel">
                {{-- <div class="col-lg-4 col-md-6">
                        <div class="gallery-item">
                            <img src="./assets/images/destination-details1.jpg" alt="Destination">
                        </div>
                        <div class="gallery-item">
                            <img src="./assets/images/destination-details4.jpg" alt="Destination">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="gallery-item">
                            <img src="./assets/images/destination-details2.jpg" alt="Destination">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="gallery-item">
                            <img src="./assets/images/destination-details3.jpg" alt="Destination">
                        </div>
                        <div class="gallery-item">
                            <img src="./assets/images/destination-details5.jpg" alt="Destination">
                        </div>
                    </div> --}}
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item fixed-image-size">
                        @if (isset($homedestination->destination_image))
                            @php
                                $images = is_string($homedestination->destination_image)
                                    ? json_decode($homedestination->destination_image, true)
                                    : $homedestination->destination_image;
                                $images = is_array($images) ? $images : [];
                            @endphp

                            @if (isset($images[0]))
                                <img src="{{ asset('storage/' . $images[0]) }}" alt="Destination" class="img-fluid ">
                            @endif
                            @if (isset($images[3]))
                                <img src="{{ asset('storage/' . $images[3]) }}" alt="Destination" class="img-fluid">
                            @endif
                        @else
                            <img src="{{ asset('./assets/images/destination-details1.jpg') }}" alt="Destination"
                                class="img-fluid fixed-image-size">
                            <img src="{{ asset('./assets/images/destination-details4.jpg') }}" alt="Destination"
                                class="img-fluid fixed-image-size">
                        @endif
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item unique-image-size">
                        @if (isset($images[1]))
                            <img src="{{ asset('storage/' . $images[1]) }}" alt="Destination" class="img-fluid ">
                        @else
                            <img src="./assets/images/destination-details2.jpg" alt="Destination"
                                class="img-fluid unique-image-size">
                        @endif
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item fixed-image-size below-image">
                        @if (isset($images[2]))
                            <img src="{{ asset('storage/' . $images[2]) }}" alt="Destination" class="img-fluid ">
                        @endif
                        @if (isset($images[4]))
                            <img src="{{ asset('storage/' . $images[4]) }}" alt="Destination" class="img-fluid ">
                        @else
                            <img src="./assets/images/destination-details5.jpg" alt="Destination"
                                class="img-fluid fixed-image-size">
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Destination Gallery End -->


    <!-- About Us Area start -->
    <section class="about-us-area pt-90 pb-100 rel z-1">
        <div class="container">
            <div class="row gap-100 align-items-center">
                <div class="col-lg-6">
                    <div class="destination-details-content rmb-55" data-aos="fade-left" data-aos-duration="1500"
                        data-aos-offset="50">
                        <div class="section-title mb-25">
                            <span class="h2 mb-15">Welcome to </span>
                            <h2>{{ $homedestination->destination_name }}</h2>
                        </div>
                        <p>
                            {{ $homedestination->destination_details }}
                        </p>
                        <a href="{{ route('destinationpage') }}" class="theme-btn mt-25 style-two">
                            <span data-hover="Explore Destinations">Explore Destinations</span>
                            <i class="fal fa-arrow-right"></i>
                        </a>
                    </div>
                    {{-- <div class="destination-details-content rmb-55" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                            <div class="section-title mb-25">
                                <span class="h2 mb-15">Welcome to </span>
                                <h2>Bali, Indonesia</h2>
                            </div>
                            <p>Bali, Indonesia, is a tropical paradise renowned for breathtaking beaches, vibrant culture, and lush landscapes. Located at the westernmost end of the Lesser Sunda Islands, Bali boasts a warm, tropical climate that is year-round destination visitors are drawn to its picturesque beaches</p>
                            <p>The island's rich cultural heritage is evident in numerous temples, including the iconic Tanah Lot and Uluwatu Temple, as well as the cultural</p>
                            <a href="{{ route('packagePage') }}" class="theme-btn mt-25 style-two">
                                <span data-hover="Explore Destinations">Explore Destinations</span>
                                <i class="fal fa-arrow-right"></i>
                            </a>
                        </div> --}}
                </div>
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                    {{-- <div class="destination-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d96777.16150026117!2d-74.00840582560909!3d40.71171357405996!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1706508986625!5m2!1sen!2sbd" style="border:0; width: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div> --}}
                    <div class="destination-map">
                        <iframe
                            src="https://www.google.com/maps?q={{ urlencode($homedestination->destination_name) }}&output=embed"
                            style="border:0; width: 100%; height: 400px;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Area end -->
    <!-- related Tour Area start -->
    <section class="destinations-area bgc-black pt-100 pb-70 rel z-1">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section-title text-white text-center counter-text-wrap mb-30" data-aos="fade-up"
                        data-aos-duration="1500" data-aos-offset="50">
                        <h2 class="popular-destination" data-aos="fade-up">Our Related Tours</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">

                <div class="swiper packages mt-4">
                    <div class="swiper-wrapper">
                        @if (isset($matchedTourTitles) && count($matchedTourTitles) > 0)
                            @if (!empty($matchedTourTitles) && count($matchedTourTitles))
                                @foreach ($matchedTourTitles as $item)
                                    <div class="col-xl-4 col-md-6 swiper-slide">
                                        <div class="destination-item tour-grid style-three bgc-lighter" data-aos="fade-up"
                                            data-aos-duration="1500" data-aos-offset="50">
                                            <div class="image">
                                               
                                                {{-- @if ($displayImage) --}}
                                                <img src="{{ asset($item->image) }}" alt="{{ $item->title }}"
                                                    class="hotel-image" style="margin-right: 10px;">
                                                {{-- @else
                                        <img src="{{ asset('path/to/default/image.jpg') }}" alt="Default Image" class="hotel-image">
                                    @endif --}}
                                            </div>
                                            <div class="content">
                                                <div class="destination-header">
                                                    {{-- <span class="location">
                                            {{ $item->package_type }}</span> --}}
                                                    {{-- <div class="ratting">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div> --}}
                                                </div>
                                                <h5><a
                                                        href="{{ route('tourDetail', ['tour_slug' => $item->slug]) }}">{{ $item->title }}</a>
                                                </h5>
                                                {{-- <p>Bali, Indonesia, is tropical paradise renowned breathtaking beaches and landscapes</p> --}}
                                                {{-- <ul class="blog-meta"> --}}
                                                {{-- <li><i class="far fa-clock"></i> {!! $item->package_duration_days !!} Days /
                                            {!! $item->package_duration_nights !!} Nights</li> --}}
                                                {{-- <li><i class="far fa-user"></i> 5-8 guest</li> --}}
                                                {{-- </ul> --}}
                                                <div class="destination-footers">
                                                    <!-- <span class="price"><span>$58.00</span>/person</span> -->
                                                    <a href="{{ route('tourDetail', ['tour_slug' => $item->slug]) }}"
                                                        class="theme-btn style-two style-three">
                                                        <span data-hover="Book Now text-center">View More</span>
                                                        <i class="fal fa-arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <span>No Similar Travel Tour found.</span>
                               
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- related Tour  Area end -->

    <!-- Destinations Area start -->
    <section class="destinations-area bgc-lighter pt-85 pb-100 rel z-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section-title text-center counter-text-wrap mb-50" data-aos="fade-up"
                        data-aos-duration="1500" data-aos-offset="50">
                        <h2>Explore Our Popular Destinations</h2>
                        <p>One site many popular
                            experience you’ll remember</p>
                    </div>
                </div>
            </div>

            <div class="destination-active">
                @if (isset($homedestinations) && count($homedestinations) > 0)
                    @foreach ($homedestinations as $package)
                        @php
                            // Ensure package_image is decoded if it's a JSON string
$images = is_string($package->destination_image)
    ? json_decode($package->destination_image, true)
    : $package->destination_image;

// Use the first image if available; otherwise, set a default image
$displayImage =
    is_array($images) && !empty($images) ? $images[0] : 'path/to/default/image.jpg';
                        @endphp
                        <div class="destination-item style-two" data-aos="fade-up" data-aos-duration="1500"
                            data-aos-offset="50">
                            <div class="image">
                                <img src="{{ asset('storage/' . $displayImage) }}"
                                    alt="{{ $package->destination_name }}">
                            </div>
                            <div class="contents">
                                <h6><a
                                        href="{{ route('destinationDetailpage', ['destination_slug' => $package->destination_slug]) }}">{{ $package->destination_name }}</a>
                                </h6>
                                {{-- <span class="tours">{{ $package->package_name }}</span> --}}
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>No destinations available at the moment.</p>
                @endif
            </div>


        </div>
    </section>


    <style>
        .destination-active .destination-item.style-two .image img {
            border-radius: 50%;
            display: inline-block;
            width: 170px;
            height: 170px;
            object-fit: cover;
        }

        /* General fixed size for most images */
        .fixed-image-size img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-radius: 5px;
            margin-top: 10px;
        }

        /* Unique style for the second image */
        .unique-image-size img {
            width: 100%;
            margin-top: 10px;
            height: 610px;
            /* Taller height for the second image */
            /* object-fit: contain; Ensures the whole image is visible */
            border-radius: 10px;
            object-fit: cover;
            /* Different rounded corners */
            /* border: 2px solid #ccc; Optional: Add a border for distinction */
        }

        @media(max-width:992px) {
            .below-image {
                display: flex;
                justify-content: center !important;
                grid-gap: 10px;
                margin-top: -10px !important;
            }

            .fixed-image-size img {
                width: 100%;
                height: 300px;
                max-width: 552px !important;
                min-width: 376px !important;
                object-fit: cover;
                border-radius: 5px;
                margin-top: 10px;
            }
        }


        @media (max-width: 768px) {

            .below-image {
                display: block;
                justify-content: center !important;
                grid-gap: 10px;
                margin-top: -10px !important;
            }

            .fixed-image-size img {
                width: 100% !important;
                min-width: 100% !important;
                object-fit: cover;
            }

            .unique-image-size img {
                width: 100%;
                margin-top: 0px !important;
                height: 300px;
                /* Taller height for the second image */
                /* object-fit: contain; Ensures the whole image is visible */
                border-radius: 10px;
                object-fit: cover;
                /* Different rounded corners */
                /* border: 2px solid #ccc; Optional: Add a border for distinction */
            }
        }
    </style>
@endsection
