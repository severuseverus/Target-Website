<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Target</title>
    
    @section('styles')
        <!-- Fonts -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans" />
        
        <link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('plugins/bootstrap/css/bootstrap-grid.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('plugins/bootstrap/css/bootstrap-reboot.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('plugins/slick/slick.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('plugins/slick/slick-theme.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    @show
</head>
<body>
<div class="wrapper">
    @include('layout.header')
    
    @yield('content')
    
    @include('layout.footer')
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