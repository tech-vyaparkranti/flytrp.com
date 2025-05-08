@extends('layouts.webSite')

@section('title', 'Tours')
@section('content')


    <!-- Destinations Area start -->
    <section class="tour-grid-page py-100 rel z-2">
        <div class="blog-banner" style="margin-bottom:50px; ">
            <img src="./assets/images/Banner_HD.png" alt="" style="max-height:200px;width:100%; object-fit:cover;">
        </div>
        <div class="container">

            
            <hr class="mb-50">
            <div class="row">
                <h2 class="text-center pb-20"> Popular Destinations</h2>
                @if (!empty($getTours) && count($getTours))
                            @foreach ($getTours as $item)
                        <div class="col-xl-4 col-md-6">
                            <div class="destination-item tour-grid style-three bgc-lighter" data-aos="fade-up"
                                data-aos-duration="1500" data-aos-offset="50">
                                <div class="image">
                                    {{-- @php
                                        // Ensure package_image is a valid JSON string before decoding
                                        $images = is_string($item->image)
                                            ? json_decode($item->image, true)
                                            : $item->image;
        
                                        // Check if images is a valid array and get the first image
                                        $displayImage = is_array($images) && !empty($images) ? $images[0] : null;
                                    @endphp --}}
        
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
                    <div class="col-xl-4 col-md-6">
                        <div class="destination-item tour-grid style-three bgc-lighter" data-aos="fade-up"
                            data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <!-- <span class="badge bgc">Featured</span> -->
                                <!-- <a href="#" class="heart"><i class="fas fa-heart"></i></a> -->
                                <img src="./assets/images/gallery1.jpg" alt="Tour List">
                            </div>
                            <div class="content">
                                <div class="destination-header">
                                    <span class="location"><i class="fal fa-map-marker-alt"></i> Bali, Indonesia</span>
                                    <div class="ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <h5><a href="{{ route('tourPage') }}">Bay Cruise lake trip by Boat in Bali,
                                        Indonesia</a></h5>
                                <p>Bali, Indonesia, is tropical paradise renowned breathtaking beaches and landscapes</p>
                                <ul class="blog-meta">
                                    <li><i class="far fa-clock"></i> 3 days 2 nights</li>
                                    <li><i class="far fa-user"></i> 5-8 guest</li>
                                </ul>
                                <div class="destination-footers">
                                    <!-- <span class="price"><span>$58.00</span>/person</span> -->
                                    <a href="{{ route('tourPage') }}" class="theme-btn style-two style-three">
                                        <span data-hover="Book Now text-center">View More</span>
                                        <i class="fal fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="destination-item tour-grid style-three bgc-lighter" data-aos="fade-up"
                            data-aos-duration="1500" data-aos-delay="50" data-aos-offset="50">
                            <div class="image">
                                <!-- <span class="badge bgc">Featured</span> -->
                                <!-- <a href="#" class="heart"><i class="fas fa-heart"></i></a> -->
                                <img src="./assets/images/gallery2.jpg" alt="Tour List">
                            </div>
                            <div class="content">
                                <div class="destination-header">
                                    <span class="location"><i class="fal fa-map-marker-alt"></i> Rome, Italy</span>
                                    <div class="ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <h5><a href="{{ route('tourPage') }}">Buenos Aires, Calafate & Ushuaia, Rome,
                                        Italy</a></h5>
                                <p>Bali, Indonesia, is tropical paradise renowned breathtaking beaches and landscapes</p>
                                <ul class="blog-meta">
                                    <li><i class="far fa-clock"></i> 3 days 2 nights</li>
                                    <li><i class="far fa-user"></i> 5-8 guest</li>
                                </ul>
                                <div class="destination-footers">
                                    <!-- <span class="price"><span>$58.00</span>/person</span> -->
                                    <a href="{{ route('tourPage') }}" class="theme-btn style-two style-three">
                                        <span data-hover="Book Now">View More</span>
                                        <i class="fal fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="destination-item tour-grid style-three bgc-lighter" data-aos="fade-up"
                            data-aos-duration="1500" data-aos-delay="100" data-aos-offset="50">
                            <div class="image">
                                <!-- <span class="badge bgc">Featured</span> -->
                                <!-- <a href="#" class="heart"><i class="fas fa-heart"></i></a> -->
                                <img src="./assets/images/gallery3.jpg" alt="Tour List">
                            </div>
                            <div class="content">
                                <div class="destination-header">
                                    <span class="location"><i class="fal fa-map-marker-alt"></i> Bali, Indonesia</span>
                                    <div class="ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <h5><a href="{{ route('tourPage') }}">Bay Cruise lake trip by Boat in Bali,
                                        Indonesia</a></h5>
                                <p>Bali, Indonesia, is tropical paradise renowned breathtaking beaches and landscapes</p>
                                <ul class="blog-meta">
                                    <li><i class="far fa-clock"></i> 3 days 2 nights</li>
                                    <li><i class="far fa-user"></i> 5-8 guest</li>
                                </ul>
                                <div class="destination-footers">
                                    <!-- <span class="price"><span>$58.00</span>/person</span> -->
                                    <a href="{{ route('tourPage') }}" class="theme-btn style-two style-three">
                                        <span data-hover="Book Now">View More</span>
                                        <i class="fal fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="destination-item tour-grid style-three bgc-lighter" data-aos="fade-up"
                            data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <!-- <span class="badge bgc">Featured</span> -->
                                <!-- <a href="#" class="heart"><i class="fas fa-heart"></i></a> -->
                                <img src="./assets/images/gallery4.jpg" alt="Tour List">
                            </div>
                            <div class="content">
                                <div class="destination-header">
                                    <span class="location"><i class="fal fa-map-marker-alt"></i> Rome, Italy</span>
                                    <div class="ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <h5><a href="{{ route('tourPage') }}">Buenos Aires, Calafate & Ushuaia, Rome,
                                        Italy</a></h5>
                                <p>Bali, Indonesia, is tropical paradise renowned breathtaking beaches and landscapes</p>
                                <ul class="blog-meta">
                                    <li><i class="far fa-clock"></i> 3 days 2 nights</li>
                                    <li><i class="far fa-user"></i> 5-8 guest</li>
                                </ul>
                                <div class="destination-footers">
                                    <!-- <span class="price"><span>$58.00</span>/person</span> -->
                                    <a href="{{ route('tourPage') }}" class="theme-btn style-two style-three">
                                        <span data-hover="Book Now">View More</span>
                                        <i class="fal fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="destination-item tour-grid style-three bgc-lighter" data-aos="fade-up"
                            data-aos-duration="1500" data-aos-delay="50" data-aos-offset="50">
                            <div class="image">
                                <span class="badge bgc-pink">Featured</span>
                                <!-- <a href="#" class="heart"><i class="fas fa-heart"></i></a> -->
                                <img src="./assets/images/gallery5.jpg" alt="Tour List">
                            </div>
                            <div class="content">
                                <div class="destination-header">
                                    <span class="location"><i class="fal fa-map-marker-alt"></i> Rome, Italy</span>
                                    <div class="ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <h5><a href="{{ route('tourPage') }}">Buenos Aires, Calafate & Ushuaia, Rome,
                                        Italy</a></h5>
                                <p>Bali, Indonesia, is tropical paradise renowned breathtaking beaches and landscapes</p>
                                <ul class="blog-meta">
                                    <li><i class="far fa-clock"></i> 3 days 2 nights</li>
                                    <li><i class="far fa-user"></i> 5-8 guest</li>
                                </ul>
                                <div class="destination-footers">
                                    <!-- <span class="price"><span>$58.00</span>/person</span> -->
                                    <a href="{{ route('tourPage') }}" class="theme-btn style-two style-three">
                                        <span data-hover="Book Now">View More</span>
                                        <i class="fal fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="destination-item tour-grid style-three bgc-lighter" data-aos="fade-up"
                            data-aos-duration="1500" data-aos-delay="100" data-aos-offset="50">
                            <div class="image">
                                <span class="badge bgc">Featured</span>
                                <!-- <a href="#" class="heart"><i class="fas fa-heart"></i></a> -->
                                <img src="./assets/images/gallery6.jpg" alt="Tour List">
                            </div>
                            <div class="content">
                                <div class="destination-header">
                                    <span class="location"><i class="fal fa-map-marker-alt"></i> Bali, Indonesia</span>
                                    <div class="ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <h5><a href="{{ route('tourPage') }}">Bay Cruise lake trip by Boat in Bali,
                                        Indonesia</a></h5>
                                <p>Bali, Indonesia, is tropical paradise renowned breathtaking beaches and landscapes</p>
                                <ul class="blog-meta">
                                    <li><i class="far fa-clock"></i> 3 days 2 nights</li>
                                    <li><i class="far fa-user"></i> 5-8 guest</li>
                                </ul>
                                <div class="destination-footers">
                                    <!-- <span class="price"><span>$58.00</span>/person</span> -->
                                    <a href="{{ route('tourPage') }}" class="theme-btn style-two style-three">
                                        <span data-hover="Book Now">View More</span>
                                        <i class="fal fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                
            </div>
        </div>
    </section>
    
@endsection
