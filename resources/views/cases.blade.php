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
        <p class="text-justify content-paragraph margin-paragraph">
            Lorem ipsum dolor sit amet, consectur, adipiscing elit. Sed pallentesque lobortis vehicula.
            Mauris molestie risus erat, ut egestas tortor pulvinar in. Phasellus vel sem id purus
            volutpat malesuada. Nam rutrum lacus in justo rhoncus pretium.
        </p>
        
        <div class="row justify-content-center">
            <div class="col-md-4 col-12 mt-md-5 mt-sm-0 mb-5 mb-md-0 px-2 py-5">
                <div class="col-12 mb-3 d-flex justify-content-center">
                    <div class="col-md-12 col-5 d-flex justify-content-center">
                        <img src="{{ asset('images/partners/cetelem.png') }}" height="56px" alt="">
                    </div>
                </div>
                <div class="col-12 text-center text-justify text-md-left">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque lobortis vehicula.
                </div>
            </div>
            <div class="col-md-4 col-12 mt-md-5 mt-sm-0 mb-5 mb-md-0 px-2 py-5">
                <div class="col-12 mb-3 d-flex justify-content-center">
                    <div class="col-md-12 col-5 d-flex justify-content-center">
                        <img src="{{ asset('images/partners/coca-cola.png') }}" height="56px" alt="">
                    </div>
                </div>
                <div class="col-12 text-center text-justify text-md-left">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque lobortis vehicula.
                </div>
            </div>
            <div class="col-md-4 col-12 mt-md-5 mt-sm-0 mb-5 mb-md-0 px-2 py-5">
                <div class="col-12 mb-3 d-flex justify-content-center">
                    <div class="col-md-12 col-5 d-flex justify-content-center">
                        <img src="{{ asset('images/partners/heineken.png') }}" height="56px" alt="">
                    </div>
                </div>
                <div class="col-12 text-center text-justify text-md-left">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque lobortis vehicula.
                </div>
            </div>
            <div class="col-md-4 col-12 mt-md-5 mt-sm-0 mb-5 mb-md-0 px-2 py-5">
                <div class="col-12 mb-3 d-flex justify-content-center">
                    <div class="col-md-12 col-5 d-flex justify-content-center">
                        <img src="{{ asset('images/partners/telhanorte.png') }}" height="56px" alt="">
                    </div>
                </div>
                <div class="col-12 text-center text-justify text-md-left">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque lobortis vehicula.
                </div>
            </div>
            <div class="col-md-4 col-12 mt-md-5 mt-sm-0 mb-5 mb-md-0 px-2 py-5">
                <div class="col-12 mb-3 d-flex justify-content-center">
                    <div class="col-md-12 col-5 d-flex justify-content-center">
                        <img src="{{ asset('images/partners/hp.png') }}" height="56px" alt="">
                    </div>
                </div>
                <div class="col-12 text-center text-justify text-md-left">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque lobortis vehicula.
                </div>
            </div>
            <div class="col-md-4 col-12 mt-md-5 mt-sm-0 mb-5 mb-md-0 px-2 py-5">
                <div class="col-12 mb-3 d-flex justify-content-center">
                    <div class="col-md-12 col-5 d-flex justify-content-center">
                        <img src="{{ asset('images/partners/saint-gobain.png') }}" height="56px" alt="">
                    </div>
                </div>
                <div class="col-12 text-center text-justify text-md-left">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque lobortis vehicula.
                </div>
            </div>
            <div class="col-md-4 col-12 mt-md-5 mt-sm-0 mb-5 mb-md-0 px-2 py-5">
                <div class="col-12 mb-3 d-flex justify-content-center">
                    <div class="col-md-12 col-5 d-flex justify-content-center">
                        <img src="{{ asset('images/partners/femsa.png') }}" height="56px" alt="">
                    </div>
                </div>
                <div class="col-12 text-center text-justify text-md-left">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque lobortis vehicula.
                </div>
            </div>
        </div>
    </section>
@endsection