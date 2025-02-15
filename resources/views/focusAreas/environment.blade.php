@extends('layout.layout1')

@php
    $headTitle='Environment';
    $img='assets/images/backgrounds/page-header-bg.jpg';
    $title='Home';
    $title2 = 'Environment';
    $subTitle = 'Environment';
@endphp

@section('content')

                    <!--Main Section Start-->
                    <section class="gallery-carousel-page">
                        <div class="container" style="padding-top: 50px;">
                            <div class="section-title text-center">
                            <span class="section-title__tagline">Environment and Sustainability</span>
                            <h2 class="section-title__title">Our Work Towards Environment and Sustainability</h2>
                            </div>
                            <div class="gallery-carousel thm-owl__carousel owl-theme owl-carousel carousel-dot-style" data-owl-options='{
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
                                <!--Gallery Page Single Start-->
                                <div class="item">
                                    <div class="gallery-page__single">
                                        <div class="gallery-page__img">
                                            <img src="{{ asset('assets/images/gallery/gallery-page-1-1.jpg') }}" alt="">
                                            <a href="assets/images/gallery/gallery-page-1-1.jpg" class="img-popup"></a>
                                            <!-- /.img-popup -->
                                            <div class="gallery-page__content">
                                                <p class="gallery-page__sub-title">Charity</p>
                                                <h5 class="gallery-page__title"><a href="{{ route('gallery') }}">Education</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Gallery Page Single End-->
                                <!--Gallery Page Single Start-->
                                <div class="item">
                                    <div class="gallery-page__single">
                                        <div class="gallery-page__img">
                                            <img src="{{ asset('assets/images/gallery/gallery-page-1-2.jpg') }}" alt="">
                                            <a href="assets/images/gallery/gallery-page-1-2.jpg" class="img-popup"></a>
                                            <!-- /.img-popup -->
                                            <div class="gallery-page__content">
                                                <p class="gallery-page__sub-title">Charity</p>
                                                <h5 class="gallery-page__title"><a href="{{ route('gallery') }}">Education</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Gallery Page Single End-->
                                <!--Gallery Page Single Start-->
                                <div class="item">
                                    <div class="gallery-page__single">
                                        <div class="gallery-page__img">
                                            <img src="{{ asset('assets/images/gallery/gallery-page-1-3.jpg') }}" alt="">
                                            <a href="assets/images/gallery/gallery-page-1-3.jpg" class="img-popup"></a>
                                            <!-- /.img-popup -->
                                            <div class="gallery-page__content">
                                                <p class="gallery-page__sub-title">Charity</p>
                                                <h5 class="gallery-page__title"><a href="{{ route('gallery') }}">Education</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Gallery Page Single End-->
                                <!--Gallery Page Single Start-->
                                <div class="item">
                                    <div class="gallery-page__single">
                                        <div class="gallery-page__img">
                                            <img src="{{ asset('assets/images/gallery/gallery-page-1-4.jpg') }}" alt="">
                                            <a href="assets/images/gallery/gallery-page-1-4.jpg" class="img-popup"></a>
                                            <!-- /.img-popup -->
                                            <div class="gallery-page__content">
                                                <p class="gallery-page__sub-title">Charity</p>
                                                <h5 class="gallery-page__title"><a href="{{ route('gallery') }}">Education</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Gallery Page Single End-->
                                <!--Gallery Page Single Start-->
                                <div class="item">
                                    <div class="gallery-page__single">
                                        <div class="gallery-page__img">
                                            <img src="{{ asset('assets/images/gallery/gallery-page-1-5.jpg') }}" alt="">
                                            <a href="assets/images/gallery/gallery-page-1-5.jpg" class="img-popup"></a>
                                            <!-- /.img-popup -->
                                            <div class="gallery-page__content">
                                                <p class="gallery-page__sub-title">Charity</p>
                                                <h5 class="gallery-page__title"><a href="{{ route('gallery') }}">Education</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Gallery Page Single End-->
                                <!--Gallery Page Single Start-->
                                <div class="item">
                                    <div class="gallery-page__single">
                                        <div class="gallery-page__img">
                                            <img src="{{ asset('assets/images/gallery/gallery-page-1-6.jpg') }}" alt="">
                                            <a href="assets/images/gallery/gallery-page-1-6.jpg" class="img-popup"></a>
                                            <!-- /.img-popup -->
                                            <div class="gallery-page__content">
                                                <p class="gallery-page__sub-title">Charity</p>
                                                <h5 class="gallery-page__title"><a href="{{ route('gallery') }}">Education</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Gallery Page Single End-->
                                <!--Gallery Page Single Start-->
                                <div class="item">
                                    <div class="gallery-page__single">
                                        <div class="gallery-page__img">
                                            <img src="{{ asset('assets/images/gallery/gallery-page-1-7.jpg') }}" alt="">
                                            <a href="assets/images/gallery/gallery-page-1-7.jpg" class="img-popup"></a>
                                            <!-- /.img-popup -->
                                            <div class="gallery-page__content">
                                                <p class="gallery-page__sub-title">Charity</p>
                                                <h5 class="gallery-page__title"><a href="{{ route('gallery') }}">Education</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Gallery Page Single End-->
                                <!--Gallery Page Single Start-->
                                <div class="item">
                                    <div class="gallery-page__single">
                                        <div class="gallery-page__img">
                                            <img src="{{ asset('assets/images/gallery/gallery-page-1-8.jpg') }}" alt="">
                                            <a href="assets/images/gallery/gallery-page-1-8.jpg" class="img-popup"></a>
                                            <!-- /.img-popup -->
                                            <div class="gallery-page__content">
                                                <p class="gallery-page__sub-title">Charity</p>
                                                <h5 class="gallery-page__title"><a href="{{ route('gallery') }}">Education</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Gallery Page Single End-->
                                <!--Gallery Page Single Start-->
                                <div class="item">
                                    <div class="gallery-page__single">
                                        <div class="gallery-page__img">
                                            <img src="{{ asset('assets/images/gallery/gallery-page-1-9.jpg') }}" alt="">
                                            <a href="assets/images/gallery/gallery-page-1-9.jpg" class="img-popup"></a>
                                            <!-- /.img-popup -->
                                            <div class="gallery-page__content">
                                                <p class="gallery-page__sub-title">Charity</p>
                                                <h5 class="gallery-page__title"><a href="{{ route('gallery') }}">Education</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Gallery Page Single End-->
                            </div>

                            <!-- Child Rights Details start  -->
                            <div class="row">
                                <div class="section-title text-center" style="padding-top: 50px;">
                                <div class="col-xl-12 col-lg-12">
                                    <div class="event-details__left">
                                        <div class="event-details__top" style="padding-top: 50px;">
                                            <div class="event-details__date">
                                                <p>Our Efforts</p>
                                            </div>
                                            <h3 class="event-details__title">Our Work Towards Public Health & Nutrition Area</h3>
                                            <!-- <p class="event-details__text-1">Neque porro est qui dolorem ipsum quia quaed inventore
                                                veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p> -->
                                            <p class="event-details__text-1" style="font-size: 20px; line-height: 2em;">Global Pathfields is a research and action organisation works on environmental and sustainability issues. Our initiatives include research, campaigns, community based models, policy interventions, capacity building on issues related to the environment and sustainability and, global warming etc.</p>
                                        </div>
                                    </div>
                                </div>  
                                </div>
                            </div>
                            </div>
                            <!-- Child Rights Details end -->

                            <!-- Foucs Areas start  -->
                            <div class="container" style="padding-top: 50px;">
                            <div class="section-title text-center">
                                <span class="section-title__tagline">Key Focus Areas</span>
                                <h2 class="section-title__title">Our Foucs Towards Environment and Sustainability</h2>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="faq-page__single">
                                        <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-1">
                                            <div class="accrodion">
                                                <div class="accrodion-title">
                                                    <h4>Natural Resource Management</h4>
                                                </div>
                                                <div class="accrodion-content">
                                                    <div class="inner">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    </div><!-- /.inner -->
                                                </div>
                                            </div>
                                            <div class="accrodion">
                                                <div class="accrodion-title">
                                                    <h4>River Conservation</h4>
                                                </div>
                                                <div class="accrodion-content">
                                                    <div class="inner">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    </div><!-- /.inner -->
                                                </div>
                                            </div>
                                            <div class="accrodion active">
                                                <div class="accrodion-title">
                                                    <h4>Policy Advocacy</h4>
                                                </div>
                                                <div class="accrodion-content">
                                                    <div class="inner">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    </div><!-- /.inner -->
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="faq-page__single">
                                        <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-2">
                                            <div class="accrodion">
                                                <div class="accrodion-title">
                                                    <h4>Green Jobs</h4>
                                                </div>
                                                <div class="accrodion-content">
                                                    <div class="inner">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    </div><!-- /.inner -->
                                                </div>
                                            </div>
                                            <div class="accrodion">
                                                <div class="accrodion-title">
                                                    <h4>Global Warming</h4>
                                                </div>
                                                <div class="accrodion-content">
                                                    <div class="inner">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    </div><!-- /.inner -->
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <!-- Foucs Areas end -->



                        <!-- major projects and partners start  -->
                        <div class="container" style="padding-top: 50px;">
                            <div class="section-title text-center">
                            <span class="section-title__tagline">Major Projects</span>
                                        <h2 class="section-title__title">Our Projects and Trusted Partners</h2>
                                        </div>
                                <div class="donations-list__inner">
                                    <!--Donations List Single Start-->
                                    <div class="donations-list__single">
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6">
                                                <div class="donations-list__img">
                                                    <img src="{{ asset('assets/images/resources/donations-list-img-1.jpg') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6">
                                                <div class="donations-list__right">
                                                    <div class="donations-list__content">
                                                        <p class="donations-list__text">End Line Evaluation of the Support my School Campaign on Education and Waste Management, By</p>
                                                        <h3 class="donations-list__title"><a href="{{ route('donationDetails') }}">Plan India and Coca Cola Foundation (2018)</a></h3>
                                                        <div class="donations-list__category">
                                                            <p>In, Uttar Pradesh, Karnataka, Tamil Nadu and Telangana</p>
                                                        </div>
                                                        <!-- <div class="donations-list__progress">
                                                            <div class="donations-list__progress-shape"
                                                                style="background-image:url('{{ asset('assets/images/shapes/donations-list-progress-shape-1.png') }}')">
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
                                                        </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Donations List Single End-->

                                   
                                </div>
                        </div>
                        <!-- major projects and partners end -->



                        </div>
                    </section>
                    <!--Main Section End-->

@endsection