@extends('layout.master')

@section('styles')
    @parent
    
    <link href="{{ asset('css/customers.css') }}" rel="stylesheet" type="text/css">
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
        
        <p class="text-justify content-paragraph margin-paragraph">
            Lorem ipsum vehicula ipsum fermentum mi lacinia suspendisse sit pellentesque leo,
            amet inceptos sodales nibh lorem vestibulum nec tellus aliquam, luctus blandit
            auctor ligula platea facilisis donec pharetra varius.
        </p>
        
        <p class="text-justify content-paragraph margin-paragraph">
            Etiam dolor hendrerit vitae libero fusce, tristique purus rhoncus vulputate orci nisi, elit per etiam magna.
            suscipit malesuada pretium porttitor volutpat ligula mattis consectetur varius, integer platea himenaeos porttitor mi scelerisque.
        </p>
        
        <p class="text-justify content-paragraph margin-paragraph">
            Tempor dapibus cursus vehicula primis sagittis vivamus viverra rhoncus nulla tincidunt mattis, rhoncus in ipsum ullamcorper eu duis inceptos malesuada tempus sed sodales, magna aliquam accumsan ultricies nunc iaculis a venenatis sapien pretium.
            eros tincidunt lorem integer nostra sit commodo tincidunt tempus a curabitur vehicula, etiam mattis aptent libero mollis duis faucibus rhoncus donec eu pellentesque gravida, sem imperdiet ligula felis torquent augue libero lobortis nunc mi.
            fermentum scelerisque sodales lorem fermentum porttitor phasellus, ante ornare nibh molestie class.
        </p>
        
        <div class="row justify-content-center">
            <div class="col-md-3 col-12 mt-md-5 d-flex d-md-block justify-content-center mt-sm-0 mb-5 mb-md-0 text-center px-2 align-self-center">
                <div class="col-5 col-md-12">
                    <img src="{{ asset('images/partners/cetelem.png') }}" width="100%" alt="">
                </div>
            </div>
            <div class="col-md-3 col-12 mt-md-5 d-flex d-md-block justify-content-center mt-sm-0 mb-5 mb-md-0 text-center px-2 align-self-center">
                <div class="col-5 col-md-12">
                    <img src="{{ asset('images/partners/coca-cola.png') }}" width="100%" alt="">
                </div>
            </div>
            <div class="col-md-3 col-12 mt-md-5 d-flex d-md-block justify-content-center mt-sm-0 mb-5 mb-md-0 text-center px-2 align-self-center">
                <div class="col-5 col-md-12">
                    <img src="{{ asset('images/partners/femsa.png') }}" width="100%" alt="">
                </div>
            </div>
            <div class="col-md-3 col-12 mt-md-5 d-flex d-md-block justify-content-center mt-sm-0 mb-5 mb-md-0 text-center px-2 align-self-center">
                <div class="col-5 col-md-12">
                    <img src="{{ asset('images/partners/heineken.png') }}" width="100%" alt="">
                </div>
            </div>
            <div class="col-md-3 col-12 mt-md-5 d-flex d-md-block justify-content-center mt-sm-0 mb-5 mb-md-0 text-center px-2 align-self-center">
                <div class="col-5 col-md-12">
                    <img src="{{ asset('images/partners/telhanorte.png') }}" width="100%" alt="">
                </div>
            </div>
            <div class="col-md-3 col-12 mt-md-5 d-flex d-md-block justify-content-center mt-sm-0 mb-5 mb-md-0 text-center px-2 align-self-center">
                <div class="col-5 col-md-12">
                    <img src="{{ asset('images/partners/hp.png') }}" height="100%" alt="">
                </div>
            </div>
            <div class="col-md-3 col-12 mt-md-5 d-flex d-md-block justify-content-center mt-sm-0 mb-5 mb-md-0 text-center px-2 align-self-center">
                <div class="col-5 col-md-12">
                    <img src="{{ asset('images/partners/saint-gobain.png') }}" width="100%" alt="">
                </div>
            </div>
        </div>
    </section>
@endsection