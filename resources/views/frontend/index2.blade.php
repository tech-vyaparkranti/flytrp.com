{{-- resources/views/home2.blade.php --}}

@php
    $head_title = "home2 || ravelo || ravelo PHP Template";
    $for_sidebar_menu = true;
@endphp

@include('parts.layout.top-layout')
@include('parts.header.header2')

@include('parts.home2.hero')
@include('parts.home2.banner')
@include('parts.home2.about')
@include('parts.home2.visiting')
@include('parts.home2.popular')
@include('parts.home2.destinations')
@include('parts.home2.cta')
@include('parts.home2.feature')
@include('parts.home2.team')
@include('parts.home2.city')
@include('parts.home2.newsletter')
@include('parts.home2.blog')

@include('parts.footer.footer2')
@include('parts.layout.bottom-layout')
