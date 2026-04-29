@php

    $bgservice = asset('peterson/img/breadcrumb.jpg');
    $bgcontat = asset('peterson/img/home-3/contact.jpg')
@endphp

<!-- Breadcrumb Section Start -->
<div class="breadcrumb-wrapper bg-cover" style="background-image: url('{{ $bgservice }}');">
    <div class="container">
        <div class="page-heading">
            <div class="breadcrumb-sub-title">
                <h1 class="text-white wow fadeInUp" data-wow-delay=".3s">Our services</h1>
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
                    services
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- Service Section Start -->
<section class="service-section-inner bg-white section-padding fix">
    <div class="container">
        <div class="row g-4">
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="service-box-item mt-0">
                    <div class="icon">
                        <img src="{{ asset('peterson/img/home-1/icon/01.svg') }}" alt="img">
                    </div>
                    <div class="content">
                        <h3>
                            <a href="service-details.html">Future AI innovations</a>
                        </h3>
                        <p>
                            Businesses to thrive in changing digital world. With over a decade systems that drive growth
                            an efficiency. From IT consulting.
                        </p>
                        <a href="service-details.html" class="theme-btn">
                            Learn more <i class="fa-solid fa-arrow-up-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="service-box-item mt-0">
                    <div class="icon">
                        <img src="{{ asset('peterson/img/home-1/icon/02.svg') }}" alt="img">
                    </div>
                    <div class="content">
                        <h3>
                            <a href="service-details.html">Smart tech solutions</a>
                        </h3>
                        <p>
                            Businesses to thrive in changing digital world. With over a decade systems that drive growth
                            an efficiency. From IT consulting.
                        </p>
                        <a href="service-details.html" class="theme-btn">
                            Learn more <i class="fa-solid fa-arrow-up-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="service-box-item mt-0">
                    <div class="icon">
                        <img src="{{ asset('peterson/img/home-1/icon/03.svg') }}" alt="img">
                    </div>
                    <div class="content">
                        <h3>
                            <a href="service-details.html">NextGen IT consulting</a>
                        </h3>
                        <p>
                            Businesses to thrive in changing digital world. With over a decade systems that drive growth
                            an efficiency. From IT consulting.
                        </p>
                        <a href="service-details.html" class="theme-btn">
                            Learn more <i class="fa-solid fa-arrow-up-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="service-box-item mt-0">
                    <div class="icon">
                        <img src="{{ asset('peterson/img/home-1/icon/04.svg') }}" alt="img">
                    </div>
                    <div class="content">
                        <h3>
                            <a href="service-details.html">Digital cyber security</a>
                        </h3>
                        <p>
                            Businesses to thrive in changing digital world. With over a decade systems that drive growth
                            an efficiency. From IT consulting.
                        </p>
                        <a href="service-details.html" class="theme-btn">
                            Learn more <i class="fa-solid fa-arrow-up-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="service-box-item mt-0">
                    <div class="icon">
                        <img src="{{ asset('peterson/img/home-1/icon/05.svg') }}" alt="img">
                    </div>
                    <div class="content">
                        <h3>
                            <a href="service-details.html">Modern software solution</a>
                        </h3>
                        <p>
                            Businesses to thrive in changing digital world. With over a decade systems that drive growth
                            an efficiency. From IT consulting.
                        </p>
                        <a href="service-details.html" class="theme-btn">
                            Learn more <i class="fa-solid fa-arrow-up-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="service-box-item mt-0">
                    <div class="icon">
                        <img src="{{ asset('peterson/img/home-1/icon/01.svg') }}" alt="img">
                    </div>
                    <div class="content">
                        <h3>
                            <a href="service-details.html">Smart Brand Growth</a>
                        </h3>
                        <p>
                            Businesses to thrive in changing digital world. With over a decade systems that drive growth
                            an efficiency. From IT consulting.
                        </p>
                        <a href="service-details.html" class="theme-btn">
                            Learn more <i class="fa-solid fa-arrow-up-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section Start -->
<section class="contact-section-3 section-padding fix bg-cover"
    style="background-image: url('{{$bgcontat}}');">
    <div class="container">
        <div class="contact-us-wrapper">
            <div class="row g-4">
                <div class="col-lg-5">
                    <div class="contact-content">
                        <div class="section-title mb-0">
                            <span class="sub-title text-white style-2 wow fadeInUp">
                                <img src="{{ asset('peterson/img/home-1/hero/setting.png') }}" alt="img">
                                Get in Touch
                            </span>
                            <h2 class="text-white text-anim">
                                Secure Your Business—Reach Out To Our Team Member.
                            </h2>
                        </div>
                        <div class="contact-left-item">
                            <div class="content">
                                <h4>New York</h4>
                                <h6>
                                    United States —350 Fifth Avenu <br> 21st Floor New York, NY 10118
                                </h6>
                                <h6>
                                    <a href="mailto:support@neotix.com">support@neotix.com</a>
                                </h6>
                                <h6 class="mb-0 tm-color">
                                    <a href="tel:+8666123-3562">+8 666 123-3562</a>
                                </h6>
                            </div>
                            <div class="content style-2">
                                <h4>Los Angeles</h4>
                                <h6>
                                    United States —350 Fifth Avenu <br> 21st Floor New York, NY 10118
                                </h6>
                                <h6>
                                    <a href="mailto:support@neotix.com">support@neotix.com</a>
                                </h6>
                                <h6 class="mb-0 tm-color">
                                    <a href="tel:+8666123-3562">+8 666 123-3562</a>
                                </h6>
                            </div>
                        </div>
                        <p>
                            We are a results-driven IT consulting team helping businesses unlock efficiency.
                        </p>
                        <a href="contact.html" class="link-btn">
                            Contact us
                            <i class="fa-solid fa-arrow-up-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="contact-box text-anims">
                        <form action="#" id="contact-form" class="contact-form-box">
                            <div class="row g-4 align-items-center">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-clt">
                                        <input type="text" name="name" id="name"
                                            placeholder="First name*">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-clt">
                                        <input type="text" name="name" id="name2"
                                            placeholder="Last name*">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-clt">
                                        <input type="text" name="email" id="email" placeholder="Email*">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-clt">
                                        <input type="text" name="phone" id="phone" placeholder="Phone*">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-clt">
                                        <input type="text" name="email" id="email2"
                                            placeholder="Company email*">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-clt">
                                        <textarea name="message" id="message" placeholder="Write your message*"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 wow fadeInUp" data-wow-delay=".5s">
                                    <button type="submit" class="theme-btn">
                                        Send message <i class="fa-regular fa-arrow-up-right"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
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
                        <img src="{{ asset('peterson/img/home-1/brand/brand-1.png') }}" alt="img">
                    </span>
                    <span class="brand-img-1">
                        <img src="{{ asset('peterson/img/home-1/brand/brand-1.png') }}" alt="img">
                    </span>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="brand-box-1">
                    <span class="brand-img-1">
                        <img src="{{ asset('peterson/img/home-1/brand/brand-2.png') }}" alt="img">
                    </span>
                    <span class="brand-img-1">
                        <img src="{{ asset('peterson/img/home-1/brand/brand-2.png') }}" alt="img">
                    </span>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="brand-box-1">
                    <span class="brand-img-1">
                        <img src="{{ asset('peterson/img/home-1/brand/brand-3.png') }}" alt="img">
                    </span>
                    <span class="brand-img-1">
                        <img src="{{ asset('peterson/img/home-1/brand/brand-3.png') }}" alt="img">
                    </span>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="brand-box-1">
                    <span class="brand-img-1">
                        <img src="{{ asset('peterson/img/home-1/brand/brand-4.png') }}" alt="img">
                    </span>
                    <span class="brand-img-1">
                        <img src="{{ asset('peterson/img/home-1/brand/brand-4.png') }}" alt="img">
                    </span>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="brand-box-1">
                    <span class="brand-img-1">
                        <img src="{{ asset('peterson/img/home-1/brand/brand-5.png') }}" alt="img">
                    </span>
                    <span class="brand-img-1">
                        <img src="{{ asset('peterson/img/home-1/brand/brand-5.png') }}" alt="img">
                    </span>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="brand-box-1">
                    <span class="brand-img-1">
                        <img src="{{ asset('peterson/img/home-1/brand/brand-6.png') }}" alt="img">
                    </span>
                    <span class="brand-img-1">
                        <img src="{{ asset('peterson/img/home-1/brand/brand-6.png') }}" alt="img">
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
