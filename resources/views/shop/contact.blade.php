@extends('layout.layout1')

@php
    $headTitle='Contact';
    $img='assets/images/backgrounds/contact-header-bg.jpg';
    $title='Home';
    $title2 = 'Contact';
    $subTitle = 'Contact';
@endphp

@section('content')

<!--Contact Three Start-->
<section class="contact-three">
    <div class="contact-three-shape" style="background-image:url('{{ asset('assets/images/shapes/contact-three-shape.png') }}')"></div>
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">Contact with us</span>
            <h2 class="section-title__title">Feel free to write us <br> anytime</h2>
        </div>
        <div class="contact-page__form-box">
            <form action="assets/inc/sendemail.php" class="contact-page__form contact-form-validated" novalidate="novalidate">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="contact-form__input-box">
                            <input type="text" placeholder="Your name" name="name">
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="contact-form__input-box">
                            <input type="email" placeholder="Email address" name="email">
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="contact-form__input-box">
                            <input type="text" placeholder="Phone" name="phone">
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="contact-form__input-box">
                            <input type="text" placeholder="Subject" name="subject">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="contact-form__input-box text-message-box">
                            <textarea name="message" placeholder="Write a message"></textarea>
                        </div>
                        <div class="contact-form__btn-box">
                            <button type="submit" class="thm-btn contact-form__btn">Send a message</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!--Contact Three End-->

<!--Contact One Start-->
<section class="contact-one">
    <div class="container">
        <div class="contact-one__inne">
            <ul class="list-unstyled contact-one__list">
                <li class="contact-one__single">
                    <div class="contact-one__icon">
                        <span class="icon-phone-call"></span>
                    </div>
                    <div class="contact-one__content">
                        <p class="contact-one__sub-title">Helpline</p>
                        <h3 class="contact-one__number"><a href="tel:tel:9643743907">9643-743-907</a></h3>
                    </div>
                </li>
                <li class="contact-one__single">
                    <div class="contact-one__icon">
                        <span class="icon-message"></span>
                    </div>
                    <div class="contact-one__content">
                        <p class="contact-one__sub-title">Send email</p>
                        <h3 class="contact-one__number"><a href="mailto:globalpathfields@gmail.com">globalpathfields@gmail.com</a></h3>
                    </div>
                </li>
                <li class="contact-one__single">
                    <div class="contact-one__icon">
                        <span class="icon-location"></span>
                    </div>
                    <div class="contact-one__content">
                        <p class="contact-one__sub-title">309,Princess Business Skyline, Vijay Nagar, Indore</p>
                        <h3 class="contact-one__number">Madhya Pradesh</h3>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>
<!--Contact One End-->

<!--Google Map Start-->
<section class="google-map google-map-two">
    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd" class="google-map__one" allowfullscreen></iframe> -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3679.4965569169362!2d75.89126807557498!3d22.74694637936801!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3962fd22b0991799%3A0xb24121304045cbc3!2sPrinces&#39;%20Business%20Skyline!5e0!3m2!1sen!2sin!4v1739286218340!5m2!1sen!2sin" width="1500" height="450" style="border:0;" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
<!--Google Map End-->

@endsection