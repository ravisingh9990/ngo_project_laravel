@extends('layout.layout2')

@php
    $headTitle='Home';
@endphp

@section('content')

    <!-- /.preloader -->
    <div class="page-wrapper">

        <x-header/>
        <x-stickyHeader/>
        <!-- /.stricky-header -->

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
                    <div class="video-layer">
                        <video autoplay muted loop playsinline>
                            <source src="{{ asset('assets/videos/video1.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <!-- <div class="main-slider-two-shape-1">
                        <img src="{{ asset('assets/images/shapes/main-slider-two-shape-1.png') }}" alt="">
                    </div>
                    <div class="main-slider-two-shape-2">
                        <img src="{{ asset('assets/images/shapes/main-slider-two-shape-2.png') }}" alt="">
                    </div> -->
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider-two__content">
                                    <p class="main-slider-two__sub-title">Helping Today. Helping Tommorow</p>
                                    <h2 class="main-slider-two__title">Give Child the <br> Gift of Education</h2>
                                    <div class="main-slider-two__btn-box">
                                        <a href="{{ route('about') }}" class="thm-btn main-slider-two__btn"> Discover more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="video-layer">
                        <video autoplay muted loop playsinline>
                            <source src="{{ asset('assets/videos/video2.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <!-- <div class="main-slider-two-shape-1">
                        <img src="{{ asset('assets/images/shapes/main-slider-two-shape-1.png') }}" alt="">
                    </div>
                    <div class="main-slider-two-shape-2">
                        <img src="{{ asset('assets/images/shapes/main-slider-two-shape-2.png') }}" alt="">
                    </div> -->
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider-two__content">
                                    <p class="main-slider-two__sub-title">Helping Today. Helping Tommorow</p>
                                    <h2 class="main-slider-two__title">Give Child the <br> Gift of Education</h2>
                                    <div class="main-slider-two__btn-box">
                                        <a href="{{ route('about') }}" class="thm-btn main-slider-two__btn"> Discover more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="video-layer">
                        <video autoplay muted loop playsinline>
                            <source src="{{ asset('assets/videos/video3.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <!-- <div class="main-slider-two-shape-1">
                        <img src="{{ asset('assets/images/shapes/main-slider-two-shape-1.png') }}" alt="">
                    </div>
                    <div class="main-slider-two-shape-2">
                        <img src="{{ asset('assets/images/shapes/main-slider-two-shape-2.png') }}" alt="">
                    </div> -->
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider-two__content">
                                    <p class="main-slider-two__sub-title">Helping Today. Helping Tommorow</p>
                                    <h2 class="main-slider-two__title">Give Child the <br> Gift of Education</h2>
                                    <div class="main-slider-two__btn-box">
                                        <a href="{{ route('about') }}" class="thm-btn main-slider-two__btn"> Discover more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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

        <!--About One Start-->
        <section class="about-one">
            <div class="about-one__shape-box-1">
                <div class="about-one__shape-1" style="background-image:url('{{ asset('assets/images/shapes/about-one-shape-1.png') }}')"></div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-one__left">
                            <div class="about-one__img-box wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                                <div class="about-one__img">
                                    <img src="{{ asset('assets/images/resources/about-one-img-1.jpg') }}" alt="">
                                </div>
                                <div class="about-one__img-border"></div>
                                <div class="about-one__curved-circle-box">
                                    <div class="curved-circle">
                                        <span class="curved-circle--item">
                                            Global Pathfields
                                        </span>
                                    </div><!-- /.curved-circle -->
                                    <div class="about-one__curved-circle-icon">
                                        <img src="{{ asset('assets/images/icon/curved-circle-icon.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="about-one__shape-2 zoom-fade">
                                    <img src="{{ asset('assets/images/shapes/about-one-shape-2.png') }}" alt="">
                                </div>
                                <div class="about-one__shape-3 float-bob-y">
                                    <img src="{{ asset('assets/images/shapes/about-one-shape-3.png') }}" alt="">
                                </div>
                                <div class="about-one__shape-4 zoominout">
                                    <img src="{{ asset('assets/images/shapes/about-one-shape-4.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-one__right">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Welcome to globalpathfields</span>
                                <h2 class="section-title__title">Helping each other can make world better</h2>
                            </div>
                            <p class="about-one__text">We are a rapidly growing non-profit committed to inclusive development for a more equitable, sustainable world. We support vulnerable groups through innovative solutions, policy analysis, capacity building, and program implementation. Partnering with the UN, government, private sector, and civil society, we tackle development challenges and improve service delivery in India. </p>
                            <div class="about-one__fund">
                                <p class="about-one__fund-text">Helped fund <span>20+</span> Projects in
                                    <span>All Over India</span>, Benefiting over <br> <span>5.2</span> Million people.
                                </p>
                            </div>
                            <ul class="list-unstyled about-one__points">
                                <li>
                                    <div class="icon">
                                        <span class="icon-volunteer"></span>
                                    </div>
                                    <div class="text">
                                        <h5><a href="{{ route('becomeVolunteer') }}">Join our team</a></h5>
                                        <p>Be part of our mission to drive meaningful change!</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-solidarity"></span>
                                    </div>
                                    <div class="text">
                                        <h5><a href="{{ route('donateNow') }}">Start donating</a></h5>
                                        <p>Empower lives with your generosity—every contribution counts!</p>
                                    </div>
                                </li>
                            </ul>
                            <a href="{{ route('about') }}" class="thm-btn about-one__btn">Discover More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About One End-->

        <!--Focus Areas Start-->
      <!--Feature Three Start-->
      <section class="feature-three" style="background-image:url('{{ asset('assets/images/shapes/events-one-shape-1.png') }}')">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">What We Do?</span>
                    <h2 class="section-title__title">Our Areas of Impact</h2>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-12"> 
                        <a href="{{ route('childRights') }}">
                        <div class="feature-three__single" >
                            <div class="feature-three__img"
                                style="background-image:url('{{ asset('assets/images/resources/feature-3-1.png') }}')">
                            </div>
                            <div class="feature-three__title-box">
                                <h3 class="feature-three__title">Child Rights</h3>
                            </div>
                            <!-- <div class="feature-three__btn">
                                <a href="{{ route('childRights') }}">See more</a>
                            </div> -->
                        </div>
                        </a>
                    </div>
                    <div class="col-xl-4 col-lg-12">
                        <a href="{{ route('socialDevelopment') }}">
                        <div class="feature-three__single">
                            <div class="feature-three__img"
                                style="background-image:url('{{ asset('assets/images/resources/feature-3-2.png') }}')">
                            </div>
                            <div class="feature-three__title-box">
                                <h3 class="feature-three__title">Skill Development</h3>
                            </div>
                            <!-- <div class="feature-three__btn feature-three__btn-two">
                                <a href="{{ route('socialDevelopment') }}">See more</a>
                            </div> -->
                        </div>
                        </a>
                    </div>
                    <div class="col-xl-4 col-lg-12">
                        <a href="{{ route('publicHealth') }}">
                        <div class="feature-three__single">
                            <div class="feature-three__img"
                                style="background-image:url('{{ asset('assets/images/resources/feature-3-3.png') }}')">
                            </div>
                            <div class="feature-three__title-box">
                                <h3 class="feature-three__title">Public Health</h3>
                            </div>
                            <!-- <div class="feature-three__btn feature-three__btn-two">
                                <a href="{{ route('publicHealth') }}">See more</a>
                            </div> -->
                        </div>
                        </a>
                    </div>
                </div>
                <div class="row" style="display: flex; justify-content: center;">
                    <div class="col-xl-4 col-lg-12">
                        <a href="{{ route('environment') }}">
                        <div class="feature-three__single">
                            <div class="feature-three__img"
                                style="background-image:url('{{ asset('assets/images/resources/feature-3-4.png') }}')">
                            </div>
                            <div class="feature-three__title-box">
                                <h3 class="feature-three__title">Environment</h3>
                            </div>
                            <!-- <div class="feature-three__btn">
                                <a href="{{ route('environment') }}">See more</a>
                            </div> -->
                        </div>
                        </a>
                    </div>
                    <div class="col-xl-4 col-lg-12">
                        <a href="{{ route('monitoring') }}">
                        <div class="feature-three__single">
                            <div class="feature-three__img"
                                style="background-image:url('{{ asset('assets/images/resources/feature-3-5.png') }}')">
                            </div>
                            <div class="feature-three__title-box">
                                <h3 class="feature-three__title">
                                Monitoring</h3>
                            </div>
                            <!-- <div class="feature-three__btn feature-three__btn-two">
                                <a href="{{ route('monitoring') }}">See more</a>
                            </div> -->
                        </div>
                        </a>
                    </div>
                    
                </div>
            </div>
               
        </section>
                <!-- <div class="col-xl-4 col-lg-12">
                        <div class="feature-three__single">
                            <div class="feature-three__img"
                                style="background-image:url('{{ asset('assets/images/resources/feature-3-3.png') }}')">
                            </div>
                            <div class="feature-three__title-box">
                                <h3 class="feature-three__title">Vision</h3>
                            </div>
                            <div class="feature-three__btn feature-three__btn-two">
                                <a href="{{ route('about') }}">See more</a>
                            </div>
                        </div>
                    </div> -->
                
            
        
        <!--Feature Three End-->
        <!--Focus Areas End-->

        <!--Causes One Start-->
        <!-- <section class="causes-one">
            <div class="container"> -->
                
                <!--Donation Caraousel Start-->
        <section class="donation-carousel-page">
            <div class="container">
            <div class="section-title text-center">
                    <span class="section-title__tagline">Help & donate us now</span>
                    <h2 class="section-title__title">Find the popular cause <br> and donate for them</h2>
                </div>
                <div class="donation-carousel thm-owl__carousel owl-theme owl-carousel carousel-dot-style"
                    data-owl-options='{
                    "items": 3,
                    "margin": 30,
                    "smartSpeed": 700,
                    "loop":true,
                    "autoplay": 6000,
                    "nav":false,
                    "dots":true,
                    "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                    "responsive":{
                        "0":{
                            "items":1
                        },
                        "768":{
                            "items":2
                        },
                        "992":{
                            "items": 3
                        }
                    }
                }'>
                    
                    <!--Causes One Single Start-->
                    <div class="item">
                        <div class="causes-one__single">
                            <div class="causes-one__img">
                                <img src="{{ asset('assets/images/resources/causes-1-1.jpg') }}" alt="">
                                <div class="causes-one__cat">
                                    <p>Education</p>
                                </div>
                            </div>
                            <div class="causes-one__content">
                                <h3 class="causes-one__title"><a href="{{ route('donationDetails') }}">Empowering Children Through Education</a>
                                </h3>
                                <p class="causes-one__text">Every child deserves access to quality education. Your support helps provide learning resources, and scholarships paving the way for a brighter future.</p>
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
                    <div class="item">
                        <div class="causes-one__single">
                            <div class="causes-one__img">
                                <img src="{{ asset('assets/images/resources/causes-1-2.jpg') }}" alt="">
                                <div class="causes-one__cat">
                                    <p>Health</p>
                                </div>
                            </div>
                            <div class="causes-one__content">
                                <h3 class="causes-one__title"><a href="{{ route('donationDetails') }}">Healthcare for a Healthier Tomorrow</a>
                                </h3>
                                <p class="causes-one__text">We provide medical aid, health awareness programs, and essential healthcare services to underprivileged communities, ensuring they lead healthier lives.</p>
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
                    <div class="item">
                        <div class="causes-one__single">
                            <div class="causes-one__img">
                                <img src="{{ asset('assets/images/resources/causes-1-3.jpg') }}" alt="">
                                <div class="causes-one__cat">
                                    <p>Food</p>
                                </div>
                            </div>
                            <div class="causes-one__content">
                                <h3 class="causes-one__title"><a href="{{ route('donationDetails') }}">Ending Hunger, One Meal at a Time</a>
                                </h3>
                                <p class="causes-one__text">Millions go to bed hungry every night. We strive to provide nutritious meals to children and families in need, fighting hunger and malnutrition together.</p>
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
                    <div class="item">
                        <div class="causes-one__single">
                            <div class="causes-one__img">
                                <img src="{{ asset('assets/images/resources/causes-1-4.jpg') }}" alt="">
                                <div class="causes-one__cat">
                                    <p>Environment</p>
                                </div>
                            </div>
                            <div class="causes-one__content">
                                <h3 class="causes-one__title"><a href="{{ route('donationDetails') }}">Protecting Our Planet for Future Generations</a>
                                </h3>
                                <p class="causes-one__text">Through tree plantation drives, waste management initiatives, and awareness campaigns, we work towards a cleaner and greener environment.</p>
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
                    <div class="item">
                        <div class="causes-one__single">
                            <div class="causes-one__img">
                                <img src="{{ asset('assets/images/resources/causes-1-5.jpg') }}" alt="">
                                <div class="causes-one__cat">
                                    <p>Sustainabilty</p>
                                </div>
                            </div>
                            <div class="causes-one__content">
                                <h3 class="causes-one__title"><a href="{{ route('donationDetails') }}">Building a Sustainable Future</a>
                                </h3>
                                <p class="causes-one__text">Our programs promote renewable energy, eco-friendly solutions, and sustainable practices to create lasting positive change for communities and the planet.</p>
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
        <!--Donation Caraousel End-->
                <!-- </div> -->
            <!-- </div>
        </section> -->
        <!--Causes One End-->

        <!--Become Volunteer One Start-->
        <x-becomeVolunteer/>
        <!--Become Volunteer One End-->

        <!--Events One Start-->
        <section class="events-one">
            <div class="events-one-shape-1" style="background-image:url('{{ asset('assets/images/shapes/events-one-shape-1.png') }}')">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4">
                        <div class="events-one__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Upcoming events</span>
                                <h2 class="section-title__title">Join Our Latest Upcoming Events</h2>
                            </div>
                            <p class="events-one__text-1">Stay updated with our upcoming events focusing on child rights, education, skills development, employment, public health, and sustainability.</p>
                            <a href="{{ route('eventDetails') }}" class="thm-btn events-one__btn">Discover More</a>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8">
                        <div class="events-one__right">
                            <div class="events-one__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{
                                "loop": true,
                                "autoplay": true,
                                "margin": 20,
                                "nav": true,
                                "dots": false,
                                "smartSpeed": 500,
                                "autoplayTimeout": 10000,
                                "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
                                "responsive": {
                                    "0": {
                                        "items": 1
                                    },
                                    "768": {
                                        "items": 2
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
                                    <!--Events One Single Start-->
                                    <div class="events-one__single">
                                        <div class="events-one__img">
                                            <img src="{{ asset('assets/images/events/events-1-1.jpg') }}" alt="">
                                            <div class="events-one__date">
                                                <p>15 March, 2025</p>
                                            </div>
                                            <div class="events-one__content">
                                                <ul class="list-unstyled events-one__meta">
                                                    <li><i class="fas fa-clock"></i>8:00pm</li>
                                                    <li><i class="fas fa-map-marker-alt"></i>Mumbai, Maharashtra</li>
                                                </ul>
                                                <h3 class="events-one__title"><a href="{{ route('eventDetails') }}">Empowering Youth Through Skills Development</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Events One Single End-->
                                </div>
                                <div class="item">
                                    <!--Events One Single Start-->
                                    <div class="events-one__single">
                                        <div class="events-one__img">
                                            <img src="{{ asset('assets/images/events/events-1-2.jpg') }}" alt="">
                                            <div class="events-one__date">
                                                <p>28 April, 2025</p>
                                            </div>
                                            <div class="events-one__content">
                                                <ul class="list-unstyled events-one__meta">
                                                    <li><i class="fas fa-clock"></i>8:00pm</li>
                                                    <li><i class="fas fa-map-marker-alt"></i>Bangalore, Karnataka</li>
                                                </ul>
                                                <h3 class="events-one__title"><a href="{{ route('eventDetails') }}">Sustainable Living & Environmental Awareness</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Events One Single End-->
                                </div>
                                <div class="item">
                                    <!--Events One Single Start-->
                                    <div class="events-one__single">
                                        <div class="events-one__img">
                                            <img src="{{ asset('assets/images/events/events-1-3.jpg') }}" alt="">
                                            <div class="events-one__date">
                                                <p>10 June, 2025</p>
                                            </div>
                                            <div class="events-one__content">
                                                <ul class="list-unstyled events-one__meta">
                                                    <li><i class="fas fa-clock"></i>8:00pm</li>
                                                    <li><i class="fas fa-map-marker-alt"></i>Delhi</li>
                                                </ul>
                                                <h3 class="events-one__title"><a href="{{ route('eventDetails') }}">Child Rights & Education for a Better Future</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Events One Single End-->
                                </div>
                                <div class="item">
                                    <!--Events One Single Start-->
                                    <div class="events-one__single">
                                        <div class="events-one__img">
                                            <img src="{{ asset('assets/images/events/events-1-1.jpg') }}" alt="">
                                            <div class="events-one__date">
                                                <p>20 July, 2025</p>
                                            </div>
                                            <div class="events-one__content">
                                                <ul class="list-unstyled events-one__meta">
                                                    <li><i class="fas fa-clock"></i>8:00pm</li>
                                                    <li><i class="fas fa-map-marker-alt"></i>Kolkata, West Bengal</li>
                                                </ul>
                                                <h3 class="events-one__title"><a href="{{ route('eventDetails') }}">Inclusive Employment for Economic Growth</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Events One Single End-->
                                </div>
                                <div class="item">
                                    <!--Events One Single Start-->
                                    <div class="events-one__single">
                                        <div class="events-one__img">
                                            <img src="{{ asset('assets/images/events/events-1-2.jpg') }}" alt="">
                                            <div class="events-one__date">
                                                <p>5 September, 2025</p>
                                            </div>
                                            <div class="events-one__content">
                                                <ul class="list-unstyled events-one__meta">
                                                    <li><i class="fas fa-clock"></i>8:00pm</li>
                                                    <li><i class="fas fa-map-marker-alt"></i>Chennai, Tamil Nadu</li>
                                                </ul>
                                                <h3 class="events-one__title"><a href="{{ route('eventDetails') }}">Public Health & Nutrition Awareness</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Events One Single End-->
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Events One End-->

        <!--Feature One Start-->
        <section class="feature-one" style="background-image:url('{{ asset('assets/images/shapes/events-one-shape-1.png') }}')">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6  wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <div class="feature-one__single">
                            <div class="feature-one__single-bg" style="background-image:url('{{ asset('assets/images/shapes/feature-one-shape-1.png') }}')"></div>
                            <div class="feature-one__top">
                                <div class="feature-one__top-inner">
                                    <div class="feature-one__top-icon">
                                        <span class="icon-help"></span>
                                    </div>
                                    <div class="feature-one__top-title-box">
                                        <h3 class="feature-one__top-title"><a href="{{ route('becomeVolunteer') }}">Join us &
                                                become <br> a
                                                volunteer</a></h3>
                                    </div>
                                </div>
                            </div>
                            <p class="feature-one__text">Make a difference by volunteering with us. Contribute your time and skills to empower 
                            communities and transform lives.</p>
                            <ul class="list-unstyled feature-one__point">
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Support underprivileged children and families.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Participate in skill-building and community projects.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Be part of meaningful social change.</p>
                                    </div>
                                </li>
                            </ul>
                            <a href="{{ route('becomeVolunteer') }}" class="thm-btn feature-one__btn">View details</a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6  wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <div class="feature-one__single feature-one__single--two">
                            <div class="feature-one__single-bg" style="background-image:url('{{ asset('assets/images/shapes/feature-one-shape-1.png') }}')"></div>
                            <div class="feature-one__top">
                                <div class="feature-one__top-inner">
                                    <div class="feature-one__top-icon feature-one__top-icon--two">
                                        <span class="icon-gift-box"></span>
                                    </div>
                                    <div class="feature-one__top-title-box">
                                        <h3 class="feature-one__top-title"><a href="{{ route('about') }}">Send
                                                a gift for <br>
                                                childrens</a></h3>
                                    </div>
                                </div>
                            </div>
                            <p class="feature-one__text">Brighten a child's life by sending a meaningful gift. Your generosity provides 
                            essential supplies, education, and hope for a better future.</p>
                            <ul class="list-unstyled feature-one__point">
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Provide school supplies and learning materials.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Support health and nutrition programs.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Give joy through toys, books, and clothing.</p>
                                    </div>
                                </li>
                            </ul>
                            <a href="{{ route('about') }}" class="thm-btn feature-one__btn">View details</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Feature One End-->

         <!--Counter One Start-->
         <section class="counter-one">
            <div class="container">
                <div class="counter-one__inner">
                    <div class="counter-one-bg" data-jarallax data-speed="0.2" data-imgPosition="50% 0%" style="background-image:url('{{ asset('assets/images/backgrounds/counter-one-bg.jpg') }}')"></div>
                    <ul class="list-unstyled counter-one__list">
                        <li class="counter-one__single">
                            <div class="counter-one__count-box">
                                <h3 class="odometer" data-count="70">00</h3>
                                <span class="counter-one__letter">m</span>
                            </div>
                            <p class="counter-one__text">Total donation</p>
                        </li>
                        <li class="counter-one__single">
                            <div class="counter-one__count-box">
                                <h3 class="odometer" data-count="48">00</h3>
                                <span class="counter-one__letter">k</span>
                            </div>
                            <p class="counter-one__text">Projects funded</p>
                        </li>
                        <li class="counter-one__single">
                            <div class="counter-one__count-box">
                                <h3 class="odometer" data-count="38">00</h3>
                                <span class="counter-one__letter">%</span>
                            </div>
                            <p class="counter-one__text">Kids need help</p>
                        </li>
                        <li class="counter-one__single">
                            <div class="counter-one__count-box">
                                <h3 class="odometer" data-count="230">00</h3>
                                <span class="counter-one__letter"></span>
                            </div>
                            <p class="counter-one__text">Our volunteers</p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Counter One End-->


        <!--Brand One Start-->
        <section class="brand-one">
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

        <!--Testimonial One Start-->
        <section class="testimonial-one">
            <div class="testimonial-one-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%" style="background-image:url('{{ asset('assets/images/backgrounds/testimonial-one-bg.jpg') }}')"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="testimonial-one__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Our Testimonials</span>
                                <h2 class="section-title__title">What they are talking about global Pathfields</h2>
                            </div>
                            <p class="testimonial-one__text-1">Hear from our volunteers, partners, and beneficiaries about how Global Pathfields is making a real difference. 
                            From transforming communities to empowering individuals, our impact is felt far and wide.</p>
                            <a href="{{ route('about') }}" class="thm-btn testimonial-one__btn">Discover More</a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="testimonial-one__right">
                            <div class="testimonial-one__img-1 zoom-fade">
                                <img src="{{ asset('assets/images/testimonial/testimonial-img-1.jpg') }}" alt="">
                            </div>
                            <div class="testimonial-one__img-1 testimonial-one__img-2 zoom-fade">
                                <img src="{{ asset('assets/images/testimonial/testimonial-img-2.jpg') }}" alt="">
                            </div>
                            <div class="testimonial-one__img-1 testimonial-one__img-3 zoom-fade">
                                <img src="{{ asset('assets/images/testimonial/testimonial-img-3.jpg') }}" alt="">
                            </div>
                            <div class="testimonial-one__img-1 testimonial-one__img-4 zoom-fade">
                                <img src="{{ asset('assets/images/testimonial/testimonial-img-4.jpg') }}" alt="">
                            </div>
                            <div class="testimonial-one__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{
                                "loop": true,
                                "autoplay": true,
                                "margin": 50,
                                "nav": true,
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
                                        "items": 1
                                    },
                                    "1200": {
                                        "items": 1
                                    }
                                }
                            }'>
                                <div class="item">
                                    <!--Testimonial One Single Start-->
                                    <div class="testimonial-one__single">
                                        <div class="testimonial-one__shape-1" style="background-image:url('{{ asset('assets/images/shapes/testimonial-one-shape-1.png') }}')">
                                        </div>
                                        <div class="testimonial-one__client-img">
                                            <img src="{{ asset('assets/images/testimonial/testimonial-1-1.jpg') }}" alt="">
                                        </div>
                                        <div class="testimonial-one__client-info">
                                            <h3 class="testimonial-one__client-name">Arvind Unni</h3>
                                            <p class="testimonial-one__client-sub-title">Urban Poverty Reduction Thematic Lead
                                            Indo Global Social Service Society (IGSSS)
                                            New Delhi</p>
                                        </div>
                                        <div class="testimonial-one__quote">
                                            <span class="icon-double-quotes"></span>
                                        </div>
                                        <p class="testimonial-one__text-2">Working with Global Pathfields on the Enabling Inclusive Cities Project was a great experience. Their expertise in data analysis, adaptability to complex issues like urban homelessness, and ability to collaborate with diverse stakeholders were commendable. Their commitment and quick turnaround were invaluable. Wishing them continued success ahead!</p>
                                    </div>
                                    <!--Testimonial One Single End-->
                                </div>
                                <div class="item">
                                    <!--Testimonial One Single Start-->
                                    <div class="testimonial-one__single">
                                        <div class="testimonial-one__shape-1" style="background-image:url('{{ asset('assets/images/shapes/testimonial-one-shape-1.png') }}')">
                                        </div>
                                        <div class="testimonial-one__client-img">
                                            <img src="{{ asset('assets/images/testimonial/testimonial-1-2.jpg') }}" alt="">
                                        </div>
                                        <div class="testimonial-one__client-info">
                                            <h3 class="testimonial-one__client-name">Nirmala Mishra</h3>
                                            <p class="testimonial-one__client-sub-title">Assistant Vice President
                                            Smile Foundation</p>
                                        </div>
                                        <div class="testimonial-one__quote">
                                            <span class="icon-double-quotes"></span>
                                        </div>
                                        <p class="testimonial-one__text-2">Global Pathfields is a key partner of Smile Foundation, providing technical support for IEC/BCC materials on nutrition, MCH, anemia, and WASH. Their creativity, professionalism, and openness to feedback make collaboration seamless. Founder Gaurav Joshi’s dedication and innovation are truly commendable. Wishing them continued success ahead!</p>
                                    </div>
                                    <!--Testimonial One Single End-->
                                </div>
                                <div class="item">
                                    <!--Testimonial One Single Start-->
                                    <div class="testimonial-one__single">
                                        <div class="testimonial-one__shape-1" style="background-image:url('{{ asset('assets/images/shapes/testimonial-one-shape-1.png') }}')">
                                        </div>
                                        <div class="testimonial-one__client-img">
                                            <img src="{{ asset('assets/images/testimonial/testimonial-1-3.jpg') }}" alt="">
                                        </div>
                                        <div class="testimonial-one__client-info">
                                            <h3 class="testimonial-one__client-name">Alok Kumar</h3>
                                            <p class="testimonial-one__client-sub-title">Head - Corporate Social Responsibility (CSR)
                                            Adventz Group (Dr. K.K Birla Group of Companies)</p>
                                        </div>
                                        <div class="testimonial-one__quote">
                                            <span class="icon-double-quotes"></span>
                                        </div>
                                        <p class="testimonial-one__text-2">Global Pathfields is a results-driven, technically sound institution making significant contributions to donor-funded and state-driven programs. Under Mr. Joshi’s strong leadership and a transparent system, they are well-positioned to drive innovative partnerships and solutions for complex social challenges.</p>
                                    </div>
                                    <!--Testimonial One Single End-->
                                </div>
                                <div class="item">
                                    <!--Testimonial One Single Start-->
                                    <div class="testimonial-one__single">
                                        <div class="testimonial-one__shape-1" style="background-image:url('{{ asset('assets/images/shapes/testimonial-one-shape-1.png') }}')">
                                        </div>
                                        <div class="testimonial-one__client-img">
                                            <img src="{{ asset('assets/images/testimonial/testimonial-1-4.jpg') }}" alt="">
                                        </div>
                                        <div class="testimonial-one__client-info">
                                            <h3 class="testimonial-one__client-name">Dr. Andreas Brandner</h3>
                                            <p class="testimonial-one__client-sub-title">Managing Director
                                            KMA Knowledge Management Associates GmbH
                                            Gersthofer Straße 162, 1180 Vienna</p>
                                        </div>
                                        <div class="testimonial-one__quote">
                                            <span class="icon-double-quotes"></span>
                                        </div>
                                        <p class="testimonial-one__text-2">KMA Knowledge Management Associates GmbH partnered with Global Pathfields to foster a sustainable knowledge community in India. Global Pathfields has proven to be a results-driven, technically sound institution, empowering disadvantaged communities and contributing to policy forums. Under Gaurav’s strong leadership, the organization is poised to drive impactful partnerships and solutions. I congratulate the team on their success and look forward to continued collaboration.</p>
                                    </div>
                                    <!--Testimonial One Single End-->
                                </div>
                                <div class="item">
                                    <!--Testimonial One Single Start-->
                                    <div class="testimonial-one__single">
                                        <div class="testimonial-one__shape-1" style="background-image:url('{{ asset('assets/images/shapes/testimonial-one-shape-1.png') }}')">
                                        </div>
                                        <div class="testimonial-one__client-img">
                                            <img src="{{ asset('assets/images/testimonial/testimonial-1-5.jpg') }}" alt="">
                                        </div>
                                        <div class="testimonial-one__client-info">
                                            <h3 class="testimonial-one__client-name">Dr. Gaurav Arya</h3>
                                            <p class="testimonial-one__client-sub-title">Regional Director (Patient Access)
                                            Abott Health Care India Limited</p>
                                        </div>
                                        <div class="testimonial-one__quote">
                                            <span class="icon-double-quotes"></span>
                                        </div>
                                        <p class="testimonial-one__text-2">In my years in public health and development, I’ve encountered few organizations as strong as Global Pathfields. Under Gaurav’s leadership, they excel in executing and evaluating community-based projects with precision. Their growth is inspiring, and the sector needs more organizations like them.</p>
                                    </div>
                                    <!--Testimonial One Single End-->
                                </div>
                                <div class="item">
                                    <!--Testimonial One Single Start-->
                                    <div class="testimonial-one__single">
                                        <div class="testimonial-one__shape-1" style="background-image:url('{{ asset('assets/images/shapes/testimonial-one-shape-1.png') }}')">
                                        </div>
                                        <div class="testimonial-one__client-img">
                                            <img src="{{ asset('assets/images/testimonial/testimonial-1-6.jpg') }}" alt="">
                                        </div>
                                        <div class="testimonial-one__client-info">
                                            <h3 class="testimonial-one__client-name">Chandan Verma</h3>
                                            <p class="testimonial-one__client-sub-title">National Partnership Officer-Govt. & CSR Partnerships
                                            Humana People to People India</p>
                                        </div>
                                        <div class="testimonial-one__quote">
                                            <span class="icon-double-quotes"></span>
                                        </div>
                                        <p class="testimonial-one__text-2">Global Pathfields plays a pivotal role in uplifting vulnerable communities in India through well-crafted, inclusive development programs. Their seamless execution of initiatives like SEED, WASH, and Waste Management has earned trust and expanded their nationwide presence. Their dedication is truly remarkable—wishing the team continued success!</p>
                                    </div>
                                    <!--Testimonial One Single End-->
                                </div>
                                <div class="item">
                                    <!--Testimonial One Single Start-->
                                    <div class="testimonial-one__single">
                                        <div class="testimonial-one__shape-1" style="background-image:url('{{ asset('assets/images/shapes/testimonial-one-shape-1.png') }}')">
                                        </div>
                                        <div class="testimonial-one__client-img">
                                            <img src="{{ asset('assets/images/testimonial/testimonial-1-7.jpg') }}" alt="">
                                        </div>
                                        <div class="testimonial-one__client-info">
                                            <h3 class="testimonial-one__client-name">Deep Chandra Papnoi</h3>
                                            <p class="testimonial-one__client-sub-title">Programme Manager
                                            United Nations Global Compact Network India</p>
                                        </div>
                                        <div class="testimonial-one__quote">
                                            <span class="icon-double-quotes"></span>
                                        </div>
                                        <p class="testimonial-one__text-2">Global Pathfields is a dynamic nonprofit tackling Sustainable Development Goals (SDGs) in India with passion and professionalism. Their impactful programs uplift disadvantaged communities and create scalable development models. With strong partnerships and policy contributions, they stand out as a trusted organization. We highly recommend them for collaborations with the private sector, UN, and Government.</p>
                                    </div>
                                    <!--Testimonial One Single End-->
                                </div>
                                <div class="item">
                                    <!--Testimonial One Single Start-->
                                    <div class="testimonial-one__single">
                                        <div class="testimonial-one__shape-1" style="background-image:url('{{ asset('assets/images/shapes/testimonial-one-shape-1.png') }}')">
                                        </div>
                                        <div class="testimonial-one__client-img">
                                            <img src="{{ asset('assets/images/testimonial/testimonial-1-8.jpg') }}" alt="">
                                        </div>
                                        <div class="testimonial-one__client-info">
                                            <h3 class="testimonial-one__client-name">Manish Kumar</h3>
                                            <p class="testimonial-one__client-sub-title">Deputy Director-International
                                            Confederation of Indian Industries (CII)</p>
                                        </div>
                                        <div class="testimonial-one__quote">
                                            <span class="icon-double-quotes"></span>
                                        </div>
                                        <p class="testimonial-one__text-2">COVID-19 presents a great opportunity for Global Pathfields to drive skill development and inclusive public health services in India. Their ability to leverage global collaborations can bridge digital gaps and enhance vocational education and healthcare access. With their proven track record, they are poised for impactful project implementation ahead.</p>
                                    </div>
                                    <!--Testimonial One Single End-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Testimonial One End-->

        <!--Gallery One Start-->
        <section class="gallery-one">
            <div class="gallery-one__top">
                <h3 class="gallery-one__top-title">Our photo gallery</h3>
            </div>
            <div class="gallery-one__bottom" style="background-image:url('{{ asset('assets/images/shapes/events-one-shape-1.png') }}')">
                <div class="gallery-one__container">
                    <ul class="list-unstyled gallery-one__list">
                        <li class="gallery-one__single wow fadeInUp" data-wow-delay="100ms">
                            <div class="gallery-one__img">
                                <img src="{{ asset('assets/images/gallery/gallery-1-1.jpg') }}" alt="">
                                <a href="assets/images/gallery/gallery-1-1.jpg" class="img-popup"></a>
                                <div class="gallery-one__content">
                                    <!-- /.img-popup -->
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
                                    <!-- /.img-popup -->
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
                                    <!-- /.img-popup -->
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
                                    <!-- /.img-popup -->
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
                                    <!-- /.img-popup -->
                                    <p class="gallery-one__sub-title">Charity</p>
                                    <h5 class="gallery-one__title"><a href="{{ route('gallery') }}">Education</a></h5>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Gallery One End-->

        <!--FAQ One Start-->
        <section class="faq-one">
            <div class="faq-one-shape-1" style="background-image:url('{{ asset('assets/images/shapes/faq-one-shape-1.png') }}')"></div>
            <div class="faq-one-bg" style="background-image:url('{{ asset('assets/images/backgrounds/faq-one-bg.png') }}')"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="faq-one__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Recently Asked Questions</span>
                                <h2 class="section-title__title">Common Questions About Our Work and Impact</h2>
                            </div>
                            <p class="faq-one__text-1">
                                We understand you may have questions about how we operate, our programs, and ways you can contribute. 
                                Here are answers to some of the most frequently asked questions.
                            </p>
                            <a href="{{ route('faq') }}" class="thm-btn faq-one__btn">Learn how to get help</a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="faq-one__right">
                            <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                                <div class="accrodion active">
                                    <div class="accrodion-title">
                                        <h4>How can I support your NGO?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>
                                                You can support us by donating, volunteering, or spreading awareness about our initiatives. 
                                                Visit our donation or volunteer page to get started.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <h4>Where does my donation go?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>
                                                Your donation directly supports our programs, including education, healthcare, and community 
                                                development initiatives. We ensure transparency in fund allocation.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <h4>How can I become a volunteer?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>
                                                You can sign up as a volunteer through our website. We offer various opportunities 
                                                to engage in meaningful work that positively impacts communities.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accrodion last-chiled">
                                    <div class="accrodion-title">
                                        <h4>Is my donation tax-deductible?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>
                                                Yes, we are a registered non-profit, and donations made to our organization 
                                                may be eligible for tax deductions as per applicable laws.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--FAQ One End-->

       

@endsection
