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
    <h1>LISTAGEM DE CATEGORIAS</h1>
    <table class="table mt-4">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categorias as $categoria)
            <tr>
                <th scope="row">{{ $categoria->id }}</th>
                <td>{{ $categoria->nome }}</td>
                <td><a href="/admin/categoria/{{ $categoria->id }}" class="btn btn-link">Editar</a></td>
                <td>
                    <form method="POST" action="/categoria/{{ $categoria->id }}">
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