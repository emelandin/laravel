<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    {{-- Visualizando informações sobre {{ $produto ->nome_produto . ' ' . $produto->descricao_produto }} --}}
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4 col-md-4">
                            <img src="{{ $produto->imagem_produto }}" class="rounded-circle" width="230" height="230">
                        </div>
                        <div class="col-sm-8 col-md-8">
                            <div class="form-group">
                                <label for="nome">Nome: </label>
                                <span class="form-control-static">{{ $produto->nome_produto }}</span>
                            </div>
                            <div class="form-group">
                                <label for="saudacao" class="control-label">descricao</label>
                                <span class="form-control-static">{{ $produto ->descricao_produto }}</span>
                            {{-- </div>
                            <div class="form-group">
                                <label for="telefone">Telefone: </label>
                                <span class="form-control-static">{{ $produto ?? ''->phone_number }}</span>
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail: </label>
                                <span class="form-control-static">{{ $produto ?? ''->email }}</span>
                            </div> --}}
                            <div class="form-group">
                                <a href="/Produto">
                                    <button class="btn btn-primary">
                                        Voltar
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
