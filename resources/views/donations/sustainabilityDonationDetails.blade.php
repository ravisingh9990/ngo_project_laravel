@extends('layout.layout1')

@php
    $headTitle='Building a Sustainable Future';
    $img='assets/images/backgrounds/donation-detail1.jpg';
    $title='Home';
    $title2 = 'Building a Sustainable Future';
    $subTitle = 'Building a Sustainable Future';
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
                                        <p>Sustainability</p>
                                    </div>
                                </div>
                                <div class="donation-details__content">
                                    <h3 class="donation-details__title">Building a Sustainable Future</h3>
                                    <h4>Overview</h4>
                                    <p class="donation-details__text">Sustainability is crucial for ensuring the well-being of future generations. With increasing environmental challenges, economic disparities, and social inequalities, there is a growing need for initiatives that promote long-term sustainability. At Global Pathfields, we are committed to creating a better future by addressing key environmental, economic, and social challenges through innovative solutions and impactful programs.</p>
                                    <br>
                                    <h4>Our Mission and Approach</h4>
                                    <p class="donation-details__text">At Global Pathfields, our mission is to foster sustainability by promoting eco-friendly practices, supporting underprivileged communities, and advocating for responsible resource management. Our approach focuses on: </p>
                                    <br>
                                    <ul>
                                        <li class="donation-details__text"><span>Renewable Energy Initiatives:</span> Encouraging the use of solar, wind, and other sustainable energy sources.</li>
                                        <li class="donation-details__text"><span>Environmental Conservation Projects:</span> Tree planting, waste management, and water conservation efforts.</li>
                                        <li class="donation-details__text"><span>Sustainable Livelihood Programs:</span> Supporting small-scale entrepreneurs and skill development for economic independence.</li>
                                        <li class="donation-details__text"><span>Education and Awareness Campaigns:</span> Informing communities about sustainable practices and climate change.</li>
                                        <li class="donation-details__text"><span>Collaborations and Partnerships: </span> Working with governments, businesses, and local communities to scale our impact.</li>
                                    </ul>
                                    <br>
                                    <h3>Impact of Our Work</h3>
                                    <br>
                                    <h4>Through our initiatives, Global Pathfields has made significant contributions towards sustainability::</h4>
                                    <br>
                                    <ul>
                                        <li class="donation-details__text">Installed solar energy systems in over 100 villages, reducing reliance on fossil fuels.</li>
                                        <li class="donation-details__text">Planted 200,000+ trees to combat deforestation and climate change.</li>
                                        <li class="donation-details__text">Implemented waste management programs in urban and rural areas, reducing pollution.</li>
                                        <li class="donation-details__text">Provided skill training to 5,000+ individuals, promoting self-sufficient livelihoods.</li>
                                        <li class="donation-details__text">Educated over 150,000 people on sustainable living practices and climate resilience.</li>
                                    </ul>
                                    <br>
                                    <h3>The Road Ahead</h3>
                                    <br>
                                    <h4>While we have made remarkable progress, there is still much to be done. Our future initiatives include:</h4>
                                    <br>
                                    <ul>
                                        <li class="donation-details__text">Expanding renewable energy projects to power more communities sustainably.</li>
                                        <li class="donation-details__text">Strengthening environmental conservation efforts with more tree plantations and clean water initiatives.</li>
                                        <li class="donation-details__text">Increasing entrepreneurship and skills programs to uplift underprivileged communities.</li>
                                        <li class="donation-details__text">Enhancing global partnerships to amplify our sustainability efforts worldwide.</li>
                                    </ul>
                                    <br>
                                    <h3>Conclusion</h3>
                                    <br>
                                    <p class="donation-details__text">A sustainable future is not just a vision—it is a necessity. At Global Pathfields, we are dedicated to making this future a reality by promoting green energy, conservation, and community development. We invite individuals, organizations, and policymakers to join us in our mission. Together, we can build a world that thrives on sustainability and inclusivity.</p>
                                    <p class="donation-details__text"></p>
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
                                <p class="donation-details__summary-text-1"> Global Pathfields is dedicated to building a sustainable future through renewable energy, environmental conservation, and community empowerment. The NGO has installed solar systems in 100+ villages, planted 200,000+ trees, trained 5,000+ individuals in sustainable livelihoods, and educated 150,000+ people on eco-friendly practices. Moving forward, Global Pathfields aims to expand its green initiatives and strengthen global partnerships for a more sustainable world. Join us in creating a better future!</p>
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