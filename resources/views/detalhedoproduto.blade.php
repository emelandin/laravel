@extends('layouts.app')

@section('content')

<div class="main__detalheProduto">


    <!-- produto  -->
	<div class="container container--infosProduto">

        <div class="row">
            <div class="col-lg-7">
                <div class="row produto__imagem">
                    <div class="produto__imagem_foto"></div>

                    <div class="produto__imagem_thumbs">
                        <div class="produto__imagem_thumbs--imagem"></div>
                        <div class="produto__imagem_thumbs--imagem active"></div>
                        <div class="produto__imagem_thumbs--imagem"></div>
                        <div class="produto__imagem_thumbs--imagem"></div>
                    </div>
                </div>

                <div class="row produto__perguntas">
                    <form>
                        <div class="form-row align-items-center">
                            <div class="col">
                            <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="pergunte ao anunciante">
                            </div>
                            <div class="col-auto">
                            <button type="submit" class="btn btn-perguntar mb-2">perguntar</button>
                            </div>
                        </div>
                    </form>
                </div>
                
            </div>

            <div class="col-lg-5 produto__descricao">
                <div class="produto__descricao--nome">
                    <h2>Nome do produto</h2>
                </div>

                <div class="produto__descricao--trocoPor">
                    <span>Troco por:</span>
                    <ul>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                    </ul>
                </div>

                <div class="produto__descricao_botoesDeAcao">

                    <div class="produto__descricao--btn">
                        <button type="button" class="detalhe__produto--btn bg-rosa">eu quero</button>
                    </div>

                    <div class="produto__descricao--btn">
                        <button type="button" class="detalhe__produto--btn bg-transparente">fazer oferta</button>
                    </div>

                    <div class="produto__descricao--btn">
                        <button type="button" class="detalhe__produto--btn bg-transparente">adicionar aos favoritos</button>
                    </div>

                </div>

                <div class="produto__descricao_descricaoDoProduto">
                    
                    <span class="produto__descricao--titulo roxo">DESCRIÇÃO DO PRODUTO</span>
                    <div class="produto__descricao--conteudo">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer laoreet ipsum massa, eget rhoncus eros ultrices at. Sed et mi lobortis, semper sem quis, iaculis ante. Aenean faucibus ultrices urna, quis interdum nisl porttitor sed. </p>
                    </div>

                    <div class="produto__descricao--condicaoCodigo">
                        <div class="produto__descricao--condicaoCodigo_conteudo">
                            <span class="produto__descricao--titulo roxo">condição</span>
                            <span><p>nunca usado</p></span>
                        </div>

                        <div class="produto__descricao--condicaoCodigo_conteudo">
                            <span class="produto__descricao--titulo roxo">código do produto</span>
                            <span><p>#000</p></span>
                        </div>    
                    </div>

                </div>

            </div>
        </div>


    </div>
    


	<!-- vitrine  -->
	<div class="container">

        <section class="vitrine vitrine_01">

            <div class="row">
                <h2>mais produtos disponíveis para troca!</h2>
            </div>

            <div class="row">
                
                <div class="col-lg-4">
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

                <div class="col-lg-4">
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


                <div class="col-lg-4">
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



        <section class="vitrine vitrine_01">

            <div class="row">
                <h2>você também vai curtir</h2>
            </div>

            <div class="row">
                
                <div class="col-lg-4">
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

                <div class="col-lg-4">
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


                <div class="col-lg-4">
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

    </div>
</div>

@endsection