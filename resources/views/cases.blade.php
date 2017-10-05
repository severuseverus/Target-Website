@extends('layout.master')

@section('styles')
    @parent
    
    <link href="{{ asset('css/customers.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')
    <section class="customers-banner">
        <div class="row content justify-content-center">
            <h2 class="banner-title">Cases</h2>
        </div>
    </section>
    <section class="customers-content content p-4 p-md-0">
        <ol class="breadcrumb pt-1 pl-md-0 pl-sm-2 d-none d-md-block">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
            <li class="breadcrumb-item"><a href="#">Parceiros</a></li>
            <li class="breadcrumb-item active">Parceiros Tecnológicos</li>
        </ol>
    
        <img src="{{ asset('images/cases/logo_FDE.png') }}" alt="Target" height="50px">
        <h3>FDE – GOVERNO DO ESTADO DE SÃO PAULO</h3>
        <p class="text-justify content-paragraph margin-paragraph">Atualmente em todo o estado de São Paulo existem mais de 5.500 unidades de ensino divididas entre escolas, núcleos, prédios centrais e diretorias que utilizam 5.500 Firewalls e 13.000 Switches.</p>
        <p class="text-justify content-paragraph margin-paragraph">A Target® é responsável pelos atendimentos físicos em campo (field services) em caso de inoperância dos equipamentos de rede, cobrindo com nossas equipes todo o território estadual em até 4 horas para restabelecer a comunicação.</p>
        <p class="text-justify content-paragraph margin-paragraph">Nossas equipes são dimensionadas de forma estratégica, proporcionando cobertura completa de forma eficiente.</p>
        <strong>Escopo dos serviços:</strong>
        <p class="text-justify content-paragraph margin-paragraph">Logística, manutenção, suporte, RMA, adequação, reorganização, infraestrutura e cabeamento.</p>
        <strong>Tecnologias:</strong>
        <p class="text-justify content-paragraph margin-paragraph">Firewalls & Gerenciamento: Fortinet</p>
        <p class="text-justify content-paragraph margin-paragraph">Switches: HP</p>
    
        <img class="mt-4" src="{{ asset('images/cases/logo_falcao_bauer.png') }}" alt="Target" height="50px">
        <h3>FALCÃO BAUER</h3>
        <strong>Desafio:</strong>
        <p class="text-justify content-paragraph margin-paragraph">Efetuar o espelhamento do novo PABX para o DG preservando todo o cabeamento do PABX antigo para que a migração fosse efetuada gradativamente.</p>
        <strong>Solução:</strong>
        <p class="text-justify content-paragraph margin-paragraph">Reorganização da infraestrutura de telefonia preservando o cabeamento e o PABX antigo, identificação dos pontos utilizando todos os recursos e equipamentos necessários ao completo atendimento à demanda da Matriz da Falcão Bauer.</p>
        <p class="text-justify content-paragraph margin-paragraph"><strong>Tecnologia:</strong> Alcatel Lucent</p>
        <p class="text-justify content-paragraph margin-paragraph">Espaço utilizado no DG para abertura do cabeamento nos blocos aplicando a técnica de “instalação flutuante” onde não aparecem os cabos na prancha frontal.</p>
    
        <img class="mt-4" src="{{ asset('images/cases/logo_prodata.png') }}" alt="Target" height="50px">
        <h3>PRODATA MOBILITY</h3>
        <strong>Desafio:</strong>
        <p class="text-justify content-paragraph margin-paragraph">Efetuar a readequação da infraestrutura de rede do 14ºandar da área de desenvolvimento interligando o rack de dados ao Backbone Óptico no CPD do cliente.</p>
        <strong>Solução:</strong>
        <p class="text-justify content-paragraph margin-paragraph">Efetuado a readequação de rack de dados implantando o padrão das normas de cabeamento estruturado e realizando a interligação do switch do rack do departamento de Desenvolvimento para o Backbone Óptico no CPD Principal proporcionando melhor qualidade e velocidade na comunicação de dados para os engenheiros do departamento de desenvolvimento.</p>
        <p class="text-justify content-paragraph margin-paragraph"><strong>Tecnologia:</strong> Furukawa</p>
    </section>
@endsection