@extends('layout.master')

@section('styles')
    @parent
    
    <link href="{{ asset('css/information-technology.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')
    <section class="network-infrastructure">
        <div class="row content justify-content-center content">
            <h2 class="banner-title text-uppercase">Tecnologia da Informação</h2>
        </div>
    </section>
    <section class="network-infrastructure-content content">
        <ol class="breadcrumb pt-1 pl-md-0 pl-sm-2 d-none d-md-block">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">início</a></li>
            <li class="breadcrumb-item"><a href="#">Soluções</a></li>
            <li class="breadcrumb-item active">Tecnologia da Informação</li>
        </ol>
        
        <div class="row p-4 p-md-0">
            <div class="col-md-5 col-12">
                <h3>Outsourcing de tecnologia</h3>
                <p class="text-justify content-paragraph margin-paragraph">
                    A terceirização de atividades que não fazem parte do core business da empresa é
                    recomendada não apenas por questões de custos, mas também por questões de
                    qualidade no resultado final.
                    As empresas optam por contratar prestadores de serviços capacitados, ágeis e sempre
                    disponíveis, que garantem melhor gestão e desempenho na utilização desse tipo de
                    serviço, evitando gastos altos para a empresa com a criação de um núcleo de TI.
                </p>
                <p class="text-justify content-paragraph margin-paragraph">
                    Objetivando uma maior eficiência na gestão destes recursos e da manutenção em
                    operação, a Target oferece um outsourcing especializado, que resulta em economia para o
                    cliente e um melhor nível de serviços recebidos de seus fornecedores.
                </p>
                <p class="text-justify content-paragraph margin-paragraph">
                    Com a solução de outsourcing os pontos de contato com os fornecedores de Tecnologia
                    são centralizados, deixando assim que os clientes concentrem todos os seus esforços no
                    que realmente importa: o desenvolvimento dos seus negócios.
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