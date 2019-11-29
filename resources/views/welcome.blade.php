@extends('layouts.app')

@section('content')
		
	<div class="main__home">


        <!-- banners topo -->
        <div class="container">
            <div class="row">
    
                <div class="col-12">
    
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3" class=""></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="4" class=""></li>
                        </ol>
    
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block " src="https://blog.fmiligrama.com.br/wp-content/uploads/2019/02/02-Banner-Produtos-Miligrama-1200x300.jpg" alt="Primeiro Slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block" src="https://empordaimmo.com/wp-content/uploads/2018/09/sofa-1200x300-3.jpg" alt="Segundo Slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block" src="https://blog.fmiligrama.com.br/wp-content/uploads/2019/01/04-Banner-Produtos-Miligrama-1200x300.jpg" alt="Terceiro Slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block" src="https://edwardscarpet.com/wp-content/uploads/2016/12/Southwind-Carpet-1200x300.jpg" alt="Quarto Slide">
                            </div>
                                <div class="carousel-item">
                                <img class="d-block" src="http://beginner.7muaythai.com/wp-content/uploads/2015/03/boxers-room-best-price-thailand-Muay-Thai-1200x300.jpg" alt="Quinto Slide">
                            </div>
                        </div>
    
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Anterior</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Próximo</span>
                        </a>
                    </div>
    
                </div>
    
            </div>
        </div>
    
        <!-- vitrines  -->
        <div class="container">
    
            <section class="vitrine vitrine_01">
                    <div class="row">
    
                        <div class="col-12">
                            <h2>Nome da Vitrine</h2>
                        </div>
                        
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-header">
                                    <span class="user_photo"></span>
                                </div>
                                <div class="card-body">
                                    <div class="product_image"></div>
                                </div>
                                <div class="card-footer">
                                    <h5 class="card-title">Nome do Produto</h5>
                                    <p class="card-text">informações do produto</p>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-header">
                                    <span class="user_photo"></span>
                                </div>
                                <div class="card-body">
                                    <div class="product_image"></div>
                                </div>
                                <div class="card-footer">
                                    <h5 class="card-title">Nome do Produto</h5>
                                    <p class="card-text">informações do produto</p>
                                </div>
                            </div>
                        </div>
    
    
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-header">
                                    <span class="user_photo"></span>
                                </div>
                                <div class="card-body">
                                    <div class="product_image"></div>
                                </div>
                                <div class="card-footer">
                                    <h5 class="card-title">Nome do Produto</h5>
                                    <p class="card-text">informações do produto</p>
                                </div>
                            </div>
                        </div>
    
    
                    </div>
            </section>
    
    
            <section class="vitrine vitrine_02">
                <div class="row">
                
                    <div class="col-12">
                        <h2>Nome da Vitrine</h2>
                    </div>
    
                    <div class="col-sm-2">
                        <div class="card mini_card">
                            <div class="card-header">
                                <span class="user_photo"></span>
                            </div>
                            <div class="card-body">
                                <div class="product_image"></div>
                            </div>
                            <div class="card-footer">
                                <h5 class="card-title">Nome do Produto</h5>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-sm-2">
                        <div class="card mini_card">
                            <div class="card-header">
                                <span class="user_photo"></span>
                            </div>
                            <div class="card-body">
                                <div class="product_image"></div>
                            </div>
                            <div class="card-footer">
                                <h5 class="card-title">Nome do Produto</h5>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-sm-2">
                        <div class="card mini_card">
                            <div class="card-header">
                                <span class="user_photo"></span>
                            </div>
                            <div class="card-body">
                                <div class="product_image"></div>
                            </div>
                            <div class="card-footer">
                                <h5 class="card-title">Nome do Produto</h5>
                            </div>
                        </div>
                    </div>
    
    
                    <div class="col-sm-2">
                        <div class="card mini_card">
                            <div class="card-header">
                                <span class="user_photo"></span>
                            </div>
                            <div class="card-body">
                                <div class="product_image"></div>
                            </div>
                            <div class="card-footer">
                                <h5 class="card-title">Nome do Produto</h5>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-sm-2">
                        <div class="card mini_card">
                            <div class="card-header">
                                <span class="user_photo"></span>
                            </div>
                            <div class="card-body">
                                <div class="product_image"></div>
                            </div>
                            <div class="card-footer">
                                <h5 class="card-title">Nome do Produto</h5>
                            </div>
                        </div>
                    </div>
    
    
                    <div class="col-sm-2">
                        <div class="card mini_card">
                            <div class="card-header">
                                <span class="user_photo"></span>
                            </div>
                            <div class="card-body">
                                <div class="product_image"></div>
                            </div>
                            <div class="card-footer">
                                <h5 class="card-title">Nome do Produto</h5>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-sm-2">
                        <div class="card mini_card">
                            <div class="card-header">
                                <span class="user_photo"></span>
                            </div>
                            <div class="card-body">
                                <div class="product_image"></div>
                            </div>
                            <div class="card-footer">
                                <h5 class="card-title">Nome do Produto</h5>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-sm-2">
                        <div class="card mini_card">
                            <div class="card-header">
                                <span class="user_photo"></span>
                            </div>
                            <div class="card-body">
                                <div class="product_image"></div>
                            </div>
                            <div class="card-footer">
                                <h5 class="card-title">Nome do Produto</h5>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-sm-2">
                        <div class="card mini_card">
                            <div class="card-header">
                                <span class="user_photo"></span>
                            </div>
                            <div class="card-body">
                                <div class="product_image"></div>
                            </div>
                            <div class="card-footer">
                                <h5 class="card-title">Nome do Produto</h5>
                            </div>
                        </div>
                    </div>
    
    
                    <div class="col-sm-2">
                        <div class="card mini_card">
                            <div class="card-header">
                                <span class="user_photo"></span>
                            </div>
                            <div class="card-body">
                                <div class="product_image"></div>
                            </div>
                            <div class="card-footer">
                                <h5 class="card-title">Nome do Produto</h5>
                            </div>
                        </div>
                    </div>
    
    
                    <div class="col-sm-2">
                        <div class="card mini_card">
                            <div class="card-header">
                                <span class="user_photo"></span>
                            </div>
                            <div class="card-body">
                                <div class="product_image"></div>
                            </div>
                            <div class="card-footer">
                                <h5 class="card-title">Nome do Produto</h5>
                            </div>
                        </div>
                    </div>
    
    
                    <div class="col-sm-2">
                        <div class="card mini_card">
                            <div class="card-header">
                                <span class="user_photo"></span>
                            </div>
                            <div class="card-body">
                                <div class="product_image"></div>
                            </div>
                            <div class="card-footer">
                                <h5 class="card-title">Nome do Produto</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    
    
            <section class="vitrine vitrine_03">
                <div class="row">
    
                    <div class="col-12">
                        <h2>Nome da Vitrine</h2>
                    </div>
                    
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="card">
                                    <div class="card-header">
                                        <span class="user_photo"></span>
                                    </div>
                                    <div class="card-body">
                                        <div class="product_image"></div>
                                    </div>
                                    <div class="card-footer">
                                        <h5 class="card-title">Nome do Produto</h5>
                                        <p class="card-text">informações do produto</p>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-sm-4">
    
                                <div class="row">
                                    <div class="col">
                                        <div class="card mini_card">
                                            <div class="card-header">
                                                <span class="user_photo"></span>
                                            </div>
                                            <div class="card-body">
                                                <div class="product_image"></div>
                                            </div>
                                            <div class="card-footer">
                                                <h5 class="card-title">Nome do Produto</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        
                        
                                <div class="row">
                                    <div class="col">
                                        <div class="card mini_card">
                                            <div class="card-header">
                                                <span class="user_photo"></span>
                                            </div>
                                            <div class="card-body">
                                                <div class="product_image"></div>
                                            </div>
                                            <div class="card-footer">
                                                <h5 class="card-title">Nome do Produto</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    
    
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="card">
                                    <div class="card-header">
                                        <span class="user_photo"></span>
                                    </div>
                                    <div class="card-body">
                                        <div class="product_image"></div>
                                    </div>
                                    <div class="card-footer">
                                        <h5 class="card-title">Nome do Produto</h5>
                                        <p class="card-text">informações do produto</p>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-sm-4">
    
                                <div class="row">
                                    <div class="col">
                                        <div class="card mini_card">
                                            <div class="card-header">
                                                <span class="user_photo"></span>
                                            </div>
                                            <div class="card-body">
                                                <div class="product_image"></div>
                                            </div>
                                            <div class="card-footer">
                                                <h5 class="card-title">Nome do Produto</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        
                        
                                <div class="row">
                                    <div class="col">
                                        <div class="card mini_card">
                                            <div class="card-header">
                                                <span class="user_photo"></span>
                                            </div>
                                            <div class="card-body">
                                                <div class="product_image"></div>
                                            </div>
                                            <div class="card-footer">
                                                <h5 class="card-title">Nome do Produto</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                   
                </div> 
            </section>
    
        </div>
    
    
    
            
            
    </div>

    @endsection 
    