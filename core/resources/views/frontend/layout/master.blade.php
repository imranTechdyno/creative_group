<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        html,
        body {
            width: 100%;
            height: 100%;
            margin: 0px;
            padding: 0px;
            overflow-x: hidden;
        }
    </style>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>
        {{-- @if (@$general->sitename)
            {{ __(@$general->sitename) . '-' }}
        @endif --}}
        {{ __(@$pageTitle) }}
    </title>

    <!-- HTML Meta Tags -->
    <meta name="description" content=" {{ __(@$seo_description) }}">

    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content=" {{ __(@$pageTitle) }}">
    <meta itemprop="description" content=" {{ __(@$seo_description) }}">
    <meta itemprop="image" content="{{ getFile('logo', @$general->logo) }}">

    <!-- Facebook Meta Tags -->
    <meta property="og:type" content="website">
    <meta property="og:title" content=" {{ __(@$pageTitle) }}">
    <meta property="og:description" content=" {{ __(@$seo_description) }}">
    <meta property="og:image" content="{{ getFile('logo', @$general->logo) }}">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content=" {{ __(@$pageTitle) }}">
    <meta name="twitter:description" content=" {{ __(@$seo_description) }}">
    <meta name="twitter:image" content="{{ getFile('logo', @$general->logo) }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="../../cdn-cgi/apps/head/OkbNSnEV_PNHTKP2_EYPrFNyZ8Q.js"></script>
    <link rel="shortcut icon" type="image/png" href="{{ getFile('icon', @$general->favicon) }}">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="{{ asset('asset/frontend/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('asset/frontend/css/magnific-popup.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('asset/frontend/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('asset/frontend/css/flexslider.css') }}" />
    <link rel="stylesheet" href="{{ asset('asset/frontend/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('asset/frontend/css/owl.theme.min.css') }}" />
    <link href="{{ asset('asset/frontend/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('asset/frontend/css/responsive.css') }}" rel="stylesheet" />
    @stack('style')
</head>

<body class="homepage">
    <div class="loader-wrapper">
        <div class="sk-cube-grid">
            <div class="sk-cube sk-cube1"></div>
            <div class="sk-cube sk-cube2"></div>
            <div class="sk-cube sk-cube3"></div>
            <div class="sk-cube sk-cube4"></div>
            <div class="sk-cube sk-cube5"></div>
            <div class="sk-cube sk-cube6"></div>
            <div class="sk-cube sk-cube7"></div>
            <div class="sk-cube sk-cube8"></div>
            <div class="sk-cube sk-cube9"></div>
        </div>
    </div>
    <div class="wrapper">
        @include('frontend.layout.header')

        @yield('content')

        @include('frontend.layout.footer')

        @include('frontend.layout.js')
        @include('sweetalert::alert')



</body>

</html>
