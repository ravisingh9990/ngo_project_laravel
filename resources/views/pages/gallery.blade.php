@extends('layout.layout1')

@php
    $headTitle='Partners';
    $img='assets/images/backgrounds/partners-header-bg.jpg';
    $title='Home';
    $title2 = 'Partners';
    $subTitle = 'Partners';
@endphp

@section('content')

<!--Gallery Page Start-->
<section class="gallery-page" style="background-color:rgba(243, 243, 243, 0.78)">
    <div class="container">
    <div class="section-title text-center">
            <span class="section-title__tagline">Our Partners</span>
            <h2 class="section-title__title">Our Valuable and Trusted Partners</h2>
        </div>
        <div class="row">
            <!--Gallery Page Single Start Ministry of Skills & Entrepreneurship Development, GoI and FSSAI-->
            <div class="col-xl-3 col-lg-4 col-md-4">
                <div class="gallery-page__single">
                    <div class="gallery-page__img">
                        <img src="{{ asset('assets/images/partners/partner01.jpg') }}" alt="">
                        <!-- <a href="assets/images/partners/partner01.jpg" class="img-popup"></a> -->
                        <figcaption class="text-center" style="font-size: 20px;">Ministry of Skills & Entrepreneurship Development, GoI and FSSAI</figcaption>
                    </div>
                </div>
            </div>
            <!--Gallery Page Single End-->
            <!--Gallery Page Single Start Plan India and Plan International-->
            <div class="col-xl-3 col-lg-4 col-md-4">
                <div class="gallery-page__single">
                    <div class="gallery-page__img">
                        <img src="{{ asset('assets/images/partners/partner02.jpg') }}" alt="">
                        <!-- <a href="assets/images/gallery/gallery-page-1-2.jpg" class="img-popup"></a> -->
                        <figcaption class="text-center" style="font-size: 20px;">Plan India and Plan International</figcaption>
                    </div>
                </div>
            </div>
            <!--Gallery Page Single End-->
            <!--Gallery Page Single Start International Platform for Cooperation, Turkey-->
            <div class="col-xl-3 col-lg-4 col-md-4">
                <div class="gallery-page__single">
                    <div class="gallery-page__img">
                        <img src="{{ asset('assets/images/partners/partner03.png') }}" alt="">
                        <!-- <a href="assets/images/gallery/gallery-page-1-3.jpg" class="img-popup"></a> -->
                        <figcaption class="text-center" style="font-size: 20px;">International Platform for Cooperation, Turkey</figcaption>
                    </div>
                </div>
            </div>
            <!--Gallery Page Single End-->
            <!--Gallery Page Single Start Pepsico Foundation-->
            <div class="col-xl-3 col-lg-4 col-md-4">
                <div class="gallery-page__single">
                    <div class="gallery-page__img">
                        <img src="{{ asset('assets/images/partners/partner04.jpg') }}" alt="">
                        <!-- <a href="assets/images/gallery/gallery-page-1-4.jpg" class="img-popup"></a> -->
                        <figcaption class="text-center" style="font-size: 20px;">Pepsico Foundation</figcaption>
                    </div>
                </div>
            </div>
            <!--Gallery Page Single End-->
            <!--Gallery Page Single Start Smile Foundation-->
            <div class="col-xl-3 col-lg-4 col-md-4">
                <div class="gallery-page__single">
                    <div class="gallery-page__img">
                        <img src="{{ asset('assets/images/partners/partner05.jpg') }}" alt="">
                        <!-- <a href="assets/images/gallery/gallery-page-1-5.jpg" class="img-popup"></a> -->
                        <figcaption class="text-center" style="font-size: 20px;">Smile Foundation</figcaption>
                    </div>
                </div>
            </div>
            <!--Gallery Page Single End-->
            <!--Gallery Page Single Start Coca Cola Foundation-->
            <div class="col-xl-3 col-lg-4 col-md-4">
                <div class="gallery-page__single">
                    <div class="gallery-page__img">
                        <img src="{{ asset('assets/images/partners/partner06.jpg') }}" alt="">
                        <!-- <a href="assets/images/gallery/gallery-page-1-6.jpg" class="img-popup"></a> -->
                        <figcaption class="text-center" style="font-size: 20px;">Coca Cola Foundation</figcaption>
                    </div>
                </div>
            </div>
            <!--Gallery Page Single End-->
            <!--Gallery Page Single Start FICCI-->
            <div class="col-xl-3 col-lg-4 col-md-4">
                <div class="gallery-page__single">
                    <div class="gallery-page__img">
                        <img src="{{ asset('assets/images/partners/partner07.jpg') }}" alt="">
                        <!-- <a href="assets/images/gallery/gallery-page-1-7.jpg" class="img-popup"></a> -->
                        <figcaption class="text-center" style="font-size: 20px;">FICCI</figcaption>
                    </div>
                </div>
            </div>
            <!--Gallery Page Single End-->
            <!--Gallery Page Single Start CII-->
            <div class="col-xl-3 col-lg-4 col-md-4">
                <div class="gallery-page__single">
                    <div class="gallery-page__img">
                        <img src="{{ asset('assets/images/partners/partner08.jpg') }}" alt="">
                        <!-- <a href="assets/images/gallery/gallery-page-1-8.jpg" class="img-popup"></a> -->
                        <figcaption class="text-center" style="font-size: 20px;">CII</figcaption>
                    </div>
                </div>
            </div>
            <!--Gallery Page Single End-->
            <!--Gallery Page Single Start Jagran Pahel-->
            <div class="col-xl-3 col-lg-4 col-md-4">
                <div class="gallery-page__single">
                    <div class="gallery-page__img">
                        <img src="{{ asset('assets/images/partners/partner09.jpg') }}" alt="">
                        <!-- <a href="assets/images/gallery/gallery-page-1-9.jpg" class="img-popup"></a> -->
                        <figcaption class="text-center" style="font-size: 20px;">Jagran Pahel</figcaption>
                    </div>
                </div>
            </div>
            <!--Gallery Page Single End-->
            <!--Gallery Page Single Start Knowledge Management Associates, Austria-->
            <div class="col-xl-3 col-lg-4 col-md-4">
                <div class="gallery-page__single">
                    <div class="gallery-page__img">
                        <img src="{{ asset('assets/images/partners/partner10.jpg') }}" alt="">
                        <!-- <a href="assets/images/gallery/gallery-page-1-1.jpg" class="img-popup"></a> -->
                        <figcaption class="text-center" style="font-size: 20px;">Knowledge Management Associates, Austria</figcaption>
                    </div>
                </div>
            </div>
            <!--Gallery Page Single End-->
            <!--Gallery Page Single Start Department of Social Work, University of Delhi-->
            <div class="col-xl-3 col-lg-4 col-md-4">
                <div class="gallery-page__single">
                    <div class="gallery-page__img">
                        <img src="{{ asset('assets/images/partners/partner11.jpg') }}" alt="">
                        <!-- <a href="assets/images/gallery/gallery-page-1-2.jpg" class="img-popup"></a> -->
                        <figcaption class="text-center" style="font-size: 20px;">Department of Social Work, University of Delhi</figcaption>
                    </div>
                </div>
            </div>
            <!--Gallery Page Single End-->
            <!--Gallery Page Single Start Indo Global Social Service Society, New Delhi-->
            <div class="col-xl-3 col-lg-4 col-md-4">
                <div class="gallery-page__single">
                    <div class="gallery-page__img">
                        <img src="{{ asset('assets/images/partners/partner12.jpg') }}" alt="">
                        <!-- <a href="assets/images/gallery/gallery-page-1-3.jpg" class="img-popup"></a> -->
                        <figcaption class="text-center" style="font-size: 20px;">Indo Global Social Service Society, New Delhi</figcaption>
                    </div>
                </div>
            </div>
            <!--Gallery Page Single End-->
            <!--Gallery Page Single Start National Association of Professional Social Workers in India (NAPSWI)-->
            <div class="col-xl-3 col-lg-4 col-md-4">
                <div class="gallery-page__single">
                    <div class="gallery-page__img">
                        <img src="{{ asset('assets/images/partners/partner13.jpg') }}" alt="">
                        <!-- <a href="assets/images/gallery/gallery-page-1-1.jpg" class="img-popup"></a> -->
                        <figcaption class="text-center" style="font-size: 20px;">National Association of Professional Social Workers in India (NAPSWI)</figcaption>
                    </div>
                </div>
            </div>
            <!--Gallery Page Single End-->
            <!--Gallery Page Single Start Nav Srishti-->
            <div class="col-xl-3 col-lg-4 col-md-4">
                <div class="gallery-page__single">
                    <div class="gallery-page__img">
                        <img src="{{ asset('assets/images/partners/partner14.jpg') }}" alt="">
                        <!-- <a href="assets/images/gallery/gallery-page-1-2.jpg" class="img-popup"></a> -->
                        <figcaption class="text-center" style="font-size: 20px;">Nav Srishti</figcaption>
                    </div>
                </div>
            </div>
            <!--Gallery Page Single End-->
            <!--Gallery Page Single Start Dr. A.V. Baliga Memorial Trust-->
            <div class="col-xl-3 col-lg-4 col-md-4">
                <div class="gallery-page__single">
                    <div class="gallery-page__img">
                        <img src="{{ asset('assets/images/partners/partner15.jpg') }}" alt="">
                        <!-- <a href="assets/images/gallery/gallery-page-1-3.jpg" class="img-popup"></a> -->
                        <figcaption class="text-center" style="font-size: 20px;">Dr. A.V. Baliga Memorial Trust</figcaption>
                    </div>
                </div>
            </div>
            <!--Gallery Page Single End-->
            <!--Gallery Page Single Start Matrix Society-->
            <div class="col-xl-3 col-lg-4 col-md-4">
                <div class="gallery-page__single">
                    <div class="gallery-page__img">
                        <img src="{{ asset('assets/images/partners/partner16.jpg') }}" alt="">
                        <!-- <a href="assets/images/gallery/gallery-page-1-4.jpg" class="img-popup"></a> -->
                        <figcaption class="text-center" style="font-size: 20px;">Matrix Society</figcaption>
                    </div>
                </div>
            </div>
            <!--Gallery Page Single End-->
            <!--Gallery Page Single Start Aanchal Charitable Trust-->
            <div class="col-xl-3 col-lg-4 col-md-4">
                <div class="gallery-page__single">
                    <div class="gallery-page__img">
                        <img src="{{ asset('assets/images/partners/partner17.jpg') }}" alt="">
                        <!-- <a href="assets/images/gallery/gallery-page-1-5.jpg" class="img-popup"></a> -->
                        <figcaption class="text-center" style="font-size: 20px;">Aanchal Charitable Trust</figcaption>
                    </div>
                </div>
            </div>
            <!--Gallery Page Single End-->
            <!--Gallery Page Single Start Janhit Society-->
            <div class="col-xl-3 col-lg-4 col-md-4">
                <div class="gallery-page__single">
                    <div class="gallery-page__img">
                        <img src="{{ asset('assets/images/partners/partner18.jpg') }}" alt="">
                        <!-- <a href="assets/images/gallery/gallery-page-1-6.jpg" class="img-popup"></a> -->
                        <figcaption class="text-center" style="font-size: 20px;">Janhit Society</figcaption>
                    </div>
                </div>
            </div>
            <!--Gallery Page Single End-->
            <!--Gallery Page Single Start Pricerwaterhousecoopers-->
            <div class="col-xl-3 col-lg-4 col-md-4">
                <div class="gallery-page__single">
                    <div class="gallery-page__img">
                        <img src="{{ asset('assets/images/partners/partner19.png') }}" alt="">
                        <!-- <a href="assets/images/gallery/gallery-page-1-7.jpg" class="img-popup"></a> -->
                        <figcaption class="text-center" style="font-size: 20px;">Pricerwaterhousecoopers</figcaption>
                    </div>
                </div>
            </div>
            <!--Gallery Page Single End-->
            <!--Gallery Page Single Start HUMANA People to People India-->
            <div class="col-xl-3 col-lg-4 col-md-4">
                <div class="gallery-page__single">
                    <div class="gallery-page__img">
                        <img src="{{ asset('assets/images/partners/partner20.png') }}" alt="">
                        <!-- <a href="assets/images/gallery/gallery-page-1-8.jpg" class="img-popup"></a> -->
                        <figcaption class="text-center" style="font-size: 20px;">HUMANA People to People India</figcaption>
                    </div>
                </div>
            </div>
            <!--Gallery Page Single End -->
            <!--Gallery Page Single Start Plan International (United Kingdom) and Coca Cola Foundation-->
            <div class="col-xl-3 col-lg-4 col-md-4">
                <div class="gallery-page__single">
                    <div class="gallery-page__img">
                        <img src="{{ asset('assets/images/partners/partner02.jpg') }}" alt="">
                        <!-- <a href="assets/images/gallery/gallery-page-1-9.jpg" class="img-popup"></a> -->
                        <figcaption class="text-center" style="font-size: 20px;">Plan International (United Kingdom) and Coca Cola Foundation</figcaption>
                    </div>
                </div>
            </div>
            <!--Gallery Page Single End-->
            <!--Gallery Page Single Start Institute of Management Studies, Indore-->
            <div class="col-xl-3 col-lg-4 col-md-4">
                <div class="gallery-page__single">
                    <div class="gallery-page__img">
                        <img src="{{ asset('assets/images/partners/partner21.png') }}" alt="">
                        <!-- <a href="assets/images/gallery/gallery-page-1-1.jpg" class="img-popup"></a> -->
                        <figcaption class="text-center" style="font-size: 20px;">Institute of Management Studies, Indore</figcaption>
                    </div>
                </div>
            </div>
            <!--Gallery Page Single End-->
            <!--Gallery Page Single Start Daksh Academy-->
            <div class="col-xl-3 col-lg-4 col-md-4">
                <div class="gallery-page__single">
                    <div class="gallery-page__img">
                        <img src="{{ asset('assets/images/partners/partner22.png') }}" alt="">
                        <!-- <a href="assets/images/gallery/gallery-page-1-2.jpg" class="img-popup"></a> -->
                        <figcaption class="text-center" style="font-size: 20px;">Daksh Academy</figcaption>
                    </div>
                </div>
            </div>
            <!--Gallery Page Single End-->
            <!--Gallery Page Single Start Institute of Management Studies, Indore-->
            <!-- <div class="col-xl-3 col-lg-4 col-md-4">
                <div class="gallery-page__single">
                    <div class="gallery-page__img">
                        <img src="{{ asset('assets/images/partners/partner24.jpg') }}" alt=""> -->
                        <!-- <a href="assets/images/gallery/gallery-page-1-3.jpg" class="img-popup"></a> -->
                        <!-- /.img-popup -->
                        <!-- <div class="gallery-page__content">
                            <p class="gallery-page__sub-title">Charity</p>
                            <h5 class="gallery-page__title"><a href="{{ route('gallery') }}">Education</a></h5>
                        </div>
                    </div>
                </div>
            </div> -->
            <!--Gallery Page Single End-->

        </div>
    </div>
</section>
<!--Gallery Page End-->

@endsection