@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h1>Cadastro de Produto</h1>
                <div class="card">
                    <div class="card-header">
                        Preencha os campos para adicionar um novo produto
                    </div>
                    <div class="card-body">
                        <form action="{{ url('produto/create') }}" method="POST" enctype="multipart/form-data">

                            @csrf
                            {{ method_field('POST') }}

                            <div class="form-group">
                                <label for="nome_produto">Produto</label>
                                <input type="text" class="form-control{{$errors->has('nome_produto') ? ' is-invalid':''}}" value="{{ old('nome_produto') }}" id="nome_produto" name="nome_produto">
                                <div class="invalid-feedback">{{ $errors->first('nome_produto') }}</div>
                            </div>

                            <div class="form-group">
                                <label for="descricao_produto">Descrição</label>
                                <input type="text" class="form-control{{$errors->has('descricao_produto') ? ' is-invalid':''}}" value="{{ old('descricao_produto') }}" id="descricao_produto" name="descricao_produto">
                                <div class="invalid-feedback">{{ $errors->first('descricao_produto') }}</div>
                            </div>

                            <div class="form-group">
                                <label for="tipo_produto">Tipo</label>
                                <input type="text" class="form-control{{$errors->has('tipo_produto') ? ' is-invalid':''}}" value="{{ old('tipo_produto') }}" id="tipo_produto" name="tipo_produto">
                                <div class="invalid-feedback">{{ $errors->first('tipo_produto') }}</div>
                            </div>

                            {{-- <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="email" class="form-control{{$errors->has('email') ? ' is-invalid':''}}" value="{{ old('email') }}" id="email" name="email" placeholder="email@provedor.com.br">
                                <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                            </div> --}}

                            <div class="form-group">
                                <label for="imagem_produto">Fotos</label>
                                <input type="file" class="form-control-file{{$errors->has('imagem_produto') ? ' is-invalid':''}}" id="imagem_produto" name="imagem_produto">
                                <div class="invalid-feedback" style="display:inherit">{{ $errors->first('imagem_produto') }}</div>
                            </div>

                            <div class="card-footer text-right">
                                <a href="#" onclick="history.back()" class="btn btn-secondary">Voltar</a>
                                <button type="submit" class="btn btn-primary">Salvar</button>
                            </div>
                        </form>
                        <div class="message alert-success d-none p-2 my-4">
                            Produto adicionado com sucesso
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
