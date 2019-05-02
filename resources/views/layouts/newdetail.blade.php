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
            @yield('section')
            <!--  Footer Begin -->
            @include('common.footer')
            <!--  Footer Ends -->
            @include('common.js')
            @yield('scripts')
        </body>
</html>
