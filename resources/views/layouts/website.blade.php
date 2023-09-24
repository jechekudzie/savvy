<!doctype html>
<html lang="en">

<head>
    <title>Savvy App</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="icon" href="{{ asset('website/assets/images/favicon.png') }}" type="image/gif" sizes="20x20">

    <!-- Fancybox css -->
    <link rel="stylesheet" href="{{ asset('website/assets/css/jquery.fancybox.min.css') }}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{ asset('website/assets/css/animate.css') }}">
    <!-- font icon -->
    <link rel="stylesheet" href="{{ asset('website/assets/css/all.min.css') }}">
    <!-- Jquery UI -->
    <link rel="stylesheet" href="{{ asset('website/assets/css/jquery-ui.css') }}">
    <!-- Bootstarp icons CSS -->
    <link rel="stylesheet" href="{{ asset('website/assets/css/bootstrap-icons.css') }}">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="{{ asset('website/assets/css/swiper-bundle.min.css') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('website/assets/css/bootstrap.min.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('website/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/responsive.css') }}">


</head>

<body>
<!-- Start Preloader Area -->
<div class="preloader">
    <div class="loader">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<!-- End Preloader Area -->

<div class="schedule-sidebar">
    <div class="schedule-sidebar-wrapper">
        <div class="sb-toggle-icon">
            <i class="bi bi-x-lg"></i>
        </div>

        <div class="sb-next-event">
            <h3>Next Event</h3>
            <div class="sb-next-event-wrap" id="timer">
                <div class="sb-single-count">
                    <h3 id="days">308</h3>
                    <p>Days</p>
                </div>
                <div class="sb-single-count">
                    <h3 id="hours">10</h3>
                    <p>Hour</p>
                </div>
                <div class="sb-single-count">
                    <h3 id="minutes">37</h3>
                    <p>Miniute</p>
                </div>
                <div class="sb-single-count">
                    <h3 id="seconds">14</h3>
                    <p>Secoend</p>
                </div>
            </div>
        </div>


        <div class="sb-speakers-wrap">
            <h3>Our Honorable Speaker</h3>
            <div class="sb-speakers-slider swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="sb-speaker-card">
                            <div class="sb-speaker-thumb">
                                <img src="assets/images/speaker/sb-s1.png" alt="">
                            </div>
                            <div class="sb-speaker-content">
                                <h4>Santiago Axel</h4>
                                <span>Marketing</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="sb-speaker-card">
                            <div class="sb-speaker-thumb">
                                <img src="assets/images/speaker/sb-s2.png" alt="">
                            </div>
                            <div class="sb-speaker-content">
                                <h4>Easton Cooper</h4>
                                <span>Marketing</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="sb-speaker-card">
                            <div class="sb-speaker-thumb">
                                <img src="assets/images/speaker/sb-s3.png" alt="">
                            </div>
                            <div class="sb-speaker-content">
                                <h4>Sloio Axel</h4>
                                <span>Marketing</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="speaker-sb-pagination d-lg-flex d-none"></div>
            </div>
        </div>

        <div class="sb-about">
            <div class="footer-logo"><img src="assets/images/logo.png" alt=""></div>
            <p>Cras semper, massa vel aliquam luctus, eros odio tempor turpis, ac placerat metus tortor eget magna. Donec mattis posuere pharetra Donec vestibulum.</p>
            <ul class="footer-social-icon d-flex">
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
            </ul>
        </div>
    </div>
</div>

<!-- ===============  topbar area start  =============== -->
<div class="topbar-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 d-lg-block d-none">
                <ul class="topbar-contact-wrap">
                    <li> <a href="#"> <i class="bi bi-geo-alt"></i> 1356 Broadway, New York</a></li>
                    <li> <a href="tel:6719251352587"><i class="bi bi-telephone-plus"></i> (671) 925-1352587</a></li>
                    <li> <a href="mailto:info@example.com"> <i class="bi bi-envelope-open"></i> info@example.com</a></li>
                </ul>
            </div>
            <div class="col-lg-5">
                <ul class="topbar-social-links justify-content-lg-end justify-content-center">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- ===============  topbar area end  =============== -->

<!-- ===============  header style two start =============== -->
<header>
    <div class="header-area header-style-two">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-lg-12 col-md-12 col-sm-12 col-xs-12 d-xl-flex align-items-center">
                    <div class="logo d-flex align-items-center justify-content-between">
                        <a href="index.html"><img src="assets/images/logo.png" alt="logo"></a>

                        <div class="mobile-menu d-flex ">

                            <a href="javascript:void(0)" class="hamburger d-block d-xl-none">
                                <span class="h-top"></span>
                                <span class="h-middle"></span>
                                <span class="h-bottom"></span>
                            </a>

                        </div>
                    </div>
                </div>

                <div class="col-xl-7 col-lg-8 col-md-8 col-sm-6 col-xs-6">

                    <nav class="main-nav">
                        <div class="inner-logo d-xl-none">
                            <a href="#"><img src="assets/images/logo-v2.png" alt=""></a>
                        </div>
                        <ul>
                            <!-- <li><a href="index.html" class="active">Home <span>01</span> </a></li>  -->
                            <li class="has-child-menu">
                                <a href="javascript:void(0)" class="active">Home <span>02</span></a>
                                <i class="fl flaticon-plus">+</i>
                                <ul class="sub-menu">
                                    <li><a href="index.html">Home One</a></li>
                                    <li><a href="index2.html">Home Two</a></li>
                                </ul>
                            </li>
                            <li><a href="about.html">About <span>01</span></a></li>

                            <li class="has-child-menu">
                                <a href="javascript:void(0)">Events <span>03</span></a>
                                <i class="fl flaticon-plus">+</i>
                                <ul class="sub-menu">
                                    <li><a href="event.html">Event Grid</a></li>
                                    <li><a href="event-sidebar.html">Event Sidebar</a></li>
                                    <li><a href="event-details.html">Event Details</a></li>
                                </ul>
                            </li>
                            <li class="has-child-menu">
                                <a href="javascript:void(0)">Spekars <span>03</span></a>
                                <i class="fl flaticon-plus">+</i>
                                <ul class="sub-menu">
                                    <li><a href="speaker.html">Speaker Grid</a></li>
                                    <li><a href="speaker-topbar.html">Speaker Topbar</a></li>
                                    <li><a href="speaker-details.html">Speaker Details</a></li>
                                </ul>
                            </li>
                            <li class="has-child-menu">
                                <a href="javascript:void(0)">Pages <span>05</span></a>
                                <i class="fl flaticon-plus">+</i>
                                <ul class="sub-menu">
                                    <li><a href="schedule.html">Schedule</a></li>
                                    <li><a href="gallary.html">Gallary</a></li>
                                    <li><a href="pricing.html">Pricing</a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                    <li><a href="404.html">404</a></li>
                                </ul>
                            </li>
                            <li class="has-child-menu">
                                <a href="javascript:void(0)">Blog <span>04</span></a>
                                <i class="fl flaticon-plus">+</i>
                                <ul class="sub-menu">
                                    <li><a href="blog.html">Blog Grid</a></li>
                                    <li><a href="blog-sidebar.html">Blog Sidebar</a></li>
                                    <li><a href="blog-standard.html">Blog Standard</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact <span>01</span></a></li>
                        </ul>

                        <div class="inner-contact-wrap d-lg-none">
                            <div class="innter-contact-box"> <a href="#"> <i class="bi bi-geo-alt"></i> 1356 Broadway, New York</a></div>
                            <div class="innter-contact-box"> <a href="tel:6719251352587"><i class="bi bi-telephone-plus"></i> (671) 925-1352587</a></div>
                            <div class="innter-contact-box"> <a href="mailto:info@example.com"> <i class="bi bi-envelope-open"></i> info@example.com</a></div>
                        </div>

                        <div class="inner-btn d-xl-none">
                            <a href="event-details.html" class="primary-btn-fill">Get Ticket</a>
                        </div>

                    </nav>
                </div>

                <div class="col-xl-3 col-2 d-none d-xl-block">
                    <div class="nav-right h-100 d-flex align-items-center justify-content-end">
                        <ul class="d-flex align-items-center nav-right-list">
                            <li class="nav-btn">
                                <a class="primary-btn-fill" href="event-details.html">Get Ticket</a>
                            </li>

                            <li class="sidebar-style-two">
                                <a href="#"><i class="bi bi-columns-gap"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
<!-- ===============  header style two end =============== -->

@yield('content')

<!-- ===============  Newslatter area start =============== -->
<div class="newslatter-style-two mt-96">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 justify-content-center">
                <div class="newslatter-style-two-bg">
                    <div class="newslatter text-center">
                        <h3>Subscribe Our Newsletter</h3>
                        <h5>Don’t Miss Our Feature Update</h5>

                        <form class="newslatter-form" action="#" id="newslatter-form">
                            <div class="newslatter-input-group d-flex">
                                <input type="email" placeholder="Enter Your Email">
                                <button type="submit">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ===============  Newslatter area end =============== -->

<!-- ===============  footer area start  =============== -->
<div class="footer-outer ">
    <div class="footer-area position-relative">
        <div class="watermark-bg">
            <img src="assets/images/background-texts/footer-watermark.png" alt="" class="img-fluid">
        </div>
        <div class="container position-relative">
            <div class="footer-wrapper">
                <div class="footer-watermark">
                    <h1>Footer</h1>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-5 order-1">
                        <div class="footer-widget mt-0">
                            <h5 class="footer-widget-title">
                                Quick Link
                            </h5>
                            <div class="footer-links">
                                <ul class="link-list">
                                    <li><a href="about.html" class="footer-link">About Us</a></li>
                                    <li><a href="event.html" class="footer-link">Event</a> </li>
                                    <li><a href="schedule.html" class="footer-link">Schedule</a></li>
                                    <li><a href="#" class="footer-link">Our Support</a></li>
                                    <li><a href="speaker.html" class="footer-link">Speaker</a></li>
                                    <li><a href="#sponsor-area" class="footer-link">Sponsor</a></li>
                                    <li><a href="blog.html" class="footer-link">Blog</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-2 order-3">

                        <div class="footer-about">
                            <div class="footer-logo"><img src="assets/images/logo-v2.png" alt=""></div>
                            <p>Cras semper, massa vel aliquam luctus, eros odio tempor turpis, ac placerat metus tortor eget magna. Donec mattis posuere pharetra Donec vestibulum.</p>
                            <ul class="footer-social-icon d-flex">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-7 order-lg-3 order-2 ">

                        <div class="footer-widget">
                            <h5 class="footer-widget-title">
                                Contact
                            </h5>
                            <div class="footer-links">
                                <ul class="link-list">
                                    <li class="contact-box">
                                        <div class="contact-icon">
                                            <i class="bi bi-telephone-plus"></i>
                                        </div>
                                        <div class="contact-links">
                                            <a href="tel:+17632275032">+1 763-227-5032</a>
                                            <a href="tel:+17632275032">+1 763-227-5032</a>
                                        </div>
                                    </li>
                                    <li class="contact-box">
                                        <div class="contact-icon">
                                            <i class="bi bi-envelope-open"></i>
                                        </div>
                                        <div class="contact-links">
                                            <a href="mailto:info@example.com">info@example.com</a>
                                            <a href="mailto:support@example.com">support@example.com</a>
                                        </div>
                                    </li>
                                    <li class="contact-box">
                                        <div class="contact-icon">
                                            <i class="bi bi-geo-alt"></i>
                                        </div>
                                        <div class="contact-links">
                                            <a href="#">2752 Willison Street
                                                Eagan, United State</a>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="footer-bottom footer-bottom-style-two">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="footer-copyright text-center">
                            <p>Copyright 2021 Event Lab | Design By <a href="#">Egens Lab</a></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- ===============  footer area end  =============== -->

<!-- Custom Cursor -->

<div class="cursor"></div>
<div class="cursor2"></div>

<!-- Custom Cursor End -->




<!--Javascript -->
<!--Javascript -->
<script src="{{ asset('website/assets/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('website/assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('website/assets/js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('website/assets/js/jquery-ui.js') }}"></script>
<script src="{{ asset('website/assets/js/wow.min.js') }}"></script>
<script src="{{ asset('website/assets/js/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('website/assets/js/jquery.counterup.js') }}"></script>
<script src="{{ asset('website/assets/js/jquery.waypoints.js') }}"></script>

<!-- Custom JavaScript -->
<script src="{{ asset('website/assets/js/main.js') }}"></script>


</html>
