<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Produto;
use App\User;
// use App\Http\Requests\Request;

class ProdutoController extends Controller
{
    public function index(){
        $user_id = Auth::user()->id;
        $produtos = Produto::where('user_id', '=', $user_id)->paginate(5);

        return view('product\index')->with('product', $produtos);
    }

    public function show($id){
        $produto = Produto::find($id);

        return view('product\show')->with('product', $produto);
    }

    public function create(){
        return view('product\create');
    }

    public function store(Request $request){
        $request->all();
        $arquivo = $request->file('imagem_produto');

        if (empty($arquivo)) {
            $caminhoRelativo = null;
        } else {
            $arquivo->storePublicly('uploads');
            $caminhoAbsoluto = public_path()."/storage/uploads";
            $nomeArquivo = $arquivo->getClientOriginalName();
            $caminhoRelativo = "storage/uploads/$nomeArquivo";
            $arquivo->move($caminhoAbsoluto, $nomeArquivo);
        }

        $produto = Produto::create([
            'nome_produto' => $request->input('nome_produto'),
            'descricao_produto' => $request->input('descricao_produto'),
            'tipo_produto' => $request->input('tipo_produto'),
            'imagem_produto' => $caminhoRelativo
             //'user_id' => $user_id
        ]);
    }

    public function edit($id){
        $produto = Produto::find($id);

        return view('product.edit')->with('produto', $produto);
    }

    public function update(Request $request){
        $produto = Produto::find($request->input('id'));

        $request->all();

        $arquivo = $request->file('imagem_produto');

        if (empty($arquivo)) {
            $caminhoRelativo = $produto->imagem_produto;
        } else {
            $arquivo->storePublicly('uploads');
            $caminhoAbsoluto = public_path()."/storage/uploads";
            $nomeArquivo = $arquivo->getClientOriginalName();
            $caminhoRelativo = "storage/uploads/$nomeArquivo";
            $arquivo->move($caminhoAbsoluto, $nomeArquivo);
        }

        $produto->nome_produto = $request->input('nome_produto');
        $produto->descricao_produto = $request->input('descricao_produto');
        $produto->tipo_produto = $request->input('tipo_produto');
        $produto->imagem_produto = $caminhoRelativo;

        $produto->save();

        return redirect('/product/show/'.$produto->id);
    }

    public function destroy($id){
        $produto = Produto::find($id);

        $produto->delete();

        return redirect('/product');
    }

    public function search(Request $request){
        $search = $request->input('search');

        $produtos = Produto::
              where('nome_produto', 'like', '%'.$search.'%')
              ->orWhere('descricao_produto', 'like', '%'.$search.'%')
              ->paginate(5);

        return view('product.index')->with(['produto' => $produtos, 'search' => $search]);
    }
}