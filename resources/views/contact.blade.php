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
            <div class="row">
                <div class="col-12">
                    <button type="submit" class="">Enviar</button>
                </div>
            </div>
        </form>
        
        
    </section>
@endsection