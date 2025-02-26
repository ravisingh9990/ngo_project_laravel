@extends('layout.layout1')

@php
    $headTitle='Empowering Youth Through Skills Development';
    $img='assets/images/backgrounds/page-header-bg.jpg';
    $title='Home';
    $title2 = 'Empowering Youth Through Skills Development';
    $subTitle = 'Empowering Youth Through Skills Development';
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
                                <h3 class="event-details__title">Empowering Youth Through Skills Development</h3>
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
                                <p class="event-details__text-1"> Youth empowerment is essential for building a strong and prosperous society. Equipping young individuals with relevant skills not only enhances their employability but also fosters innovation and self-sufficiency. At Global Pathfields, we are dedicated to transforming lives through skills development programs that provide opportunities for learning, growth, and career advancement. Our upcoming event, Empowering Youth Through Skills Development, is designed to equip young people with the knowledge and expertise they need to succeed in various fields.</p>
                                <br>
                                <h4>Our Mission and Approach</h4>
                                <p class="event-details__text-1">At Global Pathfields, our mission is to bridge the skills gap and prepare youth for a sustainable future. Our approach includes:</p>
                                <br>
                                <ul class="event-details__text-1">
                                    <li>Technical and Vocational Training: Providing hands-on training in industries such as technology, manufacturing, and healthcare.</li>
                                    <li>Entrepreneurship Development: Encouraging young individuals to start and manage their own businesses.</li>
                                    <li>Digital Literacy Programs: Enhancing proficiency in digital tools and online platforms to improve job readiness.</li>
                                    <li>Mentorship and Career Guidance: Connecting participants with industry professionals for coaching and networking.</li>
                                    <li>Soft Skills Training: Building confidence, communication, and leadership abilities to enhance employability.</li>
                                    
                                </ul>
                                <br>
                                <h3>Event Highlights</h3>
                                <br>
                                <p class="event-details__text-1">Our Empowering Youth Through Skills Development event will feature:</p>
                                <ul>
                                    <li>Workshops and Training Sessions: Led by industry experts, covering various technical and soft skills.</li>
                                    <li>Live Demonstrations: Showcasing real-world applications of skills in different industries.</li>
                                    <li>Panel Discussions: Engaging talks with successful professionals and entrepreneurs.</li>
                                    <li>Networking Opportunities: Connecting participants with potential employers and mentors.</li>
                                    <li>Certification Program: Providing recognized certificates to participants upon course completion.</li>
                                </ul>
                                <br>
                                <h3>Impact of Our Work</h3>
                                <br>
                                <p class="event-details__text-1">Through our skills development programs, Global Pathfields aims to:</p>
                                <br>
                                <ul class="event-details__text-1">
                                    <li>Train over 10,000 youth in technical and vocational skills.</li>
                                    <li>Support 1,500+ young entrepreneurs in launching their businesses.</li>
                                    <li>Improve job placement rates by 40% for trained participants.</li>
                                    <li>Bridge the digital divide by educating 5,000 individuals in digital literacy.</li>
                                    <li>Empower marginalized communities by providing skills and employment opportunities.</li>
                                </ul>
                                <br>
                                <h3>The Road Ahead</h3>
                                <br>
                                <p class="event-details__text-1">Our commitment to youth empowerment extends beyond this event. We plan to:</p>
                                <br>
                                <ul class="event-details__text-1">
                                    <li>Expand our training centers to reach more young individuals.</li>
                                    <li>Collaborate with corporate partners and government bodies for greater impact.</li>
                                    <li>Launch an online learning platform to make training more accessible.</li>
                                    <li>Strengthen mentorship programs to provide long-term career support.</li>
                                </ul>
                                <br>
                                <h3>Conclusion</h3>
                                <br>
                                <p class="event-details__text-1">At Global Pathfields, we believe that empowering youth with skills is the key to a brighter future. Our event and ongoing initiatives aim to create a generation of skilled, confident, and self-sufficient individuals. We invite stakeholders, educators, businesses, and the community to support this initiative and be a part of the change. Together, we can build a skilled workforce and a stronger society.</p>
                                
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
        <!--Event Details End-->

@endsection