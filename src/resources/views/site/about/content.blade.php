@php
    $bgabout = asset('peterson/img/breadcrumb.jpg');
@endphp

<!-- Breadcrumb Section Start -->
<div class="breadcrumb-wrapper bg-cover" style="background-image: url('{{$bgabout}}');">
    <div class="container">
        <div class="page-heading">
            <div class="breadcrumb-sub-title">
                <h1 class="text-white wow fadeInUp" data-wow-delay=".3s">About us</h1>
            </div>
            <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                <li>
                    <a href="index.html">
                        <i class="fa-solid fa-house"></i> Home
                    </a>
                </li>
                <li>
                    /
                </li>
                <li>
                    About us
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- About Section Start -->
<section class="about-section section-padding fix">
    <div class="container">
        <div class="section-title">
            <span class="sub-title mb-0">
                <img src="{{ asset('peterson/img/home-1/hero/setting.png') }}" alt="img">
                About Our Company
            </span>
            <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim">
                Delivering Innovative IT solutions That <br> Empower In Businesses Togrow For <br>
                Connect And Succeed In The Digital <br> Era And Unwavering.
            </h2>
        </div>
        <div class="about-wrapper">
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="about-image">
                        <img src="{{ asset('peterson/img/home-1/about.jpg') }}" alt="img"
                            class="reveal">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="about-content">
                        <div class="about-item">
                            <div class="count-item">
                                <h2><span class="count">30</span><sup>+</sup></h2>
                                <h5>
                                    Personalization at seems <br> ultimate scale.
                                </h5>
                            </div>
                            <div class="content-box text-anims">
                                <p>
                                    IT solutions that empower businesses to thrive in fast-changing
                                    digital world. With <span>over a decade</span> of experience, team
                                    combine technology, strategy, and creativity to build systems that
                                    drive growth an efficiency. From IT consulting.
                                </p>
                                <p>
                                    <span>IT solutions</span> that empower businesses to thrive in
                                    fast-changing digital world. With over a decade of experience, team
                                    combine technology, strategy, and build.
                                </p>
                                <a href="about.html" class="theme-btn">
                                    Know more us <i class="fa-solid fa-arrow-up-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Section Start -->
<section class="team-section section-padding fix bg-cover"
    style="background-image: url(assets/img/home-1/team/bg.jpg);">
    <div class="container">
        <div class="team-wrapper">
            <div class="row g-4">
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="team-left-content">
                        <div class="section-title mb-0">
                            <span class="sub-title style-2 text-white wow fadeInUp">
                                <img src="{{ asset('peterson/img/home-1/hero/setting.png') }}"
                                    alt="img">
                                OUR EXPERT TEAM
                            </span>
                            <h2 class="text-white text-anim">
                                Meet Expert <br>
                                Team.
                            </h2>
                        </div>
                        <p class="text">
                            Businesses to thrive in changing digital world. With over a decade.
                        </p>
                        <a href="team-details.html" class="theme-btn">
                            More members <i class="fa-solid fa-arrow-up-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 tp_fade_anim" data-delay=".3"
                    data-fade-from="left">
                    <div class="team-card-item">
                        <div class="team-image">
                            <img src="{{ asset('peterson/img/home-1/team/01.jpg') }}" alt="img">
                            <div class="social-icon">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3>
                                <a href="team-details.html">Ronald Richards</a>
                            </h3>
                            <p>Brand Manager</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 tp_fade_anim" data-delay=".5"
                    data-fade-from="left">
                    <div class="team-card-item">
                        <div class="team-image">
                            <img src="{{ asset('peterson/img/home-1/team/02.jpg') }}" alt="img">
                            <div class="social-icon">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3>
                                <a href="team-details.html">Esther Howard</a>
                            </h3>
                            <p>Co. founder</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 tp_fade_anim" data-delay=".7"
                    data-fade-from="left">
                    <div class="team-card-item">
                        <div class="team-image">
                            <img src="{{ asset('peterson/img/home-1/team/03.jpg') }}" alt="img">
                            <div class="social-icon">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3>
                                <a href="team-details.html">Theresa Webb</a>
                            </h3>
                            <p>ui-ux designer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonial Section Start -->
<section class="testimonial-section section-padding fix pb-0">
    <div class="array-button">
        <button class="array-prev"><i class="fa-solid fa-chevron-left"></i></button>
        <button class="array-next"><i class="fa-solid fa-chevron-right"></i></button>
    </div>
    <div class="container">
        <div class="section-title text-center">
            <span class="sub-title wow fadeInUp">
                <img src="{{ asset('peterson/img/home-1/hero/setting.png') }}" alt="img">
                CLIENT TESTIMONIALS
            </span>
            <h2 class="text-anim">
                Client Experiences Inspire <br>
                Business Trust.
            </h2>
        </div>
        <div class="swiper testimonial-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="testimonial-box-item">
                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <p>
                            “Businesses to thrive in changing digital world. With over a decade systems
                            that drive growth an efficiency. From IT consulting. Businesses to thrive in
                            changing digital world. With over a decade systems that drive.”
                        </p>
                        <div class="client-info-item">
                            <div class="info-item">
                                <img src="{{ asset('peterson/img/home-1/client-1.jpg') }}"
                                    alt="img">
                                <div class="content">
                                    <h4>Dianne Russell</h4>
                                    <span>Brand Manager</span>
                                </div>
                            </div>
                            <div class="logo-image">
                                <img src="{{ asset('peterson/img/home-1/brand/brand-3.png') }}"
                                    alt="img">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-box-item">
                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <p>
                            “Businesses to thrive in changing digital world. With over a decade systems
                            that drive growth an efficiency. From IT consulting. Businesses to thrive in
                            changing digital world. With over a decade systems that drive.”
                        </p>
                        <div class="client-info-item">
                            <div class="info-item">
                                <img src="{{ asset('peterson/img/home-1/client.jpg') }}"
                                    alt="img">
                                <div class="content">
                                    <h4>Darlene Robertson</h4>
                                    <span>Brand Manager</span>
                                </div>
                            </div>
                            <div class="logo-image">
                                <img src="{{ asset('peterson/img/home-1/brand/brand-5.png') }}"
                                    alt="img">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-box-item">
                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <p>
                            “Businesses to thrive in changing digital world. With over a decade systems
                            that drive growth an efficiency. From IT consulting. Businesses to thrive in
                            changing digital world. With over a decade systems that drive.”
                        </p>
                        <div class="client-info-item">
                            <div class="info-item">
                                <img src="{{ asset('peterson/img/home-1/client-1.jpg') }}"
                                    alt="img">
                                <div class="content">
                                    <h4>Dianne Russell</h4>
                                    <span>Brand Manager</span>
                                </div>
                            </div>
                            <div class="logo-image">
                                <img src="{{ asset('peterson/img/home-1/brand/brand-3.png') }}"
                                    alt="img">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-box-item">
                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <p>
                            “Businesses to thrive in changing digital world. With over a decade systems
                            that drive growth an efficiency. From IT consulting. Businesses to thrive in
                            changing digital world. With over a decade systems that drive.”
                        </p>
                        <div class="client-info-item">
                            <div class="info-item">
                                <img src="{{ asset('peterson/img/home-1/client.jpg') }}"
                                    alt="img">
                                <div class="content">
                                    <h4>Darlene Robertson</h4>
                                    <span>Brand Manager</span>
                                </div>
                            </div>
                            <div class="logo-image">
                                <img src="{{ asset('peterson/img/home-1/brand/brand-5.png') }}"
                                    alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-dot">
            <div class="dot"></div>
        </div>
    </div>
</section>

<!-- Faq Section Start -->
<section class="faq-section fix section-padding pb-0">
    <div class="container">
        <div class="section-title text-center">
            <span class="sub-title wow fadeInUp">
                <img src="{{ asset('peterson/img/home-1/hero/setting.png') }}" alt="img">
                Frequently Asked Questions
            </span>
            <h2 class="text-anim">
                Our Stream Process <br>
                For Success.
            </h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="faq-items">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">
                                    1. What services does an IT solutions company provide?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="headingOne" data-bs-parent="#accordionExample"
                                role="region">
                                <div class="accordion-body">
                                    <p>
                                        IT solution companies offer services like software development,
                                        website design, cloud solutions, cybersecurity, IT consulting,
                                        network setup, server management, and ongoing technical support.
                                        IT solution companies offer services like software development,
                                        website design, cloud solutions, cybersecurity, IT consulting,
                                        network setup, server management, and ongoing technical support.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay=".5s">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                    aria-expanded="false" aria-controls="collapseTwo">
                                    2. Why does my business need IT support?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="headingTwo" data-bs-parent="#accordionExample"
                                role="region">
                                <div class="accordion-body">
                                    <p>
                                        IT solution companies offer services like software development,
                                        website design, cloud solutions, cybersecurity, IT consulting,
                                        network setup, server management, and ongoing technical support.
                                        IT solution companies offer services like software development,
                                        website design, cloud solutions, cybersecurity, IT consulting,
                                        network setup, server management, and ongoing technical support.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay=".7s">
                            <h2 class="accordion-header" id="headingthree">
                                <button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapsethree"
                                    aria-expanded="false" aria-controls="collapsethree">
                                    3. How can IT solutions improve my business productivity?
                                </button>
                            </h2>
                            <div id="collapsethree" class="accordion-collapse collapse"
                                aria-labelledby="headingthree" data-bs-parent="#accordionExample"
                                role="region">
                                <div class="accordion-body">
                                    <p>
                                        IT solution companies offer services like software development,
                                        website design, cloud solutions, cybersecurity, IT consulting,
                                        network setup, server management, and ongoing technical support.
                                        IT solution companies offer services like software development,
                                        website design, cloud solutions, cybersecurity, IT consulting,
                                        network setup, server management, and ongoing technical support.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
                            <h2 class="accordion-header" id="headingfour">
                                <button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapsefour"
                                    aria-expanded="false" aria-controls="collapsefour">
                                    4. What is cloud computing, and how can it help my business?
                                </button>
                            </h2>
                            <div id="collapsefour" class="accordion-collapse collapse"
                                aria-labelledby="headingfour" data-bs-parent="#accordionExample"
                                role="region">
                                <div class="accordion-body">
                                    <p>
                                        IT solution companies offer services like software development,
                                        website design, cloud solutions, cybersecurity, IT consulting,
                                        network setup, server management, and ongoing technical support.
                                        IT solution companies offer services like software development,
                                        website design, cloud solutions, cybersecurity, IT consulting,
                                        network setup, server management, and ongoing technical support.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-0 wow fadeInUp" data-wow-delay=".3s">
                            <h2 class="accordion-header" id="headingfive">
                                <button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapsefive"
                                    aria-expanded="false" aria-controls="collapsefive">
                                    5. How do you protect my business from cyber threats?
                                </button>
                            </h2>
                            <div id="collapsefive" class="accordion-collapse collapse"
                                aria-labelledby="headingfive" data-bs-parent="#accordionExample"
                                role="region">
                                <div class="accordion-body">
                                    <p>
                                        IT solution companies offer services like software development,
                                        website design, cloud solutions, cybersecurity, IT consulting,
                                        network setup, server management, and ongoing technical support.
                                        IT solution companies offer services like software development,
                                        website design, cloud solutions, cybersecurity, IT consulting,
                                        network setup, server management, and ongoing technical support.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Brand Section Start -->
<div class="brand-section section-padding fix mt-0 mb-0">
    <div class="swiper brand-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="brand-box-1">
                    <span class="brand-img-1">
                        <img src="{{ asset('peterson/img/home-1/brand/brand-1.png') }}"
                            alt="img">
                    </span>
                    <span class="brand-img-1">
                        <img src="{{ asset('peterson/img/home-1/brand/brand-1.png') }}"
                            alt="img">
                    </span>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="brand-box-1">
                    <span class="brand-img-1">
                        <img src="{{ asset('peterson/img/home-1/brand/brand-2.png') }}"
                            alt="img">
                    </span>
                    <span class="brand-img-1">
                        <img src="{{ asset('peterson/img/home-1/brand/brand-2.png') }}"
                            alt="img">
                    </span>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="brand-box-1">
                    <span class="brand-img-1">
                        <img src="{{ asset('peterson/img/home-1/brand/brand-3.png') }}"
                            alt="img">
                    </span>
                    <span class="brand-img-1">
                        <img src="{{ asset('peterson/img/home-1/brand/brand-3.png') }}"
                            alt="img">
                    </span>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="brand-box-1">
                    <span class="brand-img-1">
                        <img src="{{ asset('peterson/img/home-1/brand/brand-4.png') }}"
                            alt="img">
                    </span>
                    <span class="brand-img-1">
                        <img src="{{ asset('peterson/img/home-1/brand/brand-4.png') }}"
                            alt="img">
                    </span>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="brand-box-1">
                    <span class="brand-img-1">
                        <img src="{{ asset('peterson/img/home-1/brand/brand-5.png') }}"
                            alt="img">
                    </span>
                    <span class="brand-img-1">
                        <img src="{{ asset('peterson/img/home-1/brand/brand-5.png') }}"
                            alt="img">
                    </span>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="brand-box-1">
                    <span class="brand-img-1">
                        <img src="{{ asset('peterson/img/home-1/brand/brand-6.png') }}"
                            alt="img">
                    </span>
                    <span class="brand-img-1">
                        <img src="{{ asset('peterson/img/home-1/brand/brand-6.png') }}"
                            alt="img">
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
