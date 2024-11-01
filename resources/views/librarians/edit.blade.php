{{-- resources/views/librarians/edit.blade.php --}}
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Bibliotecário</h1>

        <form action="{{ route('librarians.update', $librarian->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $librarian->name }}" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ $librarian->email }}" required>
            </div>

            <div class="form-group">
                <label for="birth_date">Data de Nascimento:</label>
                <input type="date" name="birth_date" id="birth_date" class="form-control" value="{{ $librarian->birth_date }}" required>
            </div>

            <div class="form-group">
                <label for="phone">Telefone:</label>
                <input type="text" name="phone" id="phone" class="form-control" value="{{ $librarian->phone }}" required>
            </div>

            <div class="form-group mb-3">
                <label for="cpf">CPF:</label>
                <input type="text" name="cpf" id="cpf" class="form-control" value="{{ $librarian->cpf }}" required>
            </div>

            <button type="submit" class="btn btn-warning">Atualizar</button>
            <a href="{{ route('librarians.index') }}" class="btn btn-secondary">Voltar</a>
        </form>
    </div>
@endsection
