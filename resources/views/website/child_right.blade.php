@extends('layouts.website')
@section('head')
<style>
    label {
        color: white;
    }
</style>
@endsection
@section('content')
<section class="uni-banner">
    <div class="container">
        <div class="uni-banner-text-area mt-4">
            <h1>Child's Right</h1>
        </div>
    </div>
</section>
<section class="details-text-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-details-text-area">
                    <img class="details-main-img" src="assets/images/inner-images/bd1.jpg" alt="image">
                    <div class="bdt-text">
                        <div class="blog-date">
                            <ul>
                                <li><i class="far fa-user-circle"></i> By <a href="posted-by.html">Admin</a> </li>
                                <li><i class="far fa-comments"></i> 3 Comments</li>
                            </ul>
                        </div>
                        <h3 class="details-page-title">How Can Digital Agencies Help Your Business Growth</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            viverra maecenas accumsan lacus vel facilisis. Lorem Ipsum is simply dummy text of the
                            printg and typestting industry. Lorem Ipsum has been the industry's the 1500s, printer.</p>
                        <p>Cras mush pardon you knees up he lost his bottle it's all gone to pot faff about porkies
                            arse, barney argy-bargy cracking goal loo cheers spend a penny bugger all mate in my flat,
                            hunky cup of tea I don't want no agro. Off his nut show off show off blow.!</p>
                        <div class="blog-quote">
                            <p>Ecommerce SEO Agency NOVOS Wins ‘SEO Agency of the Year’ Twice in a Row Pastilla Received
                                Honorable Mention at the First Annual Pantheon Lightning Awards In Marketing We Trust
                                Named Financial Standard Agency of the Year.</p>
                        </div>
                        <p>Cras mush pardon you knees up he lost his bottle it's all gone to pot faff about porkies
                            arse, barney argy-bargy cracking goal loo cheers spend a penny bugger all mate in my flat,
                            hunky dory well get stuffed mate David morish bender lavatory. What a load of rubbish car
                            boot.</p>
                        <h3 class="details-page-title">Handover & Support</h3>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                            consequuntur magni dolores eos qui ratione voluptatem sequ nesciunt. Neque porro quisquam
                            est, it dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam
                            eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                        <div class="support-list">
                            <ul>
                                <li><i class="fas fa-check"></i> Product Engineering</li>
                                <li><i class="fas fa-check"></i> Page Load Details (time, size, number of requests)</li>
                                <li><i class="fas fa-check"></i> Big Data & Analytics</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="blog-text-footer mt-30 pr-20">
                    <div class="tag-area">
                        <ul>
                            <li><span>Tags:</span> </li>
                            <li><a href="category.html">Agency,</a></li>
                            <li><a href="category.html">Relation,</a></li>
                            <li><a href="category.html">Psychology</a></li>
                        </ul>
                    </div>
                    <div class="social-icons">
                        <ul>
                            <li><span>Share:</span></li>
                            <li><a href="https://www.facebook.com/" target="_blank"><i
                                        class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://www.linkedin.com/" target="_blank"><i
                                        class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/" target="_blank"><i
                                        class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="blog-details-page-form-area">
                    <div class="bd-comments details-text-area pr-20">
                        <h3 class="details-page-title">Comments (3)</h3>
                        <div class="comment-card">
                            <img src="assets/images/testimonial/tc3.jpg" alt="image">
                            <h5>Ronald Smi</h5>
                            <span>25 August 2021</span>
                            <p>The bee's knees bite your arm off bits and bobs he nicked it gosh gutted mate blimey, old
                                off his nut argy bargy vagabond buggered dropped.</p>
                            <a href="#bd-form"><i class="fas fa-share"></i> Reply</a>
                        </div>
                        <div class="comment-card cml-20">
                            <img src="assets/images/testimonial/tc2.jpg" alt="image">
                            <h5>David Makel</h5>
                            <p>The bee's knees bite your arm off bits and bobs he nicked it gosh gutted mate blimey, old
                                off his nut argy bargy vagabond buggered dropped.</p>
                            <a href="#bd-form"><i class="fas fa-share"></i> Reply</a>
                        </div>
                        <div class="comment-card">
                            <img src="assets/images/testimonial/tc4.jpg" alt="image">
                            <h5>Jemmy Makel</h5>
                            <p>The bee's knees bite your arm off bits and bobs he nicked it gosh gutted mate blimey, old
                                off his nut argy bargy vagabond buggered dropped.</p>
                            <a href="#bd-form"><i class="fas fa-share"></i> Reply</a>
                        </div>
                    </div>
                    <div class="bd-form details-text-area pr-20" id="bd-form">
                        <h3 class="details-page-title">Leave A Reply</h3>
                        <p>Your email address will not be published. Required fields are marked*.</p>
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Name*" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" placeholder="Email*" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Phone*" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Website" required>
                                </div>
                                <div class="col-md-12">
                                    <textarea rows="5" class="form-control" placeholder="Message*" required></textarea>
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Save my name, email, and
                                            website in this browser for the next time I comment.</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button class="default-button" type="submit"><span>Post A Comment <i
                                                class="fas fa-arrow-right"></i></span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sidebar-area pt-30 pl-20">
                    <div class="sidebar-card search-box">
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search Here.." required>
                                <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="sidebar-card sidebar-category mt-30">
                        <h3>Category</h3>
                        <ul>
                            <li><a class="active" href="blog-details.html"><span>Advanced Media Analytics</span> <i
                                        class="fas fa-arrow-right"></i></a></li>
                            <li><a href="blog-details.html"><span>Web Development</span> <i
                                        class="fas fa-arrow-right"></i></a></li>
                            <li><a href="blog-details.html"><span>Organic Long Term SEO</span> <i
                                        class="fas fa-arrow-right"></i></a></li>
                            <li><a href="blog-details.html"><span>Digital Marketing</span> <i
                                        class="fas fa-arrow-right"></i></a></li>
                            <li><a href="blog-details.html"><span>Management For Business</span> <i
                                        class="fas fa-arrow-right"></i></a></li>
                        </ul>
                    </div>
                    <div class="sidebar-card recent-news">
                        <h3>Recent Post</h3>
                        <div class="recent-news-card">
                            <a href="blog-details.html"><img src="assets/images/inner-images/bds1.jpg" alt="image"></a>
                            <h5><a href="blog-details.html">In Marketing We Trust Named Financial Standard Agency</a>
                            </h5>
                            <p><i class="far fa-calendar-alt"></i> 25-August-2021</p>
                        </div>
                        <div class="recent-news-card">
                            <a href="blog-details.html"><img src="assets/images/inner-images/bds2.jpg" alt="image"></a>
                            <h5><a href="blog-details.html">Crowd at SXSW 2021 – The Secret Language of Social Media</a>
                            </h5>
                            <p><i class="far fa-calendar-alt"></i> 24-August-2021</p>
                        </div>
                        <div class="recent-news-card">
                            <a href="blog-details.html"><img src="assets/images/inner-images/bds3.jpg" alt="image"></a>
                            <h5><a href="blog-details.html">The SEO Works Crowned Best SEO Agency in the UK, and
                                    More!</a></h5>
                            <p><i class="far fa-calendar-alt"></i> 21-August-2021</p>
                        </div>
                    </div>
                    <div class="sidebar-card sd-tag">
                        <h3>Tags</h3>
                        <ul>
                            <li><a href="category.html">Business</a></li>
                            <li><a href="category.html">Corporate</a></li>
                            <li><a href="category.html">Financial</a></li>
                            <li><a href="category.html">Web Development</a></li>
                            <li><a href="category.html">Web Plans</a></li>
                            <li><a href="category.html">Branding</a></li>
                            <li><a href="category.html">Marketing</a></li>
                            <li><a href="category.html">UI/UX Research</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection