@extends('layout.layout1')

@php
    $headTitle='Events';
    $img='assets/images/backgrounds/page-header-bg.jpg';
    $title='Home';
    $title2 = 'Events';
    $subTitle = 'Events';
@endphp

@section('content')

<!--Events Page Start-->
<section class="events-page">
    <div class="container">
    <div class="section-title text-center">
                        <span class="section-title__tagline">Explore Our Events</span>
                        <h2 class="section-title__title">Find Out the Impact of our Efforts <br> Through Our Events</h2>
                        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-6">
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
            <div class="col-xl-4 col-lg-6 col-md-6">
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
            <div class="col-xl-4 col-lg-6 col-md-6">
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
            <div class="col-xl-4 col-lg-6 col-md-6">
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
            <div class="col-xl-4 col-lg-6 col-md-6">
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
            <div class="col-xl-4 col-lg-6 col-md-6">
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
        </div>
    </div>
</section>
<!--Events Page End-->

@endsection