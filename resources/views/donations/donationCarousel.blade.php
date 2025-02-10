@extends('layout.layout1')

@php
    $headTitle='Donation Carousel';
    $img='assets/images/backgrounds/page-header-bg.jpg';
    $title='Home';
    $title2 = 'Donations';
    $subTitle = 'Donations carousel';
@endphp

@section('content')

        <!--Donation Caraousel Start-->
        <section class="donation-carousel-page">
            <div class="container">
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
                    <div class="item">
                        <div class="causes-one__single">
                            <div class="causes-one__img">
                                <img src="{{ asset('assets/images/resources/causes-1-2.jpg') }}" alt="">
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
                    <div class="item">
                        <div class="causes-one__single">
                            <div class="causes-one__img">
                                <img src="{{ asset('assets/images/resources/causes-1-3.jpg') }}" alt="">
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
                    <div class="item">
                        <div class="causes-one__single">
                            <div class="causes-one__img">
                                <img src="{{ asset('assets/images/resources/causes-1-4.jpg') }}" alt="">
                                <div class="causes-one__cat">
                                    <p>Education</p>
                                </div>
                            </div>
                            <div class="causes-one__content">
                                <h3 class="causes-one__title"><a href="{{ route('donationDetails') }}">Maecenas ut ligula ut nisi
                                        porta tempor ac</a>
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
                    <div class="item">
                        <div class="causes-one__single">
                            <div class="causes-one__img">
                                <img src="{{ asset('assets/images/resources/causes-1-5.jpg') }}" alt="">
                                <div class="causes-one__cat">
                                    <p>Food</p>
                                </div>
                            </div>
                            <div class="causes-one__content">
                                <h3 class="causes-one__title"><a href="{{ route('donationDetails') }}">Phasellus suscipit est
                                        vitae risus congue</a>
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
                    <div class="item">
                        <div class="causes-one__single">
                            <div class="causes-one__img">
                                <img src="{{ asset('assets/images/resources/causes-1-6.jpg') }}" alt="">
                                <div class="causes-one__cat">
                                    <p>Medical</p>
                                </div>
                            </div>
                            <div class="causes-one__content">
                                <h3 class="causes-one__title"><a href="{{ route('donationDetails') }}">Sed malesuada nisl eget
                                        porta luctus</a>
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
                    <div class="item">
                        <div class="causes-one__single">
                            <div class="causes-one__img">
                                <img src="{{ asset('assets/images/resources/causes-1-1.jpg') }}" alt="">
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
                    <div class="item">
                        <div class="causes-one__single">
                            <div class="causes-one__img">
                                <img src="{{ asset('assets/images/resources/causes-1-2.jpg') }}" alt="">
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
                    <div class="item">
                        <div class="causes-one__single">
                            <div class="causes-one__img">
                                <img src="{{ asset('assets/images/resources/causes-1-3.jpg') }}" alt="">
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
                </div>
            </div>
        </section>
        <!--Donation Caraousel End-->

@endsection