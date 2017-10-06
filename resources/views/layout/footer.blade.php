<footer style="margin-top: 20px">
    <section class="leads">
        <div class="content">
            <span style="font-size: 18px;letter-spacing: 3px;">Receba em primeira mão as novidades da <strong>Target</strong> e principais notícias.</span>
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
                    <div class="footer-target-description">
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
                <div class="col-md-5 col-12 d-none d-md-block">
                    <div class="row m-t-37">
                        <div class="col-12">
                            <span>Sobre nós</span>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <ul class="footer-navigation">
                                <li><a href="{{ route('home') }}" class="footer-nav-link">Início</a></li>
                                <li><a href="#" class="footer-nav-link">A empresa</a></li>
                                <li><a href="{{ route('network-infrastructure') }}" class="footer-nav-link">Soluções</a></li>
                                <li><a href="{{ route('commercial-partners') }}" class="footer-nav-link">Parceiros</a></li>
                                <li><a href="{{ route('customers') }}" class="footer-nav-link">Clientes</a></li>
                                <li><a href="{{ route('cases') }}" class="footer-nav-link">Cases</a></li>
                                <li><a href="{{ route('contact') }}" class="footer-nav-link">Contato</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="footer-bottom">
                <div class="row">
                    <div class="col-7">
                        <ul>
                            <li>Target CNPJ: 26.542.834/0001-12</li>
                            <li>Avenida Amador Bueno da Veiga, 2299 São Paulo – SP - CEP: 03635-001</li>
                            <li>Copyright  {{ date('Y') }} - Target</li>
                        </ul>
                    </div>
                    <div class="col-5">
                        <ul class="float-right d-flex align-content-center">
                            <li class="align-self-center" style="margin-right: 20px">
                                <a href="https://www.facebook.com/pg/targetteleinformatica.com.br/about/?ref=page_internal">
                                    <img src="{{ asset('images/logo_facebook.png') }}" class="facebook-icon" alt="Facebook">
                                </a>
                            </li>
                            <li class="align-self-center">
                                <a href="http://www.newmove.com.br">
                                    <img src="{{ asset('images/logo_newmove.png') }}" class="newmove-icon" alt="New Move">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>