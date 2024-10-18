{{-- <resources>
<views>
<librarian></librarian>/create.blade.php --}}
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Adicionar Bibliotecário</h1>
        <form action="{{ route('librarian.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="registration">Numero de Registro</label>
                <input type="text" class="form-control" id="registration" name="registration" required>
            </div>
            <div class="form-group">
                <label for="phone">Telefone</label>
                <input type="text" class="form-control" id="phone" name="phone">
            </div>
            <button type="submit" class="btn btn-success">Salvar</button>
            <a href="{{ route('librarian.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
