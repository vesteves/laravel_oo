@extends('layout.app')
@section('conteudo')
    <div class="d-flex alignt-items-center justify-content-center mb-5">
        <img src="https://via.placeholder.com/950x350" />
    </div>

    <div class="container fimdoconteudo">
        <div class="row">
            @foreach($produtos as $produto)
            <div class="col-4">
                <div class="card w-100">
                    <img src="https://via.placeholder.com/400" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{ $produto->nome }}</h5>
                        <p class="card-text">{{ $produto->descricao }}</p>
                        <a href="/produto/{{ $produto->id }}" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection