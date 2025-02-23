@extends('layout.layout1')

@php
    $headTitle='about';
    $img='assets/images/backgrounds/about-header-bg.jpg';
    $title='Home';
    $title2 = 'About Us';
    $subTitle = 'About us';
    $brandOne = 'true';
@endphp

@section('content')

        <!--About Four Start-->
        <section class="about-four">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-four__left">
                            <div class="about-four__img-box">
                                <div class="about-four__img">
                                    <img src="{{ asset('assets/images/resources/about-four-img-1.jpg') }}" alt="">
                                </div>
                                <div class="about-four__img-two">
                                    <img src="{{ asset('assets/images/resources/about-four-img-2.jpg') }}" alt="">
                                </div>
                                <div class="about-four__border"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-four__right">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Global Pathfields</span>
                                <h2 class="section-title__title">Organization Overview</h2>
                            </div>
                            <p class="about-four__text">Global Pathfields is a dynamic non-profit organisation dedicated to fostering inclusive development. Focused on empowering vulnerable communities—especially children, youth, and women—it provides innovative solutions for a more equitable and sustainable world. <br> Operating across sectors like child rights, education, skill development, public health, and sustainability, Global Pathfields partners with governments, private entities, and civil society to tackle pressing development challenges.</p>
                            <ul class="list-unstyled about-four__points">
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Empowering Communities</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Collaborative Impact</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Holistic Approach</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="about-four__btn-box" style="margin-bottom: 50px;">
                                <a href="{{ route('about') }}" class="thm-btn about-four__btn">Discover More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About Four End-->

        <!--Testimonial Two Start-->
        
        <section class="team-one" style="background-color:rgba(243, 243, 243, 0.78)">
            <div class="container">
                        <div class="section-title text-center">
                        <span class="section-title__tagline">Meet Our Leadership Team</span>
                        <h2 class="section-title__title">Discover the Visionaries <br> Behind Our Success</h2>
                        </div>
                <div class="row">
                            <!--Gaurav Joshi Team Start-->
                            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                                <div class="team-one__single">
                                    <div class="team-one__img">
                                        <img src="{{ asset('assets/images/team/1.png') }}" alt="">
                                        <div class="team-one__social">
                                            <a href="#"><i class="fab fa-facebook"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                    <div class="team-one__content">
                                        <h3 class="team-one__name"><a href="#">Gaurav Joshi</a></h3>
                                        <p class="team-one__sub-title">Co-founder & Managing Director</p>
                                    </div>
                                </div>
                            </div>
                            <!--Gaurav Joshi Single End-->
                            <!--Aashish Purohit Single Start-->
                            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                                <div class="team-one__single">
                                    <div class="team-one__img">
                                        <img src="{{ asset('assets/images/team/5.png') }}" alt="">
                                        <div class="team-one__social">
                                            <a href="#"><i class="fab fa-facebook"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                    <div class="team-one__content">
                                        <h3 class="team-one__name"><a href="#">Aashish Purohit</a></h3>
                                        <p class="team-one__sub-title">Director</p>
                                    </div>
                                </div>
                            </div>
                            <!--Aashish Purohit Single End-->
                            <!--Jitender Single Start-->
                            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                                <div class="team-one__single">
                                    <div class="team-one__img">
                                        <img src="{{ asset('assets/images/team/2.png') }}" alt="">
                                        <div class="team-one__social">
                                            <a href="#"><i class="fab fa-facebook"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                    <div class="team-one__content">
                                        <h3 class="team-one__name"><a href="#">Jitender Kumar</a></h3>
                                        <p class="team-one__sub-title">program Officer</p>
                                    </div>
                                </div>
                            </div>
                            <!--Jitender Single End-->
                            <!--Preeti Single Start-->
                            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                                <div class="team-one__single">
                                    <div class="team-one__img">
                                        <img src="{{ asset('assets/images/team/3.png') }}" alt="">
                                        <div class="team-one__social">
                                            <a href="#"><i class="fab fa-facebook"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                    <div class="team-one__content">
                                        <h3 class="team-one__name"><a href="#">Preeti Sagore</a></h3>
                                        <p class="team-one__sub-title">Outreach Manager</p>
                                    </div>
                                </div>
                            </div>
                            <!--Preeti Single End-->
                            <!--Rita Single Start-->
                            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                                <div class="team-one__single">
                                    <div class="team-one__img">
                                        <img src="{{ asset('assets/images/team/4.png') }}" alt="">
                                        <div class="team-one__social">
                                            <a href="#"><i class="fab fa-facebook"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                    <div class="team-one__content">
                                        <h3 class="team-one__name"><a href="#">Rita Lehri</a></h3>
                                        <p class="team-one__sub-title">Senior Trainer</p>
                                    </div>
                                </div>
                            </div>
                            <!--Rita Single End-->
                            <!--Team One Single Start-->
                            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="600ms">
                                <div class="team-one__single">
                                    <div class="team-one__img">
                                        <img src="{{ asset('assets/images/team/6.png') }}" alt="">
                                        <div class="team-one__social">
                                            <a href="#"><i class="fab fa-facebook"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                    <div class="team-one__content">
                                        <h3 class="team-one__name"><a href="#">Yukta Burvey</a></h3>
                                        <p class="team-one__sub-title">Outreach Manager</p>
                                    </div>
                                </div>
                            </div>
                            <!--Team One Single End-->
                            <!--Team One Single Start-->
                            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="600ms">
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
                                        <h3 class="team-one__name"><a href="#">Dr. Khanindra Bhuyan</a></h3>
                                        <p class="team-one__sub-title">Senior Advisor</p>
                                    </div>
                                </div>
                            </div>
                            <!--Team One Single End-->
                            
                </div>
            </div>
        </section>

        <!--Testimonial Two End-->

        <!--Become Volunteer One Start-->
        <x-coreValues/>        
        <!--Become Volunteer One End-->

        <section class="team-one" style="background-color:rgba(243, 243, 243, 0.78)">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Our Presence Map</span>
                    <h1 class="section-title__title">Geographical Presence </h1>
                    <div class="row">
                    <div class="col-xl-12
                    ] col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="100ms">
                    <img class="img-fluid max-width-100" alt="Geographical Area Map" src="{{ asset('assets/images/map.png') }}" />
                    </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Team One End-->
        

        <!--Team One Start-->
        <section class="team-one">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Approach/Strategy</span>
                    <h6 style="font-size: 35px"  class="section-title__title">Global Pathfields tackles development challenges through collaboration, innovation, and sustainability, using evidence-based solutions to drive inclusive and equitable growth</h6>
                </div>
            </div>
        </section>
        <!--Team One End-->
        

@endsection