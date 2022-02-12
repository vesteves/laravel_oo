@extends('layout.auth')
@section('conteudo')
    @if(Session::has('success'))
    <div class="alert alert-success" role="alert">
       {{ Session::get('success') }}
    </div>
    @endif

    @if(Session::has('danger'))
    <div class="alert alert-danger" role="alert">
       {{ Session::get('danger') }}
    </div>
    @endif
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
                <td><a href="/admin/produto/{{ $produto->id }}" class="btn btn-link">Editar</a></td>
                <td>
                    <form method="POST" action="/produto/{{ $produto->id }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-link">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection