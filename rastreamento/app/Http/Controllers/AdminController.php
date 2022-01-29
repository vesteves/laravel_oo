<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Models\Produto;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin/index', [
            "produtos" => Produto::all()
        ]);
    }
}
