{{-- resources/views/book/create.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Adicionar Livro</h1>
    <form action="{{ route('book.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control" name="name" required>
        </div>
        <div class="form-group">
            <label for="author">Autor</label>
            <input type="text" class="form-control" name="author" required>
        </div>
        <div class="form-group">
            <label for="creation_date">Data de Criação</label>
            <input type="date" class="form-control" name="creation_date" required>
        </div>
        <div class="form-group">
            <label for="category">Categoria</label>
            <input type="text" class="form-control" name="category">
        </div>
        <div class="form-group">
            <label for="indicative_rating">Avaliação Indicativa</label>
            <input type="number" class="form-control" name="indicative_rating" min="0" max="10" step="0.1">
        </div>
        <button type="submit" class="btn btn-success">Salvar</button>
    </form>
</div>
@endsection
