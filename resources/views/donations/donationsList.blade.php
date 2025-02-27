@extends('layout.layout1')

@php
    $headTitle='Resources';
    $img='assets/images/backgrounds/resources-header-bg.jpg';
    $title='Home';
    $title2 = 'Resources';
    $subTitle = 'Resources';
@endphp

@section('content')

        <!--Donations List Start-->
        <section class="donations-list" style="background-color:rgba(243, 243, 243, 0.78)">
            <div class="container">
            <div class="section-title text-center">
            <span class="section-title__tagline">Explore Our Resources</span>
                        <h2 class="section-title__title">Find Out the Resources, Publications and Reports</h2>
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
                                        <div class="donations-list__category">
                                            <p>Testimonials</p>
                                        </div>
                                        <h3 class="donations-list__title"><a href="/assets/files/Partnerstestimonials.pdf" Download>Partner's Testimonials</a></h3>
                                        <p class="donations-list__text">Discover what our valued partners have to say about their collaboration with us. These testimonials highlight the impact of our initiatives and the strong relationships we've built in our mission to create meaningful change.</p>
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

                    <!--Donations List Single Start-->
                    <div class="donations-list__single">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="donations-list__img">
                                    <img src="{{ asset('assets/images/resources/donations-list-img-2.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="donations-list__right">
                                    <div class="donations-list__content">
                                        <div class="donations-list__category">
                                            <p>Priliminary Program Report</p>
                                        </div>
                                        <h3 class="donations-list__title"><a href="/assets/files/Report.pdf" Download>Kidney Health Awareness Campaign, Priliminary Program Report</a></h3>
                                        <p class="donations-list__text">This report outlines the key activities, goals, and initial findings of our Kidney Kid Health Awareness Campaign. Learn how we are working towards better kidney health education and awareness for children.</p>
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
                    <!--Donations List Single Start-->
                    <div class="donations-list__single">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="donations-list__img">
                                    <img src="{{ asset('assets/images/resources/donations-list-img-3.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="donations-list__right">
                                    <div class="donations-list__content">
                                        <div class="donations-list__category">
                                            <p>Annual Report</p>
                                        </div>
                                        <h3 class="donations-list__title"><a href="/assets/files/Annualreport.pdf" Download>Annual Report 2019-20</a></h3>
                                        <p class="donations-list__text">Explore our achievements, financial highlights, and the milestones we reached over the past year. This annual report reflects our commitment to transparency and our dedication to creating a lasting impact.</p>
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
                    <!--Donations List Single Start-->
                    <div class="donations-list__single">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="donations-list__img">
                                    <img src="{{ asset('assets/images/resources/donations-list-img-4.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="donations-list__right">
                                    <div class="donations-list__content">
                                        <div class="donations-list__category">
                                            <p>Broucher</p>
                                        </div>
                                        <h3 class="donations-list__title"><a href="/assets/files/GPBroucher.pdf" Download>Broucher</a></h3>
                                        <p class="donations-list__text">Get an overview of our mission, services, and initiatives with this informative brochure. It provides a concise yet comprehensive look into who we are and how we strive to make a difference.</p>
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
                    <!--Donations List Single Start-->
                    <div class="donations-list__single">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="donations-list__img">
                                    <img src="{{ asset('assets/images/resources/donations-list-img-5.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="donations-list__right">
                                    <div class="donations-list__content">
                                        <div class="donations-list__category">
                                            <p>Food</p>
                                        </div>
                                        <h3 class="donations-list__title"><a href="/assets/files/Partnerstestimonials.pdf" Download>Partner's Testimonials</a></h3>
                                        <p class="donations-list__text">Discover what our valued partners have to say about their collaboration with us. These testimonials highlight the impact of our initiatives and the strong relationships we've built in our mission to create meaningful change.</p>
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
        </section>
        <!--Donations List End-->

@endsection