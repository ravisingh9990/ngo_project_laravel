<header class="main-header">
            <nav class="main-menu">
                <div class="main-menu__wrapper">
                    <div class="main-menu__wrapper-inner">
                        <div class="main-menu__left">
                            <div class="main-menu__logo">
                                <a href="{{ route('index') }}"> <img src="{{ asset('assets/images/resources/logo-1.png') }}" alt=""></a>
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
                                                    <h5><a href="tel:9643743907">9643743907</a></h5>
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
                                        <li>
                                            <a href="{{ route('index') }}">Home</a>
                                            
                                        </li>
                                        <li class="dropdown">
                                            <a href="{{ route('about') }}">About</a>
                                        </li>
                                        <!-- <li class="dropdown">
                                            <a href="#">Focus Areas</a>
                                            <ul>
                                                <li><a href="{{ route('donation') }}">Donation</a></li>
                                                <li><a href="{{ route('donationsList') }}">Donation list</a></li>
                                                <li><a href="{{ route('donationCarousel') }}">Donation carousel</a></li>
                                                <li><a href="{{ route('donationDetails') }}">Donation details</a></li>
                                                <li><a href="{{ route('donateNow') }}">Donate Now</a></li>
                                            </ul>
                                        </li> -->
                                        <li class="dropdown">
                                            <a href="{{ route('events') }}">Events</a>
                                            <!-- <ul>
                                                <li><a href="{{ route('events') }}">Events</a></li>
                                                <li><a href="{{ route('eventsCarousel') }}">Events carousel</a></li>
                                                <li><a href="{{ route('eventDetails') }}">Event details</a></li>
                                            </ul> -->
                                        </li>
                                        <li class="dropdown">
                                            <a href="{{ route('donationsList') }}">Resources</a>

                                        </li>
                                        <li class="dropdown">
                                            <a href="{{ route('gallery') }}">Partners</a>
                                            <!-- <ul>
                                                <li><a href="{{ route('products') }}">Shop</a></li>
                                                <li><a href="{{ route('productDetails') }}">Product details</a></li>
                                                <li><a href="{{ route('cart') }}">Cart</a></li>
                                                <li><a href="{{ route('checkout') }}">Checkout</a></li>
                                            </ul> -->
                                        </li>
                                        <li>
                                            <a href="{{ route('contact') }}">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="main-menu__main-menu-content-box">
                                    <div class="main-menu__search-cat-btn-box">
                                        <div class="main-menu__search-box">
                                            <a href="#" class="main-menu__search search-toggler icon-magnifying-glass"></a>
                                        </div>
                                        <div class="main-menu__cat-box">
                                            <!-- <a href="{{ route('cart') }}" class="main-menu__cart icon-shopping-cart"></a> -->
                                        </div>
                                        <div class="main-menu__btn-box">
                                            <a href="{{ route('donateNow') }}" class="main-menu__btn"> <span class="fa fa-heart"></span> Donate
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
