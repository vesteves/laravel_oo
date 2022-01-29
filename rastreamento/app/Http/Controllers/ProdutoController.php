<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Models\Produto;

class ProdutoController extends Controller
{
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
        Produto::create([
            "nome" => $request->nome,
            "preco" => $request->preco,
            "descricao" => $request->descricao,
        ]);

        return redirect('/admin');
    }
}
