@php
    $bgcontact = asset ('peterson/img/breadcrumb.jpg')
@endphp

<!-- Breadcrumb Section Start -->
<div class="breadcrumb-wrapper bg-cover" style="background-image: url('{{$bgcontact}}');">
    <div class="container">
        <div class="page-heading">
            <div class="breadcrumb-sub-title">
                <h1 class="text-white wow fadeInUp" data-wow-delay=".3s">Contact us</h1>
            </div>
            <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                <li>
                    <a href="{{route('home')}}">
                        <i class="fa-solid fa-house"></i> Home
                    </a>
                </li>
                <li>
                    /
                </li>
                <li>
                    Contact us
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- Contact Info Section Start -->
<section class="contact-info-section fix section-padding">
    <div class="container">
        <div class="row g-4">
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="contact-info-box">
                    <div class="icon">
                        <i class="fa-sharp fa-solid fa-location-dot"></i>
                    </div>
                    <div class="content">
                        <h4>Our address</h4>
                        <p>374 William S Canning Blvd, Fall River MA 2721, USA</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                <div class="contact-info-box">
                    <div class="icon">
                        <i class="fa-solid fa-phone-xmark"></i>
                    </div>
                    <div class="content">
                        <h4>Contact Us</h4>
                        <p>
                            <a class="d-block" href="tel:+86661233562">Mobile: +8 666 123-3562</a>
                            <a href="mailto:info@example.com">info@example.com</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                <div class="contact-info-box">
                    <div class="icon">
                        <i class="fa-regular fa-clock-two-thirty"></i>
                    </div>
                    <div class="content">
                        <h4>Open hour</h4>
                        <p>Mon - Sat: 9:00 - 6:00</p>
                        <p>Sunday: Closed</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section Start -->
<section class="contact-section fix section-padding pt-0">
    <div class="container">
        <div class="contact-wrapper-inner">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="contact-map">
                        {{-- <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6678.7619084840835!2d144.9618311901502!3d-37.81450084255415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642b4758afc1d%3A0x3119cc820fdfc62e!2sEnvato!5e0!3m2!1sen!2sbd!4v1641984054261!5m2!1sen!2sbd"
                            style="border:0;" allowfullscreen="" loading="lazy"></iframe> --}}
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.9994667772803!2d-46.405625099999995!3d-23.4965287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce639ca7693d27%3A0x9323bd0b45726c5!2sR.%20Monte%20Camberela%2C%2067%20-%20Sala%206%20-%20Vila%20Silva%20Teles%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2008110-260!5e0!3m2!1spt-BR!2sbr!4v1777473916440!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-box-items">
                        <h2 class="text-anim">Send Us A Message.</h2>
                        <form action="contact.php" id="contact-form" class="contact-form-box">
                            <div class="row g-4 align-items-center">
                                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                                    <div class="form-clt">
                                        <input type="text" placeholder="Full name *">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                                    <div class="form-clt">
                                        <input type="text" placeholder="Email address *">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                                    <div class="form-clt">
                                        <input type="text" placeholder="Phone number *">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                                    <div class="form-clt">
                                        <div class="form">
                                            <select class="single-select w-100">
                                                <option>Chose a option</option>
                                                <option>Digital Marketing</option>
                                                <option>Software & IT Service</option>
                                                <option>Finance & Investment</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 wow fadeInUp" data-wow-delay=".3s">
                                    <div class="form-clt">
                                        <textarea name="message" placeholder="Type your message"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 wow fadeInUp" data-wow-delay=".5s">
                                    <button type="submit" class="theme-btn wow fadeInUp"
                                        data-wow-delay=".5s">
                                        Send now <i class="fa-solid fa-arrow-up-right"></i>
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
