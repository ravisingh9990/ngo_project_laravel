@extends('layout.layout1')

@php
    $headTitle='News Carousel';
    $img='assets/images/backgrounds/page-header-bg.jpg';
    $title='Home';
    $title2 = 'News carousel';
    $subTitle = 'News carousel';
@endphp

@section('content')

<!--News Page Start-->
<section class="news-carousel-page">
    <div class="container">
        <div class="news-carousel thm-owl__carousel owl-theme owl-carousel carousel-dot-style" data-owl-options='{
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
            <!--News One Single Start-->
            <div class="item">
                <div class="news-one__single">
                    <div class="news-one__img">
                        <img src="{{ asset('assets/images/blog/news-1-1.jpg') }}" alt="">
                    </div>
                    <div class="news-one__content-box">
                        <div class="news-one__content-inner">
                            <div class="news-one__content">
                                <ul class="list-unstyled news-one__meta">
                                    <li><a href="{{ route('newsDetails') }}"><i class="far fa-user-circle"></i> Admin</a>
                                    </li>
                                    <li><a href="{{ route('newsDetails') }}"><i class="fas fa-comments"></i> 2
                                            Comments</a>
                                    </li>
                                </ul>
                                <h3 class="news-one__title"><a href="{{ route('newsDetails') }}">How does the
                                        malnutrition
                                        affect children?</a></h3>
                            </div>
                            <div class="news-one__bottom">
                                <div class="news-one__read-more">
                                    <a href="{{ route('newsDetails') }}"> <span class="icon-right-arrow"></span> Read
                                        More</a>
                                </div>
                                <div class="news-one__share">
                                    <a href="#"><i class="fas fa-share-alt"></i></a>
                                </div>
                            </div>
                            <div class="news-one__social-box">
                                <ul class="list-unstyled news-one__social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="news-one__date">
                            <p>23 May, 2022</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--News One Single End-->
            <!--News One Single Start-->
            <div class="item">
                <div class="news-one__single">
                    <div class="news-one__img">
                        <img src="{{ asset('assets/images/blog/news-1-2.jpg') }}" alt="">
                    </div>
                    <div class="news-one__content-box">
                        <div class="news-one__content-inner">
                            <div class="news-one__content">
                                <ul class="list-unstyled news-one__meta">
                                    <li><a href="{{ route('newsDetails') }}"><i class="far fa-user-circle"></i> Admin</a>
                                    </li>
                                    <li><a href="{{ route('newsDetails') }}"><i class="fas fa-comments"></i> 2
                                            Comments</a>
                                    </li>
                                </ul>
                                <h3 class="news-one__title"><a href="{{ route('newsDetails') }}">Lorem Ipsum has been the
                                        industry's standard</a></h3>
                            </div>
                            <div class="news-one__bottom">
                                <div class="news-one__read-more">
                                    <a href="{{ route('newsDetails') }}"> <span class="icon-right-arrow"></span> Read
                                        More</a>
                                </div>
                                <div class="news-one__share">
                                    <a href="#"><i class="fas fa-share-alt"></i></a>
                                </div>
                            </div>
                            <div class="news-one__social-box">
                                <ul class="list-unstyled news-one__social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="news-one__date">
                            <p>23 May, 2022</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--News One Single End-->
            <!--News One Single Start-->
            <div class="item">
                <div class="news-one__single">
                    <div class="news-one__img">
                        <img src="{{ asset('assets/images/blog/news-1-3.jpg') }}" alt="">
                    </div>
                    <div class="news-one__content-box">
                        <div class="news-one__content-inner">
                            <div class="news-one__content">
                                <ul class="list-unstyled news-one__meta">
                                    <li><a href="{{ route('newsDetails') }}"><i class="far fa-user-circle"></i> Admin</a>
                                    </li>
                                    <li><a href="{{ route('newsDetails') }}"><i class="fas fa-comments"></i> 2
                                            Comments</a>
                                    </li>
                                </ul>
                                <h3 class="news-one__title"><a href="{{ route('newsDetails') }}">There are many
                                        variations of passages of Lorem</a></h3>
                            </div>
                            <div class="news-one__bottom">
                                <div class="news-one__read-more">
                                    <a href="{{ route('newsDetails') }}"> <span class="icon-right-arrow"></span> Read
                                        More</a>
                                </div>
                                <div class="news-one__share">
                                    <a href="#"><i class="fas fa-share-alt"></i></a>
                                </div>
                            </div>
                            <div class="news-one__social-box">
                                <ul class="list-unstyled news-one__social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="news-one__date">
                            <p>23 May, 2022</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--News One Single End-->
            <!--News One Single Start-->
            <div class="item">
                <div class="news-one__single">
                    <div class="news-one__img">
                        <img src="{{ asset('assets/images/blog/news-1-4.jpg') }}" alt="">
                    </div>
                    <div class="news-one__content-box">
                        <div class="news-one__content-inner">
                            <div class="news-one__content">
                                <ul class="list-unstyled news-one__meta">
                                    <li><a href="{{ route('newsDetails') }}"><i class="far fa-user-circle"></i> Admin</a>
                                    </li>
                                    <li><a href="{{ route('newsDetails') }}"><i class="fas fa-comments"></i> 2
                                            Comments</a>
                                    </li>
                                </ul>
                                <h3 class="news-one__title"><a href="{{ route('newsDetails') }}">Lorem ipsum dolor sit
                                        amet, consectetur</a></h3>
                            </div>
                            <div class="news-one__bottom">
                                <div class="news-one__read-more">
                                    <a href="{{ route('newsDetails') }}"> <span class="icon-right-arrow"></span> Read
                                        More</a>
                                </div>
                                <div class="news-one__share">
                                    <a href="#"><i class="fas fa-share-alt"></i></a>
                                </div>
                            </div>
                            <div class="news-one__social-box">
                                <ul class="list-unstyled news-one__social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="news-one__date">
                            <p>23 May, 2022</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--News One Single End-->
            <!--News One Single Start-->
            <div class="item">
                <div class="news-one__single">
                    <div class="news-one__img">
                        <img src="{{ asset('assets/images/blog/news-1-5.jpg') }}" alt="">
                    </div>
                    <div class="news-one__content-box">
                        <div class="news-one__content-inner">
                            <div class="news-one__content">
                                <ul class="list-unstyled news-one__meta">
                                    <li><a href="{{ route('newsDetails') }}"><i class="far fa-user-circle"></i> Admin</a>
                                    </li>
                                    <li><a href="{{ route('newsDetails') }}"><i class="fas fa-comments"></i> 2
                                            Comments</a>
                                    </li>
                                </ul>
                                <h3 class="news-one__title"><a href="{{ route('newsDetails') }}">Aenean sollicitudin leo
                                        nunc, nec ornare enim</a></h3>
                            </div>
                            <div class="news-one__bottom">
                                <div class="news-one__read-more">
                                    <a href="{{ route('newsDetails') }}"> <span class="icon-right-arrow"></span> Read
                                        More</a>
                                </div>
                                <div class="news-one__share">
                                    <a href="#"><i class="fas fa-share-alt"></i></a>
                                </div>
                            </div>
                            <div class="news-one__social-box">
                                <ul class="list-unstyled news-one__social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="news-one__date">
                            <p>23 May, 2022</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--News One Single End-->
            <!--News One Single Start-->
            <div class="item">
                <div class="news-one__single">
                    <div class="news-one__img">
                        <img src="{{ asset('assets/images/blog/news-1-6.jpg') }}" alt="">
                    </div>
                    <div class="news-one__content-box">
                        <div class="news-one__content-inner">
                            <div class="news-one__content">
                                <ul class="list-unstyled news-one__meta">
                                    <li><a href="{{ route('newsDetails') }}"><i class="far fa-user-circle"></i> Admin</a>
                                    </li>
                                    <li><a href="{{ route('newsDetails') }}"><i class="fas fa-comments"></i> 2
                                            Comments</a>
                                    </li>
                                </ul>
                                <h3 class="news-one__title"><a href="{{ route('newsDetails') }}">Donec a scelerisque
                                        nibh. Cras laoreet tellus</a></h3>
                            </div>
                            <div class="news-one__bottom">
                                <div class="news-one__read-more">
                                    <a href="{{ route('newsDetails') }}"> <span class="icon-right-arrow"></span> Read
                                        More</a>
                                </div>
                                <div class="news-one__share">
                                    <a href="#"><i class="fas fa-share-alt"></i></a>
                                </div>
                            </div>
                            <div class="news-one__social-box">
                                <ul class="list-unstyled news-one__social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="news-one__date">
                            <p>23 May, 2022</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--News One Single End-->
            <!--News One Single Start-->
            <div class="item">
                <div class="news-one__single">
                    <div class="news-one__img">
                        <img src="{{ asset('assets/images/blog/news-1-1.jpg') }}" alt="">
                    </div>
                    <div class="news-one__content-box">
                        <div class="news-one__content-inner">
                            <div class="news-one__content">
                                <ul class="list-unstyled news-one__meta">
                                    <li><a href="{{ route('newsDetails') }}"><i class="far fa-user-circle"></i> Admin</a>
                                    </li>
                                    <li><a href="{{ route('newsDetails') }}"><i class="fas fa-comments"></i> 2
                                            Comments</a>
                                    </li>
                                </ul>
                                <h3 class="news-one__title"><a href="{{ route('newsDetails') }}">How does the
                                        malnutrition
                                        affect children?</a></h3>
                            </div>
                            <div class="news-one__bottom">
                                <div class="news-one__read-more">
                                    <a href="{{ route('newsDetails') }}"> <span class="icon-right-arrow"></span> Read
                                        More</a>
                                </div>
                                <div class="news-one__share">
                                    <a href="#"><i class="fas fa-share-alt"></i></a>
                                </div>
                            </div>
                            <div class="news-one__social-box">
                                <ul class="list-unstyled news-one__social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="news-one__date">
                            <p>23 May, 2022</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--News One Single End-->
            <!--News One Single Start-->
            <div class="item">
                <div class="news-one__single">
                    <div class="news-one__img">
                        <img src="{{ asset('assets/images/blog/news-1-2.jpg') }}" alt="">
                    </div>
                    <div class="news-one__content-box">
                        <div class="news-one__content-inner">
                            <div class="news-one__content">
                                <ul class="list-unstyled news-one__meta">
                                    <li><a href="{{ route('newsDetails') }}"><i class="far fa-user-circle"></i> Admin</a>
                                    </li>
                                    <li><a href="{{ route('newsDetails') }}"><i class="fas fa-comments"></i> 2
                                            Comments</a>
                                    </li>
                                </ul>
                                <h3 class="news-one__title"><a href="{{ route('newsDetails') }}">Lorem Ipsum has been the
                                        industry's standard</a></h3>
                            </div>
                            <div class="news-one__bottom">
                                <div class="news-one__read-more">
                                    <a href="{{ route('newsDetails') }}"> <span class="icon-right-arrow"></span> Read
                                        More</a>
                                </div>
                                <div class="news-one__share">
                                    <a href="#"><i class="fas fa-share-alt"></i></a>
                                </div>
                            </div>
                            <div class="news-one__social-box">
                                <ul class="list-unstyled news-one__social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="news-one__date">
                            <p>23 May, 2022</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--News One Single End-->
            <!--News One Single Start-->
            <div class="item">
                <div class="news-one__single">
                    <div class="news-one__img">
                        <img src="{{ asset('assets/images/blog/news-1-3.jpg') }}" alt="">
                    </div>
                    <div class="news-one__content-box">
                        <div class="news-one__content-inner">
                            <div class="news-one__content">
                                <ul class="list-unstyled news-one__meta">
                                    <li><a href="{{ route('newsDetails') }}"><i class="far fa-user-circle"></i> Admin</a>
                                    </li>
                                    <li><a href="{{ route('newsDetails') }}"><i class="fas fa-comments"></i> 2
                                            Comments</a>
                                    </li>
                                </ul>
                                <h3 class="news-one__title"><a href="{{ route('newsDetails') }}">There are many
                                        variations of passages of Lorem</a></h3>
                            </div>
                            <div class="news-one__bottom">
                                <div class="news-one__read-more">
                                    <a href="{{ route('newsDetails') }}"> <span class="icon-right-arrow"></span> Read
                                        More</a>
                                </div>
                                <div class="news-one__share">
                                    <a href="#"><i class="fas fa-share-alt"></i></a>
                                </div>
                            </div>
                            <div class="news-one__social-box">
                                <ul class="list-unstyled news-one__social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="news-one__date">
                            <p>23 May, 2022</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--News One Single End-->
        </div>
    </div>
</section>
<!--News Page End-->

@endsection