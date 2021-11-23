<!--

=========================================================
* Swipe - Mobile App One Page Bootstrap 5 Template
=========================================================

* Product Page: https://themesberg.com/product/bootstrap/swipe-free-mobile-app-one-page-bootstrap-5-template
* Copyright 2020 Themesberg (https://www.themesberg.com)

* Coded by https://themesberg.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. Contact us if you want to remove it.

-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
    <!-- Primary Meta Tags -->
    <title>{{ config('app.name') }}</title>
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta content="Swipe - Mobile App One Page Bootstrap 5 Template" name="title">
    <meta content="Themesberg" name="author">
    <meta content="Free Mobile Application One Page Bootstrap 5 Template by Themesberg" name="description">
    <meta
        content="bootstrap, bootstrap 5, bootstrap 5 one page, bootstrap 5 mobile application, one page template, bootstrap 5 one page template, themesberg, themesberg one page, one page template bootstrap 5"
        name="keywords"/>
    <link href="https://themesberg.com/product/bootstrap/swipe-free-mobile-app-one-page-bootstrap-5-template"
          rel="canonical">

    <!-- Open Graph / Facebook -->
    <meta content="website" property="og:type">
    <meta content="https://demo.themesberg.com/swipe/" property="og:url">
    <meta content="Swipe - Mobile App One Page Bootstrap 5 Template" property="og:title">
    <meta content="Free Mobile Application One Page Bootstrap 5 Template by Themesberg" property="og:description">
    <meta content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/swipe/swipe-thumbnail.jpg"
          property="og:image">

    <!-- Twitter -->
    <meta content="summary_large_image" property="twitter:card">
    <meta content="https://demo.themesberg.com/swipe/" property="twitter:url">
    <meta content="Swipe - Mobile App One Page Bootstrap 5 Template" property="twitter:title">
    <meta content="Free Mobile Application One Page Bootstrap 5 Template by Themesberg" property="twitter:description">
    <meta content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/swipe/swipe-thumbnail.jpg"
          property="twitter:image">

    <!-- Favicon -->
    <link href="{{ asset('theme/assets/img/favicon/apple-touch-icon.png') }}" rel="apple-touch-icon" sizes="120x120">
    <link href="{{ asset('theme/assets/img/favicon/favicon-32x32.png') }}" rel="icon" sizes="32x32" type="image/png">
    <link href="{{ asset('theme/assets/img/favicon/favicon-16x16.png') }}" rel="icon" sizes="16x16" type="image/png">
    <link href="{{ asset('theme/assets/img/favicon/site.webmanifest') }}" rel="manifest">
    <link color="#ffffff" href="{{ asset('theme/assets/img/favicon/safari-pinned-tab.svg') }}" rel="mask-icon">
    <meta content="#ffffff" name="msapplication-TileColor">
    <meta content="#ffffff" name="theme-color">

    <!-- Fontawesome -->
    <link href="{{ asset('theme/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet"
          type="text/css">

    <!-- Swipe CSS -->
    <link href="{{ asset('theme/css/swipe.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet" type="text/css">

    <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->

</head>

<body>
<header class="header-global" id="home">
    @include('partials.nav')
</header>
<main>
    <!-- Hero -->
    <section class="section section-header text-dark pb-md-8">
        <div class="container-fluid w-75">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 text-center mb-5 mb-md-7">
                    <p class="lead mb-4 mb-lg-5 text-left">
                        Fakem is a open source fake user generator which is the most easy to use user generator
                        available out there.
                        It also provide you with ready to use temporary email inbox, available at just one click.
                        Generate names, addresses, about content etc, for absolute free of any charge.
                    </p>
                    <div>
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<footer class="footer py-5 pt-lg-6">
    <div class="sticky-right">
        <a class="icon icon-primary icon-md btn btn-icon-only btn-white border border-soft shadow-soft animate-up-3"
           href="#home">
            <span class="fas fa-chevron-up"></span>
        </a>
    </div>
    <div class="container">
        <hr class="bg-light my-2">
        <div class="row pt-2 pt-lg-5">
            <div class="col mb-md-0">
                <div class="d-flex text-center justify-content-center align-items-center" role="contentinfo">
                    <p class="font-weight-normal font-small mb-0">Copyright © fakem.dev {{ date('Y') }}-<span
                            class="current-year">2020</span>. All rights reserved.</p>

                </div>
                <div class=" text-center justify-content-center align-items-center">
                    created by: <a target="_blank" href="https://github.com/msamgan">msamgan</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Core -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="{{ asset('theme/vendor/popper.js/dist/umd/popper.min.js') }}"></script>
<script src="{{ asset('theme/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('theme/vendor/headroom.js/dist/headroom.min.js') }}"></script>

<!-- Vendor JS -->
<script src="{{ asset('theme/vendor/onscreen/dist/on-screen.umd.min.js') }}"></script>
<script src="{{ asset('theme/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js') }}"></script>

<script async defer src="{{ url('https://buttons.github.io/buttons.js') }}"></script>

<!-- Swipe JS -->
<script src="{{ asset('theme/assets/js/swipe.js') }}"></script>
<script src="{{ asset('js/notify.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
