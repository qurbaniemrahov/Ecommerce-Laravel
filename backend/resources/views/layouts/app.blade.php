<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="UTF-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="{{ asset('images/favicon.png') }}" rel="shortcut icon">
    <title>Ludus - Electronics, Apparel, Computers, Books, DVDs & more</title>

    <!--====== Google Font ======-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">

    <!--====== Vendor Css ======-->
    <link rel="stylesheet" href="{{ asset('css/vendor.css') }}">

    <!--====== Utility-Spacing ======-->
    <link rel="stylesheet" href="{{ asset('css/utility.css') }}">

    <!--====== App ======-->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

<style>
body {
    margin: 0;
    font-family: Arial, sans-serif;
}

.slider {
    width: min(1200px, calc(100% - 32px));
    height: clamp(320px, 52vw, 560px);
    margin: 40px auto;
    position: relative;
    overflow: hidden;
    border-radius: 24px;
    background: #f3f4f6;
    box-shadow: 0 20px 55px rgba(15, 23, 42, 0.16);
}

.slides {
    display: flex;
    height: 100%;
    transition: transform 0.6s ease-in-out;
}

.slide-item {
    min-width: 100%;
    height: 100%;
    position: relative;
}

.slides img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.slide-caption {
    position: absolute;
    left: 32px;
    bottom: 32px;
    max-width: 420px;
    padding: 18px 22px;
    border-radius: 18px;
    background: rgba(15, 23, 42, 0.56);
    color: #fff;
    backdrop-filter: blur(8px);
}

.slide-caption h2 {
    margin: 0 0 8px;
    font-size: clamp(1.4rem, 2vw, 2.2rem);
    color: #fff;
}

.slide-caption p {
    margin: 0;
    color: rgba(255, 255, 255, 0.82);
}

.slider-empty {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100%;
    padding: 24px;
    text-align: center;
    color: #475569;
    background: linear-gradient(135deg, #e2e8f0, #f8fafc);
}

.prev, .next {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    z-index: 2;
    width: 52px;
    height: 52px;
    border-radius: 50%;
    background: rgba(15, 23, 42, 0.55);
    color: white;
    border: none;
    cursor: pointer;
    font-size: 20px;
}

.prev { left: 10px; }
.next { right: 10px; }

.prev:hover, .next:hover {
    background: rgba(15, 23, 42, 0.85);
}

@media (max-width: 767px) {
    .slider {
        width: calc(100% - 20px);
        border-radius: 18px;
    }

    .slide-caption {
        left: 16px;
        right: 16px;
        bottom: 16px;
        max-width: none;
        padding: 14px 16px;
    }
}
</style>

    <base href="{{ asset('') }}">
    @stack('styles')
</head>
<body class="config">

    <div class="preloader is-active">
        <div class="preloader__wrap">

            <img class="preloader__img" src="images/preloader.png" alt=""></div>
    </div>


    <!--====== Main App ======-->
    <div id="app">
        @include('partials.header')

        @yield('content')

        @include('partials.footer')
        @include('partials.modals')
    </div>
    <!--====== End - Main App ======-->

    @include('partials.scripts')
    @stack('scripts')
</body>
</html>
