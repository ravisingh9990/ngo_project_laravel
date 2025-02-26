@extends('layout.layout1')

@php
    $headTitle='Healthcare for a Healthier Tomorrow';
    $img='assets/images/backgrounds/donation-detail1.jpg';
    $title='Home';
    $title2 = 'Healthcare for a Healthier Tomorrow';
    $subTitle = 'Healthcare for a Healthier Tomorrow';
@endphp

@section('content')

        <!--Donation Details Start-->
        <section class="donation-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="donation-details__left">
                            <div class="donation-details__top">
                                <div class="donation-details__img">
                                    <img src="{{ asset('assets/images/resources/donation-detail1.jpg') }}" alt="">
                                    <div class="donation-details__date">
                                        <p>Health</p>
                                    </div>
                                </div>
                                <div class="donation-details__content">
                                    <h3 class="donation-details__title">Healthcare for a Healthier Tomorrow</h3>

                                    <h4>Overview</h4>
                                    <br>
                                    <p class="donation-details__text">Access to quality healthcare is a fundamental human right, yet millions of people around the world still struggle to receive essential medical services. At Global Pathfields, we are dedicated to bridging this gap by providing healthcare solutions to underserved communities. Through our various programs, we strive to create a healthier future for all, ensuring that no one is left behind when it comes to medical care.</p>
                                    <br>
                                    <h3>Our Mission and Approach</h3>
                                    <br>
                                    <p class="donation-details__text">At Global Pathfields, our mission is to improve healthcare accessibility, promote preventive care, and support medical initiatives that enhance community well-being. Our approach focuses on:</p>
                                    <br>
                                    <ul>
                                        <li class="donation-details__text"><span>Free Medical Camps:</span> Providing essential health check-ups and treatments to underprivileged communities.</li>
                                        <li class="donation-details__text"><span>Mobile Health Clinics:</span> Reaching remote areas with necessary medical assistance.</li>
                                        <li class="donation-details__text"><span>Maternal and Child Health Programs:</span> Ensuring safe pregnancies, childbirth, and child nutrition.</li>
                                        <li class="donation-details__text"><span>Health Awareness Campaigns:</span> Educating people about hygiene, disease prevention, and healthy living.</li>
                                        <li class="donation-details__text"><span>Partnerships with Healthcare Providers:</span> Collaborating with hospitals and professionals to enhance medical outreach.</li>
                                    </ul>
                                    <br>
                                    <h3>Impact of Our Work</h3>
                                    <br>
                                    <h4>Through our dedicated efforts, Global Pathfields has made significant contributions to healthcare improvement:</h4>
                                    <br>
                                    <ul>
                                        <li class="donation-details__text">Provided free medical check-ups and treatment to over 200,000 individuals.</li>
                                        <li class="donation-details__text">Operated 50+ mobile health clinics, bringing healthcare to remote areas.</li>
                                        <li class="donation-details__text">Supported maternal and child health programs, reducing infant and maternal mortality rates.</li>
                                        <li class="donation-details__text">Conducted awareness campaigns reaching over 100,000 people on disease prevention and hygiene.</li>
                                        <li class="donation-details__text">Partnered with various medical institutions to extend healthcare support.</li>
                                    </ul>
                                    <br>
                                    <h3>The Road Ahead</h3>
                                    <br>
                                    <h4>While we have made a meaningful impact, there is still much work to be done. Our future goals include:</h4>
                                    <br>
                                    <ul>
                                        <li class="donation-details__text">Expanding our mobile health clinics to reach more rural and underserved areas.</li>
                                        <li class="donation-details__text">Strengthening our maternal and child healthcare programs.</li>
                                        <li class="donation-details__text">Enhancing preventive care initiatives to promote long-term community well-being.</li>
                                        <li class="donation-details__text">Partnering with more medical professionals and organizations to extend healthcare services.</li>
                                    </ul>
                                    <br>
                                    <h3>Conclusion</h3>
                                    <br>
                                    <p class="donation-details__text">A healthier tomorrow begins with accessible and quality healthcare today. At Global Pathfields, we are committed to improving health services, educating communities, and ensuring medical aid reaches those in need. We invite individuals, organizations, and donors to join us in making healthcare a reality for everyone. Together, we can build a future where good health is within everyone’s reach.</p>
                                </div>
                            </div>
                            <div class="donation-details__donate">
                                <div class="donation-details__donate-shape"
                                    style="background-image:url('{{ asset('assets/images/shapes/donation-details-donate-shape.png') }}')">
                                </div>
                                <div class="donation-details__donate-left">
                                    <ul class="list-unstyled donation-details__donate-list">
                                        <li>
                                            <div class="icon">
                                                <span class="icon-solidarity"></span>
                                            </div>
                                            <div class="text">
                                                <span>Raised</span>
                                                <p>$25,270</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-target-1"></span>
                                            </div>
                                            <div class="text">
                                                <span>Goal</span>
                                                <p>$30,000</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="donation-details__donate-btn">
                                    <a href="{{ route('donateNow') }}" class="thm-btn">Donate now</a>
                                </div>
                            </div>
                            <div class="donation-details__summary">
                                <h3 class="donation-details__summary-title">Summary</h3>
                                <p class="donation-details__summary-text-1"> Global Pathfields is committed to improving healthcare accessibility through free medical camps, mobile health clinics, maternal and child health programs, and health awareness campaigns. The NGO has provided medical aid to 200,000+ individuals, operated 50+ mobile health clinics, and educated 100,000+ people on disease prevention. Moving forward, Global Pathfields aims to expand its initiatives, enhance preventive care, and strengthen partnerships to create a healthier tomorrow for all. Join us in this mission!</p>
                                
                            </div>
                            
                           
                            <div class="comment-form" style="padding-top: 30px;">
                                <h3 class="comment-form__title">Leave a comment</h3>
                                <form action="assets/inc/sendemail.php" class="comment-one__form contact-form-validated"
                                    novalidate="novalidate">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Your name" name="name">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="email" placeholder="Email address" name="email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="comment-form__input-box text-message-box">
                                                <textarea name="message" placeholder="Write a message"></textarea>
                                            </div>
                                            <div class="comment-form__btn-box">
                                                <button type="submit" class="thm-btn comment-form__btn">Submit
                                                    comment</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-xl-4 col-lg-5">
                        <div class="donation-details__sidebar">
                            <div class="donation-details__organizer">
                                <div class="sidebar-shape-1"
                                    style="background-image:url('{{ asset('assets/images/shapes/sidebar-shape-1.png') }}')"></div>
                                <div class="donation-details__organizer-img">
                                    <img src="{{ asset('assets/images/resources/donation-details-organizer-img.jpg') }}" alt="">
                                </div>
                                <div class="donation-details__organizer-content">
                                    <p class="donation-details__organizer-date">Created 20 april, 2024</p>
                                    <p class="donation-details__organizer-title">Organizer:</p>
                                    <p class="donation-details__organizer-name">Global Pathfields</p>
                                    <ul class="list-unstyled donation-details__organizer-list">
                                        <li>
                                            <div class="icon">
                                                <span class="fas fa-tag"></span>
                                            </div>
                                            <div class="text">
                                                <p>Education</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="fas fa-map-marker-alt"></span>
                                            </div>
                                            <div class="text">
                                                <p>Delhi, India</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar__post">
                                <div class="sidebar-shape-1"
                                    style="background-image:url('{{ asset('assets/images/shapes/sidebar-shape-1.png') }}')"></div>
                                <h3 class="sidebar__title">Latest posts</h3>
                                <ul class="sidebar__post-list list-unstyled">
                                    <li>
                                        <div class="sidebar__post-image">
                                            <img src="{{ asset('assets/images/blog/lp-1-1.jpg') }}" alt="">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <h3>
                                                <span class="sidebar__post-content-meta"><i
                                                        class="fas fa-user-circle"></i> By admin</span>
                                                <a href="{{ route('newsDetails') }}">Promoting the rights
                                                    of children</a>
                                            </h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar__post-image">
                                            <img src="{{ asset('assets/images/blog/lp-1-2.jpg') }}" alt="">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <h3>
                                                <span class="sidebar__post-content-meta"><i
                                                        class="fas fa-user-circle"></i> By admin</span>
                                                <a href="{{ route('newsDetails') }}">There are many variations of</a>
                                            </h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar__post-image">
                                            <img src="{{ asset('assets/images/blog/lp-1-3.jpg') }}" alt="">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <h3>
                                                <span class="sidebar__post-content-meta"><i
                                                        class="fas fa-user-circle"></i> By admin</span>
                                                <a href="{{ route('newsDetails') }}">Bring to the table win-win survival</a>
                                            </h3>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="donation-details__sidebar-shaare-cause">
                                <div class="sidebar-shape-1"
                                    style="background-image:url('{{ asset('assets/images/shapes/sidebar-shape-1.png') }}')"></div>
                                <h3 class="donation-details__sidebar-shaare-cause-title">Share</h3>
                                <div class="donation-details__sidebar-shaare-cause-social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>
        <!--Donation Details End-->

@endsection