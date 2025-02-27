@extends('layout.layout1')

@php
    $headTitle='Public Health & Nutrition Awareness';
    $img='assets/images/backgrounds/about-header-bg.jpg';
    $title='Home';
    $title2 = 'Public Health & Nutrition Awareness';
    $subTitle = 'Public Health & Nutrition Awareness';
@endphp

@section('content')

        <!--Event Details Start-->
        <section class="event-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="event-details__left">
                            <div class="event-details__top">
                                <div class="event-details__date">
                                    <p>23 Novemeber, 2025</p>
                                </div>
                                <h3 class="event-details__title">Public Health & Nutrition Awareness</h3>
                                <br>
                                <div class="event-details__img-box">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="event-details__img-single">
                                            <img src="{{ asset('assets/images/events/event-details-img-1.jpg') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="event-details__img-single">
                                            <img src="{{ asset('assets/images/events/event-details-img-2.jpg') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <br>
                                <h4>Overview</h4>
                                <br>
                                <p class="event-details__text-1">Public health and nutrition play a vital role in improving the quality of life and preventing diseases. Raising awareness about healthy lifestyles, proper nutrition, and healthcare accessibility is essential for building a healthier society. At Global Pathfields, we are committed to promoting public health education and ensuring that underprivileged communities have access to vital healthcare resources. Our upcoming event, Public Health & Nutrition Awareness, aims to educate, empower, and enhance the well-being of individuals through knowledge and action.</p>
                                <br>
                                <h4>Our Mission and Approach</h4>
                                <p class="event-details__text-1">At Global Pathfields, our mission is to promote better health outcomes by educating communities about nutrition and public health. Our approach includes:</p>
                                <br>
                                <ul class="event-details__text-1">
                                    <li>Health Education Workshops: Providing knowledge about disease prevention, hygiene, and healthy living.</li>
                                    <li>Nutritional Awareness Campaigns: Educating people on balanced diets and food security.</li>
                                    <li>Free Medical Checkups: Offering health screenings and consultations to underserved populations.</li>
                                    <li>Maternal and Child Health Programs: Ensuring proper nutrition and healthcare for mothers and children.</li>
                                    <li>Policy Advocacy: Collaborating with authorities to improve public health policies and accessibility.</li>
                                    
                                </ul>
                                <br>
                                <h3>Event Highlights</h3>
                                <br>
                                <p class="event-details__text-1">Our Public Health & Nutrition Awareness event will feature:</p>
                                <ul class="event-details__text-1">
                                    <li>Expert-Led Seminars: Discussions on health, nutrition, and disease prevention by medical professionals.</li>
                                    <li>Interactive Cooking Demonstrations: Showcasing healthy, budget-friendly meal preparation.</li>
                                    <li>Health Screenings: Free checkups, including BMI assessments, blood pressure monitoring, and diabetes screenings.</li>
                                    <li>Community Engagement Activities: Spreading awareness through storytelling, role-playing, and group discussions.</li>
                                    <li>Resource Distribution: Providing pamphlets, nutritional guides, and hygiene kits to attendees.</li>
                                </ul>
                                <br>
                                <h3>Impact of Our Work</h3>
                                <br>
                                <p class="event-details__text-1">Through our public health and nutrition initiatives, Global Pathfields aims to:</p>
                                <br>
                                <ul class="event-details__text-1">
                                    <li>Educate 50,000 individuals on nutrition and disease prevention.</li>
                                    <li>Provide free health checkups to 20,000 people, ensuring early detection of illnesses.</li>
                                    <li>Improve maternal and child health outcomes through targeted intervention programs.</li>
                                    <li>Reduce malnutrition rates by advocating for better food security and dietary practices.</li>
                                    <li>Strengthen community resilience by empowering local health volunteers.</li>
                                </ul>
                                <br>
                                <h3>The Road Ahead</h3>
                                <br>
                                <p class="event-details__text-1">Our commitment to public health extends beyond this event. We plan to:</p>
                                <br>
                                <ul class="event-details__text-1">
                                    <li>Expand community health programs to more rural and urban areas.</li>
                                    <li>Strengthen partnerships with healthcare providers to improve accessibility.</li>
                                    <li>Launch an online health awareness platform with educational resources and expert advice.</li>
                                    <li>Advocate for improved healthcare policies that prioritize vulnerable populations.</li>
                                </ul>
                                <br>
                                <h3>Conclusion</h3>
                                <br>
                                <p class="event-details__text-1">At Global Pathfields, we believe that public health and nutrition awareness is essential for building a stronger, healthier society. Through our event and ongoing initiatives, we strive to provide communities with the knowledge and resources they need to lead healthier lives. We invite healthcare professionals, policymakers, businesses, and the community to support our mission and be part of the change. Together, we can ensure that everyone has the opportunity to live a healthier and more fulfilling life.</p>
                                
                                <p class="event-details__text-1"></p>
                               
                            </div>
                            
                            <div class="event-details__bottom">
                               
                                <div class="event-details__btn-box">
                                    <a href="{{ route('contact') }}" class="thm-btn event-details__btn">Register
                                        yourself</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-xl-4 col-lg-5">
                        <div class="event-details__right">
                            <div class="event-details__info">
                                <ul class="list-unstyled event-details__info-list">
                                    <li>
                                        <span>Time:</span>
                                        <p>8:00 am to 12:30 pm</p>
                                    </li>
                                    <li>
                                        <span>Date:</span>
                                        <p>23 May, 2022</p>
                                    </li>
                                    <li>
                                        <span>Category:</span>
                                        <p>Health, Medical</p>
                                    </li>
                                    <li>
                                        <span>Location:</span>
                                        <p>Broklyn, New York</p>
                                    </li>
                                </ul>
                                <div class="event-details__social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="event-details__map">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
                                    class="event-details-map__one" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
</section>
@endsection