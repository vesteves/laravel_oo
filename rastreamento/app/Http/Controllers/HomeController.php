<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Models\Produto;

class HomeController extends Controller
{
    public function index()
    {
        $produtos = Produto::all();
        $meunome = "Vitor";

        return view('home', [
            "produtos" => $produtos,
            "meunome" => $meunome
        ]);
    }
}
