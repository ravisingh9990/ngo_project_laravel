@extends('layout.layout1')

@php
    $headTitle='Sustainable Living & Environmental Awareness';
    $img='assets/images/backgrounds/about-header-bg.jpg';
    $title='Home';
    $title2 = 'Sustainable Living & Environmental Awareness';
    $subTitle = 'Sustainable Living & Environmental Awareness';
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
                                    <p>23 October, 2025</p>
                                </div>
                                <h3 class="event-details__title">Sustainable Living & Environmental Awareness</h3>
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
                                <p class="event-details__text-1">Sustainable living and environmental awareness are crucial for preserving our planet for future generations. By adopting eco-friendly practices and promoting conservation efforts, we can combat climate change and protect natural resources. At Global Pathfields, we are dedicated to educating communities on sustainable practices and implementing initiatives that foster a greener world. Our upcoming event, Sustainable Living & Environmental Awareness, aims to inspire individuals to take action toward environmental sustainability.</p>
                                <br>
                                <h4>Our Mission and Approach</h4>
                                <p class="event-details__text-1">At Global Pathfields, our mission is to promote a culture of sustainability and environmental responsibility. Our approach includes:</p>
                                <br>
                                <ul class="event-details__text-1">
                                    <li>Eco-Friendly Workshops: Educating communities on reducing waste, energy conservation, and sustainable consumption.</li>
                                    <li>Tree Planting Drives: Encouraging afforestation efforts to improve air quality and combat deforestation.</li>
                                    <li>Recycling & Waste Management Programs: Teaching proper waste segregation and promoting the use of recyclable materials.</li>
                                    <li>Clean-Up Campaigns: Organizing community clean-up drives to reduce pollution in urban and rural areas.</li>
                                    <li>Policy Advocacy: Collaborating with policymakers to enforce environmental protection laws and green initiatives.</li>
                                    
                                </ul>
                                <br>
                                <h3>Event Highlights</h3>
                                <br>
                                <p class="event-details__text-1">Our Sustainable Living & Environmental Awareness event will feature:</p>
                                <ul class="event-details__text-1">
                                    <li>Expert-Led Discussions: Engaging talks on climate change, conservation, and sustainability.</li>
                                    <li>Hands-On Sustainability Workshops: Interactive sessions on composting, water conservation, and eco-friendly habits.</li>
                                    <li>Green Marketplace: Showcasing sustainable products and innovations by eco-conscious entrepreneurs.</li>
                                    <li>Tree Plantation Ceremony: A mass tree-planting initiative to restore green spaces.</li>
                                    <li>Community Engagement Activities: Encouraging collective action through environmental pledges and sustainable lifestyle commitments.</li>
                                </ul>
                                <br>
                                <h3>Impact of Our Work</h3>
                                <br>
                                <p class="event-details__text-1">Through our sustainability initiatives, Global Pathfields aims to:</p>
                                <br>
                                <ul class="event-details__text-1">
                                    <li>Educate 100,000 individuals on sustainable living practices.</li>
                                    <li>Plant 50,000 trees to combat deforestation and improve air quality.</li>
                                    <li>Reduce plastic waste by promoting zero-waste initiatives and recycling programs.</li>
                                    <li>Empower local communities to adopt eco-friendly habits through awareness campaigns.</li>
                                    <li>Advocate for stronger environmental policies to protect natural resources.</li>
                                </ul>
                                <br>
                                <h3>The Road Ahead</h3>
                                <br>
                                <p class="event-details__text-1">Our commitment to environmental awareness extends beyond this event. We plan to:</p>
                                <br>
                                <ul class="event-details__text-1">
                                    <li>Expand green initiatives to more communities and schools.</li>
                                    <li>Strengthen partnerships with eco-friendly organizations for greater impact.</li>
                                    <li>Launch a digital sustainability platform to educate and connect environmental advocates.</li>
                                    <li>Advocate for stronger governmental policies to ensure long-term environmental sustainability.</li>
                                </ul>
                                <br>
                                <h3>Conclusion</h3>
                                <br>
                                <p class="event-details__text-1">At Global Pathfields, we believe that sustainable living and environmental awareness are essential for a better future. Through our event and ongoing initiatives, we strive to empower individuals and communities to adopt eco-friendly practices. We invite environmentalists, policymakers, businesses, and the community to support our mission and be part of the change. Together, we can create a healthier and more sustainable planet for future generations.</p>
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