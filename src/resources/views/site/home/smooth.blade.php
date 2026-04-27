@php
    $bghero = asset('peterson/img/home-1/hero/hero-bg.jpg');
    $bgcounter = asset('peterson/img/home-1/bg.jpg');
    $bgteam = asset('peterson/img/home-1/team/bg.jpg');
@endphp

<!-- Hero Section Start -->
<section class="hero-section hero-1 fix bg-cover" style="background-image: url('{{ $bghero }}');">
    <d iv class="container custom-container">
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
    </d>
</section>

<!-- Brand Section Start -->
<div class="brand-section">
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

<!-- About Section Start -->
<section class="about-section section-padding fix">
    <div class="container">
        <div class="section-title">
            <span class="sub-title mb-0">
                <img src="{{ asset('peterson/img/home-1/hero/setting.png') }}" alt="img">
                SOBRE NOSSA EMPRESA
            </span>
            <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim">
                Zirg Consultoria e Gestão Contábil
            </h2>
        </div>
        <div class="about-wrapper">
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="about-image">
                        <img src="{{ asset('peterson/img/home-1/about.jpg') }}" alt="img" class="reveal">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="about-content">
                        <div class="about-item">
                            <div class="count-item">
                                <h2><span class="count">30</span><sup>+</sup></h2>
                                <h5>
                                    Atendimento personalizado com <br> excelência e confiança.
                                </h5>
                            </div>
                            <div class="content-box text-anims">
                                <p>
                                    Soluções contábeis que ajudam empresas a crescer com segurança e organização. Com
                                    <span>anos de experiência</span>, nossa equipe une conhecimento técnico e estratégia
                                    para otimizar resultados e garantir conformidade fiscal.
                                </p>
                                <p>
                                    A <span>Zirg Contabilidade</span> atua com foco em eficiência, transparência e
                                    suporte completo, oferecendo serviços que facilitam a gestão e fortalecem o
                                    crescimento do seu negócio.
                                </p>
                                <a href="about.html" class="theme-btn">
                                    Saiba mais <i class="fa-solid fa-arrow-up-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Service Section Start -->
<section class="service-section section-padding fix">
    <div class="container">
        <div class="section-title-area">
            <div class="section-title">
                <span class="sub-title style-3 wow fadeInUp">
                    <img src="{{ asset('peterson/img/home-1/hero/setting.png') }}" alt="img">
                    NOSSOS SERVIÇOS
                </span>
                <h2 class="text-anim">
                    Soluções Contábeis <br> Para o Crescimento do Seu Negócio.
                </h2>
            </div>
            <p class="wow fadeInUp" data-wow-delay=".3s">
                Atendimento completo para empresas que buscam <br> organização, segurança e crescimento sustentável.
            </p>
            <div class="array-button wow fadeInUp" data-wow-delay=".5s">
                <button class="array-prev"><i class="fa-solid fa-chevron-left"></i></button>
                <button class="array-next"><i class="fa-solid fa-chevron-right"></i></button>
            </div>
        </div>
    </div>
    <div class="swiper service-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="service-box-item">
                    <div class="icon">
                        <img src="{{ asset('peterson/img/home-1/icon/01.svg') }}" alt="img">
                    </div>
                    <div class="content">
                        <h3>
                            <a href="service-details.html">Abertura de empresas</a>
                        </h3>
                        <p>
                            Cuidamos de todo o processo de abertura do seu negócio, garantindo rapidez, segurança e
                            enquadramento correto.
                        </p>
                        <a href="service-details.html" class="theme-btn">
                            Saiba mais <i class="fa-solid fa-arrow-up-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="service-box-item">
                    <div class="icon">
                        <img src="{{ asset('peterson/img/home-1/icon/02.svg') }}" alt="img">
                    </div>
                    <div class="content">
                        <h3>
                            <a href="service-details.html">Contabilidade empresarial</a>
                        </h3>
                        <p>
                            Gestão contábil completa para manter sua empresa organizada, regularizada e preparada para
                            crescer.
                        </p>
                        <a href="service-details.html" class="theme-btn">
                            Saiba mais <i class="fa-solid fa-arrow-up-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="service-box-item">
                    <div class="icon">
                        <img src="{{ asset('peterson/img/home-1/icon/03.svg') }}" alt="img">
                    </div>
                    <div class="content">
                        <h3>
                            <a href="service-details.html">Consultoria tributária</a>
                        </h3>
                        <p>
                            Planejamento estratégico para reduzir impostos de forma legal e melhorar os resultados da
                            sua empresa.
                        </p>
                        <a href="service-details.html" class="theme-btn">
                            Saiba mais <i class="fa-solid fa-arrow-up-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="service-box-item">
                    <div class="icon">
                        <img src="{{ asset('peterson/img/home-1/icon/04.svg') }}" alt="img">
                    </div>
                    <div class="content">
                        <h3>
                            <a href="service-details.html">Departamento fiscal</a>
                        </h3>
                        <p>
                            Apuração de impostos, envio de obrigações e controle fiscal para manter sua empresa em dia
                            com a lei.
                        </p>
                        <a href="service-details.html" class="theme-btn">
                            Saiba mais <i class="fa-solid fa-arrow-up-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="service-box-item">
                    <div class="icon">
                        <img src="{{ asset('peterson/img/home-1/icon/05.svg') }}" alt="img">
                    </div>
                    <div class="content">
                        <h3>
                            <a href="service-details.html">Departamento pessoal</a>
                        </h3>
                        <p>
                            Gestão completa de folha de pagamento, admissões, demissões e obrigações trabalhistas.
                        </p>
                        <a href="service-details.html" class="theme-btn">
                            Saiba mais <i class="fa-solid fa-arrow-up-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-dot">
            <div class="dot"></div>
        </div>
    </div>
</section>

<!-- Project Section Start -->
<section class="project-section section-padding fix">
    <div class="container">
        <div class="section-title text-center">
            <span class="sub-title wow fadeInUp">
                <img src="{{ asset('peterson/img/home-1/hero/setting.png') }}" alt="img">
                Nossos Serviços
            </span>
            <h2 class="text-anim">
                Soluções contábeis que geram resultados reais
            </h2>
        </div>
        <div class="project-box-wrapper project-panel-area">
            <div class="project-card-items project-panel">
                <h4>01.</h4>
                <div class="project-content">
                    <h3>
                        <a href="project-details.html">Abertura de empresas</a>
                    </h3>
                    <p>
                        Cuidamos de todo o processo de abertura do seu negócio com agilidade e segurança. Da
                        documentação à legalização, ajudamos você a começar do jeito certo.
                    </p>
                    <a href="project-details.html" class="theme-btn">
                        Saiba mais <i class="fa-solid fa-arrow-up-right"></i>
                    </a>
                    <ul class="list">
                        <li>
                            <a href="project-details">CNPJ</a>
                            <a href="project-details">MEI</a>
                            <a href="project-details">Simples</a>
                            <a href="project-details">Legalização</a>
                        </li>
                    </ul>
                </div>
                <div class="project-thumb scale">
                    <img src="{{ asset('peterson/img/home-1/project/01.jpg') }}" alt="img">
                </div>
            </div>
            <div class="project-card-items project-panel">
                <h4>02.</h4>
                <div class="project-content">
                    <h3>
                        <a href="project-details.html">Gestão contábil</a>
                    </h3>
                    <p>
                        Organizamos e gerenciamos toda a contabilidade da sua empresa com transparência e precisão,
                        garantindo conformidade e controle financeiro.
                    </p>
                    <a href="project-details.html" class="theme-btn">
                        Saiba mais <i class="fa-solid fa-arrow-up-right"></i>
                    </a>
                    <ul class="list">
                        <li>
                            <a href="project-details">Fiscal</a>
                            <a href="project-details">Tributário</a>
                            <a href="project-details">Folha</a>
                            <a href="project-details">Relatórios</a>
                        </li>
                    </ul>
                </div>
                <div class="project-thumb scale">
                    <img src="{{ asset('peterson/img/home-1/project/02.jpg') }}" alt="img">
                </div>
            </div>
            <div class="project-card-items mb-0 project-panel">
                <h4>03.</h4>
                <div class="project-content">
                    <h3>
                        <a href="project-details.html">Consultoria estratégica</a>
                    </h3>
                    <p>
                        Ajudamos sua empresa a crescer com planejamento financeiro e estratégias contábeis inteligentes,
                        reduzindo custos e aumentando resultados. Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Harum non consectetur sit velit sed? Laborum id dicta velit incidunt porro fuga maiores
                        nostrum blanditiis, voluptas odio? Consectetur at numquam necessitatibus.
                    </p>
                    <a href="project-details.html" class="theme-btn">
                        Saiba mais <i class="fa-solid fa-arrow-up-right"></i>
                    </a>
                    <ul class="list">
                        <li>
                            <a href="project-details">Planejamento</a>
                            <a href="project-details">Custos</a>
                            <a href="project-details">Lucro</a>
                            <a href="project-details">Estratégia</a>
                        </li>
                    </ul>
                </div>
                <div class="project-thumb scale">
                    <img src="{{ asset('peterson/img/home-1/project/03.jpg') }}" alt="img">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Counter Section Start -->
<section class="counter-section section-padding fix bg-cover" style="background-image: url('{{ $bgcounter }}')">
    <div class="container">
        <div class="counter-wrapper">
            <div class="row g-4">

                <div class="col-xl-6 col-lg-7">
                    <div class="row g-4">

                        <div class="col-lg-6 col-md-6 text-anims">
                            <div class="counter-box-item">
                                <div class="counter-top-item">
                                    <h2><span class="count">99</span>%</h2>
                                    <div class="top-right">
                                        <span></span><span></span><span></span>
                                    </div>
                                </div>
                                <h4>Satisfação dos clientes.</h4>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 text-anims">
                            <div class="counter-box-item">
                                <div class="counter-top-item">
                                    <h2><span class="count">1</span>M+</h2>
                                    <div class="top-right">
                                        <span></span><span></span><span></span>
                                    </div>
                                </div>
                                <h4>Processos contábeis realizados.</h4>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 text-anims">
                            <div class="counter-box-item">
                                <div class="counter-top-item">
                                    <h2><span class="count">800</span>+</h2>
                                    <div class="top-right">
                                        <span></span><span></span><span></span>
                                    </div>
                                </div>
                                <h4>Empresas atendidas.</h4>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 text-anims">
                            <div class="counter-box-item">
                                <div class="counter-top-item">
                                    <h2><span class="count">247</span>+</h2>
                                    <div class="top-right">
                                        <span></span><span></span><span></span>
                                    </div>
                                </div>
                                <h4>Atendimentos realizados.</h4>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-xl-6 col-lg-5">
                    <div class="counter-content">

                        <div class="section-title mb-0">
                            <span class="sub-title style-2 text-white wow fadeInUp">
                                <img src="{{ asset('peterson/img/home-1/hero/setting.png') }}" alt="img">
                                Contabilidade estratégica
                            </span>
                            <h2 class="text-white text-anim">
                                Soluções completas para sua empresa
                            </h2>
                        </div>

                        <p class="text">
                            A Zirg Contabilidade oferece suporte especializado para manter seu negócio regularizado,
                            organizado e pronto para crescer com segurança.
                        </p>

                        <div class="video-circle">
                            <a href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I"
                                class="video-btn ripple video-popup">
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
    </div>

    <!-- segunda seção -->
    <div class="feature-top-item">
        <div class="container">

            <div class="section-title-area">
                <div class="section-title mb-0">
                    <span class="sub-title style-2 text-white mb-0">
                        <img src="{{ asset('peterson/img/home-1/hero/setting.png') }}" alt="img">
                        Crescimento empresarial
                    </span>
                </div>

                <div class="section-right">
                    <div class="section-title mb-0">
                        <h2 class="text-white">
                            Organize, regularize e <br> fortaleça sua empresa
                        </h2>
                        <p class="mt-3">
                            Com a Zirg, você tem apoio contábil completo para tomar decisões seguras e crescer de forma
                            sustentável.
                        </p>
                    </div>
                    <a href="contact.html" class="theme-btn">
                        Fale conosco <i class="fa-solid fa-arrow-up-right"></i>
                    </a>
                </div>
            </div>

        </div>

        <div class="swiper box-slider">
            <div class="swiper-wrapper slide-transtion">
                <div class="swiper-slide brand-slide-element">
                    <div class="feature-icon-item">
                        <img src="{{ asset('peterson/img/home-1/feature/01.png') }}" alt="img">
                    </div>
                </div>
                <div class="swiper-slide brand-slide-element">
                    <div class="feature-icon-item">
                        <img src="{{ asset('peterson/img/home-1/feature/02.png') }}" alt="img">
                    </div>
                </div>
                <div class="swiper-slide brand-slide-element">
                    <div class="feature-icon-item">
                        <img src="{{ asset('peterson/img/home-1/feature/03.png') }}" alt="img">
                    </div>
                </div>
                <div class="swiper-slide brand-slide-element">
                    <div class="feature-icon-item">
                        <img src="{{ asset('peterson/img/home-1/feature/04.png') }}" alt="img">
                    </div>
                </div>
                <div class="swiper-slide brand-slide-element">
                    <div class="feature-icon-item">
                        <img src="{{ asset('peterson/img/home-1/feature/05.png') }}" alt="img">
                    </div>
                </div>
                <div class="swiper-slide brand-slide-element">
                    <div class="feature-icon-item">
                        <img src="{{ asset('peterson/img/home-1/feature/06.png') }}" alt="img">
                    </div>
                </div>
                <div class="swiper-slide brand-slide-element">
                    <div class="feature-icon-item">
                        <img src="{{ asset('peterson/img/home-1/feature/07.png') }}" alt="img">
                    </div>
                </div>
                <div class="swiper-slide brand-slide-element">
                    <div class="feature-icon-item">
                        <img src="{{ asset('peterson/img/home-1/feature/08.png') }}" alt="img">
                    </div>
                </div>
                <div class="swiper-slide brand-slide-element">
                    <div class="feature-icon-item">
                        <img src="{{ asset('peterson/img/home-1/feature/09.png') }}" alt="img">
                    </div>
                </div>
                <div class="swiper-slide brand-slide-element">
                    <div class="feature-icon-item">
                        <img src="{{ asset('peterson/img/home-1/feature/10.png') }}" alt="img">
                    </div>
                </div>
                <div class="swiper-slide brand-slide-element">
                    <div class="feature-icon-item">
                        <img src="{{ asset('peterson/img/home-1/feature/11.png') }}" alt="img">
                    </div>
                </div>
                <div class="swiper-slide brand-slide-element">
                    <div class="feature-icon-item">
                        <img src="{{ asset('peterson/img/home-1/feature/12.png') }}" alt="img">
                    </div>
                </div>
            </div>
        </div>
        <div dir="rtl" class="swiper box-slider-2 mt-3">
            <div class="swiper-wrapper slide-transtion">
                <div class="swiper-slide brand-slide-element">
                    <div class="feature-icon-item">
                        <img src="{{ asset('peterson/img/home-1/feature/10.png') }}" alt="img">
                    </div>
                </div>
                <div class="swiper-slide brand-slide-element">
                    <div class="feature-icon-item">
                        <img src="{{ asset('peterson/img/home-1/feature/11.png') }}" alt="img">
                    </div>
                </div>
                <div class="swiper-slide brand-slide-element">
                    <div class="feature-icon-item">
                        <img src="{{ asset('peterson/img/home-1/feature/08.png') }}" alt="img">
                    </div>
                </div>
                <div class="swiper-slide brand-slide-element">
                    <div class="feature-icon-item">
                        <img src="{{ asset('peterson/img/home-1/feature/13.png') }}" alt="img">
                    </div>
                </div>
                <div class="swiper-slide brand-slide-element">
                    <div class="feature-icon-item">
                        <img src="{{ asset('peterson/img/home-1/feature/12.png') }}" alt="img">
                    </div>
                </div>
                <div class="swiper-slide brand-slide-element">
                    <div class="feature-icon-item">
                        <img src="{{ asset('peterson/img/home-1/feature/14.png') }}" alt="img">
                    </div>
                </div>
                <div class="swiper-slide brand-slide-element">
                    <div class="feature-icon-item">
                        <img src="{{ asset('peterson/img/home-1/feature/15.png') }}" alt="img">
                    </div>
                </div>
                <div class="swiper-slide brand-slide-element">
                    <div class="feature-icon-item">
                        <img src="{{ asset('peterson/img/home-1/feature/02.png') }}" alt="img">
                    </div>
                </div>
                <div class="swiper-slide brand-slide-element">
                    <div class="feature-icon-item">
                        <img src="{{ asset('peterson/img/home-1/feature/16.png') }}" alt="img">
                    </div>
                </div>
                <div class="swiper-slide brand-slide-element">
                    <div class="feature-icon-item">
                        <img src="{{ asset('peterson/img/home-1/feature/01.png') }}" alt="img">
                    </div>
                </div>
                <div class="swiper-slide brand-slide-element">
                    <div class="feature-icon-item">
                        <img src="{{ asset('peterson/img/home-1/feature/17.png') }}" alt="img">
                    </div>
                </div>
                <div class="swiper-slide brand-slide-element">
                    <div class="feature-icon-item">
                        <img src="{{ asset('peterson/img/home-1/feature/04.png') }}" alt="img">
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Counter Section duplicada -->
{{-- <section class="counter-section section-padding fix bg-cover" style="background-image: url('{{$bgcounter}}')">
    <div class="container">
        <div class="counter-wrapper">
            <div class="row g-4">
                <div class="col-xl-6 col-lg-7">
                    <div class="row g-4">
                        <div class="col-lg-6 col-md-6 text-anims">
                            <div class="counter-box-item">
                                <h4>Satisfação dos clientes.</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 text-anims">
                            <div class="counter-box-item">
                                <h4>Serviços contábeis realizados.</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 text-anims">
                            <div class="counter-box-item">
                                <h4>Empresas atendidas.</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 text-anims">
                            <div class="counter-box-item">
                                <h4>Suporte especializado.</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-5">
                    <div class="counter-content">
                        <div class="section-title mb-0">
                            <span class="sub-title style-2 text-white wow fadeInUp">
                                <img src="{{asset('peterson/img/home-1/hero/setting.png')}}" alt="img">
                                Soluções contábeis
                            </span>
                            <h2 class="text-white text-anim">
                                A solução está aqui
                            </h2>
                        </div>
                        <p class="text">
                            Conte com a Zirg para cuidar da sua contabilidade com eficiência, segurança e transparência.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

<!-- Testimonial Section Start -->
<section class="testimonial-section section-padding fix">
    <div class="array-button">
        <button class="array-prev"><i class="fa-solid fa-chevron-left"></i></button>
        <button class="array-next"><i class="fa-solid fa-chevron-right"></i></button>
    </div>
    <div class="container">
        <div class="section-title text-center">
            <span class="sub-title wow fadeInUp">
                <img src="{{ asset('peterson/img/home-1/hero/setting.png') }}" alt="img">
                DEPOIMENTOS DE CLIENTES
            </span>
            <h2 class="text-anim">
                Experiências reais que <br>
                geram confiança.
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
                            “A Zirg Contabilidade trouxe organização e segurança para nossa empresa. Hoje temos controle
                            financeiro e tranquilidade para crescer com confiança.”
                        </p>
                        <div class="client-info-item">
                            <div class="info-item">
                                <img src="{{ asset('peterson/img/home-1/client-1.jpg') }}" alt="img">
                                <div class="content">
                                    <h4>Marcos Silva</h4>
                                    <span>Empresário</span>
                                </div>
                            </div>
                            <div class="logo-image">
                                <img src="{{ asset('peterson/img/home-1/brand/brand-3.png') }}" alt="img">
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
                            “Profissionais extremamente atenciosos e competentes. A Zirg nos ajudou a reduzir custos e
                            manter tudo regularizado sem complicações.”
                        </p>
                        <div class="client-info-item">
                            <div class="info-item">
                                <img src="{{ asset('peterson/img/home-1/client.jpg') }}" alt="img">
                                <div class="content">
                                    <h4>Ana Souza</h4>
                                    <span>Comerciante</span>
                                </div>
                            </div>
                            <div class="logo-image">
                                <img src="{{ asset('peterson/img/home-1/brand/brand-5.png') }}" alt="img">
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
                            “Com a Zirg Contabilidade, conseguimos focar no crescimento do negócio enquanto eles cuidam
                            de toda parte fiscal e contábil.”
                        </p>
                        <div class="client-info-item">
                            <div class="info-item">
                                <img src="{{ asset('peterson/img/home-1/client-1.jpg') }}" alt="img">
                                <div class="content">
                                    <h4>Carlos Oliveira</h4>
                                    <span>Empreendedor</span>
                                </div>
                            </div>
                            <div class="logo-image">
                                <img src="{{ asset('peterson/img/home-1/brand/brand-3.png') }}" alt="img">
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
                            “Atendimento rápido e eficiente. Recomendo a Zirg para qualquer empresa que busca segurança
                            e profissionalismo na contabilidade.”
                        </p>
                        <div class="client-info-item">
                            <div class="info-item">
                                <img src="{{ asset('peterson/img/home-1/client.jpg') }}" alt="img">
                                <div class="content">
                                    <h4>Fernanda Lima</h4>
                                    <span>Gestora Financeira</span>
                                </div>
                            </div>
                            <div class="logo-image">
                                <img src="{{ asset('peterson/img/home-1/brand/brand-5.png') }}" alt="img">
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

<!-- Faq Section Start -->
<section class="faq-section fix section-padding">
    <div class="container">
        <div class="section-title text-center">
            <span class="sub-title wow fadeInUp">
                <img src="{{ asset('peterson/img/home-1/hero/setting.png') }}" alt="img">
                Perguntas Frequentes
            </span>
            <h2 class="text-anim">
                Como trabalhamos <br>
                para o sucesso da sua empresa.
            </h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="faq-items">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    1. Quais serviços a Zirg Contabilidade oferece?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="headingOne" data-bs-parent="#accordionExample" role="region">
                                <div class="accordion-body">
                                    <p>
                                        Oferecemos serviços contábeis completos como abertura de empresas, assessoria
                                        fiscal, contabilidade mensal, folha de pagamento, planejamento tributário e
                                        suporte especializado para manter seu negócio regularizado.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay=".5s">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    2. Por que minha empresa precisa de um contador?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample" role="region">
                                <div class="accordion-body">
                                    <p>
                                        Um contador garante que sua empresa esteja em conformidade com a legislação,
                                        evita multas, organiza suas finanças e ajuda na tomada de decisões estratégicas
                                        para o crescimento do negócio.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay=".7s">
                            <h2 class="accordion-header" id="headingthree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapsethree" aria-expanded="false"
                                    aria-controls="collapsethree">
                                    3. Como a contabilidade pode ajudar no crescimento da empresa?
                                </button>
                            </h2>
                            <div id="collapsethree" class="accordion-collapse collapse"
                                aria-labelledby="headingthree" data-bs-parent="#accordionExample" role="region">
                                <div class="accordion-body">
                                    <p>
                                        A contabilidade fornece dados financeiros claros, auxilia no planejamento
                                        tributário e permite decisões mais seguras, contribuindo diretamente para o
                                        crescimento sustentável da empresa.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
                            <h2 class="accordion-header" id="headingfour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapsefour" aria-expanded="false"
                                    aria-controls="collapsefour">
                                    4. O que é planejamento tributário?
                                </button>
                            </h2>
                            <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour"
                                data-bs-parent="#accordionExample" role="region">
                                <div class="accordion-body">
                                    <p>
                                        É um conjunto de estratégias legais para reduzir a carga de impostos da empresa,
                                        garantindo economia e maior eficiência financeira sem riscos fiscais.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-0 wow fadeInUp" data-wow-delay=".3s">
                            <h2 class="accordion-header" id="headingfive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapsefive" aria-expanded="false"
                                    aria-controls="collapsefive">
                                    5. Como a Zirg garante a segurança das informações?
                                </button>
                            </h2>
                            <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive"
                                data-bs-parent="#accordionExample" role="region">
                                <div class="accordion-body">
                                    <p>
                                        Trabalhamos com processos seguros, organização rigorosa de dados e seguimos as
                                        normas legais para garantir total confidencialidade e proteção das informações
                                        da sua empresa.
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

<!-- Marquee Section Start -->
<div class="marquee-section fix">
    <div class="marquee">
        <div class="marquee-group">
            <div class="text"><img src="{{ asset('peterson/img/home-1/star2.svg') }}" alt="img">
                Contabilidade</div>
            <div class="text"><img src="{{ asset('peterson/img/home-1/star2.svg') }}" alt="img"> Fiscal</div>
            <div class="text"><img src="{{ asset('peterson/img/home-1/star2.svg') }}" alt="img"> Consultoria
            </div>
            <div class="text"><img src="{{ asset('peterson/img/home-1/star2.svg') }}" alt="img"> Tributário
            </div>
            <div class="text"><img src="{{ asset('peterson/img/home-1/star2.svg') }}" alt="img"> Gestão</div>
            <div class="text"><img src="{{ asset('peterson/img/home-1/star2.svg') }}" alt="img"> Empresarial
            </div>
            <div class="text"><img src="{{ asset('peterson/img/home-1/star2.svg') }}" alt="img"> Planejamento
            </div>
        </div>
        <div class="marquee-group">
            <div class="text"><img src="{{ asset('peterson/img/home-1/star2.svg') }}" alt="img">
                Contabilidade</div>
            <div class="text"><img src="{{ asset('peterson/img/home-1/star2.svg') }}" alt="img"> Fiscal</div>
            <div class="text"><img src="{{ asset('peterson/img/home-1/star2.svg') }}" alt="img"> Consultoria
            </div>
            <div class="text"><img src="{{ asset('peterson/img/home-1/star2.svg') }}" alt="img"> Tributário
            </div>
            <div class="text"><img src="{{ asset('peterson/img/home-1/star2.svg') }}" alt="img"> Gestão</div>
            <div class="text"><img src="{{ asset('peterson/img/home-1/star2.svg') }}" alt="img"> Empresarial
            </div>
            <div class="text"><img src="{{ asset('peterson/img/home-1/star2.svg') }}" alt="img"> Planejamento
            </div>
        </div>
        <div class="marquee-group">
            <div class="text"><img src="{{ asset('peterson/img/home-1/star2.svg') }}" alt="img">
                Contabilidade</div>
            <div class="text"><img src="{{ asset('peterson/img/home-1/star2.svg') }}" alt="img"> Fiscal</div>
            <div class="text"><img src="{{ asset('peterson/img/home-1/star2.svg') }}" alt="img"> Consultoria
            </div>
            <div class="text"><img src="{{ asset('peterson/img/home-1/star2.svg') }}" alt="img"> Tributário
            </div>
            <div class="text"><img src="{{ asset('peterson/img/home-1/star2.svg') }}" alt="img"> Gestão</div>
            <div class="text"><img src="{{ asset('peterson/img/home-1/star2.svg') }}" alt="img"> Empresarial
            </div>
            <div class="text"><img src="{{ asset('peterson/img/home-1/star2.svg') }}" alt="img"> Planejamento
            </div>
        </div>
    </div>
</div>

<!-- News Section Start -->
<section class="news-section section-padding fix pt-0">
    <div class="container">
        <div class="section-title-area">
            <div class="section-title mb-0">
                <span class="sub-title wow fadeInUp">
                    <img src="{{ asset('peterson/img/home-1/hero/setting.png') }}" alt="img">
                    Conteúdos e Dicas
                </span>
                <h2 class="text-anim">
                    Novidades da Contabilidade
                </h2>
            </div>
            <a href="news-grid.html" class="theme-btn">
                Ver mais <i class="fa-solid fa-arrow-up-right"></i>
            </a>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="news-card-items tp_fade_anim" data-delay=".3" data-fade-from="left">
                    <div class="news-image">
                        <img src="{{ asset('peterson/img/home-1/news/01.jpg') }}" alt="img">
                        <img src="{{ asset('peterson/img/home-1/news/01.jpg') }}" alt="img">
                    </div>
                    <div class="news-top-content">
                        <div class="news-content">
                            <h3>
                                <a href="news-details.html">
                                    Como manter sua empresa regularizada e evitar multas em 2025
                                </a>
                            </h3>
                            <span>Nov 1, 2025</span>
                        </div>
                        <div class="read-button">
                            <a href="news-details.html" class="link-btn">
                                Ler mais
                                <i class="fa-solid fa-arrow-up-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="news-card-items tp_fade_anim" data-delay=".5" data-fade-from="left">
                    <div class="news-image">
                        <img src="{{ asset('peterson/img/home-1/news/02.jpg') }}" alt="img">
                        <img src="{{ asset('peterson/img/home-1/news/02.jpg') }}" alt="img">
                    </div>
                    <div class="news-top-content">
                        <div class="news-content">
                            <h3>
                                <a href="news-details.html">
                                    Simples Nacional ou Lucro Presumido: qual escolher?
                                </a>
                            </h3>
                            <span>Nov 2, 2025</span>
                        </div>
                        <div class="read-button">
                            <a href="news-details.html" class="link-btn">
                                Ler mais
                                <i class="fa-solid fa-arrow-up-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="news-card-items tp_fade_anim" data-delay=".7" data-fade-from="left">
                    <div class="news-image">
                        <img src="{{ asset('peterson/img/home-1/news/03.jpg') }}" alt="img">
                        <img src="{{ asset('peterson/img/home-1/news/03.jpg') }}" alt="img">
                    </div>
                    <div class="news-top-content">
                        <div class="news-content">
                            <h3>
                                <a href="news-details.html">
                                    A importância da contabilidade para o crescimento do seu negócio
                                </a>
                            </h3>
                            <span>Nov 3, 2025</span>
                        </div>
                        <div class="read-button">
                            <a href="news-details.html" class="link-btn">
                                Ler mais
                                <i class="fa-solid fa-arrow-up-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
