@extends('layout.master')

@section('styles')
    @parent
    
    <link href="{{ asset('css/network-infrastructure.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')
    <section class="network-infrastructure">
        <div class="row content justify-content-center content">
            <h2 class="banner-title text-uppercase">Segurança Eletrônica</h2>
        </div>
    </section>
    <section class="network-infrastructure-content content">
        <ol class="breadcrumb pt-1 pl-md-0 pl-sm-2 d-none d-md-block">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">início</a></li>
            <li class="breadcrumb-item"><a href="#">Soluções</a></li>
            <li class="breadcrumb-item active">Segurança Eletrônica</li>
        </ol>
    
        <div class="row p-4 p-md-0">
            <div class="col-md-5 col-12">
                <p class="text-justify content-paragraph margin-paragraph">
                    A TARGET tem se destacado no mercado por oferecer a melhor infraestrutura e qualidade de
                    instalação, apresentando soluções personalizadas e inteligentes em segurança eletrônica.
                </p>
                <p class="text-justify content-paragraph margin-paragraph">
                    Nosso corpo técnico é composto por engenheiros e profissionais capacitados para oferecer
                    soluções que atendam a todas as normas e exigências técnicas legais em:
                </p>
                <p class="text-justify content-paragraph">
                    <ul>
                        <li>Sistemas eletrônicos de detecção de intrusão (alarmes);</li>
                        <li>Circuito fechado de TV (CFTV);</li>
                        <li>Controle de acesso;</li>
                        <li>Capacitação para projetos com tecnologia IP;</li>
                        <li>Sistema de neblina (fumaça);</li>
                        <li>Sirenes de alto impacto;</li>
                        <li>Controle de acesso por biometria, íris, facial, cartão e senha;</li>
                        <li>Portaria com monitoramento remoto.</li>
                    </ul>
                </p>
            </div>
            <div class="col-md-1 col-12"></div>
            <div class="col-md-6 col-12">
                <div class="row">
                    <div class="col-12 col-md-4 d-flex d-md-block justify-content-center mb-3 mb-md-0">
                        <div class="circle d-flex justify-content-center"><span class="align-self-center"></span></div>
                    </div>
                    <div class="col-12 col-md-8 align-self-center content-paragraph text-justify">
                        Lorem ipsum dolor sit amet, consectur adipiscing elit. Sed pallentesque lobortis vehicula.
                    </div>
                </div>
                <div class="row margin-circle">
                    <div class="col-12 col-md-4 d-flex d-md-block justify-content-center mb-3 mb-md-0">
                        <div class="circle d-flex justify-content-center"><span class="align-self-center"></span></div>
                    </div>
                    <div class="col-12 col-md-8 align-self-center content-paragraph text-justify">
                        Lorem ipsum dolor sit amet, consectur adipiscing elit. Sed pallentesque lobortis vehicula.
                    </div>
                </div>
                <div class="row margin-circle">
                    <div class="col-12 col-md-4 d-flex d-md-block justify-content-center mb-3 mb-md-0">
                        <div class="circle d-flex justify-content-center"><span class="align-self-center"></span></div>
                    </div>
                    <div class="col-12 col-md-8 align-self-center content-paragraph text-justify">
                        Lorem ipsum dolor sit amet, consectur adipiscing elit. Sed pallentesque lobortis vehicula.
                    </div>
                </div>
            </div>
        </div>
        @include('solutions.partials.doubts')
    </section>
@endsection