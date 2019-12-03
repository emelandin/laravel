<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'VemTrocar') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Estilo FontAweomse -->
	<link async defer rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

	<!-- Google Font: Roboto -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet">
    

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Nosso estilo -->
	<link href="{{ asset('css/vemtrocar.css') }}" rel="stylesheet">
</head>

<header>
		
    <nav class="navbar navbar-expand-lg fixed-top">

        <div class="container">
            <a class="navbar-brand" href="#top" title="Página Inicial">
                <img src= "{{ asset('img/vem__trocar-logo.png') }}" alt="Logo VemTrocar" > 
            </a>
        
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
                    
            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav ml-auto">

                    <li class="nav-item active">
                        <a class="nav-link" href="#" title="Chat">Chat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" title="Minha Conta"><svg xmlns="http://www.w3.org/2000/svg " width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>{{ Auth::user()->name }}</a>
                                       
                   
                    
                    <li class="nav-item">
                            <a class="nav-link link__modal" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                    </li>


                    <button type="button" class="btn bg-rosa">Anunciar</button>
                </ul>


            </div>



            
        </div>
    </nav>

    <section class="busca_filtros bg-roxo">
        <div class="container mt-5 mb-4">
            <div class="row">
                <div class="col-12 px-md-4">
                    <form class="box_busca" novalidate="" role="search">
                        <input type="search" placeholder="Eu quero..." name="q" id="q" value="">
                        <span class="separator"></span>
                        <button class="box_busca-btn" type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <div class="container busca_filtros__categorias desktop mt-3 mb-2">
            <div class="row">
                <div class="col-12 px-0 px-md-4">
                    <ul class="busca_filtros__categorias-lista mb-0 list-inline category-stripe pb-3">
    </section>   

<!-- Lista de Produtos -->
@extends('product.show')

@section('content')

@endsection