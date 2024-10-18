{{-- resources/views/book/show.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $book->name }}</h1>
    <p><strong>Autor:</strong> {{ $book->author }}</p>
    <p><strong>Data de Criação:</strong> {{ $book->creation_date }}</p>
    <p><strong>Categoria:</strong> {{ $book->category }}</p>
    <p><strong>Avaliação Indicativa:</strong> {{ $book->indicative_rating }}</p>
    <a href="{{ route('book.index') }}" class="btn btn-primary">Voltar</a>
    <a href="{{ route('book.edit', $book->id) }}" class="btn btn-warning">Editar</a>
</div>
@endsection
