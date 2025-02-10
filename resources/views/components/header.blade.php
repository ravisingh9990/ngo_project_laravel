<header class="main-header">
    <nav class="main-menu">
        <div class="main-menu__wrapper">
            <div class="main-menu__wrapper-inner">
                <div class="main-menu__left">
                    <div class="main-menu__logo">
                        <a href="{{ route('index') }}"> <img src="{{ asset('assets/images/resources/logo-1.png') }}"  alt=""></a>
                    </div>
                    <div class="main-menu__shape-1 float-bob-x">
                        <img src="{{ asset('assets/images/shapes/main-menu-shape-1.png') }}" alt="">
                    </div>
                </div>
                <div class="main-menu__right">
                    <div class="main-menu__right-top">
                        <div class="main-menu__right-top-left">
                            <div class="main-menu__volunteers">
                                <div class="main-menu__volunteers-icon">
                                    <img src="{{ asset('assets/images/icon/main-menu-heart-icon.png') }}" alt="">
                                </div>
                                <div class="main-menu__volunteers-text-box">
                                    <p class="main-menu__volunteers-text"><a href="{{ route('becomeVolunteer') }}">Become
                                            a    
                                            <span>volunteers</span></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="main-menu__right-top-right">
                            <div class="main-menu__right-top-address">
                                <ul class="list-unstyled main-menu__right-top-address-list">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-phone-call"></span>
                                        </div>
                                        <div class="content">
                                            <p>Helpline</p>
                                            <h5><a href="tel:9643743907">96437-43907</a></h5>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-message"></span>
                                        </div>
                                        <div class="content">
                                            <p>Send email</p>
                                            <h5><a href="mailto:globalpathfields@gmail.com">globalpathfields@gmail.com</a>
                                            </h5>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-location"></span>
                                        </div>
                                        <div class="content">
                                            <p>309,Princess Business Skyline, Vijay Nagar, Indore</p>
                                            <h5>Madhya Pradesh</h5>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="main-menu__right-top-social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="main-menu__right-bottom">
                        <div class="main-menu__main-menu-box">
                            <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                            <ul class="main-menu__list">
                                <li class="megamenu megamenu-clickable megamenu-clickable--toggler">
                                    <a href="{{ route('index') }}">Home</a>
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
                                                                                <a href="{{ route('index5Dark') }}" class="thm-btn">Dark Page</a>
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
                        <div class="main-menu__main-menu-content-box">
                            <div class="main-menu__search-cat-btn-box">
                                <div class="main-menu__search-box">
                                    <a href="#"
                                        class="main-menu__search search-toggler icon-magnifying-glass"></a>
                                </div>
                                <div class="main-menu__cat-box">
                                    <a href="{{ route('cart') }}" class="main-menu__cart icon-shopping-cart"></a>
                                </div>
                                <div class="main-menu__btn-box">
                                    <a href="{{ route('donateNow') }}" class="main-menu__btn"> <span
                                            class="fa fa-heart"></span> Donate
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