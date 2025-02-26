@extends('layout.layout1')

@php
    $headTitle='Protecting Our Planet for Future Generations';
    $img='assets/images/backgrounds/donation-detail1.jpg';
    $title='Home';
    $title2 = 'Protecting Our Planet for Future Generations';
    $subTitle = 'Protecting Our Planet for Future Generations';
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
                                        <p>Environment</p>
                                    </div>
                                </div>
                                <div class="donation-details__content">
                                    <h3 class="donation-details__title">Protecting Our Planet for Future Generations</h3>
                                    <br>
                                    <h4>Overview</h4>
                                    <br>
                                    <p class="donation-details__text">Our planet is at a crucial juncture where human activities are significantly impacting the environment. From deforestation to pollution and climate change, the need for sustainable practices has never been greater. At Global Pathfields, we recognize the urgency of protecting the Earth for future generations. Our NGO is committed to environmental sustainability through various initiatives that promote conservation, awareness, and action.</p>
                                    <br>
                                    <h4>Our Mission and Approach</h4>
                                    <br>
                                    <p class="donation-details__text">At Global Pathfields, our mission is to create a sustainable future by fostering environmental responsibility. We focus on community engagement, innovative solutions, and collaboration with key stakeholders to drive meaningful change. Our approach involves: </p>
                                    <br>
                                    <ul>
                                        <li class="donation-details__text"><span>Reforestation and Afforestation:</span> Planting trees to restore ecosystems and combat climate change.</li>
                                        <li class="donation-details__text"><span>Waste Management Initiatives:</span> Encouraging recycling and responsible disposal practices.</li>
                                        <li class="donation-details__text"><span>Water Conservation Projects:</span> Ensuring clean and sustainable water resources.</li>
                                        <li class="donation-details__text"><span>Renewable Energy Advocacy:</span> Promoting solar and wind energy adoption.</li>
                                        <li class="donation-details__text"><span>Environmental Education:</span> Raising awareness about eco-friendly practices.</li>
                                    </ul>
                                    <br>
                                    <h3>Impact of Our Work</h3>
                                    <br>
                                    <h4>Over the years, Global Pathfields has made significant strides in protecting the environment:</h4>
                                    <br>
                                    <ul>
                                        <li class="donation-details__text">Planted over 100,000 trees in deforested areas, enhancing biodiversity.</li>
                                        <li class="donation-details__text">Conducted waste management drives in urban and rural areas, reducing plastic pollution.</li>
                                        <li class="donation-details__text">Implemented water conservation projects benefiting over 10,000 people in water-scarce regions.</li>
                                        <li class="donation-details__text">Partnered with local schools and communities to educate over 50,000 individuals on sustainable living practices.</li>
                                        <li class="donation-details__text">Installed solar panels in underprivileged areas, reducing reliance on fossil fuels.</li>
                                    </ul>
                                    <br>
                                    <h3>The Road Ahead</h3>
                                    <br>
                                    <h4>While we have made remarkable progress, there is still much to be done. Global Pathfields is expanding its reach and impact by:</h4>
                                    <br>
                                    <ul>
                                        <li class="donation-details__text">Developing more eco-friendly projects and engaging with more communities.</li>
                                        <li class="donation-details__text">Strengthening partnerships with businesses and government bodies for sustainable development.</li>
                                        <li class="donation-details__text">Increasing the scope of environmental education to empower the next generation with the knowledge and tools to protect the planet.</li>
                                    </ul>
                                    <br>
                                    <h3>Conclusion</h3>
                                    <br>
                                    <p class="donation-details__text">Protecting our planet is a collective responsibility, and every action counts. Global Pathfields is dedicated to ensuring a greener, healthier Earth for future generations through our environmental initiatives. We invite individuals, organizations, and communities to join us in making a difference. Together, we can build a sustainable world where nature and humanity thrive in harmony.</p>
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
                                <p class="donation-details__summary-text-1"> Global Pathfields is committed to protecting the planet for future generations through reforestation, waste management, water conservation, renewable energy advocacy, and environmental education. The NGO has successfully planted 100,000+ trees, conducted waste reduction programs, provided clean water solutions to thousands, and educated 50,000+ individuals on sustainability. Moving forward, Global Pathfields aims to expand its initiatives, strengthen partnerships, and increase environmental awareness. Join us in our mission to create a sustainable world!</p>                                
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