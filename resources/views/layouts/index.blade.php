<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{config('app.name')}}</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="{{asset('public/assets/img/logo.png')}}" type="image/gif" sizes="16x16">
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&amp;amp;subset=latin-ext" rel="stylesheet">
        <!-- All css file -->
        @include('common.css')
        <!-- All css file -->
        @yield('style')
    </head>
        <body class="body--home">
            <!-- Menu -->
            @include('common.navigation')
            <!-- Menu -->
            <!-- Banner begin -->
            @include('common.banner')
            <!-- Banner end -->
            <!-- Partner start -->
            @include('common.partner')
            <!-- partner end -->
            <!-- Appreciations begin -->
            @include('common.appreciation')
            <!-- Appreciations begin -->
            <!-- About us begin -->
            <!--@include('common.aboutus')-->
            <!-- About Us begin -->
            <!-- Corporate Business begin -->
            <!--@include('common.corporateBusiness')-->
            <!-- Corporate Business begin -->
            <!-- Counter begin -->
            <!--@include('common.counter')-->
            <!-- Counter begin -->
            <!-- Featured Services begin -->
            @include('common.featured_service')
            <!-- Featured Services begin -->
            <!-- main our Services begin -->
            @include('common.main_our_services')
            <!-- Team Member begin -->
            <!-- Testimonial begin -->
            @include('common.testimonial')
            <!-- Testimonial End -->
            <!-- @include('common.team_members')-->
            <!-- App Offer box begin -->
            @include('common.app_offer_box')
            <!-- Latest News begin -->
            @yield('latest_new_section')
            <!-- App Brands begin -->
            @include('common.app_brands')
            <!-- Main map wrapper begin -->
            @include('common.main_map_wrapper')
            <!-- Main map bottom bar begin -->
            @include('common.main_map_bottom_bar')
            <!-- Main map bottom bar end -->

            <!--  Footer Begin -->
            @include('common.footer')
            <!--  Footer Ends -->
            @include('common.js')
            @yield('scripts')
        </body>
</html>
