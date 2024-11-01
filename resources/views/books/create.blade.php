@extends('layouts.app')

@section('content')
    <h1>Criar Novo Livro</h1>
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="autor">Autor</label>
            <input type="text" class="form-control" id="autor" name="autor" required>
        </div>
        <div class="form-group">
            <label for="creation_date">Data de Criação</label>
            <input type="date" class="form-control" id="creation_date" name="creation_date" required>
        </div>
        <div class="form-group">
            <label for="category">Categoria</label>
            <input type="text" class="form-control" id="category" name="category" required>
        </div>
        <div class="form-group mb-3">
            <label for="indicative_rating">Classificação Indicativa</label>
            <input type="number" class="form-control" id="indicative_rating" name="indicative_rating" min="0" max="18" step="0.1">
        </div>
        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="{{ route('books.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
