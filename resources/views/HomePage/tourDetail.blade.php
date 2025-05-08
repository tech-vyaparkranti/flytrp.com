@extends('layouts.webSite')

@section('title', 'Tours Details')
@section('content')
<div id="about">
    <div class="default-content pt-4  our-service-page">
        <div class="custom-container">

        <div class="main-container">
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
                            @foreach($otherTours as $otherTour)
                            <a href="{{ route('tourDetail', ['tour_slug' => $otherTour->slug]) }}">
                            <div class="post-cards">
                                <img src="{{ asset($otherTour->image) }}" alt="{{ $otherTour->title }}">
                                <h5><a href="{{ route('tourDetail', ['tour_slug' => $otherTour->slug]) }}">{{ $otherTour->title }}</a></h5>
                            </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- <h4 class="text-center mb-2 mt-2">Similar Packages</h4>
            @if(isset($packages) && count($packages) > 0)
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
                                            @if(count($item->itinerary))
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
            <section class="destinations-area bgc-black pt-100 pb-70 rel z-1">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="section-title text-white text-center counter-text-wrap mb-70" data-aos="fade-up"
                                data-aos-duration="1500" data-aos-offset="50">
                                <h2 class="popular-destination" data-aos="fade-up">Related Packages</h2>
                                <p>One site most popular experience you’ll remember</p>
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
                                                            <img src="{{ asset('path/to/default/image.jpg') }}" alt="Default Image">
                                                            {{-- </figure> --}}
                                                        @endif
            
                                                        {{-- <div class="ratting">{{ $item->tour_type }}</div> --}}
                                                    </div>
                                                    <div class="content tourpackage">
                                                        {{-- <span class="location">
                                                            <i class="fal fa-map-marker-alt"></i> {{ $item->package_country }}
                                                        </span> --}}
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
                                <span>No Similar Packages found.</span>
                            {{-- <div class="col-xxl-3 col-xl-4 col-md-6">
                                <div class="destination-item" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500"
                                    data-aos-offset="50">
                                    <div class="image">
                                        <div class="ratting">Pilgrimage</div>
                                        <!-- <a href="#" class="heart"><i class="fas fa-heart"></i></a> -->
                                        <img src="./assets/images/destination2.jpg" alt="Destination">
                                    </div>
                                    <div class="content">
                                        <span class="location"><i class="fal fa-map-marker-alt"></i> Italy</span>
                                        <h5><a href="{{ route('destinationDetailpage', ['destination_slug' => $item->destination_slug]) }}">San Giovanni Rotondo</a></h5>
                                        <span class="time">3 days 2 nights</span>
                                    </div>
                                    <div class="destination-footer">
                                        <span class="price"><span class="span-time">Rs. 6300</span>/per person</span>
                                        <a href="{{ route('tourpage') }}" class="read-more">Book Now <i
                                                class="fal fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-md-6">
                                <div class="destination-item" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500"
                                    data-aos-offset="50">
                                    <div class="image">
                                        <div class="ratting"></i>Religious</div>
                                        <!-- <a href="#" class="heart"><i class="fas fa-heart"></i></a> -->
                                        <img src="./assets/images/destination4.jpg" alt="Destination">
                                    </div>
                                    <div class="content">
                                        <span class="location"><i class="fal fa-map-marker-alt"></i>France</span>
                                        <h5><a href="{{ route('destinationDetailpage', ['destination_slug' => $item->destination_slug]) }}">Notre-Dame de la Garde</a></h5>
                                        <span class="time">3 days 2 nights</span>
                                    </div>
                                    <div class="destination-footer">
                                        <span class="price"><span class="span-time">Rs. 4200</span>/per person</span>
                                        <a href="{{ route('tourpage') }}" class="read-more">Book Now <i
                                                class="fal fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 col-md-6">
                                <div class="destination-item" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1500"
                                    data-aos-offset="50">
                                    <div class="image">
                                        <div class="ratting"></i>Leisure </div>
                                        <!-- <a href="#" class="heart"><i class="fas fa-heart"></i></a> -->
                                        <img src="./assets/images/destination3.jpg" alt="Destination">
                                    </div>
                                    <div class="content">
                                        <span class="location"><i class="fal fa-map-marker-alt"></i> Rome</span>
                                        <h5><a href="{{ route('destinationDetailpage', ['destination_slug' => $item->destination_slug]) }}">otium</a></h5>
                                        <span class="time">3 days 2 nights</span>
                                    </div>
                                    <div class="destination-footer">
                                        <span class="price"><span class="span-time">Rs. 5200</span>/per person</span>
                                        <a href="{{ route('tourpage') }}" class="read-more">Book Now <i
                                                class="fal fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div> --}}
                            @endif
                            </div>
                        </div>
                    </div>
                </div>
            </section>

    </div>
</div>

@endsection

@section('pageScript')
<script type="text/javascript"></script>

@endsection
