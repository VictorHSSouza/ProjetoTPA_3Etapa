@extends('layouts.app')

@section('content')
    <h1>Detalhes do Livro</h1>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <td>{{ $book->id }}</td>
        </tr>
        <tr>
            <th>Nome</th>
            <td>{{ $book->name }}</td>
        </tr>
        <tr>
            <th>Autor</th>
            <td>{{ $book->autor }}</td>
        </tr>
        <tr>
            <th>Data de Criação</th>
            <td>{{ \Carbon\Carbon::parse($book->creation_date)->format('d/m/Y') }}</td>
        </tr>
        <tr>
            <th>Categoria</th>
            <td>{{ $book->category }}</td>
        </tr>
        <tr>
            <th>Classificação Indicativa</th>
            <td>{{ $book->indicative_rating ?? 'Não informado' }}</td>
        </tr>
    </table>
    <a href="{{ route('books.index') }}" class="btn btn-secondary">Voltar</a>
@endsection
