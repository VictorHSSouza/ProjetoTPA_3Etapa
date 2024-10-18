{{-- <resources>
<views>
<librarian></librarian>/edit.blade.php --}}
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Bibliotecário</h1>
        <form action="{{ route('librarian.update', $librarian->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $librarian->name }}" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $librarian->email }}" required>
            </div>
            <div class="form-group">
                <label for="registration">Numero de Registro</label>
                <input type="text" class="form-control" id="registration" name="registration" value="{{ $librarian->registration }}" required>
            </div>
            <div class="form-group">
                <label for="phone">Telefone</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{ $librarian->phone }}">
            </div>
            <button type="submit" class="btn btn-warning">Atualizar</button>
            <a href="{{ route('librarian.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
