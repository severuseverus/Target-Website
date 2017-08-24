<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Target</title>
    
    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans" />
    
    <link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('plugins/bootstrap/css/bootstrap-grid.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('plugins/bootstrap/css/bootstrap-reboot.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('plugins/slick/slick.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('plugins/slick/slick-theme.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
<div class="wrapper">
    <header>
        <nav class="navbar navbar-expand-md rm-padding-bottom navbar-light fixed-top">
            <div class="row content">
                <div class="col-12">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="{{ asset('images/logo.png') }}" alt="Target" height="50px"></a>
                </div>
                <div class="col-12">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link rm-padding rm-padding-left rm-padding-right" href="#">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link rm-padding rm-padding-left rm-padding-right" href="#">A empresa</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle rm-padding rm-padding-left rm-padding-right" href="" id="solutions-items" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Soluções
                                </a>
                                <div class="dropdown-menu" aria-labelledby="solutions-items">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle rm-padding rm-padding-left rm-padding-right" href="" id="partners-items" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Parceiros
                                </a>
                                <div class="dropdown-menu" aria-labelledby="partners-items">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link rm-padding rm-padding-left rm-padding-right" href="#">Clientes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link rm-padding rm-padding-left rm-padding-right" href="#">Cases</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link rm-padding rm-padding-left rm-padding-right" href="#">Contato</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    @yield('content')
    
    <footer style="margin-top: 20px">
        <section class="leads">
            <div class="content">
                <span style="font-size: 20px;">Receba em primeira mão as novidades da <strong>Target</strong> e principáis notícias.</span>
                <form action="" method="POST">
                    <div class="form-group row">
                        <div class="col-md-5 col-6">
                            <input type="text" name="name" class="form-control" placeholder="Digite seu nome completo">
                        </div>
                        <div class="col-md-5 col-6">
                            <input type="text" name="email" class="form-control" placeholder="Digite seu e-mail">
                        </div>
                        <div class="col-md-2 col-12">
                            <button class="btn btn-assign">
                                Assinar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <section class="footer">
            <div class="content">
                <div class="footer-up row">
                    <div class="col-md-7 col-12">
                        <div class="row">
                            <div class="col-12">
                                <img src="{{ asset('images/logo_white.png') }}" alt="Target">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-10">
                                <p class="text-justify">
                                    Lorem ipsum quam faucibus netus vitae arcu tortor,
                                    vel fusce cubilia morbi id velit tellus, libero convallis
                                    nostra amet aenean eros. porttitor consectetur viverra lacus
                                    purus vestibulum aenean, vulputate ad etiam pharetra egestas,
                                    ut sem arcu ad mi velit, in elementum ultricies quisque. lacinia
                                    felis suspendisse magna sollicitudin dictum, curae ultrices ut
                                    lobortis risus nisl, suspendisse vitae fermentum phasellus.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-12 d-none d-md-block">
                        <div class="row m-t-37">
                            <div class="col-12">
                                <span>Sobre nós</span>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <ul>
                                    <li>Início</li>
                                    <li>A empresa</li>
                                    <li>Soluções</li>
                                    <li>Parceiros</li>
                                    <li>Clientes</li>
                                    <li>Cases</li>
                                    <li>Contato</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="footer-bottom">
                    <ul>
                        <li>Target CNPJ: 00.000.000/0000-00</li>
                        <li>Avenida Amador Bueno da Veiga, 2299, Penha de França - SP - CEP: 03636-100</li>
                        <li>Copyright  {{ date('Y') }} - Target</li>
                    </ul>
                </div>
            </div>
        </section>
    </footer>
</div>
<script type="text/javascript" src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/popper.js/dist/umd/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/slick/slick.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/FitText.js/jquery.fittext.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $(".slider").slick({
            arrows: false,
            dots: true,
            autoplay: true,
            autoplaySpeed: 3000
        });
        
        $(".fit-text").fitText();
    });
</script>
</body>
</html>