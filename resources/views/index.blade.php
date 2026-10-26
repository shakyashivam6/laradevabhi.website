<x-layout>
    <!-- Homepage Hero -->
    <header class="header valign bg-img parallaxie" data-scroll-index="0" data-overlay-dark="5"
        data-background="{{ asset('img/hero-bg.jpg') }}">
        <div class="container caption">
            <div class="display-table">
                <div class="table-cell text-center">
                    <div class="image_wrap animate-box" data-animate-effect="fadeInUp"> <img
                            src="{{ asset('img/abhishek.jpg') }}" alt="Abhishek Kumar"> </div>
                    <h1 class="animate-box" data-animate-effect="fadeInUp">Abhishek Kumar</h1>
                    <div class="cd-headline clip animate-box" data-animate-effect="fadeInUp"> <span
                            class="cd-words-wrapper">
                            <b class="is-visible">Laravel Developer</b>
                            <b>Codeigniter Developer</b>
                            <!-- <b>MySQL</b> -->
                        </span> </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Boxes -->
    <section class="sterk-box-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="sterk-box-container">
                        <div class="sterk-box-img-area"><i class="et-genius"></i></div>
                        <div class="sterk-box-area">
                            <h4 class="sterk-box-heading">Creativity</h4>
                            <p>I believe creativity begins with an observation and knowledge.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="sterk-box-container">
                        <div class="sterk-box-img-area"> <i class="et-piechart"></i></div>
                        <div class="sterk-box-area">
                            <h4 class="sterk-box-heading">Inspiration</h4>
                            <p>I turn ideas into reality through code.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="sterk-box-container">
                        <div class="sterk-box-img-area"><i class="et-presentation"></i></div>
                        <div class="sterk-box-area">
                            <h4 class="sterk-box-heading">Simplicity</h4>
                            <p>I turn complex problems into simple, efficient solutions.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Me -->
    <section id="about" class="section-padding" data-scroll-index="1">
        <div class="container">
            <div class="row">
                <div class="col-md-5 animate-box" data-animate-effect="fadeInLeft">
                    <img src="{{ asset('img/abhishek_about.jpg') }}" class="mb-30" alt="About Me">
                </div>

                <div class="col-md-6 offset-md-1 animate-box" data-animate-effect="fadeInLeft">
                    <div class="title">
                        <span>About Me</span>
                        <h2>I'm Abhishek Kumar</h2>
                    </div>

                    <p><b>I turn ideas into reliable web solutions through clean and efficient code.</b></p>

                    <p>
                        I am a Web Developer specializing in Laravel and PHP, passionate about
                        building secure, scalable, and user-friendly web applications. I enjoy
                        solving complex problems, designing efficient backend systems, and
                        transforming business requirements into practical digital solutions.
                    </p>

                    <p>
                        My experience includes developing custom web applications, RESTful APIs,
                        authentication systems, and business management solutions. I continuously
                        explore new technologies and improve my skills to write better code and
                        deliver meaningful results.
                    </p>

                    <br />

                    <div class="row">
                        <div class="col-md-6">
                            <p><b>Specialization:</b> Laravel & PHP</p>
                            <p><b>Focus:</b> Backend Development</p>
                            <p><b>Experience:</b> 3+ Years</p>
                        </div>

                        <div class="col-md-6">
                            <p><b>Degree:</b> BSc. & MSc. in CS</p>
                            <p><b>Skills:</b> PHP, Laravel, CI, MySQL</p>
                            <p><b>LinkedIn:</b> <a target="_blank"
                                    href="https://www.linkedin.com/in/abhishek-shakya-406321120">My
                                    LinkedIn Profile</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    ```

    <!-- Works -->
    <section id="works" class="section-padding bg-white" data-scroll-index="2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title mb-30"> <span>Take a Look at</span>
                        <h2 class="animate-box" data-animate-effect="fadeInLeft">Creative Works</h2>
                        <p>Digital products that are human at heart.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <ul class="col list-unstyled list-inline mb-0 portfolio-menu" id="menu-filter">
                    <li class="list-inline-item"><a class="active" data-filter="*">All</a></li>
                    <li class="list-inline-item"><a class="" data-filter=".youtube">Youtube</a></li>
                    <li class="list-inline-item"><a class="" data-filter=".vimeo">Vimeo</a></li>
                    <li class="list-inline-item"><a class="" data-filter=".image">Image</a></li>
                    <li class="list-inline-item"><a class="" data-filter=".detail">Detail</a></li>
                </ul>
            </div>
            <!-- Important Note: Some functionality (ajax, iframes, etc) will not work when you're opening local file directly on your browser, the code must be running on a web server. (Example: popup text, local youtube, vimeo url links.) Source: https://dimsemenov.com/plugins/magnific-popup/ -->
            <div class="row portfolio-filter mt-3">
                <div class="col-md-4 portfolio-item youtube">
                    <a href="https://www.youtube.com/channel/UCvXqS6ruZHzkWv4XCGOHGZw" target="_blank" class="">
                        <div class="portfolio-box">
                            <div class="portfolio-img"> <img src="{{ asset('img/portfolio/02.png') }}"
                                    class="img-fluid mx-auto d-block" alt=""> </div>
                            <div class="portfolio-detail">
                                <h4 class="mb-0">Model Fashion</h4>
                                <p class="mb-3">YouTube</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 portfolio-item vimeo">
                    <a href="https://vimeo.com/462906932" class="img-zoom popup-vimeo">
                        <div class="portfolio-box">
                            <div class="portfolio-img"> <img src="{{ asset('img/portfolio/04.jpg') }}"
                                    class="img-fluid mx-auto d-block" alt=""> </div>
                            <div class="portfolio-detail">
                                <h4 class="mb-0">Cycling illos</h4>
                                <p class="mb-3">Vimeo</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 portfolio-item image">
                    <a href="{{ asset('img/portfolio/05.jpg') }}" class="img-zoom">
                        <div class="portfolio-box">
                            <div class="portfolio-img"> <img src="{{ asset('img/portfolio/05.jpg') }}"
                                    class="img-fluid mx-auto d-block" alt=""> </div>
                            <div class="portfolio-detail">
                                <h4 class="mb-0">Kinfolk Magazine</h4>
                                <p class="mb-3">Image</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 portfolio-item grid-of-images image">
                    <a href="{{ asset('img/portfolio/01.jpg') }}" class="image-popup-vertical-fit img-zoom"
                        title="House at Khlebny">
                        <div class="portfolio-box">
                            <div class="portfolio-img"> <img src="{{ asset('img/portfolio/01.jpg') }}"
                                    class="img-fluid mx-auto d-block" alt=""> </div>
                            <div class="portfolio-detail">
                                <h4 class="mb-0">House at Khlebny</h4>
                                <p class="mb-3">Image</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 portfolio-item image">
                    <a href="{{ asset('img/portfolio/03.jpg') }}" class="img-zoom" title="El Matate - Chocolate">
                        <div class="portfolio-box">
                            <div class="portfolio-img"> <img src="{{ asset('img/portfolio/03.jpg') }}"
                                    class="img-fluid mx-auto d-block" alt=""> </div>
                            <div class="portfolio-detail">
                                <h4 class="mb-0">El Matate - Chocolate</h4>
                                <p class="mb-3">Image</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 portfolio-item detail">
                    <a href="projectpage.html" class="img-zoom simple-ajax-popup-align-top">
                        <div class="portfolio-box">
                            <div class="portfolio-img"> <img src="{{ asset('img/portfolio/08.jpg') }}"
                                    class="img-fluid mx-auto d-block" alt=""> </div>
                            <div class="portfolio-detail">
                                <h4 class="mb-0">Cuyana Magazine</h4>
                                <p class="mb-3">Detail</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section id="services" class="sterk-services section-padding" data-scroll-index="3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title mb-30"> <span>What I Do</span>
                        <h2 class="animate-box" data-animate-effect="fadeInLeft">Creative Services</h2>
                        <p>I am a freelancer designer. I develop and design for costumers around the world.
                            <br />My clients are some of the most forward-looking companies in the world. Designed for
                            today, built for tomorrow.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
                    <div class="item mb-30"> <span class="icon"><i class="et-telescope"></i></span>
                        <h5>Branding</h5>
                        <ul>
                            <li>Logos</li>
                            <li>Corporate Identity</li>
                            <li>Business Cards</li>
                            <li>Packaging</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
                    <div class="item active mb-30"> <span class="icon"><i class="et-circle-compass"></i></span>
                        <h5>Development</h5>
                        <ul>
                            <li>Websites</li>
                            <li>Native Apps</li>
                            <li>WordPress</li>
                            <li>eCommerce</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 mb-30 animate-box" data-animate-effect="fadeInLeft">
                    <div class="item"> <span class="icon"><i class="et-strategy"></i></span>
                        <h5>Marketing</h5>
                        <ul>
                            <li>Strategy</li>
                            <li>SEO</li>
                            <li>Sales</li>
                            <li>Email Campaigns</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
                    <div class="item"> <span class="icon"><i class="et-piechart"></i></span>
                        <h5>Product Design</h5>
                        <ul>
                            <li>UX App Design</li>
                            <li>Corporate Identity</li>
                            <li>Business Cards</li>
                            <li>Packaging</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Reference -->
    <!-- <section id="team" class="sterk-team section-padding bg-white" data-scroll-index="4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title mb-30"> <span>Thinkers</span>
                        <h2>Collaborators</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 owl-carousel owl-theme">
                    <div class="item">
                        <div class="img"><img src="{{ asset('img/team/1.jpg') }}" alt="Andrey Rhea"></div>
                        <div class="info">
                            <h5>Andrey Rhea</h5>
                            <h6>Project Manager</h6>
                            <div class="social valign">
                                <div class="full-width"> <a href="#"><i class="ti-facebook"></i></a> <a href="#"><i
                                            class="ti-twitter"></i></a> <a href="#"><i class="ti-linkedin"></i></a>
                                    <p>andreyrhea@agency.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img"><img src="{{ asset('img/team/2.jpg') }}" alt="Julie Filip"></div>
                        <div class="info">
                            <h5>Julie Filip</h5>
                            <h6>Social Media Manager</h6>
                            <div class="social valign">
                                <div class="full-width"> <a href="#"><i class="ti-facebook"></i></a> <a href="#"><i
                                            class="ti-twitter"></i></a> <a href="#"><i class="ti-linkedin"></i></a>
                                    <p>juliefilip@agency.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img"><img src="{{ asset('img/team/3.jpg') }}" alt="Kevin Brown"></div>
                        <div class="info">
                            <h5>Kevin Brown</h5>
                            <h6>SEO Consultant</h6>
                            <div class="social valign">
                                <div class="full-width"> <a href="#"><i class="ti-facebook"></i></a> <a href="#"><i
                                            class="ti-twitter"></i></a> <a href="#"><i class="ti-linkedin"></i></a>
                                    <p>kevinbrown@agency.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img"><img src="{{ asset('img/team/4.jpg') }}" alt="James Lonan"></div>
                        <div class="info">
                            <h5>James Lonan</h5>
                            <h6>Back-End Developer</h6>
                            <div class="social valign">
                                <div class="full-width"> <a href="#"><i class="ti-facebook"></i></a> <a href="#"><i
                                            class="ti-twitter"></i></a> <a href="#"><i class="ti-linkedin"></i></a>
                                    <p>jameslonan@agency.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Testimonials -->
    <!-- <section id="testimonials" class="sterk-testimonials section-padding bg-img" data-overlay-dark="8"
        data-background="{{ asset('img/hero-bg-2.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="sterk-testimonial-say text-center">
                        <div class="owl-carousel owl-theme">
                            <div class="sterk-testimonial-item text-center"> <span class="et-quote"></span>
                                <br>
                                <h5 class="mb-30">Reviews !</h5>
                                <p>The wonderful people you work with on a day to day basis, across the entire company.
                                    Every member of the team is made to feel valued by senior management, from the most
                                    junior roles to department managers.</p>
                                <h6>Jason White, Business Inc.</h6>
                            </div>
                            <div class="sterk-testimonial-item text-center"> <span class="et-quote"></span>
                                <br>
                                <h5 class="mb-30">Reviews !</h5>
                                <p>The wonderful people you work with on a day to day basis, across the entire company.
                                    Every member of the team is made to feel valued by senior management, from the most
                                    junior roles to department managers.</p>
                                <h6>Jason White, Business Inc.</h6>
                            </div>
                            <div class="sterk-testimonial-item text-center"> <span class="et-quote"></span>
                                <br>
                                <h5 class="mb-30">Reviews !</h5>
                                <p>The wonderful people you work with on a day to day basis, across the entire company.
                                    Every member of the team is made to feel valued by senior management, from the most
                                    junior roles to department managers.</p>
                                <h6>Jason White, Business Inc.</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Blog -->
    <!-- <section id="blog" class="sterk-blog section-padding bg-white" data-scroll-index="5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title mb-30"> <span>Read</span>
                        <h2>Latest News</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        <div class="item mb-30">
                            <div class="position-re o-hidden"> <img src="{{ asset('img/blog/1.jpg') }}" alt=""> </div>
                            <div class="con"> <span class="category">
                                    <a href="#">Meeting </a> | 20.12.2026
                                </span>
                                <h5><a href="#">Vivense the interge moss</a></h5>
                            </div>
                        </div>
                        <div class="item mb-30">
                            <div class="position-re o-hidden"> <img src="{{ asset('img/blog/2.jpg') }}" alt=""> </div>
                            <div class="con"> <span class="category">
                                    <a href="#">Branding</a> | 18.12.2026
                                </span>
                                <h5><a href="#">Quality egestas the vitate</a></h5>
                            </div>
                        </div>
                        <div class="item mb-30">
                            <div class="position-re o-hidden"> <img src="{{ asset('img/blog/3.jpg') }}" alt=""> </div>
                            <div class="con"> <span class="category">
                                    <a href="#">Office</a> | 16.12.2026
                                </span>
                                <h5><a href="#">The vivamus a vivense</a></h5>
                            </div>
                        </div>
                        <div class="item mb-30">
                            <div class="position-re o-hidden"> <img src="{{ asset('img/blog/4.jpg') }}" alt=""> </div>
                            <div class="con"> <span class="category">
                                    <a href="#">Office</a> | 14.12.2026
                                </span>
                                <h5><a href="#">Ullamco vitate the inteye</a></h5>
                            </div>
                        </div>
                        <div class="item mb-30">
                            <div class="position-re o-hidden"> <img src="{{ asset('img/blog/3.jpg') }}" alt=""> </div>
                            <div class="con"> <span class="category">
                                    <a href="#">Office</a> | 12.12.2026
                                </span>
                                <h5><a href="#">Vivense the duuna daise</a></h5>
                            </div>
                        </div>
                        <div class="item mb-30">
                            <div class="position-re o-hidden"> <img src="{{ asset('img/blog/5.jpg') }}" alt=""> </div>
                            <div class="con"> <span class="category">
                                    <a href="#">Meeting</a> | 10.12.2026
                                </span>
                                <h5><a href="#">The elengerce vitate inte</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Contact -->
    <section id="contact" class="contact section-padding" data-scroll-index="6">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title"> <span>Location</span>
                        <h2 class=" animate-box" data-animate-effect="fadeInLeft">Contact Us</h2>
                    </div>
                </div>
                <div class="col-md-6 info mb-30 animate-box" data-animate-effect="fadeInLeft">
                    <p><b>STERK COMPANY INC.</b>
                        <br>Vivamus nec magna rhoncus felis faucibus printy.
                        <br>Faucibus printy nec magna rhoncus printy.
                    </p>
                    <div class="item">
                        <p><i class="ti-mobile" style="color:#dca167;margin-right:8px;"></i><b>Phone</b> : <a href="tel:+918896326943">+91 8896326943</a></p>
                    </div>
                    <div class="item">
                        <p>
                            <i class="ti-comments" style="color:#dca167;margin-right:8px;"></i><b>WhatsApp</b> :
                            <a href="https://wa.me/918896326943" target="_blank" rel="noopener noreferrer">
                                +91 8896326943
                            </a>
                        </p>
                    </div>
                    <div class="item">
                        <p><i class="ti-map-alt" style="color:#dca167;margin-right:8px;"></i><b>Address</b> : Lucknow — Uttar Pradesh India</p>
                    </div>
                    <div class="item">
                        <p><i class="ti-email" style="color:#dca167;margin-right:8px;"></i><b>Email</b> : <a href="mailto:shakya.shivam6@gmail.com">shakya.shivam6@gmail.com</a></p>
                    </div>
                </div>
                <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft" id="get_inTouch">
                    <p><b>GET IN TOUCH</b></p>
                    <form method="post" class="row">
                        @csrf
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name *" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email / Phone">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <textarea name="message" id="message" cols="30" rows="4" class="form-control"
                                    placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <button class="sterk-btn2" type="submit">Say Hello!</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Banner -->
    <section class="ready sterk-banner-padding bg-img" data-overlay-dark="5"
        data-background="{{ asset('img/hero-bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center animate-box" data-animate-effect="fadeInUp">
                        <h5 class="mb-0 subtitle"><a href="#">Do you like our work?</a></h5>
                        <h3>Let’s work together!</h3>
                        <a class="sterk-btn2" href="#get_inTouch" type="button">Get in touch</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>