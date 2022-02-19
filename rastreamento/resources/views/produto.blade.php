@extends('layout.app')
@section('conteudo')
<div class="text-center mb-4">
    <h1>Produto {{ $produto->nome }}</h1>
</div>

<div class="container fimdoconteudo">
    <div class="row">
        <div class="col">
            <img src="https://via.placeholder.com/400" alt="">
        </div>
        <div class="col">
            <div>Preço: {{ $produto->preco }}</div>
            <div>Descrição: {{ $produto->descricao }}</div>
            <a href="{{ Auth::check() ? '/checkout' : '/login' }}" class="btn btn-primary">Comprar</button>
            <a href="/" class="btn btn-primary">Voltar</a>
        </div>
    </div>
</div>
@endsection
