@extends('layouts.main')
@section('title', 'Home')
@section('content')

           <main class="site-content">
                <div class="hero-section">
                    <div class="container-lg h-100 px-lg-0">
                        <div class="row h-100 justify-content-lg-start justify-content-center align-items-center">
                            <div class="col-xl-6 col-lg-8">
                                <div class="hero-content">
                                    <h3>Medical And Health</h3>
                                    <h2>HIGH QUALITY TISSUE SAMPLES FOR WORLD-LEADING RESEARCH</h2>
                                    <p></p>
                                    <a href="#" class="theme-btn"> Contact Us<i class="icofont-arrow-right"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.hero-section -->
                <div class="cta-section">
                    <div class="container">
                        <div class="row align-items-center justify-content-xl-between justify-content-center">
                            <div class="col-xl-8">
                                <section>
                                    <h2>Need a doctor for checkup? Call for an <span>emergency services!</span></h2>
                                </section>
                            </div>
                            <div class="col-xl-4 px-xl-0">
                                <div class="action text-white text-center">
                                    <h2>Call Us : +00 568 468</h2>
                                    <p class="text-xl-right text-center">For an appoinment</p>
                                    <i class="icofont-woman-in-glasses"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.cta-section -->
                <div class="service-section">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="section-header text-center col-lg-8">
                                <h2>Some of our Specimen Types</h2>
                                <p>
                                    The catalogue currently contains results from combining lists of specimen type from three (reasonably large scale) microbiology laboratory systems and are currently in routine use.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="container-xl px-xl-0">
                        <div class="row no-gutters equal-cols">

                            @if(count($specimenTypes)>0)
                            @php($i=1)
                            @foreach($specimenTypes as $value)
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="service-card">
                                    <i class="flaticon-045-molecule"></i>
                                    <h2>{{$value->specimen_type}}</h2>
                                </div>
                            </div>
                            @endforeach
                            @endif

                        </div>
                    </div>
                </div><!-- /.service-section -->
                <div class="video-section">
                    <div class="container-xl px-xl-0">
                        <div class="video-section-content">
                            <div class="row align-items-center">
                                <div class="col-lg-6 order-lg-2 order-1">
                                    <div class="video-banner">
                                        <img src="web/img/video.jpg" alt="Video Banner" />
                                        <a href="#" class="play-video" data-toggle="modal" data-target="#popup-video">
                                            <i class="icofont-ui-play text-white"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-6 px-xl-5 order-lg-1 order-2">
                                    <section>
                                        <h3>Manage your health care</h3>
                                        <h2>Trust us to be there to help <span>all and make</span> things weel again.</h2>
                                        <a href="#" class="theme-btn"> All Doctors <i class="icofont-arrow-right"></i> </a>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.video-section -->
                <div class="team-section">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="section-header text-center col-lg-8">
                                <h2>Professional Care Provider</h2>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat sunt culpa officia deserunt mollit anim est laborum.</p>
                            </div>
                        </div>
                    </div>
                    <div class="container-lg px-lg-0">
                        <div class="row">

                            <div class="col-xl-3 col-md-4 col-sm-6">
                                <div class="team-member">
                                    <div class="member-photo">
                                        <img src="web/img/team/05.jpg" alt="Team Member Name" />
                                    </div>
                                    <h1 class="counter text-success">{{$biospecimens}}</h1>
                                    <h2><a href="#">Bio Specimens</a></h2>
                                    <p><a href="#">View All</a></p>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-4 col-sm-6">
                                <div class="team-member">
                                    <div class="member-photo">
                                        <img src="web/img/team/06.jpg" alt="Team Member Name" />
                                    </div>

                                    <h1 class="counter text-success">{{$biospecimens}}</h1>
                                    <h2><a href="#">Organs</a></h2>
                                    <p><a href="#">View All</a></p>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-4 col-sm-6">
                                <div class="team-member">
                                    <div class="member-photo">
                                        <img src="web/img/team/07.jpg" alt="Team Member Name" />
                                    </div>
                                    <h1 class="counter  text-success">{{$tissues}}</h1>
                                    <h2><a href="#">Tissues</a></h2>
                                    <p><a href="#">View All</a></p>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-4 col-sm-6">
                                <div class="team-member blank">
                                    <h2>Enter The Catalog</h2>
                                    <p>Visit our the catalog to view more specific infomation</p>
                                    <a href="#">
                                        <i class="icofont-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.team-section -->
                <div class="fun-facts">
                    <div class="container-xl px-xl-0">
                        <div class="row justify-content-lg-between align-items-center">
                            <div class="col-xl-5 col-lg-6 pr-xl-0">
                                <section class="contact-methods">
                                    <h2>We always ready for a challenge.</h2>
                                    <ul>
                                        <li>
                                            <i class="icofont-headphone-alt-1"></i>
                                            <span>+00 568 467 46</span>
                                        </li>
                                        <li>
                                            <span>medicust@gmail.com</span>
                                            <i class="icofont-envelope-open"></i>
                                        </li>
                                    </ul>
                                </section>
                            </div>
                            <div class="col-lg-6">
                                <div class="fun-facts-area">
                                    <h2>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</h2>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, qu nostrud exercitation ullamco laboris nisi ut
                                        aliquip.
                                    </p>
                                    <ul class="clearfix">
                                        <li>
                                            <i class="icofont-woman-in-glasses"></i>
                                            <div class="the_fact">
                                                <h3 class="counter">8648</h3>
                                                <p>Satisfied Clients</p>
                                            </div>
                                        </li>
                                        <li>
                                            <i class="icofont-award"></i>
                                            <div class="the_fact">
                                                <h3 class="counter">57658</h3>
                                                <p>World Awards</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.fun-facts -->
                <div class="testimony-section">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="section-header text-center col-lg-8">
                                <h2>Patient Testimonials</h2>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat sunt culpa officia deserunt mollit anim est laborum.</p>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="testimony owl-carousel">
                                <div class="testimony-item">
                                    <div class="d-flex justify-content-between align-items-center testimony-header">
                                        <div class="reviewer-photo">
                                            <img src="web/img/testimony/01.jpg" alt="Reviewer Name" />
                                        </div>
                                        <i class="icofont-quote-right"></i>
                                    </div>
                                    <div class="d-flex justify-content-between reviewer">
                                        <div class="reviewer-detail">
                                            <h2>Amber Morales</h2>
                                            <p>Product Designer</p>
                                        </div>
                                        <div class="the_ratings">
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                        </div>
                                    </div>
                                    <h2>Duis aute irure dolor in reprehe voluptate velit esse cillum dolo sunt culpa officia.</h2>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat sunt culpa officia deserunt mollit anim est laborum.</p>
                                </div>
                                <div class="testimony-item">
                                    <div class="d-flex justify-content-between align-items-center testimony-header">
                                        <div class="reviewer-photo">
                                            <img src="web/img/testimony/01.jpg" alt="Reviewer Name" />
                                        </div>
                                        <i class="icofont-quote-right"></i>
                                    </div>
                                    <div class="d-flex justify-content-between reviewer">
                                        <div class="reviewer-detail">
                                            <h2>Amber Morales</h2>
                                            <p>Product Designer</p>
                                        </div>
                                        <div class="the_ratings">
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                        </div>
                                    </div>
                                    <h2>Duis aute irure dolor in reprehe voluptate velit esse cillum dolo sunt culpa officia.</h2>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat sunt culpa officia deserunt mollit anim est laborum.</p>
                                </div>
                                <div class="testimony-item">
                                    <div class="d-flex justify-content-between align-items-center testimony-header">
                                        <div class="reviewer-photo">
                                            <img src="web/img/testimony/01.jpg" alt="Reviewer Name" />
                                        </div>
                                        <i class="icofont-quote-right"></i>
                                    </div>
                                    <div class="d-flex justify-content-between reviewer">
                                        <div class="reviewer-detail">
                                            <h2>Amber Morales</h2>
                                            <p>Product Designer</p>
                                        </div>
                                        <div class="the_ratings">
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                        </div>
                                    </div>
                                    <h2>Duis aute irure dolor in reprehe voluptate velit esse cillum dolo sunt culpa officia.</h2>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat sunt culpa officia deserunt mollit anim est laborum.</p>
                                </div>
                                <div class="testimony-item">
                                    <div class="d-flex justify-content-between align-items-center testimony-header">
                                        <div class="reviewer-photo">
                                            <img src="web/img/testimony/01.jpg" alt="Reviewer Name" />
                                        </div>
                                        <i class="icofont-quote-right"></i>
                                    </div>
                                    <div class="d-flex justify-content-between reviewer">
                                        <div class="reviewer-detail">
                                            <h2>Amber Morales</h2>
                                            <p>Product Designer</p>
                                        </div>
                                        <div class="the_ratings">
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                        </div>
                                    </div>
                                    <h2>Duis aute irure dolor in reprehe voluptate velit esse cillum dolo sunt culpa officia.</h2>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat sunt culpa officia deserunt mollit anim est laborum.</p>
                                </div>
                                <div class="testimony-item">
                                    <div class="d-flex justify-content-between align-items-center testimony-header">
                                        <div class="reviewer-photo">
                                            <img src="web/img/testimony/01.jpg" alt="Reviewer Name" />
                                        </div>
                                        <i class="icofont-quote-right"></i>
                                    </div>
                                    <div class="d-flex justify-content-between reviewer">
                                        <div class="reviewer-detail">
                                            <h2>Amber Morales</h2>
                                            <p>Product Designer</p>
                                        </div>
                                        <div class="the_ratings">
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                        </div>
                                    </div>
                                    <h2>Duis aute irure dolor in reprehe voluptate velit esse cillum dolo sunt culpa officia.</h2>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat sunt culpa officia deserunt mollit anim est laborum.</p>
                                </div>
                                <div class="testimony-item">
                                    <div class="d-flex justify-content-between align-items-center testimony-header">
                                        <div class="reviewer-photo">
                                            <img src="web/img/testimony/01.jpg" alt="Reviewer Name" />
                                        </div>
                                        <i class="icofont-quote-right"></i>
                                    </div>
                                    <div class="d-flex justify-content-between reviewer">
                                        <div class="reviewer-detail">
                                            <h2>Amber Morales</h2>
                                            <p>Product Designer</p>
                                        </div>
                                        <div class="the_ratings">
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                        </div>
                                    </div>
                                    <h2>Duis aute irure dolor in reprehe voluptate velit esse cillum dolo sunt culpa officia.</h2>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat sunt culpa officia deserunt mollit anim est laborum.</p>
                                </div>
                                <div class="testimony-item">
                                    <div class="d-flex justify-content-between align-items-center testimony-header">
                                        <div class="reviewer-photo">
                                            <img src="web/img/testimony/01.jpg" alt="Reviewer Name" />
                                        </div>
                                        <i class="icofont-quote-right"></i>
                                    </div>
                                    <div class="d-flex justify-content-between reviewer">
                                        <div class="reviewer-detail">
                                            <h2>Amber Morales</h2>
                                            <p>Product Designer</p>
                                        </div>
                                        <div class="the_ratings">
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                        </div>
                                    </div>
                                    <h2>Duis aute irure dolor in reprehe voluptate velit esse cillum dolo sunt culpa officia.</h2>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat sunt culpa officia deserunt mollit anim est laborum.</p>
                                </div>
                                <div class="testimony-item">
                                    <div class="d-flex justify-content-between align-items-center testimony-header">
                                        <div class="reviewer-photo">
                                            <img src="web/img/testimony/01.jpg" alt="Reviewer Name" />
                                        </div>
                                        <i class="icofont-quote-right"></i>
                                    </div>
                                    <div class="d-flex justify-content-between reviewer">
                                        <div class="reviewer-detail">
                                            <h2>Amber Morales</h2>
                                            <p>Product Designer</p>
                                        </div>
                                        <div class="the_ratings">
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                        </div>
                                    </div>
                                    <h2>Duis aute irure dolor in reprehe voluptate velit esse cillum dolo sunt culpa officia.</h2>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat sunt culpa officia deserunt mollit anim est laborum.</p>
                                </div>
                                <div class="testimony-item">
                                    <div class="d-flex justify-content-between align-items-center testimony-header">
                                        <div class="reviewer-photo">
                                            <img src="web/img/testimony/01.jpg" alt="Reviewer Name" />
                                        </div>
                                        <i class="icofont-quote-right"></i>
                                    </div>
                                    <div class="d-flex justify-content-between reviewer">
                                        <div class="reviewer-detail">
                                            <h2>Amber Morales</h2>
                                            <p>Product Designer</p>
                                        </div>
                                        <div class="the_ratings">
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                        </div>
                                    </div>
                                    <h2>Duis aute irure dolor in reprehe voluptate velit esse cillum dolo sunt culpa officia.</h2>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat sunt culpa officia deserunt mollit anim est laborum.</p>
                                </div>
                                <div class="testimony-item">
                                    <div class="d-flex justify-content-between align-items-center testimony-header">
                                        <div class="reviewer-photo">
                                            <img src="web/img/testimony/01.jpg" alt="Reviewer Name" />
                                        </div>
                                        <i class="icofont-quote-right"></i>
                                    </div>
                                    <div class="d-flex justify-content-between reviewer">
                                        <div class="reviewer-detail">
                                            <h2>Amber Morales</h2>
                                            <p>Product Designer</p>
                                        </div>
                                        <div class="the_ratings">
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                        </div>
                                    </div>
                                    <h2>Duis aute irure dolor in reprehe voluptate velit esse cillum dolo sunt culpa officia.</h2>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat sunt culpa officia deserunt mollit anim est laborum.</p>
                                </div>
                                <div class="testimony-item">
                                    <div class="d-flex justify-content-between align-items-center testimony-header">
                                        <div class="reviewer-photo">
                                            <img src="web/img/testimony/01.jpg" alt="Reviewer Name" />
                                        </div>
                                        <i class="icofont-quote-right"></i>
                                    </div>
                                    <div class="d-flex justify-content-between reviewer">
                                        <div class="reviewer-detail">
                                            <h2>Amber Morales</h2>
                                            <p>Product Designer</p>
                                        </div>
                                        <div class="the_ratings">
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                        </div>
                                    </div>
                                    <h2>Duis aute irure dolor in reprehe voluptate velit esse cillum dolo sunt culpa officia.</h2>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat sunt culpa officia deserunt mollit anim est laborum.</p>
                                </div>
                                <div class="testimony-item">
                                    <div class="d-flex justify-content-between align-items-center testimony-header">
                                        <div class="reviewer-photo">
                                            <img src="web/img/testimony/01.jpg" alt="Reviewer Name" />
                                        </div>
                                        <i class="icofont-quote-right"></i>
                                    </div>
                                    <div class="d-flex justify-content-between reviewer">
                                        <div class="reviewer-detail">
                                            <h2>Amber Morales</h2>
                                            <p>Product Designer</p>
                                        </div>
                                        <div class="the_ratings">
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                        </div>
                                    </div>
                                    <h2>Duis aute irure dolor in reprehe voluptate velit esse cillum dolo sunt culpa officia.</h2>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat sunt culpa officia deserunt mollit anim est laborum.</p>
                                </div>
                                <div class="testimony-item">
                                    <div class="d-flex justify-content-between align-items-center testimony-header">
                                        <div class="reviewer-photo">
                                            <img src="web/img/testimony/01.jpg" alt="Reviewer Name" />
                                        </div>
                                        <i class="icofont-quote-right"></i>
                                    </div>
                                    <div class="d-flex justify-content-between reviewer">
                                        <div class="reviewer-detail">
                                            <h2>Amber Morales</h2>
                                            <p>Product Designer</p>
                                        </div>
                                        <div class="the_ratings">
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                        </div>
                                    </div>
                                    <h2>Duis aute irure dolor in reprehe voluptate velit esse cillum dolo sunt culpa officia.</h2>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat sunt culpa officia deserunt mollit anim est laborum.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.testimony-section -->
                <div class="blog-section">
                    <div class="container-md px-md-0">
                        <div class="d-flex flex-wrap blog-section-header justify-content-xl-between text-xl-left text-center align-items-center">
                            <div class="col-xl-5">
                                <h2>Get <span>Every Single</span> Updates Here.</h2>
                            </div>
                            <div class="col-xl-5 pl-xl-0">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                            </div>
                            <div class="col-xl-2">
                                <div class="blog-carousel-control">
                                    <span class="blog-carousel-nav btn-prev">
                                        <i class="icofont-arrow-left"></i>
                                    </span>
                                    <span class="blog-carousel-nav btn-next">
                                        <i class="icofont-arrow-right"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container-md px-md-0">
                        <div class="row">
                            <div class="slide-progress"></div>
                            <div class="blog-carousel owl-carousel">
                                <div class="blog-card d-flex flex-sm-row flex-column">
                                    <div class="the_post_thumbnail">
                                        <img src="web/img/blog/01.jpg" alt="Blog Title" />
                                    </div>
                                    <div class="blog-card-body">
                                        <span class="the_date">25, February, 2020</span>
                                        <h2 class="the_title">
                                            <a href="#">If you find your self constantly book marking and health sections.</a>
                                        </h2>
                                        <a href="#" class="the_permalink">Read more <i class="icofont-arrow-right"></i></a>
                                        <span class="the_time">5 hours ago</span>
                                    </div>
                                </div>
                                <div class="blog-card d-flex flex-sm-row flex-column">
                                    <div class="the_post_thumbnail">
                                        <img src="web/img/blog/02.jpg" alt="Blog Title" />
                                    </div>
                                    <div class="blog-card-body">
                                        <span class="the_date">25, February, 2020</span>
                                        <h2 class="the_title">
                                            <a href="#">If you find your self constantly book marking and health sections.</a>
                                        </h2>
                                        <a href="#" class="the_permalink">Read more <i class="icofont-arrow-right"></i></a>
                                        <span class="the_time">5 hours ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.blog-section -->
            </main><!-- /.site-content -->
@endsection
