@extends('layout.master')

@section('styles')
    @parent
    
    <link href="{{ asset('css/moves-and-changes.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')
    <section class="network-infrastructure">
        <div class="row content justify-content-center content">
            <h2 class="banner-title text-uppercase">Movimentos e Mudanças</h2>
        </div>
    </section>
    <section class="network-infrastructure-content content">
        <ol class="breadcrumb pt-1 pl-md-0 pl-sm-2 d-none d-md-block">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">início</a></li>
            <li class="breadcrumb-item"><a href="#">Soluções</a></li>
            <li class="breadcrumb-item active">Movimentos e Mudanças</li>
        </ol>
        
        <div class="row p-4 p-md-0">
            <div class="col-md-5 col-12">
                <p class="text-justify content-paragraph margin-paragraph">
                    Considerando que vivemos um tempo de constantes mudanças e avanços tecnológicos,
                    capacitamos nosso corpo técnico para realizar mudanças físicas e reconfiguração dos
                    locais das estruturas de tecnologia.
                    Desta forma podemos otimizar espaços e permitir a ampliação ou redução de acordo a
                    necessidade de cada cliente.
                </p>
                <p class="text-justify content-paragraph margin-paragraph">
                    Este é um benefício importante para a sua empresa, já que o conhecimento técnico
                    permite um manuseio correto de todos os equipamentos. Além disso, toda a ação é
                    centralizada em apenas uma equipe com o suporte da Target.
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