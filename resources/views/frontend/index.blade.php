{{-- resources/views/home.blade.php --}}

@php
    $head_title = "Home || ravelo || ravelo PHP Template";
@endphp

@include('parts.layout.top-layout')
@include('parts.header.header')
@include('parts.home.hidden')
@include('parts.home.banner')
@include('parts.home.destinations')
@include('parts.home.about')
@include('parts.home.popular')
@include('parts.home.feature')
@include('parts.home.hotel')
@include('parts.home.mobile')
@include('parts.home.testimonial')
@include('parts.home.cta')
@include('parts.home.blog')
@include('parts.footer.footer')
@include('parts.layout.bottom-layout')
