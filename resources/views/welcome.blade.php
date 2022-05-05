@extends('layouts.website')
@section('content')
<div class="main-banner">
    <div class="main-banner-slider-area owl-carousel slider-nav">
        <div class="main-banner-single-slider">
            <div class="container">
                <div class="banner-text-area">
                    <h6>Creating Stars Concept </h6>
                    <h1>We're a Child Centred Organisation </h1>
                    <div class="banner-buttons">
                        <ul>
                            <li><a class="default-button" href="contact.html">Contact Now <i
                                        class="fas fa-arrow-right"></i></a></li>
                            <li><a class="default-button banner-button" href="services.html">Explore More <i
                                        class="fas fa-arrow-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-banner-single-slider mbs-2">
            <div class="container">
                <div class="banner-text-area">
                    <h6>We Are Digital Marketing Expert</h6>
                    <h1>Stay Connected With Your Business</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temp gravida. Risus
                        commodo viverra maecenas accumsan facilisis.</p>
                    <div class="banner-buttons">
                        <ul>
                            <li><a class="default-button" href="contact.html">Contact Now <i
                                        class="fas fa-arrow-right"></i></a></li>
                            <li><a class="default-button banner-button" href="services.html">Explore More <i
                                        class="fas fa-arrow-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-banner-single-slider mbs-3">
            <div class="container">
                <div class="banner-text-area">
                    <h6>We Are Digital Marketing Expert</h6>
                    <h1>Make Your Own Startup Business Agency</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temp gravida. Risus
                        commodo viverra maecenas accumsan facilisis.</p>
                    <div class="banner-buttons">
                        <ul>
                            <li><a class="default-button" href="contact.html">Contact Now <i
                                        class="fas fa-arrow-right"></i></a></li>
                            <li><a class="default-button banner-button" href="services.html">Explore More <i
                                        class="fas fa-arrow-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- <section class="featurs ptb-100">
    <div class="container">
        <div class="default-section-title default-section-title-middle">
            <span>Our Features</span>
            <h3>We Provide Creative Ideas</h3>
        </div>
        <div class="section-content">
            <div class="row g-0 justify-content-center">
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="features-card">
                        <i class="flaticon-idea"></i>
                        <h4><a href="services.html">Unique Ideas & Solutions</a></h4>
                        <p>Lorem ipsum dolor sit amet, cons ctetur adipiscing facilisis. </p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="features-card">
                        <i class="flaticon-business"></i>
                        <h4><a href="services.html">Create New Business</a></h4>
                        <p>Lorem ipsum dolor sit amet, cons ctetur adipiscing facilisis. </p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="features-card">
                        <i class="flaticon-target"></i>
                        <h4><a href="services.html">Targeting & Positioning</a></h4>
                        <p>Lorem ipsum dolor sit amet, cons ctetur adipiscing facilisis. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}


<section class="about pb-100" id="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="about-img-area">
                    <img class="main-img" src="{{asset('assets/website/assets/images/star.png')}}" alt="image">
                    {{-- <img class="small-img" src="{{asset('assets/website/assets/images/star.png')}}" alt="image">
                    --}}
                    <div class="about-exp">
                        <h4>2+</h4>
                        <p>Years Of Experience</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="about-text-area pl-20">
                    <div class="default-section-title ">
                        <span>About us</span>
                        {{-- <h3>Here Comes An Intro About The Company</h3> --}}
                    </div>
                    <p>Creating Stars Concept is a child-centred organisation established to improve the lives of less
                        privileged children, prevent child sexual abuse, fight against child trafficking and
                        molestation, prevent child bullying and to create awareness on the dangers and effects of child
                        abuse, as well as protection and emergency care for abused victims.</p>
                    {{-- <div class="progress-bar-area">
                        <div id="bar1" class="barfiller">
                            <span class="label">Sales & Trading</span>
                            <span class="tip"></span>
                            <span class="fill" data-percentage="95"></span>
                        </div>
                        <div id="bar2" class="barfiller">
                            <span class="label">Finance</span>
                            <span class="tip"></span>
                            <span class="fill" data-percentage="90"></span>
                        </div>
                        <div id="bar3" class="barfiller">
                            <span class="label">Consulting</span>
                            <span class="tip"></span>
                            <span class="fill" data-percentage="75"></span>
                        </div>
                        <div id="bar4" class="barfiller">
                            <span class="label">Digital Strategy</span>
                            <span class="tip"></span>
                            <span class="fill" data-percentage="80"></span>
                        </div>
                    </div>
                    <div class="about-intro">
                        <img src="{{asset('assets/website/assets/images/testimonial/tc1.jpg')}}" alt="image">
                        <div class="at-text">
                            <h4>Adam Rueter</h4>
                            <p>Founder Manager</p>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>


{{-- <section class="service ptb-100 bg-f8f8f8">
    <div class="container">
        <div class="default-section-title default-section-title-middle">
            <span>Our Services</span>
            <h3>Services For Business</h3>
        </div>
        <div class="section-content">
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="service-card">
                        <div class="service-card-img">
                            <img src="{{asset('assets/website/assets/images/service/s1.jpg')}}" alt="image">
                            <a href="service-details.html"><i class="flaticon-business-plan"></i></a>
                        </div>
                        <div class="service-card-text">
                            <h4><a href="service-details.html">Investment Planning & Strategy</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="service-card">
                        <div class="service-card-img">
                            <img src="{{asset('assets/website/assets/images/service/s2.jpg')}}" alt="image">
                            <a href="service-details.html"><i class="flaticon-business-1"></i></a>
                        </div>
                        <div class="service-card-text">
                            <h4><a href="service-details.html">International Business Opportunities</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="service-card">
                        <div class="service-card-img">
                            <img src="{{asset('assets/website/assets/images/service/s3.jpg')}}" alt="image">
                            <a href="service-details.html"><i class="flaticon-document"></i></a>
                        </div>
                        <div class="service-card-text">
                            <h4><a href="service-details.html">Strategic & Commercial Approach</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="service-card">
                        <div class="service-card-img">
                            <img src="{{asset('assets/website/assets/images/service/s4.jpg')}}" alt="image">
                            <a href="service-details.html"><i class="flaticon-business-2"></i></a>
                        </div>
                        <div class="service-card-text">
                            <h4><a href="service-details.html">Simple Business Answers And Solutions</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}


{{-- <section class="why-only-we ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-12 col-sm-12 col-md-12 col-12">
                <div class="why-only-we-text-area pr-20">
                    <div class="default-section-title">
                        <span>Why Only We</span>
                        <h3>Reason For Choosing Our Strike Consultancy</h3>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, do eiusmod tempo incididunt ut
                        labore et dolore magna aliqua. Quis ipsum suspendisse ultrice. Risus commodo viverra
                        maecenas accumsan lacus vel facilisis. </p>
                    <p>Iaculis erat pellentesque adipiscing commodo. Placerat vestibulum lectus mauris ultrices eros
                        in cursus. Ornare aenean euismod elementum nisi quis eleifend quam adipiscing. Morbi
                        tincidunt ornare massa eget egestas purus fermentum viverra accumsan commodo.</p>
                    <div class="why-we-list">
                        <ul>
                            <li><i class="fas fa-check"></i> Trusted by leaders</li>
                            <li><i class="fas fa-check"></i> Good Track Record</li>
                            <li><i class="fas fa-check"></i> Diverse Portfolio</li>
                            <li><i class="fas fa-check"></i> Exponential Growth</li>
                            <li><i class="fas fa-check"></i> Pioneers in Consultancy</li>
                            <li><i class="fas fa-check"></i> Brand Equity</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12 col-sm-12 col-md-12 col-12">
                <div class="why-only-img-area">
                    <img src="{{asset('assets/website/assets/images/why-we/ww1.jpg')}}" alt="image">
                    <div class="ww-team-card">
                        <h4>354+</h4>
                        <p>Team Members</p>
                    </div>
                    <div class="ww-project-card">
                        <h4>4890</h4>
                        <p>Project Completed</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

{{--
<section class="project ptb-100 bg-f8f8f8">
    <div class="container">
        <div class="default-section-title default-section-title-middle">
            <span>Our Project</span>
            <h3>Discover The World Of Business</h3>
        </div>
    </div>
    <div class="section-content">
        <div class="portfolio-slider-area owl-carousel">
            <div class="portfolio-card">
                <img src="{{asset('assets/website/assets/images/portfolio/p1.jpg')}}" alt="image">
                <div class="portfolio-card-text-area">
                    <a href="project-details.html"> <i class="fas fa-arrow-right"></i></a>
                    <h4><a href="portfolio-details.html">Project Strategy</a></h4>
                    <p>Reducing risk and enhancing housing finance liquidity.</p>
                </div>
            </div>
            <div class="portfolio-card">
                <img src="{{asset('assets/website/assets/images/portfolio/p2.jpg')}}" alt="image">
                <div class="portfolio-card-text-area">
                    <a href="project-details.html"> <i class="fas fa-arrow-right"></i></a>
                    <h4><a href="portfolio-details.html">Mission Successful</a></h4>
                    <p>Reducing risk and enhancing housing finance liquidity.</p>
                </div>
            </div>
            <div class="portfolio-card">
                <img src="{{asset('assets/website/assets/images/portfolio/p3.jpg')}}" alt="image">
                <div class="portfolio-card-text-area">
                    <a href="project-details.html"> <i class="fas fa-arrow-right"></i></a>
                    <h4><a href="portfolio-details.html">Project Summery</a></h4>
                    <p>Reducing risk and enhancing housing finance liquidity.</p>
                </div>
            </div>
            <div class="portfolio-card">
                <img src="{{asset('assets/website/assets/images/portfolio/p4.jpg')}}" alt="image">
                <div class="portfolio-card-text-area">
                    <a href="project-details.html"> <i class="fas fa-arrow-right"></i></a>
                    <h4><a href="portfolio-details.html">Team Meeting</a></h4>
                    <p>Reducing risk and enhancing housing finance liquidity.</p>
                </div>
            </div>
            <div class="portfolio-card">
                <img src="{{asset('assets/website/assets/images/portfolio/p5.jpg')}}" alt="image">
                <div class="portfolio-card-text-area">
                    <a href="project-details.html"> <i class="fas fa-arrow-right"></i></a>
                    <h4><a href="portfolio-details.html">Idea Sharing</a></h4>
                    <p>Reducing risk and enhancing housing finance liquidity.</p>
                </div>
            </div>
            <div class="portfolio-card">
                <img src="{{asset('assets/website/assets/images/portfolio/p6.jpg')}}" alt="image">
                <div class="portfolio-card-text-area">
                    <a href="project-details.html"> <i class="fas fa-arrow-right"></i></a>
                    <h4><a href="portfolio-details.html">Team Meeting</a></h4>
                    <p>Reducing risk and enhancing housing finance liquidity.</p>
                </div>
            </div>
        </div>
    </div>
</section> --}}


{{-- <section class="fun-facts fun-facts-1 bg-f8f8f8">
    <div class="container">
        <div class="fun-facts-content">
            <div class="row">
                <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="fun-facts-text-area pr-20">
                        <div class="default-section-title">
                            <span>Our Awards</span>
                            <h3>Our Achievements</h3>
                        </div>
                        <p>Lorem ipsum dolor sit amet, elit, do risus commodo viverra facilisis. </p>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="fun-facts-card-area">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                                <div class="fun-facts-card">
                                    <h2><span class="odometer" data-count="294">00</span></h2>
                                    <p>Project Done</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                                <div class="fun-facts-card fcb">
                                    <h2><span class="odometer" data-count="987">00</span></h2>
                                    <p>Satisfied Customers</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                                <div class="fun-facts-card">
                                    <h2><span class="odometer" data-count="60">00</span><span class="odo-text">K</span>
                                    </h2>
                                    <p>Total Earned</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                                <div class="fun-facts-card fcb">
                                    <h2><span class="odometer" data-count="1523">00</span></h2>
                                    <p>Award Wins</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}


{{-- <section class="team ptb-100">
    <div class="container">
        <div class="default-section-title default-section-title-middle">
            <span>Our Team</span>
            <h3>We Are Ready To Serving</h3>
        </div>
        <div class="section-content">
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="team-card">
                        <img src="{{asset('assets/website/assets/images/team/t1.jpg')}}" alt="image">
                        <div class="team-card-text">
                            <h4>David Monterio</h4>
                            <p>Back End Developer</p>
                            <ul>
                                <li><a href="https://www.facebook.com/" target="_blank"><i
                                            class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://www.linkedin.com/" target="_blank"><i
                                            class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li><a href="https://www.instagram.com/" target="_blank"><i
                                            class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="team-card">
                        <img src="{{asset('assets/website/assets/images/team/t2.jpg')}}" alt="image">
                        <div class="team-card-text">
                            <h4>Robert Martin</h4>
                            <p>Front End Developer</p>
                            <ul>
                                <li><a href="https://www.facebook.com/" target="_blank"><i
                                            class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://www.linkedin.com/" target="_blank"><i
                                            class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li><a href="https://www.instagram.com/" target="_blank"><i
                                            class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="team-card">
                        <img src="{{asset('assets/website/assets/images/team/t3.jpg')}}" alt="image">
                        <div class="team-card-text">
                            <h4>Norman Hartley</h4>
                            <p>Bid Manager</p>
                            <ul>
                                <li><a href="https://www.facebook.com/" target="_blank"><i
                                            class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://www.linkedin.com/" target="_blank"><i
                                            class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li><a href="https://www.instagram.com/" target="_blank"><i
                                            class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="team-card">
                        <img src="{{asset('assets/website/assets/images/team/t4.jpg')}}" alt="image">
                        <div class="team-card-text">
                            <h4>Leonard Lee</h4>
                            <p>Team Lead</p>
                            <ul>
                                <li><a href="https://www.facebook.com/" target="_blank"><i
                                            class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://www.linkedin.com/" target="_blank"><i
                                            class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li><a href="https://www.instagram.com/" target="_blank"><i
                                            class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}


{{-- <section class="why-we why-we-1 pt-100 bg-f8f8f8">
    <div class="shape">
        <div class="shape-img">
            <img src="{{asset('assets/website/assets/images/shape/shape1.png')}}" alt="image">
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="why-we-img-area">
                    <img src="{{asset('assets/website/assets/images/why-we/ww2.jpg')}}" alt="image">
                </div>
            </div>
            <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="why-we-text-area why-we-text-area-1 pl-20">
                    <div class="default-section-title">
                        <span>Why Choose Us</span>
                        <h3>We Offer Unique & Advanced Designs Centers</h3>
                    </div>
                    <div class="why-card-area">
                        <div class="row">
                            <div class="col-lg-10 col-md-12 col-sm-12 col-12">
                                <div class="why-we-card">
                                    <h4>Developing Strategy</h4>
                                    <p>It is advantageous when the dummy text is realistic lorem ipsum dolor.</p>
                                </div>
                            </div>
                            <div class="col-lg-10 col-md-12 col-sm-12 col-12">
                                <div class="why-we-card">
                                    <h4>Blazing Performance</h4>
                                    <p>It is advantageous when the dummy text is realistic lorem ipsum dolor.</p>
                                </div>
                            </div>
                            <div class="col-lg-10 col-md-12 col-sm-12 col-12">
                                <div class="why-we-card">
                                    <h4>Customer satisfaction</h4>
                                    <p>It is advantageous when the dummy text is realistic lorem ipsum dolor.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}


{{-- <section class="testimonials ptb-100">
    <div class="container">
        <div class="default-section-title default-section-title-middle">
            <span>Testimonials</span>
            <h3>Our Happy Clients</h3>
        </div>
        <div class="section-content">
            <div class="testimonial-slider-area owl-carousel">
                <div class="testimonial-card">
                    <img src="{{asset('assets/website/assets/images/testimonial/tc2.jpg')}}" alt="image">
                    <div class="testimonial-card-text">
                        <p>“It is a long established fact that a reader will page when looking at its layout. The
                            point of opposed to using 'Content here, content here', making it look like readable
                            English.”</p>
                        <div class="testimonial-intro-area">
                            <div class="testimonial-card-intro">
                                <h4>Robert Cook</h4>
                                <span>Front End Developer</span>
                            </div>
                            <div class="stars">
                                <ul>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <img src="{{asset('assets/website/assets/images/testimonial/tc3.jpg')}}" alt="image">
                    <div class="testimonial-card-text">
                        <p>“It is a long established fact that a reader will page when looking at its layout. The
                            point of opposed to using 'Content here, content here', making it look like readable
                            English.”</p>
                        <div class="testimonial-intro-area">
                            <div class="testimonial-card-intro">
                                <h4>Danial Cook</h4>
                                <span>Back End Developer</span>
                            </div>
                            <div class="stars">
                                <ul>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <img src="{{asset('assets/website/assets/images/testimonial/tc4.jpg')}}" alt="image">
                    <div class="testimonial-card-text">
                        <p>“It is a long established fact that a reader will page when looking at its layout. The
                            point of opposed to using 'Content here, content here', making it look like readable
                            English.”</p>
                        <div class="testimonial-intro-area">
                            <div class="testimonial-card-intro">
                                <h4>Peter Smith</h4>
                                <span>Front End Developer</span>
                            </div>
                            <div class="stars">
                                <ul>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <img src="{{asset('assets/website/assets/images/testimonial/tc5.jpg')}}" alt="image">
                    <div class="testimonial-card-text">
                        <p>“It is a long established fact that a reader will page when looking at its layout. The
                            point of opposed to using 'Content here, content here', making it look like readable
                            English.”</p>
                        <div class="testimonial-intro-area">
                            <div class="testimonial-card-intro">
                                <h4>Robert Brown</h4>
                                <span>Manager</span>
                            </div>
                            <div class="stars">
                                <ul>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <img src="{{asset('assets/website/assets/images/testimonial/tc6.jpg')}}" alt="image">
                    <div class="testimonial-card-text">
                        <p>“It is a long established fact that a reader will page when looking at its layout. The
                            point of opposed to using 'Content here, content here', making it look like readable
                            English.”</p>
                        <div class="testimonial-intro-area">
                            <div class="testimonial-card-intro">
                                <h4>Stive Smith</h4>
                                <span>Front End Developer</span>
                            </div>
                            <div class="stars">
                                <ul>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}


{{-- <section class="booking ptb-100 bg-f8f8f8">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="booking-form-area pr-20">
                    <div class="default-section-title">
                        <span>Get A Quote</span>
                        <h3>Fill Out This Form Now</h3>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, do eiusmod tempo incididunt ut
                        labore et dolore magna aliqua. Quis ipsum suspendisse ultrice. Risus commodo viverra
                        maecenas accumsan lacus vel facilisis.</p>
                    <form>
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" class="form-control" placeholder="Your Name*" required>
                            </div>
                            <div class="col-lg-6">
                                <input type="email" class="form-control" placeholder="Your Email*" required>
                            </div>
                            <div class="col-lg-12">
                                <input type="text" class="form-control" placeholder="Website Link*" required>
                            </div>
                            <div class="col-lg-12">
                                <textarea class="form-control" rows="5" placeholder="Your Message*"></textarea>
                            </div>
                            <div class="col-lg-12">
                                <button class="default-button" type="submit">Get A Quote <i
                                        class="fas fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="booking-img">
                    <img src="{{asset('assets/website/assets/images/why-we/booking-1.jpg')}}" alt="image">
                    <div class="booking-shape">
                        <img src="{{asset('assets/website/assets/images/shape/shape3.png')}}" alt="shape">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}


<section class="blog ptb-100" id="articles">
    <div class="container">
        <div class="default-section-title default-section-title-middle">
            <span>Recent Blog Post</span>
            <h3>Our Articles</h3>
        </div>
        <div class="section-content">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="blog-card">
                        <div class="blog-img-area">
                            <a href="{{url('child_right')}}"><img
                                    src="{{asset('assets/website/assets/images/article/right.JPEG')}}"
                                    style="height: 356px !important;width:356px !important" alt="image"></a>

                        </div>
                        <div class="blog-text-area">
                            <div class="blog-date">
                                <ul>
                                    <li><i class="far fa-user-circle"></i> By <span>Admin</span>
                                    </li>
                                </ul>
                            </div>
                            <h4><a href="{{url('child_right')}}">A Child’s Right
                                </a></h4>
                            <a class="default-button default-button-2" href="{{url('child_right')}}">Read More <i
                                    class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="blog-card">
                        <div class="blog-img-area">
                            <a href="{{url('importance_of_child_right')}}"><img
                                    src="{{asset('assets/website/assets/images/article/importance.JPEG')}}"
                                    style="height: 356px !important;width:356px !important" alt="image"></a>

                        </div>
                        <div class="blog-text-area">
                            <div class="blog-date">
                                <ul>
                                    <li><i class="far fa-user-circle"></i> By <span>Admin</span>
                                    </li>
                                </ul>
                            </div>
                            <h4><a href="{{url('importance_of_child_right')}}">Importance of Child Right
                                </a></h4>
                            <a class="default-button default-button-2" href="{{url('importance_of_child_right')}}">Read
                                More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="blog-card">
                        <div class="blog-img-area">
                            <a href="{{url('body_part')}}"><img
                                    src="{{asset('assets/website/assets/images/article/part.JPEG')}}"
                                    style="height: 356px !important;width:356px !important" alt="image"></a>

                        </div>
                        <div class="blog-text-area">
                            <div class="blog-date">
                                <ul>
                                    <li><i class="far fa-user-circle"></i> By <span>Admin</span>
                                    </li>
                                </ul>
                            </div>
                            <h4><a href="{{url('body_part')}}">Teach your Child Body Part Early
                                </a></h4>
                            <a class="default-button default-button-2" href="{{url('body_part')}}">Read More <i
                                    class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="blog-card">
                        <div class="blog-img-area">
                            <a href="{{url('child_trafficking')}}"><img
                                    src="{{asset('assets/website/assets/images/blog/b1.jpg')}}"
                                    style="height: 356px !important;width:356px !important" alt="image"></a>

                        </div>
                        <div class="blog-text-area">
                            <div class="blog-date">
                                <ul>
                                    <li><i class="far fa-user-circle"></i> By <span>Admin</span>
                                    </li>
                                </ul>
                            </div>
                            <h4><a href="{{url('child_trafficking')}}">Child Trafficking
                                </a></h4>
                            <a class="default-button default-button-2" href="{{url('child_trafficking')}}">Read More <i
                                    class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="blog-card">
                        <div class="blog-img-area">
                            <a href="{{url('causes_of_child_trafficking')}}"><img
                                    src="{{asset('assets/website/assets/images/article/types.JPEG')}}"
                                    style="height: 356px !important;width:356px !important" alt="image"></a>

                        </div>
                        <div class="blog-text-area">
                            <div class="blog-date">
                                <ul>
                                    <li><i class="far fa-user-circle"></i> By <span>Admin</span>
                                    </li>
                                </ul>
                            </div>
                            <h4><a href="{{url('causes_of_child_trafficking')}}">Causes of Child Trafficking
                                </a></h4>
                            <a class="default-button default-button-2"
                                href="{{url('causes_of_child_trafficking')}}">Read More <i
                                    class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="blog-card">
                        <div class="blog-img-area">
                            <a href="{{url('effect_of_bullying')}}"><img
                                    src="{{asset('assets/website/assets/images/article/mental.JPEG')}}"
                                    style="height: 356px !important;width:356px !important" alt="image"></a>

                        </div>
                        <div class="blog-text-area">
                            <div class="blog-date">
                                <ul>
                                    <li><i class="far fa-user-circle"></i> By <span>Admin</span>
                                    </li>
                                </ul>
                            </div>
                            <h4><a href="{{url('effect_of_bullying')}}">Effects OF Bullying on Mental Health

                                </a></h4>
                            <a class="default-button default-button-2" href="{{url('effect_of_bullying')}}">Read More <i
                                    class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact ptb-100" id="contact">
    <div class="container ">
        <div class="row ">

            <div class="col-lg-12 ">
                <div class="contact-card-area m-auto">
                    <div class="default-section-title">
                        <h3 class="text-center">Contact us</h3>
                        <hr class="bg-light">
                        <p>Our contact</p>
                    </div>
                    <div class="contact-card">
                        <h4><i class="fas fa-map-marker-alt"></i> Address: </h4>
                        <p><span>BSS217A Banex Plaza, Aminu kano Crescent Wuse II, Abuja</span></p>
                    </div>
                    <div class="contact-card">
                        <h4><i class="fas fa-envelope"></i> Email: </h4>
                        <p><a href="mailto:info.creatingstarsconcept@gmail.com"><span class="__cf_email__"
                                    data-cfemail="f39b969f9f9cb3949f9a879681dd909c9e">info.creatingstarsconcept@gmail.com</span></a>
                        </p>
                    </div>
                    <div class="contact-card">
                        <h4><i class="fas fa-phone"></i> Call: </h4>
                        <p><a href="tel:09019603025">09019603025</a></p>
                    </div>
                    <div class="contact-card">
                        <h4>Socials:</h4>
                        <ul>
                            <div class="row"><a href="https://www.facebook.com/" target="_blank"><i
                                        class="fab fa-facebook-f text-light "></i><span class="ps-2">Creating Stars
                                        Concept</span></a></div>
                            <div class="row"><a href="https://www.instagram.com/creatingstarsconcept" target="_blank"><i
                                        class="fab fa-instagram text-light "></i><span
                                        class="ps-2">creatingstarsconcept</span></a>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



{{-- <section class="partner">
    <div class="container">
        <div class="partner-slider-area owl-carousel">
            <div class="brand-logo">
                <img class="white-theme-p" src="{{asset('assets/website/assets/images/brand/star.png')}}" alt="image">
            </div>
            <div class="brand-logo">
                <img class="white-theme-p" src="{{asset('assets/website/assets/images/brand/star.png')}}" alt="image">
                <img class="dark-theme-p" src="{{asset('assets/website/assets/images/brand/star.png')}}" alt="image">
            </div>
            <div class="brand-logo">
                <img class="white-theme-p" src="{{asset('assets/website/assets/images/brand/star.png')}}" alt="image">
                <img class="dark-theme-p" src="{{asset('assets/website/assets/images/brand/br3-2.png')}}" alt="image">
            </div>
            <div class="brand-logo">
                <img class="white-theme-p" src="{{asset('assets/website/assets/images/brand/br4.png')}}" alt="image">
                <img class="dark-theme-p" src="{{asset('assets/website/assets/images/brand/br4-2.png')}}" alt="image">
            </div>
            <div class="brand-logo">
                <img class="white-theme-p" src="{{asset('assets/website/assets/images/brand/star.png')}}" alt="image">
                <img class="dark-theme-p" src="{{asset('assets/website/assets/images/brand/star.png')}}" alt="image">
            </div>
        </div>
    </div>
</section> --}}

@endsection