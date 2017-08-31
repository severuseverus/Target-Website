@extends('layout.master')

@section('styles')
    @parent
    
    <link href="{{ asset('css/customers.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')
    <section class="customers-banner">
        <div class="row content justify-content-center">
            <h2 class="banner-title">Contato</h2>
        </div>
    </section>
    <section class="contact-content content p-4 p-md-0">
        <ol class="breadcrumb pt-1 pl-md-0 pl-sm-2 d-none d-md-block">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
            <li class="breadcrumb-item active">Contato</li>
        </ol>
    
        <p class="py-4 content-paragraph margin-paragraph">
            Precisa de ajuda? A Target Teleinformática está sempre
            presente para esclarecer dúvidas e ouvir reclamações e
            sugestões.
        </p>
        
        <form action="#">
            <div class="row">
                <div class="col-12">
                    <label for="name">Seu nome</label>
                    <input type="text" id="name" name="name" class="form-control">
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <label for="email">Seu e-mail</label>
                    <input type="text" id="email" name="email" class="form-control">
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-6">
                    <label for="phone">Telefone</label>
                    <input type="text" id="phone" name="phone" class="form-control">
                </div>
                <div class="col-6">
                    <label for="cellphone">Celular</label>
                    <input type="text" id="cellphone" name="cellphone" class="form-control">
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <label for="message">Mensagem</label>
                    <textarea name="message" id="message" rows="10" class="form-control"></textarea>
                </div>
            </div>
            <div class="row mt-2 mb-4">
                <div class="col-12">
                    <button type="submit" class="btn btn-assign-dark">Enviar</button>
                </div>
            </div>
        </form>
    
        <div class="row my-5">
            <div class="col-12 col-md-6 text-md-left text-center"><i class="fa fa-phone"></i> Tel: +55 (11) 4858-0019</div>
            <div class="col-12 col-md-6 text-md-right text-center"><i class="fa fa-envelope"></i> E-mail: atendimento{{ '@' }}targetteleinformatica.com.br</div>
        </div>
    
        <div class="row" style="background: #194687;margin-bottom: -28.5px;position: relative;">
            <div class="col-12 text-color-default d-flex justify-content-center" style="height: 57px;">
                <span class="align-self-center">Av. Amador Bueno da Veiga, 2299 - Sala 01/02 - Penha de França - CEP: 03636-100 - São Paulo - SP</span>
            </div>
        </div>
    </section>
    <section class="contact-maps">
        <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.2607327656724!2d-46.54592208502295!3d-23.523122884701873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5e4e45cdc0d5%3A0x6273c31ef4c2dc76!2sAv.+Amador+Bueno+da+Veiga%2C+100+-+Penha+de+Franca%2C+S%C3%A3o+Paulo+-+SP!5e0!3m2!1spt-BR!2sbr!4v1504139051988"
                width="100%" height="450"
                frameborder="0" style="border:0"
                allowfullscreen></iframe>
    </section>
@endsection