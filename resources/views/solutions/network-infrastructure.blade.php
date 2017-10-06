@extends('layout.master')

@section('styles')
    @parent
    
    <link href="{{ asset('css/network-infrastructure.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')
    <section class="network-infrastructure">
        <div class="row content justify-content-center content">
            <h2 class="banner-title text-uppercase">Infraestrutura de Redes</h2>
        </div>
    </section>
    <section class="network-infrastructure-content content">
        <ol class="breadcrumb pt-1 pl-md-0 pl-sm-2 d-none d-md-block">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">início</a></li>
            <li class="breadcrumb-item"><a href="#">Soluções</a></li>
            <li class="breadcrumb-item active">Infraestrutura de Redes</li>
        </ol>
    
        <div class="row p-4 p-md-0">
            <div class="col-md-5 col-12">
                <p class="text-justify content-paragraph margin-paragraph">
                    Executamos projetos e implantações de rede estruturada CAT5, CAT6, dados, voz e imagem,
                    seguindo as diretrizes das normas nacionais e internacionais.
                </p>
                <p class="text-justify content-paragraph margin-paragraph">
                    Trabalhamos em parceria no desenvolvimento e gerenciamento do projeto do cliente.
                    Utilizamos estratégias que economizam recursos e horas de trabalho reduzindo ao máximo o
                    tempo de execução de forma organizada, garantindo a entrega dentro do prazo.
                </p>
            </div>
            <div class="col-md-1 col-12"></div>
            <div class="col-md-6 col-12">
                <div class="row">
                    <div class="col-12 col-md-4 d-flex d-md-block justify-content-center mb-3 mb-md-0">
                        <div class="d-flex justify-content-center">
                            <img class="align-self-center" src="{{ asset('images/solutions/network-infrastructure/Certificado_Rede.png') }}" alt="" width="75%">
                        </div>
                    </div>
                    <div class="col-12 col-md-8 align-self-center content-paragraph text-justify">
                        CABEAMENTO ESTRUTURADO
                    </div>
                </div>
                <div class="row margin-circle">
                    <div class="col-12 col-md-4 d-flex d-md-block justify-content-center mb-3 mb-md-0">
                        <div class="d-flex justify-content-center">
                            <img class="align-self-center" src="{{ asset('images/solutions/network-infrastructure/Certificado_Rede.png') }}" alt="" width="75%">
                        </div>
                    </div>
                    <div class="col-12 col-md-8 align-self-center content-paragraph text-justify">
                        CERTIFICAÇÃO DE REDE
                    </div>
                </div>
                <div class="row margin-circle">
                    <div class="col-12 col-md-4 d-flex d-md-block justify-content-center mb-3 mb-md-0">
                        <div class="d-flex justify-content-center">
                            <img class="align-self-center" src="{{ asset('images/solutions/network-infrastructure/Certificado_Rede.png') }}" alt="" width="75%">
                        </div>
                    </div>
                    <div class="col-12 col-md-8 align-self-center content-paragraph text-justify">
                        GERENCIAMENTO DE PROJETO
                    </div>
                </div>
            </div>
        </div>
        @include('solutions.partials.doubts')
    </section>
@endsection