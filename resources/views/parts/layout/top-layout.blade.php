<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>@yield('title', 'FLYTRP')</title>

    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logos/favicon.png') }}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
    
    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-5.14.0.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>

<body>
    <div class="page-wrapper {{ isset($for_sidebar_menu) && !empty($for_sidebar_menu) ? 'for-sidebar-menu' : '' }}">
    
        <!-- Preloader -->
        <div class="preloader">
            <div class="custom-loader"></div>
        </div>

        {{-- Header --}}
        @include('parts.header.header3')

        {{-- Page Title --}}
        {{-- @include('parts.page-title') --}}

        {{-- Content section --}}
        @yield('content') 
        
        {{-- Footer --}}
        @include('parts.footer.footer3')

        {{-- Bottom layout --}}
        @include('parts.layout.bottom-layout')
    </div>
</body>
</html>
