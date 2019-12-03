<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Produto;
use App\User;
use App\Http\Requests\ProdutoRequest;

class ProdutoController extends Controller
{
    public function index(){
        $user_id = Auth::user()->id;
        $produtos = Produto::where('user_id', '=', $user_id)->paginate(5);

        return view('product.index')->with('products', $produtos);
    }

    public function show($id){
        $produto = Produto::find($id);

        return view('product.show')->with('product', $produto);
    }

    public function create(){
        return view('create');
    }

    public function store(ProdutoRequest $request){
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
            'nome_produto' => $request->input('nome'),
            'descricao_produto' => $request->input('descricao'),
            'tipo_produto' => $request->input('tipo'),
            'imagem_produto' => $caminhoRelativo,
            'user_id' => Auth::user()->id
        ]);

        return redirect('/products');
    }

    public function edit($id){
        $produto = Produto::find($id);

        return view('product.edit')->with('product', $produto);
    }

    public function update(ProdutoRequest $request, $id){
        $produto = Produto::find($id);

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

        $produto->nome_produto = $request->input('nome');
        $produto->descricao_produto = $request->input('descricao');
        $produto->tipo_produto = $request->input('tipo');
        $produto->imagem_produto = $caminhoRelativo;

        $produto->save();

        return redirect('/products/show/'.$produto->id);
    }

    public function destroy($id){
        $produto = Produto::find($id);

        $produto->delete();

        return redirect('/products');
    }

    public function search(Request $request){
        $search = $request->input('search');

        $produtos = Produto::
              where('nome_produto', 'like', '%'.$search.'%')
              ->orWhere('descricao_produto', 'like', '%'.$search.'%')
              ->paginate(5);

        return view('product.index')->with(['products' => $produtos, 'search' => $search]);
    }
}