<!doctype html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Target</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/plugins/bootstrap/css/bootstrap.min.css">

    <!-- Styles -->
    <style>
        @media screen and (max-width: 991px) {
            .logo {
                width: 100%;
                margin-top: 10em;
            }

            html, body {
                background: url(/images/background_mobile.jpg) center center/cover no-repeat;
                font-family: Ubuntu, sans-serif;
                color: #666;
                margin: 0;
            }

            .content {
                padding: 15px 2em 0;
            }

            footer {
                position: relative;
                margin-top: 10em;
                text-align: center;
                height: 72px;
            }
        }

        @media screen and (min-width: 991px) {
            .logo {
                width: 70%;
            }

            html, body {
                background: url(/images/background.jpg) center center/cover no-repeat;
                font-family: Ubuntu, sans-serif;
                color: #666;
                height: 100vh;
                margin: 0;
            }

            footer {
                position: absolute;
                height: 50px;
                bottom: 0;
                margin-top: 10em;
            }
        }

        footer {
            padding: 15px 2em 0;
            width: 100%;
            background: #000;
            box-sizing: border-box;
            color: #fff;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .flex-vertical {
            flex-direction: column;
        }

        .btn-submit {
            color: #fff;
            background-color: #184686;
            border-color: #184686;
        }

        .btn-submit:hover {
            color: #fff;
            background-color: #173d7a;
            border-color: #173d7a;
        }

        .m-b-sm {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
<div class="full-height flex-center content col-sm-12">
    <div class="row">
        <div class="col-lg-7 col-md-12 flex-center flex-vertical">
            <img src="/images/logo_target.png"
                 class="img-responsive logo">
        </div>
        <div class="col-lg-5 col-md-12">
            <div class="row">
                <div class="col-md-12 col-lg-7 ml-sm-auto">
                    <form action="/contact_message.php" method="POST">
                        <div class="m-b-sm">
                            <input name="name" type="text" class="form-control align-middle" required
                                   placeholder="* Digite seu nome">
                        </div>
                        <div class="m-b-sm">
                            <input name="email" type="email" class="form-control align-middle" required
                                   placeholder="* Digite seu email">
                        </div>
                        <div class="m-b-sm">
                            <input name="phone" type="text" class="form-control align-middle"
                                   placeholder="Digite seu telefone">
                        </div>
                        <div class="m-b-sm">
                            <textarea name="message" class="form-control" cols="30" rows="10" required
                                      placeholder="* Digite sua mensagem"></textarea>
                        </div>
                        <button class="btn btn-submit btn-block">ENVIAR</button>
                        <small class="text-light small-text">* campos de preenchimento obrigatório</small>
                    </form>

                    <?php if(isset($_GET['success'])) {
                        echo sprintf("
                    <div id=\"flash-message\" class=\"text-success\">
                        Contato enviado com sucesso
                    </div>");
                    }  ?>
                </div>
                <div class="col-sm-12 col-md-3"></div>
            </div>
        </div>
    </div>
</div>
<footer>
    <div class="float-md-left float-sm-none">
        Target - 2017 - Copyright
    </div>
    <a href="http://www.newmove.com.br" target="_blank" title="New Move" class="float-md-right float-sm-none">
        <img class="newmove" src="/images/logo_new.png">
    </a>
</footer>

<script src="/js/app.js"></script>
<script type="text/javascript">
    setTimeout(function () {
        $("#flash-message").toggle(function () {
            $(this).animate({height: 40}, 5000);
        }, function () {
            $(this).animate({height: 0}, 5000);
        });
    }, 2000);
</script>
</body>
</html>