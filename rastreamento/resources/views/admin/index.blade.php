@extends('layout.auth')
@section('conteudo')
    <h1>LISTAGEM DE PRODUTOS</h1>
    <table class="table mt-4">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Preço</th>
                <th colspan="2">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produtos as $produto)
            <tr>
                <th scope="row">{{ $produto->id }}</th>
                <td>{{ $produto->nome }}</td>
                <td>{{ $produto->preco }}</td>
                <td><a href="">Editar</a></td>
                <td>Excluir</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection