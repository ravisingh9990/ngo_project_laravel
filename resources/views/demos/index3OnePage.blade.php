@extends('layout.layout2')

@php
    $headTitle="Home Three || Oxpins || Oxpins HTML 5 Template ";
@endphp

@section('content')

    <!-- /.preloader -->
    <div class="page-wrapper">
        <header class="main-header-three">
            <nav class="main-menu main-menu-three">
                <div class="main-menu-three__wrapper">
                    <div class="main-menu-three__wrapper-inner">
                        <div class="main-menu-three__left">
                            <div class="main-menu-three__logo">
                               <a href="{{ route('index') }}"><img src="{{ asset('assets/images/resources/logo-2.png') }}" alt=""></a>
                            </div>
                        </div>
                        <div class="main-menu-three__right">
                            <div class="main-menu-three__right-inner">
                                <div class="main-menu-three__right-content-box">
                                    <div class="main-menu-three__right-top">
                                        <div class="main-menu-three__volunteers">
                                            <div class="main-menu-three__volunteers-icon">
                                                <img src="{{ asset('assets/images/icon/main-menu-heart-icon-2.png') }}" alt="">
                                            </div>
                                            <div class="main-menu-three__volunteers-text-box">
                                                <p class="main-menu-three__volunteers-text"><a
                                                href="{{ route('becomeVolunteer') }}">Become a
                                                        <span>volunteers</span></a></p>
                                            </div>
                                        </div>
                                        <div class="main-menu-three__call">
                                            <div class="main-menu-three__icon">
                                                <i class="fas fa-phone"></i>
                                            </div>
                                            <div class="main-menu-three__number">
                                                <a href="tel:980009630">+ 98 (000) - 9630</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="main-menu-three__right-bottom">
                                        <div class="main-menu-three__main-menu-box">
                                            <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                            <ul class="main-menu__list one-page-scroll-menu">
                                                <li class="current scrollToLink">
                                                    <a href="#home">Home </a>
                                                </li>
                                                <li class="scrollToLink">
                                                    <a href="#about">About</a>
                                                </li>
                                                <li class="scrollToLink">
                                                    <a href="#donations">Donations</a>
                                                </li>
                                                <li class="scrollToLink">
                                                    <a href="#testimonial">Testimonial</a>
                                                </li>
                                                <li class="scrollToLink">
                                                    <a href="#events">Events</a>
                                                </li>
                                                <li class="scrollToLink">
                                                    <a href="#news">News</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="main-menu-three__search-cat">
                                            <div class="main-menu-three__search-box">
                                                <a href="#"
                                                    class="main-menu-three__search search-toggler icon-magnifying-glass"></a>
                                            </div>
                                            <div class="main-menu__cat-box">
                                                <a href="{{ route('cart') }}" class="main-menu__cart icon-shopping-cart"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-menu-three__btn-box">
                                    <a href="{{ route('donateNow') }}" class="main-menu-three__btn"> <span
                                            class="fa fa-heart"></span> Donate
                                        now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div class="stricky-header stricked-menu main-menu main-menu-three">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Main Slider Start-->
        <section class="main-slider-three clearfix" id="home">
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
                        <div class="image-layer-three"
                            style="background-image:url('{{ asset('assets/images/backgrounds/main-slider-3-1.jpg') }}')"></div>
                        <!-- /.image-layer -->
                        <div class="main-slider-three-color"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider-three__content">
                                        <p class="main-slider-three__sub-title">Welcome to Oxpins Non Profit Theme</p>
                                        <h2 class="main-slider-three__title">Let’s give them a <br> helping hand</h2>
                                        <div class="main-slider-three__btn-box">
                                            <a href="{{ route('about') }}" class="thm-btn main-slider-three__btn">Discover
                                                more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="image-layer-three"
                            style="background-image:url('{{ asset('assets/images/backgrounds/main-slider-3-2.jpg') }}')"></div>
                        <!-- /.image-layer -->
                        <div class="main-slider-three-color"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider-three__content">
                                        <p class="main-slider-three__sub-title">Welcome to Oxpins Non Profit Theme</p>
                                        <h2 class="main-slider-three__title">Let’s give them a <br> helping hand</h2>
                                        <div class="main-slider-three__btn-box">
                                            <a href="{{ route('about') }}" class="thm-btn main-slider-three__btn">Discover
                                                more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="image-layer-three"
                            style="background-image:url('{{ asset('assets/images/backgrounds/main-slider-3-3.jpg') }}')"></div>
                        <!-- /.image-layer -->
                        <div class="main-slider-three-color"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider-three__content">
                                        <p class="main-slider-three__sub-title">Welcome to Oxpins Non Profit Theme</p>
                                        <h2 class="main-slider-three__title">Let’s give them a <br> helping hand</h2>
                                        <div class="main-slider-three__btn-box">
                                            <a href="{{ route('about') }}" class="thm-btn main-slider-three__btn">Discover
                                                more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- If we need navigation buttons -->


            </div>
        </section>
        <!--Main Slider End-->

        <!--Make Donation Start-->
        <section class="make-donation">
            <div class="container">
                <div class="make-donation__inner">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6">
                            <div class="make-donation__left">
                                <div class="make-donation__img">
                                    <img src="{{ asset('assets/images/resources/make-donation-img-1.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-6">
                            <div class="make-donation__right">
                                <div class="make-donation__content">
                                    <div class="make-donation__btn-box">
                                        <a href="{{ route('donateNow') }}" class="thm-btn make-donation__btn">Donate now</a>
                                    </div>
                                    <ul class="list-unstyled make-donation__meta">
                                        <li><a href="#"> <i class="fas fa-calendar-alt"></i> 45 Days Left</a></li>
                                        <li><a href="#"> <i class="fas fa-user"></i> 40+ Suppoters</a></li>
                                    </ul>
                                    <h3 class="make-donation__title">Contribute for the differently abled</h3>
                                    <p class="make-donation__text">Proactively procrastinate cross-platform results via
                                        extensive ideas distinctively <br> underwhelm enterprise.</p>
                                    <ul class="list-unstyled make-donation__raised-goal">
                                        <li>
                                            <div class="icon">
                                                <i class="far fa-hand-paper"></i>
                                            </div>
                                            <div class="content">
                                                <p>Raised</p>
                                                <h4>$26.0000</h4>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class="dolar-icon-style">$</i>
                                            </div>
                                            <div class="content">
                                                <p>Raised</p>
                                                <h4>$26.0000</h4>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Make Donation End-->

        <!--About Three Start-->
        <section class="about-three" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-three__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Join us and start donating</span>
                                <h2 class="section-title__title">We’re non-profit charity & NGO organization</h2>
                            </div>
                            <p class="about-three__text-1">With schools closed in NSW and Victoria, and childcare
                                restricted to authorized workers in Victoria, many children will be at home for the next
                                few weeks. And with their usual creative and physical outlets – libraries, sports,
                                playgroups, and other public places.</p>
                            <p class="about-three__text-2">Use Zoom, Facetime, or Skype to keep in touch with family and
                                friends, both local and overseas to stay social, and maintain friendships and
                                relationships when you can’t be together.</p>
                            <a href="{{ route('about') }}" class="thm-btn about-three__btn">Discover More</a>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-three__right">
                            <div class="about-three__img-box  wow slideInRight" data-wow-delay="100ms"
                                data-wow-duration="2500ms">
                                <div class="about-three__img">
                                    <img src="{{ asset('assets/images/resources/about-three-img.jpg') }}" alt="">
                                </div>
                                <div class="about-three__img-two">
                                    <img src="{{ asset('assets/images/resources/about-three-img-2.jpg') }}" alt="">
                                </div>
                                <div class="about-three__help">
                                    <div class="about-three__help-shape"
                                        style="background-image:url('{{ asset('assets/images/shapes/about-three-help-shape.png') }}')">
                                    </div>
                                    <div class="about-three__help-conten-box">
                                        <div class="about-three__help-count">
                                            <h3 class="odometer" data-count="280">00</h3>
                                            <span class="about-three__help-letter">k</span>
                                        </div>
                                        <p class="about-three__help-text">We’ve helped our <br> poor children</p>
                                    </div>
                                </div>
                                <div class="about-three__border"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About Three End-->

        <!--Feature Three Start-->
        <section class="feature-three">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-12">
                        <div class="feature-three__single">
                            <div class="feature-three__img"
                                style="background-image:url('{{ asset('assets/images/resources/feature-3-1.png') }}')"></div>
                            <div class="feature-three__title-box">
                                <h3 class="feature-three__title">Partner</h3>
                            </div>
                            <div class="feature-three__btn">
                                <a href="{{ route('about') }}">Join us</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12">
                        <div class="feature-three__single">
                            <div class="feature-three__img"
                                style="background-image:url('{{ asset('assets/images/resources/feature-3-2.png') }}')"></div>
                            <div class="feature-three__title-box">
                                <h3 class="feature-three__title">Mission</h3>
                            </div>
                            <div class="feature-three__btn feature-three__btn-two">
                                <a href="{{ route('about') }}">See more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12">
                        <div class="feature-three__single">
                            <div class="feature-three__img"
                                style="background-image:url('{{ asset('assets/images/resources/feature-3-3.png') }}')"></div>
                            <div class="feature-three__title-box">
                                <h3 class="feature-three__title">Vision</h3>
                            </div>
                            <div class="feature-three__btn feature-three__btn-two">
                                <a href="{{ route('about') }}">See more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Feature Three End-->

        <!--Causes Three Start-->
        <section class="causes-three" id="donations">
            <div class="causes-three-bg-box">
                <div class="causes-three-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                    style="background-image:url('{{ asset('assets/images/backgrounds/causes-three-bg.jpg') }}')"></div>
                <div class="causes-three-shape-1"
                    style="background-image:url('{{ asset('assets/images/shapes/causes-three-shape-1.png') }}')"></div>
            </div>
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Help & donate</span>
                    <h2 class="section-title__title">Find the popular cause <br> and donate them</h2>
                </div>
                <div class="row">
                    <!--Causes One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="causes-one__single">
                            <div class="causes-one__img">
                                <img src="{{ asset('assets/images/resources/causes-3-1.jpg') }}" alt="">
                                <div class="causes-one__cat">
                                    <p>Education</p>
                                </div>
                            </div>
                            <div class="causes-one__content">
                                <h3 class="causes-one__title"><a href="{{ route('donationDetails') }}">Let’s education for
                                        children get good life</a>
                                </h3>
                                <p class="causes-one__text">There are many of lorem, but majori have
                                    suffered alteration in some form.</p>
                                <div class="causes-one__progress">
                                    <div class="causes-one__progress-shape"
                                        style="background-image:url('{{ asset('assets/images/shapes/causes-one-progress-shape-1.png') }}')">
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
                    <!--Causes One Single End-->
                    <!--Causes One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="causes-one__single">
                            <div class="causes-one__img">
                                <img src="{{ asset('assets/images/resources/causes-3-2.jpg') }}" alt="">
                                <div class="causes-one__cat">
                                    <p>Medical</p>
                                </div>
                            </div>
                            <div class="causes-one__content">
                                <h3 class="causes-one__title"><a href="{{ route('donationDetails') }}">It is a long established
                                        fact that a reader</a>
                                </h3>
                                <p class="causes-one__text">There are many of lorem, but majori have
                                    suffered alteration in some form.</p>
                                <div class="causes-one__progress">
                                    <div class="causes-one__progress-shape"
                                        style="background-image:url('{{ asset('assets/images/shapes/causes-one-progress-shape-1.png') }}')">
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
                    <!--Causes One Single End-->
                    <!--Causes One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="causes-one__single">
                            <div class="causes-one__img">
                                <img src="{{ asset('assets/images/resources/causes-3-3.jpg') }}" alt="">
                                <div class="causes-one__cat">
                                    <p>Food</p>
                                </div>
                            </div>
                            <div class="causes-one__content">
                                <h3 class="causes-one__title"><a href="{{ route('donationDetails') }}">There are many variations
                                        of passages</a>
                                </h3>
                                <p class="causes-one__text">There are many of lorem, but majori have
                                    suffered alteration in some form.</p>
                                <div class="causes-one__progress">
                                    <div class="causes-one__progress-shape"
                                        style="background-image:url('{{ asset('assets/images/shapes/causes-one-progress-shape-1.png') }}')">
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
                    <!--Causes One Single End-->
                    <!--Causes One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="causes-one__single">
                            <div class="causes-one__img">
                                <img src="{{ asset('assets/images/resources/causes-3-4.jpg') }}" alt="">
                                <div class="causes-one__cat">
                                    <p>Education</p>
                                </div>
                            </div>
                            <div class="causes-one__content">
                                <h3 class="causes-one__title"><a href="{{ route('donationDetails') }}">The standard chunk of
                                        Lorem Ipsum text</a>
                                </h3>
                                <p class="causes-one__text">There are many of lorem, but majori have
                                    suffered alteration in some form.</p>
                                <div class="causes-one__progress">
                                    <div class="causes-one__progress-shape"
                                        style="background-image:url('{{ asset('assets/images/shapes/causes-one-progress-shape-1.png') }}')">
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
                    <!--Causes One Single End-->
                </div>
            </div>
        </section>
        <!--Causes Three End-->

        <!--Testimonial Three Start-->
        <section class="testimonial-three" id="testimonial">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Our testimonials</span>
                    <h2 class="section-title__title">What they’re talking <br> about oxpins</h2>
                </div>
                <div class="testimonial-three__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{
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
                            "items": 2
                        }
                    }
                }'>
                    <div class="item">
                        <!--Testimonial Three Single Start-->
                        <div class="testimonial-three__single">
                            <div class="testimonial-three__client-img">
                                <img src="{{ asset('assets/images/testimonial/testimonial-3-1.jpg') }}" alt="">
                            </div>
                            <div class="testimonial-three__client-info">
                                <h3 class="testimonial-three__client-name">Kevin martin</h3>
                                <p class="testimonial-three__client-sub-title">Volunteer</p>
                            </div>
                            <div class="testimonial-three__quote">
                                <span class="icon-double-quotes"></span>
                            </div>
                            <div class="testimonial-three__rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="testimonial-three__shape-1"
                                style="background-image:url('{{ asset('assets/images/shapes/testimonial-three-shape-1.png') }}')">
                            </div>
                            <p class="testimonial-three__text-2">Nulla ultricies justo sit amet ante efficitur, eget
                                pharetra augue efficitur. Vestibulum viverra, dolor sit amet ultricies simply free text
                                ornare, elit justo pretium tellus.</p>
                        </div>
                        <!--Testimonial Three Single End-->
                    </div>
                    <div class="item">
                        <!--Testimonial Three Single Start-->
                        <div class="testimonial-three__single">
                            <div class="testimonial-three__client-img">
                                <img src="{{ asset('assets/images/testimonial/testimonial-3-2.jpg') }}" alt="">
                            </div>
                            <div class="testimonial-three__client-info">
                                <h3 class="testimonial-three__client-name">Jessica brown</h3>
                                <p class="testimonial-three__client-sub-title">Volunteer</p>
                            </div>
                            <div class="testimonial-three__quote">
                                <span class="icon-double-quotes"></span>
                            </div>
                            <div class="testimonial-three__rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="testimonial-three__shape-1"
                                style="background-image:url('{{ asset('assets/images/shapes/testimonial-three-shape-1.png') }}')">
                            </div>
                            <p class="testimonial-three__text-2">Nulla ultricies justo sit amet ante efficitur, eget
                                pharetra augue efficitur. Vestibulum viverra, dolor sit amet ultricies simply free text
                                ornare, elit justo pretium tellus.</p>
                        </div>
                        <!--Testimonial Three Single End-->
                    </div>
                    <div class="item">
                        <!--Testimonial Three Single Start-->
                        <div class="testimonial-three__single">
                            <div class="testimonial-three__client-img">
                                <img src="{{ asset('assets/images/testimonial/testimonial-3-3.jpg') }}" alt="">
                            </div>
                            <div class="testimonial-three__client-info">
                                <h3 class="testimonial-three__client-name">Mike hardson</h3>
                                <p class="testimonial-three__client-sub-title">Volunteer</p>
                            </div>
                            <div class="testimonial-three__quote">
                                <span class="icon-double-quotes"></span>
                            </div>
                            <div class="testimonial-three__rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="testimonial-three__shape-1"
                                style="background-image:url('{{ asset('assets/images/shapes/testimonial-three-shape-1.png') }}')">
                            </div>
                            <p class="testimonial-three__text-2">Nulla ultricies justo sit amet ante efficitur, eget
                                pharetra augue efficitur. Vestibulum viverra, dolor sit amet ultricies simply free text
                                ornare, elit justo pretium tellus.</p>
                        </div>
                        <!--Testimonial Three Single End-->
                    </div>
                </div>
            </div>
        </section>
        <!--Testimonial Three End-->

        <!--Brand One Start-->
        <x-brandOne />
        <!--Brand One End-->

        <!--Events Two Start-->
        <section class="events-two" id="events">
            <div class="events-two-shape-1" style="background-image:url('{{ asset('assets/images/shapes/events-two-shape-1.png') }}')">
            </div>
            <div class="events-two-bg" style="background-image:url('{{ asset('assets/images/backgrounds/events-two-bg.png') }}')">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="events-two__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Upcoming events</span>
                                <h2 class="section-title__title">Ready to join our latest upcoming events</h2>
                            </div>
                            <p class="events-two__text">Every man must decide whether he will walk in the light of
                                creative altruism or in the darkness of eritdestructive selfishness. Ut porttitor et
                                lectus ut tempus. Aliquam lacinia justo.
                            </p>
                            <a href="{{ route('eventDetails') }}" class="thm-btn events-two__btn">Discover More</a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="events-two__right">
                            <div class="events-two__right-bg-box">
                                <div class="events-two-shape-2"
                                    style="background-image:url('{{ asset('assets/images/shapes/events-two-shape-2.png') }}')"></div>
                            </div>
                            <ul class="list-unstyled events-two__list">
                                <li>
                                    <div class="events-two__img">
                                        <img src="{{ asset('assets/images/events/events-2-1.jpg') }}" alt="">
                                        <div class="events-two__date">
                                            <p>23 May, 2022</p>
                                        </div>
                                    </div>
                                    <div class="events-two__content">
                                        <ul class="list-unstyled events-two__meta">
                                            <li><i class="fas fa-clock"></i>8:00pm</li>
                                            <li><i class="fas fa-map-marker-alt"></i>New York</li>
                                        </ul>
                                        <h3 class="events-two__title"><a href="{{ route('eventDetails') }}">Pure hearts virtual
                                                <br> brain game</a></h3>
                                        <div class="events-two__read-more">
                                            <a href="{{ route('eventDetails') }}"> <span class="icon-right-arrow"></span> Read
                                                More</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="events-two__img">
                                        <img src="{{ asset('assets/images/events/events-2-2.jpg') }}" alt="">
                                        <div class="events-two__date">
                                            <p>23 May, 2022</p>
                                        </div>
                                    </div>
                                    <div class="events-two__content">
                                        <ul class="list-unstyled events-two__meta">
                                            <li><i class="fas fa-clock"></i>8:00pm</li>
                                            <li><i class="fas fa-map-marker-alt"></i>New York</li>
                                        </ul>
                                        <h3 class="events-two__title"><a href="{{ route('eventDetails') }}">Pure hearts virtual
                                                <br> brain game</a></h3>
                                        <div class="events-two__read-more">
                                            <a href="{{ route('eventDetails') }}"> <span class="icon-right-arrow"></span> Read
                                                More</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Events Two End-->

        <!--News One Start-->
        <section class="news-one" id="news">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">News & articles</span>
                    <h2 class="section-title__title">Directly from the <br> latest news and articles
                    </h2>
                </div>
                <div class="row">
                    <!--News One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="news-one__single">
                            <div class="news-one__img">
                                <img src="{{ asset('assets/images/blog/news-1-1.jpg') }}" alt="">
                            </div>
                            <div class="news-one__content-box">
                                <div class="news-one__content-inner">
                                    <div class="news-one__content">
                                        <ul class="list-unstyled news-one__meta">
                                            <li><a href="{{ route('newsDetails') }}"><i class="far fa-user-circle"></i> Admin</a>
                                            </li>
                                            <li><a href="{{ route('newsDetails') }}"><i class="fas fa-comments"></i> 2
                                                    Comments</a>
                                            </li>
                                        </ul>
                                        <h3 class="news-one__title"><a href="{{ route('newsDetails') }}">How does the
                                                malnutrition
                                                affect children?</a></h3>
                                    </div>
                                    <div class="news-one__bottom">
                                        <div class="news-one__read-more">
                                            <a href="{{ route('newsDetails') }}"> <span class="icon-right-arrow"></span> Read
                                                More</a>
                                        </div>
                                        <div class="news-one__share">
                                            <a href="#"><i class="fas fa-share-alt"></i></a>
                                        </div>
                                    </div>
                                    <div class="news-one__social-box">
                                        <ul class="list-unstyled news-one__social">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="news-one__date">
                                    <p>23 May, 2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--News One Single End-->
                    <!--News One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="news-one__single">
                            <div class="news-one__img">
                                <img src="{{ asset('assets/images/blog/news-1-2.jpg') }}" alt="">
                            </div>
                            <div class="news-one__content-box">
                                <div class="news-one__content-inner">
                                    <div class="news-one__content">
                                        <ul class="list-unstyled news-one__meta">
                                            <li><a href="{{ route('newsDetails') }}"><i class="far fa-user-circle"></i> Admin</a>
                                            </li>
                                            <li><a href="{{ route('newsDetails') }}"><i class="fas fa-comments"></i> 2
                                                    Comments</a>
                                            </li>
                                        </ul>
                                        <h3 class="news-one__title"><a href="{{ route('newsDetails') }}">Lorem Ipsum has been the
                                                industry's standard</a></h3>
                                    </div>
                                    <div class="news-one__bottom">
                                        <div class="news-one__read-more">
                                            <a href="{{ route('newsDetails') }}"> <span class="icon-right-arrow"></span> Read
                                                More</a>
                                        </div>
                                        <div class="news-one__share">
                                            <a href="#"><i class="fas fa-share-alt"></i></a>
                                        </div>
                                    </div>
                                    <div class="news-one__social-box">
                                        <ul class="list-unstyled news-one__social">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="news-one__date">
                                    <p>23 May, 2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--News One Single End-->
                    <!--News One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <div class="news-one__single">
                            <div class="news-one__img">
                                <img src="{{ asset('assets/images/blog/news-1-3.jpg') }}" alt="">
                            </div>
                            <div class="news-one__content-box">
                                <div class="news-one__content-inner">
                                    <div class="news-one__content">
                                        <ul class="list-unstyled news-one__meta">
                                            <li><a href="{{ route('newsDetails') }}"><i class="far fa-user-circle"></i> Admin</a>
                                            </li>
                                            <li><a href="{{ route('newsDetails') }}"><i class="fas fa-comments"></i> 2
                                                    Comments</a>
                                            </li>
                                        </ul>
                                        <h3 class="news-one__title"><a href="{{ route('newsDetails') }}">There are many
                                                variations of passages of Lorem</a></h3>
                                    </div>
                                    <div class="news-one__bottom">
                                        <div class="news-one__read-more">
                                            <a href="{{ route('newsDetails') }}"> <span class="icon-right-arrow"></span> Read
                                                More</a>
                                        </div>
                                        <div class="news-one__share">
                                            <a href="#"><i class="fas fa-share-alt"></i></a>
                                        </div>
                                    </div>
                                    <div class="news-one__social-box">
                                        <ul class="list-unstyled news-one__social">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="news-one__date">
                                    <p>23 May, 2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--News One Single End-->
                </div>
            </div>
        </section>
        <!--News One End-->

        <!--Gallery Three Start-->
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
        <!--Gallery Three End-->

        <!--Become Volunteer Start-->
        <section class="become-volunteer">
            <div class="container">
                <div class="become-volunteer__inner">
                    <div class="become-volunteer__left">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">Become a volunteers</span>
                            <h2 class="section-title__title">Join your hand with us for a better <br> life and future
                            </h2>
                        </div>
                    </div>
                    <div class="become-volunteer__right">
                        <a href="{{ route('becomeVolunteer') }}" class="thm-btn become-volunteer__btn">Discover More</a>
                    </div>
                </div>
            </div>
        </section>
        <!--Become Volunteer End-->

@endsection