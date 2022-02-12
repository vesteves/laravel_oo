<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use \App\Models\Categoria;

class CategoriaController extends Controller
{ 
    public function index()
    {
        return view('admin/categoria/index', ["categorias" => Categoria::all()]);
    }

    public function show(Categoria $categoria)
    {
        return view('categoria', [
            "categoria" => $categoria
        ]);
    }

    public function create()
    {
        return view('admin/categoria/create');
    }

    public function store(Request $request)
    {
        $categoria = Categoria::create([
            "nome" => $request->nome,
        ]);

        return redirect('/admin/categoria')->with('success', 'Categoria criada com sucesso');
    }

    public function edit(Categoria $categoria)
    {
        return view('admin/categoria/edit', [
            "categoria" => $categoria
        ]);
    }

    public function update(Categoria $categoria, Request $request)
    {
        $categoria->nome = $request->nome;
        $categoria->save();

        return redirect('/admin/categoria')->with('success', 'Categoria atualizada com sucesso');
    }

    public function destroy(Categoria $categoria)
    {
        $categoria->delete();
        return redirect('/admin/categoria')->with('danger', 'Categoria removida.');
    }
}
