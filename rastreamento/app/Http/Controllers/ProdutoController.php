<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use \App\Models\Produto;
use \App\Helpers\Produto as ProdutoHelper;

class ProdutoController extends Controller
{ 
    public function __construct()
    {
        $this->helper = new ProdutoHelper();
    }

    public function show(Produto $produto)
    {
        return view('produto', [
            "produto" => $produto
        ]);
    }

    public function create()
    {
        return view('admin/produto/create');
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
            "imagem" => $imagem
        ]);

        return redirect('/admin');
    }

    public function edit(Produto $produto)
    {
        return view('admin/produto/edit', [
            "produto" => $produto
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
        $produto->save();

        return redirect('/admin');
    }
}
