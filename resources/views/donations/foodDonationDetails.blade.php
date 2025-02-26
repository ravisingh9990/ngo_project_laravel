@extends('layout.layout1')

@php
    $headTitle='Ending Hunger, One Meal at a Time';
    $img='assets/images/backgrounds/donation-detail1.jpg';
    $title='Home';
    $title2 = 'Ending Hunger, One Meal at a Time';
    $subTitle = 'Ending Hunger, One Meal at a Time';
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
                                        <p>Food</p>
                                    </div>
                                </div>
                                <div class="donation-details__content">
                                    <h3 class="donation-details__title">Ending Hunger, One Meal at a Time</h3>
                                    <h4>Overview</h4>
                                    <br>
                                    <p class="donation-details__text">Hunger remains one of the most pressing global challenges, affecting millions of people every day. Despite advancements in agriculture and food production, many communities still struggle to access nutritious meals. At Global Pathfields, we are committed to eradicating hunger by providing sustainable food solutions to those in need. Through dedicated programs and community-driven initiatives, we aim to ensure that no one goes to bed hungry. </p>
                                    <br>
                                    <h4>Our Mission and Approach</h4>
                                    <br>
                                    <p class="donation-details__text">At Global Pathfields, our mission is to combat hunger through food distribution, sustainable agricultural programs, and nutrition education. We believe that food security is a fundamental human right, and our approach is centered around:</p>
                                    <br>
                                    <ul>
                                        <li>Food Distribution Programs: Providing meals to underprivileged individuals and families.</li>
                                        <li>Community Kitchens: Establishing meal centers where people can access fresh and nutritious food.</li>
                                        <li>Sustainable Farming Initiatives: Supporting local farmers and promoting self-sufficiency through organic farming.</li>
                                        <li>Nutrition Awareness Campaigns: Educating communities on the importance of balanced diets and healthy eating habits.</li>
                                        <li>Partnerships and Collaborations: Working with local organizations, businesses, and volunteers to maximize our reach and impact.</li>
                                    </ul>
                                    <br>
                                    <h4>Impact of Our Work</h4>
                                    <br>
                                    <p class="donation-details__text">Through our relentless efforts, Global Pathfields has significantly contributed to alleviating hunger:</p>
                                    <br>
                                    <ul>
                                        <li>Served over 500,000 meals to individuals in need.</li>
                                        <li>Established 50+ community kitchens, providing consistent access to food.</li>
                                        <li>Supported hundreds of farmers in implementing sustainable farming techniques.</li>
                                        <li>Conducted nutrition workshops reaching over 100,000 people to promote healthier eating habits.</li>
                                        <li>Partnered with multiple organizations to expand food access and reduce wastage.</li>
                                    </ul>
                                    <br>
                                    <h4>The Road Ahead</h4>
                                    <br>
                                    <p class="donation-details__text">While our efforts have made a considerable impact, our mission is far from over. We are dedicated to:</p>
                                    <br>
                                    <ul>
                                        <li>Expanding our meal distribution programs to reach more vulnerable populations.</li>
                                        <li>Strengthening sustainable farming initiatives to improve long-term food security.</li>
                                        <li>Enhancing our nutrition education efforts to encourage better dietary habits.</li>
                                        <li>Building stronger networks with businesses and individuals to create a larger support system.</li>
                                    </ul>
                                    <br>
                                    <h4>Conclusion</h4>
                                    <br>
                                    <p class="donation-details__text">Ending hunger is a collective responsibility, and every effort counts. At Global Pathfields, we remain steadfast in our commitment to providing meals, supporting sustainable food practices, and educating communities. We invite individuals, organizations, and donors to join us in our mission. Together, we can create a world where everyone has access to nutritious food, one meal at a time.</p>
                                    <br>
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
                                <p class="donation-details__summary-text-1"> Global Pathfields is dedicated to eradicating hunger through meal distribution, community kitchens, sustainable farming, and nutrition education. The NGO has served over 500,000 meals, established 50+ community kitchens, supported local farmers, and educated 100,000+ individuals on healthy eating. Moving forward, Global Pathfields aims to expand its reach, strengthen sustainable food initiatives, and enhance nutritional awareness. Join us in the fight to end hunger, one meal at a time!</p> 
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