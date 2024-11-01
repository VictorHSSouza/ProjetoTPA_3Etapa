@extends('layouts.app')
@php
    use Carbon\Carbon;
@endphp
@section('content')
    <h1>Editar Livro</h1>
    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $book->name }}" required>
        </div>
        <div class="form-group">
            <label for="autor">Autor</label>
            <input type="text" class="form-control" id="autor" name="autor" value="{{ $book->autor }}" required>
        </div>
        <div class="form-group">
            <label for="creation_date">Data de Criação</label>
            <input type="date" class="form-control" id="creation_date" name="creation_date" value="{{ Carbon::parse($book->creation_date)->format('Y-m-d') }}" required>
        </div>
        <div class="form-group">
            <label for="category">Categoria</label>
            <input type="text" class="form-control" id="category" name="category" value="{{ $book->category }}" required>
        </div>
        <div class="form-group mb-3">
            <label for="indicative_rating">Classificação Indicativa</label>
            <input type="number" class="form-control" id="indicative_rating" name="indicative_rating" value="{{ $book->indicative_rating }}" min="0" max="18">
        </div>
        <button type="submit" class="btn btn-warning">Atualizar</button>
        <a href="{{ route('books.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
