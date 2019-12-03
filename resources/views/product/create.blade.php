@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h1>Novo Produto</h1>
                <div class="card">
                    <div class="card-header">
                        Preencha os campos para adicionar um novo contato em sua agenda
                    </div>
                    <div class="card-body">
                        <form action="{{ url('products/create') }}" method="POST" enctype="multipart/form-data">

                            @csrf
                            {{ method_field('POST') }}

                            <div class="form-group">
                                <label for="nome">Produto</label>
                                <input type="text" class="form-control{{$errors->has('nome_produto') ? ' is-invalid':''}}" value="{{ old('nome_produto') }}" id="nome" name="nome">
                                <div class="invalid-feedback">{{ $errors->first('nome_produto') }}</div>
                            </div>

                            <div class="form-group">
                                <label for="sobrenome">Descrição</label>
                                <input type="text" class="form-control{{$errors->has('descricao_produto') ? ' is-invalid':''}}" value="{{ old('descricao_produto') }}" id="sobrenome" name="sobrenome">
                                <div class="invalid-feedback">{{ $errors->first('descricao_produto') }}</div>
                            </div>

                            <div class="form-group">
                                <label for="telefone">Tipo</label>
                                <input type="text" class="form-control{{$errors->has('tipo_produto') ? ' is-invalid':''}}" value="{{ old('tipo_produto') }}" id="telefone" name="telefone">
                                <div class="invalid-feedback">{{ $errors->first('tipo_produto') }}</div>
                            </div>

                            {{-- <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="email" class="form-control{{$errors->has('email') ? ' is-invalid':''}}" value="{{ old('email') }}" id="email" name="email" placeholder="email@provedor.com.br">
                                <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                            </div> --}}

                            <div class="form-group">
                                <label for="avatar">Imagem</label>
                                <input type="file" class="form-control-file{{$errors->has('imagem_produto') ? ' is-invalid':''}}" id="avatar" name="imagem_produto">
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
