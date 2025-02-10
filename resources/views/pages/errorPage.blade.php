@extends('layout.layout1')

@php
    $headTitle='404 error';
    $img='assets/images/backgrounds/page-header-bg.jpg';
    $title='Home';
    $title2 = 'Pages';
    $subTitle = '404 error';
    $brandOne = 'false';
@endphp

@section('content')

<!--Error Page Start-->
<section class="error-page">
    <div class="error-page-shape" style="background-image:url('{{ asset('assets/images/shapes/error-page-shape.png') }}')">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="error-page__inner">
                    <div class="error-page__title-box">
                        <h2 class="error-page__title">404</h2>
                        <h2 class="error-page__title-2">404</h2>
                    </div>
                    <h3 class="error-page__tagline">Sorry we can't find that page <br>
                        you’re looking for.</h3>
                    <form class="error-page__form">
                        <div class="error-page__form-input">
                            <input type="search" placeholder="Search here">
                            <button type="submit"><i class="icon-magnifying-glass"></i></button>
                        </div>
                    </form>
                    <a href="{{ route('index') }}" class="thm-btn error-page__btn">back to home</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Error Page End-->

@endsection