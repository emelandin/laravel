@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        Produtos
                    </div>
                    <div class="card-body">
                        <form action="{{ url('produto/edit/'.$produto->id) }}" method="POST" enctype="multipart/form-data">

                            @csrf
                            {{ method_field('POST') }}

                            <div class="form-group">
                                <img src="{{url($produto->imagem_produto)}}" class="rounded-circle" width="230" height="230">
                            </div>

                            <div class="form-group">
                                <label for="nome_produto">Nome</label>
                                <input type="text" class="form-control{{$errors->has('nome_produto') ? ' is-invalid':''}}" value="{{ $produto->nome_produto }}" id="nome_produto" name="nome_produto">
                                <div class="invalid-feedback">{{ $errors->first('nome_produto') }}</div>
                            </div>

                            <div class="form-group">
                                <label for="tipo_produto">Tipo</label>
                                <input type="text" class="form-control{{$errors->has('tipo_produto') ? ' is-invalid':''}}" value="{{ $produto->tipo_produto }}" id="tipo_produto" name="tipo_produto">
                                <div class="invalid-feedback">{{ $errors->first('tipo_produto') }}</div>
                            </div>

                            <div class="form-group">
                                <label for="descricao_produto">Descrição</label>
                                <input type="text" class="form-control{{$errors->has('descricao_produto') ? ' is-invalid':''}}" value="{{ $produto->descricao_produto }}" id="descricao_produto" name="descricao_produto">
                                <div class="invalid-feedback">{{ $errors->first('descricao_produto') }}</div>
                            </div>

                            {{-- <div class="form-group">
                                <label for="telefone">Telefone</label>
                                <input type="text" class="form-control{{$errors->has('telefone') ? ' is-invalid':''}}" value="{{ $produto->tipo_produto }}" id="telefone" name="telefone">
                                <div class="invalid-feedback">{{ $errors->first('telefone') }}</div>
                            </div>

                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="email" class="form-control{{$errors->has('email') ? ' is-invalid':''}}" value="{{ $produto->email }}" id="email" name="email" placeholder="email@example.com.br">
                                <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                            </div> --}}

                            <div class="form-group">
                                <label for="imagem_produto">Produto</label>
                                <input type="file" class="form-control-file{{$errors->has('imagem_produto') ? ' is-invalid':''}}" id="imagem_produto" name="imagem_produto">
                                <div class="invalid-feedback" style="display:inherit">{{ $errors->first('imagem_produto') }}</div>
                            </div>

                            <div class="card-footer text-right">
                                <button type="submit" class="btn btn-primary">Salvar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
