
<!DOCTYPE html>
<html lang="en">

<?php    
	 $headTitle= 'Home Four || Oxpins || Oxpins HTML 5 Template ';
     $css= '<link rel="stylesheet" href="' . asset('assets/css/oxpins-update.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/vendors/oxpins-icons-two/style.css') . '"/>
            <link rel="stylesheet" href="' . asset('assets/css/oxpins-color-1.css') . '"/>';
?>

<x-head headTitle='{{ $headTitle }}' css='{!! isset($css) ? $css : "" !!}'/>

<body class="customCursor">

<x-customCursor/>

    <x-preloader/>

    <!-- /.preloader -->
    <div class="page-wrapper">
        <header class="main-header-four">
            <nav class="main-menu main-header-four__inner">
                <div class="main-header-four__logo">
                   <a href="{{ route('index') }}"><img src="{{ asset('assets/images/resources/logo-3.png') }}" width="135" alt="oxpins"></a>
                </div>
                <div class="main-header-four__main-menu">
                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                    <ul class="main-menu__list">
                        <li class="megamenu current megamenu-clickable megamenu-clickable--toggler">
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
                                                                                    <img width="370" height="431" src="{{ asset('assets/images/home-showcase/home-1-1.png') }}"
                                                                                        alt="Home Page 01">
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
                                                                                    <img width="370" height="431" src="{{ asset('assets/images/home-showcase/home-1-2.png') }}"
                                                                                        alt="Home Page 02">
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
                                                                                    <img width="370" height="431" src="{{ asset('assets/images/home-showcase/home-1-3.png') }}"
                                                                                        alt="Home page 03">
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
                                                                                    <img width="370" height="431" src="{{ asset('assets/images/home-showcase/home-1-4.png') }}"
                                                                                        alt="Home page 04">
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
                                                                                    <img width="370" height="431" src="{{ asset('assets/images/home-showcase/home-1-5.png') }}"
                                                                                        alt="Home page 05">
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
                                                                                    <img width="370" height="431" src="{{ asset('assets/images/home-showcase/home-1-6.png') }}"
                                                                                        alt="Home Boxed">
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
                                                                                    <img width="370" height="431" src="{{ asset('assets/images/home-showcase/home-1-7.png') }}"
                                                                                        alt="Home RTL">
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
                                <li><a href="{{ route('volunteerCarousel') }}">Volunteer carousel</a>
                                </li>
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
                            <a href="products') }}">Shop</a>
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
                <div class="main-header-four__btn">
                    <a href="{{ route('donateNow') }}" class="thm-btn">Donate Now</a>
                    <div class="main-header-four__btn__border"></div>
                    <a href="#" class="main-header-four__search search-toggler"><i class="icon-magnifying-glass"></i></a>
                    <a href="{{ route('cart') }}" class="main-header-four__cart"><i class="icon-shopping-cart"></i></a>
                </div>
            </nav>
        </header>

        <div class="stricky-header stricked-menu main-menu main-header-four">
            <div class="sticky-header__content main-header-four__inner"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Main Slider Start-->
        <section class="main-slider-four clearfix">
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
                "delay": 7000
                }}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="main-slider-four__bg" style="background-image:url('{{ asset('assets/images/shapes/main-slider-4-1.png') }}')"></div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-7">
                                    <div class="main-slider-four__content">
                                        <p class="main-slider-four__sub-title">Start Donating They Deserve</p>
                                        <h2 class="main-slider-four__title">
                                            Build the House of<br> Allah & Gain the<br> Rewards
                                        </h2>
                                        <p class="main-slider-four__text">
                                            There are many variations of passages of Lorem Ip available, but the majority have suffered 
                                            aeration in some form, by incited hour, randomized words which slightly believable. 
                                        </p>
                                        <div class="main-slider-four__btn-box">
                                            <a href="{{ route('donateNow') }}" class="thm-btn-two">Donate Now <i class="oxpins-icon-two-donate"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-5">
                                    <div class="main-slider-four__image">
                                        <div class="main-slider-four__image__border" style="background-image:url('{{ asset('assets/images/shapes/slider-4-border.png') }}')"></div>
                                        <div class="main-slider-four__image__inner">
                                            <img src="{{ asset('assets/images/resources/slider-4-1.jpg') }}" alt="oxpins">
                                        </div>
                                        <div class="main-slider-four__image__shape-one"><img src="{{ asset('assets/images/shapes/slider-4-shape-1.png') }}" alt="oxpins"></div>
                                        <div class="main-slider-four__image__shape-two"><img src="{{ asset('assets/images/shapes/slider-4-shape-2.png') }}" alt="oxpins"></div>
                                        <div class="main-slider-four__image__shape-three"><img src="{{ asset('assets/images/shapes/slider-4-shape-3.png') }}" alt="oxpins"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="main-slider-four__bg" style="background-image:url('{{ asset('assets/images/shapes/main-slider-4-1.png') }}')"></div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-7">
                                    <div class="main-slider-four__content">
                                        <p class="main-slider-four__sub-title">Start Donating They Deserve</p>
                                        <h2 class="main-slider-four__title">
                                            Build the House of<br> Allah & Gain the<br> Rewards
                                        </h2>
                                        <p class="main-slider-four__text">
                                            There are many variations of passages of Lorem Ip available, but the majority have suffered 
                                            aeration in some form, by incited hour, randomized words which slightly believable. 
                                        </p>
                                        <div class="main-slider-four__btn-box">
                                            <a href="{{ route('donateNow') }}" class="thm-btn-two">Donate Now <i class="oxpins-icon-two-donate"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-5">
                                    <div class="main-slider-four__image">
                                        <div class="main-slider-four__image__border" style="background-image:url('{{ asset('assets/images/shapes/slider-4-border.png') }}')"></div>
                                        <div class="main-slider-four__image__inner">
                                            <img src="{{ asset('assets/images/resources/slider-4-1.jpg') }}" alt="oxpins">
                                        </div>
                                        <div class="main-slider-four__image__shape-one"><img src="{{ asset('assets/images/shapes/slider-4-shape-1.png') }}" alt="oxpins"></div>
                                        <div class="main-slider-four__image__shape-two"><img src="{{ asset('assets/images/shapes/slider-4-shape-2.png') }}" alt="oxpins"></div>
                                        <div class="main-slider-four__image__shape-three"><img src="{{ asset('assets/images/shapes/slider-4-shape-3.png') }}" alt="oxpins"></div>
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

        <div class="about-pillar">
            <div class="about-pillar__bg"></div>

            <!--Pillar Start-->
            <section class="pillar">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="pillar__wrapper">
                                <li class="pillar__item">
                                    <img src="{{ asset('assets/images/shapes/pillar-1.png') }}" alt="oxpins">
                                    <span class="pillar__item__title">Kalima</span>
                                </li>
                                <li class="pillar__item">
                                    <img src="{{ asset('assets/images/shapes/pillar-2.png') }}" alt="oxpins">
                                    <span class="pillar__item__title">Salat</span>
                                </li>
                                <li class="pillar__item">
                                    <img src="{{ asset('assets/images/shapes/pillar-3.png') }}" alt="oxpins">
                                    <span class="pillar__item__title">Fasting</span>
                                </li>
                                <li class="pillar__item">
                                    <img src="{{ asset('assets/images/shapes/pillar-4.png') }}" alt="oxpins">
                                    <span class="pillar__item__title">Hajj</span>
                                </li>
                                <li class="pillar__item">
                                    <img src="{{ asset('assets/images/shapes/pillar-5.png') }}" alt="oxpins">
                                    <span class="pillar__item__title">Zakat</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!--Pillar End-->

            <!--About Five Start-->
            <section class="about-five">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="about-five__image">
                                <div class="about-five__image__inner">
                                    <img src="{{ asset('assets/images/resources/about-5-1.jpg') }}" alt="oxpins">
                                </div>
                                <div class="about-five__image__info wow fadeInUp" data-wow-delay="300ms">
                                    <div class="about-five__image__info__icon"><span class="oxpins-icon-two-phone"></span></div>
                                    <h3 class="about-five__image__info__title">Call for Donate</h3>
                                    <p class="about-five__image__info__text"><a href="tel:3035550105">(303) 555-0105</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about-five__content">
                                <div class="section-title">
                                    <span class="section-title__tagline">Join us and start donating</span>
                                    <h2 class="section-title__title">We’re Non-Profit Charity & Muslim Organization</h2>
                                </div>
                                <p class="about-five__content__text">
                                    There are many variations of passages of Lorem Ip available, but the majority have suffered aration in some form,
                                </p>
                                <div class="about-five__feature hover-item" style="background-image:url('{{ asset('assets/images/shapes/about-5-feature-bg.png') }}')">
                                    <img src="{{ asset('assets/images/shapes/salary.png') }}" alt="oxpins">
                                    <p class="about-five__feature__title">Total Fund Raised</p>
                                    <h5 class="about-five__feature__price">$8,9950</h5>
                                    <div class="hover-item__box">
                                        <img src="{{ asset('assets/images/resources/about-5-feature-1.jpg') }}" alt="oxpins" class="hover-item__box-img">
                                    </div><!-- /.hover-item__box -->
                                </div>
                                <div class="about-five__feature hover-item" style="background-image:url('{{ asset('assets/images/shapes/about-5-feature-bg.png') }}')">
                                    <img src="{{ asset('assets/images/shapes/united.png') }}" alt="oxpins">
                                    <p class="about-five__feature__title">Join Our Team</p>
                                    <h5 class="about-five__feature__price">7,450</h5>
                                    <div class="hover-item__box">
                                        <img src="{{ asset('assets/images/resources/about-5-feature-1.jpg') }}" alt="oxpins" class="hover-item__box-img">
                                    </div><!-- /.hover-item__box -->
                                </div>
                                <a href="{{ route('donateNow') }}" class="thm-btn-two">Donate Now <i class="oxpins-icon-two-donate"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--About Five End-->
        </div>

        <!--Call To Action Start-->
        <section class="call-to-action">
            <div class="call-to-action__bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%" style="background-image:url('{{ asset('assets/images/backgrounds/call-to-action-bg.jpg') }}')"></div>
            <div class="container text-center">
                <h2 class="call-to-action__title">
                    The Mosque is a Symbol of the<br> Strength and Resilience of Muslim<br> Communities
                </h2>
                <a href="{{ route('checkout') }}" class="thm-btn-two">Discover More</a>
            </div>
        </section>
        <!--Call To Action End-->

        <!--Counter Two Start-->
        <section class="counter-two">
            <div class="container">
                <div class="counter-two__inner">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="counter-two__image">
                                <img src="{{ asset('assets/images/resources/counter-1-1.jpg') }}" alt="oxpins">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <ul class="list-unstyled counter-two__list">
                                <li class="counter-two__single">
                                    <div class="counter-two__icon"><i class="oxpins-icon-two-charity"></i></div>
                                    <h3 class="counter-two__count-box">
                                        <span class="odometer" data-count="80">00</span>
                                        <span>M</span>
                                    </h3>
                                    <p class="counter-two__text">Total Donation</p>
                                </li>
                                <li class="counter-two__single">
                                    <div class="counter-two__icon"><i class="oxpins-icon-two-start-up"></i></div>
                                    <h3 class="counter-two__count-box">
                                        <span class="odometer" data-count="33">00</span>
                                        <span>k</span>
                                    </h3>
                                    <p class="counter-two__text">Project Found</p>
                                </li>
                                <li class="counter-two__single">
                                    <div class="counter-two__icon"><i class="oxpins-icon-two-voluntary-work"></i></div>
                                    <h3 class="counter-two__count-box">
                                        <span class="odometer" data-count="59">00</span>
                                        <span>k</span>
                                    </h3>
                                    <p class="counter-two__text">Volunteers</p>
                                </li>
                                <li class="counter-two__single">
                                    <div class="counter-two__icon"><i class="oxpins-icon-two-marketing"></i></div>
                                    <h3 class="counter-two__count-box">
                                        <span class="odometer" data-count="50">00</span>
                                        <span>%</span>
                                    </h3>
                                    <p class="counter-two__text">Campaign</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Counter Two End-->

        <!--Causes Four Start-->
        <section class="causes-four">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Help & Donate</span>
                    <h2 class="section-title__title">Find the Popular Cause <br> and Donate Them</h2>
                </div>
                <div class="row gutter-y-30">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="causes-four__single">
                            <div class="causes-four__img">
                                <img src="{{ asset('assets/images/resources/causes-4-1.jpg') }}" alt="oxpins">
                            </div>
                            <div class="causes-four__content">
                                <div class="causes-four__cat">
                                    <p>Education</p>
                                </div>
                                <h3 class="causes-four__title">
                                    <a href="{{ route('donationDetails') }}">Let’s Education for Children get Good Life</a>
                                </h3>
                                <p class="causes-four__text">
                                    There are many variations of passages of Lorem Ip available, but the majority have suffered 
                                </p>
                                <div class="causes-four__progress">
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="36%">
                                            <div class="count-text">36%</div>
                                        </div>
                                    </div>
                                    <div class="causes-four__goals">
                                        <p class="causes-four__goals__price">$4,599 <span>Raised</span></p>
                                        <p class="causes-four__goals__price">$5,000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- item -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="150ms">
                        <div class="causes-four__single">
                            <div class="causes-four__img">
                                <img src="{{ asset('assets/images/resources/causes-4-2.jpg') }}" alt="oxpins">
                            </div>
                            <div class="causes-four__content">
                                <div class="causes-four__cat">
                                    <p>Charity</p>
                                </div>
                                <h3 class="causes-four__title">
                                    <a href="{{ route('donationDetails') }}">It is a Long Established Fact Quran Teaching</a>
                                </h3>
                                <p class="causes-four__text">
                                    There are many variations of passages of Lorem Ip available, but the majority have suffered 
                                </p>
                                <div class="causes-four__progress">
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="50%">
                                            <div class="count-text">50%</div>
                                        </div>
                                    </div>
                                    <div class="causes-four__goals">
                                        <p class="causes-four__goals__price">$4,599 <span>Raised</span></p>
                                        <p class="causes-four__goals__price">$5,000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- item -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="causes-four__single">
                            <div class="causes-four__img">
                                <img src="{{ asset('assets/images/resources/causes-4-3.jpg') }}" alt="oxpins">
                            </div>
                            <div class="causes-four__content">
                                <div class="causes-four__cat">
                                    <p>Medical</p>
                                </div>
                                <h3 class="causes-four__title">
                                    <a href="{{ route('donationDetails') }}">There are Many Variations of Passages</a>
                                </h3>
                                <p class="causes-four__text">
                                    There are many variations of passages of Lorem Ip available, but the majority have suffered 
                                </p>
                                <div class="causes-four__progress">
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="66%">
                                            <div class="count-text">66%</div>
                                        </div>
                                    </div>
                                    <div class="causes-four__goals">
                                        <p class="causes-four__goals__price">$4,599 <span>Raised</span></p>
                                        <p class="causes-four__goals__price">$5,000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- item -->
                </div>
            </div>
        </section>
        <!--Causes Four End-->

        <!--Gallery Four Start-->
        <section class="gallery-three">
            <div class="container">
                <div class="gallery-three__carousel thm-owl__carousel owl-carousel owl-theme" data-owl-options='{
                    "items": 1,
                    "margin": 24,
                    "loop": false,
                    "smartSpeed": 700,
                    "nav": false,
                    "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                    "dots": false,
                    "autoplay": false,
                    "responsive": {
                        "0": {
                            "items": 1
                        },
                        "576": {
                            "items": 2
                        },
                        "768": {
                            "items": 3
                        },
                        "1200": {
                            "items": 4
                        },
                        "1500": {
                            "items": 5
                        }
                    }
                    }'>
                    <div class="gallery-three__item">
                        <img src="{{ asset('assets/images/gallery/gallery-3-1.jpg') }}" alt="oxpins">
                        <a href="assets/images/gallery/gallery-3-1.jpg" class="img-popup"><i class="oxpins-icon-two-arrow-right"></i></a>
                    </div>
                    <div class="gallery-three__item">
                        <img src="{{ asset('assets/images/gallery/gallery-3-2.jpg') }}" alt="oxpins">
                        <a href="assets/images/gallery/gallery-3-2.jpg" class="img-popup"><i class="oxpins-icon-two-arrow-right"></i></a>
                    </div>
                    <div class="gallery-three__item">
                        <img src="{{ asset('assets/images/gallery/gallery-3-3.jpg') }}" alt="oxpins">
                        <a href="assets/images/gallery/gallery-3-3.jpg" class="img-popup"><i class="oxpins-icon-two-arrow-right"></i></a>
                    </div>
                    <div class="gallery-three__item">
                        <img src="{{ asset('assets/images/gallery/gallery-3-4.jpg') }}" alt="oxpins">
                        <a href="assets/images/gallery/gallery-3-4.jpg" class="img-popup"><i class="oxpins-icon-two-arrow-right"></i></a>
                    </div>
                    <div class="gallery-three__item">
                        <img src="{{ asset('assets/images/gallery/gallery-3-5.jpg') }}" alt="oxpins">
                        <a href="assets/images/gallery/gallery-3-5.jpg" class="img-popup"><i class="oxpins-icon-two-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!--Gallery Four End-->

        <!--Testimonial Four Start-->
        <section class="testimonial-four" style="background-image:url('{{ asset('assets/images/shapes/testimonial-bg-4.png') }}')">
            <div class="testimonial-four__shape" style="background-image:url('{{ asset('assets/images/shapes/testimonial-4-shape.png') }}')"></div>
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Testimonials</span>
                    <h2 class="section-title__title">What They’re Talking <br> About Oxpins</h2>
                </div>
            </div>
            <div class="testimonial-four__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{
                "loop": true,
                "autoplay": true,
                "margin": 30,
                "center": true,
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
                        "stagePadding": 62,
                        "items": 1
                    },
                    "992": {
                        "stagePadding": 62,
                        "items": 1
                    },
                    "1200": {
                        "stagePadding": 170,
                        "items": 1
                    },
                    "1350": {
                        "stagePadding": 255,
                        "items": 1
                    },
                    "1600": {
                        "stagePadding": 524,
                        "items": 1
                    }
                }
                }'>
                <div class="item">
                    <!--Testimonial Item Start-->
                    <div class="testimonial-four__single">
                        <div class="testimonial-four__single__shape" style="background-image:url('{{ asset('assets/images/shapes/testimonial-4-shape-two.png') }}')"></div>
                        <div class="testimonial-four__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <p class="testimonial-four__text">
                            Acquiring is knowledge free or skills  through the free  use of process the digital technologies and the hope internet. 
                            Flexible classes free Flexible Acquiring is knowledge free 
                        </p>
                        <div class="testimonial-four__author">
                            <img src="{{ asset('assets/images/testimonial/testimonial-4-1.jpg') }}" alt="oxpins">
                            <div class="testimonial-four__quote">
                                <span class="oxpins-icon-two-quote"></span>
                            </div>
                            <h3 class="testimonial-four__title">Savannah Nguyen</h3>
                            <p class="testimonial-four__designation">Volunteer</p>
                        </div>
                    </div>
                    <!--Testimonial Item End-->
                </div>
                <div class="item">
                    <!--Testimonial Item Start-->
                    <div class="testimonial-four__single">
                        <div class="testimonial-four__single__shape" style="background-image:url('{{ asset('assets/images/shapes/testimonial-4-shape-two.png') }}')"></div>
                        <div class="testimonial-four__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <p class="testimonial-four__text">
                            Acquiring is knowledge free or skills  through the free  use of process the digital technologies and the hope internet. 
                            Flexible classes free Flexible Acquiring is knowledge free 
                        </p>
                        <div class="testimonial-four__author">
                            <img src="{{ asset('assets/images/testimonial/testimonial-4-2.jpg') }}" alt="oxpins">
                            <div class="testimonial-four__quote">
                                <span class="oxpins-icon-two-quote"></span>
                            </div>
                            <h3 class="testimonial-four__title">Hafiza Taiyaba</h3>
                            <p class="testimonial-four__designation">Volunteer</p>
                        </div>
                    </div>
                    <!--Testimonial Item End-->
                </div>
                <div class="item">
                    <!--Testimonial Item Start-->
                    <div class="testimonial-four__single">
                        <div class="testimonial-four__single__shape" style="background-image:url('{{ asset('assets/images/shapes/testimonial-4-shape-two.png') }}')"></div>
                        <div class="testimonial-four__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <p class="testimonial-four__text">
                            Acquiring is knowledge free or skills  through the free  use of process the digital technologies and the hope internet. 
                            Flexible classes free Flexible Acquiring is knowledge free 
                        </p>
                        <div class="testimonial-four__author">
                            <img src="{{ asset('assets/images/testimonial/testimonial-4-3.jpg') }}" alt="oxpins">
                            <div class="testimonial-four__quote">
                                <span class="oxpins-icon-two-quote"></span>
                            </div>
                            <h3 class="testimonial-four__title">Amin Hosseini</h3>
                            <p class="testimonial-four__designation">Volunteer</p>
                        </div>
                    </div>
                    <!--Testimonial Item End-->
                </div>
            </div>
        </section>
        <!--Testimonial Four End-->

        <!--Events Three Start-->
        <section class="events-three">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Upcoming Event</span>
                    <h2 class="section-title__title">Ready to Join Our Latest <br>Upcoming Events</h2>
                </div>
                <div class="row gutter-y-30">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="events-three__item">
                            <img src="{{ asset('assets/images/events/events-3-1.jpg') }}" alt="oxpins">
                            <div class="events-three__item__normal">
                                <div class="events-three__item__normal__date">19 October 2023</div>
                                <div class="events-three__item__normal__meta">
                                    <p class="events-three__item__normal__meta__text"><i class="oxpins-icon-two-time"></i>9:00am</p>
                                    <p class="events-three__item__normal__meta__text"><i class="oxpins-icon-two-location-pin"></i>New Yourk</p>
                                </div>
                                <h3 class="events-three__item__normal__title">Navigating Life's Journey with Faith</h3>
                            </div>
                            <div class="events-three__item__hover">
                                <div class="events-three__item__hover__date">19 October 2023</div>
                                <div class="events-three__item__hover__meta">
                                    <p class="events-three__item__hover__meta__text"><i class="oxpins-icon-two-time"></i>9:00am</p>
                                    <p class="events-three__item__hover__meta__text"><i class="oxpins-icon-two-location-pin"></i>New Yourk</p>
                                </div>
                                <h3 class="events-three__item__hover__title"><a href="{{ route('eventDetails') }}">Navigating Life's Journey with Faith</a></h3>
                                <a href="{{ route('eventDetails') }}" class="events-three__item__hover__rm"><i class="oxpins-icon-two-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="events-three__item">
                            <img src="{{ asset('assets/images/events/events-3-2.jpg') }}" alt="oxpins">
                            <div class="events-three__item__normal">
                                <div class="events-three__item__normal__date">19 October 2023</div>
                                <div class="events-three__item__normal__meta">
                                    <p class="events-three__item__normal__meta__text"><i class="oxpins-icon-two-time"></i>9:00am</p>
                                    <p class="events-three__item__normal__meta__text"><i class="oxpins-icon-two-location-pin"></i>New Yourk</p>
                                </div>
                                <h3 class="events-three__item__normal__title">Embarking on a Journey Of Reflection</h3>
                            </div>
                            <div class="events-three__item__hover">
                                <div class="events-three__item__hover__date">19 October 2023</div>
                                <div class="events-three__item__hover__meta">
                                    <p class="events-three__item__hover__meta__text"><i class="oxpins-icon-two-time"></i>9:00am</p>
                                    <p class="events-three__item__hover__meta__text"><i class="oxpins-icon-two-location-pin"></i>New Yourk</p>
                                </div>
                                <h3 class="events-three__item__hover__title"><a href="{{ route('eventDetails') }}">Embarking on a Journey Of Reflection</a></h3>
                                <a href="{{ route('eventDetails') }}" class="events-three__item__hover__rm"><i class="oxpins-icon-two-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="events-three__item">
                            <img src="{{ asset('assets/images/events/events-3-3.jpg') }}" alt="oxpins">
                            <div class="events-three__item__normal">
                                <div class="events-three__item__normal__date">19 October 2023</div>
                                <div class="events-three__item__normal__meta">
                                    <p class="events-three__item__normal__meta__text"><i class="oxpins-icon-two-time"></i>9:00am</p>
                                    <p class="events-three__item__normal__meta__text"><i class="oxpins-icon-two-location-pin"></i>New Yourk</p>
                                </div>
                                <h3 class="events-three__item__normal__title">Exploring Islamic Insight & Wisdom</h3>
                            </div>
                            <div class="events-three__item__hover">
                                <div class="events-three__item__hover__date">19 October 2023</div>
                                <div class="events-three__item__hover__meta">
                                    <p class="events-three__item__hover__meta__text"><i class="oxpins-icon-two-time"></i>9:00am</p>
                                    <p class="events-three__item__hover__meta__text"><i class="oxpins-icon-two-location-pin"></i>New Yourk</p>
                                </div>
                                <h3 class="events-three__item__hover__title"><a href="{{ route('eventDetails') }}">Exploring Islamic Insight & Wisdom</a></h3>
                                <a href="{{ route('eventDetails') }}" class="events-three__item__hover__rm"><i class="oxpins-icon-two-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Events Three End-->

        <!--Donate Start-->
        <section class="donate-one" style="background-image:url('{{ asset('assets/images/shapes/donate-shape-bg.png') }}')">
            <div class="donate-one__shape" style="background-image:url('{{ asset('assets/images/shapes/donate-shape-1.png') }}')"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-7">
                        <div class="donate-one__content">
                            <div class="section-title">
                                <span class="section-title__tagline">Help & Donate</span>
                                <h2 class="section-title__title">Donate Today and Help us Achieve Our Mission</h2>
                            </div>
                            <form action="#" class="donate-one__form">
                                <div class="donate-one__form__amount">
                                    <input type="text" value="$100.00" name="donate_amount" id="donate_amount" placeholder="Enter Amount" class="donate-one__form__amount__input">
                                    <!-- /.donate-one__form__amount__box -->
                                    <div class="donate-one__form__amount__buttons">
                                        <button type="button" class="donate-one__form__amount__btn"><span class="donate-one__form__amount__btn__text">$10.00</span></button>
                                        <button type="button" class="donate-one__form__amount__btn active"><span class="donate-one__form__amount__btn__text">$25.00</span></button>
                                        <button type="button" class="donate-one__form__amount__btn"><span class="donate-one__form__amount__btn__text">$50.00</span></button>
                                        <button type="button" class="donate-one__form__amount__btn"><span class="donate-one__form__amount__btn__text">$100.00</span></button>
                                        <button type="button" class="donate-one__form__amount__btn donate-one__form__amount__btn--custome">Custom</button>
                                    </div><!-- /.donate-one__form__amount__buttons -->
                                    <button type="submit" class="thm-btn-two">
                                        Donate Now <i class="oxpins-icon-two-donate"></i>
                                    </button>
                                </div><!-- /.donate-one__form__amount -->
                            </form><!-- /.donate-one__form -->
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="donate-one__image wow slideInRight">
                            <img src="{{ asset('assets/images/resources/donate-1-1.jpg') }}" alt="oxpins">
                        </div><!-- /.donate-one__image -->
                    </div><!-- /.col-xl-5 -->
                </div>
            </div>
        </section>
        <!--Donate End-->

        <!--Team Two Start-->
        <section class="team-two">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Our Imam</span>
                    <h2 class="section-title__title">Meet Our Experience & <br> Expert Imam</h2>
                </div>
                <div class="row gutter-y-30">
                    <!--Team Start-->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="team-two__single">
                            <div class="team-two__single__image">
                                <img src="{{ asset('assets/images/team/team-2-1.png') }}" alt="oxpins">
                                <div class="team-two__single__social">
                                    <a href="https://facebook.com">
                                        <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                        <span class="sr-only">Facebook</span>
                                    </a>
                                    <a href="https://twitter.com">
                                        <i class="fab fa-twitter" aria-hidden="true"></i>
                                        <span class="sr-only">Twitter</span>
                                    </a>
                                    <a href="https://pinterest.com">
                                        <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                                        <span class="sr-only">Pinterest</span>
                                    </a>
                                    <a href="https://youtube.com">
                                        <i class="fab fa-youtube" aria-hidden="true"></i>
                                        <span class="sr-only">Youtube</span>
                                    </a>
                                </div>
                            </div>
                            <div class="team-two__single__content">
                                <h3 class="team-two__single__title"><a href="#">Julfiker Amin Ali</a></h3>
                                <p class="team-two__single__designation">Our Imam</p>
                            </div>
                        </div>
                    </div>
                    <!--Team End-->
                    <!--Team Start-->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="team-two__single">
                            <div class="team-two__single__image">
                                <img src="{{ asset('assets/images/team/team-2-2.png') }}" alt="oxpins">
                                <div class="team-two__single__social">
                                    <a href="https://facebook.com">
                                        <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                        <span class="sr-only">Facebook</span>
                                    </a>
                                    <a href="https://twitter.com">
                                        <i class="fab fa-twitter" aria-hidden="true"></i>
                                        <span class="sr-only">Twitter</span>
                                    </a>
                                    <a href="https://pinterest.com">
                                        <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                                        <span class="sr-only">Pinterest</span>
                                    </a>
                                    <a href="https://youtube.com">
                                        <i class="fab fa-youtube" aria-hidden="true"></i>
                                        <span class="sr-only">Youtube</span>
                                    </a>
                                </div>
                            </div>
                            <div class="team-two__single__content">
                                <h3 class="team-two__single__title"><a href="#">Amin Hosseini</a></h3>
                                <p class="team-two__single__designation">Our Imam</p>
                            </div>
                        </div>
                    </div>
                    <!--Team End-->
                    <!--Team Start-->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="team-two__single">
                            <div class="team-two__single__image">
                                <img src="{{ asset('assets/images/team/team-2-3.png') }}" alt="oxpins">
                                <div class="team-two__single__social">
                                    <a href="https://facebook.com">
                                        <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                        <span class="sr-only">Facebook</span>
                                    </a>
                                    <a href="https://twitter.com">
                                        <i class="fab fa-twitter" aria-hidden="true"></i>
                                        <span class="sr-only">Twitter</span>
                                    </a>
                                    <a href="https://pinterest.com">
                                        <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                                        <span class="sr-only">Pinterest</span>
                                    </a>
                                    <a href="https://youtube.com">
                                        <i class="fab fa-youtube" aria-hidden="true"></i>
                                        <span class="sr-only">Youtube</span>
                                    </a>
                                </div>
                            </div>
                            <div class="team-two__single__content">
                                <h3 class="team-two__single__title"><a href="#">Sawad Bin Raiyan</a></h3>
                                <p class="team-two__single__designation">Our Imam</p>
                            </div>
                        </div>
                    </div>
                    <!--Team End-->
                </div>
            </div>
        </section>
        <!--Team Two End-->

        <!--News Three Start-->
        <section class="news-three">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Our Blog</span>
                    <h2 class="section-title__title">Explore the Our Recent<br> News & Blog</h2>
                </div>
                <div class="row">
                    <div class="col-lg-8 wow fadeInUp" data-wow-delay="100ms">
                        <div class="news-three__single">
                            <div class="news-three__single__img">
                                <img src="{{ asset('assets/images/blog/news-3-1.jpg') }}" alt="oxpins">
                                <div class="news-three__single__cats">
                                    <a href="{{ route('newsDetails') }}">Charity</a>
                                </div>
                            </div>
                            <div class="news-three__single__content">
                                <ul class="list-unstyled news-three__single__meta">
                                    <li><i class="oxpins-icon-two-comments"></i>2 Comments</li>
                                    <li><i class="oxpins-icon-two-time"></i>26 Mar, 2023</li>
                                </ul>
                                <h3 class="news-three__single__title"><a href="{{ route('newsDetails') }}">Thanking to the Graces of Almighty Allah</a></h3>
                                <p class="news-three__single__text">
                                    There are many variations of passages of Lorem Ip available, but the majority have suffered 
                                </p>
                                <a class="news-three__single__rm"  href="{{ route('newsDetails') }}">Read More<span class="oxpins-icon-two-arrow-right"></span></a>
                            </div>
                        </div>
                        <div class="news-three__single">
                            <div class="news-three__single__img">
                                <img src="{{ asset('assets/images/blog/news-3-2.jpg') }}" alt="oxpins">
                                <div class="news-three__single__cats">
                                    <a href="{{ route('newsDetails') }}">Charity</a>
                                </div>
                            </div>
                            <div class="news-three__single__content">
                                <ul class="list-unstyled news-three__single__meta">
                                    <li><i class="oxpins-icon-two-comments"></i>2 Comments</li>
                                    <li><i class="oxpins-icon-two-time"></i>26 Mar, 2023</li>
                                </ul>
                                <h3 class="news-three__single__title"><a href="{{ route('newsDetails') }}">How Does the Nutrition Affect Children?</a></h3>
                                <p class="news-three__single__text">
                                    There are many variations of passages of Lorem Ip available, but the majority have suffered 
                                </p>
                                <a class="news-three__single__rm" href="newsDetails') }}">Read More<span class="oxpins-icon-two-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <ul class="news-three__list">
                            <li>
                                <div class="news-three__list__meta"><i class="oxpins-icon-two-comments"></i>2 Comments</div>
                                <h3 class="news-three__list__title"><a href="{{ route('newsDetails') }}">We should be Thanking to the Graces of Our Almighty Allah</a></h3>
                            </li>
                            <li>
                                <div class="news-three__list__meta"><i class="oxpins-icon-two-comments"></i>2 Comments</div>
                                <h3 class="news-three__list__title"><a href="{{ route('newsDetails') }}">We should be Thanking to the Graces of Our Almighty Allah</a></h3>
                            </li>
                            <li>
                                <div class="news-three__list__meta"><i class="oxpins-icon-two-comments"></i>2 Comments</div>
                                <h3 class="news-three__list__title"><a href="{{ route('newsDetails') }}">We should be Thanking to the Graces of Our Almighty Allah</a></h3>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--News Three End-->
        
        <div class="brand-four">
            <div class="container">
                <h5 class="brand-four__tilte"><span>2k + Brands Trust Us</span></h5><!-- section-title -->
                <div class="brand-four__carousel thm-owl__carousel owl-theme owl-carousel" data-owl-options='{
                    "items": 5,
                    "margin": 65,
                    "smartSpeed": 700,
                    "loop":true,
                    "autoplay": 6000,
                    "nav":false,
                    "dots":false,
                    "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                    "responsive":{
                        "0":{
                            "items":1,
                            "margin": 0
                        },
                        "360":{
                            "items":2,
                            "margin": 0
                        },
                        "575":{
                            "items":3,
                            "margin": 30
                        },
                        "768":{
                            "items":3,
                            "margin": 40
                        },
                        "992":{
                            "items": 4,
                            "margin": 40
                        },
                        "1200":{
                            "items": 5
                        }
                    }
                    }'>
                    <div class="brand-four__carousel__item">
                        <img src="{{ asset('assets/images/brand/brand-3-1.png') }}" alt="oxpins">
                    </div><!-- /.owl-slide-item-->
                    <div class="brand-four__carousel__item">
                        <img src="{{ asset('assets/images/brand/brand-3-1.png') }}" alt="oxpins">
                    </div><!-- /.owl-slide-item-->
                    <div class="brand-four__carousel__item">
                        <img src="{{ asset('assets/images/brand/brand-3-1.png') }}" alt="oxpins">
                    </div><!-- /.owl-slide-item-->
                    <div class="brand-four__carousel__item">
                        <img src="{{ asset('assets/images/brand/brand-3-1.png') }}" alt="oxpins">
                    </div><!-- /.owl-slide-item-->
                    <div class="brand-four__carousel__item">
                        <img src="{{ asset('assets/images/brand/brand-3-1.png') }}" alt="oxpins">
                    </div><!-- /.owl-slide-item-->
                    <div class="brand-four__carousel__item">
                        <img src="{{ asset('assets/images/brand/brand-3-1.png') }}" alt="oxpins">
                    </div><!-- /.owl-slide-item-->
                    <div class="brand-four__carousel__item">
                        <img src="{{ asset('assets/images/brand/brand-3-1.png') }}" alt="oxpins">
                    </div><!-- /.owl-slide-item-->
                    <div class="brand-four__carousel__item">
                        <img src="{{ asset('assets/images/brand/brand-3-1.png') }}" alt="oxpins">
                    </div><!-- /.owl-slide-item-->
                    <div class="brand-four__carousel__item">
                        <img src="{{ asset('assets/images/brand/brand-3-1.png') }}" alt="oxpins">
                    </div><!-- /.owl-slide-item-->
                    <div class="brand-four__carousel__item">
                        <img src="{{ asset('assets/images/brand/brand-3-1.png') }}" alt="oxpins">
                    </div><!-- /.owl-slide-item-->
                </div><!-- /.thm-owl__slider -->
            </div><!-- /.container -->
        </div><!-- /.brand-four -->

        <!--Become Volunteer Start-->
        <section class="become-volunteer-two">
            <div class="container">
                <div class="become-volunteer-two__inner" style="background-image:url('{{ asset('assets/images/shapes/become-volunteer-shape-2.png') }}')">
                    <h2 class="become-volunteer-two__title">Join your Hand with us for a<br> Better Life and Future</h2>
                    <a href="{{ route('becomeVolunteer') }}" class="thm-btn-two">Join as a Volunteer <i class="oxpins-icon-two-voluntary-work"></i></a>
                </div>
            </div>
        </section>
        <!--Become Volunteer End-->

        <!--Site Footer Start-->
        <footer class="site-footer-two">
            <div class="site-footer-two__bg" style="background-image:url('{{ asset('assets/images/shapes/site-footer-two-bg.png') }}')"></div>
            <div class="site-footer-two__top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="footer-widget__column footer-widget__about">
                                <div class="footer-widget__about-logo">
                                   <a href="{{ route('index') }}"><img src="{{ asset('assets/images/resources/footer-logo-two.png') }}" alt="oxpins"></a>
                                </div>
                                <div class="footer-widget__about-text-box">
                                    <p class="footer-widget__about-text">
                                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered 
                                    </p>
                                </div>
                                <div class="site-footer-two__social">
                                    <a href="https://facebook.com">
                                        <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                        <span class="sr-only">Facebook</span>
                                    </a>
                                    <a href="https://twitter.com">
                                        <i class="fab fa-twitter" aria-hidden="true"></i>
                                        <span class="sr-only">Twitter</span>
                                    </a>
                                    <a href="https://pinterest.com">
                                        <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                                        <span class="sr-only">Pinterest</span>
                                    </a>
                                    <a href="https://instagram.com">
                                        <i class="fab fa-instagram" aria-hidden="true"></i>
                                        <span class="sr-only">Instagram</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="footer-widget__column footer-widget__links clearfix">
                                <h3 class="footer-widget__title">Links</h3>
                                <ul class="footer-widget__links-list list-unstyled clearfix">
                                    <li><a href="{{ route('about') }}">About us</a></li>
                                    <li><a href="{{ route('contact') }}">Contact</a></li>
                                    <li><a href="{{ route('news') }}">Latest News</a></li>
                                    <li><a href="{{ route('eventDetails') }}">Recent Events</a></li>
                                    <li><a href="{{ route('donation') }}">Donations</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                            <div class="footer-widget__column footer-widget__non-profit clearfix">
                                <h3 class="footer-widget__title">Non profit</h3>
                                <ul class="footer-widget__non-profit-list list-unstyled clearfix">
                                    <li><a href="{{ route('donationDetails') }}">Differently Abled Kids</a></li>
                                    <li><a href="{{ route('donationDetails') }}">Help Child Cancer</a></li>
                                    <li><a href="{{ route('donationDetails') }}">Clean Pure Water</a></li>
                                    <li><a href="{{ route('donationDetails') }}">Give them Education</a></li>
                                    <li><a href="{{ route('donationDetails') }}">Start a Fundraising</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                            <div class="footer-widget__column footer-widget__contact">
                                <h3 class="footer-widget__title">Contact</h3>
                                <p class="footer-widget__contact-text">6391 Elgin St. Celina, Delaware <br>New York. USA</p>
                                <ul class="list-unstyled footer-widget__contact-list">
                                    <li>
                                        <div class="icon">
                                            <i class="oxpins-icon-two-phone"></i>
                                        </div>
                                        <div class="text">
                                            <p><a href="tel:3035550105">(303) 555-0105</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="oxpins-icon-two-envelop"></i>
                                        </div>
                                        <div class="text">
                                            <p><a href="mailto:michael.mitc@example.com">michael.mitc@example.com</a></p>
                                        </div>
                                    </li>
                                </ul>
                                <form action="#" data-url="MAILCHIMP_FORM_URL" class="footer-widget__form mc-form" novalidate="novalidate">
                                    <input type="text" placeholder="Email Address">
                                    <button type="submit">
                                        <i class="fa fa-paper-plane"></i>
                                    </button>
                                </form>
                                <div class="footer-widget__checked-box">
                                    <input type="checkbox" name="agree" id="agree" checked="">
                                    <label for="agree"><span></span>I agree to all your terms and policies</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-footer-two__bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="site-footer-two__bottom-inner">
                                <p class="site-footer-two__bottom-text">© All Copyright 2023 by <a href="#">Oxpins.com</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--Site Footer End-->

    </div>
    <!-- /.page-wrapper -->

    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="{{ route('index') }}" aria-label="logo image"><img src="{{ asset('assets/images/resources/logo-2.png') }}" width="143"
                        alt="oxpins" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:needhelp@packageName__.com">needhelp@oxpins.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->
        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <x-searchPopup />    
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="icon-up-arrow"></i></a>

    <x-script />

</body>

</html>