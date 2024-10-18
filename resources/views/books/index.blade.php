{{-- resources/views/book/index.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Livros</h1>
    <a href="{{ route('books.create') }}" class="btn btn-primary">Adicionar Livro</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Autor</th>
                <th>Data de Criação</th>
                <th>Categoria</th>
                <th>Avaliação Indicativa</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
            <tr>
                <td>{{ $book->id }}</td>
                <td>{{ $book->name }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->creation_date }}</td>
                <td>{{ $book->category }}</td>
                <td>{{ $book->indicative_rating }}</td>
                <td>
                    <a href="{{ route('books.show', $book->id) }}" class="btn btn-info">Ver</a>
                    <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
