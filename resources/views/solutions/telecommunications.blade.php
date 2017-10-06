@extends('layout.master')

@section('styles')
    @parent
    
    <link href="{{ asset('css/telecommunications.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')
    <section class="network-infrastructure">
        <div class="row content justify-content-center content">
            <h2 class="banner-title text-uppercase">Telecomunicações</h2>
        </div>
    </section>
    <section class="network-infrastructure-content content">
        <ol class="breadcrumb pt-1 pl-md-0 pl-sm-2 d-none d-md-block">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">início</a></li>
            <li class="breadcrumb-item"><a href="#">Soluções</a></li>
            <li class="breadcrumb-item active">Telecomunicações</li>
        </ol>
    
        <div class="row p-4 p-md-0">
            <div class="col-md-5 col-12">
                <h3>IPBX</h3>
                <p class="text-justify content-paragraph margin-paragraph">
                    Com o conceito de soluções “open source” em uma plataforma Linux, oferece diversos
                    serviços integrados em uma única plataforma. Diferente das soluções proprietárias, o
                    investimento é de baixo custo e permite customizações, personalizando o projeto de acordo
                    com a necessidade de cada cliente.
                </p>
                <p class="text-justify content-paragraph margin-paragraph">
                    A solução atende desde a pequena empresa até grandes companhias que exigem alta
                    disponibilidade e performance.
                </p>
                <p class="text-justify content-paragraph margin-paragraph">
                    O módulo de Call Center oferece monitoramento on-line, Relatórios Estatísticos e Gráficos.
                </p>
                <p class="text-justify content-paragraph margin-paragraph">
    
                    O IPBX (PABX IP) é um sistema de telefonia completo que fornece ligações telefônicas sobre as
                    redes de dados IP. Toda a conversação é enviada através de pacotes de dados sobre a rede. Ele
                    permite conectividade com operadoras de telefonia fixa, móvel e VoIP, podendo trabalhar
                    como sistema principal, recebendo e gerenciando todas as linhas e ramais ou pode ser
                    integrado ao sistema de PABX tradicional, preservando assim, o investimento inicial.
                </p>
    
                <h3>PABX</h3>
                <p class="text-justify content-paragraph margin-paragraph">
                    As facilidades oferecidas pelo PABX ainda fascinam os consumidores. Com ele instalado e
                    configurado é possível transferir, reter e estacionar chamadas; e o mais importante, mantém o
                    sigilo total entre as ligações.
                </p>
                <p class="text-justify content-paragraph margin-paragraph">
                    Hoje temos disponíveis no mercado, as mais variadas marcas e modelos atendendo de forma
                    exclusiva cada cliente.
                </p>
    
                <h3>
                    PROJETOS DE REDUÇÃO DE CUSTOS EM TELEFONIA</h3>
                <p class="text-justify content-paragraph margin-paragraph">
                    Através das análises de nossa equipe especializada, identificamos contratos desatualizados e
                    cobranças inadequadas, por falta de conhecimento e orientação, evitando gastos
                    desnecessários com as operadoras.
                </p>
                <p class="text-justify content-paragraph margin-paragraph">
                    Com nossa consultoria, buscamos os melhores planos das operadoras alinhando as melhores
                    tecnologias e o menor preço, a fim de atingir o máximo de redução de custos para a sua
                    empresa.
                </p>
                <p class="text-justify content-paragraph margin-paragraph">
                    Elaboramos projetos customizados e fornecemos soluções em tecnologia e infraestrutura.
                </p>
            </div>
            <div class="col-md-1 col-12"></div>
            <div class="col-md-6 col-12">
                <div class="row">
                    <div class="col-12 col-md-4 d-flex d-md-block justify-content-center mb-3 mb-md-0">
                        <div class="d-flex justify-content-center">
                            <img class="align-self-center" src="{{ asset('images/solutions/telecommunications/Reducao_Custos.png') }}" alt="" width="75%">
                        </div>
                    </div>
                    <div class="col-12 col-md-8 align-self-center content-paragraph text-justify">
                        PABX
                    </div>
                </div>
                <div class="row margin-circle">
                    <div class="col-12 col-md-4 d-flex d-md-block justify-content-center mb-3 mb-md-0">
                        <div class="d-flex justify-content-center">
                            <img class="align-self-center" src="{{ asset('images/solutions/telecommunications/Reducao_Custos.png') }}" alt="" width="75%">
                        </div>
                    </div>
                    <div class="col-12 col-md-8 align-self-center content-paragraph text-justify">
                        IPBX
                    </div>
                </div>
                <div class="row margin-circle">
                    <div class="col-12 col-md-4 d-flex d-md-block justify-content-center mb-3 mb-md-0">
                        <div class="d-flex justify-content-center">
                            <img class="align-self-center" src="{{ asset('images/solutions/telecommunications/Reducao_Custos.png') }}" alt="" width="75%">
                        </div>
                    </div>
                    <div class="col-12 col-md-8 align-self-center content-paragraph text-justify">
                        REDUÇÂO DE CUSTOS
                    </div>
                </div>
            </div>
        </div>
        @include('solutions.partials.doubts')
    </section>
@endsection