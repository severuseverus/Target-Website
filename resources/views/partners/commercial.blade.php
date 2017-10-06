@extends('layout.master')

@section('styles')
    @parent
    
    <link href="{{ asset('css/commercial-partners.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')
    <section class="customers-banner">
        <div class="row content justify-content-center">
            <h2 class="banner-title">Parceiros Comerciais</h2>
        </div>
    </section>
    <section class="customers-content content p-4 p-md-0">
        <ol class="breadcrumb pt-1 pl-md-0 pl-sm-2 d-none d-md-block">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
            <li class="breadcrumb-item"><a href="#">Parceiros</a></li>
            <li class="breadcrumb-item active">Parceiros Comerciais</li>
        </ol>
        
        <div class="row justify-content-center">
            <div class="col-md-3 col-12 mt-md-5 d-flex d-md-block justify-content-center mt-sm-0 mb-5 mb-md-0 text-center px-2 align-self-center">
                <div class="col-5 col-md-12">
                    <img src="{{ asset('images/partners/commercial/logo_network.png') }}" width="100%" alt="">
                </div>
            </div>
            <div class="col-md-3 col-12 mt-md-5 d-flex d-md-block justify-content-center mt-sm-0 mb-5 mb-md-0 text-center px-2 align-self-center">
                <div class="col-5 col-md-12">
                    <img src="{{ asset('images/partners/commercial/_logo_plantec.png') }}" width="100%" alt="">
                </div>
            </div>
            <div class="col-md-3 col-12 mt-md-5 d-flex d-md-block justify-content-center mt-sm-0 mb-5 mb-md-0 text-center px-2 align-self-center">
                <div class="col-5 col-md-12">
                    <img src="{{ asset('images/partners/commercial/_logo_Santil.png') }}" width="100%" alt="">
                </div>
            </div>
            <div class="col-md-3 col-12 mt-md-5 d-flex d-md-block justify-content-center mt-sm-0 mb-5 mb-md-0 text-center px-2 align-self-center">
                <div class="col-5 col-md-12">
                    <img src="{{ asset('images/partners/commercial/_logo_telcabos.png') }}" width="100%" alt="">
                </div>
            </div>
            <div class="col-md-3 col-12 mt-md-5 d-flex d-md-block justify-content-center mt-sm-0 mb-5 mb-md-0 text-center px-2 align-self-center">
                <div class="col-5 col-md-12">
                    <img src="{{ asset('images/partners/commercial/logo_velans.png') }}" width="100%" alt="">
                </div>
            </div>
            <div class="col-md-3 col-12 mt-md-5 d-flex d-md-block justify-content-center mt-sm-0 mb-5 mb-md-0 text-center px-2 align-self-center">
                <div class="col-5 col-md-12">
                    <img src="{{ asset('images/partners/commercial/logo_wdc.png') }}" width="45%" alt="">
                </div>
            </div>
        </div>
    </section>
@endsection