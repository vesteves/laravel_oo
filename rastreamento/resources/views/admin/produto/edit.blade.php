@extends('layout.auth')
@section('conteudo')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>FORMULÁRIO DE ATUALIZAÇÃO</h1>
                <form method="POST" action="/produto/{{ $produto->id }}" enctype="multipart/form-data" class="mt-4">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="imagem" class="form-label">Imagem</label>
                        <br>
                        <img src="{{ $produto->imagem_url }}" style="max-width: 300px;" class="my-3" />
                        <input type="file" class="form-control" name="imagem" aria-describedby="imagemHelp">
                        <div id="imagemHelp" class="form-text">Coloque aqui a imagem do produto.</div>
                    </div>
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" name="nome" aria-describedby="nomeHelp" value="{{ $produto->nome }}">
                        <div id="nomeHelp" class="form-text">Coloque aqui o nome do produto.</div>
                    </div>
                    <div class="mb-3">
                        <label for="preco" class="form-label">Preço</label>
                        <input type="number" class="form-control" name="preco" aria-describedby="precoHelp" value="{{ $produto->preco }}">
                        <div id="precoHelp" class="form-text">Coloque aqui o preço produto en CENTAVOS.</div>
                    </div>
                    <div class="mb-3">
                        <label for="descricao" class="form-label">Descrição</label>
                        <input type="text" class="form-control" name="descricao" aria-describedby="descricaoHelp" value="{{ $produto->descricao }}">
                        <div id="descricaoHelp" class="form-text">Coloque aqui a descrição do produto.</div>
                    </div>
                    <div class="mb-3">
                        <label for="categoria_id" class="form-label">Categoria</label>
                        <select name="categoria_id" id="categoria_id" class="form-control" aria-describedby="categoriaIdHelp">
                            @foreach ($categorias as $categoria)
                            <option value="{{ $categoria->id }}" selected="{{ $produto->categoria && $categoria->id === $produto->categoria->id ? 'selected' : '' }}">{{ $categoria->nome }}</option>
                            @endforeach
                        </select>
                        <div id="categoriaIdHelp" class="form-text">Escolha a categoria do produto.</div>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
