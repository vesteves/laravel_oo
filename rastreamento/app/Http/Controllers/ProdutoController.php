<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use \App\Models\Produto;
use \App\Helpers\Produto as ProdutoHelper;

use \App\Models\Categoria;

class ProdutoController extends Controller
{
    public function __construct()
    {
        $this->helper = new ProdutoHelper();
        $this->middleware('auth', ['except' => ['show']]);
    }

    public function show(Produto $produto)
    {
        return view('produto', [
            "produto" => $produto
        ]);
    }

    public function create()
    {
        return view('admin/produto/create', [
            "categorias" => Categoria::all()
        ]);
    }

    public function store(Request $request)
    {
        if ($request->hasFile('imagem')) {
            $imagem = $this->helper->salvarImagem($request->file('imagem'));
        }

        $produto = Produto::create([
            "nome" => $request->nome,
            "preco" => $request->preco,
            "descricao" => $request->descricao,
            "imagem" => $imagem,
            "categoria_id" => $request->categoria_id
        ]);

        return redirect('/admin')->with('success', 'Produto criado com sucesso');
    }

    public function edit(Produto $produto)
    {
        return view('admin/produto/edit', [
            "produto" => $produto,
            "categorias" => Categoria::all()
        ]);
    }

    public function update(Produto $produto, Request $request)
    {
        if ($request->hasFile('imagem')) {
            $produto->imagem = $this->helper->salvarImagem($request->file('imagem'));
        }

        $produto->nome = $request->nome;
        $produto->preco = $request->preco;
        $produto->descricao = $request->descricao;
        $produto->categoria_id = $request->categoria_id;
        $produto->save();

        return redirect('/admin')->with('success', 'Produto atualizado com sucesso');
    }

    public function destroy(Produto $produto)
    {
        $produto->delete();
        return redirect('/admin')->with('danger', 'Produto removido.');
    }
}
