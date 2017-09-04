@extends('layout.master')

@section('content')
    <section class="home-banner">
        <div class="section-content slider">
            <div class="slider-item slider-item-1">
                <div class="row content d-flex justify-content-center">
                    <div class="col-12 col-md-7 text-justify">
                        Somos os melhores em <strong>infraestrutura de redes</strong> para a sua empresa
                    </div>
                    <div class="col-12">
                        <a href="javascript:void(0)" class="cta-button">Saiba mais</a>
                    </div>
                </div>
            </div>
            <div class="slider-item slider-item-2">
                <div class="row content d-flex justify-content-center">
                    <div class="col-12 col-md-7 text-justify">Somos os melhores em <strong>infraestrutura de redes</strong> para a sua empresa</div>
                    <div class="col-12">
                        <a href="javascript:void(0)" class="cta-button">Saiba mais</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="make-budget">
        <div class="section-content">
            <span>Faça um orçamento conosco!</span>
            <a href="javascript:void(0)" class="cta-button">Clique aqui</a>
        </div>
    </section>
    <section class="services content px-0">
        <div class="section-content slider">
            <div class="slider-item" style="background: url({{ asset('images/home/banners/desktop/redes_eletricas.png') }});">
                <h3 class="services-slide-title text-uppercase">
                    Redes Elétricas
                </h3>
                <p class="services-slide-description text-justify text-uppercase">
                    A TARGET executa projetos e implantações de rede
                    estruturada CAT5E, CAT6 e CAT7, dados, voz e imagens,
                    seguindo as diretrizes das normas nacionais e
                    internacionais.
                </p>
                <a href="javascript:void(0)" class="cta-button">Saiba mais - serviços</a>
            </div>
            <div class="slider-item" style="background: url({{ asset('images/home/banners/desktop/seguranca_eletronica.png') }});">
                <h3 class="services-slide-title text-uppercase">
                    Segurança Eletrônica
                </h3>
                <p class="services-slide-description text-justify text-uppercase">
                    A TARGET executa projetos e implantações de rede
                    estruturada CAT5E, CAT6 e CAT7, dados, voz e imagens,
                    seguindo as diretrizes das normas nacionais e
                    internacionais.
                </p>
                <a href="javascript:void(0)" class="cta-button">Saiba mais - serviços</a>
            </div>
            <div class="slider-item" style="background: url({{ asset('images/home/banners/desktop/telecomunicacoes.png') }});">
                <h3 class="services-slide-title text-uppercase">
                    Telecomunicações
                </h3>
                <p class="services-slide-description text-justify text-uppercase">
                    A TARGET executa projetos e implantações de rede
                    estruturada CAT5E, CAT6 e CAT7, dados, voz e imagens,
                    seguindo as diretrizes das normas nacionais e
                    internacionais.
                </p>
                <a href="javascript:void(0)" class="cta-button">Saiba mais - serviços</a>
            </div>
        </div>
    </section>
    <section class="partners">
        <div class="row justify-content-center content">
            <div class="col-12 col-md-6 px-3 px-md-0">
                <h5 class="text-uppercase text-blue font-weight-bold partners-title">Nossos principais clientes</h5>
                <hr class="hr-blue mt-0">
            </div>
        </div>
        <div class="section-content slider d-none d-md-inline-block">
            <div class="slider-item">
                <div class="row justify-content-center content">
                    <ul class="d-flex pl-0" style="list-style: none;justify-content: space-between;width: 100%;">
                        <li class="mt-md-5 mt-0"><img src="{{ asset('images/partners/cetelem.png') }}" class="d-flex" width="100%" alt=""></li>
                        <li class="mt-md-5 mt-0"><img src="{{ asset('images/partners/coca-cola.png') }}" class="d-flex" width="100%" alt=""></li>
                        <li class="mt-md-5 mt-0"><img src="{{ asset('images/partners/femsa.png') }}" class="d-flex" width="100%" alt=""></li>
                        <li class="mt-md-5 mt-0"><img src="{{ asset('images/partners/heineken.png') }}" class="d-flex" width="100%" alt=""></li>
                    </ul>
                </div>
            </div>
            <div class="slider-item">
                <div class="row justify-content-center content">
                    <div class="col-md-3 mt-md-5 mt-0 justify-content-center px-2 align-self-center"><img src="{{ asset('images/partners/telhanorte.png') }}" width="100%" alt=""></div>
                    <div class="col-md-3 mt-md-5 mt-0 justify-content-center px-2 align-self-center d-flex"><img src="{{ asset('images/partners/hp.png') }}" height="100%" alt=""></div>
                    <div class="col-md-3 mt-md-5 mt-0 justify-content-center px-2 align-self-center"><img src="{{ asset('images/partners/saint-gobain.png') }}" width="100%" alt=""></div>
                </div>
            </div>
        </div>
        <div class="section-content slider d-md-none d-inline-block">
            <div class="slider-item">
                <div class="row content">
                    <div class="col-12 d-flex justify-content-center mt-3 mt-md-0" style="margin-bottom: -10px;">
                        <img src="{{ asset('images/partners/cetelem.png') }}" alt="Coca cola">
                    </div>
                </div>
            </div>
            <div class="slider-item">
                <div class="row content">
                    <div class="col-12 d-flex justify-content-center mt-3 mt-md-0" style="margin-bottom: -10px;">
                        <img src="{{ asset('images/partners/coca-cola.png') }}" alt="Coca cola">
                    </div>
                </div>
            </div>
            <div class="slider-item">
                <div class="row content">
                    <div class="col-12 d-flex justify-content-center mt-3 mt-md-0" style="margin-bottom: -10px;">
                        <img src="{{ asset('images/partners/femsa.png') }}" alt="Coca cola">
                    </div>
                </div>
            </div>
            <div class="slider-item">
                <div class="row content">
                    <div class="col-12 d-flex justify-content-center mt-3 mt-md-0" style="margin-bottom: -10px;">
                        <img src="{{ asset('images/partners/heineken.png') }}" alt="Coca cola">
                    </div>
                </div>
            </div>
            <div class="slider-item">
                <div class="row content">
                    <div class="col-12 d-flex justify-content-center mt-3 mt-md-0" style="margin-bottom: -10px;">
                        <img src="{{ asset('images/partners/telhanorte.png') }}" alt="Coca cola">
                    </div>
                </div>
            </div>
            <div class="slider-item">
                <div class="row content">
                    <div class="col-12 d-flex justify-content-center mt-3 mt-md-0" style="margin-bottom: -10px;">
                        <img src="{{ asset('images/partners/hp.png') }}" alt="Coca cola">
                    </div>
                </div>
            </div>
            <div class="slider-item">
                <div class="row content">
                    <div class="col-12 d-flex justify-content-center mt-3 mt-md-0" style="margin-bottom: -10px;">
                        <img src="{{ asset('images/partners/saint-gobain.png') }}" alt="Coca cola">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection