@extends('layout.layout1')

@php
    $headTitle='Gallery Carousel';
    $img='assets/images/backgrounds/page-header-bg.jpg';
    $title='Home';
    $title2 = 'Pages';
    $subTitle = 'Gallery carousel';
@endphp

@section('content')

<!--Gallery Page Start-->
<section class="gallery-carousel-page">
    <div class="container">
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
    </div>
</section>
<!--Gallery Page End-->

@endsection