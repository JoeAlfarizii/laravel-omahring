<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    
    <title>
        Omahring
        |
        @yield('title')
    </title>

    {{-- <meta name="description"
        content="{{ config('variables.templateDescription') ? config('variables.templateDescription') : '' }}" />
    <meta name="keywords"
        content="{{ config('variables.templateKeyword') ? config('variables.templateKeyword') : '' }}"> --}}
    <!-- laravel CRUD token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Canonical SEO -->
    {{-- <link rel="canonical" href="{{ config('variables.productPage') ? config('variables.productPage') : '' }}"> --}}
    <!-- Favicon -->
    {{-- <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/favicon.ico') }}" /> --}}
    {{-- <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/icons/chauffeur/favicon.jpeg') }}" /> --}}
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/global-frontend.css') }}"> --}}

    <!-- Include Styles -->
    <!-- $isFront is used to append the front layout styles only on the front layout otherwise the variable will be blank -->
    @include('client/layouts/sections/styles')

    @include('client/layouts/sections/scriptsIncludes')
</head>
<body>
    <!-- Layout Content -->
    @yield('layoutContent')
    <!--/ Layout Content -->

    <!-- Include Scripts -->
    <!-- $isFront is used to append the front layout scripts only on the front layout otherwise the variable will be blank -->
    @include('client/layouts/sections/scripts')
</body>
</html>