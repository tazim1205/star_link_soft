@extends('frontend.layouts.master')

@section('content')
    <!-- Navbar Start -->

        @include('frontend.layouts.navbar')

    <!-- Navbar End -->

    <!-- Main Content Start -->
    
    <section id="ts-features" class="ts-features">
        <div class="container">
            <div class="row">
                <div class="col-5">
                    <div class="slider-content text-left">
                        <div class="container h-100">
                            <div class="row align-items-center h-100">
                                <div class="col-md-12">
                                    <h3 class="slide-title" data-animation-in="slideInRight">From Concept To Reality: </h3>
                                    <h3 class="slide-sub-title" data-animation-in="slideInLeft">We Build Exceptional Software</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-7">
                    <img class="w-100" src="{{ asset('frontend') }}/images/slider-main/banner1.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="call-to-action-box no-padding">
        <div class="container">
            <div class="action-style-box">
                <div class="row align-items-center">
                    <div class="col-md-8 text-center text-md-left">
                        <div class="call-to-action-text">
                            <h3 class="action-title">There is always one more bug to fix.  – Ellen Ullman</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="ts-features" class="ts-features">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="ts-intro">
                        <h2 class="into-title">About Us</h2>
                        <h3 class="into-sub-title">We deliver landmark projects</h3>
                        <p>We are rethoric question ran over her cheek When she reached the first hills of the Italic Mountains,
                        she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village
                        and the subline of her own road, the Line Lane.</p>
                    </div><!-- Intro box end -->
                    <div class="gap-20"></div>
                    
                </div>
                <div class="col-lg-6 mt-4 mt-lg-0">
                    <div class="accordion accordion-group" id="our-values-accordion">
                        <div class="card">
                            <div class="card-header p-0 bg-transparent" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Safety
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#our-values-accordion">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidata
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header p-0 bg-transparent" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Customer Service
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#our-values-accordion">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidata
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header p-0 bg-transparent" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Integrity
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#our-values-accordion">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidata
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Accordion end -->
                </div>
            </div><!-- Row end -->
        </div><!-- Container end -->
    </section><!-- Feature are end -->

    <!-- <section id="facts" class="facts-area dark-bg">
        <div class="container">
            <div class="facts-wrapper">
                <div class="row">
                    <div class="col-md-3 col-sm-6 ts-facts">
                        <div class="ts-facts-img">
                            <img loading="lazy" src="{{ asset('frontend') }}/images/services/fact1.png" alt="facts-img">
                        </div>
                        <div class="ts-facts-content">
                            <h2 class="ts-facts-num"><span class="counterUp" data-count="1789">0</span></h2>
                            <h3 class="ts-facts-title">Total Projects</h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-sm-0">
                        <div class="ts-facts-img">
                            <img loading="lazy" src="{{ asset('frontend') }}/images/icon-image/fact2.png" alt="facts-img">
                        </div>
                        <div class="ts-facts-content">
                            <h2 class="ts-facts-num"><span class="counterUp" data-count="647">0</span></h2>
                            <h3 class="ts-facts-title">Staff Members</h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
                        <div class="ts-facts-img">
                            <img loading="lazy" src="{{ asset('frontend') }}/images/icon-image/fact3.png" alt="facts-img">
                        </div>
                        <div class="ts-facts-content">
                            <h2 class="ts-facts-num"><span class="counterUp" data-count="4000">0</span></h2>
                            <h3 class="ts-facts-title">Hours of Work</h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
                        <div class="ts-facts-img">
                            <img loading="lazy" src="{{ asset('frontend') }}/images/icon-image/fact4.png" alt="facts-img">
                        </div>
                        <div class="ts-facts-content">
                            <h2 class="ts-facts-num"><span class="counterUp" data-count="44">0</span></h2>
                            <h3 class="ts-facts-title">Countries Experience</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Facts end -->

    <section id="ts-service-area" class="ts-service-area pb-0">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <h2 class="section-title">We Are Specialists In</h2>
                    <h3 class="section-sub-title">Our Services</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="ts-service-box d-flex">
                        <div class="ts-service-box-img">
                            <img loading="lazy" src="{{ asset('frontend') }}/images/services/service1.jpg" alt="service-icon">
                        </div>
                        <div class="ts-service-box-info">
                            <h3 class="service-box-title"><a href="#">E-Commerce Website</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
                        </div>
                    </div><!-- Service 1 end -->
                    <div class="ts-service-box d-flex">
                        <div class="ts-service-box-img">
                            <img loading="lazy" src="{{ asset('frontend') }}/images/services/service2.png" alt="service-icon">
                        </div>
                        <div class="ts-service-box-info">
                            <h3 class="service-box-title"><a href="#">Online News Portal</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
                        </div>
                    </div><!-- Service 2 end -->
                    <div class="ts-service-box d-flex">
                        <div class="ts-service-box-img">
                            <img loading="lazy" src="{{ asset('frontend') }}/images/services/service3.png"  alt="service-icon">
                        </div>
                        <div class="ts-service-box-info">
                            <h3 class="service-box-title"><a href="#">Inventory Software</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
                        </div>
                    </div><!-- Service 3 end -->
                    <div class="ts-service-box d-flex">
                        <div class="ts-service-box-img">
                            <img loading="lazy" src="{{ asset('frontend') }}/images/services/service4.png"  alt="service-icon">
                        </div>
                        <div class="ts-service-box-info">
                            <h3 class="service-box-title"><a href="#">Education Management</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
                        </div>
                    </div><!-- Service 4 end -->
                    <div class="ts-service-box d-flex">
                        <div class="ts-service-box-img">
                            <img loading="lazy" src="{{ asset('frontend') }}/images/services/service5.png"  alt="service-icon">
                        </div>
                        <div class="ts-service-box-info">
                            <h3 class="service-box-title"><a href="#">Android Apps Development</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
                        </div>
                    </div><!-- Service 5 end -->
                </div>
                <!-- <div class="col-lg-4 text-center">
                    <img loading="lazy" class="img-fluid" src="{{ asset('frontend') }}/images/services/service-center.jpg" alt="service-avater-image">
                </div> -->
                <div class="col-lg-6 mt-5 mt-lg-0 mb-4 mb-lg-0">
                    <div class="ts-service-box d-flex">
                        <div class="ts-service-box-img">
                            <img loading="lazy" src="{{ asset('frontend') }}/images/services/service6.png" alt="service-icon">
                        </div>
                        <div class="ts-service-box-info">
                            <h3 class="service-box-title"><a href="#">POS System Software</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
                        </div>
                    </div><!-- Service 6 end -->
                    <div class="ts-service-box d-flex">
                        <div class="ts-service-box-img">
                            <img loading="lazy" src="{{ asset('frontend') }}/images/services/service7.png" alt="service-icon">
                        </div>
                        <div class="ts-service-box-info">
                            <h3 class="service-box-title"><a href="#">ERP Software</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
                        </div>
                    </div><!-- Service 7 end -->
                    <div class="ts-service-box d-flex">
                        <div class="ts-service-box-img">
                            <img loading="lazy" src="{{ asset('frontend') }}/images/services/service8.png" alt="service-icon">
                        </div>
                        <div class="ts-service-box-info">
                            <h3 class="service-box-title"><a href="#">Pharmacy Software</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
                        </div>
                    </div><!-- Service 8 end -->
                    <div class="ts-service-box d-flex">
                        <div class="ts-service-box-img">
                            <img loading="lazy" src="{{ asset('frontend') }}/images/services/service9.png" alt="service-icon">
                        </div>
                        <div class="ts-service-box-info">
                            <h3 class="service-box-title"><a href="#">Multipurpose Software</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
                        </div>
                    </div><!-- Service 9 end -->
                    <div class="ts-service-box d-flex">
                        <div class="ts-service-box-img">
                            <img loading="lazy" src="{{ asset('frontend') }}/images/services/service10.png" alt="service-icon">
                        </div>
                        <div class="ts-service-box-info">
                            <h3 class="service-box-title"><a href="#">courier Management</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
                        </div>
                    </div><!-- Service 10 end -->
                </div>
            </div>
        </div>
    </section><!-- Service end -->

    <section id="project-area" class="project-area solid-bg">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12">
                    <h2 class="section-title">Work of Excellence</h2>
                    <h3 class="section-sub-title">Recent Projects</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <!-- <div class="shuffle-btn-group">
                        <label class="active" for="all">
                            <input type="radio" name="shuffle-filter" id="all" value="all" checked="checked">Show All
                        </label>
                        <label for="commercial">
                            <input type="radio" name="shuffle-filter" id="commercial" value="commercial">Commercial
                        </label>
                        <label for="education">
                            <input type="radio" name="shuffle-filter" id="education" value="education">Education
                        </label>
                        <label for="government">
                            <input type="radio" name="shuffle-filter" id="government" value="government">Government
                        </label>
                        <label for="infrastructure">
                            <input type="radio" name="shuffle-filter" id="infrastructure" value="infrastructure">Infrastructure
                        </label>
                        <label for="residential">
                            <input type="radio" name="shuffle-filter" id="residential" value="residential">Residential
                        </label>
                        <label for="healthcare">
                            <input type="radio" name="shuffle-filter" id="healthcare" value="healthcare">Healthcare
                        </label>
                    </div> -->
                    <div class="row shuffle-wrapper">
                        <div class="col-1 shuffle-sizer"></div>
                            <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;government&quot;,&quot;healthcare&quot;]">
                                <div class="project-img-container">
                                    <a class="gallery-popup" href="{{ asset('frontend') }}/images/projects/project1.jpg" aria-label="project-img">
                                        <img class="img-fluid" src="{{ asset('frontend') }}/images/projects/project1.jpg" alt="project-img">
                                        <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                                    </a>
                                    <div class="project-item-info">
                                        <div class="project-item-info-content">
                                            <h3 class="project-item-title">
                                                <a href="projects-single.html">Capital Teltway Building</a>
                                            </h3>
                                            <p class="project-cat">Commercial, Interiors</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;healthcare&quot;]">
                            <div class="project-img-container">
                                <a class="gallery-popup" href="{{ asset('frontend') }}/images/projects/project2.jpg" aria-label="project-img">
                                    <img class="img-fluid" src="{{ asset('frontend') }}/images/projects/project2.jpg" alt="project-img">
                                    <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                                </a>
                                <div class="project-item-info">
                                    <div class="project-item-info-content">
                                        <h3 class="project-item-title">
                                            <a href="projects-single.html">Ghum Touch Hospital</a>
                                        </h3>
                                        <p class="project-cat">Healthcare</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;infrastructure&quot;,&quot;commercial&quot;]">
                            <div class="project-img-container">
                                <a class="gallery-popup" href="{{ asset('frontend') }}/images/projects/project3.jpg" aria-label="project-img">
                                    <img class="img-fluid" src="{{ asset('frontend') }}/images/projects/project3.jpg" alt="project-img">
                                    <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                                </a>
                                <div class="project-item-info">
                                    <div class="project-item-info-content">
                                        <h3 class="project-item-title">
                                            <a href="projects-single.html">TNT East Facility</a>
                                        </h3>
                                        <p class="project-cat">Government</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;education&quot;,&quot;infrastructure&quot;]">
                            <div class="project-img-container">
                                <a class="gallery-popup" href="{{ asset('frontend') }}/images/projects/project4.jpg" aria-label="project-img">
                                    <img class="img-fluid" src="{{ asset('frontend') }}/images/projects/project4.jpg" alt="project-img">
                                    <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                                </a>
                                <div class="project-item-info">
                                    <div class="project-item-info-content">
                                        <h3 class="project-item-title">
                                            <a href="projects-single.html">Narriot Headquarters</a>
                                        </h3>
                                        <p class="project-cat">Infrastructure</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;infrastructure&quot;,&quot;education&quot;]">
                            <div class="project-img-container">
                                <a class="gallery-popup" href="{{ asset('frontend') }}/images/projects/project5.jpg" aria-label="project-img">
                                    <img class="img-fluid" src="{{ asset('frontend') }}/images/projects/project5.jpg" alt="project-img">
                                    <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                                </a>
                                <div class="project-item-info">
                                    <div class="project-item-info-content">
                                        <h3 class="project-item-title">
                                            <a href="projects-single.html">Kalas Metrorail</a>
                                        </h3>
                                        <p class="project-cat">Infrastructure</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;residential&quot;]">
                            <div class="project-img-container">
                                <a class="gallery-popup" href="{{ asset('frontend') }}/images/projects/project6.jpg" aria-label="project-img">
                                    <img class="img-fluid" src="{{ asset('frontend') }}/images/projects/project6.jpg" alt="project-img">
                                    <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                                </a>
                                <div class="project-item-info">
                                    <div class="project-item-info-content">
                                        <h3 class="project-item-title">
                                            <a href="projects-single.html">Ancraft Avenue House</a>
                                        </h3>
                                        <p class="project-cat">Residential</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="general-btn text-center">
                        <a class="btn btn-primary" href="projects.html">View All Projects</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="section-title">We Have more than 100+ Clients</h2>
                    <h3 class="column-title">Some of our Happy Clients</h3>

                    <div class="row all-clients">
                        <div class="col-sm-4 col-6">
                            <figure class="clients-logo">
                                <a href="#!"><img loading="lazy" class="img-fluid" src="{{ asset('frontend') }}/images/clients/client1.png" alt="clients-logo" /></a>
                            </figure>
                        </div>
                        <div class="col-sm-4 col-6">
                            <figure class="clients-logo">
                                <a href="#!"><img loading="lazy" class="img-fluid" src="{{ asset('frontend') }}/images/clients/client2.png" alt="clients-logo" /></a>
                            </figure>
                        </div>
                        <div class="col-sm-4 col-6">
                            <figure class="clients-logo">
                                <a href="#!"><img loading="lazy" class="img-fluid" src="{{ asset('frontend') }}/images/clients/client3.png" alt="clients-logo" /></a>
                            </figure>
                        </div>
                        <div class="col-sm-4 col-6">
                            <figure class="clients-logo">
                                <a href="#!"><img loading="lazy" class="img-fluid" src="{{ asset('frontend') }}/images/clients/client4.png" alt="clients-logo" /></a>
                            </figure>
                        </div>
                        <div class="col-sm-4 col-6">
                            <figure class="clients-logo">
                                <a href="#!"><img loading="lazy" class="img-fluid" src="{{ asset('frontend') }}/images/clients/client5.png" alt="clients-logo" /></a>
                            </figure>
                        </div>
                        <div class="col-sm-4 col-6">
                            <figure class="clients-logo">
                                <a href="#!"><img loading="lazy" class="img-fluid" src="{{ asset('frontend') }}/images/clients/client6.png" alt="clients-logo" /></a>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="section-title">Comments from our clients</h2>
                    <h3 class="column-title">Testimonials</h3>
                    <div id="testimonial-slide" class="testimonial-slide">
                        <div class="item">
                            <div class="quote-item">
                                <span class="quote-text">
                                Question ran over her cheek When she reached the first hills of the Italic Mountains, she had a last
                                view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the
                                subline of her own road.
                                </span>
                                <div class="quote-item-footer">
                                    <img loading="lazy" class="testimonial-thumb" src="{{ asset('frontend') }}/images/clients/testimonial1.png" alt="testimonial">
                                    <div class="quote-item-info">
                                        <h3 class="quote-author">Gabriel Denis</h3>
                                        <span class="quote-subtext">Chairman, OKT</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="quote-item">
                                <span class="quote-text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitoa tion ullamco laboris
                                nisi aliquip consequat.
                                </span>

                                <div class="quote-item-footer">
                                    <img loading="lazy" class="testimonial-thumb" src="{{ asset('frontend') }}/images/clients/testimonial2.png" alt="testimonial">
                                    <div class="quote-item-info">
                                        <h3 class="quote-author">Weldon Cash</h3>
                                        <span class="quote-subtext">CFO, First Choice</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="quote-item">
                                <span class="quote-text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitoa tion ullamco laboris
                                nisi ut commodo consequat.
                                </span>

                                <div class="quote-item-footer">
                                    <img loading="lazy" class="testimonial-thumb" src="{{ asset('frontend') }}/images/clients/testimonial3.png" alt="testimonial">
                                    <div class="quote-item-info">
                                        <h3 class="quote-author">Minter Puchan</h3>
                                        <span class="quote-subtext">Director, AKT</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="subscribe no-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="subscribe-call-to-acton">
                        <h3>Can We Help?</h3>
                        <h4>(+9) 847-291-4353</h4>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="ts-newsletter row align-items-center">
                        <div class="col-md-5 newsletter-introtext">
                            <h4 class="text-white mb-0">Newsletter Sign-up</h4>
                            <p class="text-white">Latest updates and news</p>
                        </div>
                        <div class="col-md-7 newsletter-form">
                            <form action="#" method="post">
                                <div class="form-group">
                                <label for="newsletter-email" class="content-hidden">Newsletter Email</label>
                                <input type="email" name="email" id="newsletter-email" class="form-control form-control-lg" placeholder="Your your email and hit enter" autocomplete="off">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <section id="news" class="news">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <h2 class="section-title">Know about software</h2>
                    <h3 class="section-sub-title">Blogs</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="latest-post">
                        <div class="latest-post-media">
                            <a href="news-single.html" class="latest-post-img">
                                <img loading="lazy" class="img-fluid" src="{{ asset('frontend') }}/images/news/news1.jpg" alt="img">
                            </a>
                        </div>
                        <div class="post-body">
                            <h4 class="post-title">
                                <a href="news-single.html" class="d-inline-block">We Just Completes $17.6 million Medical Clinic in Mid-Missouri</a>
                            </h4>
                            <div class="latest-post-meta">
                                <span class="post-item-date">
                                <i class="fa fa-clock-o"></i> July 20, 2017
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="latest-post">
                        <div class="latest-post-media">
                            <a href="news-single.html" class="latest-post-img">
                                <img loading="lazy" class="img-fluid" src="{{ asset('frontend') }}/images/news/news2.jpg" alt="img">
                            </a>
                        </div>
                        <div class="post-body">
                            <h4 class="post-title">
                                <a href="news-single.html" class="d-inline-block">Thandler Airport Water Reclamation Facility Expansion Project Named</a>
                            </h4>
                            <div class="latest-post-meta">
                                <span class="post-item-date">
                                <i class="fa fa-clock-o"></i> June 17, 2017
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="latest-post">
                        <div class="latest-post-media">
                            <a href="news-single.html" class="latest-post-img">
                                <img loading="lazy" class="img-fluid" src="{{ asset('frontend') }}/images/news/news3.jpg" alt="img">
                            </a>
                        </div>
                        <div class="post-body">
                            <h4 class="post-title">
                                <a href="news-single.html" class="d-inline-block">Silicon Bench and Cornike Begin Construction Solar Facilities</a>
                            </h4>
                            <div class="latest-post-meta">
                                <span class="post-item-date">
                                <i class="fa fa-clock-o"></i> Aug 13, 2017
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="general-btn text-center mt-4">
                <a class="btn btn-primary" href="news-left-sidebar.html">See All Posts</a>
            </div>
        </div>
    </section>

    <!-- Main Content End -->
@endsection