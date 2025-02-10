@extends('layout.layout1')

@php
    $headTitle='News Sidebar';
    $img='assets/images/backgrounds/page-header-bg.jpg';
    $title='Home';
    $title2 = 'News sidebar';
    $subTitle = 'News sidebar';
@endphp

@section('content')

    <!--News Sidebar Start-->
    <section class="news-sidebar">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="blog-sidebar__left">
                        <div class="news-sidebar__content">
                            <div class="news-sidebar__single">
                                <div class="news-sidebar__img">
                                    <img src="{{ asset('assets/images/blog/news-sidebar-img-1.jpg') }}" alt="">
                                    <div class="news-sidebar__date">
                                        <p>23 May, 2022</p>
                                    </div>
                                </div>
                                <div class="news-sidebar__content-box">
                                    <ul class="list-unstyled news-sidebar__meta">
                                        <li><a href="{{ route('newsDetails') }}"><i class="far fa-user-circle"></i> Admin</a>
                                        </li>
                                        <li><a href="{{ route('newsDetails') }}"><i class="fas fa-comments"></i> 2
                                                Comments</a>
                                        </li>
                                    </ul>
                                    <h3 class="news-sidebar__title">
                                        <a href="{{ route('newsDetails') }}">How does the malnutrition affect children?</a>
                                    </h3>
                                    <p class="news-sidebar__text">There are many variations of passages of Lorem
                                        Ipsum available, but the majority have suffered alteration in some form, by
                                        injected humour, or randomised words which don't look even slightly
                                        believable. If you are going to use a passage.</p>
                                    <div class="news-sidebar__bottom">
                                        <a href="{{ route('newsDetails') }}" class="news-sidebar__arrow"><span class="icon-right-arrow"></span></a>
                                        <a href="{{ route('newsDetails') }}" class="news-sidebar__read-more">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="news-sidebar__single">
                                <div class="news-sidebar__img">
                                    <img src="{{ asset('assets/images/blog/news-sidebar-img-2.jpg') }}" alt="">
                                    <div class="news-sidebar__date">
                                        <p>23 May, 2022</p>
                                    </div>
                                </div>
                                <div class="news-sidebar__content-box">
                                    <ul class="list-unstyled news-sidebar__meta">
                                        <li><a href="{{ route('newsDetails') }}"><i class="far fa-user-circle"></i> Admin</a>
                                        </li>
                                        <li><a href="{{ route('newsDetails') }}"><i class="fas fa-comments"></i> 2
                                                Comments</a>
                                        </li>
                                    </ul>
                                    <h3 class="news-sidebar__title">
                                        <a href="{{ route('newsDetails') }}">The point of using Lorem Ipsum</a>
                                    </h3>
                                    <p class="news-sidebar__text">There are many variations of passages of Lorem
                                        Ipsum available, but the majority have suffered alteration in some form, by
                                        injected humour, or randomised words which don't look even slightly
                                        believable. If you are going to use a passage.</p>
                                    <div class="news-sidebar__bottom">
                                        <a href="{{ route('newsDetails') }}" class="news-sidebar__arrow"><span class="icon-right-arrow"></span></a>
                                        <a href="{{ route('newsDetails') }}" class="news-sidebar__read-more">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="news-sidebar__single">
                                <div class="news-sidebar__img">
                                    <img src="{{ asset('assets/images/blog/news-sidebar-img-3.jpg') }}" alt="">
                                    <div class="news-sidebar__date">
                                        <p>23 May, 2022</p>
                                    </div>
                                </div>
                                <div class="news-sidebar__content-box">
                                    <ul class="list-unstyled news-sidebar__meta">
                                        <li><a href="{{ route('newsDetails') }}"><i class="far fa-user-circle"></i> Admin</a>
                                        </li>
                                        <li><a href="{{ route('newsDetails') }}"><i class="fas fa-comments"></i> 2
                                                Comments</a>
                                        </li>
                                    </ul>
                                    <h3 class="news-sidebar__title">
                                        <a href="{{ route('newsDetails') }}">It is a long established fact that a reader</a>
                                    </h3>
                                    <p class="news-sidebar__text">There are many variations of passages of Lorem
                                        Ipsum available, but the majority have suffered alteration in some form, by
                                        injected humour, or randomised words which don't look even slightly
                                        believable. If you are going to use a passage.</p>
                                    <div class="news-sidebar__bottom">
                                        <a href="{{ route('newsDetails') }}" class="news-sidebar__arrow"><span class="icon-right-arrow"></span></a>
                                        <a href="{{ route('newsDetails') }}" class="news-sidebar__read-more">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="news-sidebar__bottom-box">
                            <div class="news-sidebar__shape-1" style="background-image:url('{{ asset('assets/images/shapes/news-sidebar-shape-1.png') }}')"></div>
                            <div class="news-sidebar__bottom-box-icon">
                                <img src="{{ asset('assets/images/icon/news-sidebar-bottom-box-icon.png') }}" alt="">
                            </div>
                            <p class="news-sidebar__bottom-box-text">There are many variations of passages of
                                available but alteration in some by inject humour or random words. There are many
                                variations of passages of Lorem Ipsum available, but the majority have suffered
                                alteration.</p>
                        </div>
                        <div class="news-sidebar__delivering-services">
                            <div class="news-sidebar__shape-1" style="background-image:url('{{ asset('assets/images/shapes/news-sidebar-shape-1.png') }}')"></div>
                            <div class="news-sidebar__delivering-services-icon">
                                <a href="{{ route('newsDetails') }}"><img src="{{ asset('assets/images/icon/news-sidebar__delivering-services-icon.png') }}" alt=""></a>
                            </div>
                            <h3 class="news-sidebar__delivering-services-title"><a href="{{ route('newsDetails') }}">Educate
                                    children in rural areas our priority</a></h3>
                        </div>
                        <div class="news-sidebar__load-more">
                            <a href="{{ route('newsDetails') }}" class="thm-btn news-sidebar__load-more-btn">Load more
                                posts</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="sidebar">
                        <div class="sidebar__single sidebar__search">
                            <form action="#" class="sidebar__search-form">
                                <input type="search" placeholder="Search here">
                                <button type="submit"><i class="icon-magnifying-glass"></i></button>
                            </form>
                        </div>
                        <div class="sidebar__single sidebar__post">
                            <div class="sidebar-shape-1" style="background-image:url('{{ asset('assets/images/shapes/sidebar-shape-1.png') }}')"></div>
                            <h3 class="sidebar__title">Latest posts</h3>
                            <ul class="sidebar__post-list list-unstyled">
                                <li>
                                    <div class="sidebar__post-image">
                                        <img src="{{ asset('assets/images/blog/lp-1-1.jpg') }}" alt="">
                                    </div>
                                    <div class="sidebar__post-content">
                                        <h3>
                                            <span class="sidebar__post-content-meta"><i class="fas fa-user-circle"></i> By admin</span>
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
                                            <span class="sidebar__post-content-meta"><i class="fas fa-user-circle"></i> By admin</span>
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
                                            <span class="sidebar__post-content-meta"><i class="fas fa-user-circle"></i> By admin</span>
                                            <a href="{{ route('newsDetails') }}">Bring to the table win-win survival</a>
                                        </h3>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="sidebar__single sidebar__category">
                            <div class="sidebar-shape-1" style="background-image:url('{{ asset('assets/images/shapes/sidebar-shape-1.png') }}')"></div>
                            <h3 class="sidebar__title">Categories</h3>
                            <ul class="sidebar__category-list list-unstyled">
                                <li><a href="{{ route('newsDetails') }}">Donations <span class="icon-right-arrow"></span></a>
                                </li>
                                <li class="active"><a href="{{ route('newsDetails') }}">Charity <span class="icon-right-arrow"></span></a></li>
                                <li><a href="{{ route('newsDetails') }}">Fundraising <span class="icon-right-arrow"></span></a>
                                </li>
                                <li><a href="{{ route('newsDetails') }}">Food & Water <span class="icon-right-arrow"></span></a></li>
                                <li><a href="{{ route('newsDetails') }}">Kids Education <span class="icon-right-arrow"></span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="sidebar__single sidebar__tags">
                            <div class="sidebar-shape-1" style="background-image:url('{{ asset('assets/images/shapes/sidebar-shape-1.png') }}')"></div>
                            <h3 class="sidebar__title">Tags</h3>
                            <div class="sidebar__tags-list">
                                <a href="#">fundraising</a>
                                <a href="#">charity</a>
                                <a href="#">donation</a>
                                <a href="#">water</a>
                                <a href="#">kids</a>
                                <a href="#">Education</a>
                            </div>
                        </div>
                        <div class="sidebar__single sidebar__comments">
                            <div class="sidebar-shape-1" style="background-image:url('{{ asset('assets/images/shapes/sidebar-shape-1.png') }}')"></div>
                            <h3 class="sidebar__title">Comments</h3>
                            <ul class="sidebar__comments-list list-unstyled">
                                <li>
                                    <div class="sidebar__comments-icon">
                                        <i class="fas fa-comment"></i>
                                    </div>
                                    <div class="sidebar__comments-text-box">
                                        <p>A Wordpress Commenter <br> on Launch New Mobile App</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar__comments-icon">
                                        <i class="fas fa-comment"></i>
                                    </div>
                                    <div class="sidebar__comments-text-box">
                                        <p>John Doe on Template:</p>
                                        <h5>Comments</h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar__comments-icon">
                                        <i class="fas fa-comment"></i>
                                    </div>
                                    <div class="sidebar__comments-text-box">
                                        <p>A Wordpress Commenter <br> on Launch New Mobile App</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar__comments-icon">
                                        <i class="fas fa-comment"></i>
                                    </div>
                                    <div class="sidebar__comments-text-box">
                                        <p>John Doe on Template:</p>
                                        <h5>Comments</h5>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--News Sidebar End-->

@endsection