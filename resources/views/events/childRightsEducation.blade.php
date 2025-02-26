@extends('layout.layout1')

@php
    $headTitle='Child Rights & Education for a Better Future';
    $img='assets/images/backgrounds/page-header-bg.jpg';
    $title='Home';
    $title2 = 'Child Rights & Education for a Better Future';
    $subTitle = 'Child Rights & Education for a Better Future';
@endphp

@section('content')

        <!--Event Details Start-->
        <section class="event-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="event-details__left">
                            <div class="event-details__top">
                                <div class="event-details__date">
                                    <p>23 May, 2025</p>
                                </div>
                                <h3 class="event-details__title">Child Rights & Education for a Better Future</h3>
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
                                <p class="event-details__text-1"> Every child deserves access to quality education and the protection of their fundamental rights. Education is a powerful tool that can break the cycle of poverty and open doors to a brighter future. At Global Pathfields, we are committed to advocating for child rights and providing educational opportunities for underprivileged children. Our upcoming event, Child Rights & Education for a Better Future, aims to create awareness and provide practical solutions to ensure every child receives the education and protection they deserve.</p>
                                <br>
                                <h4>Our Mission and Approach</h4>
                                <p class="event-details__text-1">At Global Pathfields, our mission is to safeguard children's rights and promote accessible education. Our approach includes:</p>
                                <br>
                                <ul class="event-details__text-1">
                                    <li>School Enrollment Drives: Helping out-of-school children get enrolled in educational institutions.</li>
                                    <li>Scholarship Programs: Offering financial aid to students from low-income backgrounds.</li>
                                    <li>Child Rights Awareness Campaigns: Educating communities about children's rights and protection laws.</li>
                                    <li>Teacher Training Programs: Equipping educators with modern teaching methods to improve learning experiences.</li>
                                    <li>Safe Learning Environments: Ensuring schools have proper infrastructure and child-friendly facilities.</li>
                                    
                                </ul>
                                <br>
                                <h3>Event Highlights</h3>
                                <br>
                                <p class="event-details__text-1">Our Child Rights & Education for a Better Future event will feature:</p>
                                <ul class="event-details__text-1">
                                    <li>Workshops and Panel Discussions: Led by child rights activists, educators, and policymakers.</li>
                                    <li>Interactive Learning Sessions: Engaging activities to inspire children and promote education.</li>
                                    <li>Legal Awareness Programs: Informing communities about child protection laws and policies.</li>
                                    <li>Scholarship Announcements: Awarding financial support to deserving students.</li>
                                    <li>Networking and Collaboration: Bringing together organizations and individuals working for children's welfare.</li>
                                </ul>
                                <br>
                                <h3>Impact of Our Work</h3>
                                <br>
                                <p class="event-details__text-1">Through our child rights and education programs, Global Pathfields aims to:</p>
                                <br>
                                <ul class="event-details__text-1">
                                    <li>Enroll over 15,000 children in schools and educational programs.</li>
                                    <li>Provide scholarships to 5,000 students to support their academic journey.</li>
                                    <li>Train 2,000 teachers in innovative teaching methods.</li>
                                    <li>Raise awareness among 100,000+ individuals about child rights and education.</li>
                                    <li>Establish safe and inclusive learning environments for children in need.</li>
                                </ul>
                                <br>
                                <h3>The Road Ahead</h3>
                                <br>
                                <p class="event-details__text-1">Our commitment to child rights and education extends beyond this event. We plan to:</p>
                                <br>
                                <ul class="event-details__text-1">
                                    <li>Expand our school support initiatives to underserved areas.</li>
                                    <li>Strengthen collaborations with government and educational institutions.</li>
                                    <li>Develop digital learning programs to enhance education accessibility.</li>
                                    <li>Advocate for stronger child protection policies at local and national levels.</li>
                                </ul>
                                <br>
                                <h3>Conclusion</h3>
                                <br>
                                <p class="event-details__text-1">At Global Pathfields, we believe that education and child rights are the foundation of a just and prosperous society. Through our event and ongoing initiatives, we strive to empower children with knowledge and security for a better future. We invite educators, policymakers, businesses, and the community to support this cause and be part of the change. Together, we can ensure that every child has the opportunity to learn and thrive.</p>
                                
                                
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
        <!--Event Details End-->

@endsection