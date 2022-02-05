<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        if ($request->hasFile('imagem')) {
            $arquivo = $request->file('imagem');
            $imagem = $arquivo->store('/public/imagens');
        }

        $produto = Produto::create([
            "nome" => $request->nome,
            "preco" => $request->preco,
            "descricao" => $request->descricao,
            "imagem" => $imagem
        ]);

        return redirect('/admin');
    }
}
