<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index(){
        return view('produtos/produtos');
    }

    public function show($id){
        return view('produtos/produto', [
            'id' => $id
        ]);
    }
}
