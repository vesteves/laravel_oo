@extends('layout.auth')
@section('conteudo')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>FORMULÁRIO DE ATUALIZAÇÃO</h1>
                <form method="POST" action="/categoria/{{ $categoria->id }}" enctype="multipart/form-data" class="mt-4">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" name="nome" aria-describedby="nomeHelp" value="{{ $categoria->nome }}">
                        <div id="nomeHelp" class="form-text">Coloque aqui o nome do categoria.</div>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
@endsection