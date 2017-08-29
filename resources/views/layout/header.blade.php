<header>
    <div class="nav-wrapper fixed-top">
        <nav class="navbar navbar-expand-md -bottom navbar-light fixed-top pr-0 pl-0 pb-0">
            <div class="row content fill-width margin-nav-content">
                <div class="col-12 pl-md-0 pl-sm-4 pr-md-0 pr-sm-4">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="{{ asset('images/logo.png') }}" alt="Target" height="50px"></a>
                </div>
                <div class="col-12 pr-0 pl-0 margin-nav-items">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item nav-option-1 @if(request()->routeIs('home')) active @endif">
                                <a class="px-sm-4 px-md-0 py-sm-3 py-md-0 nav-link" href="{{ route('home') }}">Inicio</a>
                            </li>
                            <li class="nav-item nav-option-2 @if(request()->routeIs('company')) active @endif">
                                <a class="px-sm-4 px-md-0 py-sm-3 py-md-0 nav-link" href="#">A empresa</a>
                            </li>
                            <li class="nav-item nav-option-3 dropdown @if(request()->routeIs("network-infrastructure") || request()->routeIs("electric-networks") || request()->routeIs("electronic-security") || request()->routeIs("telecommunications")) active @endif">
                                <a class="px-sm-4 px-md-0 py-sm-3 py-md-0 nav-link dropdown-toggle" href="" id="solutions-items" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Soluções
                                </a>
                                <div class="dropdown-menu pb-0 pt-0" aria-labelledby="solutions-items">
                                    <a class="dropdown-item py-sm-3 py-md-2 px-md-3 px-sm-5" href="{{ route('network-infrastructure') }}">Infraestrutura de Redes</a>
                                    <a class="dropdown-item py-sm-3 py-md-2 px-md-3 px-sm-5" href="{{ route('electric-networks') }}">Rede Elétrica</a>
                                    <a class="dropdown-item py-sm-3 py-md-2 px-md-3 px-sm-5" href="{{ route('electronic-security') }}">Segurança Eletrônica</a>
                                    <a class="dropdown-item py-sm-3 py-md-2 px-md-3 px-sm-5" href="{{ route('telecommunications') }}">Telecomunicações</a>
                                </div>
                            </li>
                            <li class="nav-item nav-option-4 dropdown @if(request()->routeIs('commercial-partners') || request()->routeIs('technological-partners')) active @endif">
                                <a class="px-sm-4 px-md-0 py-sm-3 py-md-0 nav-link dropdown-toggle" href="" id="partners-items" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Parceiros
                                </a>
                                <div class="dropdown-menu pb-0 pt-0" aria-labelledby="partners-items">
                                    <a class="dropdown-item py-sm-3 py-md-2 p-2 px-md-3 px-sm-5" href="{{ route('commercial-partners') }}">Parceiros Comerciais</a>
                                    <a class="dropdown-item py-sm-3 py-md-2 p-2 px-md-3 px-sm-5" href="{{ route('technological-partners') }}">Parceiros Tecnológicos</a>
                                </div>
                            </li>
                            <li class="nav-item nav-option-5 @if(request()->routeIs('customers')) active @endif">
                                <a class="px-sm-4 px-md-0 py-sm-3 py-md-0 nav-link" href="{{ route('customers') }}">Clientes</a>
                            </li>
                            <li class="nav-item nav-option-6 @if(request()->routeIs('cases')) active @endif">
                                <a class="px-sm-4 px-md-0 py-sm-3 py-md-0 nav-link" href="#">Cases</a>
                            </li>
                            <li class="nav-item nav-option-7 @if(request()->routeIs('contact')) active @endif">
                                <a class="px-sm-4 px-md-0 py-sm-3 py-md-0 nav-link" href="{{ route('contact') }}">Contato</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>