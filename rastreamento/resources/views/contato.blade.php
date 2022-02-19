@extends('layout.app')
@section('conteudo')
    @if(Session::has('success'))
    <div class="alert alert-success" role="alert">
       {{ Session::get('success') }}
    </div>
    @endif

    <div class="container fimdoconteudo">
        <div class="row">
            <div class="col">
                <h1>FORMULÁRIO DE CONTATO</h1>
                <form method="POST" action="/contato" class="mt-4">
                    @csrf
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" name="nome" aria-describedby="nomeHelp">
                        <div id="nomeHelp" class="form-text">Coloque aqui seu nome.</div>
                    </div>

                    <div class="mb-3">
                        <label for="nome" class="form-label">E-mail</label>
                        <input type="text" class="form-control" name="email" aria-describedby="emailHelp">
                        <div id="nomeHelp" class="form-text">Coloque aqui seu e-mail.</div>
                    </div>

                    <div class="mb-3">
                        <label for="nome" class="form-label">E-mail</label>
                        <textarea class="form-control" name="descricao" aria-describedby="descricaoHelp"></textarea>
                        <div id="nomeHelp" class="form-text">Digite aqui o motivo pelo seu contato.</div>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
