@extends('layout.master')

@section('styles')
    @parent
    
    <link href="{{ asset('css/company.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')
    <section class="company">
        <div class="row content justify-content-center content">
        </div>
    </section>
    <section class="company-content content">
        <ol class="breadcrumb pt-1 pl-md-0 pl-sm-2 d-none d-md-block">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">início</a></li>
            <li class="breadcrumb-item"><a href="#">A Empresa</a></li>
        </ol>
    
        <div class="p-4 p-md-0">
            <div class="row">
                <div class="col-md-5 col-12">
                    <h3 class="text-uppercase">A Empresa</h3>
                    <p class="text-justify content-paragraph margin-paragraph">
                        A Target é o resultado consolidado de uma trajetória de sucesso e
                        tem como objetivo principal a busca de melhorias continuas para atender
                        de forma completa com soluções inteligentes todas as necessidades de seus clientes.
                    </p>
                    <p class="text-justify content-paragraph margin-paragraph">
                        Absorver as dificuldades tecnológicas e transformar em solução é a nossa proposta.
                    </p>
                    <p class="text-justify content-paragraph margin-paragraph">
                        A opção de outsourcing de serviços em Tecnologia, atualmente é uma prática utilizada
                        pelas grandes corporações para obter resultados rápidos e controlados, além de centralizar
                        e reduzir os custos.
                    </p>
                    <p class="text-justify content-paragraph margin-paragraph">
                        A Target tem o projeto adequado para seus clientes independente do segmento, garantindo
                        resultados expressivos e proporcionando gestão centralizada de toda a tecnologia.
                    </p>
                </div>
                <div class="col-md-1 col-12"></div>
                <div class="col-md-6 col-12">
                
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-4 pr-md-5">
                    <div class="pr-md-1">
                        <h4 class="text-uppercase culture-code-item-title">Missão</h4>
                        <p class="text-justify content-paragraph mt-4">
                            Lorem ipsum dolor sit amet,
                            consectur adipiscing elit. Sed
                            pellentesque lobortis vehicula.
                            Mauris molestie risus.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 pl-md-3 pr-md-3">
                    <h4 class="text-uppercase culture-code-item-title">Visão</h4>
                    <p class="text-justify content-paragraph mt-4">
                        Lorem ipsum dolor sit amet,
                        consectur adipiscing elit. Sed
                        pellentesque lobortis vehicula.
                        Mauris molestie risus.
                    </p>
                </div>
                <div class="col-md-4 pl-md-5">
                    <div class="pl-md-1">
                        <h4 class="text-uppercase culture-code-item-title">Valores</h4>
                        <p class="text-justify content-paragraph mt-4">
                            Lorem ipsum dolor sit amet,
                            consectur adipiscing elit. Sed
                            pellentesque lobortis vehicula.
                            Mauris molestie risus.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12 mt-3">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-6">
                            <h3 class="text-uppercase text-center time-line-title">
                                Veja nossa história
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <ul class="timeline d-md-block d-none">
                        <li class="fact">
                            <div class="fact-active-selector"></div>
                            <div class="vertical-line"></div>
                            
                            <div class="fact-content">
                                A Tecoffice se fundiu em 2016 com a Evec Telecom. Com a
                                fusão a empresa conta com mais de 8 anos de experiência
                                no mercado de TI e Telecom, sendo uma das empresas especializadas
                                em projetos de Telecomunicações e TI, Infraestrutura e Elétrica e Outsourcing.
                            </div>
                        </li>
                        <li class="fact">
                            <div class="fact-active-selector"></div>
                            <div class="vertical-line"></div>
                            
                            <div class="fact-content" style="left: -96px;">
                                A Tecoffice se fundiu em 2016 com a Evec Telecom. Com a
                                fusão a empresa conta com mais de 8 anos de experiência
                                no mercado de TI e Telecom, sendo uma das empresas especializadas
                                em projetos de Telecomunicações e TI, Infraestrutura e Elétrica e Outsourcing.
                            </div>
                        </li>
                        <li class="fact">
                            <div class="fact-active-selector"></div>
                            <div class="vertical-line"></div>
                            
                            <div class="fact-content" style="left: -170px;">
                                A Tecoffice se fundiu em 2016 com a Evec Telecom. Com a
                                fusão a empresa conta com mais de 8 anos de experiência
                                no mercado de TI e Telecom, sendo uma das empresas especializadas
                                em projetos de Telecomunicações e TI, Infraestrutura e Elétrica e Outsourcing.
                            </div>
                        </li>
                        <li class="fact active">
                            <div class="fact-active-selector"></div>
                            <div class="vertical-line"></div>
                            
                            <div class="fact-content" style="left: -170px;">
                                A Tecoffice se fundiu em 2016 com a Evec Telecom. Com a
                                fusão a empresa conta com mais de 8 anos de experiência
                                no mercado de TI e Telecom, sendo uma das empresas especializadas
                                em projetos de Telecomunicações e TI, Infraestrutura e Elétrica e Outsourcing.
                            </div>
                        </li>
                        <li class="fact">
                            <div class="fact-active-selector"></div>
                            <div class="vertical-line"></div>
                            
                            <div class="fact-content" style="left: -345px;">
                                A Tecoffice se fundiu em 2016 com a Evec Telecom. Com a
                                fusão a empresa conta com mais de 8 anos de experiência
                                no mercado de TI e Telecom, sendo uma das empresas especializadas
                                em projetos de Telecomunicações e TI, Infraestrutura e Elétrica e Outsourcing.
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    @parent

    <script>
        $('body').delegate('.fact-active-selector', 'mouseover', function () {
            var parent = $(this).parent();
            if (! parent.hasClass('active')) {
                $('li.fact').removeClass('active');
    
                $('.fact-active-selector, .vertical-line, .fact-content').css('opacity', 0);
    
                parent.find('.fact-active-selector, .vertical-line, .fact-content').animate({
                    opacity : 1
                }, 20);
                parent.addClass('active');
            }
        });
    </script>
@endsection