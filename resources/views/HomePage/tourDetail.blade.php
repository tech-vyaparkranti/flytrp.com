@extends('layouts.webSite')

@section('title', 'Tours Details')
@section('content')



    <section class="tour-grid-page py-100 rel z-2">



        {{-- <div class="blog-banner" style="margin-bottom:50px; ">
            <img src="./assets/images/Banner_HD.png" alt="" style="max-height:200px;width:100%; object-fit:cover;">
        </div> --}}
        {{-- <div class="blog-banner">
            <img src="./assets/images/Banner_HD.png" alt="Blog Banner"  >
        </div> --}}
        <div id="about">
            {{-- <div style="padding: 30px ; background-color: #3498db;"> hello </div> --}}

            <div class="default-content pt-4  our-service-page">

                <div class="blog-banner" style="padding: 0; margin-bottom: 30px;">
                    <img src="{{ asset('assets/images/Banner_HD.png') }}" alt="Tour Banner"
                        style=" height:350px; max-height:350px; width:100%; object-fit:cover; border-radius: 0px !important;">
                </div>
                <div class="custom-container">

                    {{-- <div class="main-container">
                        <div class="detail-blog-container pb-4 mb-4">
                            <div class="blog-left-container">
                                <div class="blog-left-item">
                                    <img src="{{ asset($tours->image) }}" alt="">
                                    <div class="blog-left-content">
                                        <h3 class="mb-3 mt-3">{{ $tours->title }}</h3>
                                        <p class="text-justify">{!! $tours->content !!}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-right-container">
                                <div class="recent-posts">
                                    <h4 class="mb-2 mt-2">Our Recent Posts</h4>
                                    <div class="posts">
                                        @foreach ($otherTours as $otherTour)
                                            <a href="{{ route('tourDetail', ['tour_slug' => $otherTour->slug]) }}">
                                                <div class="post-cards">
                                                    <img src="{{ asset($otherTour->image) }}" alt="{{ $otherTour->title }}">
                                                    <h5><a
                                                            href="{{ route('tourDetail', ['tour_slug' => $otherTour->slug]) }}">{{ $otherTour->title }}</a>
                                                    </h5>
                                                </div>
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}


                    <style>
                        .blog-banner {
                            margin-bottom: 50px;
                            width: 100%;
                            overflow: hidden;
                            border-radius: 8px;
                            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
                        }



                        .main-container {
                            width: 100%;
                            max-width: 1200px;
                            margin: 0 auto;
                            padding: 20px;
                        }

                        .detail-blog-container {
                            display: flex;
                            flex-direction: column;
                            gap: 30px;
                            margin-bottom: 40px;
                            background-color: #fff;
                            border-radius: 8px;
                            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
                            padding: 25px;
                        }

                        .blog-left-container {
                            flex: 1;
                        }

                        .blog-left-item img {
                            width: 100%;
                            height: auto;
                            border-radius: 8px;
                            object-fit: cover;
                        }

                        .blog-left-content {
                            padding: 15px 0;
                        }

                        .blog-left-content h3 {
                            font-size: 24px;
                            color: #2c3e50;
                            margin-bottom: 15px;
                        }

                        .blog-left-content p {
                            font-size: 16px;
                            line-height: 1.7;
                            margin-bottom: 15px;
                            color: #444;
                        }

                        .blog-right-container {
                            width: 100%;
                        }

                        .recent-posts {
                            background-color: #f8f9fa;
                            padding: 20px;
                            border-radius: 8px;
                        }

                        .recent-posts h4 {
                            font-size: 20px;
                            margin-bottom: 20px;
                            padding-bottom: 10px;
                            border-bottom: 2px solid #e1e8ed;
                            color: #2c3e50;
                        }

                        .posts {
                            display: grid;
                            grid-template-columns: repeat(1, 1fr);
                            gap: 20px;
                        }

                        .post-cards {
                            background-color: #fff;
                            border-radius: 8px;
                            overflow: hidden;
                            transition: transform 0.3s ease;
                            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
                        }

                        .post-cards:hover {
                            transform: translateY(-5px);
                        }

                        .post-cards img {
                            width: 100%;
                            height: 180px;
                            object-fit: cover;
                        }

                        .post-cards h5 {
                            padding: 15px;
                            font-size: 16px;
                        }

                        .post-cards h5 a {
                            color: #2c3e50;
                            text-decoration: none;
                            transition: color 0.3s ease;
                        }

                        .post-cards h5 a:hover {
                            color: #3498db;
                        }

                        /* Media Queries for Responsiveness */
                        @media (min-width: 768px) {
                            .detail-blog-container {
                                flex-direction: row;
                            }

                            .blog-left-container {
                                flex: 2;
                                padding-right: 25px;
                            }

                            .blog-right-container {
                                flex: 1;
                                min-width: 300px;
                            }

                            .posts {
                                grid-template-columns: repeat(2, 1fr);
                            }
                        }

                        @media (min-width: 992px) {
                            .posts {
                                grid-template-columns: repeat(1, 1fr);
                            }
                        }

                        @media (max-width: 767px) {
                            .detail-blog-container {
                                padding: 15px;
                            }

                            .blog-left-content h3 {
                                font-size: 22px;
                            }

                            .recent-posts {
                                padding: 15px;
                            }
                        }
                    </style>

                    <div class="main-container">
                        <div class="detail-blog-container">
                            <div class="blog-left-container">
                                <div class="blog-left-item">
                                    <img src="{{ asset($tours->image) }}" alt="{{ $tours->title }}">
                                    <div class="blog-left-content">
                                        <h3>{{ $tours->title }}</h3>
                                        <div class="text-justify">{!! $tours->content !!}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-right-container">
                                <div class="recent-posts">
                                    <h4>Our Recent Posts</h4>
                                    <div class="posts">
                                        @foreach ($otherTours as $otherTour)
                                            <div class="post-cards">
                                                <img src="{{ asset($otherTour->image) }}" alt="{{ $otherTour->title }}">
                                                <h5>
                                                    <a href="{{ route('tourDetail', ['tour_slug' => $otherTour->slug]) }}">
                                                        {{ $otherTour->title }}
                                                    </a>
                                                </h5>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    {{-- <h4 class="text-center mb-2 mt-2">Similar Packages</h4>
            @if (isset($packages) && count($packages) > 0)
                <div class="swiper packages mt-4">
                    <div class="swiper-wrapper">

                        @foreach ($packages as $item)
                            <div class="swiper-slide">
                                <div class="tours-block-one">
                                    <div class="inner-box" style=" background-color: #fff;  border-radius: 10px;   box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.15);  padding: 20px;  margin: 10px 0; height: 550px;  ">
                                        <div class="image-box">
                                            @php
                                                // Check if package_image is a string (possibly JSON encoded) or already an array
                                                $images = is_string($item->package_image) ? json_decode($item->package_image, true) : (array)$item->package_image;
                                                $displayImage = $images[0] ?? null; // Get the first available image or null
                                            @endphp

                                            @if ($displayImage)
                                                <figure class="image">
                                                    <img src="{{ asset('storage/' . $displayImage) }}"
                                                        alt="{{ $item->package_name }}">
                                                </figure>
                                            @else
                                                <figure class="image">
                                                    <img src="{{ asset('path/to/default/image.jpg') }}"
                                                        alt="Default Image">
                                                </figure>
                                            @endif
                                        </div>
                                        <div class="lower-content" >
                                            <h6>{{ $item->package_country }}</h6>
                                            @if (count($item->itinerary))
                                                @foreach ($item->itinerary as $pi)
                                                    <h6>{{ $pi->days."D ".($pi->city->city_name ?? '') }}</h6>
                                                    <h6>{{ $item->package_type }}</h6>
                                                @endforeach
                                            @endif
                                            <h4><a href="{{ url('/package/' . $item->slug) }}">
                                                {!! $item->package_name !!}
                                            </a></h4>
                                            <h5>
                                                <i class="fa-solid fa-indian-rupee-sign"></i> {!! IND_money_format($item->package_offer_price) !!}
                                                <span class="sale-price"><i class="fa-solid fa-indian-rupee-sign"></i> {!! IND_money_format($item->package_price) !!}</span>
                                                <span class="offer-amount">Save <i class="fa-solid fa-indian-rupee-sign"></i> {{ IND_money_format($item->package_price - $item->package_offer_price) }}</span>
                                            </h5>
                                            <span class="day-time">
                                                <i class="icon-1"></i>{!! $item->package_duration_days !!} Days / {!! $item->package_duration_nights !!} Nights
                                            </span>
                                            <div class="link">
                                                <a href="{{ url('/package/' . $item->slug) }}">Explore more<i class="fas fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @else
                <span>Sorry no similar packs found</span>
            @endif --}}

                    <!-- related Tour Area start -->
                    <section class="destinations-area bgc-black pt-30 pb-70 rel z-1">
                        <div class="container-fluid">
                            <div class="row justify-content-center">
                                <div class="col-lg-12">
                                    <div class="section-title text-white text-center counter-text-wrap mb-30"
                                        data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                        <h2 class="popular-destination" data-aos="fade-up">Our Related Destinations</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">

                                <div class="swiper packages mt-4">
                                    <div class="swiper-wrapper">
                                        @if (isset($ourdestination) && count($ourdestination) > 0)
                            @foreach ($ourdestination as $item)
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
                            No Related Detination Found
                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- related Tour  Area end -->


                </div>
            </div>
    </section>

@endsection

@section('pageScript')
    <script type="text/javascript"></script>

@endsection
