@extends('layout.master')

@section('styles')
    @parent
    
    <link href="{{ asset('css/technological-partners.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')
    <section class="customers-banner">
        <div class="row content justify-content-center">
            <h2 class="banner-title">Parceiros Tecnológicos</h2>
        </div>
    </section>
    <section class="customers-content content p-4 p-md-0">
        <ol class="breadcrumb pt-1 pl-md-0 pl-sm-2 d-none d-md-block">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
            <li class="breadcrumb-item"><a href="#">Parceiros</a></li>
            <li class="breadcrumb-item active">Parceiros Tecnológicos</li>
        </ol>
        
        <div class="row justify-content-center">
            <div class="col-md-3 col-12 mt-md-5 d-flex d-md-block justify-content-center mt-sm-0 mb-5 mb-md-0 text-center px-2 align-self-center">
                <div class="col-5 col-md-12">
                    <img src="{{ asset('images/partners/technological/logo_dell.png') }}" width="50%" alt="">
                </div>
            </div>
            <div class="col-md-3 col-12 mt-md-5 d-flex d-md-block justify-content-center mt-sm-0 mb-5 mb-md-0 text-center px-2 align-self-center">
                <div class="col-5 col-md-12">
                    <img src="{{ asset('images/partners/technological/logo_furukawa.png') }}" width="100%" alt="">
                </div>
            </div>
            <div class="col-md-3 col-12 mt-md-5 d-flex d-md-block justify-content-center mt-sm-0 mb-5 mb-md-0 text-center px-2 align-self-center">
                <div class="col-5 col-md-12">
                    <img src="{{ asset('images/partners/technological/logo_grandstream.png') }}" width="100%" alt="">
                </div>
            </div>
            <div class="col-md-3 col-12 mt-md-5 d-flex d-md-block justify-content-center mt-sm-0 mb-5 mb-md-0 text-center px-2 align-self-center">
                <div class="col-5 col-md-12">
                    <img src="{{ asset('images/partners/technological/logo_intelbras.png') }}" width="100%" alt="">
                </div>
            </div>
            <div class="col-md-3 col-12 mt-md-5 d-flex d-md-block justify-content-center mt-sm-0 mb-5 mb-md-0 text-center px-2 align-self-center">
                <div class="col-5 col-md-12">
                    <img src="{{ asset('images/partners/technological/logo_microsoft.png') }}" width="100%" alt="">
                </div>
            </div>
            <div class="col-md-3 col-12 mt-md-5 d-flex d-md-block justify-content-center mt-sm-0 mb-5 mb-md-0 text-center px-2 align-self-center">
                <div class="col-5 col-md-12">
                    <img src="{{ asset('images/partners/technological/logo_panasonic.png') }}" width="100%" alt="">
                </div>
            </div>
            <div class="col-md-3 col-12 mt-md-5 d-flex d-md-block justify-content-center mt-sm-0 mb-5 mb-md-0 text-center px-2 align-self-center">
                <div class="col-5 col-md-12">
                    <img src="{{ asset('images/partners/technological/logo_plantronics.png') }}" width="100%" alt="">
                </div>
            </div>
            <div class="col-md-3 col-12 mt-md-5 d-flex d-md-block justify-content-center mt-sm-0 mb-5 mb-md-0 text-center px-2 align-self-center">
                <div class="col-5 col-md-12">
                    <img src="{{ asset('images/partners/technological/logo_unify.png') }}" width="100%" alt="">
                </div>
            </div>
            <div class="col-md-3 col-12 mt-md-5 d-flex d-md-block justify-content-center mt-sm-0 mb-5 mb-md-0 text-center px-2 align-self-center">
                <div class="col-5 col-md-12">
                    <img src="{{ asset('images/partners/technological/logo_yealink.png') }}" width="100%" alt="">
                </div>
            </div>
        </div>
    </section>
@endsection