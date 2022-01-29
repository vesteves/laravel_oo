@extends('layout.auth')
@section('conteudo')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>FORMULÁRIO DE CRIAÇÃO</h1>
                <form method="POST" action="/produto" class="mt-4">
                    @csrf
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" name="nome" aria-describedby="nomeHelp">
                        <div id="nomeHelp" class="form-text">Coloque aqui o nome do produto.</div>
                    </div>
                    <div class="mb-3">
                        <label for="preco" class="form-label">Preço</label>
                        <input type="number" class="form-control" name="preco" aria-describedby="precoHelp">
                        <div id="precoHelp" class="form-text">Coloque aqui o preço produto en CENTAVOS.</div>
                    </div>
                    <div class="mb-3">
                        <label for="descricao" class="form-label">Descrição</label>
                        <input type="text" class="form-control" name="descricao" aria-describedby="descricaoHelp">
                        <div id="descricaoHelp" class="form-text">Coloque aqui a descrição do produto.</div>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
@endsection