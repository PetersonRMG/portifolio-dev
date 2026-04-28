@php
    $bghero = asset('peterson/img/home-1/hero/hero-bg.jpg');

@endphp

<!-- Hero Section Start -->
<section class="hero-section hero-1 fix bg-cover bg-dark" style="margin-top: -30px;">
    <div class="container custom-container">
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="hero-content">
                    <h6>
                        <img src="{{ asset('peterson/img/home-1/hero/setting.png') }}" alt="img">
                        ESCRITÓRIO CONTÁBIL DE CONFIANÇA
                    </h6>
                    <h1 class="text-anims">
                        Soluções contábeis inteligentes para o crescimento do seu negócio.
                    </h1>
                    <p class="wow fadeInUp" data-wow-delay=".3s">
                        Na Zirg Contabilidade, cuidamos da sua empresa com precisão, transparência e estratégia para
                        você focar no que realmente importa: crescer.
                    </p>
                    <div class="hero-btn text-anims">
                        <a href="contact.html" class="theme-btn">
                            Comece agora <i class="fa-solid fa-arrow-up-right"></i>
                        </a>
                        <a href="contact.html" class="theme-btn style-2">
                            Fale conosco <i class="fa-solid fa-arrow-up-right"></i>
                        </a>
                    </div>
                </div>
                <div class="ratting-image wow fadeInUp" data-wow-delay=".7s">
                    <img src="{{ asset('peterson/img/home-1/hero/rating.png') }}" alt="img">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hero-image">
                    <img src="{{ asset('peterson/img/home-1/hero/hero-1.jpg') }}" alt="img">
                    <div class="box float-bob-y">
                        <div class="group-image-item">
                            <div class="group-image">
                                <img src="{{ asset('peterson/img/home-1/hero/client-1.png') }}" alt="img">
                            </div>
                            <div class="group-image style-2">
                                <img src="{{ asset('peterson/img/home-1/hero/client-2.png') }}" alt="img">
                            </div>
                            <div class="group-image style-2">
                                <img src="{{ asset('peterson/img/home-1/hero/client-3.png') }}" alt="img">
                            </div>
                            <div class="icon">
                                <i class="fa-solid fa-plus"></i>
                            </div>
                        </div>
                        <h4>
                            Nossos clientes são <br> empresas em crescimento.
                        </h4>
                    </div>
                    <div class="video-circle">
                        <a href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I" class="video-btn ripple video-popup">
                            <i class="fa-solid fa-play"></i>
                        </a>
                        <div class="text-circle">
                            <img src="{{ asset('peterson/img/home-1/hero/text.png') }}" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>