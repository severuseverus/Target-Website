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
                <h4>Outsourcing de tecnologia</h4>
                <p class="text-justify content-paragraph margin-paragraph">
                    O <strong>Outsourcing de TI</strong> não é mais privilégio das grandes empresas. O departamento
                    de <strong>Tecnologia da Informação (TI)</strong> também se tornou indispensável para médias e pequenas
                    empresas, que têm desfrutado desse modelo de negócio na tentativa de eliminar a
                    preocupação com a contratação de profissionais especializados, aumentar a produtividade, a
                    rentabilidade e a <a href="http://stefanini.com/br/2013/10/outsourcing-ti-estrategico/">vantagem competitiva</a>.
                </p>
                <p class="text-justify content-paragraph margin-paragraph">
                    O Outsourcing é a terceirização, quando se fala em estratégia de negócios. Dados da IDC
                    revelam que enquanto o mercado total de TI deve crescer de 7% a 8% ao ano até 2017, o de
                    outsourcing terá um aumento de mais de 10%. As pequenas e médias empresas têm
                    impulsionado esse crescimento, por entender que o Outsourcing de TI é uma importante
                    estratégia para ganhar competitividade de mercado.
                </p>
                <h4 class="text-justify">AS VANTAGENS DO OUTSOURCING DE TI</h4>
                <p class="text-justify content-paragraph margin-paragraph">
                    O <span style="text-decoration: underline;">Outsourcing de TI</span> proporciona alívio ao cliente e maior eficácia na estrutura organizacional;
                    desburocratização; facilidade em montar uma equipe formada por especialistas atualizados
                    com os melhores recursos de TI para resolver problemas e desenvolver melhorias; maior
                    agilidade para desenvolver projetos de TI específicos para a empresa; auxilio nas tomadas de
                    decisão, fornecendo informações, cenário e conhecimento na área; maior dedicação da equipe
                    interna com outras frentes, além de economia, já que não haverá gastos com a contratação de
                    profissionais de TI que, em muitos casos, podem não possuir o conhecimento necessário.
                </p>
            </div>
            <div class="col-md-1 col-12"></div>
            <div class="col-md-6 col-12">
                <div class="row">
                    <div class="col-12 col-md-4 d-flex d-md-block justify-content-center mb-3 mb-md-0">
                        <div class="d-flex justify-content-center">
                            <img class="align-self-center" src="{{ asset('images/solutions/information-technology/Profissionais_Qualificados.png') }}" alt="" width="75%">
                        </div>
                    </div>
                    <div class="col-12 col-md-8 align-self-center content-paragraph text-justify">
                        PROFISSIONAIS QUALIFICADOS
                    </div>
                </div>
                <div class="row margin-circle">
                    <div class="col-12 col-md-4 d-flex d-md-block justify-content-center mb-3 mb-md-0">
                        <div class="d-flex justify-content-center">
                            <img class="align-self-center" src="{{ asset('images/solutions/information-technology/Profissionais_Qualificados.png') }}" alt="" width="75%">
                        </div>
                    </div>
                    <div class="col-12 col-md-8 align-self-center content-paragraph text-justify">
                        GERENCIAMENTO DE PROJETOS
                    </div>
                </div>
                <div class="row margin-circle">
                    <div class="col-12 col-md-4 d-flex d-md-block justify-content-center mb-3 mb-md-0">
                        <div class="d-flex justify-content-center">
                            <img class="align-self-center" src="{{ asset('images/solutions/information-technology/Outsourcing_Impressao.png') }}" alt="" width="75%">
                        </div>
                    </div>
                    <div class="col-12 col-md-8 align-self-center content-paragraph text-justify">
                        OUTSOURCING DE IMPRESSÃO
                    </div>
                </div>
            </div>
        </div>
        @include('solutions.partials.doubts')
    </section>
@endsection