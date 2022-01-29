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
}
