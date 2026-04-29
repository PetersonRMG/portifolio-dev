@php
    $bgteam = asset('peterson/img/home-1/team/bg.jpg');
@endphp



<!-- Team Section Start -->
<section class="team-section section-padding fix bg-cover" style="background-image: url('{{ $bgteam }}')">
    <div class="container">
        <div class="team-wrapper">
            <div class="row g-4">
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="team-left-content">
                        <div class="section-title mb-0">
                            <span class="sub-title style-2 text-white wow fadeInUp">
                                <img src="{{ asset('peterson/img/home-1/hero/setting.png') }}" alt="img">
                                NOSSA EQUIPE
                            </span>
                            <h2 class="text-white text-anim">
                                Profissionais <br>
                                Especializados.
                            </h2>
                        </div>
                        <p class="text">
                            Contamos com especialistas preparados para cuidar da contabilidade da sua empresa com
                            segurança e eficiência.
                        </p>
                        <a href="team-details.html" class="theme-btn">
                            Ver equipe <i class="fa-solid fa-arrow-up-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 tp_fade_anim" data-delay=".3" data-fade-from="left">
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
                                <a href="team-details.html">Ricardo Alves</a>
                            </h3>
                            <p>Contador</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 tp_fade_anim" data-delay=".5" data-fade-from="left">
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
                                <a href="team-details.html">Juliana Martins</a>
                            </h3>
                            <p>Consultora Contábil</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 tp_fade_anim" data-delay=".7" data-fade-from="left">
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
                                <a href="team-details.html">Bruno Santos</a>
                            </h3>
                            <p>Analista Fiscal</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
