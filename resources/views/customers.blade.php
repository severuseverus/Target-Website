@extends('layout.master')

@section('styles')
    @parent
    
    <link href="{{ asset('css/customers.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')
    <section class="customers-banner">
        <div class="row content justify-content-center py-5">
            <div class="pt-5">
                <div class="pt-5">
                    <h2 class="banner-title">Clientes</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="customers-content content">
        <ol class="breadcrumb pt-1 pl-md-0 pl-sm-2">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Library</a></li>
            <li class="breadcrumb-item active">Data</li>
        </ol>
        
        <p class="text-justify">
            Lorem ipsum vehicula ipsum fermentum mi lacinia suspendisse sit pellentesque leo, amet inceptos sodales nibh lorem vestibulum nec tellus aliquam, luctus blandit auctor ligula platea facilisis donec pharetra varius.
        </p>
        
        <p class="text-justify">
            Etiam dolor hendrerit vitae libero fusce, tristique purus rhoncus vulputate orci nisi, elit per etiam magna.
            suscipit malesuada pretium porttitor volutpat ligula mattis consectetur varius, integer platea himenaeos porttitor mi scelerisque.
        </p>
        
        <p class="text-justify">
            Tempor dapibus cursus vehicula primis sagittis vivamus viverra rhoncus nulla tincidunt mattis, rhoncus in ipsum ullamcorper eu duis inceptos malesuada tempus sed sodales, magna aliquam accumsan ultricies nunc iaculis a venenatis sapien pretium.
            eros tincidunt lorem integer nostra sit commodo tincidunt tempus a curabitur vehicula, etiam mattis aptent libero mollis duis faucibus rhoncus donec eu pellentesque gravida, sem imperdiet ligula felis torquent augue libero lobortis nunc mi.
            fermentum scelerisque sodales lorem fermentum porttitor phasellus, ante ornare nibh molestie class.
        </p>
        
        <div class="row justify-content-center">
            <div class="col-md-3 mt-md-5 mt-sm-0 text-center px-2 align-self-center"><img src="{{ asset('images/partners/cetelem.png') }}" width="100%" alt=""></div>
            <div class="col-md-3 mt-md-5 mt-sm-0 text-center px-2 align-self-center"><img src="{{ asset('images/partners/coca-cola.png') }}" width="100%" alt=""></div>
            <div class="col-md-3 mt-md-5 mt-sm-0 text-center px-2 align-self-center"><img src="{{ asset('images/partners/femsa.png') }}" width="100%" alt=""></div>
            <div class="col-md-3 mt-md-5 mt-sm-0 text-center px-2 align-self-center"><img src="{{ asset('images/partners/heineken.png') }}" width="100%" alt=""></div>
            <div class="col-md-3 mt-md-5 mt-sm-0 text-center px-2 align-self-center"><img src="{{ asset('images/partners/telhanorte.png') }}" width="100%" alt=""></div>
            <div class="col-md-3 mt-md-5 mt-sm-0 text-center px-2 align-self-center"><img src="{{ asset('images/partners/hp.png') }}" height="100%" alt=""></div>
            <div class="col-md-3 mt-md-5 mt-sm-0 text-center px-2 align-self-center"><img src="{{ asset('images/partners/saint-gobain.png') }}" width="100%" alt=""></div>
        </div>
    </section>
@endsection