@extends('layouts.app')

@section('content')
    <h1>Lista de Livros</h1>
    <a href="{{ route('books.create') }}" class="btn btn-primary mb-3">Adicionar Novo Livro</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Autor</th>
                <th>Data de Criação</th>
                <th>Categoria</th>
                <th>Classificação Indicativa</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->name }}</td>
                    <td>{{ $book->autor }}</td>
                    <td>{{ \Carbon\Carbon::parse($book->creation_date)->format('d/m/Y') }}</td>
                    <td>{{ $book->category }}</td>
                    <td>{{ $book->indicative_rating ?? 'Não informado' }}</td>
                    <td>
                        <a href="{{ route('books.show', $book->id) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
