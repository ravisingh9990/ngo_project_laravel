@extends('layout.layout1')

@php
    $headTitle='Events Carousel';
    $img='assets/images/backgrounds/page-header-bg.jpg';
    $title='Home';
    $title2 = 'Events';
    $subTitle = 'Events carousel';
@endphp

@section('content')

        <!--Events Page Start-->
        <section class="events-carousel-page">
            <div class="container">
                <div class="events-carousel thm-owl__carousel owl-theme owl-carousel carousel-dot-style"
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
                    <div class="item">
                        <!--Events One Single Start-->
                        <div class="events-one__single">
                            <div class="events-one__img">
                                <img src="{{ asset('assets/images/events/events-page-1-1.jpg') }}" alt="">
                                <div class="events-one__date">
                                    <p>23 May, 2022</p>
                                </div>
                                <div class="events-one__content">
                                    <ul class="list-unstyled events-one__meta">
                                        <li><i class="fas fa-clock"></i>8:00pm</li>
                                        <li><i class="fas fa-map-marker-alt"></i>New York</li>
                                    </ul>
                                    <h3 class="events-one__title"><a href="{{ route('eventDetails') }}">Play for the
                                            world
                                            with us</a></h3>
                                </div>
                            </div>
                        </div>
                        <!--Events One Single End-->
                    </div>
                    <div class="item">
                        <!--Events One Single Start-->
                        <div class="events-one__single">
                            <div class="events-one__img">
                                <img src="{{ asset('assets/images/events/events-page-1-2.jpg') }}" alt="">
                                <div class="events-one__date">
                                    <p>23 May, 2022</p>
                                </div>
                                <div class="events-one__content">
                                    <ul class="list-unstyled events-one__meta">
                                        <li><i class="fas fa-clock"></i>8:00pm</li>
                                        <li><i class="fas fa-map-marker-alt"></i>New York</li>
                                    </ul>
                                    <h3 class="events-one__title"><a href="{{ route('eventDetails') }}">Contrary to
                                            popular belief</a></h3>
                                </div>
                            </div>
                        </div>
                        <!--Events One Single End-->
                    </div>
                    <div class="item">
                        <!--Events One Single Start-->
                        <div class="events-one__single">
                            <div class="events-one__img">
                                <img src="{{ asset('assets/images/events/events-page-1-3.jpg') }}" alt="">
                                <div class="events-one__date">
                                    <p>23 May, 2022</p>
                                </div>
                                <div class="events-one__content">
                                    <ul class="list-unstyled events-one__meta">
                                        <li><i class="fas fa-clock"></i>8:00pm</li>
                                        <li><i class="fas fa-map-marker-alt"></i>New York</li>
                                    </ul>
                                    <h3 class="events-one__title"><a href="{{ route('eventDetails') }}">There are
                                            many variations of</a></h3>
                                </div>
                            </div>
                        </div>
                        <!--Events One Single End-->
                    </div>
                    <div class="item">
                        <!--Events One Single Start-->
                        <div class="events-one__single">
                            <div class="events-one__img">
                                <img src="{{ asset('assets/images/events/events-page-1-4.jpg') }}" alt="">
                                <div class="events-one__date">
                                    <p>23 May, 2022</p>
                                </div>
                                <div class="events-one__content">
                                    <ul class="list-unstyled events-one__meta">
                                        <li><i class="fas fa-clock"></i>8:00pm</li>
                                        <li><i class="fas fa-map-marker-alt"></i>New York</li>
                                    </ul>
                                    <h3 class="events-one__title"><a href="{{ route('eventDetails') }}">Play for the
                                            world
                                            with us</a></h3>
                                </div>
                            </div>
                        </div>
                        <!--Events One Single End-->
                    </div>
                    <div class="item">
                        <!--Events One Single Start-->
                        <div class="events-one__single">
                            <div class="events-one__img">
                                <img src="{{ asset('assets/images/events/events-page-1-5.jpg') }}" alt="">
                                <div class="events-one__date">
                                    <p>23 May, 2022</p>
                                </div>
                                <div class="events-one__content">
                                    <ul class="list-unstyled events-one__meta">
                                        <li><i class="fas fa-clock"></i>8:00pm</li>
                                        <li><i class="fas fa-map-marker-alt"></i>New York</li>
                                    </ul>
                                    <h3 class="events-one__title"><a href="{{ route('eventDetails') }}">Contrary to
                                            popular belief</a></h3>
                                </div>
                            </div>
                        </div>
                        <!--Events One Single End-->
                    </div>
                    <div class="item">
                        <!--Events One Single Start-->
                        <div class="events-one__single">
                            <div class="events-one__img">
                                <img src="{{ asset('assets/images/events/events-page-1-6.jpg') }}" alt="">
                                <div class="events-one__date">
                                    <p>23 May, 2022</p>
                                </div>
                                <div class="events-one__content">
                                    <ul class="list-unstyled events-one__meta">
                                        <li><i class="fas fa-clock"></i>8:00pm</li>
                                        <li><i class="fas fa-map-marker-alt"></i>New York</li>
                                    </ul>
                                    <h3 class="events-one__title"><a href="{{ route('eventDetails') }}">There are
                                            many variations of</a></h3>
                                </div>
                            </div>
                        </div>
                        <!--Events One Single End-->
                    </div>
                    <div class="item">
                        <!--Events One Single Start-->
                        <div class="events-one__single">
                            <div class="events-one__img">
                                <img src="{{ asset('assets/images/events/events-page-1-1.jpg') }}" alt="">
                                <div class="events-one__date">
                                    <p>23 May, 2022</p>
                                </div>
                                <div class="events-one__content">
                                    <ul class="list-unstyled events-one__meta">
                                        <li><i class="fas fa-clock"></i>8:00pm</li>
                                        <li><i class="fas fa-map-marker-alt"></i>New York</li>
                                    </ul>
                                    <h3 class="events-one__title"><a href="{{ route('eventDetails') }}">Play for the
                                            world
                                            with us</a></h3>
                                </div>
                            </div>
                        </div>
                        <!--Events One Single End-->
                    </div>
                    <div class="item">
                        <!--Events One Single Start-->
                        <div class="events-one__single">
                            <div class="events-one__img">
                                <img src="{{ asset('assets/images/events/events-page-1-2.jpg') }}" alt="">
                                <div class="events-one__date">
                                    <p>23 May, 2022</p>
                                </div>
                                <div class="events-one__content">
                                    <ul class="list-unstyled events-one__meta">
                                        <li><i class="fas fa-clock"></i>8:00pm</li>
                                        <li><i class="fas fa-map-marker-alt"></i>New York</li>
                                    </ul>
                                    <h3 class="events-one__title"><a href="{{ route('eventDetails') }}">Contrary to
                                            popular belief</a></h3>
                                </div>
                            </div>
                        </div>
                        <!--Events One Single End-->
                    </div>
                    <div class="item">
                        <!--Events One Single Start-->
                        <div class="events-one__single">
                            <div class="events-one__img">
                                <img src="{{ asset('assets/images/events/events-page-1-3.jpg') }}" alt="">
                                <div class="events-one__date">
                                    <p>23 May, 2022</p>
                                </div>
                                <div class="events-one__content">
                                    <ul class="list-unstyled events-one__meta">
                                        <li><i class="fas fa-clock"></i>8:00pm</li>
                                        <li><i class="fas fa-map-marker-alt"></i>New York</li>
                                    </ul>
                                    <h3 class="events-one__title"><a href="{{ route('eventDetails') }}">There are
                                            many variations of</a></h3>
                                </div>
                            </div>
                        </div>
                        <!--Events One Single End-->
                    </div>
                </div>
            </div>
        </section>
        <!--Events Page End-->


@endsection