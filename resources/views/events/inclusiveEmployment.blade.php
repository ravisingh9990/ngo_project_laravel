@extends('layout.layout1')

@php
    $headTitle='Inclusive Employment for Economic Growth';
    $img='assets/images/backgrounds/page-header-bg.jpg';
    $title='Home';
    $title2 = 'Inclusive Employment for Economic Growth';
    $subTitle = 'Inclusive Employment for Economic Growth';
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
                                <h3 class="event-details__title">Inclusive Employment for Economic Growth</h3>
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
                                <p class="event-details__text-1">Inclusive employment is key to fostering economic growth and social equity. Providing equal job opportunities for marginalized communities not only empowers individuals but also strengthens economies. At Global Pathfields, we are dedicated to promoting workforce inclusivity by creating employment opportunities and advocating for fair labor practices. Our upcoming event, Inclusive Employment for Economic Growth, aims to highlight the importance of diversity in the workforce and implement practical solutions to improve job accessibility for all.</p>
                                <br>
                                <h4>Our Mission and Approach</h4>
                                <p class="event-details__text-1">At Global Pathfields, our mission is to create an inclusive job market where everyone, regardless of background or ability, has access to meaningful employment. Our approach includes:</p>
                                <br>
                                <ul class="event-details__text-1">
                                    <li>Job Placement Programs: Connecting job seekers with inclusive employers.</li>
                                    <li>Vocational Training and Skill Development: Equipping marginalized individuals with industry-relevant skills.</li>
                                    <li>Entrepreneurship Support: Assisting underprivileged communities in launching and sustaining businesses.</li>
                                    <li>Workplace Inclusivity Awareness: Educating employers on the benefits of diverse workforces.</li>
                                    <li>Policy Advocacy: Working with governments and organizations to promote inclusive labor laws.</li>
                                    
                                </ul>
                                <br>
                                <h3>Event Highlights</h3>
                                <br>
                                <p class="event-details__text-1">Our Inclusive Employment for Economic Growth event will feature:</p>
                                <ul class="event-details__text-1">
                                    <li>Panel Discussions: Conversations with business leaders, policymakers, and social advocates on workforce diversity.</li>
                                    <li>Skill Development Workshops: Hands-on training to enhance employability skills.</li>
                                    <li>Job Fair: Connecting job seekers with companies committed to inclusive hiring.</li>
                                    <li>Success Stories and Case Studies: Showcasing individuals who have benefited from inclusive employment programs.</li>
                                    <li>Networking and Collaboration: Building partnerships between businesses, NGOs, and government agencies.</li>
                                </ul>
                                <br>
                                <h3>Impact of Our Work</h3>
                                <br>
                                <p class="event-details__text-1">Through our employment initiatives, Global Pathfields aims to:</p>
                                <br>
                                <ul class="event-details__text-1">
                                    <li>Facilitate job placements for 10,000 individuals from marginalized communities.</li>
                                    <li>Provide vocational training to 5,000 people to enhance their career prospects.</li>
                                    <li>Support 1,500 entrepreneurs in starting and sustaining small businesses.</li>
                                    <li>Educate 50,000 employers on the benefits and implementation of inclusive hiring practices.</li>
                                    <li>Advocate for stronger labor policies promoting fair wages and equal opportunities.</li>
                                </ul>
                                <br>
                                <h3>The Road Ahead</h3>
                                <br>
                                <p class="event-details__text-1">Our commitment to inclusive employment goes beyond this event. We plan to:</p>
                                <br>
                                <ul class="event-details__text-1">
                                    <li>Expand our vocational training centers to reach more communities.</li>
                                    <li>Strengthen partnerships with businesses to increase inclusive hiring.</li>
                                    <li>Launch an online job portal to connect employers with diverse job seekers.</li>
                                    <li>Continue policy advocacy to ensure long-term labor market inclusivity.</li>
                                </ul>
                                <br>
                                <h3>Conclusion</h3>
                                <br>
                                <p class="event-details__text-1">At Global Pathfields, we believe that economic growth should be inclusive and accessible to all. Through our event and ongoing initiatives, we strive to create equal employment opportunities that empower individuals and drive sustainable development. We invite businesses, policymakers, educators, and communities to support our mission and be part of the change. Together, we can build a more inclusive and prosperous future.</p>
                                
                         
                                
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