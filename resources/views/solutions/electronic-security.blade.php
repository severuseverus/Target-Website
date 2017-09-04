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
                    Lorem ipsum dolor sit amet, consectur adipiscing elit. Sed pallentesque lobortis vehicula.
                    Mauris molestie risus erat, ut egestas tortor pulvinar in. Phasellus vel sem id purus
                    volutpat malesuada.
                </p>
                <p class="text-justify content-paragraph margin-paragraph">
                    Nulla quam ante, fermentum in tincidut ut, feugiat in quam. In suspicit nec velit vitae
                    mattis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia
                    Curae; In ornare mi at nisl consequat, vel consequat lectus pharetra.
                </p>
                <p class="text-justify content-paragraph">
                    Lorem ipsum dolor sit amet, consectur, adipiscing elit. Sed pallentesque lobortis vehicula.
                    Mauris molestie risus erat, ut egestas tortor pulvinar in. Phasellus vel sem id purus
                    volutpat malesuada. Nam rutrum lacus in justo rhoncus pretium.
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
        <div class="row" style="margin-top: 5rem;">
            <div class="col-md-6 col-12 text-center text-md-right">
                Dúvidas ou interesse?
            </div>
            <div class="col-md-6 col-12 text-center text-md-left">
                <a href="{{ route('contact') }}" class="talk-to-us text-uppercase">
                    Fale conosco
                </a>
            </div>
        </div>
    </section>
@endsection