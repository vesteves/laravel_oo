<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use \App\Models\Categoria;
use \App\Mail\ContatoEnviado;

class HomeController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();

        return view('home', [
            "categorias" => $categorias,
        ]);
    }

    public function contato()
    {
        return view('contato');
    }

    public function enviar(Request $request)
    {
        Mail::to('teste@teste.com.br')->send(new ContatoEnviado($request->all()));

        return back()->with('success', 'E-mail enviado com sucesso');
        # code...
        // ContatoEnviado::class
    }
}
