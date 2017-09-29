@extends('layout.master')

@section('styles')
    @parent
    
    <link href="{{ asset('css/network-infrastructure.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')
    <section class="network-infrastructure">
        <div class="row content justify-content-center content">
            <h2 class="banner-title text-uppercase">Rede Premium</h2>
        </div>
    </section>
    <section class="network-infrastructure-content content">
        <ol class="breadcrumb pt-1 pl-md-0 pl-sm-2 d-none d-md-block">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">início</a></li>
            <li class="breadcrumb-item"><a href="#">Soluções</a></li>
            <li class="breadcrumb-item active">Rede Premium</li>
        </ol>
    
        <div class="row p-4 p-md-0" style="line-height: 26px;">
            <div class="col-md-5 col-12">
                <h3>Site survey</h3>
                <p class="text-justify content-paragraph margin-paragraph">
                    Site Survey é uma metodologia aplicada na inspeção técnica minuciosa do local que será
                    objeto da instalação de uma nova infraestrutura de rede, na avaliação dos resultados obtidos
                    com as melhorias da infraestrutura existente ou mesmo na identificação e solução dos
                    problemas de um sistema já em funcionamento.
                </p>
                <p class="text-justify content-paragraph margin-paragraph">
                    Esse procedimento é realizado normalmente durante o desenvolvimento do projeto, seja no
                    levantamento da infraestrutura necessária (dispositivos de conectividade, cabos, acessórios e
                    outros), ou para a implantação de uma nova rede estruturada, redes wireless, etc., de forma a
                    maximizar sua cobertura e eficiência.
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