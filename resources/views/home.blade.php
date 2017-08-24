@extends('master')

@section('content')
    <section class="home-banner">
        <div class="section-content slider">
            <div class="slider-item">
                <span>Somos os melhores em</span><br>
                <span><strong>infraestrutura de redes</strong></span><br>
                <span>para a sua empresa</span><br>
                <a href="javascript:void(0)" class="cta-button">Saiba mais</a>
            </div>
            <div class="slider-item">
                <span>Somos os melhores em</span><br>
                <span><strong>infraestrutura de redes</strong></span><br>
                <span>para a sua empresa</span><br>
                <a href="javascript:void(0)" class="cta-button">Saiba mais</a>
            </div>
            <div class="slider-item">
                <span>Somos os melhores em</span><br>
                <span><strong>infraestrutura de redes</strong></span><br>
                <span>para a sua empresa</span><br>
                <a href="javascript:void(0)" class="cta-button">Saiba mais</a>
            </div>
        </div>
    </section>
    <section class="make-budget">
        <div class="section-content">
            <span>Faça um orçamento conosco!</span>
            <a href="javascript:void(0)" class="cta-button">Clique aqui</a>
        </div>
    </section>
    <section class="services content remove-padding-left remove-padding-right">
        <div class="section-content slider">
            <div class="slider-item">
                <h3 class="services-slide-title text-uppercase">
                    INFRAESTRUTURA DE REDES
                </h3>
                <p class="services-slide-description text-justify text-uppercase">
                    A TARGET executa projetos e implantações de rede
                    estruturada CAT5E e CAT7, dados, voz e imagens,
                    seguindo as diretrizes das normas nacionais e
                    internacionais.
                </p>
                <a href="javascript:void(0)" class="cta-button">Saiba mais - serviços</a>
            </div>
            <div class="slider-item">
                <h3 class="services-slide-title text-uppercase">
                    INFRAESTRUTURA DE REDES
                </h3>
                <p class="services-slide-description text-justify text-uppercase">
                    A TARGET executa projetos e implantações de rede
                    estruturada CAT5E e CAT7, dados, voz e imagens,
                    seguindo as diretrizes das normas nacionais e
                    internacionais.
                </p>
                <a href="javascript:void(0)" class="cta-button">Saiba mais - serviços</a>
            </div>
            <div class="slider-item">
                <h3 class="services-slide-title text-uppercase">
                    INFRAESTRUTURA DE REDES
                </h3>
                <p class="services-slide-description text-justify text-uppercase">
                    A TARGET executa projetos e implantações de rede
                    estruturada CAT5E e CAT7, dados, voz e imagens,
                    seguindo as diretrizes das normas nacionais e
                    internacionais.
                </p>
                <a href="javascript:void(0)" class="cta-button">Saiba mais - serviços</a>
            </div>
        </div>
    </section>
    <section class="partners content">
        <div class="row justify-content-center">
            <div class="col-7">
                <h5 class="text-uppercase text-blue font-weight-bold">Nossos principais clientes</h5>
                <hr class="hr-blue mt-0">
            </div>
        </div>
        <div class="section-content slider d-none d-md-inline-block">
            <div class="slider-item">
                <div class="row">
                    <div class="col-3"><img src="{{ asset('images/coca-cola.png') }}" alt="Coca cola"></div>
                    <div class="col-3"><img src="{{ asset('images/coca-cola.png') }}" alt="Coca Cola"></div>
                    <div class="col-3"><img src="{{ asset('images/coca-cola.png') }}" alt="Coca cola"></div>
                    <div class="col-3"><img src="{{ asset('images/coca-cola.png') }}" alt="Coca cola"></div>
                </div>
            </div>
            <div class="slider-item">
                <div class="row">
                    <div class="col-3"><img src="{{ asset('images/coca-cola.png') }}" alt="Coca cola"></div>
                    <div class="col-3"><img src="{{ asset('images/coca-cola.png') }}" alt="Coca Cola"></div>
                    <div class="col-3"><img src="{{ asset('images/coca-cola.png') }}" alt="Coca cola"></div>
                    <div class="col-3"><img src="{{ asset('images/coca-cola.png') }}" alt="Coca cola"></div>
                </div>
            </div>
            <div class="slider-item">
                <div class="row">
                    <div class="col-3"><img src="{{ asset('images/coca-cola.png') }}" alt="Coca cola"></div>
                    <div class="col-3"><img src="{{ asset('images/coca-cola.png') }}" alt="Coca Cola"></div>
                    <div class="col-3"><img src="{{ asset('images/coca-cola.png') }}" alt="Coca cola"></div>
                    <div class="col-3"><img src="{{ asset('images/coca-cola.png') }}" alt="Coca cola"></div>
                </div>
            </div>
        </div>
        <div class="section-content slider d-md-none d-inline-block">
            <div class="slider-item">
                <div class="row justify-content-center">
                    <div class="col-3">
                        <img src="{{ asset('images/coca-cola.png') }}" alt="Coca cola">
                    </div>
                </div>
            </div>
            <div class="slider-item">
                <div class="row justify-content-center">
                    <div class="col-3">
                        <img src="{{ asset('images/coca-cola.png') }}" alt="Coca cola">
                    </div>
                </div>
            </div>
            <div class="slider-item">
                <div class="row justify-content-center">
                    <div class="col-3">
                        <img src="{{ asset('images/coca-cola.png') }}" alt="Coca cola">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection