@extends('layout.layout2')

@php
    $headTitle='Home Two';
@endphp

@section('content')

    <!-- /.preloader -->

    <div class="page-wrapper">
        <header class="main-header-two">
            <nav class="main-menu main-menu-two">
                <div class="main-menu-two__wrapper">
                    <div class="main-menu-two__wrapper-inner">
                        <div class="main-menu-two__left">
                            <div class="main-menu-two__logo">
                               <a href="{{ route('index') }}"><img src="{{ asset('assets/images/resources/logo-2.png') }}" alt=""></a>
                            </div>
                            <div class="main-menu-two__shape-1 float-bob-x">
                                <img src="{{ asset('assets/images/shapes/main-menu-shape-1.png') }}" alt="">
                            </div>
                        </div>
                        <div class="main-menu-two__right">
                            <div class="main-menu-two__right-top">
                                <div class="main-menu-two__right-top-left">
                                    <div class="main-menu-two__volunteers">
                                        <div class="main-menu-two__volunteers-icon">
                                            <img src="{{ asset('assets/images/icon/main-menu-heart-icon.png') }}" alt="">
                                        </div>
                                        <div class="main-menu-two__volunteers-text-box">
                                            <p class="main-menu-two__volunteers-text"><a href="{{ route('becomeVolunteer') }}">Become a
                                                    <span>volunteers</span></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-menu-two__right-top-right">
                                    <div class="main-menu-two__right-top-address">
                                        <ul class="list-unstyled main-menu-two__right-top-address-list">
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-phone-call"></span>
                                                </div>
                                                <div class="content">
                                                    <p>Helpline</p>
                                                    <h5><a href="tel:980009630">+ 98 (000) - 9630</a></h5>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-message"></span>
                                                </div>
                                                <div class="content">
                                                    <p>Send email</p>
                                                    <h5><a href="mailto:needhelp@company.com">needhelp@company.com</a>
                                                    </h5>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-location"></span>
                                                </div>
                                                <div class="content">
                                                    <p>380 St Kilda Road</p>
                                                    <h5>Melbourne, Australia</h5>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="main-menu-two__right-bottom">
                                <div class="main-menu-two__main-menu-box">
                                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                    <ul class="main-menu__list">
                                        <li class="megamenu megamenu-clickable megamenu-clickable--toggler">
                                           <a href="{{ route('index') }}">Demos</a>
                                            <ul>
                                                <li>
                                                    <div class="megamenu-popup">
                                                        <a href="#" class="megamenu-clickable--close"><span class="icon-close"></span></a>
                                                        <!-- /.megamenu-clickable--close -->
                                                        <div class="megamenu-popup__content">
                                                            <div class="demo-one">
                                                                <div class="container">
                                                                    <div class="row">
                                                                        <div class="col-md-6 col-lg-4">
                                                                            <div class="demo-one__card">
                                                                                <div class="demo-one__image">
                                                                                    <img width="370" height="431" src="{{ asset('assets/images/home-showcase/home-1-1.png') }}" alt="Home Page 01">
                                                                                    <div class="demo-one__btns">
                                                                                        <a href="{{ route('index') }}" class="thm-btn">Multi Page </a>
                                                                                        <a href="{{ route('indexOnePage') }}" class="thm-btn">One Page</a>
                                                                                        <a href="{{ route('indexDark') }}" class="thm-btn">Dark Page</a>
                                                                                    </div><!-- /.demo-one__btns -->
                                                                                </div><!-- /.demo-one__image -->
                                                                                <div class="demo-one__content">
                                                                                    <h3 class="demo-one__title">
                                                                                       <a href="{{ route('index') }}">Home Page 01</a>
                                                                                    </h3><!-- /.demo-one__title -->
                                                                                </div><!-- /.demo-one__content -->
                                                                            </div><!-- /.demo-one__card -->
                                                                        </div><!-- /.col-md-6 -->
                                                                        <div class="col-md-6 col-lg-4">
                                                                            <div class="demo-one__card">
                                                                                <div class="demo-one__image">
                                                                                    <img width="370" height="431" src="{{ asset('assets/images/home-showcase/home-1-2.png') }}" alt="Home Page 02">
                                                                                    <div class="demo-one__btns">
                                                                                        <a href="{{ route('index2') }}" class="thm-btn">Multi Page </a>
                                                                                        <a href="{{ route('index2OnePage') }}" class="thm-btn">One
                                                                                            Page</a>
                                                                                        <a href="{{ route('index2Dark') }}" class="thm-btn">Dark Page</a>
                                                                                    </div><!-- /.demo-one__btns -->
                                                                                </div><!-- /.demo-one__image -->
                                                                                <div class="demo-one__content">
                                                                                    <h3 class="demo-one__title">
                                                                                        <a href="{{ route('index2') }}">Home Page 02</a>
                                                                                    </h3><!-- /.demo-one__title -->
                                                                                </div><!-- /.demo-one__content -->
                                                                            </div><!-- /.demo-one__card -->
                                                                        </div><!-- /.col-md-6 -->
                                                                        <div class="col-md-6 col-lg-4">
                                                                            <div class="demo-one__card">
                                                                                <div class="demo-one__image">
                                                                                    <img width="370" height="431" src="{{ asset('assets/images/home-showcase/home-1-3.png') }}" alt="Home page 03">
                                                                                    <div class="demo-one__btns">
                                                                                        <a href="{{ route('index3') }}" class="thm-btn">Multi Page </a>
                                                                                        <a href="{{ route('index3OnePage') }}" class="thm-btn">One
                                                                                            Page</a>
                                                                                        <a href="{{ route('index3Dark') }}" class="thm-btn">Dark Page</a>
                                                                                    </div><!-- /.demo-one__btns -->
                                                                                </div><!-- /.demo-one__image -->
                                                                                <div class="demo-one__content">
                                                                                    <h3 class="demo-one__title">
                                                                                        <a href="{{ route('index3') }}">Home Page 03</a>
                                                                                    </h3><!-- /.demo-one__title -->
                                                                                </div><!-- /.demo-one__content -->
                                                                            </div><!-- /.demo-one__card -->
                                                                        </div><!-- /.col-md-6 -->
                                                                        <div class="col-md-6 col-lg-4">
                                                                            <div class="demo-one__card">
                                                                                <div class="demo-one__image">
                                                                                    <img width="370" height="431" src="{{ asset('assets/images/home-showcase/home-1-4.png') }}" alt="Home page 04">
                                                                                    <div class="demo-one__btns">
                                                                                        <a href="{{ route('index4') }}" class="thm-btn">Multi Page </a>
                                                                                        <a href="{{ route('index4OnePage') }}" class="thm-btn">One
                                                                                            Page</a>
                                                                                        <a href="{{ route('index4Dark') }}" class="thm-btn">Dark Page</a>
                                                                                    </div><!-- /.demo-one__btns -->
                                                                                </div><!-- /.demo-one__image -->
                                                                                <div class="demo-one__content">
                                                                                    <h3 class="demo-one__title">
                                                                                        <a href="{{ route('index4') }}">Home Page 04</a>
                                                                                    </h3><!-- /.demo-one__title -->
                                                                                </div><!-- /.demo-one__content -->
                                                                            </div><!-- /.demo-one__card -->
                                                                        </div><!-- /.col-md-6 -->
                                                                        <div class="col-md-6 col-lg-4">
                                                                            <div class="demo-one__card">
                                                                                <div class="demo-one__image">
                                                                                    <img width="370" height="431" src="{{ asset('assets/images/home-showcase/home-1-5.png') }}" alt="Home page 05">
                                                                                    <div class="demo-one__btns">
                                                                                        <a href="{{ route('index5') }}" class="thm-btn">Multi Page </a>
                                                                                        <a href="{{ route('index5OnePage') }}" class="thm-btn">One
                                                                                            Page</a>
                                                                                        <a href="{{ route('index5OnePage') }}" class="thm-btn">Dark Page</a>
                                                                                    </div><!-- /.demo-one__btns -->
                                                                                </div><!-- /.demo-one__image -->
                                                                                <div class="demo-one__content">
                                                                                    <h3 class="demo-one__title">
                                                                                        <a href="{{ route('index5') }}">Home Page 05</a>
                                                                                    </h3><!-- /.demo-one__title -->
                                                                                </div><!-- /.demo-one__content -->
                                                                            </div><!-- /.demo-one__card -->
                                                                        </div><!-- /.col-md-6 -->
                                                                        <div class="col-md-6 col-lg-4">
                                                                            <div class="demo-one__card">
                                                                                <div class="demo-one__image">
                                                                                    <img width="370" height="431" src="{{ asset('assets/images/home-showcase/home-1-6.png') }}" alt="Home Boxed">
                                                                                    <div class="demo-one__btns">
                                                                                        <a href="{{ route('indexBoxed') }}" class="thm-btn">View
                                                                                            Page</a>
                                                                                    </div><!-- /.demo-one__btns -->
                                                                                </div><!-- /.demo-one__image -->
                                                                                <div class="demo-one__content">
                                                                                    <h3 class="demo-one__title">
                                                                                        <a href="{{ route('indexBoxed') }}">Home Boxed</a>
                                                                                    </h3><!-- /.demo-one__title -->
                                                                                </div><!-- /.demo-one__content -->
                                                                            </div><!-- /.demo-one__card -->
                                                                        </div><!-- /.col-md-6 -->
                                                                        <div class="col-md-6 col-lg-4">
                                                                            <div class="demo-one__card">
                                                                                <div class="demo-one__image">
                                                                                    <img width="370" height="431" src="{{ asset('assets/images/home-showcase/home-1-7.png') }}" alt="Home RTL">
                                                                                    <div class="demo-one__btns">
                                                                                        <a href="index-rtl#googtrans(en%7car)" class="thm-btn">View Page</a>
                                                                                    </div><!-- /.demo-one__btns -->
                                                                                </div><!-- /.demo-one__image -->
                                                                                <div class="demo-one__content">
                                                                                    <h3 class="demo-one__title">
                                                                                        <a href="index-rtl#googtrans(en%7car)">Home RTL</a>
                                                                                    </h3><!-- /.demo-one__title -->
                                                                                </div><!-- /.demo-one__content -->
                                                                            </div><!-- /.demo-one__card -->
                                                                        </div><!-- /.col-md-6 -->
                                                                    </div><!-- /.row -->
                                                                </div><!-- /.container -->
                                                            </div><!-- /.demos-one -->
                                                        </div><!-- /.megamenu-popup__content -->
                                                    </div><!-- /.megamenu-popup -->
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#">Pages</a>
                                            <ul>
                                                <li><a href="{{ route('about') }}">About</a></li>
                                                <li><a href="{{ route('volunteer') }}">Volunteer</a></li>
                                                <li><a href="{{ route('becomeVolunteer') }}">Become volunteer</a></li>
                                                <li><a href="{{ route('volunteerCarousel') }}">Volunteer carousel</a></li>
                                                <li><a href="{{ route('gallery') }}">Gallery</a></li>
                                                <li><a href="{{ route('galleryCarousel') }}">Gallery carousel</a></li>
                                                <li><a href="{{ route('faq') }}">FAQs</a></li>
                                                <li><a href="{{ route('errorPage') }}">404 Error</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#">Donations</a>
                                            <ul>
                                                <li><a href="{{ route('donation') }}">Donation</a></li>
                                                <li><a href="{{ route('donationsList') }}">Donation list</a></li>
                                                <li><a href="{{ route('donationCarousel') }}">Donation carousel</a></li>
                                                <li><a href="{{ route('donationDetails') }}">Donation details</a></li>
                                                <li><a href="{{ route('donateNow') }}">Donate Now</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#">Events</a>
                                            <ul>
                                                <li><a href="{{ route('events') }}">Events</a></li>
                                                <li><a href="{{ route('eventsCarousel') }}">Events carousel</a></li>
                                                <li><a href="{{ route('eventDetails') }}">Event details</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#">News</a>
                                            <ul>
                                                <li><a href="{{ route('news') }}">News</a></li>
                                                <li><a href="{{ route('newsCarousel') }}">News carousel</a></li>
                                                <li><a href="{{ route('newsSidebar') }}">News right sidebar</a></li>
                                                <li><a href="{{ route('newsSidebarLeft') }}">News left sidebar</a></li>
                                                <li><a href="{{ route('newsDetails') }}">News details</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="{{ route('products') }}">Shop</a>
                                            <ul>
                                               <li><a href="{{ route('products') }}">Shop</a></li>
                                               <li><a href="{{ route('productDetails') }}">Product details</a></li>
                                               <li><a href="{{ route('cart') }}">Cart</a></li>
                                               <li><a href="{{ route('checkout') }}">Checkout</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="{{ route('contact') }}">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="main-menu-two__main-menu-content-box">
                                    <div class="main-menu-two__search-cat-btn-box">
                                        <div class="main-menu-two__search-box">
                                            <a href="#" class="main-menu-two__search search-toggler icon-magnifying-glass"></a>
                                        </div>
                                        <div class="main-menu__cat-box">
                                            <a href="{{ route('cart') }}" class="main-menu__cart icon-shopping-cart"></a>
                                        </div>
                                        <div class="main-menu-two__btn-box">
                                            <a href="{{ route('donateNow') }}" class="main-menu-two__btn"> <span class="fa fa-heart"></span>
                                                Donate
                                                now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div class="stricky-header stricked-menu main-menu main-menu-two">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Main Slider Start-->
        <section class="main-slider-two clearfix">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
                "effect": "fade",
                "pagination": {
                "el": "#main-slider-pagination",
                "type": "bullets",
                "clickable": true
                },
                "navigation": {
                "nextEl": "#main-slider__swiper-button-next",
                "prevEl": "#main-slider__swiper-button-prev"
                },
                "autoplay": {
                "delay": 5000
                }}'>
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="image-layer-two" style="background-image:url('{{ asset('assets/images/backgrounds/main-slider-2-1.jpg') }}')"></div>
                        <!-- /.image-layer -->

                        <div class="main-slider-two-shape-1">
                            <img src="{{ asset('assets/images/shapes/main-slider-two-shape-1.png') }}" alt="">
                        </div>
                        <div class="main-slider-two-shape-2">
                            <img src="{{ asset('assets/images/shapes/main-slider-two-shape-2.png') }}" alt="">
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider-two__content">
                                        <p class="main-slider-two__sub-title">Helping Today. Helping Tommorow</p>
                                        <h2 class="main-slider-two__title">Give Child the <br> Gift of Eductions</h2>
                                        <div class="main-slider-two__btn-box">
                                            <a href="{{ route('about') }}" class="thm-btn main-slider-two__btn"> Discover more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="image-layer-two" style="background-image:url('{{ asset('assets/images/backgrounds/main-slider-2-2.jpg') }}')"></div>
                        <!-- /.image-layer -->

                        <div class="main-slider-two-shape-1">
                            <img src="{{ asset('assets/images/shapes/main-slider-two-shape-1.png') }}" alt="">
                        </div>
                        <div class="main-slider-two-shape-2">
                            <img src="{{ asset('assets/images/shapes/main-slider-two-shape-2.png') }}" alt="">
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider-two__content">
                                        <p class="main-slider-two__sub-title">Helping Today. Helping Tommorow</p>
                                        <h2 class="main-slider-two__title">Give Child the <br> Gift of Eductions</h2>
                                        <div class="main-slider-two__btn-box">
                                            <a href="{{ route('about') }}" class="thm-btn main-slider-two__btn"> Discover more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="image-layer-two" style="background-image:url('{{ asset('assets/images/backgrounds/main-slider-2-3.jpg') }}')"></div>
                        <!-- /.image-layer -->

                        <div class="main-slider-two-shape-1">
                            <img src="{{ asset('assets/images/shapes/main-slider-two-shape-1.png') }}" alt="">
                        </div>
                        <div class="main-slider-two-shape-2">
                            <img src="{{ asset('assets/images/shapes/main-slider-two-shape-2.png') }}" alt="">
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider-two__content">
                                        <p class="main-slider-two__sub-title">Helping Today. Helping Tommorow</p>
                                        <h2 class="main-slider-two__title">Give Child the <br> Gift of Eductions</h2>
                                        <div class="main-slider-two__btn-box">
                                            <a href="{{ route('about') }}" class="thm-btn main-slider-two__btn"> Discover more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- If we need navigation buttons -->
                <div class="main-slider-two__nav">
                    <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                        <i class="icon-left-arrow"></i>
                    </div>
                    <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                        <i class="icon-right-arrow"></i>
                    </div>
                </div>

            </div>
        </section>
        <!--Main Slider End-->

        <!--Feature Two Start-->
        <section class="feature-two">
            <div class="container">
                <div class="row">
                    <!--Feature Two Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="feature-two__single">
                            <div class="feature-two__single-inner">
                                <div class="feature-two-shape-1" style="background-image:url('{{ asset('assets/images/shapes/feature-two-shape-1.png') }}')"></div>
                                <div class="feature-two__content-box">
                                    <div class="feature-two__content-left">
                                        <p class="feature-two__tagline">Donate to</p>
                                        <h3 class="feature-two__title"><a href="{{ route('about') }}">Eduction & <br> healthy
                                                food</a></h3>
                                    </div>
                                    <div class="feature-two__icon">
                                        <span class="icon-apple"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="feature-two__arrow">
                                <a href="{{ route('about') }}"><span class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                    <!--Feature Two Single End-->
                    <!--Feature Two Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="feature-two__single">
                            <div class="feature-two__single-inner">
                                <div class="feature-two-shape-1" style="background-image:url('{{ asset('assets/images/shapes/feature-two-shape-1.png') }}')"></div>
                                <div class="feature-two__content-box">
                                    <div class="feature-two__content-left">
                                        <p class="feature-two__tagline">Donate to</p>
                                        <h3 class="feature-two__title"><a href="{{ route('about') }}">Medical & <br>
                                                treatement</a></h3>
                                    </div>
                                    <div class="feature-two__icon">
                                        <span class="icon-health-insurance"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="feature-two__arrow">
                                <a href="{{ route('about') }}"><span class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                    <!--Feature Two Single End-->
                    <!--Feature Two Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <div class="feature-two__single">
                            <div class="feature-two__single-inner">
                                <div class="feature-two-shape-1" style="background-image:url('{{ asset('assets/images/shapes/feature-two-shape-1.png') }}')"></div>
                                <div class="feature-two__content-box">
                                    <div class="feature-two__content-left">
                                        <p class="feature-two__tagline">Donate to</p>
                                        <h3 class="feature-two__title"><a href="{{ route('about') }}">Bring people <br>
                                                together</a></h3>
                                    </div>
                                    <div class="feature-two__icon">
                                        <span class="icon-business-partnership"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="feature-two__arrow">
                                <a href="{{ route('about') }}"><span class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                    <!--Feature Two Single End-->
                </div>
            </div>
        </section>
        <!--Feature Two End-->

        <!--About Two Start-->
        <section class="about-two">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-two__left">
                            <div class="about-two__img-box  wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                                <div class="about-two__img">
                                    <img src="{{ asset('assets/images/resources/about-two-img-1.jpg') }}" alt="">
                                </div>
                                <div class="about-two__img-two">
                                    <img src="{{ asset('assets/images/resources/about-two-img-2.jpg') }}" alt="">
                                </div>
                                <div class="about-two__left-title-box">
                                    <h3 class="about-two__left-title">Help us today!</h3>
                                </div>
                                <div class="about-two__shape-1 zoominout">
                                    <img src="{{ asset('assets/images/shapes/about-two-shape-1.png') }}" alt="">
                                </div>
                                <div class="about-two__shape-2 rotate-me">
                                    <img src="{{ asset('assets/images/shapes/about-two-shape-2.png') }}" alt="">
                                </div>
                                <div class="about-two__shape-3 float-bob-y">
                                    <img src="{{ asset('assets/images/shapes/about-two-shape-3.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-two__right">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Get to know about oxpins</span>
                                <h2 class="section-title__title">Helping each other can make world better</h2>
                            </div>
                            <p class="about-two__text-1">We help companies develop powerful corporate social
                                responsibility, grantmaking, and employee engagement strategies. Our impact is about
                                more than moving money to where it’s needed most.</p>
                            <ul class="list-unstyled about-two__points">
                                <li>
                                    <div class="icon">
                                        <span class="icon-target"></span>
                                    </div>
                                    <div class="text">
                                        <h4>Our mission</h4>
                                        <p>Nonprofits around the world apply and join us to access more funding.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-solidarity-1"></span>
                                    </div>
                                    <div class="text">
                                        <h4>Our story</h4>
                                        <p>Nonprofits around the world apply and join us to access more funding.</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="about-two__progress">
                                <div class="about-two__progress-single">
                                    <h4 class="about-two__progress-title">Charity</h4>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="76%">
                                            <div class="count-text">76%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="about-two__progress-single">
                                    <h4 class="about-two__progress-title">Donations</h4>
                                    <div class="bar marb-0">
                                        <div class="bar-inner count-bar" data-percent="86%">
                                            <div class="count-text">86%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('about') }}" class="thm-btn about-two__btn">Discover More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About Two End-->

        <!--Causse Two Start-->
        <section class="causes-two">
            <div class="causes-two-shape-1" style="background-image:url('{{ asset('assets/images/shapes/causes-two-shape-1.png') }}')">
            </div>
            <div class="container">
                <div class="causes-two__top">
                    <div class="row">
                        <div class="col-xl-7 col-lg-6">
                            <div class="causes-two-top__left">
                                <div class="section-title text-left">
                                    <span class="section-title__tagline">Help & donate</span>
                                    <h2 class="section-title__title">Find the popular cause
                                        and donate them</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6">
                            <div class="causes-two-top__right">
                                <p class="causes-two-top__text">Powerful corporate social responsibility,
                                    grantmaking, and employee engagement strategies. Our impact is about more than
                                    moving money to where it’s needed most. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="causes-two__tab">
                    <div class="causes-two__tab-box tabs-box">
                        <div class="row">
                            <div class="col-xl-3 col-lg-3">
                                <div class="causes-two__tab-btn-box">
                                    <ul class="tab-buttons clearfix list-unstyled">
                                        <li data-tab="#all-causes" class="tab-btn active-btn"><span>All causes
                                                <sup>6</sup> </span>
                                        </li>
                                        <li data-tab="#health" class="tab-btn"><span>Health <sup>3</sup></span>
                                        </li>
                                        <li data-tab="#education" class="tab-btn"><span>Education <sup>2</sup></span>
                                        </li>
                                        <li data-tab="#medical" class="tab-btn"><span>Medical <sup>1</sup></span></li>
                                        <li data-tab="#food-water" class="tab-btn"><span>Food & water
                                                <sup>2</sup></span></li>
                                        <li data-tab="#charity" class="tab-btn"><span>Charity for poors
                                                <sup>3</sup></span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-9">
                                <div class="causes-two__tab-main-content">
                                    <div class="tabs-content">
                                        <!--tab-->
                                        <div class="tab active-tab" id="all-causes">
                                            <div class="causes-two__inner-content">
                                                <div class="causes-two__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{
                                                    "loop": true,
                                                    "autoplay": true,
                                                    "margin": 30,
                                                    "nav": true,
                                                    "dots": false,
                                                    "smartSpeed": 500,
                                                    "autoplayTimeout": 10000,
                                                    "navText": ["<span class=\"fa fa-angle-left\"><p>Previous</p></span>",
                                                    "<span class=\"fa fa-angle-right\"><p>Next</p></span>"],
                                                    "responsive": {
                                                        "0": {
                                                            "items": 1
                                                        },
                                                        "768": {
                                                            "items": 1
                                                        },
                                                        "992": {
                                                            "items": 3
                                                        },
                                                        "1200": {
                                                            "items": 3.181111
                                                        }
                                                    }
                                                }'>
                                                    <div class="item">
                                                        <div class="causes-one__single">
                                                            <div class="causes-one__img">
                                                                <img src="{{ asset('assets/images/resources/causes-1-1.jpg') }}" alt="">
                                                                <div class="causes-one__cat">
                                                                    <p>Education</p>
                                                                </div>
                                                            </div>
                                                            <div class="causes-one__content">
                                                                <h3 class="causes-one__title"><a href="{{ route('donationDetails') }}">Let’s
                                                                        education
                                                                        for children get good life</a>
                                                                </h3>
                                                                <p class="causes-one__text">There are many of lorem, but
                                                                    majori have
                                                                    suffered alteration in some form.</p>
                                                                <div class="causes-one__progress">
                                                                    <div class="causes-one__progress-shape" style="background-image:url('{{ asset('assets/images/shapes/causes-one-progress-shape-1.png') }}')">
                                                                    </div>
                                                                    <div class="bar">
                                                                        <div class="bar-inner count-bar" data-percent="36%">
                                                                            <div class="count-text">36%</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="causes-one__goals">
                                                                        <p><span>$25,270</span> Raised</p>
                                                                        <p><span>$30,000</span> Goal</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="causes-one__single">
                                                            <div class="causes-one__img">
                                                                <img src="{{ asset('assets/images/resources/causes-1-2.jpg') }}" alt="">
                                                                <div class="causes-one__cat">
                                                                    <p>Medical</p>
                                                                </div>
                                                            </div>
                                                            <div class="causes-one__content">
                                                                <h3 class="causes-one__title"><a href="{{ route('donationDetails') }}">It is a long
                                                                        established fact that a reader
                                                                    </a>
                                                                </h3>
                                                                <p class="causes-one__text">There are many of lorem, but
                                                                    majori have
                                                                    suffered alteration in some form.</p>
                                                                <div class="causes-one__progress">
                                                                    <div class="causes-one__progress-shape" style="background-image:url('{{ asset('assets/images/shapes/causes-one-progress-shape-1.png') }}')">
                                                                    </div>
                                                                    <div class="bar">
                                                                        <div class="bar-inner count-bar" data-percent="36%">
                                                                            <div class="count-text">36%</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="causes-one__goals">
                                                                        <p><span>$25,270</span> Raised</p>
                                                                        <p><span>$30,000</span> Goal</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="causes-one__single">
                                                            <div class="causes-one__img">
                                                                <img src="{{ asset('assets/images/resources/causes-1-3.jpg') }}" alt="">
                                                                <div class="causes-one__cat">
                                                                    <p>Food</p>
                                                                </div>
                                                            </div>
                                                            <div class="causes-one__content">
                                                                <h3 class="causes-one__title"><a href="{{ route('donationDetails') }}">There are many
                                                                        variations of passages of
                                                                    </a>
                                                                </h3>
                                                                <p class="causes-one__text">There are many of lorem, but
                                                                    majori have
                                                                    suffered alteration in some form.</p>
                                                                <div class="causes-one__progress">
                                                                    <div class="causes-one__progress-shape" style="background-image:url('{{ asset('assets/images/shapes/causes-one-progress-shape-1.png') }}')">
                                                                    </div>
                                                                    <div class="bar">
                                                                        <div class="bar-inner count-bar" data-percent="36%">
                                                                            <div class="count-text">36%</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="causes-one__goals">
                                                                        <p><span>$25,270</span> Raised</p>
                                                                        <p><span>$30,000</span> Goal</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="causes-one__single">
                                                            <div class="causes-one__img">
                                                                <img src="{{ asset('assets/images/resources/causes-1-1.jpg') }}" alt="">
                                                                <div class="causes-one__cat">
                                                                    <p>Food</p>
                                                                </div>
                                                            </div>
                                                            <div class="causes-one__content">
                                                                <h3 class="causes-one__title"><a href="{{ route('donationDetails') }}">There are many
                                                                        variations of passages</a>
                                                                </h3>
                                                                <p class="causes-one__text">There are many of lorem, but
                                                                    majori have
                                                                    suffered alteration in some form.</p>
                                                                <div class="causes-one__progress">
                                                                    <div class="causes-one__progress-shape" style="background-image:url('{{ asset('assets/images/shapes/causes-one-progress-shape-1.png') }}')">
                                                                    </div>
                                                                    <div class="bar">
                                                                        <div class="bar-inner count-bar" data-percent="36%">
                                                                            <div class="count-text">36%</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="causes-one__goals">
                                                                        <p><span>$25,270</span> Raised</p>
                                                                        <p><span>$30,000</span> Goal</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--tab-->
                                        <div class="tab" id="health">
                                            <div class="causes-two__inner-content">
                                                <div class="causes-two__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{
                                                    "loop": true,
                                                    "autoplay": true,
                                                    "margin": 30,
                                                    "nav": true,
                                                    "dots": false,
                                                    "smartSpeed": 500,
                                                    "autoplayTimeout": 10000,
                                                    "navText": ["<span class=\"fa fa-angle-left\"><p>Previous</p></span>",
                                                    "<span class=\"fa fa-angle-right\"><p>Next</p></span>"],
                                                    "responsive": {
                                                        "0": {
                                                            "items": 1
                                                        },
                                                        "768": {
                                                            "items": 1
                                                        },
                                                        "992": {
                                                            "items": 3
                                                        },
                                                        "1200": {
                                                            "items": 3.181111
                                                        }
                                                    }
                                                }'>
                                                    <div class="item">
                                                        <div class="causes-one__single">
                                                            <div class="causes-one__img">
                                                                <img src="{{ asset('assets/images/resources/causes-1-1.jpg') }}" alt="">
                                                                <div class="causes-one__cat">
                                                                    <p>Education</p>
                                                                </div>
                                                            </div>
                                                            <div class="causes-one__content">
                                                                <h3 class="causes-one__title"><a href="{{ route('donationDetails') }}">Let’s
                                                                        education
                                                                        for children get good life</a>
                                                                </h3>
                                                                <p class="causes-one__text">There are many of lorem, but
                                                                    majori have
                                                                    suffered alteration in some form.</p>
                                                                <div class="causes-one__progress">
                                                                    <div class="causes-one__progress-shape" style="background-image:url('{{ asset('assets/images/shapes/causes-one-progress-shape-1.png') }}')">
                                                                    </div>
                                                                    <div class="bar">
                                                                        <div class="bar-inner count-bar" data-percent="36%">
                                                                            <div class="count-text">36%</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="causes-one__goals">
                                                                        <p><span>$25,270</span> Raised</p>
                                                                        <p><span>$30,000</span> Goal</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="causes-one__single">
                                                            <div class="causes-one__img">
                                                                <img src="{{ asset('assets/images/resources/causes-1-2.jpg') }}" alt="">
                                                                <div class="causes-one__cat">
                                                                    <p>Medical</p>
                                                                </div>
                                                            </div>
                                                            <div class="causes-one__content">
                                                                <h3 class="causes-one__title"><a href="{{ route('donationDetails') }}">It is a long
                                                                        established fact that a reader</a>
                                                                </h3>
                                                                <p class="causes-one__text">There are many of lorem, but
                                                                    majori have
                                                                    suffered alteration in some form.</p>
                                                                <div class="causes-one__progress">
                                                                    <div class="causes-one__progress-shape" style="background-image:url('{{ asset('assets/images/shapes/causes-one-progress-shape-1.png') }}')">
                                                                    </div>
                                                                    <div class="bar">
                                                                        <div class="bar-inner count-bar" data-percent="36%">
                                                                            <div class="count-text">36%</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="causes-one__goals">
                                                                        <p><span>$25,270</span> Raised</p>
                                                                        <p><span>$30,000</span> Goal</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="causes-one__single">
                                                            <div class="causes-one__img">
                                                                <img src="{{ asset('assets/images/resources/causes-1-3.jpg') }}" alt="">
                                                                <div class="causes-one__cat">
                                                                    <p>Food</p>
                                                                </div>
                                                            </div>
                                                            <div class="causes-one__content">
                                                                <h3 class="causes-one__title"><a href="{{ route('donationDetails') }}">There are many
                                                                        variations of passages of
                                                                    </a>
                                                                </h3>
                                                                <p class="causes-one__text">There are many of lorem, but
                                                                    majori have
                                                                    suffered alteration in some form.</p>
                                                                <div class="causes-one__progress">
                                                                    <div class="causes-one__progress-shape" style="background-image:url('{{ asset('assets/images/shapes/causes-one-progress-shape-1.png') }}')">
                                                                    </div>
                                                                    <div class="bar">
                                                                        <div class="bar-inner count-bar" data-percent="36%">
                                                                            <div class="count-text">36%</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="causes-one__goals">
                                                                        <p><span>$25,270</span> Raised</p>
                                                                        <p><span>$30,000</span> Goal</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="causes-one__single">
                                                            <div class="causes-one__img">
                                                                <img src="{{ asset('assets/images/resources/causes-1-1.jpg') }}" alt="">
                                                                <div class="causes-one__cat">
                                                                    <p>Food</p>
                                                                </div>
                                                            </div>
                                                            <div class="causes-one__content">
                                                                <h3 class="causes-one__title"><a href="{{ route('donationDetails') }}">There are many
                                                                        variations of passages of
                                                                    </a>
                                                                </h3>
                                                                <p class="causes-one__text">There are many of lorem, but
                                                                    majori have
                                                                    suffered alteration in some form.</p>
                                                                <div class="causes-one__progress">
                                                                    <div class="causes-one__progress-shape" style="background-image:url('{{ asset('assets/images/shapes/causes-one-progress-shape-1.png') }}')">
                                                                    </div>
                                                                    <div class="bar">
                                                                        <div class="bar-inner count-bar" data-percent="36%">
                                                                            <div class="count-text">36%</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="causes-one__goals">
                                                                        <p><span>$25,270</span> Raised</p>
                                                                        <p><span>$30,000</span> Goal</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--tab-->
                                        <div class="tab" id="education">
                                            <div class="causes-two__inner-content">
                                                <div class="causes-two__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{
                                                    "loop": true,
                                                    "autoplay": true,
                                                    "margin": 30,
                                                    "nav": true,
                                                    "dots": false,
                                                    "smartSpeed": 500,
                                                    "autoplayTimeout": 10000,
                                                    "navText": ["<span class=\"fa fa-angle-left\"><p>Previous</p></span>",
                                                    "<span class=\"fa fa-angle-right\"><p>Next</p></span>"],
                                                    "responsive": {
                                                        "0": {
                                                            "items": 1
                                                        },
                                                        "768": {
                                                            "items": 1
                                                        },
                                                        "992": {
                                                            "items": 3
                                                        },
                                                        "1200": {
                                                            "items": 3.181111
                                                        }
                                                    }
                                                }'>
                                                    <div class="item">
                                                        <div class="causes-one__single">
                                                            <div class="causes-one__img">
                                                                <img src="{{ asset('assets/images/resources/causes-1-1.jpg') }}" alt="">
                                                                <div class="causes-one__cat">
                                                                    <p>Education</p>
                                                                </div>
                                                            </div>
                                                            <div class="causes-one__content">
                                                                <h3 class="causes-one__title"><a href="{{ route('donationDetails') }}">Let’s
                                                                        education
                                                                        for children get good life</a>
                                                                </h3>
                                                                <p class="causes-one__text">There are many of lorem, but
                                                                    majori have
                                                                    suffered alteration in some form.</p>
                                                                <div class="causes-one__progress">
                                                                    <div class="causes-one__progress-shape" style="background-image:url('{{ asset('assets/images/shapes/causes-one-progress-shape-1.png') }}')">
                                                                    </div>
                                                                    <div class="bar">
                                                                        <div class="bar-inner count-bar" data-percent="36%">
                                                                            <div class="count-text">36%</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="causes-one__goals">
                                                                        <p><span>$25,270</span> Raised</p>
                                                                        <p><span>$30,000</span> Goal</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="causes-one__single">
                                                            <div class="causes-one__img">
                                                                <img src="{{ asset('assets/images/resources/causes-1-2.jpg') }}" alt="">
                                                                <div class="causes-one__cat">
                                                                    <p>Medical</p>
                                                                </div>
                                                            </div>
                                                            <div class="causes-one__content">
                                                                <h3 class="causes-one__title"><a href="{{ route('donationDetails') }}">It is a long
                                                                        established fact that a reader</a>
                                                                </h3>
                                                                <p class="causes-one__text">There are many of lorem, but
                                                                    majori have
                                                                    suffered alteration in some form.</p>
                                                                <div class="causes-one__progress">
                                                                    <div class="causes-one__progress-shape" style="background-image:url('{{ asset('assets/images/shapes/causes-one-progress-shape-1.png') }}')">
                                                                    </div>
                                                                    <div class="bar">
                                                                        <div class="bar-inner count-bar" data-percent="36%">
                                                                            <div class="count-text">36%</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="causes-one__goals">
                                                                        <p><span>$25,270</span> Raised</p>
                                                                        <p><span>$30,000</span> Goal</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="causes-one__single">
                                                            <div class="causes-one__img">
                                                                <img src="{{ asset('assets/images/resources/causes-1-3.jpg') }}" alt="">
                                                                <div class="causes-one__cat">
                                                                    <p>Food</p>
                                                                </div>
                                                            </div>
                                                            <div class="causes-one__content">
                                                                <h3 class="causes-one__title"><a href="{{ route('donationDetails') }}">There are many
                                                                        variations of passages of
                                                                    </a>
                                                                </h3>
                                                                <p class="causes-one__text">There are many of lorem, but
                                                                    majori have
                                                                    suffered alteration in some form.</p>
                                                                <div class="causes-one__progress">
                                                                    <div class="causes-one__progress-shape" style="background-image:url('{{ asset('assets/images/shapes/causes-one-progress-shape-1.png') }}')">
                                                                    </div>
                                                                    <div class="bar">
                                                                        <div class="bar-inner count-bar" data-percent="36%">
                                                                            <div class="count-text">36%</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="causes-one__goals">
                                                                        <p><span>$25,270</span> Raised</p>
                                                                        <p><span>$30,000</span> Goal</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="causes-one__single">
                                                            <div class="causes-one__img">
                                                                <img src="{{ asset('assets/images/resources/causes-1-1.jpg') }}" alt="">
                                                                <div class="causes-one__cat">
                                                                    <p>Food</p>
                                                                </div>
                                                            </div>
                                                            <div class="causes-one__content">
                                                                <h3 class="causes-one__title"><a href="{{ route('donationDetails') }}">There are many
                                                                        variations of passages of
                                                                    </a>
                                                                </h3>
                                                                <p class="causes-one__text">There are many of lorem, but
                                                                    majori have
                                                                    suffered alteration in some form.</p>
                                                                <div class="causes-one__progress">
                                                                    <div class="causes-one__progress-shape" style="background-image:url('{{ asset('assets/images/shapes/causes-one-progress-shape-1.png') }}')">
                                                                    </div>
                                                                    <div class="bar">
                                                                        <div class="bar-inner count-bar" data-percent="36%">
                                                                            <div class="count-text">36%</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="causes-one__goals">
                                                                        <p><span>$25,270</span> Raised</p>
                                                                        <p><span>$30,000</span> Goal</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--tab-->
                                        <div class="tab" id="medical">
                                            <div class="causes-two__inner-content">
                                                <div class="causes-two__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{
                                                    "loop": true,
                                                    "autoplay": true,
                                                    "margin": 30,
                                                    "nav": true,
                                                    "dots": false,
                                                    "smartSpeed": 500,
                                                    "autoplayTimeout": 10000,
                                                    "navText": ["<span class=\"fa fa-angle-left\"><p>Previous</p></span>",
                                                    "<span class=\"fa fa-angle-right\"><p>Next</p></span>"],
                                                    "responsive": {
                                                        "0": {
                                                            "items": 1
                                                        },
                                                        "768": {
                                                            "items": 1
                                                        },
                                                        "992": {
                                                            "items": 3
                                                        },
                                                        "1200": {
                                                            "items": 3.181111
                                                        }
                                                    }
                                                }'>
                                                    <div class="item">
                                                        <div class="causes-one__single">
                                                            <div class="causes-one__img">
                                                                <img src="{{ asset('assets/images/resources/causes-1-1.jpg') }}" alt="">
                                                                <div class="causes-one__cat">
                                                                    <p>Education</p>
                                                                </div>
                                                            </div>
                                                            <div class="causes-one__content">
                                                                <h3 class="causes-one__title"><a href="{{ route('donationDetails') }}">Let’s
                                                                        education
                                                                        for children get good life</a>
                                                                </h3>
                                                                <p class="causes-one__text">There are many of lorem, but
                                                                    majori have
                                                                    suffered alteration in some form.</p>
                                                                <div class="causes-one__progress">
                                                                    <div class="causes-one__progress-shape" style="background-image:url('{{ asset('assets/images/shapes/causes-one-progress-shape-1.png') }}')">
                                                                    </div>
                                                                    <div class="bar">
                                                                        <div class="bar-inner count-bar" data-percent="36%">
                                                                            <div class="count-text">36%</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="causes-one__goals">
                                                                        <p><span>$25,270</span> Raised</p>
                                                                        <p><span>$30,000</span> Goal</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="causes-one__single">
                                                            <div class="causes-one__img">
                                                                <img src="{{ asset('assets/images/resources/causes-1-2.jpg') }}" alt="">
                                                                <div class="causes-one__cat">
                                                                    <p>Medical</p>
                                                                </div>
                                                            </div>
                                                            <div class="causes-one__content">
                                                                <h3 class="causes-one__title"><a href="{{ route('donationDetails') }}">It is a long
                                                                        established fact that a reader</a>
                                                                </h3>
                                                                <p class="causes-one__text">There are many of lorem, but
                                                                    majori have
                                                                    suffered alteration in some form.</p>
                                                                <div class="causes-one__progress">
                                                                    <div class="causes-one__progress-shape" style="background-image:url('{{ asset('assets/images/shapes/causes-one-progress-shape-1.png') }}')">
                                                                    </div>
                                                                    <div class="bar">
                                                                        <div class="bar-inner count-bar" data-percent="36%">
                                                                            <div class="count-text">36%</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="causes-one__goals">
                                                                        <p><span>$25,270</span> Raised</p>
                                                                        <p><span>$30,000</span> Goal</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="causes-one__single">
                                                            <div class="causes-one__img">
                                                                <img src="{{ asset('assets/images/resources/causes-1-3.jpg') }}" alt="">
                                                                <div class="causes-one__cat">
                                                                    <p>Food</p>
                                                                </div>
                                                            </div>
                                                            <div class="causes-one__content">
                                                                <h3 class="causes-one__title"><a href="{{ route('donationDetails') }}">There are many
                                                                        variations of passages of
                                                                    </a>
                                                                </h3>
                                                                <p class="causes-one__text">There are many of lorem, but
                                                                    majori have
                                                                    suffered alteration in some form.</p>
                                                                <div class="causes-one__progress">
                                                                    <div class="causes-one__progress-shape" style="background-image:url('{{ asset('assets/images/shapes/causes-one-progress-shape-1.png') }}')">
                                                                    </div>
                                                                    <div class="bar">
                                                                        <div class="bar-inner count-bar" data-percent="36%">
                                                                            <div class="count-text">36%</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="causes-one__goals">
                                                                        <p><span>$25,270</span> Raised</p>
                                                                        <p><span>$30,000</span> Goal</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="causes-one__single">
                                                            <div class="causes-one__img">
                                                                <img src="{{ asset('assets/images/resources/causes-1-1.jpg') }}" alt="">
                                                                <div class="causes-one__cat">
                                                                    <p>Food</p>
                                                                </div>
                                                            </div>
                                                            <div class="causes-one__content">
                                                                <h3 class="causes-one__title"><a href="{{ route('donationDetails') }}">There are many
                                                                        variations of passages of
                                                                    </a>
                                                                </h3>
                                                                <p class="causes-one__text">There are many of lorem, but
                                                                    majori have
                                                                    suffered alteration in some form.</p>
                                                                <div class="causes-one__progress">
                                                                    <div class="causes-one__progress-shape" style="background-image:url('{{ asset('assets/images/shapes/causes-one-progress-shape-1.png') }}')">
                                                                    </div>
                                                                    <div class="bar">
                                                                        <div class="bar-inner count-bar" data-percent="36%">
                                                                            <div class="count-text">36%</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="causes-one__goals">
                                                                        <p><span>$25,270</span> Raised</p>
                                                                        <p><span>$30,000</span> Goal</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--tab-->
                                        <div class="tab" id="food-water">
                                            <div class="causes-two__inner-content">
                                                <div class="causes-two__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{
                                                    "loop": true,
                                                    "autoplay": true,
                                                    "margin": 30,
                                                    "nav": true,
                                                    "dots": false,
                                                    "smartSpeed": 500,
                                                    "autoplayTimeout": 10000,
                                                    "navText": ["<span class=\"fa fa-angle-left\"><p>Previous</p></span>",
                                                    "<span class=\"fa fa-angle-right\"><p>Next</p></span>"],
                                                    "responsive": {
                                                        "0": {
                                                            "items": 1
                                                        },
                                                        "768": {
                                                            "items": 1
                                                        },
                                                        "992": {
                                                            "items": 3
                                                        },
                                                        "1200": {
                                                            "items": 3.181111
                                                        }
                                                    }
                                                }'>
                                                    <div class="item">
                                                        <div class="causes-one__single">
                                                            <div class="causes-one__img">
                                                                <img src="{{ asset('assets/images/resources/causes-1-1.jpg') }}" alt="">
                                                                <div class="causes-one__cat">
                                                                    <p>Education</p>
                                                                </div>
                                                            </div>
                                                            <div class="causes-one__content">
                                                                <h3 class="causes-one__title"><a href="{{ route('donationDetails') }}">Let’s
                                                                        education
                                                                        for children get good life</a>
                                                                </h3>
                                                                <p class="causes-one__text">There are many of lorem, but
                                                                    majori have
                                                                    suffered alteration in some form.</p>
                                                                <div class="causes-one__progress">
                                                                    <div class="causes-one__progress-shape" style="background-image:url('{{ asset('assets/images/shapes/causes-one-progress-shape-1.png') }}')">
                                                                    </div>
                                                                    <div class="bar">
                                                                        <div class="bar-inner count-bar" data-percent="36%">
                                                                            <div class="count-text">36%</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="causes-one__goals">
                                                                        <p><span>$25,270</span> Raised</p>
                                                                        <p><span>$30,000</span> Goal</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="causes-one__single">
                                                            <div class="causes-one__img">
                                                                <img src="{{ asset('assets/images/resources/causes-1-2.jpg') }}" alt="">
                                                                <div class="causes-one__cat">
                                                                    <p>Medical</p>
                                                                </div>
                                                            </div>
                                                            <div class="causes-one__content">
                                                                <h3 class="causes-one__title"><a href="{{ route('donationDetails') }}">It is a long
                                                                        established fact that a reader
                                                                    </a>
                                                                </h3>
                                                                <p class="causes-one__text">There are many of lorem, but
                                                                    majori have
                                                                    suffered alteration in some form.</p>
                                                                <div class="causes-one__progress">
                                                                    <div class="causes-one__progress-shape" style="background-image:url('{{ asset('assets/images/shapes/causes-one-progress-shape-1.png') }}')">
                                                                    </div>
                                                                    <div class="bar">
                                                                        <div class="bar-inner count-bar" data-percent="36%">
                                                                            <div class="count-text">36%</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="causes-one__goals">
                                                                        <p><span>$25,270</span> Raised</p>
                                                                        <p><span>$30,000</span> Goal</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="causes-one__single">
                                                            <div class="causes-one__img">
                                                                <img src="{{ asset('assets/images/resources/causes-1-3.jpg') }}" alt="">
                                                                <div class="causes-one__cat">
                                                                    <p>Food</p>
                                                                </div>
                                                            </div>
                                                            <div class="causes-one__content">
                                                                <h3 class="causes-one__title"><a href="{{ route('donationDetails') }}">There are many
                                                                        variations of passages of
                                                                    </a>
                                                                </h3>
                                                                <p class="causes-one__text">There are many of lorem, but
                                                                    majori have
                                                                    suffered alteration in some form.</p>
                                                                <div class="causes-one__progress">
                                                                    <div class="causes-one__progress-shape" style="background-image:url('{{ asset('assets/images/shapes/causes-one-progress-shape-1.png') }}')">
                                                                    </div>
                                                                    <div class="bar">
                                                                        <div class="bar-inner count-bar" data-percent="36%">
                                                                            <div class="count-text">36%</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="causes-one__goals">
                                                                        <p><span>$25,270</span> Raised</p>
                                                                        <p><span>$30,000</span> Goal</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="causes-one__single">
                                                            <div class="causes-one__img">
                                                                <img src="{{ asset('assets/images/resources/causes-1-1.jpg') }}" alt="">
                                                                <div class="causes-one__cat">
                                                                    <p>Food</p>
                                                                </div>
                                                            </div>
                                                            <div class="causes-one__content">
                                                                <h3 class="causes-one__title"><a href="{{ route('donationDetails') }}">There are many
                                                                        variations of passages of
                                                                    </a>
                                                                </h3>
                                                                <p class="causes-one__text">There are many of lorem, but
                                                                    majori have
                                                                    suffered alteration in some form.</p>
                                                                <div class="causes-one__progress">
                                                                    <div class="causes-one__progress-shape" style="background-image:url('{{ asset('assets/images/shapes/causes-one-progress-shape-1.png') }}')">
                                                                    </div>
                                                                    <div class="bar">
                                                                        <div class="bar-inner count-bar" data-percent="36%">
                                                                            <div class="count-text">36%</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="causes-one__goals">
                                                                        <p><span>$25,270</span> Raised</p>
                                                                        <p><span>$30,000</span> Goal</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--tab-->
                                        <div class="tab" id="charity">
                                            <div class="causes-two__inner-content">
                                                <div class="causes-two__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{
                                                    "loop": true,
                                                    "autoplay": true,
                                                    "margin": 30,
                                                    "nav": true,
                                                    "dots": false,
                                                    "smartSpeed": 500,
                                                    "autoplayTimeout": 10000,
                                                    "navText": ["<span class=\"fa fa-angle-left\"><p>Previous</p></span>",
                                                    "<span class=\"fa fa-angle-right\"><p>Next</p></span>"],
                                                    "responsive": {
                                                        "0": {
                                                            "items": 1
                                                        },
                                                        "768": {
                                                            "items": 1
                                                        },
                                                        "992": {
                                                            "items": 3
                                                        },
                                                        "1200": {
                                                            "items": 3.181111
                                                        }
                                                    }
                                                }'>
                                                    <div class="item">
                                                        <div class="causes-one__single">
                                                            <div class="causes-one__img">
                                                                <img src="{{ asset('assets/images/resources/causes-1-1.jpg') }}" alt="">
                                                                <div class="causes-one__cat">
                                                                    <p>Education</p>
                                                                </div>
                                                            </div>
                                                            <div class="causes-one__content">
                                                                <h3 class="causes-one__title"><a href="{{ route('donationDetails') }}">Let’s
                                                                        education
                                                                        for children get good life</a>
                                                                </h3>
                                                                <p class="causes-one__text">There are many of lorem, but
                                                                    majori have
                                                                    suffered alteration in some form.</p>
                                                                <div class="causes-one__progress">
                                                                    <div class="causes-one__progress-shape" style="background-image:url('{{ asset('assets/images/shapes/causes-one-progress-shape-1.png') }}')">
                                                                    </div>
                                                                    <div class="bar">
                                                                        <div class="bar-inner count-bar" data-percent="36%">
                                                                            <div class="count-text">36%</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="causes-one__goals">
                                                                        <p><span>$25,270</span> Raised</p>
                                                                        <p><span>$30,000</span> Goal</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="causes-one__single">
                                                            <div class="causes-one__img">
                                                                <img src="{{ asset('assets/images/resources/causes-1-2.jpg') }}" alt="">
                                                                <div class="causes-one__cat">
                                                                    <p>Medical</p>
                                                                </div>
                                                            </div>
                                                            <div class="causes-one__content">
                                                                <h3 class="causes-one__title"><a href="{{ route('donationDetails') }}">It is a long
                                                                        established fact that a reader</a>
                                                                </h3>
                                                                <p class="causes-one__text">There are many of lorem, but
                                                                    majori have
                                                                    suffered alteration in some form.</p>
                                                                <div class="causes-one__progress">
                                                                    <div class="causes-one__progress-shape" style="background-image:url('{{ asset('assets/images/shapes/causes-one-progress-shape-1.png') }}')">
                                                                    </div>
                                                                    <div class="bar">
                                                                        <div class="bar-inner count-bar" data-percent="36%">
                                                                            <div class="count-text">36%</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="causes-one__goals">
                                                                        <p><span>$25,270</span> Raised</p>
                                                                        <p><span>$30,000</span> Goal</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="causes-one__single">
                                                            <div class="causes-one__img">
                                                                <img src="{{ asset('assets/images/resources/causes-1-3.jpg') }}" alt="">
                                                                <div class="causes-one__cat">
                                                                    <p>Food</p>
                                                                </div>
                                                            </div>
                                                            <div class="causes-one__content">
                                                                <h3 class="causes-one__title"><a href="{{ route('donationDetails') }}">There are many
                                                                        variations of passages of
                                                                    </a>
                                                                </h3>
                                                                <p class="causes-one__text">There are many of lorem, but
                                                                    majori have
                                                                    suffered alteration in some form.</p>
                                                                <div class="causes-one__progress">
                                                                    <div class="causes-one__progress-shape" style="background-image:url('{{ asset('assets/images/shapes/causes-one-progress-shape-1.png') }}')">
                                                                    </div>
                                                                    <div class="bar">
                                                                        <div class="bar-inner count-bar" data-percent="36%">
                                                                            <div class="count-text">36%</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="causes-one__goals">
                                                                        <p><span>$25,270</span> Raised</p>
                                                                        <p><span>$30,000</span> Goal</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="causes-one__single">
                                                            <div class="causes-one__img">
                                                                <img src="{{ asset('assets/images/resources/causes-1-1.jpg') }}" alt="">
                                                                <div class="causes-one__cat">
                                                                    <p>Food</p>
                                                                </div>
                                                            </div>
                                                            <div class="causes-one__content">
                                                                <h3 class="causes-one__title"><a href="{{ route('donationDetails') }}">There are many
                                                                        variations of passages of
                                                                    </a>
                                                                </h3>
                                                                <p class="causes-one__text">There are many of lorem, but
                                                                    majori have
                                                                    suffered alteration in some form.</p>
                                                                <div class="causes-one__progress">
                                                                    <div class="causes-one__progress-shape" style="background-image:url('{{ asset('assets/images/shapes/causes-one-progress-shape-1.png') }}')">
                                                                    </div>
                                                                    <div class="bar">
                                                                        <div class="bar-inner count-bar" data-percent="36%">
                                                                            <div class="count-text">36%</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="causes-one__goals">
                                                                        <p><span>$25,270</span> Raised</p>
                                                                        <p><span>$30,000</span> Goal</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Causse Two End-->

        <!--Testimonial Two Start-->
        <section class="testimonial-two">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Our testimonials</span>
                    <h2 class="section-title__title">What they’re talking <br> about oxpins</h2>
                </div>
                <div class="testimonial-two__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{
                    "loop": true,
                    "autoplay": true,
                    "margin": 30,
                    "nav": false,
                    "dots": false,
                    "smartSpeed": 500,
                    "autoplayTimeout": 10000,
                    "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
                    "responsive": {
                        "0": {
                            "items": 1
                        },
                        "768": {
                            "items": 1
                        },
                        "992": {
                            "items": 2
                        },
                        "1200": {
                            "items": 3
                        }
                    }
                }'>
                    <div class="item">
                        <!--Testimonial Two Single Start-->
                        <div class="testimonial-two__single">
                            <div class="testimonial-two__img">
                                <img src="{{ asset('assets/images/testimonial/testimonial-2-1.jpg') }}" alt="">
                            </div>
                            <div class="testimonial-two__content">
                                <div class="testimonial-two__shape-1" style="background-image:url('{{ asset('assets/images/shapes/testimonial-two-shape-1.png') }}')">
                                </div>
                                <p class="testimonial-two__text">This is due to their best service, pricing and customer
                                    support. It’s throughly refresing to such a personal touch. Duis aute irure lupsum
                                    reprehenderit.</p>
                                <div class="testimonial-two__client-info">
                                    <h4 class="testimonial-two__client-name">Sarah albert</h4>
                                    <p class="testimonial-two__client-sub-title">Volunteer</p>
                                </div>
                                <div class="testimonial-two__rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <!--Testimonial Two Single End-->
                    </div>
                    <div class="item">
                        <!--Testimonial Two Single Start-->
                        <div class="testimonial-two__single">
                            <div class="testimonial-two__img">
                                <img src="{{ asset('assets/images/testimonial/testimonial-2-2.jpg') }}" alt="">
                            </div>
                            <div class="testimonial-two__content">
                                <div class="testimonial-two__shape-1" style="background-image:url('{{ asset('assets/images/shapes/testimonial-two-shape-1.png') }}')">
                                </div>
                                <p class="testimonial-two__text">This is due to their best service, pricing and customer
                                    support. It’s throughly refresing to such a personal touch. Duis aute irure lupsum
                                    reprehenderit.</p>
                                <div class="testimonial-two__client-info">
                                    <h4 class="testimonial-two__client-name">Kevin martin</h4>
                                    <p class="testimonial-two__client-sub-title">Volunteer</p>
                                </div>
                                <div class="testimonial-two__rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <!--Testimonial Two Single End-->
                    </div>
                    <div class="item">
                        <!--Testimonial Two Single Start-->
                        <div class="testimonial-two__single">
                            <div class="testimonial-two__img">
                                <img src="{{ asset('assets/images/testimonial/testimonial-2-3.jpg') }}" alt="">
                            </div>
                            <div class="testimonial-two__content">
                                <div class="testimonial-two__shape-1" style="background-image:url('{{ asset('assets/images/shapes/testimonial-two-shape-1.png') }}')">
                                </div>
                                <p class="testimonial-two__text">This is due to their best service, pricing and customer
                                    support. It’s throughly refresing to such a personal touch. Duis aute irure lupsum
                                    reprehenderit.</p>
                                <div class="testimonial-two__client-info">
                                    <h4 class="testimonial-two__client-name">Jessica brown</h4>
                                    <p class="testimonial-two__client-sub-title">Volunteer</p>
                                </div>
                                <div class="testimonial-two__rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <!--Testimonial Two Single End-->
                    </div>
                </div>
            </div>
        </section>
        <!--Testimonial Two End-->

        <!--Gallery Two Start-->
        <section class="gallery-two">
            <div class="gallery-one__bottom">
                <div class="gallery-one__container">
                    <ul class="list-unstyled gallery-one__list">
                        <li class="gallery-one__single wow fadeInUp" data-wow-delay="100ms">
                            <div class="gallery-one__img">
                                <img src="{{ asset('assets/images/gallery/gallery-1-1.jpg') }}" alt="">
                                <a href="assets/images/gallery/gallery-1-1.jpg" class="img-popup"></a>
                                <div class="gallery-one__content">
                                    <p class="gallery-one__sub-title">Charity</p>
                                    <h5 class="gallery-one__title"><a href="{{ route('gallery') }}">Education</a></h5>
                                </div>
                            </div>
                        </li>
                        <li class="gallery-one__single wow fadeInUp" data-wow-delay="200ms">
                            <div class="gallery-one__img">
                                <img src="{{ asset('assets/images/gallery/gallery-1-2.jpg') }}" alt="">
                                <a href="assets/images/gallery/gallery-1-2.jpg" class="img-popup"></a>
                                <div class="gallery-one__content">
                                    <p class="gallery-one__sub-title">Charity</p>
                                    <h5 class="gallery-one__title"><a href="{{ route('gallery') }}">Education</a></h5>
                                </div>
                            </div>
                        </li>
                        <li class="gallery-one__single wow fadeInUp" data-wow-delay="300ms">
                            <div class="gallery-one__img">
                                <img src="{{ asset('assets/images/gallery/gallery-1-3.jpg') }}" alt="">
                                <a href="assets/images/gallery/gallery-1-3.jpg" class="img-popup"></a>
                                <div class="gallery-one__content">
                                    <p class="gallery-one__sub-title">Charity</p>
                                    <h5 class="gallery-one__title"><a href="{{ route('gallery') }}">Education</a></h5>
                                </div>
                            </div>
                        </li>
                        <li class="gallery-one__single wow fadeInUp" data-wow-delay="400ms">
                            <div class="gallery-one__img">
                                <img src="{{ asset('assets/images/gallery/gallery-1-4.jpg') }}" alt="">
                                <a href="assets/images/gallery/gallery-1-4.jpg" class="img-popup"></a>
                                <div class="gallery-one__content">
                                    <p class="gallery-one__sub-title">Charity</p>
                                    <h5 class="gallery-one__title"><a href="{{ route('gallery') }}">Education</a></h5>
                                </div>
                            </div>
                        </li>
                        <li class="gallery-one__single wow fadeInUp" data-wow-delay="500ms">
                            <div class="gallery-one__img">
                                <img src="{{ asset('assets/images/gallery/gallery-1-5.jpg') }}" alt="">
                                <a href="assets/images/gallery/gallery-1-5.jpg" class="img-popup"></a>
                                <div class="gallery-one__content">
                                    <p class="gallery-one__sub-title">Charity</p>
                                    <h5 class="gallery-one__title"><a href="{{ route('gallery') }}">Education</a></h5>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Gallery Two End-->

        <!--Help Start-->
        <section class="help">
            <div class="help-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%" style="background-image:url('{{ asset('assets/images/backgrounds/help-bg.jpg') }}')"></div>
            <div class="help-shape-1" style="background-image:url('{{ asset('assets/images/shapes/help-shape-1.png') }}')"></div>
            <div class="container">
                <div class="row">
                    <!--Help Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="help__single">
                            <div class="help__single-inner">
                                <div class="help__icon">
                                    <span class="icon-charity"></span>
                                </div>
                                <div class="help__content">
                                    <h4 class="help__title"><a href="{{ route('becomeVolunteer') }}">Become a volunteer</a></h4>
                                    <p class="help__text">There are many variations of but the majority have simply free
                                        text suffered.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Help Single End-->
                    <!--Help Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="help__single">
                            <div class="help__single-inner">
                                <div class="help__icon">
                                    <span class="icon-generous"></span>
                                </div>
                                <div class="help__content">
                                    <h4 class="help__title"><a href="{{ route('about') }}">Quick fundraising</a></h4>
                                    <p class="help__text">There are many variations of but the majority have simply free
                                        text suffered.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Help Single End-->
                    <!--Help Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <div class="help__single">
                            <div class="help__single-inner">
                                <div class="help__icon">
                                    <span class="icon-fundraiser"></span>
                                </div>
                                <div class="help__content">
                                    <h4 class="help__title"><a href="{{ route('donateNow') }}">Start donating</a></h4>
                                    <p class="help__text">There are many variations of but the majority have simply free
                                        text suffered.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Help Single End-->
                </div>
            </div>
        </section>
        <!--Help End-->

        <!--Urgent Cause Start-->
        <section class="urgent-cause">
            <div class="container">
                <div class="urgent-cause__inner wow fadeInUp" data-wow-delay="100ms">
                    <div class="urgent-cause-bg" style="background-image:url('{{ asset('assets/images/backgrounds/urgent-cause-bg.jpg') }}')"></div>
                    <div class="urgent-cause__top">
                        <div class="urgent-cause__top-left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Donate to urgent cause</span>
                                <h2 class="section-title__title">Support for eating funds <br> for hungry people</h2>
                            </div>
                        </div>
                        <div class="urgent-cause__top-right">
                            <p class="urgent-cause__top-text">if you want a detail for this click this button now</p>
                            <div class="urgent-cause__btn">
                                <a href="{{ route('donateNow') }}"> <span class="fa fa-heart"></span>Donate now</a>
                            </div>
                            <p class="urgent-cause__date">10 July 2022</p>
                        </div>
                    </div>
                    <div class="urgent-cause__progress">
                        <div class="bar">
                            <div class="bar-inner count-bar" data-percent="70%">
                                <div class="count-text">70%</div>
                            </div>
                        </div>
                        <div class="urgent-cause__goals">
                            <p><span>$28,000.00</span> Donated</p>
                            <p><span>$80,000.00</span> Goal</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Urgent Cause End-->

        <!--Team One Start-->
        <section class="team-one">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Our expert team</span>
                    <h2 class="section-title__title">Meet the team behind <br> their success story</h2>
                </div>
                <div class="row">
                    <!--Team One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="team-one__single">
                            <div class="team-one__img">
                                <img src="{{ asset('assets/images/team/team-1-1.jpg') }}" alt="">
                                <div class="team-one__social">
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-one__content">
                                <h3 class="team-one__name"><a href="#">Sarah albert</a></h3>
                                <p class="team-one__sub-title">Volunteer</p>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="team-one__single">
                            <div class="team-one__img">
                                <img src="{{ asset('assets/images/team/team-1-2.jpg') }}" alt="">
                                <div class="team-one__social">
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-one__content">
                                <h3 class="team-one__name"><a href="#">Kevin martin</a></h3>
                                <p class="team-one__sub-title">Volunteer</p>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="team-one__single">
                            <div class="team-one__img">
                                <img src="{{ asset('assets/images/team/team-1-3.jpg') }}" alt="">
                                <div class="team-one__social">
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-one__content">
                                <h3 class="team-one__name"><a href="#">Aleesha eve</a></h3>
                                <p class="team-one__sub-title">Volunteer</p>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="team-one__single">
                            <div class="team-one__img">
                                <img src="{{ asset('assets/images/team/team-1-4.jpg') }}" alt="">
                                <div class="team-one__social">
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-one__content">
                                <h3 class="team-one__name"><a href="#">David cooper</a></h3>
                                <p class="team-one__sub-title">Volunteer</p>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                </div>
            </div>
        </section>
        <!--Team One End-->

        <!--Google Map Start-->
        <section class="google-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd" class="google-map__one" allowfullscreen></iframe>
        </section>
        <!--Google Map End-->

        <!--Contact One Start-->
        <section class="contact-one">
            <div class="container">
                <div class="contact-one__inne">
                    <ul class="list-unstyled contact-one__list">
                        <li class="contact-one__single">
                            <div class="contact-one__icon">
                                <span class="icon-phone-call"></span>
                            </div>
                            <div class="contact-one__content">
                                <p class="contact-one__sub-title">Helpline</p>
                                <h3 class="contact-one__number"><a href="tel:980009630">+ 98 (000) - 9630</a></h3>
                            </div>
                        </li>
                        <li class="contact-one__single">
                            <div class="contact-one__icon">
                                <span class="icon-message"></span>
                            </div>
                            <div class="contact-one__content">
                                <p class="contact-one__sub-title">Send email</p>
                                <h3 class="contact-one__number"><a href="mailto:needhelp@company.com">needhelp@company.com</a></h3>
                            </div>
                        </li>
                        <li class="contact-one__single">
                            <div class="contact-one__icon">
                                <span class="icon-location"></span>
                            </div>
                            <div class="contact-one__content">
                                <p class="contact-one__sub-title">380 St Kilda Road</p>
                                <h3 class="contact-one__number">Melbourne, Australia</h3>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Contact One End-->

        <!--News Two Start-->
        <section class="news-two">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">News & articles</span>
                    <h2 class="section-title__title">Directly from the <br> latest news and articles</h2>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-4">
                        <div class="news-two__single">
                            <div class="news-two__img-one">
                                <img src="{{ asset('assets/images/blog/news-2-1.jpg') }}" alt="">
                                <div class="news-two__date-one">
                                    <p>23 May, 2022</p>
                                </div>
                            </div>
                            <div class="news-two__content-one">
                                <ul class="list-unstyled news-two__meta-one">
                                    <li><a href="{{ route('newsDetails') }}"><i class="far fa-user-circle"></i> By admin</a>
                                    </li>
                                    <li><a href="{{ route('newsDetails') }}"><i class="fas fa-comments"></i> 2
                                            Comments</a>
                                    </li>
                                </ul>
                                <h3 class="news-two__title-one"><a href="{{ route('newsDetails') }}">How does the
                                        malnutrition affect children?</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-8">
                        <div class="news-two__single">
                            <ul class="list-unstyled news-two__list">
                                <li class="news-two__list-single">
                                    <div class="news-two__img-two">
                                        <img src="{{ asset('assets/images/blog/news-2-2.jpg') }}" alt="">
                                        <div class="news-two__date-two">
                                            <p>23 May, 2022</p>
                                        </div>
                                    </div>
                                    <div class="news-two__content-two">
                                        <ul class="list-unstyled news-two__meta-two">
                                            <li><a href="{{ route('newsDetails') }}"><i class="far fa-user-circle"></i> By
                                                    admin</a>
                                            </li>
                                            <li><a href="{{ route('newsDetails') }}"><i class="fas fa-comments"></i> 2
                                                    Comments</a>
                                            </li>
                                        </ul>
                                        <h3 class="news-two__title-two"><a href="{{ route('newsDetails') }}">Donation is hope for
                                                poor childrens in africa</a></h3>
                                    </div>
                                </li>
                                <li class="news-two__list-single">
                                    <div class="news-two__img-two">
                                        <img src="{{ asset('assets/images/blog/news-2-3.jpg') }}" alt="">
                                        <div class="news-two__date-two">
                                            <p>23 May, 2022</p>
                                        </div>
                                    </div>
                                    <div class="news-two__content-two">
                                        <ul class="list-unstyled news-two__meta-two">
                                            <li><a href="{{ route('newsDetails') }}"><i class="far fa-user-circle"></i> By
                                                    admin</a>
                                            </li>
                                            <li><a href="{{ route('newsDetails') }}"><i class="fas fa-comments"></i> 2
                                                    Comments</a>
                                            </li>
                                        </ul>
                                        <h3 class="news-two__title-two"><a href="{{ route('newsDetails') }}">It has roots in a
                                                piece of classical Latin</a></h3>
                                    </div>
                                </li>
                                <li class="news-two__list-single">
                                    <div class="news-two__img-two">
                                        <img src="{{ asset('assets/images/blog/news-2-4.jpg') }}" alt="">
                                        <div class="news-two__date-two">
                                            <p>23 May, 2022</p>
                                        </div>
                                    </div>
                                    <div class="news-two__content-two">
                                        <ul class="list-unstyled news-two__meta-two">
                                            <li><a href="{{ route('newsDetails') }}"><i class="far fa-user-circle"></i> By
                                                    admin</a>
                                            </li>
                                            <li><a href="{{ route('newsDetails') }}"><i class="fas fa-comments"></i> 2
                                                    Comments</a>
                                            </li>
                                        </ul>
                                        <h3 class="news-two__title-two"><a href="{{ route('newsDetails') }}">randomised words
                                                which don't look even</a></h3>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--News Two End-->

        <!--Brand One Start-->
        <section class="brand-one brand-two">
            <div class="brand-two-shape-1" style="background-image:url('{{ asset('assets/images/shapes/brand-two-shape-1.png') }}')">
            </div>
            <div class="container">
                <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                            "0": {
                                "spaceBetween": 30,
                                "slidesPerView": 2
                            },
                            "375": {
                                "spaceBetween": 30,
                                "slidesPerView": 2
                            },
                            "575": {
                                "spaceBetween": 30,
                                "slidesPerView": 3
                            },
                            "767": {
                                "spaceBetween": 50,
                                "slidesPerView": 4
                            },
                            "991": {
                                "spaceBetween": 50,
                                "slidesPerView": 5
                            },
                            "1199": {
                                "spaceBetween": 100,
                                "slidesPerView": 6
                            }
                        }}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/images/brand/brand-1-1.png') }}" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/images/brand/brand-1-2.png') }}" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/images/brand/brand-1-3.png') }}" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/images/brand/brand-1-4.png') }}" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/images/brand/brand-1-5.png') }}" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/images/brand/brand-1-6.png') }}" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/images/brand/brand-1-1.png') }}" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/images/brand/brand-1-2.png') }}" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/images/brand/brand-1-3.png') }}" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/images/brand/brand-1-4.png') }}" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/images/brand/brand-1-5.png') }}" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/images/brand/brand-1-6.png') }}" alt="">
                        </div><!-- /.swiper-slide -->
                    </div>
                </div>
            </div>
        </section>
        <!--Brand One End-->

@endsection